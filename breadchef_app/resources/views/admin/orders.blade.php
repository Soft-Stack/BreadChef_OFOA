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
<script>
                        var orders = <?php echo json_encode($orders) ; ?> ;

function getOrderInfo(orderid) {
    var cart = null;
    var total = null;
    var comment = null;
    orders.forEach(order => {
        if(order.id == orderid) {
            cart = order.cart;
            total = order.total_amount;
            comment = order.comment;
        }     
    });
    console.log(cart);
    var payloadHeader = `
            <div class="modal-dialog" style="margin-top:4%; width:100%; font-size:18px;">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row" style="padding:20px;">
                        <div class="col-md-8">
                            <p style="font-size:16px; font-weight:bold">ORDER DETAILS</p>
    `;

    cart.forEach(item => {
        var orderPayload =  `
            <div class="row" style="margin-top:3px;">
                <div class="col-md-3">${item[0]}</div>
                <div class="col-md-5">X   ${item[1]}</div>
                <div class="col-md-4"> RS.${item[2]}</div>
            </div>
        `;

        payloadHeader += orderPayload;
    });

    var payloadFooter =  `
                            <div class="row">
                                {{-- <p style="width:90%; margin-top:10px; border-top:1px solid;"></p>
                                <div class="col-md-8"><span style="font-weight:bold;">Discount</span></div>
                                <div class="col-md-4"><span style="font-weight:bold">BS 27,00</span></div> --}}
                                <p style="padding-left:20px ;width:90%; margin-top:10px; border-top:1px solid;"> <strong> Comment : ${comment} </strong> </p>
                            </div>
                            <div style="width:90%; margin-top:10px; border-top:1px solid;" class="row" style="margin-top:20px;">
                                <div class="col-md-8"><span style="font-weight:bold;">Total ${cart.length}
                                        Products</span></div>
                                <div  class="col-md-4"><span style="font-weight:bold;">RS.${total}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    `;
    var finalPayload = payloadHeader + payloadFooter;
    $('#myModal4')[0].innerHTML = finalPayload;
    $('#myModal4').modal('show');
}

// load orders table
function addToTable(order) {
    var status = "";
    if(order.status.trim() === "In Progress") {
        status = `<td onclick="getOrderInfo(${order.id})"><span style="color:#fcba03; font-weight:bold;"> In Progress </span></td>`;
    } else if(order.status == "Delivered") {
        status = `<td onclick="getOrderInfo()"><span style="color:green; font-weight:bold;"> Delivered </span></td>`;
    } else if(order.status == "Cancelled") {
        status = `<td onclick="getOrderInfo()"><span style="color:red; font-weight:bold;"> Cancelled </span></td>`;
    }
    var payload = `<tr>
                            <td onclick="getOrderInfo(${order.id})" style="width:30px;"><span class="fa fa-truck"></td>
                            <td onclick="getOrderInfo(${order.id})" style="width:120px;">${order.id}</td>
                            <td onclick="getOrderInfo(${order.id})" style="width:180px;">${order.customer.name}</td>
                            <td onclick="getOrderInfo(${order.id})">${order.customer.phone}</td>
                            <td onclick="getOrderInfo(${order.id})" style="400px;"> ${order.customer.phone}</td>
                            <td><span class="fa fa-calendar"></span> ${order.datetime} </td>
                            ${status};
                            <td onclick="getOrderInfo()">RS.${order.total_amount}</td>
                            <td>
                                <a href="#" class="btn btn-simple btn-icon"><i
                                        class=" fas fa-check"></i></a>
                                <a href="#" class="btn btn-simple btn-icon"><i
                                        class=" fas fa-times"></i></a>
                                <a href="#" class="btn btn-simple btn-icon"><i
                                        class="fas fa-info"></i></a>
                            </td>
                        </tr>`;
                        // return payload;
    $('#orders-table').prepend(payload);
}
                    // $('.toast').toast('show');
console.log(orders);
orders.forEach(order => {
    console.log(addToTable(order));
});



// console.log(orders);

var channel = Echo.channel('my-channel');
channel.listen('.my-event', function(data) {
    // alert(JSON.stringify(data));
    console.log(data);

    addToTable(data.order);
});



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