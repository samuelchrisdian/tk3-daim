@extends('layouts.app')

@section('main-content')
<div class="container-fluid">
    @if(auth()->user()->role_id == 1)
    <div class="row ">
        <div class="col-lg-12">

            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">Dashboard</h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                </div>
            </div>

        </div>
        <div class="col-xxl-3 col-sm-6  mb-md-50 mb-30">
            <div class="card banner-feature banner-feature--3">
                <div class="banner-feature__shape">
                    <img src="img/svg/group9060.svg" alt="img">
                </div>
                <div class="d-flex justify-content-center">
                    <div class="card-body">
                        <h1 class="banner-feature__heading color-white">Welcome to TK3 - DAIM</h1>
                        <a href="#" class="banner-feature__btn btn color-primary btn-md px-20 bg-white radius-xs fs-15 mt-sm-35 mt-15" type="button">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @elseif(auth()->user()->role_id == 2)
    <div class="row">
        <div class="col-lg-12">

            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">TK3 - DAIM</h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="uil uil-estate"></i>Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">TK3 - DAIM</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
        <div class="col-xxl-12 mb-25">
            <div class="card banner-feature--18 new d-flex bg-white">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card-body px-25">
                                <h1 class="banner-feature__heading color-dark">Hey {{ auth()->user()->name }}! Welcome to the Dashboard
                                </h1>
                                <p class="banner-feature__para color-dark">There are many variations of passages of
                                    Lorem Ipsum available,<br>
                                    ut the majority have suffered passages of Lorem Ipsum available alteration in
                                    some form
                                </p>
                                <div class="d-flex justify-content-sm-start justify-content-center">
                                    <button class="banner-feature__btn btn btn-primary color-white btn-md radius-xs fs-15" type="button">Learn More</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="banner-feature__shape">
                                <img src="img/danial.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-8 mb-25">

            <div class="card border-0 px-25 h-100">
                <div class="card-header px-0 border-0">
                    <h6>User Overview</h6>
                    <div class="card-extra">
                        <ul class="card-tab-links nav-tabs nav" role="tablist">
                            <li>
                                <a href="#salesgrowth" data-bs-toggle="tab" id="salesgrowth-tab" role="tab" aria-selected="false">Today</a>
                            </li>
                            <li>
                                <a href="#salesgrowth2" data-bs-toggle="tab" id="salesgrowth2-tab" role="tab" aria-selected="false">Week</a>
                            </li>
                            <li>
                                <a class="active" href="#salesgrowth3" data-bs-toggle="tab" id="salesgrowth3-tab" role="tab" aria-selected="true">Month</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body p-0 pb-sm-25">
                    <div class="tab-content">
                        <div class="tab-pane" id="salesgrowth" role="tabpanel" aria-labelledby="salesgrowth-tab">
                            <div class="label-detailed label-detailed--two">
                                <div class="label-detailed__single">
                                    <span class="label-detailed__type label-detailed__type--primary">Target</span>
                                    <strong class="label-detailed__total">$8,550</strong>
                                    <span class="label-detailed__status color-success">
                                        <img class="svg" src="img/svg/arrow-success-up.svg" alt="">
                                        <strong>25%</strong>
                                    </span>
                                </div>
                                <div class="label-detailed__single">
                                    <span class="label-detailed__type label-detailed__type--info">Gained</span>
                                    <strong class="label-detailed__total">$5,550</strong>
                                    <span class="label-detailed__status color-danger">
                                        <img class="svg" src="img/svg/arrow-danger-down.svg" alt="">
                                        <strong>15%</strong>
                                    </span>
                                </div>
                            </div>
                            <div class="parentContainer">


                                <div>
                                    <canvas id="salesGrowthNewToday"></canvas>
                                </div>


                            </div>
                        </div>
                        <div class="tab-pane" id="salesgrowth2" role="tabpanel" aria-labelledby="salesgrowth2-tab">
                            <div class="label-detailed label-detailed--two">
                                <div class="label-detailed__single">
                                    <span class="label-detailed__type label-detailed__type--primary">Target</span>
                                    <strong class="label-detailed__total">$8,550</strong>
                                    <span class="label-detailed__status color-success">
                                        <img class="svg" src="img/svg/arrow-success-up.svg" alt="">
                                        <strong>25%</strong>
                                    </span>
                                </div>
                                <div class="label-detailed__single">
                                    <span class="label-detailed__type label-detailed__type--info">Gained</span>
                                    <strong class="label-detailed__total">$5,550</strong>
                                    <span class="label-detailed__status color-danger">
                                        <img class="svg" src="img/svg/arrow-danger-down.svg" alt="">
                                        <strong>15%</strong>
                                    </span>
                                </div>
                            </div>
                            <div class="parentContainer">


                                <div>
                                    <canvas id="salesGrowthNewWeek"></canvas>
                                </div>


                            </div>
                        </div>
                        <div class="tab-pane  active show" id="salesgrowth3" role="tabpanel" aria-labelledby="salesgrowth3-tab">
                            <div class="label-detailed label-detailed--two">
                                <div class="label-detailed__single">
                                    <span class="label-detailed__type label-detailed__type--primary">Target</span>
                                    <strong class="label-detailed__total">$8,550</strong>
                                    <span class="label-detailed__status color-success">
                                        <img class="svg" src="img/svg/arrow-success-up.svg" alt="">
                                        <strong>25%</strong>
                                    </span>
                                </div>
                                <div class="label-detailed__single">
                                    <span class="label-detailed__type label-detailed__type--info">Gained</span>
                                    <strong class="label-detailed__total">$5,550</strong>
                                    <span class="label-detailed__status color-danger">
                                        <img class="svg" src="img/svg/arrow-danger-down.svg" alt="">
                                        <strong>15%</strong>
                                    </span>
                                </div>
                            </div>
                            <div class="parentContainer">


                                <div>
                                    <canvas id="salesGrowthNewMonth"></canvas>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-xxl-4 col-lg-6 order-xxl-0 order-1 mb-25">
            <div class="card card-md border-0 mb-4 date-picker__calendar-height h-100">
                <div class="card-header py-md-0">
                    <h6>Calendar 2023</h6>
                    <div class="dropdown dropleft">
                        <a href="#" role="button" id="Today" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="Today">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <div class="card-body px-10">
                    <div class="date-picker date-picker--demo5 new">
                        <div class="date-picker__calendar"></div>
                    </div>
                </div>
            </div>
            <!-- ends: .card -->
        </div>
        <div class="col-xxl-6 mb-25">

            <div class="card border-0 px-25 pb-15 h-100">
                <div class="card-header px-0 border-0">
                    <h6>Member Progress</h6>
                    <div class="card-extra">
                        <ul class="card-tab-links nav-tabs nav" role="tablist">
                            <li>
                                <a class="active" href="#t_selling-today22" data-bs-toggle="tab" id="t_selling-today22-tab" role="tab" aria-selected="true">Today</a>
                            </li>
                            <li>
                                <a href="#t_selling-week22" data-bs-toggle="tab" id="t_selling-week22-tab" role="tab" aria-selected="true">Week</a>
                            </li>
                            <li>
                                <a href="#t_selling-month33" data-bs-toggle="tab" id="t_selling-month33-tab" role="tab" aria-selected="true">Month</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="t_selling-today22" role="tabpanel" aria-labelledby="t_selling-today22-tab">
                            <div class="selling-table-wrap selling-table-wrap--source selling-table-wrap--member">
                                <div class="table-responsive">
                                    <table class="table table--default table-borderless">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="selling-product-img d-flex align-items-center">
                                                        <div class="selling-product-img-wrapper order-bg-opacity-primary">
                                                            <img class="img-fluid" src="img/author/robert-1.png" alt="img">
                                                        </div>
                                                        <span>Robert Clinton</span>
                                                    </div>
                                                </td>
                                                <td>$38,536</td>
                                                <td>
                                                    <div class="status">
                                                        <ul>
                                                            <li>ReactJs</li>
                                                            <li>HTML</li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-center justify-content-end">
                                                        <div class="progress-wrap mb-0">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>

                                                            </div>
                                                        </div>
                                                        <div class="ratio-percentage ms-10">80%</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="selling-product-img d-flex align-items-center">
                                                        <div class="selling-product-img-wrapper order-bg-opacity-primary">
                                                            <img class="img-fluid" src="img/author/robert-2.png" alt="img">
                                                        </div>
                                                        <span>Member Progress</span>
                                                    </div>
                                                </td>
                                                <td>$20,573</td>
                                                <td>
                                                    <div class="status">
                                                        <ul>
                                                            <li>Laravel</li>
                                                            <li>Angular</li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-center justify-content-end">
                                                        <div class="progress-wrap mb-0">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-info" role="progressbar" style="width: 52%;" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>

                                                            </div>
                                                        </div>
                                                        <div class="ratio-percentage ms-10">52%</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="selling-product-img d-flex align-items-center">
                                                        <div class="selling-product-img-wrapper order-bg-opacity-primary">
                                                            <img class="img-fluid" src="img/author/robert-5.png" alt="img">
                                                        </div>
                                                        <span>Daniel White</span>
                                                    </div>
                                                </td>
                                                <td>$17,457</td>
                                                <td>
                                                    <div class="status">
                                                        <ul>
                                                            <li>Python</li>
                                                            <li>MySQL</li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-center justify-content-end">
                                                        <div class="progress-wrap mb-0">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-success" role="progressbar" style="width: 720%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>

                                                            </div>
                                                        </div>
                                                        <div class="ratio-percentage ms-10">72%</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="selling-product-img d-flex align-items-center">
                                                        <div class="selling-product-img-wrapper order-bg-opacity-primary">
                                                            <img class="img-fluid" src="img/author/robert-3.png" alt="img">
                                                        </div>
                                                        <span>Chris Barin </span>
                                                    </div>
                                                </td>
                                                <td>$15,354</td>
                                                <td>
                                                    <div class="status">
                                                        <ul>
                                                            <li>Wordpress</li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-center justify-content-end">
                                                        <div class="progress-wrap mb-0">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 92%;" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>

                                                            </div>
                                                        </div>
                                                        <div class="ratio-percentage ms-10">92%</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="selling-product-img d-flex align-items-center">
                                                        <div class="selling-product-img-wrapper order-bg-opacity-primary">
                                                            <img class="img-fluid" src="img/author/robert-4.png" alt="img">
                                                        </div>
                                                        <span>Daniel Pink</span>
                                                    </div>
                                                </td>
                                                <td>$12,354</td>
                                                <td>
                                                    <div class="status">
                                                        <ul>
                                                            <li>Photoshop</li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-center justify-content-end">
                                                        <div class="progress-wrap mb-0">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>

                                                            </div>
                                                        </div>
                                                        <div class="ratio-percentage ms-10">25%</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="selling-product-img d-flex align-items-center">
                                                        <div class="selling-product-img-wrapper order-bg-opacity-primary">
                                                            <img class="img-fluid" src="img/author/robert-5.png" alt="img">
                                                        </div>
                                                        <span>Shane Pollard</span>
                                                    </div>
                                                </td>
                                                <td>$12,354</td>
                                                <td>
                                                    <div class="status">
                                                        <ul>
                                                            <li>Illustrator</li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-center justify-content-end">
                                                        <div class="progress-wrap mb-0">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 18%;" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>

                                                            </div>
                                                        </div>
                                                        <div class="ratio-percentage ms-10">18%</div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="t_selling-week22" role="tabpanel" aria-labelledby="t_selling-week22-tab">
                            <div class="selling-table-wrap selling-table-wrap--source selling-table-wrap--member">
                                <div class="table-responsive">
                                    <table class="table table--default table-borderless">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="selling-product-img d-flex align-items-center">
                                                        <div class="selling-product-img-wrapper order-bg-opacity-primary">
                                                            <img class="img-fluid" src="img/author/robert-1.png" alt="img">
                                                        </div>
                                                        <span>Robert Clinton</span>
                                                    </div>
                                                </td>
                                                <td>$38,536</td>
                                                <td>
                                                    <div class="status">
                                                        <ul>
                                                            <li>ReactJs</li>
                                                            <li>HTML</li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-center justify-content-end">
                                                        <div class="progress-wrap mb-0">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>

                                                            </div>
                                                        </div>
                                                        <div class="ratio-percentage ms-10">80%</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="selling-product-img d-flex align-items-center">
                                                        <div class="selling-product-img-wrapper order-bg-opacity-primary">
                                                            <img class="img-fluid" src="img/author/robert-2.png" alt="img">
                                                        </div>
                                                        <span>Member Progress</span>
                                                    </div>
                                                </td>
                                                <td>$20,573</td>
                                                <td>
                                                    <div class="status">
                                                        <ul>
                                                            <li>Laravel</li>
                                                            <li>Angular</li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-center justify-content-end">
                                                        <div class="progress-wrap mb-0">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-info" role="progressbar" style="width: 52%;" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>

                                                            </div>
                                                        </div>
                                                        <div class="ratio-percentage ms-10">52%</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="selling-product-img d-flex align-items-center">
                                                        <div class="selling-product-img-wrapper order-bg-opacity-primary">
                                                            <img class="img-fluid" src="img/author/robert-5.png" alt="img">
                                                        </div>
                                                        <span>Daniel White</span>
                                                    </div>
                                                </td>
                                                <td>$17,457</td>
                                                <td>
                                                    <div class="status">
                                                        <ul>
                                                            <li>Python</li>
                                                            <li>MySQL</li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-center justify-content-end">
                                                        <div class="progress-wrap mb-0">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-success" role="progressbar" style="width: 720%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>

                                                            </div>
                                                        </div>
                                                        <div class="ratio-percentage ms-10">72%</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="selling-product-img d-flex align-items-center">
                                                        <div class="selling-product-img-wrapper order-bg-opacity-primary">
                                                            <img class="img-fluid" src="img/author/robert-3.png" alt="img">
                                                        </div>
                                                        <span>Chris Barin </span>
                                                    </div>
                                                </td>
                                                <td>$15,354</td>
                                                <td>
                                                    <div class="status">
                                                        <ul>
                                                            <li>Wordpress</li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-center justify-content-end">
                                                        <div class="progress-wrap mb-0">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 92%;" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>

                                                            </div>
                                                        </div>
                                                        <div class="ratio-percentage ms-10">92%</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="selling-product-img d-flex align-items-center">
                                                        <div class="selling-product-img-wrapper order-bg-opacity-primary">
                                                            <img class="img-fluid" src="img/author/robert-4.png" alt="img">
                                                        </div>
                                                        <span>Daniel Pink</span>
                                                    </div>
                                                </td>
                                                <td>$12,354</td>
                                                <td>
                                                    <div class="status">
                                                        <ul>
                                                            <li>Photoshop</li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-center justify-content-end">
                                                        <div class="progress-wrap mb-0">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>

                                                            </div>
                                                        </div>
                                                        <div class="ratio-percentage ms-10">25%</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="selling-product-img d-flex align-items-center">
                                                        <div class="selling-product-img-wrapper order-bg-opacity-primary">
                                                            <img class="img-fluid" src="img/author/robert-5.png" alt="img">
                                                        </div>
                                                        <span>Shane Pollard</span>
                                                    </div>
                                                </td>
                                                <td>$12,354</td>
                                                <td>
                                                    <div class="status">
                                                        <ul>
                                                            <li>Illustrator</li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-center justify-content-end">
                                                        <div class="progress-wrap mb-0">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 18%;" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>

                                                            </div>
                                                        </div>
                                                        <div class="ratio-percentage ms-10">18%</div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="t_selling-month33" role="tabpanel" aria-labelledby="t_selling-month33-tab">
                            <div class="selling-table-wrap selling-table-wrap--source selling-table-wrap--member">
                                <div class="table-responsive">
                                    <table class="table table--default table-borderless">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="selling-product-img d-flex align-items-center">
                                                        <div class="selling-product-img-wrapper order-bg-opacity-primary">
                                                            <img class="img-fluid" src="img/author/robert-1.png" alt="img">
                                                        </div>
                                                        <span>Robert Clinton</span>
                                                    </div>
                                                </td>
                                                <td>$38,536</td>
                                                <td>
                                                    <div class="status">
                                                        <ul>
                                                            <li>ReactJs</li>
                                                            <li>HTML</li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-center justify-content-end">
                                                        <div class="progress-wrap mb-0">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>

                                                            </div>
                                                        </div>
                                                        <div class="ratio-percentage ms-10">80%</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="selling-product-img d-flex align-items-center">
                                                        <div class="selling-product-img-wrapper order-bg-opacity-primary">
                                                            <img class="img-fluid" src="img/author/robert-2.png" alt="img">
                                                        </div>
                                                        <span>Member Progress</span>
                                                    </div>
                                                </td>
                                                <td>$20,573</td>
                                                <td>
                                                    <div class="status">
                                                        <ul>
                                                            <li>Laravel</li>
                                                            <li>Angular</li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-center justify-content-end">
                                                        <div class="progress-wrap mb-0">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-info" role="progressbar" style="width: 52%;" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>

                                                            </div>
                                                        </div>
                                                        <div class="ratio-percentage ms-10">52%</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="selling-product-img d-flex align-items-center">
                                                        <div class="selling-product-img-wrapper order-bg-opacity-primary">
                                                            <img class="img-fluid" src="img/author/robert-5.png" alt="img">
                                                        </div>
                                                        <span>Daniel White</span>
                                                    </div>
                                                </td>
                                                <td>$17,457</td>
                                                <td>
                                                    <div class="status">
                                                        <ul>
                                                            <li>Python</li>
                                                            <li>MySQL</li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-center justify-content-end">
                                                        <div class="progress-wrap mb-0">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-success" role="progressbar" style="width: 72%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>

                                                            </div>
                                                        </div>
                                                        <div class="ratio-percentage ms-10">72%</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="selling-product-img d-flex align-items-center">
                                                        <div class="selling-product-img-wrapper order-bg-opacity-primary">
                                                            <img class="img-fluid" src="img/author/robert-3.png" alt="img">
                                                        </div>
                                                        <span>Chris Barin </span>
                                                    </div>
                                                </td>
                                                <td>$15,354</td>
                                                <td>
                                                    <div class="status">
                                                        <ul>
                                                            <li>Wordpress</li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-center justify-content-end">
                                                        <div class="progress-wrap mb-0">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 92%;" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>

                                                            </div>
                                                        </div>
                                                        <div class="ratio-percentage ms-10">92%</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="selling-product-img d-flex align-items-center">
                                                        <div class="selling-product-img-wrapper order-bg-opacity-primary">
                                                            <img class="img-fluid" src="img/author/robert-4.png" alt="img">
                                                        </div>
                                                        <span>Daniel Pink</span>
                                                    </div>
                                                </td>
                                                <td>$12,354</td>
                                                <td>
                                                    <div class="status">
                                                        <ul>
                                                            <li>Photoshop</li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-center justify-content-end">
                                                        <div class="progress-wrap mb-0">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>

                                                            </div>
                                                        </div>
                                                        <div class="ratio-percentage ms-10">25%</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="selling-product-img d-flex align-items-center">
                                                        <div class="selling-product-img-wrapper order-bg-opacity-primary">
                                                            <img class="img-fluid" src="img/author/robert-5.png" alt="img">
                                                        </div>
                                                        <span>Shane Pollard</span>
                                                    </div>
                                                </td>
                                                <td>$12,354</td>
                                                <td>
                                                    <div class="status">
                                                        <ul>
                                                            <li>Illustrator</li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-center justify-content-end">
                                                        <div class="progress-wrap mb-0">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 18%;" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>

                                                            </div>
                                                        </div>
                                                        <div class="ratio-percentage ms-10">18%</div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-xxl-6 mb-25">

            <div class="card border-0 px-25 pb-10 project-task-list--event">
                <div class="card-header px-0 border-0">
                    <h6>Upcoming Events</h6>
                    <div class="card-extra me-1">
                        <ul class="card-tab-links nav-tabs nav" role="tablist">
                            <li>
                                <a class="active" href="#t_selling-today2222" data-bs-toggle="tab" id="t_selling-today2222-tab" role="tab" aria-selected="true">Today</a>
                            </li>
                            <li>
                                <a href="#t_selling-week2222" data-bs-toggle="tab" id="t_selling-week2222-tab" role="tab" aria-selected="true">Week</a>
                            </li>
                            <li>
                                <a href="#t_selling-month3333" data-bs-toggle="tab" id="t_selling-month3333-tab" role="tab" aria-selected="true">Month</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="t_selling-today2222" role="tabpanel" aria-labelledby="t_selling-today2222-tab">
                            <div class="project-task table-responsive table-responsive--dynamic">
                                <table class="table table-borderless">
                                    <tbody>

                                        <tr class="project-task-list">
                                            <td>
                                                <div class="event-Wrapper">
                                                    <div class="event-Wrapper__left">
                                                        <div class="event-wrapper-item bg-primary">
                                                            19 March
                                                        </div>
                                                    </div>
                                                    <div class="event-Wrapper__right">
                                                        <h6>Planning for new dashboard wireframe and prototype design</h6>
                                                        <span>08:30 AM</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown dropleft">
                                                    <a href="#" class="btn-link" role="button" id="Today" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu--dynamic" aria-labelledby="Today">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>


                                        <tr class="project-task-list">
                                            <td>
                                                <div class="event-Wrapper">
                                                    <div class="event-Wrapper__left">
                                                        <div class="event-wrapper-item bg-secondary">
                                                            18 March
                                                        </div>
                                                    </div>
                                                    <div class="event-Wrapper__right">
                                                        <h6>International Web Conference 2021</h6>
                                                        <span>08:30 AM</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown dropleft">
                                                    <a href="#" class="btn-link" role="button" id="Today" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu--dynamic" aria-labelledby="Today">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>


                                        <tr class="project-task-list">
                                            <td>
                                                <div class="event-Wrapper">
                                                    <div class="event-Wrapper__left">
                                                        <div class="event-wrapper-item bg-info">
                                                            17 March
                                                        </div>
                                                    </div>
                                                    <div class="event-Wrapper__right">
                                                        <h6>Dribble Designer Meetup</h6>
                                                        <span>08:30 AM</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown dropleft">
                                                    <a href="#" class="btn-link" role="button" id="Today" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu--dynamic" aria-labelledby="Today">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>


                                        <tr class="project-task-list">
                                            <td>
                                                <div class="event-Wrapper">
                                                    <div class="event-Wrapper__left">
                                                        <div class="event-wrapper-item bg-warning">
                                                            16 March
                                                        </div>
                                                    </div>
                                                    <div class="event-Wrapper__right">
                                                        <h6>International Web Conference 2021</h6>
                                                        <span>08:30 AM</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown dropleft">
                                                    <a href="#" class="btn-link" role="button" id="Today" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu--dynamic" aria-labelledby="Today">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="t_selling-week2222" role="tabpanel" aria-labelledby="t_selling-week2222-tab">
                            <div class="project-task table-responsive table-responsive--dynamic">
                                <table class="table table-borderless">
                                    <tbody>

                                        <tr class="project-task-list">
                                            <td>
                                                <div class="event-Wrapper">
                                                    <div class="event-Wrapper__left">
                                                        <div class="event-wrapper-item bg-primary">
                                                            19 March
                                                        </div>
                                                    </div>
                                                    <div class="event-Wrapper__right">
                                                        <h6>Planning for new dashboard wireframe and prototype design</h6>
                                                        <span>08:30 AM</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown dropleft">
                                                    <a href="#" class="btn-link" role="button" id="Today" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu--dynamic" aria-labelledby="Today">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>


                                        <tr class="project-task-list">
                                            <td>
                                                <div class="event-Wrapper">
                                                    <div class="event-Wrapper__left">
                                                        <div class="event-wrapper-item bg-secondary">
                                                            18 March
                                                        </div>
                                                    </div>
                                                    <div class="event-Wrapper__right">
                                                        <h6>International Web Conference 2021</h6>
                                                        <span>08:30 AM</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown dropleft">
                                                    <a href="#" class="btn-link" role="button" id="Today" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu--dynamic" aria-labelledby="Today">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>


                                        <tr class="project-task-list">
                                            <td>
                                                <div class="event-Wrapper">
                                                    <div class="event-Wrapper__left">
                                                        <div class="event-wrapper-item bg-info">
                                                            17 March
                                                        </div>
                                                    </div>
                                                    <div class="event-Wrapper__right">
                                                        <h6>Dribble Designer Meetup</h6>
                                                        <span>08:30 AM</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown dropleft">
                                                    <a href="#" class="btn-link" role="button" id="Today" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu--dynamic" aria-labelledby="Today">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>


                                        <tr class="project-task-list">
                                            <td>
                                                <div class="event-Wrapper">
                                                    <div class="event-Wrapper__left">
                                                        <div class="event-wrapper-item bg-warning">
                                                            16 March
                                                        </div>
                                                    </div>
                                                    <div class="event-Wrapper__right">
                                                        <h6>International Web Conference 2021</h6>
                                                        <span>08:30 AM</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown dropleft">
                                                    <a href="#" class="btn-link" role="button" id="Today" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu--dynamic" aria-labelledby="Today">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="t_selling-month3333" role="tabpanel" aria-labelledby="t_selling-month3333-tab">
                            <div class="project-task table-responsive table-responsive--dynamic">
                                <table class="table table-borderless">
                                    <tbody>

                                        <tr class="project-task-list">
                                            <td>
                                                <div class="event-Wrapper">
                                                    <div class="event-Wrapper__left">
                                                        <div class="event-wrapper-item bg-primary">
                                                            19 March
                                                        </div>
                                                    </div>
                                                    <div class="event-Wrapper__right">
                                                        <h6>Planning for new dashboard wireframe and prototype design</h6>
                                                        <span>08:30 AM</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown dropleft">
                                                    <a href="#" class="btn-link" role="button" id="Today" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu--dynamic" aria-labelledby="Today">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>


                                        <tr class="project-task-list">
                                            <td>
                                                <div class="event-Wrapper">
                                                    <div class="event-Wrapper__left">
                                                        <div class="event-wrapper-item bg-secondary">
                                                            18 March
                                                        </div>
                                                    </div>
                                                    <div class="event-Wrapper__right">
                                                        <h6>International Web Conference 2021</h6>
                                                        <span>08:30 AM</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown dropleft">
                                                    <a href="#" class="btn-link" role="button" id="Today" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu--dynamic" aria-labelledby="Today">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>


                                        <tr class="project-task-list">
                                            <td>
                                                <div class="event-Wrapper">
                                                    <div class="event-Wrapper__left">
                                                        <div class="event-wrapper-item bg-info">
                                                            17 March
                                                        </div>
                                                    </div>
                                                    <div class="event-Wrapper__right">
                                                        <h6>Dribble Designer Meetup</h6>
                                                        <span>08:30 AM</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown dropleft">
                                                    <a href="#" class="btn-link" role="button" id="Today" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu--dynamic" aria-labelledby="Today">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>


                                        <tr class="project-task-list">
                                            <td>
                                                <div class="event-Wrapper">
                                                    <div class="event-Wrapper__left">
                                                        <div class="event-wrapper-item bg-warning">
                                                            16 March
                                                        </div>
                                                    </div>
                                                    <div class="event-Wrapper__right">
                                                        <h6>International Web Conference 2021</h6>
                                                        <span>08:30 AM</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown dropleft">
                                                    <a href="#" class="btn-link" role="button" id="Today" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu--dynamic" aria-labelledby="Today">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-xxl-4 mb-25">
            <div class="card knowledge-base border-0 py-sm-30 px-sm-25">
                <img src="img/book-open.png" alt="book">
                <h1>Knowledge Base</h1>
                <p>There are many variations of passages of Lorem Ipsum available
                    but the majority have suffered alteration</p>
                <button type="button" class="btn btn-primary">
                    Browse Article
                </button>
            </div>
        </div>
        <div class="col-xxl-4 col-lg-6 mb-25">

            <div class="card border-0 card-timeline h-100">
                <div class="card-header border-0">
                    <h6>Timeline</h6>
                    <div class="card-extra">
                        <div class="dropdown dropleft">
                            <a href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ends: .card-header -->
                <div class="card-body pb-15 mt-n15 pt-0">
                    <div class="card-timeline-body">
                        <ul>
                            <li>
                                <div class="card-timeline-body__left">
                                    <div class="card-timeline-body__title">
                                        <span class="timeline-line"></span>
                                        <span class="badge-dot badge-dot--big dot-primary"></span>
                                        <p>Create a services site<span>2015-09-01</span></p>
                                    </div>
                                </div>
                                <div class="card-timeline-body__right">
                                    <div class="card-timeline-body__time">
                                        <span>10 mins ago</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card-timeline-body__left">
                                    <div class="card-timeline-body__title">
                                        <span class="timeline-line"></span>
                                        <span class="badge-dot badge-dot--big dot-secondary"></span>
                                        <p>Solve initial network problems<span>2015-09-01</span></p>
                                    </div>
                                </div>
                                <div class="card-timeline-body__right">
                                    <div class="card-timeline-body__time">
                                        <span>10 mins ago</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card-timeline-body__left">
                                    <div class="card-timeline-body__title">
                                        <span class="timeline-line"></span>
                                        <span class="badge-dot badge-dot--big dot-success"></span>
                                        <p>Technical testing<span>2015-09-01</span></p>
                                    </div>
                                </div>
                                <div class="card-timeline-body__right">
                                    <div class="card-timeline-body__time">
                                        <span>10 mins ago</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card-timeline-body__left">
                                    <div class="card-timeline-body__title">
                                        <span class="timeline-line"></span>
                                        <span class="badge-dot badge-dot--big dot-info"></span>
                                        <p>Network problems being solved<span>2015-09-01</span></p>
                                    </div>
                                </div>
                                <div class="card-timeline-body__right">
                                    <div class="card-timeline-body__time">
                                        <span>10 mins ago</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card-timeline-body__left">
                                    <div class="card-timeline-body__title">
                                        <span class="timeline-line"></span>
                                        <span class="badge-dot badge-dot--big dot-warning"></span>
                                        <p>Technical testing<span>2015-09-01</span></p>
                                    </div>
                                </div>
                                <div class="card-timeline-body__right">
                                    <div class="card-timeline-body__time">
                                        <span>10 mins ago</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card-timeline-body__left">
                                    <div class="card-timeline-body__title">
                                        <span class="timeline-line"></span>
                                        <span class="badge-dot badge-dot--big dot-danger"></span>
                                        <p>Network problems being solved<span>2015-09-01</span></p>
                                    </div>
                                </div>
                                <div class="card-timeline-body__right">
                                    <div class="card-timeline-body__time">
                                        <span>10 mins ago</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ends: .card-body -->
            </div>

        </div>
        <div class="col-xxl-4 col-lg-6 mb-25">

            <div class="card border-0 card-inbox">
                <div class="card-header border-0">
                    <h6>Inbox</h6>
                    <div class="dropdown dropleft">
                        <a href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <!-- ends: .card-header -->
                <div class="card-body pb-35 pt-0">
                    <div class="card-inbox-members">
                        <ul>
                            <li>
                                <div class="card-inbox-members__left">
                                    <img class="radius-sm" src="img/inbox-1.png" alt="">
                                    <div class="card-inbox-members__title">
                                        <h6>Shane Watson</h6>
                                        <div class="card-inbox-members__title--online">
                                            We are looking a full stack developer
                                        </div>
                                    </div>
                                </div>
                                <div class="card-inbox-member__right">
                                    <div class="card-inbox-member__time">
                                        <span>9:30 AM</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card-inbox-members__left">
                                    <img class="radius-sm" src="img/inbox-2.png" alt="">
                                    <div class="card-inbox-members__title">
                                        <h6>Chris Dohan</h6>
                                        <div class="card-inbox-members__title--online">
                                            Well done, great work
                                        </div>
                                    </div>
                                </div>
                                <div class="card-inbox-member__right">
                                    <div class="card-inbox-member__time">
                                        <span>9:30 AM</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card-inbox-members__left">
                                    <img class="radius-sm" src="img/inbox-3.png" alt="">
                                    <div class="card-inbox-members__title">
                                        <h6>Robert Clinton</h6>
                                        <div class="card-inbox-members__title--online">
                                            Tonight we are going to submit new...
                                        </div>
                                    </div>
                                </div>
                                <div class="card-inbox-member__right">
                                    <div class="card-inbox-member__time">
                                        <span>9:30 AM</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card-inbox-members__left">
                                    <img class="radius-sm" src="img/inbox-1.png" alt="">
                                    <div class="card-inbox-members__title">
                                        <h6>Shane Watson</h6>
                                        <div class="card-inbox-members__title--online">
                                            We are looking a full stack developer
                                        </div>
                                    </div>
                                </div>
                                <div class="card-inbox-member__right">
                                    <div class="card-inbox-member__time">
                                        <span>9:30 AM</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card-inbox-members__left">
                                    <img class="radius-sm" src="img/inbox-2.png" alt="">
                                    <div class="card-inbox-members__title">
                                        <h6>Chris Dohan</h6>
                                        <div class="card-inbox-members__title--online">
                                            Well done, great work
                                        </div>
                                    </div>
                                </div>
                                <div class="card-inbox-member__right">
                                    <div class="card-inbox-member__time">
                                        <span>9:30 AM</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ends: .card-body -->
            </div>

        </div>
        <div class="col-xxl-4 col-lg-6 mb-25">

            <div class="blog-card">
                <div class="blog-card__thumbnail">
                    <a href="#">
                        <img src="img/bg3.png" alt="">
                    </a>
                </div>
                <div class="blog-card__details">
                    <div class="blog-card__content">
                        <div class="blog-card__title--top">15 March 2021</div>
                        <h4 class="blog-card__title">
                            <a href="#" class="entry-title" rel="bookmark">Multiple Dashboard Design Idea</a>
                        </h4>
                        <p>There are many variations of passages of majority have suffered alteration in some form</p>
                    </div>
                    <div class="blog-card__meta">
                        <div class="blog-card__meta-profile">
                            <img src="img/alex-suprun.png" alt="">
                            <span>Machel Bold</span>
                        </div>
                        <div class="blog-card__meta-count">
                            <ul>
                                <li>
                                    <div class="blog-card__meta-reaction">
                                        <img src="img/svg/heart.svg" alt="heart" class="svg">
                                        <span class="blog-card__meta-reaction-like">15 K</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="blog-card__meta-doc-wrapper">
                                        <img src="img/svg/file-text.svg" alt="file-text" class="svg">
                                        <span class="blog-card__meta-doc">75</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-xxl-4 col-lg-6 mb-25">

            <div class="blog-card">
                <div class="blog-card__thumbnail">
                    <a href="#">
                        <img src="img/bg2.png" alt="">
                    </a>
                </div>
                <div class="blog-card__details">
                    <div class="blog-card__content">
                        <div class="blog-card__title--top">15 March 2021</div>
                        <h4 class="blog-card__title">
                            <a href="#" class="entry-title" rel="bookmark">How to Create a Niche Based Dashboard</a>
                        </h4>
                        <p>There are many variations of passages of majority have suffered alteration in some form</p>
                    </div>
                    <div class="blog-card__meta">
                        <div class="blog-card__meta-profile">
                            <img src="img/alex-suprun.png" alt="">
                            <span>Machel Bold</span>
                        </div>
                        <div class="blog-card__meta-count">
                            <ul>
                                <li>
                                    <div class="blog-card__meta-reaction">
                                        <img src="img/svg/heart.svg" alt="heart" class="svg">
                                        <span class="blog-card__meta-reaction-like">15 K</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="blog-card__meta-doc-wrapper">
                                        <img src="img/svg/file-text.svg" alt="file-text" class="svg">
                                        <span class="blog-card__meta-doc">75</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-xxl-4 col-lg-6 mb-25">

            <div class="blog-card">
                <div class="blog-card__thumbnail">
                    <a href="#">
                        <img src="img/bg4.png" alt="">
                    </a>
                </div>
                <div class="blog-card__details">
                    <div class="blog-card__content">
                        <div class="blog-card__title--top">15 March 2021</div>
                        <h4 class="blog-card__title">
                            <a href="#" class="entry-title" rel="bookmark">Tips for Design Simplicity </a>
                        </h4>
                        <p>There are many variations of passages of majority have suffered alteration in some form</p>
                    </div>
                    <div class="blog-card__meta">
                        <div class="blog-card__meta-profile">
                            <img src="img/alex-suprun.png" alt="">
                            <span>Machel Bold</span>
                        </div>
                        <div class="blog-card__meta-count">
                            <ul>
                                <li>
                                    <div class="blog-card__meta-reaction">
                                        <img src="img/svg/heart.svg" alt="heart" class="svg">
                                        <span class="blog-card__meta-reaction-like">15 K</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="blog-card__meta-doc-wrapper">
                                        <img src="img/svg/file-text.svg" alt="file-text" class="svg">
                                        <span class="blog-card__meta-doc">75</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @elseif(auth()->user()->role_id == 3)
    <div class="row ">
        <div class="col-lg-12">

            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">TK3 - DAIM</h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="uil uil-estate"></i>Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">TK3 - DAIM</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
        <div class="col-xxl-4 col-lg-6 mb-25">
            <div class="card banner-feature banner-feature--danial mb-0 h-100">
                <div class="banner-feature__shape">
                    <img src="img/glass-trophy.png" alt="img">
                </div>
                <div class="d-flex justify-content-center">
                    <div class="card-body">
                        <h1 class="banner-feature__heading color-white">Congratulations {{ auth()->user()->name }}!</h1>
                        <p class="banner-feature__para ">Best Seller on the last month.</p>
                        <button class="banner-feature__btn btn color-secondary btn-md px-20 radius-xs fs-15" type="button">Learn More</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-lg-6 mb-25">

            <div class="card performance-o border-0">
                <div class="card-header border-0 pb-0">
                    <h6>Performance Overview </h6>
                    <div class="card-extra">
                        <div class="dropdown dropleft">
                            <a href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ends: .card-header -->
                <div class="card-body pt-sm-25 pb-25">
                    <div class="performance-chart">

                        <div class="">
                            <div class="performanceDetails"></div>
                        </div>

                    </div>
                    <div class="performance-chart-labels">
                        <ul>
                            <li class="label-target">Target</li>
                            <li class="label-completed">Completed</li>
                            <li class="label-in-progress">In Progress</li>
                        </ul>
                    </div>
                    <!-- ends: .session-wrap -->
                </div>
                <!-- ends: .card-body -->
            </div>

        </div>
        <div class="col-xxl-4 mb-25">
            <div class="row">
                <div class="col-md-6">





                    <div class="overview-content products-awards pt-20 pb-20 text-center radius-xl">
                        <div class="d-inline-flex flex-column align-items-center justify-content-center">
                            <div class="revenue-chart-box__Icon order-bg-opacity-primary color-primary me-0">
                                <i class="uil uil-briefcase-alt"></i>
                            </div>
                            <div class="d-flex align-items-start flex-wrap">
                                <div>
                                    <p class="mb-1 mb-0 color-gray">Total Products </p>
                                    <h1>21K</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">





                    <div class="overview-content products-awards pt-20 pb-20 text-center radius-xl">
                        <div class="d-inline-flex flex-column align-items-center justify-content-center">
                            <div class="revenue-chart-box__Icon order-bg-opacity-info color-info me-0">
                                <i class="uil uil-award"></i>
                            </div>
                            <div class="d-flex align-items-start flex-wrap">
                                <div>
                                    <p class="mb-1 mb-0 color-gray">Total Awards</p>
                                    <h1>15K</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-12 mt-25">
                    <div class="card banner-feature banner-feature--7 position-relative border-0 mb-0">
                        <div class="d-flex justify-content-center">
                            <div class="card-body py-25 px-30">
                                <div class="div">
                                    <h4 class="banner-feature__heading">Subscribe to our newsletter</h4>
                                    <p class="banner-feature__para ">We notify you once any post is published</p>
                                    <button type="button" class="btn btn-primary mt-15 btn-md">Subscribe</button>
                                </div>
                                <div class="banner-feature__shape position-absolute">
                                    <img src="img/3d-message.png" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 mb-25">

            <div class="card border-0 h-100 px-25 pb-25">
                <div class="card-header px-0 border-0">
                    <h6>Task Lists</h6>
                    <div class="card-extra">
                        <ul class="card-tab-links nav-tabs nav" role="tablist">
                            <li>
                                <a class="active" href="#t_selling-today2222" data-bs-toggle="tab" id="t_selling-today2222-tab" role="tab" aria-selected="true">Today</a>
                            </li>
                            <li>
                                <a href="#t_selling-week2222" data-bs-toggle="tab" id="t_selling-week2222-tab" role="tab" aria-selected="true">Week</a>
                            </li>
                            <li>
                                <a href="#t_selling-month3333" data-bs-toggle="tab" id="t_selling-month3333-tab" role="tab" aria-selected="true">Month</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="t_selling-today2222" role="tabpanel" aria-labelledby="t_selling-today2222-tab">
                            <div class="project-task new table-responsive table-responsive--dynamic">
                                <table class="table table-borderless">
                                    <tbody>

                                        <tr class="project-task-list project-task-list--active-user new">
                                            <td>
                                                <div class="checkbox-group d-flex">
                                                    <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                        <input class="checkbox" type="checkbox" id="check-grp-planning-1" checked>
                                                        <label for="check-grp-planning-1" class="fs-14 color-light">
                                                            Planning for new dashboard wireframe and prototype design
                                                        </label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="project-task-list__right">
                                                    <div class="dropdown dropleft d-flex justify-content-end">
                                                        <a href="#" role="button" id="revenue1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-link">
                                                            <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu--dynamic" aria-labelledby="revenue1">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>


                                        <tr class="project-task-list project-task-list--active-user new">
                                            <td>
                                                <div class="checkbox-group d-flex">
                                                    <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                        <input class="checkbox" type="checkbox" id="check-grp-planning-2" checked>
                                                        <label for="check-grp-planning-2" class="fs-14 color-light">
                                                            Standup meeting with team
                                                        </label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="project-task-list__right">
                                                    <div class="dropdown dropleft d-flex justify-content-end">
                                                        <a href="#" role="button" id="revenue1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-link">
                                                            <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu--dynamic" aria-labelledby="revenue1">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>


                                        <tr class="project-task-list project-task-list--active-user new">
                                            <td>
                                                <div class="checkbox-group d-flex">
                                                    <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                        <input class="checkbox" type="checkbox" id="check-grp-planning-3">
                                                        <label for="check-grp-planning-3" class="fs-14 color-light">
                                                            Create eye garbing images for WordPress blog post
                                                        </label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="project-task-list__right">
                                                    <div class="dropdown dropleft d-flex justify-content-end">
                                                        <a href="#" role="button" id="revenue1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-link">
                                                            <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu--dynamic" aria-labelledby="revenue1">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>


                                        <tr class="project-task-list project-task-list--active-user new">
                                            <td>
                                                <div class="checkbox-group d-flex">
                                                    <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                        <input class="checkbox" type="checkbox" id="check-grp-planning-4">
                                                        <label for="check-grp-planning-4" class="fs-14 color-light">
                                                            Write an article about upcoming theme
                                                        </label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="project-task-list__right">
                                                    <div class="dropdown dropleft d-flex justify-content-end">
                                                        <a href="#" role="button" id="revenue1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-link">
                                                            <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu--dynamic" aria-labelledby="revenue1">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>


                                        <tr class="project-task-list project-task-list--active-user new">
                                            <td>
                                                <div class="checkbox-group d-flex">
                                                    <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                        <input class="checkbox" type="checkbox" id="check-grp-planning-5">
                                                        <label for="check-grp-planning-5" class="fs-14 color-light">
                                                            Dashboard new feature dark mode design discussion
                                                        </label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="project-task-list__right">
                                                    <div class="dropdown dropleft d-flex justify-content-end">
                                                        <a href="#" role="button" id="revenue1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-link">
                                                            <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu--dynamic" aria-labelledby="revenue1">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="t_selling-week2222" role="tabpanel" aria-labelledby="t_selling-week2222-tab">
                            <div class="project-task table-responsive">
                                <table class="table table-borderless">
                                    <tbody>

                                        <tr class="project-task-list project-task-list--active-user new">
                                            <td>
                                                <div class="checkbox-group d-flex">
                                                    <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                        <input class="checkbox" type="checkbox" id="check-grp-planning-11" checked>
                                                        <label for="check-grp-planning-11" class="fs-14 color-light">
                                                            Planning for new dashboard wireframe and prototype design
                                                        </label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="project-task-list__right">
                                                    <div class="dropdown dropleft d-flex justify-content-end">
                                                        <a href="#" role="button" id="revenue1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-link">
                                                            <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu--dynamic" aria-labelledby="revenue1">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>


                                        <tr class="project-task-list project-task-list--active-user new">
                                            <td>
                                                <div class="checkbox-group d-flex">
                                                    <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                        <input class="checkbox" type="checkbox" id="check-grp-planning-12" checked>
                                                        <label for="check-grp-planning-12" class="fs-14 color-light">
                                                            Standup meeting with team
                                                        </label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="project-task-list__right">
                                                    <div class="dropdown dropleft d-flex justify-content-end">
                                                        <a href="#" role="button" id="revenue1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-link">
                                                            <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu--dynamic" aria-labelledby="revenue1">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>


                                        <tr class="project-task-list project-task-list--active-user new">
                                            <td>
                                                <div class="checkbox-group d-flex">
                                                    <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                        <input class="checkbox" type="checkbox" id="check-grp-planning-13">
                                                        <label for="check-grp-planning-13" class="fs-14 color-light">
                                                            Create images for blog post
                                                        </label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="project-task-list__right">
                                                    <div class="dropdown dropleft d-flex justify-content-end">
                                                        <a href="#" role="button" id="revenue1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-link">
                                                            <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu--dynamic" aria-labelledby="revenue1">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>


                                        <tr class="project-task-list project-task-list--active-user new">
                                            <td>
                                                <div class="checkbox-group d-flex">
                                                    <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                        <input class="checkbox" type="checkbox" id="check-grp-planning-14">
                                                        <label for="check-grp-planning-14" class="fs-14 color-light">
                                                            Write an article about upcoming theme
                                                        </label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="project-task-list__right">
                                                    <div class="dropdown dropleft d-flex justify-content-end">
                                                        <a href="#" role="button" id="revenue1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-link">
                                                            <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu--dynamic" aria-labelledby="revenue1">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>


                                        <tr class="project-task-list project-task-list--active-user new">
                                            <td>
                                                <div class="checkbox-group d-flex">
                                                    <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                        <input class="checkbox" type="checkbox" id="check-grp-planning-15">
                                                        <label for="check-grp-planning-15" class="fs-14 color-light">
                                                            Dashboard new feature dark mode design discussion
                                                        </label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="project-task-list__right">
                                                    <div class="dropdown dropleft d-flex justify-content-end">
                                                        <a href="#" role="button" id="revenue1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-link">
                                                            <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu--dynamic" aria-labelledby="revenue1">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="t_selling-month3333" role="tabpanel" aria-labelledby="t_selling-month3333-tab">
                            <div class="project-task table-responsive">
                                <table class="table table-borderless">
                                    <tbody>

                                        <tr class="project-task-list project-task-list--active-user new">
                                            <td>
                                                <div class="checkbox-group d-flex">
                                                    <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                        <input class="checkbox" type="checkbox" id="check-grp-planning-21" checked>
                                                        <label for="check-grp-planning-21" class="fs-14 color-light">
                                                            Planning for new dashboard wireframe and prototype design
                                                        </label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="project-task-list__right">
                                                    <div class="dropdown dropleft d-flex justify-content-end">
                                                        <a href="#" role="button" id="revenue1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-link">
                                                            <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu--dynamic" aria-labelledby="revenue1">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>


                                        <tr class="project-task-list project-task-list--active-user new">
                                            <td>
                                                <div class="checkbox-group d-flex">
                                                    <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                        <input class="checkbox" type="checkbox" id="check-grp-planning-22" checked>
                                                        <label for="check-grp-planning-22" class="fs-14 color-light">
                                                            Standup meeting with team
                                                        </label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="project-task-list__right">
                                                    <div class="dropdown dropleft d-flex justify-content-end">
                                                        <a href="#" role="button" id="revenue1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-link">
                                                            <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu--dynamic" aria-labelledby="revenue1">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>


                                        <tr class="project-task-list project-task-list--active-user new">
                                            <td>
                                                <div class="checkbox-group d-flex">
                                                    <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                        <input class="checkbox" type="checkbox" id="check-grp-planning-23">
                                                        <label for="check-grp-planning-23" class="fs-14 color-light">
                                                            Create images for blog post
                                                        </label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="project-task-list__right">
                                                    <div class="dropdown dropleft d-flex justify-content-end">
                                                        <a href="#" role="button" id="revenue1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-link">
                                                            <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu--dynamic" aria-labelledby="revenue1">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>


                                        <tr class="project-task-list project-task-list--active-user new">
                                            <td>
                                                <div class="checkbox-group d-flex">
                                                    <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                        <input class="checkbox" type="checkbox" id="check-grp-planning-24">
                                                        <label for="check-grp-planning-24" class="fs-14 color-light">
                                                            Write an article about upcoming theme
                                                        </label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="project-task-list__right">
                                                    <div class="dropdown dropleft d-flex justify-content-end">
                                                        <a href="#" role="button" id="revenue1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-link">
                                                            <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu--dynamic" aria-labelledby="revenue1">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>


                                        <tr class="project-task-list project-task-list--active-user new">
                                            <td>
                                                <div class="checkbox-group d-flex">
                                                    <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                        <input class="checkbox" type="checkbox" id="check-grp-planning-25">
                                                        <label for="check-grp-planning-25" class="fs-14 color-light">
                                                            Dashboard new feature dark mode design discussion
                                                        </label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="project-task-list__right">
                                                    <div class="dropdown dropleft d-flex justify-content-end">
                                                        <a href="#" role="button" id="revenue1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-link">
                                                            <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu--dynamic" aria-labelledby="revenue1">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-xl-6 mb-25">

            <div class="card border-0 px-25 h-100">
                <div class="card-header px-0 border-0">
                    <h6>Marketing Campaigns</h6>
                    <div class="card-extra">
                        <ul class="card-tab-links nav-tabs nav" role="tablist">
                            <li>
                                <a class="active" href="#t_selling-today" data-bs-toggle="tab" id="t_selling-today-tab" role="tab" aria-selected="true">Today</a>
                            </li>
                            <li>
                                <a href="#t_selling-week" data-bs-toggle="tab" id="t_selling-week-tab" role="tab" aria-selected="true">Week</a>
                            </li>
                            <li>
                                <a href="#t_selling-month" data-bs-toggle="tab" id="t_selling-month-tab" role="tab" aria-selected="true">Month</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="t_selling-today" role="tabpanel" aria-labelledby="t_selling-today-tab">
                            <div class="selling-table-wrap selling-table-wrap--2">
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="selling-product-img selling-product-img--2 d-flex align-items-center">
                                                        <img class="radius-xs img-fluid" src="img/browser/microsoft.png" alt="img">
                                                        <span>Microsoft Company</span>
                                                    </div>
                                                </td>
                                                <td>$1045,120</td>
                                                <td>45%</td>
                                                <td class="d-flex justify-content-center">
                                                    <div class="product-pie-wrapper product-pie-wrapper--45 product-pie-wrapper--style-2">
                                                        <div class="product-pie-wrapper__pie">
                                                            <div class="product-pie-wrapper__left-side product-pie-wrapper__half-circle">
                                                            </div>
                                                            <div class="product-pie-wrapper__right-side product-pie-wrapper__half-circle">
                                                            </div>
                                                        </div>
                                                        <div class="product-pie-wrapper__shadow"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="selling-product-img selling-product-img--2 d-flex align-items-center">
                                                        <img class="radius-xs img-fluid" src="img/browser/wordpress.png" alt="img">
                                                        <span>WordPress</span>
                                                    </div>
                                                </td>
                                                <td>$2000,520</td>
                                                <td>25%</td>
                                                <td class="d-flex justify-content-center">
                                                    <div class="product-pie-wrapper product-pie-wrapper--45 product-pie-wrapper--style-3">
                                                        <div class="product-pie-wrapper__pie">
                                                            <div class="product-pie-wrapper__left-side product-pie-wrapper__half-circle">
                                                            </div>
                                                            <div class="product-pie-wrapper__right-side product-pie-wrapper__half-circle">
                                                            </div>
                                                        </div>
                                                        <div class="product-pie-wrapper__shadow"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="selling-product-img selling-product-img--2 d-flex align-items-center">
                                                        <img class="radius-xs img-fluid" src="img/browser/adidas.png" alt="img">
                                                        <span>Adidas Brand</span>
                                                    </div>
                                                </td>
                                                <td>$1520,950</td>
                                                <td>50%</td>
                                                <td class="d-flex justify-content-center">
                                                    <div class="product-pie-wrapper product-pie-wrapper--45 product-pie-wrapper--style-4">
                                                        <div class="product-pie-wrapper__pie">
                                                            <div class="product-pie-wrapper__left-side product-pie-wrapper__half-circle">
                                                            </div>
                                                            <div class="product-pie-wrapper__right-side product-pie-wrapper__half-circle">
                                                            </div>
                                                        </div>
                                                        <div class="product-pie-wrapper__shadow"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="selling-product-img selling-product-img--2 d-flex align-items-center">
                                                        <img class="radius-xs img-fluid " src="img/browser/slack.png" alt="img">
                                                        <span>Slack</span>
                                                    </div>
                                                </td>
                                                <td>$7045,154</td>
                                                <td>25%</td>
                                                <td class="d-flex justify-content-center">
                                                    <div class="product-pie-wrapper product-pie-wrapper--45 product-pie-wrapper--style-3">
                                                        <div class="product-pie-wrapper__pie">
                                                            <div class="product-pie-wrapper__left-side product-pie-wrapper__half-circle">
                                                            </div>
                                                            <div class="product-pie-wrapper__right-side product-pie-wrapper__half-circle">
                                                            </div>
                                                        </div>
                                                        <div class="product-pie-wrapper__shadow"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="selling-product-img selling-product-img--2 d-flex align-items-center">
                                                        <img class="radius-xs img-fluid" src="img/browser/adobe.png" alt="img">
                                                        <span>Adobe CC</span>
                                                    </div>
                                                </td>
                                                <td>$1252,220</td>
                                                <td>50%</td>
                                                <td class="d-flex justify-content-center">
                                                    <div class="product-pie-wrapper product-pie-wrapper--45 product-pie-wrapper--style-4">
                                                        <div class="product-pie-wrapper__pie">
                                                            <div class="product-pie-wrapper__left-side product-pie-wrapper__half-circle">
                                                            </div>
                                                            <div class="product-pie-wrapper__right-side product-pie-wrapper__half-circle">
                                                            </div>
                                                        </div>
                                                        <div class="product-pie-wrapper__shadow"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="t_selling-week" role="tabpanel" aria-labelledby="t_selling-week-tab">
                            <div class="selling-table-wrap selling-table-wrap--2">
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="selling-product-img selling-product-img--2 d-flex align-items-center">
                                                        <img class="radius-xs img-fluid" src="img/browser/microsoft.png" alt="img">
                                                        <span>Microsoft Company</span>
                                                    </div>
                                                </td>
                                                <td>$1045,120</td>
                                                <td>45%</td>
                                                <td class="d-flex justify-content-center">
                                                    <div class="product-pie-wrapper product-pie-wrapper--45 product-pie-wrapper--style-2">
                                                        <div class="product-pie-wrapper__pie">
                                                            <div class="product-pie-wrapper__left-side product-pie-wrapper__half-circle">
                                                            </div>
                                                            <div class="product-pie-wrapper__right-side product-pie-wrapper__half-circle">
                                                            </div>
                                                        </div>
                                                        <div class="product-pie-wrapper__shadow"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="selling-product-img selling-product-img--2 d-flex align-items-center">
                                                        <img class="radius-xs img-fluid" src="img/browser/wordpress.png" alt="img">
                                                        <span>WordPress</span>
                                                    </div>
                                                </td>
                                                <td>$2000,520</td>
                                                <td>25%</td>
                                                <td class="d-flex justify-content-center">
                                                    <div class="product-pie-wrapper product-pie-wrapper--45 product-pie-wrapper--style-3">
                                                        <div class="product-pie-wrapper__pie">
                                                            <div class="product-pie-wrapper__left-side product-pie-wrapper__half-circle">
                                                            </div>
                                                            <div class="product-pie-wrapper__right-side product-pie-wrapper__half-circle">
                                                            </div>
                                                        </div>
                                                        <div class="product-pie-wrapper__shadow"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="selling-product-img selling-product-img--2 d-flex align-items-center">
                                                        <img class="radius-xs img-fluid" src="img/browser/adidas.png" alt="img">
                                                        <span>Adidas Brand</span>
                                                    </div>
                                                </td>
                                                <td>$1520,950</td>
                                                <td>50%</td>
                                                <td class="d-flex justify-content-center">
                                                    <div class="product-pie-wrapper product-pie-wrapper--45 product-pie-wrapper--style-4">
                                                        <div class="product-pie-wrapper__pie">
                                                            <div class="product-pie-wrapper__left-side product-pie-wrapper__half-circle">
                                                            </div>
                                                            <div class="product-pie-wrapper__right-side product-pie-wrapper__half-circle">
                                                            </div>
                                                        </div>
                                                        <div class="product-pie-wrapper__shadow"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="selling-product-img selling-product-img--2 d-flex align-items-center">
                                                        <img class="radius-xs img-fluid " src="img/browser/slack.png" alt="img">
                                                        <span>Slack</span>
                                                    </div>
                                                </td>
                                                <td>$7045,154</td>
                                                <td>25%</td>
                                                <td class="d-flex justify-content-center">
                                                    <div class="product-pie-wrapper product-pie-wrapper--45 product-pie-wrapper--style-3">
                                                        <div class="product-pie-wrapper__pie">
                                                            <div class="product-pie-wrapper__left-side product-pie-wrapper__half-circle">
                                                            </div>
                                                            <div class="product-pie-wrapper__right-side product-pie-wrapper__half-circle">
                                                            </div>
                                                        </div>
                                                        <div class="product-pie-wrapper__shadow"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="selling-product-img selling-product-img--2 d-flex align-items-center">
                                                        <img class="radius-xs img-fluid" src="img/browser/adobe.png" alt="img">
                                                        <span>Adobe CC</span>
                                                    </div>
                                                </td>
                                                <td>1561</td>
                                                <td>50%</td>
                                                <td class="d-flex justify-content-center">
                                                    <div class="product-pie-wrapper product-pie-wrapper--45 product-pie-wrapper--style-4">
                                                        <div class="product-pie-wrapper__pie">
                                                            <div class="product-pie-wrapper__left-side product-pie-wrapper__half-circle">
                                                            </div>
                                                            <div class="product-pie-wrapper__right-side product-pie-wrapper__half-circle">
                                                            </div>
                                                        </div>
                                                        <div class="product-pie-wrapper__shadow"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="t_selling-month" role="tabpanel" aria-labelledby="t_selling-month-tab">
                            <div class="selling-table-wrap selling-table-wrap--2">
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="selling-product-img selling-product-img--2 d-flex align-items-center">
                                                        <img class="radius-xs img-fluid" src="img/browser/microsoft.png" alt="img">
                                                        <span>Microsoft Company</span>
                                                    </div>
                                                </td>
                                                <td>$1045,120</td>
                                                <td>45%</td>
                                                <td class="d-flex justify-content-center">
                                                    <div class="product-pie-wrapper product-pie-wrapper--45 product-pie-wrapper--style-2">
                                                        <div class="product-pie-wrapper__pie">
                                                            <div class="product-pie-wrapper__left-side product-pie-wrapper__half-circle">
                                                            </div>
                                                            <div class="product-pie-wrapper__right-side product-pie-wrapper__half-circle">
                                                            </div>
                                                        </div>
                                                        <div class="product-pie-wrapper__shadow"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="selling-product-img selling-product-img--2 d-flex align-items-center">
                                                        <img class="radius-xs img-fluid" src="img/browser/wordpress.png" alt="img">
                                                        <span>WordPress</span>
                                                    </div>
                                                </td>
                                                <td>$2000,520</td>
                                                <td>25%</td>
                                                <td class="d-flex justify-content-center">
                                                    <div class="product-pie-wrapper product-pie-wrapper--45 product-pie-wrapper--style-3">
                                                        <div class="product-pie-wrapper__pie">
                                                            <div class="product-pie-wrapper__left-side product-pie-wrapper__half-circle">
                                                            </div>
                                                            <div class="product-pie-wrapper__right-side product-pie-wrapper__half-circle">
                                                            </div>
                                                        </div>
                                                        <div class="product-pie-wrapper__shadow"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="selling-product-img selling-product-img--2 d-flex align-items-center">
                                                        <img class="radius-xs img-fluid" src="img/browser/adidas.png" alt="img">
                                                        <span>Adidas Brand</span>
                                                    </div>
                                                </td>
                                                <td>$1520,950</td>
                                                <td>50%</td>
                                                <td class="d-flex justify-content-center">
                                                    <div class="product-pie-wrapper product-pie-wrapper--45 product-pie-wrapper--style-4">
                                                        <div class="product-pie-wrapper__pie">
                                                            <div class="product-pie-wrapper__left-side product-pie-wrapper__half-circle">
                                                            </div>
                                                            <div class="product-pie-wrapper__right-side product-pie-wrapper__half-circle">
                                                            </div>
                                                        </div>
                                                        <div class="product-pie-wrapper__shadow"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="selling-product-img selling-product-img--2 d-flex align-items-center">
                                                        <img class="radius-xs img-fluid " src="img/browser/slack.png" alt="img">
                                                        <span>Slack</span>
                                                    </div>
                                                </td>
                                                <td>$7045,154</td>
                                                <td>25%</td>
                                                <td class="d-flex justify-content-center">
                                                    <div class="product-pie-wrapper product-pie-wrapper--45 product-pie-wrapper--style-3">
                                                        <div class="product-pie-wrapper__pie">
                                                            <div class="product-pie-wrapper__left-side product-pie-wrapper__half-circle">
                                                            </div>
                                                            <div class="product-pie-wrapper__right-side product-pie-wrapper__half-circle">
                                                            </div>
                                                        </div>
                                                        <div class="product-pie-wrapper__shadow"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="selling-product-img selling-product-img--2 d-flex align-items-center">
                                                        <img class="radius-xs img-fluid" src="img/browser/adobe.png" alt="img">
                                                        <span>Adobe CC</span>
                                                    </div>
                                                </td>
                                                <td>1561</td>
                                                <td>50%</td>
                                                <td class="d-flex justify-content-center">
                                                    <div class="product-pie-wrapper product-pie-wrapper--45 product-pie-wrapper--style-4">
                                                        <div class="product-pie-wrapper__pie">
                                                            <div class="product-pie-wrapper__left-side product-pie-wrapper__half-circle">
                                                            </div>
                                                            <div class="product-pie-wrapper__right-side product-pie-wrapper__half-circle">
                                                            </div>
                                                        </div>
                                                        <div class="product-pie-wrapper__shadow"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-xxl-8">
            <div class="row">
                <div class="col-md-6 mb-25">

                    <div class="feature-profile h-100">
                        <div class="feature-profile__bg">
                            <img src="img/profile_bg.png" alt="">
                        </div>
                        <div class="feature-profile_content">
                            <img src="img/profile_bg_2.png" alt="">
                            <h6>Robert Clinton</h6>
                            <p>Best Seller of the last month</p>
                            <ul class="profile-feature__social">
                                <li>
                                    <a href="#" class="bg-facebook">
                                        <i class="lab la-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="bg-twitter">
                                        <i class="lab la-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="bg-primary">
                                        <i class="lab la-dribbble"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 mb-25">

                    <div class="card border-0 h-100">
                        <div class="card-header border-0">
                            <h6>Team Members </h6>
                            <div class="card-extra">
                                <div class="dropdown dropleft">
                                    <a href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .card-header -->
                        <div class="card-body pb-30 pt-1">
                            <div class="team-members">
                                <ul>
                                    <li>
                                        <div class="team-members__left">
                                            <img class="rounded-circle" src="img/team01.png" alt="">
                                            <div class="team-members__title">
                                                <h6>Shane Watson</h6>
                                            </div>
                                        </div>
                                        <div class="team-members__middle">
                                            <div class="team-members__title--online d-flex align-items-center"><span class="badge-dot dot-success"></span>Online</div>
                                        </div>
                                        <div class="team-member__right">
                                            <div class="team-member__add">
                                                <button type="button">add</button>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="team-members__left">
                                            <img class="rounded-circle" src="img/team02.png" alt="">
                                            <div class="team-members__title">
                                                <h6>Chris Dohan</h6>
                                            </div>
                                        </div>
                                        <div class="team-members__middle">
                                            <div class="team-members__title--online d-flex align-items-center"><span class="badge-dot dot-success"></span>Online</div>
                                        </div>
                                        <div class="team-member__right">
                                            <div class="team-member__add">
                                                <button type="button">add</button>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="team-members__left">
                                            <img class="rounded-circle" src="img/team03.png" alt="">
                                            <div class="team-members__title">
                                                <h6>Robert Clinton</h6>
                                            </div>
                                        </div>
                                        <div class="team-members__middle">
                                            <div class="team-members__title--online d-flex align-items-center"><span class="badge-dot dot-success"></span>Online</div>
                                        </div>
                                        <div class="team-member__right">
                                            <div class="team-member__add">
                                                <button type="button">add</button>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="team-members__left">
                                            <img class="rounded-circle" src="img/team04.png" alt="">
                                            <div class="team-members__title">
                                                <h6>Daniel White</h6>
                                            </div>
                                        </div>
                                        <div class="team-members__middle">
                                            <div class="team-members__title--online d-flex align-items-center"><span class="badge-dot dot-success"></span>Online</div>
                                        </div>
                                        <div class="team-member__right">
                                            <div class="team-member__add">
                                                <button type="button">add</button>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="team-members__left">
                                            <img class="rounded-circle" src="img/team1.png" alt="">
                                            <div class="team-members__title">
                                                <h6>Black Smith</h6>
                                            </div>
                                        </div>
                                        <div class="team-members__middle">
                                            <div class="team-members__title--online d-flex align-items-center"><span class="badge-dot dot-success"></span>Online</div>
                                        </div>
                                        <div class="team-member__right">
                                            <div class="team-member__add">
                                                <button type="button">add</button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- ends: .card-body -->
                    </div>

                </div>
                <div class="col-12 mb-25">

                    <div class="card border-0 px-25 h-100">
                        <div class="card-header px-0 border-0">
                            <h6>Social Media Traffic</h6>
                            <div class="dropdown dropleft">
                                <a href="#" role="button" id="Today" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                </a>
                                <div class="dropdown-menu" aria-labelledby="Today">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="selling-table-wrap selling-table-wrap--source">
                                <div class="table-responsive">
                                    <table class="table table--default table-borderless">
                                        <thead>
                                            <tr>
                                                <th>Social</th>
                                                <th>user</th>
                                                <th>session</th>
                                                <th>bounce rate</th>
                                                <th class="text-end">Avg. session duration</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="selling-product-img d-flex align-items-center">
                                                        <div class="selling-product-img-wrapper order-bg-opacity-primary color-primary">
                                                            <i class="uil uil-facebook-f"></i>
                                                        </div>
                                                        <span>Facebook</span>
                                                    </div>
                                                </td>
                                                <td>3,397</td>
                                                <td>422</td>
                                                <td>
                                                    2,584
                                                </td>
                                                <td>
                                                    00:01:05
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="selling-product-img d-flex align-items-center">
                                                        <div class="selling-product-img-wrapper order-bg-opacity-secondary color-secondary">
                                                            <i class="uil uil-twitter"></i>
                                                        </div>
                                                        <span>Twitter</span>
                                                    </div>
                                                </td>
                                                <td>3,397</td>
                                                <td>422</td>
                                                <td>
                                                    2,584
                                                </td>
                                                <td>
                                                    00:01:05
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="selling-product-img d-flex align-items-center">
                                                        <div class="selling-product-img-wrapper order-bg-opacity-info color-info">
                                                            <i class="uil uil-instagram"></i>
                                                        </div>
                                                        <span>Instagram</span>
                                                    </div>
                                                </td>
                                                <td>3,397</td>
                                                <td>422</td>
                                                <td>
                                                    2,584
                                                </td>
                                                <td>
                                                    00:01:05
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="selling-product-img d-flex align-items-center">
                                                        <div class="selling-product-img-wrapper order-bg-opacity-danger color-danger">
                                                            <i class="uil uil-youtube"></i>
                                                        </div>
                                                        <span>Youtube</span>
                                                    </div>
                                                </td>
                                                <td>3,397</td>
                                                <td>422</td>
                                                <td>
                                                    2,584
                                                </td>
                                                <td>
                                                    00:01:05
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-xxl-4 mb-25">

            <div class="card border-0">
                <div class="card-header border-0">
                    <h6>chat</h6>
                    <div class="card-extra">
                        <div class="dropdown dropleft">
                            <a href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ends: .card-header -->
                <div class="card-body p-0">
                    <div class="chat mini-chat">
                        <div class="chat-body bg-white radius-xl">
                            <div class="chat-box chat-box--small l-lg-10 pe-lg-20 pt-10 px-sm-25">
                                <!-- Start: Incomming -->
                                <div class="flex-1 incoming-chat">
                                    <div class="chat-text-box">
                                        <div class="media ">
                                            <div class="chat-text-box__photo ">
                                                <img src="img/author/1.jpg" class="align-self-start me-15 wh-46" alt="img">
                                            </div>
                                            <div class="media-body">
                                                <div class="chat-text-box__content">
                                                    <div class="chat-text-box__title d-flex align-items-center">
                                                        <h6 class="fs-14">Black Smith</h6>
                                                        <span class="chat-text-box__time fs-12 color-light fw-400 ms-25">8:30
                                                            PM</span>
                                                    </div>
                                                    <div class="d-flex align-items-center mt-10">
                                                        <div class="chat-text-box__subtitle p-20 bg-gray">
                                                            <p class="color-white">Jam nonumy eirmod tsadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End: Incomming -->
                                <!-- Start: Outgoing -->
                                <div class="flex-1 justify-content-end d-flex outgoing-chat mt-15">
                                    <div class="chat-text-box">
                                        <div class="media ">
                                            <div class="media-body">
                                                <div class="chat-text-box__content">
                                                    <div class="chat-text-box__title d-flex align-items-center justify-content-end">
                                                        <span class="chat-text-box__time fs-12 color-light fw-400">8:30
                                                            PM</span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-end">
                                                        <div class="chat-text-box__subtitle p-20 bg-deep">
                                                            <p class="color-gray">Jam nonumy eirmod tsadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et </p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End: Outgoing  -->
                                <!-- Start: Incomming -->
                                <div class="flex-1 incoming-chat mt-15">
                                    <div class="chat-text-box">
                                        <div class="media ">
                                            <div class="chat-text-box__photo ">
                                                <img src="img/author/1.jpg" class="align-self-start me-15 wh-46" alt="img">
                                            </div>
                                            <div class="media-body">
                                                <div class="chat-text-box__content">
                                                    <div class="chat-text-box__title d-flex align-items-center">
                                                        <h6 class="fs-14">Domnic Harys</h6>
                                                        <span class="chat-text-box__time fs-12 color-light fw-400 ms-2">8:30
                                                            PM</span>
                                                    </div>
                                                    <div class="d-flex align-items-center mt-10">
                                                        <div class="chat-text-box__subtitle p-20 bg-gray">
                                                            <p class="color-white">Jam nonumy eirmod tempor invidunt ut
                                                                labore</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End: Incomming -->
                                <!-- Start: Outgoing -->
                                <div class="flex-1 justify-content-end d-flex outgoing-chat">
                                    <div class="chat-text-box">
                                        <div class="media ">
                                            <div class="media-body">
                                                <div class="chat-text-box__content">
                                                    <div class="chat-text-box__title d-flex align-items-center justify-content-end mt-10">
                                                        <span class="chat-text-box__time fs-12 color-light fw-400">8:30
                                                            PM</span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-end">
                                                        <div class="chat-text-box__subtitle p-20 bg-deep">
                                                            <p class="color-gray">Jam nonumy eirmod tempor invidunt ut
                                                                labore et
                                                                dolore magna.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End: Outgoing  -->
                                <!-- Start: Incomming -->
                                <div class="flex-1 incoming-chat mt-30">
                                    <div class="chat-text-box">
                                        <div class="media ">
                                            <div class="chat-text-box__photo ">
                                                <img src="img/author/1.jpg" class="align-self-start me-15 wh-46" alt="img">
                                            </div>
                                            <div class="media-body">
                                                <div class="chat-text-box__content">
                                                    <div class="d-flex align-items-center ">
                                                        <div class="chat-text-box__subtitle typing bg-lighters pe-30">
                                                            <p class="color-light text-capitalize">typing...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End: Incomming -->
                            </div>
                            <div class="chat-footer ps-25 pe-15 pb-30 pt-20">
                                <div class="chat-type-text">
                                    <div class="pt-0 outline-0 pb-0 pe-0 ps-0 rounded-0 position-relative d-flex align-items-center" tabindex="-1">
                                        <div class="d-flex justify-content-between align-items-center w-100 flex-wrap">
                                            <div class="bg-lighters flex-1 d-flex align-items-center chat-type-text__write ms-0">
                                                <a href="#">
                                                    <img class="svg" src="img/svg/smile.svg" alt="smile">
                                                </a>
                                                <input class="form-control border-0 bg-transparent box-shadow-none" placeholder="Type your message...">

                                            </div>
                                            <div class="chat-type-text__btn">
                                                <button type="button" class="border-0 bg-secondary wh-50 p-10 rounded-circle color-svgDF-white">
                                                    <img class="svg" src="img/svg/send.svg" alt="send">
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- ends: .chat-->
                </div>
                <!-- ends: .card-body -->
            </div>

        </div>
    </div>
    @endif
    <!-- ends: .row -->
</div>
@endsection

<!-- @section('custom-script')

@endsection -->