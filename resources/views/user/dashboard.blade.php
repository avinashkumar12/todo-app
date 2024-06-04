@extends('layouts.auth', ['title' => 'dashboard'])
@section('content')
<div class="main-panel">
    <!-- BEGIN : Main Content-->
    <div class="main-content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <!--Statistics cards Starts-->
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <div class="card border-primary" style="border-radius: 15px;">
                        <div class="card-content d-flex justify-content-center align-items-center">
                            <div class="card-body py-3">
                                <div class="media align-items-center">
                                    <div class="media-body pr-2">
                                        <h3 class="font-large-1 mb-0 text-warning">{{ $userCount }}</h3>
                                        <span>Users</span>
                                    </div>
                                    <div class="media-right">
                                        <i class="ft-users font-large-2 text-warning"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <div class="card border-primary" style="border-radius: 15px;">
                        <div class="card-content">
                            <div class="card-body py-3">
                                <div class="media align-items-center">
                                    <div class="media-body pr-2">
                                        <h3 class="font-large-1 mb-0 text-primary">{{ $tasks }}</h3>
                                        <span>Tasks</span>
                                    </div>
                                    <div class="media-right">
                                        <i class="fa fa-shopping-cart font-large-2 text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <button class="btn btn-primary scroll-top" type="button"><i class="ft-arrow-up"></i></button> -->

    </div>
</div>
@endsection