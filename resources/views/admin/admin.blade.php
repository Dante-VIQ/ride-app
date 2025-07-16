<div class="row">
    <div class="col-sm-12">
        <div class="home-tab">
            @include('admin.head')
            <div class="tab-content tab-content-basic">
                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                    @include('admin.insight')

                    <div class="row">
                        <div class="col-lg-8 d-flex flex-column">
                            @include('admin.market')
                  
                            <div class="row flex-grow">
                             @include('admin.requests', ['requests' => $requests])
                            </div>
                            {{-- <div class="row flex-grow">
                                @include('admin.events')
                            </div> --}}
                        </div>
                        <div class="col-lg-4 d-flex flex-column">
                        
                            <div class="row flex-grow">
                                <div class="col-12 grid-margin stretch-card">
                                   @include('admin.perfomers')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
