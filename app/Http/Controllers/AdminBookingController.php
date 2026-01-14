<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminBookingController extends Controller
{
    public function __construct()
    {
        // Add admin middleware if you have authentication
        // $this->middleware('auth');
        // $this->middleware('admin');
    }

    public function index(Request $request)
    {
        $query = Booking::latest();

        // Search functionality
        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('booking_reference', 'LIKE', "%{$search}%")
                  ->orWhere('first_name', 'LIKE', "%{$search}%")
                  ->orWhere('last_name', 'LIKE', "%{$search}%")
                  ->orWhere('phone', 'LIKE', "%{$search}%")
                  ->orWhere('email', 'LIKE', "%{$search}%")
                  ->orWhere('pickup_address', 'LIKE', "%{$search}%")
                  ->orWhere('dropoff_address', 'LIKE', "%{$search}%");
            });
        }

        // Filter by status
        if ($request->has('status') && $request->status !== 'all') {
            $query->where('status', $request->status);
        }

        // Filter by date range
        if ($request->has('date_from') && $request->date_from) {
            $query->whereDate('pickup_datetime', '>=', $request->date_from);
        }

        if ($request->has('date_to') && $request->date_to) {
            $query->whereDate('pickup_datetime', '<=', $request->date_to);
        }

        // Filter by service type
        if ($request->has('service_type') && $request->service_type !== 'all') {
            $query->where('service_type', $request->service_type);
        }

        $bookings = $query->paginate(20);

        // Get counts for status badges
        $statusCounts = [
            'all' => Booking::count(),
            'pending' => Booking::where('status', 'pending')->count(),
            'confirmed' => Booking::where('status', 'confirmed')->count(),
            'completed' => Booking::where('status', 'completed')->count(),
            'cancelled' => Booking::where('status', 'cancelled')->count(),
        ];

        // Get unique service types for filter
        $serviceTypes = Booking::select('service_type')
            ->distinct()
            ->pluck('service_type')
            ->filter()
            ->values();

        return view('admin.bookings.index', compact('bookings', 'statusCounts', 'serviceTypes'));
    }

    public function show(Booking $booking)
    {
        return view('admin.bookings.show', compact('booking'));
    }

    public function edit(Booking $booking)
    {
        return view('admin.bookings.edit', compact('booking'));
    }

    public function update(Request $request, Booking $booking)
    {
        $validated = $request->validate([
            'status' => 'required|in:pending,confirmed,completed,cancelled',
            'driver_name' => 'nullable|string|max:100',
            'driver_phone' => 'nullable|string|max:20',
            'vehicle_number' => 'nullable|string|max:20',
            'actual_cost' => 'nullable|numeric|min:0',
            'notes' => 'nullable|string|max:500',
        ]);

        // Log status changes
        if ($booking->status !== $request->status) {
            Log::info("Booking status changed: {$booking->booking_reference} from {$booking->status} to {$request->status}");
        }

        $booking->update($validated);

        // If you want to send status update emails to customers
        if ($request->status === 'confirmed' && $booking->email) {
            // You can create a BookingConfirmed mail class
            // Mail::to($booking->email)->send(new BookingConfirmed($booking));
        }

        return redirect()->route('admin.bookings.show', $booking)
            ->with('success', 'Booking updated successfully.');
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();

        Log::info("Booking deleted: {$booking->booking_reference}");

        return redirect()->route('admin.bookings.index')
            ->with('success', 'Booking deleted successfully.');
    }

    public function export(Request $request)
    {
        $query = Booking::query();

        // Apply filters if any
        if ($request->has('status') && $request->status !== 'all') {
            $query->where('status', $request->status);
        }

        if ($request->has('date_from') && $request->date_from) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }

        if ($request->has('date_to') && $request->date_to) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        $bookings = $query->get();

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="bookings_' . date('Y-m-d_H-i') . '.csv"',
        ];

        $callback = function() use ($bookings) {
            $file = fopen('php://output', 'w');

            // Add BOM for UTF-8
            fputs($file, $bom = (chr(0xEF) . chr(0xBB) . chr(0xBF)));

            // Header row
            fputcsv($file, [
                'Booking Reference',
                'Customer Name',
                'Phone',
                'Email',
                'Service Type',
                'Pickup Address',
                'Drop-off Address',
                'Pickup Date & Time',
                'Return Date & Time',
                'Passengers',
                'Wheelchair',
                'Status',
                'Estimated Cost',
                'Actual Cost',
                'Created Date',
            ]);

            // Data rows
            foreach ($bookings as $booking) {
                fputcsv($file, [
                    $booking->booking_reference,
                    $booking->first_name . ' ' . $booking->last_name,
                    $booking->phone,
                    $booking->email,
                    ucfirst($booking->service_type),
                    $booking->pickup_address,
                    $booking->dropoff_address,
                    $booking->pickup_datetime->format('Y-m-d H:i'),
                    $booking->return_datetime ? $booking->return_datetime->format('Y-m-d H:i') : 'N/A',
                    $booking->passengers,
                    $booking->wheelchair_required ? 'Yes' : 'No',
                    ucfirst($booking->status),
                    '$' . number_format($booking->estimated_cost, 2),
                    $booking->actual_cost ? '$' . number_format($booking->actual_cost, 2) : 'N/A',
                    $booking->created_at->format('Y-m-d H:i'),
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    public function dashboard()
    {
        $today = now()->format('Y-m-d');
        $weekStart = now()->startOfWeek()->format('Y-m-d');
        $weekEnd = now()->endOfWeek()->format('Y-m-d');
        $monthStart = now()->startOfMonth()->format('Y-m-d');
        $monthEnd = now()->endOfMonth()->format('Y-m-d');

        $stats = [
            'total' => Booking::count(),
            'pending' => Booking::where('status', 'pending')->count(),
            'confirmed' => Booking::where('status', 'confirmed')->count(),
            'today' => Booking::whereDate('pickup_datetime', $today)->count(),
            'this_week' => Booking::whereBetween('pickup_datetime', [$weekStart, $weekEnd])->count(),
            'this_month' => Booking::whereBetween('pickup_datetime', [$monthStart, $monthEnd])->count(),
            'revenue_estimated' => Booking::sum('estimated_cost'),
            'revenue_actual' => Booking::sum('actual_cost') ?? 0,
        ];

        // Recent bookings
        $recentBookings = Booking::latest()->take(10)->get();

        // Bookings by service type
        $serviceTypeStats = Booking::selectRaw('service_type, COUNT(*) as count')
            ->groupBy('service_type')
            ->orderBy('count', 'desc')
            ->get();

        // Bookings by status chart
        $statusStats = Booking::selectRaw('status, COUNT(*) as count')
            ->groupBy('status')
            ->get();

        return view('analysis', compact('stats', 'recentBookings', 'serviceTypeStats', 'statusStats'));
    }
}
