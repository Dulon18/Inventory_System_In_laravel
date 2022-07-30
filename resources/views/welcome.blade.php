<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>Inventory &mdash; System</title>

<!-- General CSS Files -->
<link rel="stylesheet" href="{{url('assets/modules/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{url('assets/modules/fontawesome-free/css/all.min.css')}}">

<!-- CSS Libraries -->
<link rel="stylesheet" href="{{url('assets/modules/jqvmap/dist/jqvmap.min.css')}}">
<link rel="stylesheet" href="{{url('assets/modules/weather-icon/css/weather-icons.min.css')}}">
<link rel="stylesheet" href="{{url('assets/modules/weather-icon/css/weather-icons-wind.min.css')}}">
<link rel="stylesheet" href="{{url('assets/modules/summernote/summernote-bs4.css')}}">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" r
el="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- Template CSS -->
<link rel="stylesheet" href="{{url('assets/css/style.min.css')}}">
<link rel="stylesheet" href="{{url('assets/css/components.min.css')}}">
</head>

<body class="layout-4">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>

<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
    
     @include('fixed.nav')

        <!-- Start main left sidebar menu -->
    @include('fixed.sidebar')

        <!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>Dashboard</h1>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-primary">
                                <i class="far fa-user"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Total Admin</h4>
                                </div>
                                <div class="card-body">
                                    10
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-danger">
                                <i class="far fa-newspaper"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>News</h4>
                                </div>
                                <div class="card-body">
                                    42
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-warning">
                                <i class="far fa-file"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Reports</h4>
                                </div>
                                <div class="card-body">
                                    1,201
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-success">
                                <i class="fas fa-circle"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Online Users</h4>
                                </div>
                                <div class="card-body">
                                    47
                                </div>
                            </div>
                        </div>
                    </div>                  
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Statistics</h4>
                                <div class="card-header-action">
                                    <button class="btn btn-sm btn-outline-secondary mr-1" id="one_month">1M</button>
                                    <button class="btn btn-sm btn-outline-secondary mr-1" id="six_months">6M</button>
                                    <button class="btn btn-sm btn-outline-secondary mr-1" id="one_year" class="active">1Y</button>
                                    <button class="btn btn-sm btn-outline-secondary mr-1" id="ytd">YTD</button>
                                    <button class="btn btn-sm btn-outline-secondary" id="all">ALL</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="statistic-details mb-sm-4">
                                    <div class="statistic-details-item">
                                        <span class="text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span> 7%</span>
                                        <div class="detail-value">$243</div>
                                        <div class="detail-name">Today's Sales</div>
                                    </div>
                                    <div class="statistic-details-item">
                                        <span class="text-muted"><span class="text-danger"><i class="fas fa-caret-down"></i></span> 23%</span>
                                        <div class="detail-value">$2,902</div>
                                        <div class="detail-name">This Week's Sales</div>
                                    </div>
                                    <div class="statistic-details-item">
                                        <span class="text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span>9%</span>
                                        <div class="detail-value">$12,821</div>
                                        <div class="detail-name">This Month's Sales</div>
                                    </div>
                                    <div class="statistic-details-item">
                                        <span class="text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span> 19%</span>
                                        <div class="detail-value">$92,142</div>
                                        <div class="detail-name">This Year's Sales</div>
                                    </div>
                                </div>
                                <div id="apex-timeline-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-12 col-sm-12">
                        <form method="post" class="needs-validation" novalidate="">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Quick Draft</h4>
                                </div>
                                <div class="card-body pb-0">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control" required>
                                        <div class="invalid-feedback">Please fill in the title</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Content</label>
                                        <textarea class="summernote-simple"></textarea>
                                    </div>
                                </div>
                                <div class="card-footer pt-0">
                                    <button class="btn btn-primary">Save Draft</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-7 col-md-12 col-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Latest Posts</h4>
                                <div class="card-header-action">
                                    <a href="#" class="btn btn-primary">View All</a>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0">
                                        <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>                         
                                        <tr>
                                            <td>
                                            Introduction Laravel 5
                                            <div class="table-links">
                                                in <a href="#">Web Development</a>
                                                <div class="bullet"></div>
                                                <a href="#">View</a>
                                            </div>
                                            </td>
                                            <td>
                                            <a href="#" class="font-weight-600"><img src="assets/img/avatar/avatar-1.png" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                                            </td>
                                            <td>
                                            <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                            <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            Laravel 5 Tutorial - Installation
                                            <div class="table-links">
                                                in <a href="#">Web Development</a>
                                                <div class="bullet"></div>
                                                <a href="#">View</a>
                                            </div>
                                            </td>
                                            <td>
                                            <a href="#" class="font-weight-600"><img src="assets/img/avatar/avatar-1.png" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                                            </td>
                                            <td>
                                            <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                            <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            Laravel 5 Tutorial - MVC
                                            <div class="table-links">
                                                in <a href="#">Web Development</a>
                                                <div class="bullet"></div>
                                                <a href="#">View</a>
                                            </div>
                                            </td>
                                            <td>
                                            <a href="#" class="font-weight-600"><img src="assets/img/avatar/avatar-1.png" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                                            </td>
                                            <td>
                                            <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                            <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            Laravel 5 Tutorial - Migration
                                            <div class="table-links">
                                                in <a href="#">Web Development</a>
                                                <div class="bullet"></div>
                                                <a href="#">View</a>
                                            </div>
                                            </td>
                                            <td>
                                            <a href="#" class="font-weight-600"><img src="assets/img/avatar/avatar-1.png" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                                            </td>
                                            <td>
                                            <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                            <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            Laravel 5 Tutorial - Deploy
                                            <div class="table-links">
                                                in <a href="#">Web Development</a>
                                                <div class="bullet"></div>
                                                <a href="#">View</a>
                                            </div>
                                            </td>
                                            <td>
                                            <a href="#" class="font-weight-600"><img src="assets/img/avatar/avatar-1.png" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                                            </td>
                                            <td>
                                            <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                            <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            Laravel 5 Tutorial - Closing
                                            <div class="table-links">
                                                in <a href="#">Web Development</a>
                                                <div class="bullet"></div>
                                                <a href="#">View</a>
                                            </div>
                                            </td>
                                            <td>
                                            <a href="#" class="font-weight-600"><img src="assets/img/avatar/avatar-1.png" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                                            </td>
                                            <td>
                                            <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                            <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Visitors & Referral</h4>
                            </div>
                            <div class="card-body">
                                <div class="row mb-sm-5">
                                    <div class="col text-center">
                                        <div class="browser browser-chrome"></div>
                                        <div class="mt-2 font-weight-bold">Chrome</div>
                                        <div class="text-muted text-small"><span class="text-primary"><i class="fas fa-caret-up"></i></span> 48%</div>
                                    </div>
                                    <div class="col text-center">
                                        <div class="browser browser-firefox"></div>
                                        <div class="mt-2 font-weight-bold">Firefox</div>
                                        <div class="text-muted text-small"><span class="text-primary"><i class="fas fa-caret-up"></i></span> 26%</div>
                                    </div>
                                    <div class="col text-center">
                                        <div class="browser browser-safari"></div>
                                        <div class="mt-2 font-weight-bold">Safari</div>
                                        <div class="text-muted text-small"><span class="text-danger"><i class="fas fa-caret-down"></i></span> 14%</div>
                                    </div>
                                    <div class="col text-center">
                                        <div class="browser browser-opera"></div>
                                        <div class="mt-2 font-weight-bold">Opera</div>
                                        <div class="text-muted text-small">7%</div>
                                    </div>
                                    <div class="col text-center">
                                        <div class="browser browser-internet-explorer"></div>
                                        <div class="mt-2 font-weight-bold">IE</div>
                                        <div class="text-muted text-small"><span class="text-primary"><i class="fas fa-caret-up"></i></span> 5%</div>
                                    </div>
                                </div>
                                <div id="visitorMap"></div>
                                <div class="mt-5">
                                    <div class="mb-4">
                                        <div class="text-small float-right font-weight-bold text-muted">2,100</div>
                                        <div class="font-weight-bold mb-1">Google</div>
                                        <div class="progress" data-height="3">
                                            <div class="progress-bar" role="progressbar" data-width="80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="text-small float-right font-weight-bold text-muted">1,880</div>
                                        <div class="font-weight-bold mb-1">Facebook</div>
                                        <div class="progress" data-height="3">
                                            <div class="progress-bar" role="progressbar" data-width="67%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="text-small float-right font-weight-bold text-muted">1,521</div>
                                        <div class="font-weight-bold mb-1">Bing</div>
                                        <div class="progress" data-height="3">
                                            <div class="progress-bar" role="progressbar" data-width="58%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="text-small float-right font-weight-bold text-muted">884</div>
                                        <div class="font-weight-bold mb-1">Yahoo</div>
                                        <div class="progress" data-height="3">
                                            <div class="progress-bar" role="progressbar" data-width="36%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="text-small float-right font-weight-bold text-muted">473</div>
                                        <div class="font-weight-bold mb-1">Kodinger</div>
                                        <div class="progress" data-height="3">
                                            <div class="progress-bar" role="progressbar" data-width="28%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="text-small float-right font-weight-bold text-muted">418</div>
                                        <div class="font-weight-bold mb-1">Multinity</div>
                                        <div class="progress" data-height="3">
                                            <div class="progress-bar" role="progressbar" data-width="20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="d-inline">Tasks</h4>
                                <div class="card-header-action">
                                    <a href="#" class="btn btn-primary">View All</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled list-unstyled-border">
                                    <li class="media">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cbx-1">
                                            <label class="custom-control-label" for="cbx-1"></label>
                                        </div>
                                        <img class="mr-3 rounded-circle" width="50" src="assets/img/avatar/avatar-4.png" alt="avatar">
                                        <div class="media-body">
                                            <div class="badge badge-pill badge-danger mb-1 float-right">Not Finished</div>
                                            <h6 class="media-title"><a href="#">Redesign header</a></h6>
                                            <div class="text-small text-muted">Alfa Zulkarnain <div class="bullet"></div> <span class="text-primary">Now</span></div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cbx-2" checked="">
                                            <label class="custom-control-label" for="cbx-2"></label>
                                        </div>
                                        <img class="mr-3 rounded-circle" width="50" src="assets/img/avatar/avatar-5.png" alt="avatar">
                                        <div class="media-body">
                                            <div class="badge badge-pill badge-primary mb-1 float-right">Completed</div>
                                            <h6 class="media-title"><a href="#">Add a new component</a></h6>
                                            <div class="text-small text-muted">Serj Tankian <div class="bullet"></div> 4 Min</div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cbx-3" >
                                            <label class="custom-control-label" for="cbx-3"></label>
                                        </div>
                                        <img class="mr-3 rounded-circle" width="50" src="assets/img/avatar/avatar-2.png" alt="avatar">
                                        <div class="media-body">
                                            <div class="badge badge-pill badge-warning mb-1 float-right">Progress</div>
                                            <h6 class="media-title"><a href="#">Fix modal window</a></h6>
                                            <div class="text-small text-muted">Michelle Green <div class="bullet"></div> 8 Min</div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cbx-4">
                                            <label class="custom-control-label" for="cbx-4"></label>
                                        </div>
                                        <img class="mr-3 rounded-circle" width="50" src="assets/img/avatar/avatar-1.png" alt="avatar">
                                        <div class="media-body">
                                            <div class="badge badge-pill badge-danger mb-1 float-right">Not Finished</div>
                                            <h6 class="media-title"><a href="#">Remove unwanted classes</a></h6>
                                            <div class="text-small text-muted">Farhan A Mujib <div class="bullet"></div> 21 Min</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>This Week Stats</h4>
                                <div class="card-header-action">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle btn btn-primary" data-toggle="dropdown">Filter</a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item has-icon"><i class="far fa-circle"></i> Electronic</a>
                                            <a href="#" class="dropdown-item has-icon"><i class="far fa-circle"></i> T-shirt</a>
                                            <a href="#" class="dropdown-item has-icon"><i class="far fa-circle"></i> Hat</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item">View All</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="summary">
                                    <div class="summary-info">
                                        <h4>$1,053</h4>
                                        <div class="text-muted">Sold 3 items on 2 customers</div>
                                        <div class="d-block mt-2"><a href="#">View All</a></div>
                                    </div>
                                    <div class="summary-item">
                                        <h6>Item List <span class="text-muted">(3 Items)</span></h6>
                                        <ul class="list-unstyled list-unstyled-border">
                                            <li class="media">
                                                <a href="#"><img class="mr-3 rounded" width="50" src="assets/img/products/product-1-50.png" alt="product"></a>
                                                <div class="media-body">
                                                    <div class="media-right">$405</div>
                                                    <div class="media-title"><a href="#">PlayStation 9</a></div>
                                                    <div class="text-muted text-small">by <a href="#">Susie Willis</a> <div class="bullet"></div> Sunday</div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a href="#"><img class="mr-3 rounded" width="50" src="assets/img/products/product-2-50.png" alt="product"></a>
                                                <div class="media-body">
                                                    <div class="media-right">$499</div>
                                                    <div class="media-title"><a href="#">RocketZ</a></div>
                                                    <div class="text-muted text-small">by <a href="#">Susie Willis</a> <div class="bullet"></div> Sunday
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a href="#"><img class="mr-3 rounded" width="50" src="assets/img/products/product-3-50.png" alt="product"></a>
                                                <div class="media-body">
                                                    <div class="media-right">$149</div>
                                                    <div class="media-title"><a href="#">Xiaomay Readme 4.0</a></div>
                                                    <div class="text-muted text-small">by <a href="#">Kusnaedi</a> <div class="bullet"></div> Tuesday
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a href="#"><img class="mr-3 rounded" width="50" src="assets/img/products/product-5-50.png" alt="product"></a>
                                                <div class="media-body">
                                                    <div class="media-right">$499</div>
                                                    <div class="media-title"><a href="#">RocketZ Camera</a></div>
                                                    <div class="text-muted text-small">by <a href="#">Susie Willis</a> <div class="bullet"></div> Sunday
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a href="#"><img class="mr-3 rounded" width="50" src="assets/img/products/product-4-50.png" alt="product"></a>
                                                <div class="media-body">
                                                    <div class="media-right">$149</div>
                                                    <div class="media-title"><a href="#">Xiaomay Laptop</a></div>
                                                    <div class="text-muted text-small">by <a href="#">Kusnaedi</a> <div class="bullet"></div> Tuesday
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4>Recent Activities</h4>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled list-unstyled-border">
                                    <li class="media">
                                        <img class="mr-3 rounded-circle" width="50" src="assets/img/avatar/avatar-1.png" alt="avatar">
                                        <div class="media-body">
                                            <div class="float-right text-primary">Now</div>
                                            <div class="media-title">Farhan A Mujib</div>
                                            <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="mr-3 rounded-circle" width="50" src="assets/img/avatar/avatar-2.png" alt="avatar">
                                        <div class="media-body">
                                            <div class="float-right">12m</div>
                                            <div class="media-title">Michelle Green</div>
                                            <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="mr-3 rounded-circle" width="50" src="assets/img/avatar/avatar-3.png" alt="avatar">
                                        <div class="media-body">
                                            <div class="float-right">17m</div>
                                            <div class="media-title">Debra Stewart</div>
                                            <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="mr-3 rounded-circle" width="50" src="assets/img/avatar/avatar-4.png" alt="avatar">
                                        <div class="media-body">
                                            <div class="float-right">21m</div>
                                            <div class="media-title">Alfa Zulkarnain</div>
                                            <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="text-center pt-1 pb-1">
                                    <a href="#" class="btn btn-primary btn-lg btn-round">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        
        <!-- Start app Footer part -->
        <footer class="main-footer">
            <div class="footer-left">
                 <div class="bullet"></div>  <a href="templateshub.net">Templates Hub</a>
            </div>
            <div class="footer-right">
            
            </div>
        </footer>
    </div>
</div>

<!-- General JS Scripts -->
<script src="assets/bundles/lib.vendor.bundle.js"></script>
<script src="js/CodiePie.js"></script>

<!-- JS Libraies -->
<script src="assets/modules/apexcharts/apexcharts.min.js"></script>
<script src="assets/modules/simple-weather/jquery.simpleWeather.min.js"></script>
<script src="assets/modules/jqvmap/dist/jquery.vmap.min.js"></script>
<script src="assets/modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="assets/modules/summernote/summernote-bs4.js"></script>
<script src="assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

<!-- Page Specific JS File -->
<script src="js/page/index-0.js"></script>

<!-- Template JS File -->
<script src="js/scripts.js"></script>
<script src="js/custom.js"></script>
</body>

<!-- index-0.html  Tue, 07 Jan 2020 03:35:42 GMT -->
</html>