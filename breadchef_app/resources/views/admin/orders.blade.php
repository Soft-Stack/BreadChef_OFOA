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
                    <center>
                        <div id="spinner" hidden class="spinner-border text-primary" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </center>
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

    /**
     * You first need to create a formatting function to pad numbers to two digits…
     **/
     function twoDigits(d) {
        if(0 <= d && d < 10) return "0" + d.toString();
        if(-10 < d && d < 0) return "-0" + (-1*d).toString();
        return d.toString();
    }

    /**
     * …and then create the method to output the date string as desired.
     * Some people hate using prototypes this way, but if you are going
     * to apply this to more than one Date object, having it as a prototype
     * makes sense.
     **/
    Date.prototype.toMysqlFormat = function() {
        return this.getUTCFullYear() + "-" + twoDigits(1 + this.getUTCMonth()) + "-" + twoDigits(this.getUTCDate()) + " " + twoDigits(this.getUTCHours()+5) + ":" + twoDigits(this.getUTCMinutes()) + ":" + twoDigits(this.getUTCSeconds());
    };
    var date = new Date();
    var today = date.toMysqlFormat().split(' ')[0];
    var orders = null ;


    function getOrderInfo(orderid) {
        var cart = null;
        var total = null;
        var comment = null;
        orders.forEach(order => {
            if(order.id == orderid) {
                console.log('[getOrderInfo] ', order);
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
                            <div class="col-md-12">
                                <p style="font-size:16px; font-weight:bold">ORDER DETAILS</p>
        `;

        cart.forEach(item => {
            var orderPayload =  `
                <div class="row" style="margin-top:3px;">
                    <div class="col-md-7">${item[0]}</div>
                    <div class="col-md-3">X   ${item[1]}</div>
                    <div class="col-md-2"> RS.${item[2]}</div>
                </div>
            `;

            payloadHeader += orderPayload;
        });

        var payloadFooter =  `
                                <div class="row">
                                    <p style="padding-left:13px ;width:100%; margin-top:20px; padding-top:10px; border-top:1px solid;"> <strong> Comment : ${comment} </strong> </p>
                                </div>
                                <div class="row" style="margin-top:10px; padding-top:10px; border-top:1px solid;"  >
                                    <div class="col-md-10"><span style="font-weight:bold;">Total ${cart.length}
                                            Products</span></div>
                                    <div  class="col-md-2"><span style="font-weight:bold; width:100%;">RS.${total}</span></div>
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
                                <td onclick="getOrderInfo(${order.id})" style="400px;"> ${order.customer.address}</td>
                                <td><span class="fa fa-calendar"></span> ${order.datetime} </td>
                                ${status};
                                <td onclick="getOrderInfo()">RS.${order.total_amount}</td>
                                <td>
                                    <a href="#" onclick="markStatus(${order.id}, 'Delivered', this)" class="btn btn-simple btn-icon"><i
                                            class=" fas fa-check"></i></a>
                                    <a href="#" onclick="markStatus(${order.id}, 'Cancelled', this)" class="btn btn-simple btn-icon"><i
                                            class=" fas fa-times"></i></a>
                                    <a href="#" class="btn btn-simple btn-icon"><i
                                            class="fas fa-info"></i></a>
                                </td>
                            </tr>`;
                            // return payload;
        $('#orders-table').prepend(payload);
    }

    function markStatus(orderid, status, e ) {
        // TODO: complete this.
        $.post('/api/markstatus', {'orderid': orderid, 'status': status}, function  (res) {
            console.log(res);

            if(status == "Delivered") {
                status = `<span style="color:green; font-weight:bold;"> Delivered </span>`;
            } else if(status == "Cancelled") {
                status = `<span style="color:red; font-weight:bold;"> Cancelled </span>`;
            }
            console.log(status);
            e.parentNode.parentNode.children[6].innerHTML = status;
        });
        
    }

    $.getJSON(`/api/orderbydate?date=${today}`, function(data) {

        $("#spinner")[0].hidden = false;
        console.log("DATA : ", data);
        orders = data;
        console.log(orders);
        orders.forEach(order => {
            addToTable(order);
        });
        $("#spinner")[0].hidden = true;
    });


    // console.log(orders);

    var channel = Echo.channel('my-channel');
    channel.listen('.my-event', function(data) {
        // alert(JSON.stringify(data));
        // console.log("[pusher] orders", orders);
        orders.push(data.order);
        $('#indicator')[0].innerHTML = '<span class="indicator"></span>';
        
        var payload = `
                <div class="list-group-item list-group-item-action active">
                    <div class="notification-info">
                        <div class="notification-list-user-img">
                            <img alt="" class="user-avatar-md rounded-circle">
                        </div>
                        <div class="notification-list-user-block">
                            <span class="notification-list-user-name">
                                <strong> New Order # ${data.order.id} <strong>
                            </span>
                            <div class="notification-date">few seconds ago</div>
                        </div>
                    </div>
                </div>
        `;

        $('#notifications').prepend(payload);
        console.log(data);

        addToTable(data.order);
    });



</script>

@endsection