@extends('main')
    @section('content')
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!--state overview start-->
            <div class="row state-overview">
                <div class="col-lg-6 col-sm-6">
                    <section class="panel">
                        <div class="symbol terques">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="value">
                            <h1 class="count">
                                {{$pending}}
                            </h1>
                            <p>Pending Jobs</p>
                        </div>
                    </section>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <section class="panel">
                        <div class="symbol red">
                            <i class="fa fa-tags"></i>
                        </div>
                        <div class="value">
                            <h1 class=" count2">
                                {{$going}}
                            </h1>
                            <p>On Going Jobs</p>

                        </div>
                    </section>
                </div>

            </div>
            <!--state overview end-->
        </section>
    </section>

    @endsection
    <!--main content end-->


