@extends('admin.shared')

@section('pageContent')
    <link rel="stylesheet" href="{{ asset('vendor/vector-map/jqvmap.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/jvectormap/jquery-jvectormap-2.0.2.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/fonts/flag-icon-css/flag-icon.min.css')}}">
    <div class="dashboard-wrapper">
        <div class="container-fluid  dashboard-content">
            <!-- ============================================================== -->
            <!-- pagehader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h3 class="mb-2"> BREAD CHEF | Dashboard </h3>
                        <p class="pageheader-text"> Dashboard </p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- pagehader  -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- metric -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-muted" >Unique Customers</h5>
                            <div class="metric-value d-inline-block">
                                <h1 class="mb-1 text-primary" id="unique-customers-value"> - </h1>
                            </div>
                            <div class="metric-label d-inline-block float-right text-success">
                                <i class="fa fa-fw fa-caret-up"></i><span>5.27%</span>
                            </div>
                        </div>
                        <div id="customer-sparkline"></div>
                    </div>
                </div>
                <!-- /. metric -->
                <!-- metric -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-muted">Order This Week</h5>
                            <div class="metric-value d-inline-block">
                                <h1 class="mb-1 text-primary" id="orders-this-week-value" > - </h1>
                            </div>
                            <div class="metric-label d-inline-block float-right text-danger">
                                <i class="fa fa-fw fa-caret-down"></i><span>1.08%</span>
                            </div>
                        </div>
                        <div id="week-order-sparkline"></div>
                    </div>
                </div>
                <!-- /. metric -->
                <!-- metric -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-muted">Orders This Month</h5>
                            <div class="metric-value d-inline-block">
                                <h1 class="mb-1 text-primary" id="orders-this-month-value"> - </h1>
                            </div>
                            <div class="metric-label d-inline-block float-right text-danger">
                                <i class="fa fa-fw fa-caret-down"></i><span>7.00%</span>
                            </div>
                        </div>
                        <div id="month-order-sparkline">
                        </div>
                    </div>
                </div>
                <!-- /. metric -->
                <!-- metric -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-muted">Total Orders</h5>
                            <div class="metric-value d-inline-block">
                                <h1 class="mb-1 text-primary" id="total-orders"> - </h1>
                            </div>
                            <div class="metric-label d-inline-block float-right text-success">
                                <i class="fa fa-fw fa-caret-up"></i><span>4.87%</span>
                            </div>
                        </div>
                        <div id="total-orders-sparkline"></div>
                    </div>
                </div>
                <!-- /. metric -->
            </div>
            <!-- ============================================================== -->
            <!-- revenue  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Revenue</h5>
                        <div class="card-body">
                            <canvas id="revenue" width="400" height="150"></canvas>
                        </div>
                        <div class="card-body border-top">
                            {{-- <div class="row">
                                <div class="offset-xl-1 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 p-3">
                                    {{-- <h4> Today's Earning: $2,800.30</h4> --}}
                                    {{-- <p>Suspendisse potenti. Done csit amet rutrum. --}}
                                    {{-- </p> --}}
                                {{-- </div>
                                <div class="offset-xl-1 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 p-3"> --}}
                                    {{-- <h2 class="font-weight-normal mb-3"><span>$48,325</span>                                                    </h2> --}}
                                    {{-- <div class="mb-0 mt-3 legend-item"> --}}
                                        {{-- <span class="fa-xs text-primary mr-1 legend-title "><i class="fa fa-fw fa-square-full"></i></span> --}}
                                        {{-- <span class="legend-text">Current Week</span></div> --}}
                                {{-- </div>
                                <div class="offset-xl-1 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 p-3">
                                    <h2 class="font-weight-normal mb-3"> --}}

                                                    {{-- <span>$59,567</span> --}}
                                                {{-- </h2> --}}
                                    {{-- <div class="text-muted mb-0 mt-3 legend-item"> <span class="fa-xs text-secondary mr-1 legend-title"><i class="fa fa-fw fa-square-full"></i></span><span class="legend-text">Previous Week</span></div> --}}
                                {{-- </div> --}}
                            {{-- </div>  --}}
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end reveune  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- total sale  -->
                <!-- ============================================================== -->
                {{-- <div class="col-xl-4 col-lg-12 col-md-4 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Total Sale</h5>
                        <div class="card-body">
                            <canvas id="total-sale" width="220" height="155"></canvas>
                            <div class="chart-widget-list">
                                <p>
                                    <span class="fa-xs text-primary mr-1 legend-title"><i class="fa fa-fw fa-square-full"></i></span><span class="legend-text"> Direct</span>
                                    <span class="float-right">$300.56</span>
                                </p>
                                <p>
                                    <span class="fa-xs text-secondary mr-1 legend-title"><i class="fa fa-fw fa-square-full"></i></span>
                                    <span class="legend-text">Affilliate</span>
                                    <span class="float-right">$135.18</span>
                                </p>
                                <p>
                                    <span class="fa-xs text-brand mr-1 legend-title"><i class="fa fa-fw fa-square-full"></i></span> <span class="legend-text">Sponsored</span>
                                    <span class="float-right">$48.96</span>
                                </p>
                                <p class="mb-0">
                                    <span class="fa-xs text-info mr-1 legend-title"><i class="fa fa-fw fa-square-full"></i></span> <span class="legend-text"> E-mail</span>
                                    <span class="float-right">$154.02</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- ============================================================== -->
                <!-- end total sale  -->
                <!-- ============================================================== -->
            </div>
            <div class="row">
                <!-- ============================================================== -->
                <!-- top selling products  -->
                <!-- ============================================================== -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Top Selling Products</h5>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="bg-light">
                                        <tr class="border-0">
                                            <th class="border-0">#</th>
                                            <th class="border-0">Image</th>
                                            <th class="border-0">Product Name</th>
                                            <th class="border-0">Product Id</th>
                                            <th class="border-0">Quantity</th>
                                            <th class="border-0">Price</th>
                                            <th class="border-0">Order Time</th>
                                            <th class="border-0">Customer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <div class="m-r-10"><img src="assets/images/product-pic.jpg" alt="user" class="rounded" width="45"></div>
                                            </td>
                                            <td>Product #1 </td>
                                            <td>id000001 </td>
                                            <td>20</td>
                                            <td>$80.00</td>
                                            <td>27-08-2018 01:22:12</td>
                                            <td>Patricia J. King </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <div class="m-r-10"><img src="assets/images/product-pic-2.jpg" alt="user" class="rounded" width="45"></div>
                                            </td>
                                            <td>Product #2 </td>
                                            <td>id000002 </td>
                                            <td>12</td>
                                            <td>$180.00</td>
                                            <td>25-08-2018 21:12:56</td>
                                            <td>Rachel J. Wicker </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>
                                                <div class="m-r-10"><img src="assets/images/product-pic-3.jpg" alt="user" class="rounded" width="45"></div>
                                            </td>
                                            <td>Product #3 </td>
                                            <td>id000003 </td>
                                            <td>23</td>
                                            <td>$820.00</td>
                                            <td>24-08-2018 14:12:77</td>
                                            <td>Michael K. Ledford </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>
                                                <div class="m-r-10"><img src="assets/images/product-pic-4.jpg" alt="user" class="rounded" width="45"></div>
                                            </td>
                                            <td>Product #4 </td>
                                            <td>id000004 </td>
                                            <td>34</td>
                                            <td>$340.00</td>
                                            <td>23-08-2018 09:12:35</td>
                                            <td>Michael K. Ledford </td>
                                        </tr>
                                        <tr>
                                            <td colspan="8"><a href="#" class="btn btn-outline-light float-right">View Details</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end top selling products  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- revenue locations  -->
                <!-- ============================================================== -->
            </div>
        </div>

@endsection