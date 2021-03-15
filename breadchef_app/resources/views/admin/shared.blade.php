<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @if (Request::is('breadchef-admin/orders'))
        {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
        <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
        <!-- Bootstrap Date-Picker Plugin -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    @endif
    <script src="{{ asset('js/app.js')}}"></script>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css" /> --}}

    {{-- <script src="{{ asset('vendor/jquery/jquery-3.3.1.min.js')}}"></script> --}}
    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}"> --}}
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />

    <link href="{{ asset('vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('libs/css/style.css')}}">
    {{-- <link rel="stylesheet" href="{{ asset('libs/css/material-dashboard98f3.css')}}"> --}}
    <link rel="stylesheet" href="{{ asset('vendor/fonts/fontawesome/css/fontawesome-all.css')}}">

    <title>BreadChef ;)</title>
</head>

<body>
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <div class="navbar-nav mr-auto">
                    <a class="navbar-brand" href="index.html">Bread Chef | Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse ml-auto justify-content-end"  id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                {{-- <input class="form-control" type="text" placeholder="Search.."> --}}
                            </div>
                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" onclick="showNotifications()" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i><span id="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                        <div class="notification-list">
                                            <div id="notifications" class="list-group">
                                           
                                </li>
                                <li>
                                    <div class="list-footer"></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown connection">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                                <li class="connection-list">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/github.png"
                                                    alt="">
                                                <span>Github</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/dribbble.png"
                                                    alt="">
                                                <span>Dribbble</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/dropbox.png"
                                                    alt="">
                                                <span>Dropbox</span></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/bitbucket.png"
                                                    alt="">
                                                <span>Bitbucket</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/mail_chimp.png"
                                                    alt=""><span>Mail
                                                    chimp</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/slack.png"
                                                    alt=""> <span>Slack</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="conntection-footer"><a href="#">More</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                    src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown"
                                aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">John Abraham </h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            {{-- 	<hr> --}}
                            <li class="nav-divider">
                                Menu
                            </li>
                            <hr>
                            <li class="nav-item">
                                <a class="nav-link" style="font-size: 15px; paddidng-right: 0%; margin-right: 0px;" href="{{ url('/breadchef-admin') }}"><i
                                        class="fas fa-fw fa-chart-pie"></i>
                                    Dashboard</a>
                            </li>
                            <hr>
                            <li class="nav-item ">
                                <a class="nav-link" style="font-size: 15px; paddidng-right: 0%; margin-right: 0px;"
                                    href="{{ url('/breadchef-admin/orders')}}"><i class="fab fa-fw fa-wpforms"></i>
                                    Orders</a>
                            </li>
                            <hr>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- main wrapper -->
        <!-- ============================================================== -->
        @yield('pageContent');
        <!-- ============================================================== -->
        <!-- end main wrapper  -->
        <!-- ============================================================== -->
        
                <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <center>
                                Copyright © 2021 SoftStack All rights reserved.
                            </center>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> --}}
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.js"></script>
        <!-- slimscroll js--> --}}
        <script src="{{ asset('vendor/slimscroll/jquery.slimscroll.js')}}"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    
        <!-- main js-->
        {{-- <script src="{{ asset('libs/js/main-js.js')}}"></script> --}}
   
        {{-- <script src="{{ asset('vendor/datepicker/datepicker.js')}}"></script> --}}

        {{-- <script src="{{ asset('vendor/custom-js/jquery.multi-select.html')}}"></script> --}}
        <!-- dashboard sales js-->

        
        @if (Request::is('breadchef-admin'))
            <!-- chartjs js-->
            
            <script src="{{ asset('vendor/charts/charts-bundle/Chart.bundle.js')}}"></script>
            <script src="{{ asset('vendor/charts/charts-bundle/chartjs.js')}}"></script>
                <!-- jvactormap js-->
            <script src="{{ asset('vendor/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script> 
            <script src="{{ asset('vendor/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
            <!-- sparkline js-->
            <script src="{{ asset('vendor/charts/sparkline/jquery.sparkline.js')}}"></script>
            <script src="{{ asset('vendor/charts/sparkline/spark-js.js')}}"></script>
            {{-- <script src="{{ asset('libs/js/dashboard-sales.js')}}"></script>       --}}

            <script>
                $(function () {
                    "use strict";

                    //
                    // Helper function
                    //
                    function sparkify(data) {
                        var spark = [];
                        for (var key in data) {
                            if (key != 'total') {
                                spark.push(data[key]);
                            }
                        }
                        return spark;
                    }

                    // ============================================================== 
                    // Revenue
                    // ============================================================== 
                    
                    $.getJSON('{{ env('APP_URL') }}/api/revenue', function(data) {

                        var thisWeek = sparkify(data['this-week']);
                        var lastWeek = sparkify(data['last-week']);
                        console.log(thisWeek);
                        console.log(lastWeek);

                        var ctx = document.getElementById('revenue').getContext('2d');
                        var myChart = new Chart(ctx, {
                            type: 'line',

                            data: {
                                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                                datasets: [{
                                        label: 'Current Week',
                                        data: thisWeek,
                                        backgroundColor: "rgba(89, 105, 255,0.5)",
                                        borderColor: "rgba(89, 105, 255,0.7)",
                                        borderWidth: 2
                                    },
                                    {
                                        label: 'Previous Week',
                                        data: lastWeek,
                                        backgroundColor: "rgba(255, 64, 123,0.5)",
                                        borderColor: "rgba(255, 64, 123,0.7)",
                                        borderWidth: 2
                                    }
                                ]
                            },
                            options: {

                                legend: {
                                    display: true,
                                    position: 'bottom',

                                    labels: {
                                        fontColor: '#71748d',
                                        fontFamily: 'Circular Std Book',
                                        fontSize: 14,
                                    }
                                },
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            // Include a dollar sign in the ticks
                                            callback: function (value, index, values) {
                                                return 'Rs.' + value;
                                            }
                                        }
                                    }]
                                },
                            }
                        });
                    });


                    // ============================================================== 
                    // Revenue Cards
                    // ============================================================== 

                    //
                    // For Unique Customer card
                    //
                    $.getJSON('{{ env('APP_URL') }}/api/customer', function (data) {
                        console.log(data);
                        var customerspark = sparkify(data);

                        console.log('cust :', customerspark);
                        $('#unique-customers-value')[0].innerText = data['total'];
                        // [5, 5, 7, 7, 9, 5, 3, 5, 2, 4, 6, 7]
                        $("#customer-sparkline").sparkline(customerspark, {
                            type: 'line',
                            width: '99.5%',
                            height: '100',
                            lineColor: '#5969ff',
                            fillColor: '#dbdeff',
                            lineWidth: 2,
                            spotColor: undefined,
                            minSpotColor: undefined,
                            maxSpotColor: undefined,
                            highlightSpotColor: undefined,
                            highlightLineColor: undefined,
                            resize: true
                        });
                    });



                    //
                    // For Weekly Order and Monthly card
                    //
                    $.getJSON('{{ env('APP_URL') }}/api/orders', function (data) {
                        console.log(data);

                        var weekspark = sparkify(data['current-week']);
                        var monthspark = sparkify(data['this-month']);
                        var totalspark = sparkify(data['total-orders']);

                        $('#orders-this-week-value')[0].innerText = data['current-week']['total'];
                        $('#orders-this-month-value')[0].innerText = data['this-month']['total'];
                        $('#total-orders')[0].innerText = data['total-orders']['total'];


                        $("#week-order-sparkline").sparkline(weekspark, {
                            type: 'line',
                            width: '99.5%',
                            height: '100',
                            lineColor: '#ff407b',
                            fillColor: '#ffdbe6',
                            lineWidth: 2,
                            spotColor: undefined,
                            minSpotColor: undefined,
                            maxSpotColor: undefined,
                            highlightSpotColor: undefined,
                            highlightLineColor: undefined,
                            resize: true
                        });

                        $("#month-order-sparkline").sparkline(monthspark, {
                            type: 'line',
                            width: '99.5%',
                            height: '100',
                            lineColor: '#25d5f2',
                            fillColor: '#dffaff',
                            lineWidth: 2,
                            spotColor: undefined,
                            minSpotColor: undefined,
                            maxSpotColor: undefined,
                            highlightSpotColor: undefined,
                            highlightLineColor: undefined,
                            resize: true
                        });

                        $("#total-orders-sparkline").sparkline(totalspark, {
                            type: 'line',
                            width: '99.5%',
                            height: '100',
                            lineColor: '#fec957',
                            fillColor: '#fff2d5',
                            lineWidth: 2,
                            spotColor: undefined,
                            minSpotColor: undefined,
                            maxSpotColor: undefined,
                            highlightSpotColor: undefined,
                            highlightLineColor: undefined,
                            resize: true,
                        });
                    });
                });

                $(document).ready(function() {
                    $('.dropdown-menu').on('hidden.bs.dropdown', function(e) {
                        $('.dropdown-menu')[0].innerHTML = '<div> <strong> No New Notifications </strong> </div>'
                    });
                });
                var channel = Echo.channel('my-channel');
                channel.listen('.my-event', function(data) {
                    // alert(JSON.stringify(data));
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
                    
                    // console.log(data);
                });            
            </script>
        @endif        
        
        <script>
            function showNotifications() {
                $('#indicator')[0].innerHTML = '';
            }
        </script>
        
        @if (Request::is('breadchef-admin/orders'))
            <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
            <script src="{{ asset('js/admin-orders.js')}}"></script>      
            <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

            <script>
  
                $(document).ready(function () {
                    
                    console.log($('#datepicker'));  


                    function getOrderInfo2() {
                        $('#myModal4').modal('show');
                    }

                   
                    // source : https://stackoverflow.com/questions/19634588/how-to-add-datepicker-when-i-click-on-text-box
                    if (!$.fn.bootstrapDP && $.fn.datepicker && $.fn.datepicker.noConflict) {
                        var datepicker = $.fn.datepicker.noConflict();
                        $.fn.bootstrapDP = datepicker;
                    }

                    // for jqueryUI
                    $( "#datepicker" ).datepicker({ minDate: -100, maxDate: "+0D" });
                    $( "#datepicker" ).datepicker( "option", "dateFormat", "dd-mm-yy")
                    $( "#datepicker" ).datepicker("setDate",new Date())
                        .on('change', function(e) {
                            $('#orders-table')[0].innerHTML = "";
                            $("#spinner")[0].hidden = false
                            var rawdate = e.target.value;
                            var splitted = rawdate.split('-');
                            var newdate =  splitted[2] + "-" + splitted[1] + "-" + splitted[0]; 
                            console.log(newdate);

                            $.getJSON(`{{ env('APP_URL') }}/api/orderbydate?date=${newdate}`, function(data) {

                                console.log("DATA : ", data);
                                orders = data;
                                // console.log(orders);
                                orders.forEach(order => {
                                    addToTable(order);
                                });
                            });
                            $("#spinner")[0].hidden = true;
                        });;
                });
            </script>
        @endif
    </body>

</html>
