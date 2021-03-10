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
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
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
                        <div class="form">
                            <input type="date" id="datepicker" class="form-control" name="order-date" value="<?php echo date('m/d/Y')?>" >
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
                                {{-- <th >Date</th> --}}
                                <th >Status</th>
                                <th >Total Bill</th>
                                <th >Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr onclick="getOrderInfo()">
                                <td style="width:30px;"><span class="fa fa-truck"></td>
                                <td style="width:120px;">PCK-268</td>
                                <td style="width:130px;">Abdullah Khan</td>
                                <td>0321-213213</td>
                                <td> Phase 1, Hayattabad</td>
                                {{-- <td><span class="fa fa-calendar"></span> Thursday, 4:39 pm</td> --}}
                                <td><span style="color:#84b581; font-weight:bold;">Delivered</span></td>
                                <td>1500 Rs</td>
                                <td>
                                    <a href="#" class="btn btn-simple btn-icon"><i
                                            class=" fas fa-check"></i></a>
                                    <a href="#" class="btn btn-simple btn-icon"><i
                                            class=" fas fa-times"></i></a>
                                    <a href="#" class="btn btn-simple btn-icon"><i
                                            class="fas fa-info"></i></a>
                                </td>
                            </tr>
                            <tr onclick="getOrderInfo()">
                                <td style="width:30px;"><span class="fa fa-truck"></td>
                                <td style="width:120px;">PCK-268</td>
                                <td style="width:180px;">Abdullah Khan</td>
                                <td>0321-213213</td>
                                <td> Phase 1, Hayattabad</td>
                                {{-- <td><span class="fa fa-calendar"></span> Thursday, 4:39 pm</td> --}}
                                <td><span style="color:#fcba03; font-weight:bold;">Pending</span></td>
                                <td>1500 Rs</td>
                                <td>
                                    <a href="#" class="btn btn-simple btn-icon"><i
                                            class=" fas fa-check"></i></a>
                                    <a href="#" class="btn btn-simple btn-icon"><i
                                            class=" fas fa-times"></i></a>
                                    <a href="#" class="btn btn-simple btn-icon"><i
                                            class="fas fa-info"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td onclick="getOrderInfo()" style="width:30px;"><span class="fa fa-truck"></td>
                                <td onclick="getOrderInfo()" style="width:120px;">PCK-268</td>
                                <td onclick="getOrderInfo()" style="width:180px;">Abdullah Khan</td>
                                <td onclick="getOrderInfo()">0321-213213</td>
                                <td onclick="getOrderInfo()" style="400px;"> H # E303/12-D1 street # 3. New Iqbal Park, Lahore Cantt</td>
                                {{-- <td><span class="fa fa-calendar"></span> Thursday, 4:39 pm</td> --}}
                                <td onclick="getOrderInfo()"><span style="color:red; font-weight:bold;">Canceled</span></td>
                                <td onclick="getOrderInfo()">1500 Rs</td>
                                <td>
                                    <a href="#" class="btn btn-simple btn-icon"><i
                                            class=" fas fa-check"></i></a>
                                    <a href="#" class="btn btn-simple btn-icon"><i
                                            class=" fas fa-times"></i></a>
                                    <a href="#" class="btn btn-simple btn-icon"><i
                                            class="fas fa-info"></i></a>
                                </td>
                            </tr>
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
<script>
    $('#datepicker').datepicker({
        "setDate": new Date(),
        "autoclose": true
});
    console.log($('#datepicker'));  

    function getOrderInfo() {
        $('#myModal4').modal('show');
    }
</script>
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