<div class="home-tab">
    @include('admin.head')
    <div class="tab-content tab-content-basic">
        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
            @include('admin.insight')

            <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-4">
                <div class="d-flex flex-column">
                    @include('admin.market')

                </div>
                <div class="d-flex flex-column">

                    {{-- <div class="row flex-grow"> --}}
                    <div class="col-12 grid-margin stretch-card">
                        @include('admin.perfomers')
                    </div>
                    {{-- </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
