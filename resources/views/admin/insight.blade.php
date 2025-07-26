  <div class="grid grid-cols-3 gap-4 mb-6">
        <div class="bg-white p-4 rounded shadow">
            <h3 class="text-lg font-semibold">Total Users</h3>
            <p class="text-2xl">{{ $this->userCount }}</p>
        </div>
        <div class="bg-white p-4 rounded shadow">
            <h3 class="text-lg font-semibold">Total Services</h3>
            <p class="text-2xl">{{ $this->serviceCount }}</p>
        </div>
        <div class="bg-white p-4 rounded shadow">
            <h3 class="text-lg font-semibold">Total Appointments</h3>
            <p class="text-2xl">{{ $this->appointmentCount }}</p>
        </div>
    </div>