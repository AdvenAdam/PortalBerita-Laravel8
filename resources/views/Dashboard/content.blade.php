@extends('Dashboard/main')
@section('content')


<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Default</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="#" class="btn btn-sm btn-neutral">New</a>
                    <a href="#" class="btn btn-sm btn-neutral">Filters</a>
                </div>
            </div>
            <!-- Card stats -->
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Total traffic</h5>
                                    <span class="h2 font-weight-bold mb-0">350,897</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                        <i class="ni ni-active-40"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm">
                                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">New users</h5>
                                    <span class="h2 font-weight-bold mb-0">2,356</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                        <i class="ni ni-chart-pie-35"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm">
                                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Sales</h5>
                                    <span class="h2 font-weight-bold mb-0">924</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                        <i class="ni ni-money-coins"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm">
                                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Performance</h5>
                                    <span class="h2 font-weight-bold mb-0">49,65%</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                        <i class="ni ni-chart-bar-32"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm">
                                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col-xl-8">
            <div class="card bg-default">
                <div class="card-header bg-transparent">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-light text-uppercase ls-1 mb-1">Overview</h6>
                            <h5 class="h3 text-white mb-0">Sales value</h5>
                        </div>
                        <div class="col">
                            <ul class="nav nav-pills justify-content-end">
                                <li class="nav-item mr-2 mr-md-0" data-toggle="chart" data-target="#chart-sales-dark"
                                    data-update='{"data":{"datasets":[{"data":[0, 20, 10, 30, 15, 40, 20, 60, 60]}]}}'
                                    data-prefix="$" data-suffix="k">
                                    <a href="#" class="nav-link py-2 px-3 active" data-toggle="tab">
                                        <span class="d-none d-md-block">Month</span>
                                        <span class="d-md-none">M</span>
                                    </a>
                                </li>
                                <li class="nav-item" data-toggle="chart" data-target="#chart-sales-dark"
                                    data-update='{"data":{"datasets":[{"data":[0, 20, 5, 25, 10, 30, 15, 40, 40]}]}}'
                                    data-prefix="$" data-suffix="k">
                                    <a href="#" class="nav-link py-2 px-3" data-toggle="tab">
                                        <span class="d-none d-md-block">Week</span>
                                        <span class="d-md-none">W</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Chart -->
                    <div class="chart">
                        <!-- Chart wrapper -->
                        <canvas id="chart-sales-dark" class="chart-canvas"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card">
                <div class="card-header bg-transparent">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-uppercase text-muted ls-1 mb-1">Performance</h6>
                            <h5 class="h3 mb-0">Total orders</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Chart -->
                    <div class="chart">
                        <canvas id="chart-bars" class="chart-canvas"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4">
            <!-- Members list group card -->
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <!-- Title -->
                    <h5 class="h3 mb-0">Team members</h5>
                </div>
                <!-- Card body -->
                <div class="card-body">
                    <!-- List group -->
                    <ul class="list-group list-group-flush list my--3">
                        <li class="list-group-item px-0">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <!-- Avatar -->
                                    <a href="#" class="avatar rounded-circle">
                                        <img alt="Image placeholder"
                                            src="{{ asset('argonadmin') }}/assets/img/theme/team-1.jpg">
                                    </a>
                                </div>
                                <div class="col ml--2">
                                    <h4 class="mb-0">
                                        <a href="#!">John Michael</a>
                                    </h4>
                                    <span class="text-success">???</span>
                                    <small>Online</small>
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-sm btn-primary">Add</button>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item px-0">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <!-- Avatar -->
                                    <a href="#" class="avatar rounded-circle">
                                        <img alt="Image placeholder"
                                            src="{{ asset('argonadmin') }}/assets/img/theme/team-2.jpg">
                                    </a>
                                </div>
                                <div class="col ml--2">
                                    <h4 class="mb-0">
                                        <a href="#!">Alex Smith</a>
                                    </h4>
                                    <span class="text-warning">???</span>
                                    <small>In a meeting</small>
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-sm btn-primary">Add</button>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item px-0">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <!-- Avatar -->
                                    <a href="#" class="avatar rounded-circle">
                                        <img alt="Image placeholder"
                                            src="{{ asset('argonadmin') }}/assets/img/theme/team-3.jpg">
                                    </a>
                                </div>
                                <div class="col ml--2">
                                    <h4 class="mb-0">
                                        <a href="#!">Samantha Ivy</a>
                                    </h4>
                                    <span class="text-danger">???</span>
                                    <small>Offline</small>
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-sm btn-primary">Add</button>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item px-0">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <!-- Avatar -->
                                    <a href="#" class="avatar rounded-circle">
                                        <img alt="Image placeholder"
                                            src="{{ asset('argonadmin') }}/assets/img/theme/team-4.jpg">
                                    </a>
                                </div>
                                <div class="col ml--2">
                                    <h4 class="mb-0">
                                        <a href="#!">John Michael</a>
                                    </h4>
                                    <span class="text-success">???</span>
                                    <small>Online</small>
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-sm btn-primary">Add</button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <!-- Checklist -->
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <!-- Title -->
                    <h5 class="h3 mb-0">To do list</h5>
                </div>
                <!-- Card body -->
                <div class="card-body p-0">
                    <!-- List group -->
                    <ul class="list-group list-group-flush" data-toggle="checklist">
                        <li class="checklist-entry list-group-item flex-column align-items-start py-4 px-4">
                            <div class="checklist-item checklist-item-success">
                                <div class="checklist-info">
                                    <h5 class="checklist-title mb-0">Call with Dave</h5>
                                    <small>10:30 AM</small>
                                </div>
                                <div>
                                    <div class="custom-control custom-checkbox custom-checkbox-success">
                                        <input class="custom-control-input" id="chk-todo-task-1" type="checkbox"
                                            checked>
                                        <label class="custom-control-label" for="chk-todo-task-1"></label>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="checklist-entry list-group-item flex-column align-items-start py-4 px-4">
                            <div class="checklist-item checklist-item-warning">
                                <div class="checklist-info">
                                    <h5 class="checklist-title mb-0">Lunch meeting</h5>
                                    <small>10:30 AM</small>
                                </div>
                                <div>
                                    <div class="custom-control custom-checkbox custom-checkbox-warning">
                                        <input class="custom-control-input" id="chk-todo-task-2" type="checkbox">
                                        <label class="custom-control-label" for="chk-todo-task-2"></label>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="checklist-entry list-group-item flex-column align-items-start py-4 px-4">
                            <div class="checklist-item checklist-item-info">
                                <div class="checklist-info">
                                    <h5 class="checklist-title mb-0">Argon Dashboard Launch</h5>
                                    <small>10:30 AM</small>
                                </div>
                                <div>
                                    <div class="custom-control custom-checkbox custom-checkbox-info">
                                        <input class="custom-control-input" id="chk-todo-task-3" type="checkbox">
                                        <label class="custom-control-label" for="chk-todo-task-3"></label>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="checklist-entry list-group-item flex-column align-items-start py-4 px-4">
                            <div class="checklist-item checklist-item-danger">
                                <div class="checklist-info">
                                    <h5 class="checklist-title mb-0">Winter Hackaton</h5>
                                    <small>10:30 AM</small>
                                </div>
                                <div>
                                    <div class="custom-control custom-checkbox custom-checkbox-danger">
                                        <input class="custom-control-input" id="chk-todo-task-4" type="checkbox"
                                            checked>
                                        <label class="custom-control-label" for="chk-todo-task-4"></label>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <!-- Progress track -->
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <!-- Title -->
                    <h5 class="h3 mb-0">Progress track</h5>
                </div>
                <!-- Card body -->
                <div class="card-body">
                    <!-- List group -->
                    <ul class="list-group list-group-flush list my--3">
                        <li class="list-group-item px-0">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <!-- Avatar -->
                                    <a href="#" class="avatar rounded-circle">
                                        <img alt="Image placeholder"
                                            src="{{ asset('argonadmin') }}/assets/img/theme/bootstrap.jpg">
                                    </a>
                                </div>
                                <div class="col">
                                    <h5>Argon Design System</h5>
                                    <div class="progress progress-xs mb-0">
                                        <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="60"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item px-0">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <!-- Avatar -->
                                    <a href="#" class="avatar rounded-circle">
                                        <img alt="Image placeholder"
                                            src="{{ asset('argonadmin') }}/assets/img/theme/angular.jpg">
                                    </a>
                                </div>
                                <div class="col">
                                    <h5>Angular Now UI Kit PRO</h5>
                                    <div class="progress progress-xs mb-0">
                                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="100"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item px-0">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <!-- Avatar -->
                                    <a href="#" class="avatar rounded-circle">
                                        <img alt="Image placeholder"
                                            src="{{ asset('argonadmin') }}/assets/img/theme/sketch.jpg">
                                    </a>
                                </div>
                                <div class="col">
                                    <h5>Black Dashboard</h5>
                                    <div class="progress progress-xs mb-0">
                                        <div class="progress-bar bg-red" role="progressbar" aria-valuenow="72"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 72%;"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item px-0">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <!-- Avatar -->
                                    <a href="#" class="avatar rounded-circle">
                                        <img alt="Image placeholder"
                                            src="{{ asset('argonadmin') }}/assets/img/theme/react.jpg">
                                    </a>
                                </div>
                                <div class="col">
                                    <h5>React Material Dashboard</h5>
                                    <div class="progress progress-xs mb-0">
                                        <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="90"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    @endsection