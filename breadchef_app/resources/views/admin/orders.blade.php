@extends('admin.shared')

@section('pageContent')



<!-- (Start) Modal4 -->
<div id="myModal4" class="modal fade" role="dialog">
    <div class="modal-dialog" style="margin-top:4%; width:100%;">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row" style="padding:20px;">

                    <div class="col-md-8">
                        <p style="font-size:16px; font-weight:bold">ORDER DETAILS</p>

                        <div class="row" style="margin-top:3px;">
                            <div class="col-md-2">x1</div>
                            <div class="col-md-6">Niger Oud-Turnhout</div>
                            <div class="col-md-4">BS 27,00</div>
                        </div>
                        <div class="row" style="margin-top:3px;">
                            <div class="col-md-2">x1</div>
                            <div class="col-md-6">Niger Oud-Turnhout</div>
                            <div class="col-md-4">BS 27,00</div>
                        </div>
                        <div class="row" style="margin-top:3px;">
                            <div class="col-md-2">x1</div>
                            <div class="col-md-6">Niger Oud-Turnhout</div>
                            <div class="col-md-4">BS 27,00</div>
                        </div>
                        <div class="row" style="margin-top:3px;">
                            <div class="col-md-2">x1</div>
                            <div class="col-md-6">Niger Oud-Turnhout</div>
                            <div class="col-md-4">BS 27,00</div>
                        </div>
                        <div class="row">
                            {{-- <p style="width:90%; margin-top:10px; border-top:1px solid;"></p>
                            <div class="col-md-8"><span style="font-weight:bold;">Discount</span></div>
                            <div class="col-md-4"><span style="font-weight:bold">BS 27,00</span></div> --}}
                        </div>
                        <div class="row" style="margin-top:3px;">
                            <div class="col-md-8"><span style="font-weight:bold;">Total 7
                                    Products</span></div>
                            <div class="col-md-4"><span style="font-weight:bold">BS 27,00</span></div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- (End) Modal4 -->


<div class="dashboard-wrapper">
    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pagehader  -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="page-header">
                    <h3 class="mb-2"> BREAD CHEF | ORDERS </h3>
                    <p class="pageheader-text">Manage orders</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/breadchef-admin') }}" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Orders</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row" style="margin-top: 0px;">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 0px;">
                <div class="row" style="margin-bottom: 20px;" style="margin-top: 0px;">
                    <div class="col-md-5" >

                    </div>
                    <div class="col-md-2">
                        {{-- <div class="form">
                            <input type="date" id="datepicker" class="form-control" name="order-date" value="<?php echo Date('Y-m-d')?>" >
                        </div> --}}
                        {{-- <div class="input-group date" data-provide="datepicker">
                            <input id="datepicker" type="text" class="form-control">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </div>
                        </div> --}}
                        <div class="form-group"> <!-- Date input -->
                            {{-- <label class="control-label" for="date">Date</label> --}}
                            <input class="form-control" id="datepicker" name="date" type="text"/>
                        </div>
                        
                    </div>
                    <div class="col-md-5">
    
                    </div>
    
                </div>                
            </div>
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                {{-- <h5 class="card-header">Hoverable Table</h5> --}}
                <div class="card-body">
                    <table  class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th><input type="checkbox" /></th>
                                <th >Order #</th>
                                <th >Curstomer Name</th>
                                <th >Phone</th>
                                <th >Address</th>
                                <th >Date</th>
                                <th >Status</th>
                                <th >Total Bill</th>
                                <th >Action</th>
                            </tr>
                        </thead>
                        <tbody id="orders-table">
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
 
    <!-- ============================================================== -->
    <!-- end footer -->
    <!-- ============================================================== -->

<!-- ============================================================== -->
<!-- end wrapper  -->
<!-- ============================================================== -->
</div>
{{-- <script src="{{ asset('vendor/jquery/jquery-3.3.1.min.js')}}"></script> --}}

<footer class="footer" style="position: fixed; bottom: 0; ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="text-md-right footer-links d-none d-sm-block">
                    <a href="javascript: void(0);">About</a>
                    <a href="javascript: void(0);">Support</a>
                    <a href="javascript: void(0);">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</footer>
@endsection