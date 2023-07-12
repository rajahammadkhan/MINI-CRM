@extends('management.layouts.master ')

@section('content')
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Dashboard</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="{{url('home')}}">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Widgets -->
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="counter-box text-center white">
                        <div class="text font-17 m-b-5">Total companies</div>
                        <h3 class="m-b-10">{{count($company)}}
                            <i class="material-icons col-green">trending_up</i>
                        </h3>
                        <div class="icon">
                            <div class="chart chart-bar"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="counter-box text-center white">
                        <div class="text font-17 m-b-5">Total Employees</div>
                        <h3 class="m-b-10">{{count($employee)}}
                            <i class="material-icons col-green">trending_up</i>
                        </h3>
                        <div class="icon">
                            <span class="chart chart-line"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="counter-box text-center white">
                        <div class="text font-17 m-b-5">Total Users</div>
                        <h3 class="m-b-10">{{count($user)}}
                            <i class="material-icons col-green">trending_up</i>
                        </h3>
                        <div class="icon">
                            <div class="chart chart-pie"></div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- #END# Widgets -->
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Recent</strong> Report</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                                       role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="#" onClick="return false;">Action</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Another action</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="card">
                                <div class="chart-box-left">
                                    <div class="chart-note">
                                        <span class="dot dot-product"></span>
                                        <span>products</span>
                                    </div>
                                    <div class="chart-note mr-0">
                                        <span class="dot dot-service"></span>
                                        <span>services</span>
                                    </div>
                                </div>
                                <!-- Canvas for Chart.js -->
                                <canvas id="chartReport1"></canvas>
                                <!-- Custom Axis -->
                                <div class="axisData">
                                    <div class="tick">
                                        MON <span class="value productValue">24</span> <span
                                            class="value serviceValue">20</span>
                                    </div>
                                    <div class="tick">
                                        TUE <span class="value productValue">18</span> <span
                                            class="value serviceValue">22</span>
                                    </div>
                                    <div class="tick">
                                        WED <span class="value productValue">16</span> <span
                                            class="value serviceValue">30</span>
                                    </div>
                                    <div class="tick">
                                        THU <span class="value productValue">18</span> <span
                                            class="value serviceValue">22</span>
                                    </div>
                                    <div class="tick">
                                        FRI <span class="value productValue">24</span> <span
                                            class="value serviceValue">18</span>
                                    </div>
                                    <div class="tick">
                                        SAT <span class="value productValue">36</span> <span
                                            class="value serviceValue">22</span>
                                    </div>
                                    <div class="tick">
                                        SUN <span class="value productValue">28</span> <span
                                            class="value serviceValue">30</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Recent</strong> Report</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                                       role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="#" onClick="return false;">Action</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Another action</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="card">
                                <div class="chart-box-left">
                                    <div class="chart-note">
                                        <span class="dot dot-product"></span>
                                        <span>products</span>
                                    </div>
                                    <div class="chart-note mr-0">
                                        <span class="dot dot-service"></span>
                                        <span>services</span>
                                    </div>
                                </div>
                                <!-- Canvas for Chart.js -->
                                <canvas id="chartReport2"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="box-part text-center">
                        <i class="fab fa-twitter fa-3x col-blue"></i>
                        <div class="title p-t-15">
                            <h3>Twitter</h3>
                        </div>
                        <div class="text p-b-10">
                            <span>Lorem ipsum dolor sit amet, id quo eruditi
                                eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui
                                ad.</span>
                        </div>
                        <a href="{{'https://www.twitter.com'}}">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="box-part text-center">
                        <i class="fab fa-instagram fa-3x col-red"></i>
                        <div class="title p-t-15">
                            <h3>Instagram</h3>
                        </div>
                        <div class="text p-b-10">
                            <span>Lorem ipsum dolor sit amet, id quo eruditi
                                eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui
                                ad.</span>
                        </div>
                        <a href="{{'https://www.instagram.com'}}">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="box-part text-center">
                        <i class="fab fa-facebook-f fa-3x col-blue"></i>
                        <div class="title p-t-15">
                            <h3>Facebook</h3>
                        </div>
                        <div class="text p-b-10">
                            <span>Lorem ipsum dolor sit amet, id quo eruditi
                                eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui
                                ad.</span>
                        </div>
                        <a href="{{'https://www.facebook.com'}}">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
@endsection
