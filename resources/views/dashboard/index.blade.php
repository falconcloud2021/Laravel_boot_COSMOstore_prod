@extends('dashboard.layouts.main')
@section('content')

@php
	$date = date('d-m-y');
	$today = App\Models\Sales\Order::where('order_date',$date)->sum('amount');
	$month = date('F');
	$month = App\Models\Sales\Order::where('order_month',$month)->sum('amount');
    $year = date('Y');
	$year = App\Models\Sales\Order::where('order_year',$year)->sum('amount');
    $pending = App\Models\Sales\Order::where('status','pending')->get();
@endphp 

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">             
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Dashboard</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">COSMO</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

                <div class="row">
                    <div class="col-xl-2 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-truncate font-size-14 mb-2">Замовлень за день</p>
                                        <h4 class="mb-2">{{ $today  }}</h4>
                                        <p class="text-muted mb-0"><span class="text-danger fw-bold font-size-12 me-2"><i class="ri-arrow-right-down-line me-1 align-middle"></i>1.09%</span>from previous period</p>
                                    </div>
                                    <div class="avatar-sm">
                                        <span class="avatar-title bg-light text-success rounded-3">
                                            <i class="ri-shopping-cart-2-line font-size-24"></i>  
                                        </span>
                                    </div>
                                </div>                                              
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-xl-2 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-truncate font-size-14 mb-2">Замовлень за місяць</p>
                                        <h4 class="mb-2">{{ $month }}</h4>
                                        <p class="text-muted mb-0"><span class="text-danger fw-bold font-size-12 me-2"><i class="ri-arrow-right-down-line me-1 align-middle"></i>1.09%</span>from previous period</p>
                                    </div>
                                    <div class="avatar-sm">
                                        <span class="avatar-title bg-light text-success rounded-3">
                                            <i class="ri-shopping-cart-2-line font-size-24"></i>  
                                        </span>
                                    </div>
                                </div>                                              
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-xl-2 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-truncate font-size-14 mb-2">Замовлень за <script>document.write(new Date().getFullYear())</script> рік</p>
                                        <h4 class="mb-2">{{ $year }}</h4>
                                        <p class="text-muted mb-0"><span class="text-danger fw-bold font-size-12 me-2"><i class="ri-arrow-right-down-line me-1 align-middle"></i>1.09%</span>from previous period</p>
                                    </div>
                                    <div class="avatar-sm">
                                        <span class="avatar-title bg-light text-success rounded-3">
                                            <i class="ri-shopping-cart-2-line font-size-24"></i>  
                                        </span>
                                    </div>
                                </div>                                              
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-xl-2 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-truncate font-size-14 mb-2">Продажі сьогодні</p>
                                        <h4 class="mb-2">1452</h4>
                                        <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i>9.23%</span>from previous period</p>
                                    </div>
                                    <div class="avatar-sm">
                                        <span class="avatar-title bg-light text-primary rounded-3">
                                            <i class="mdi mdi-currency-usd font-size-24"></i>  
                                        </span>
                                    </div>
                                </div>                                            
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-xl-2 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-truncate font-size-14 mb-2">Продажі місяць</p>
                                        <h4 class="mb-2">1452</h4>
                                        <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i>9.23%</span>from previous period</p>
                                    </div>
                                    <div class="avatar-sm">
                                        <span class="avatar-title bg-light text-primary rounded-3">
                                            <i class="mdi mdi-currency-usd font-size-24"></i>  
                                        </span>
                                    </div>
                                </div>                                            
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-xl-2 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-truncate font-size-14 mb-2">Продажі рік</p>
                                        <h4 class="mb-2">1452</h4>
                                        <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i>9.23%</span>from previous period</p>
                                    </div>
                                    <div class="avatar-sm">
                                        <span class="avatar-title bg-light text-primary rounded-3">
                                            <i class="mdi mdi-currency-usd font-size-24"></i>  
                                        </span>
                                    </div>
                                </div>                                            
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-2 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-truncate font-size-14 mb-2">Юзерів</p>
                                        <h4 class="mb-2">8246</h4>
                                        <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i>16.2%</span>from previous period</p>
                                    </div>
                                    <div class="avatar-sm">
                                        <span class="avatar-title bg-light text-primary rounded-3">
                                            <i class="ri-user-3-line font-size-24"></i>  
                                        </span>
                                    </div>
                                </div>                                              
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-xl-2 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-truncate font-size-14 mb-2">Візити</p>
                                        <h4 class="mb-2">29670</h4>
                                        <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i>11.7%</span>from previous period</p>
                                    </div>
                                    <div class="avatar-sm">
                                        <span class="avatar-title bg-light text-success rounded-3">
                                            <i class="mdi mdi-currency-btc font-size-24"></i>  
                                        </span>
                                    </div>
                                </div>                                              
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-xl-2 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-truncate font-size-14 mb-2">Товари</p>
                                        <h4 class="mb-2">29670</h4>
                                        <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i>11.7%</span>from previous period</p>
                                    </div>
                                    <div class="avatar-sm">
                                        <span class="avatar-title bg-light text-success rounded-3">
                                            <i class="mdi mdi-currency-btc font-size-24"></i>  
                                        </span>
                                    </div>
                                </div>                                              
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-xl-2 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-truncate font-size-14 mb-2">Unique</p>
                                        <h4 class="mb-2">29670</h4>
                                        <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i>11.7%</span>from previous period</p>
                                    </div>
                                    <div class="avatar-sm">
                                        <span class="avatar-title bg-light text-success rounded-3">
                                            <i class="mdi mdi-currency-btc font-size-24"></i>  
                                        </span>
                                    </div>
                                </div>                                              
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-xl-6">

                        <div class="card">
                            <div class="card-body pb-0">
                                <div class="float-end d-none d-md-inline-block">
                                    <div class="dropdown card-header-dropdown">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted">Звіт<i class="mdi mdi-chevron-down ms-1"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Export</a>
                                            <a class="dropdown-item" href="#">Import</a>
                                            <a class="dropdown-item" href="#">Download Report</a>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="card-title mb-4">Email відправлено</h4>

                                <div class="text-center pt-3">
                                    <div class="row">
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <div class="d-inline-flex">
                                                <h5 class="me-2">25,117</h5>
                                                <div class="text-success font-size-12">
                                                    <i class="mdi mdi-menu-up font-size-14"> </i>2.2 %
                                                </div>
                                            </div>
                                            <p class="text-muted text-truncate mb-0">Marketplace</p>
                                        </div><!-- end col -->
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <div class="d-inline-flex">
                                                <h5 class="me-2">$34,856</h5>
                                                <div class="text-success font-size-12">
                                                    <i class="mdi mdi-menu-up font-size-14"> </i>1.2 %
                                                </div>
                                            </div>
                                            <p class="text-muted text-truncate mb-0">Цей тиждень</p>
                                        </div><!-- end col -->
                                        <div class="col-sm-4">
                                            <div class="d-inline-flex">
                                                <h5 class="me-2">$18,225</h5>
                                                <div class="text-success font-size-12">
                                                    <i class="mdi mdi-menu-up font-size-14"> </i>1.7 %
                                                </div>
                                            </div>
                                            <p class="text-muted text-truncate mb-0">Цей місяць</p>
                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                </div>
                            </div>
                            <div class="card-body py-0 px-2">
                                <div id="area_chart" class="apex-charts" dir="ltr"></div>
                            </div>
                        </div><!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body pb-0">
                                <div class="float-end d-none d-md-inline-block">
                                    <div class="dropdown">
                                        <a class="text-reset" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted">За рік<i class="mdi mdi-chevron-down ms-1"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Сьогодні</a>
                                            <a class="dropdown-item" href="#">За тиждень</a>
                                            <a class="dropdown-item" href="#">За місяць</a>
                                            <a class="dropdown-item" href="#">За рік</a>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="card-title mb-4">Дохід</h4>

                                <div class="text-center pt-3">
                                    <div class="row">
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <div>
                                                <h5>17,493</h5>
                                                <p class="text-muted text-truncate mb-0">Marketplace</p>
                                            </div>
                                        </div><!-- end col -->
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <div>
                                                <h5>$44,960</h5>
                                                <p class="text-muted text-truncate mb-0">За тиждень</p>
                                            </div>
                                        </div><!-- end col -->
                                        <div class="col-sm-4">
                                            <div>
                                                <h5>$29,142</h5>
                                                <p class="text-muted text-truncate mb-0">За місяць</p>
                                            </div>
                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                </div>
                            </div>
                            <div class="card-body py-0 px-2">
                                <div id="column_line_chart" class="apex-charts" dir="ltr"></div>
                            </div>
                        </div><!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    </div>
                                </div>

                                <h4 class="card-title mb-4">Крайні транзакції</h4>

                                <div class="table-responsive">
                                    <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Ім'я</th>
                                                <th>Позиція</th>
                                                <th>Статус</th>
                                                <th>Вік</th>
                                                <th>Дата</th>
                                                <th style="width: 120px;">Виплата</th>
                                            </tr>
                                        </thead><!-- end thead -->
                                        <tbody>
                                            <tr>
                                                <td><h6 class="mb-0">Charles Casey</h6></td>
                                                <td>Web Developer</td>
                                                <td>
                                                    <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active</div>
                                                </td>
                                                <td>
                                                    23
                                                </td>
                                                <td>
                                                    04 Apr, 2021
                                                </td>
                                                <td>$42,450</td>
                                            </tr>
                                                <!-- end -->
                                                <tr>
                                                <td><h6 class="mb-0">Alex Adams</h6></td>
                                                <td>Python Developer</td>
                                                <td>
                                                    <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-warning align-middle me-2"></i>Deactive</div>
                                                </td>
                                                <td>
                                                    28
                                                </td>
                                                <td>
                                                    01 Aug, 2021
                                                </td>
                                                <td>$25,060</td>
                                            </tr>
                                                <!-- end -->
                                                <tr>
                                                <td><h6 class="mb-0">Prezy Kelsey</h6></td>
                                                <td>Senior Javascript Developer</td>
                                                <td>
                                                    <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active</div>
                                                </td>
                                                <td>
                                                    35
                                                </td>
                                                <td>
                                                    15 Jun, 2021
                                                </td>
                                                <td>$59,350</td>
                                            </tr>
                                                <!-- end -->
                                                <tr>
                                                <td><h6 class="mb-0">Ruhi Fancher</h6></td>
                                                <td>React Developer</td>
                                                <td>
                                                    <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active</div>
                                                </td>
                                                <td>
                                                    25
                                                </td>
                                                <td>
                                                    01 March, 2021
                                                </td>
                                                <td>$23,700</td>
                                            </tr>
                                                <!-- end -->
                                                <tr>
                                                <td><h6 class="mb-0">Juliet Pineda</h6></td>
                                                <td>Senior Web Designer</td>
                                                <td>
                                                    <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active</div>
                                                </td>
                                                <td>
                                                    38
                                                </td>
                                                <td>
                                                    01 Jan, 2021
                                                </td>
                                                <td>$69,185</td>
                                            </tr>
                                                <!-- end -->
                                                <tr>
                                                <td><h6 class="mb-0">Den Simpson</h6></td>
                                                <td>Web Designer</td>
                                                <td>
                                                    <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-warning align-middle me-2"></i>Deactive</div>
                                                </td>
                                                <td>
                                                    21
                                                </td>
                                                <td>
                                                    01 Sep, 2021
                                                </td>
                                                <td>$37,845</td>
                                            </tr>
                                                <!-- end -->
                                                <tr>
                                                <td><h6 class="mb-0">Mahek Torres</h6></td>
                                                <td>Senior Laravel Developer</td>
                                                <td>
                                                    <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active</div>
                                                </td>
                                                <td>
                                                    32
                                                </td>
                                                <td>
                                                    20 May, 2021
                                                </td>
                                                <td>$55,100</td>
                                            </tr>
                                                <!-- end -->
                                        </tbody><!-- end tbody -->
                                    </table> <!-- end table -->
                                </div>
                            </div><!-- end card -->
                        </div><!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-end">
                                    <select class="form-select shadow-none form-select-sm">
                                        <option selected>Apr</option>
                                        <option value="1">Mar</option>
                                        <option value="2">Feb</option>
                                        <option value="3">Jan</option>
                                    </select>
                                </div>
                                <h4 class="card-title mb-4">Місячний заробіток</h4>
                                
                                <div class="row">
                                    <div class="col-4">
                                        <div class="text-center mt-4">
                                            <h5>3475</h5>
                                            <p class="mb-2 text-truncate">Market Place</p>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-4">
                                        <div class="text-center mt-4">
                                            <h5>458</h5>
                                            <p class="mb-2 text-truncate">За тиждень</p>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-4">
                                        <div class="text-center mt-4">
                                            <h5>9062</h5>
                                            <p class="mb-2 text-truncate">За місяць</p>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->

                                <div class="mt-4">
                                    <div id="donut-chart" class="apex-charts"></div>
                                </div>
                            </div>
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div>
                <!-- end row -->
            </div>
            
        </div>
        <!-- End Page-content -->
        
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Dashboard.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Crafted with <i class="mdi mdi-heart text-danger"></i> Dashboard
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
    </div>
    <!-- end main content-->

</div>
    
@endsection