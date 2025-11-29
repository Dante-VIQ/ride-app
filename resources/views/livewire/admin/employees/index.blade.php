<div class="max-w-5xl w-full bg-white p-6 shadow rounded-xl">

        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-semibold text-gray-700">Employees</h2>

            <input type="text" wire:model.live="search" placeholder="Search employees..."
                class="border rounded-lg px-3 py-2 w-64">

            <a href="{{ route('admin.employees') }}" class="px-4 py-2 bg-teal-600 text-white rounded-lg">
                Add Employee
            </a>

        </div>

        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-gray-100 text-left text-gray-700">
                    <th class="p-3">Name</th>
                    <th class="p-3">Employee ID</th>
                    <th class="p-3">Phone</th>
                    <th class="p-3">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($employees as $employee)
                    <tr class="border-t">
                        <td class="p-3">{{ $employee->employee_name }}</td>
                        <td class="p-3">{{ $employee->employee_id }}</td>
                        <td class="p-3">{{ $employee->phone_number }}</td>
                        <td class="p-3">
                            <a href="{{ route('admin.user_profile', $employee->id) }}"
                                class="px-4 py-2 bg-teal-600 text-white rounded-lg">
                                View Profile
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-4">
            {{ $employees->links() }}
        </div>

    </div>

