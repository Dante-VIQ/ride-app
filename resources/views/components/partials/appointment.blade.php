<!-- Appointment Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 d-flex flex-column justify-center align-items-center text-center p-4 wow fadeInUp"
                data-wow-delay="0.1s">
                <h2 class="d-inline-block mb-3">Contact Us</h2>
                <p class="mb-4">
                    Have questions or need assistance booking a ride? Our team is here to help. Whether it's a medical
                    appointment, therapy session, or mobility support, feel free to reach out—we’re just a message away.
                </p>
            </div>

            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="w-100">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="bg-light rounded h-100 d-flex align-items-center p-5">

                    <form action="{{ route('appointments.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0" name="first_name"
                                    placeholder="First Name" style="height: 55px;">
                            </div>

                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0" name="last_name"
                                    placeholder="Last Name" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control border-0" name="email"
                                    placeholder="Your Email" style="height: 55px;">
                            </div>

                            <div class="col-12">
                                <textarea class="form-control border-0" rows="5" name="message" placeholder="Describe your problem"></textarea>
                            </div>

                            <button class="btn btn-info py-2 px-4" type="submit">Send</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Appointment End -->
