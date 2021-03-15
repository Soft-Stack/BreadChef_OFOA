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
                                            {{-- <a href="#" class="list-group-item list-group-item-action active"> 
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img
                                                            src="assets/images/avatar-2.jpg" alt=""
                                                            class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span
                                                            class="notification-list-user-name">Jeremy
                                                            Rakestraw</span>accepted your invitation to join the
                                                        team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img
                                                            src="assets/images/avatar-3.jpg" alt=""
                                                            class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span
                                                            class="notification-list-user-name">John
                                                            Abraham</span>is now following you
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img
                                                            src="assets/images/avatar-4.jpg" alt=""
                                                            class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span
                                                            class="notification-list-user-name">Monaan
                                                            Pechi</span> is watching your main repository
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img
                                                            src="assets/images/avatar-5.jpg" alt=""
                                                            class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span
                                                            class="notification-list-user-name">Jessica
                                                            Caruso</span>accepted your invitation to join the
                                                        team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div> --}}
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
        <!-- Optional JavaScript -->
        <!-- jquery 3.3.1 js-->
        {{-- <script src="{{ asset('vendor/jquery/jquery-3.3.1.min.js')}}"></script> --}}
        {{-- <script src="{{ asset('vendor/jquery/jquery-3.3.1.min.js')}}"></script> --}}
        {{-- <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
        <!-- bootstrap bundle js-->

        {{-- <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.js')}}"></script> --}}

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
            <script src="{{ asset('libs/js/dashboard-sales.js')}}"></script>      

            <script>
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
    
                function showNotifications() {
                    $('#indicator')[0].innerHTML = '';
                }
    
                
            </script>
        @endif        
        
        
        @if (Request::is('breadchef-admin/orders'))
            <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
            <script src="{{ asset('js/admin-orders.js')}}"></script>      
            <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

            <script>
  
                $(document).ready(function () {
                    
                    // console.log($('#datepicker'));  


                    function getOrderInfo2() {
                        $('#myModal4').modal('show');
                    }

                    
                   
                    // source : https://stackoverflow.com/questions/19634588/how-to-add-datepicker-when-i-click-on-text-box
                    if (!$.fn.bootstrapDP && $.fn.datepicker && $.fn.datepicker.noConflict) {
                        var datepicker = $.fn.datepicker.noConflict();
                        $.fn.bootstrapDP = datepicker;
                    }

                    // for bootstrap-datepicker
                    $.datepicker.setDefaults({
                        showOn: "both",
                        buttonImageOnly: true,
                        buttonImage: "calendar.gif",
                        buttonText: "Calendar"
                    });

                     $('#datepicker').bootstrapDP({
                        "format": 'dd/mm/yyyy',
                        "autoclose": true,
                        "todayHighlight": true
                    });

                    
                    $("#datepicker").bootstrapDP("setDate",new Date());
                    
                    $('#datepicker').bootstrapDP().on('changeDate', e => {
                            var date = new Date(e.date);
                            date = date.toLocaleDateString();
                            date = date.split('/');
                            date = date[2]+"-"+date[1]+"-"+date[0]
                            console.log(date);
                    });

                    // for jqueryUI
                    // $( "#datepicker" ).datepicker({ minDate: -100, maxDate: "+0D" });
                    // $( "#datepicker" ).datepicker( "option", "dateFormat", "dd-mm-yy")

                });
            </script>
        @endif
    </body>

</html>
