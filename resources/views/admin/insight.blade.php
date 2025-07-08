<div class="row">
    <div class="col-sm-12">
        <div
            class="statistics-details d-flex align-items-center justify-content-between px-5">
            <div>
                <p class="statistics-title">Users</p>
              
                <h3 class="rate-percentage text-success text-center"><span>{{ $this->userCount }}</span></h3>
            </div>
            <div class="d-none d-md-block">
                <p class="statistics-title">Services</p>

                <h3 class="rate-percentage text-success text-center">{{ $this->serviceCount }}</h3>
            </div>
            {{-- <div class="d-none d-md-block">
                <p class="statistics-title">Appointments</p>
                <h3 class="rate-percentage text-success text-center">{{ $this->appointmentCount }}</h3>
            </div> --}}
        </div>
    </div>
</div>