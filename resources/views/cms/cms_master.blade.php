<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Mouldifi - A fully responsive, HTML5 based admin theme">
        <meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, Mouldifi, web design, CSS3">
        <title>Clo.Factory | Dashboard</title>
        <!-- Site favicon -->
        <link rel='shortcut icon' type='image/x-icon' href='{{ asset('img/CFactory.ico') }}' />
        <!-- Entypo font stylesheet -->
        <link href="{{ asset('lib/Mouldifi-4.2/light/css/entypo.css') }}" rel="stylesheet">
        <!-- Font awesome stylesheet -->
        <link href="{{ asset('lib/Mouldifi-4.2/light/css/font-awesome.min.css') }}" rel="stylesheet">
        <!-- Bootstrap stylesheet min version -->
        <link href="{{ asset('lib/Mouldifi-4.2/light/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Mouldifi core stylesheet -->
        <link href="{{ asset('lib/Mouldifi-4.2/light/css/mouldifi-core.css') }}" rel="stylesheet"> 
        <link rel="stylesheet" href="{{ asset('lib/Mouldifi-4.2/light/css/mouldifi-forms.css') }}">
        <!--Summernote-->
        <link href="{{ asset('lib/Mouldifi-4.2/light/css/plugins/summernote/summernote.css') }}" rel="stylesheet">
        <!--Drag & Drop-->
        <link href="{{ asset('lib/Mouldifi-4.2/light/css/plugins/dropzone/dropzone.css') }}" rel="stylesheet">
        <!--Summernote-->
        <link href="{{ asset('lib/Mouldifi-4.2/light/css/plugins/summernote/summernote.css') }}" rel="stylesheet">
        <!--Markdown-->
        <link href="{{ asset('lib/Mouldifi-4.2/light/css/plugins/markdown/bootstrap-markdown.min.css') }}" rel="stylesheet">
        <!--Cards select2-->
        <link href="{{ asset('lib/Mouldifi-4.2/light/css/plugins/select2/select2.css') }}" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
              <script src="js/html5shiv.min.js"></script>
              <script src="js/respond.min.js"></script>
        <![endif]-->
        <!--[if lte IE 8]>
                <script src="js/plugins/flot/excanvas.min.js"></script>
        <![endif]-->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css"/>
        <script>
            var BASE_URL = "{{ url('') }}/";
        </script>
    </head>
    <body>

        <!-- Page container -->
        <div class="page-container">
            <!-- Page Sidebar -->
            <div class="page-sidebar">

                <!-- Site header  -->
                <header class="site-header">
                    <div class="site-logo">
                        <a href="{{ url('cms/dashboard') }}">
                            <img src="{{ asset('img/logo-robot-inverse.png') }}" alt="clothing-factory-logo" title="clothing-factory-logo" width="45">
                        </a>
                    </div>
                    <div class="site-logo">
                        <h5 style="margin: 1px 0px 0px 3px">Clothing<br>Factory<br>CMS</h5>
                    </div>
                    <div class="sidebar-collapse hidden-xs">
                        <a class="sidebar-collapse-icon" href="{{ url('cms/dashboard') }}">
                            <i class="icon-menu"></i>
                        </a>
                    </div>
                    <div class="sidebar-mobile-menu visible-xs">
                        <a data-target="#side-nav" data-toggle="collapse" class="mobile-menu-icon" href="{{ url('cms/dashboard') }}">
                            <i class="icon-menu"></i>
                        </a>
                    </div>
                </header>
                <!-- /site header -->

                <!-- Main navigation -->
                <ul id="side-nav" class="main-menu navbar-collapse collapse">
                    <li class="has-sub"><a href="{{ url('cms/dashboard') }}"><i class="icon-gauge"></i><span class="title">Dashboard</span></a>
                        <ul class="nav">
                            <li class="active"><a href="{{ url('cms/dashboard') }}"><span class="title">CMS Dashboard</span></a></li>
                        </ul>
                    </li>
                    <li class="has-sub"><a href="{{ url('cms/menu') }}"><i class="icon-layout"></i><span class="title">Menu</span></a>
                        <ul class="nav collapse">
                            <li><a href="{{ url('cms/menu') }}"><span class="title">Menu</span></a></li>
                            <li><a href="{{ url('cms/content') }}"><span class="title">Contents</span></a></li>
                        </ul>
                    </li>
                    <li class="has-sub"><a href="{{ url('cms/category') }}"><i class="icon-layout"></i><span class="title">Category</span></a>
                        <ul class="nav collapse">
                            <li><a href="{{ url('cms/category') }}"><span class="title">Categories</span></a></li>
                            <li><a href="{{ url('cms/product') }}"><span class="title">Products</span></a></li>
                        </ul>
                    </li>
                    <li class="has-sub"><a href="{{ url('cms/order') }}"><i class="icon-gauge"></i><span class="title">Orders</span></a>
                        <ul class="nav">
                            <li><a href="{{ url('cms/order') }}"><span class="title">Orders</span></a></li>
                        </ul>
                    </li>
                </ul>
                <!-- /main navigation -->

            </div>
            <!-- /page sidebar -->

            <!-- Main container -->
            <div class="main-container">

                <!-- Main header -->
                <div class="main-header row">
                    <div class="col-sm-6 col-xs-7">

                        <!-- User info -->
                        <ul class="user-info pull-left">          
                            <li class="profile-info dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="{{ url('cms/dashboard') }}" aria-expanded="false"> 
                                    <img width="44" class="img-circle avatar" alt="" src="{{ asset('lib/Mouldifi-4.2/light/images/man-3.jpg') }}">John Henderson 
                                    <span class="caret"></span>
                                </a>

                                <!-- User action menu -->
                                <ul class="dropdown-menu">

                                    <li><a href="{{ url('cms/dashboard') }}"><i class="icon-user"></i>My profile</a></li>
                                    <li><a href="{{ url('cms/dashboard') }}"><i class="icon-mail"></i>Messages</a></li>
                                    <li><a href="{{ url('cms/dashboard') }}"><i class="icon-clipboard"></i>Tasks</a></li>
                                    <li><a href="{{ url('user/logout') }}"><i class="icon-logout"></i>Logout</a></li>
                                    <li class="divider"></li>
                                    <li><a href="{{ url('cms/dashboard') }}"><i class="icon-cog"></i>Account settings</a></li>
                                    <li><a href="{{ url('') }}"><i class="icon-logout"></i>Back to site</a></li>
                                </ul>
                                <!-- /user action menu -->

                            </li>
                        </ul>
                        <!-- /user info -->

                    </div>

                    <div class="col-sm-6 col-xs-5">
                        <div class="pull-right">
                            <!-- User alerts -->
                            <ul class="user-info pull-left">

                                <!-- Notifications -->
                                <li class="notifications dropdown">
                                    <a data-close-others="true" data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle" href="{{ url('cms/dashboard') }}"><i class="icon-attention"></i><span class="badge badge-info">6</span></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li class="first">
                                            <div class="small"><a class="pull-right danger" href="{{ url('cms/dashboard') }}">Mark all Read</a> You have <strong>3</strong> new notifications.</div>
                                        </li>
                                        <li>
                                            <ul class="dropdown-list">
                                                <li class="unread notification-success"><a href="{{ url('cms/dashboard') }}"><i class="icon-user-add pull-right"></i><span class="block-line strong">New user registered</span><span class="block-line small">30 seconds ago</span></a></li>
                                                <li class="unread notification-secondary"><a href="{{ url('cms/dashboard') }}"><i class="icon-heart pull-right"></i><span class="block-line strong">Someone special liked this</span><span class="block-line small">60 seconds ago</span></a></li>
                                                <li class="unread notification-primary"><a href="{{ url('cms/dashboard') }}"><i class="icon-user pull-right"></i><span class="block-line strong">Privacy settings have been changed</span><span class="block-line small">2 hours ago</span></a></li>
                                                <li class="notification-danger"><a href="{{ url('cms/dashboard') }}"><i class="icon-cancel-circled pull-right"></i><span class="block-line strong">Someone special liked this</span><span class="block-line small">60 seconds ago</span></a></li>
                                                <li class="notification-info"><a href="{{ url('cms/dashboard') }}"><i class="icon-info pull-right"></i><span class="block-line strong">Someone special liked this</span><span class="block-line small">60 seconds ago</span></a></li>
                                                <li class="notification-warning"><a href="{{ url('cms/dashboard') }}"><i class="icon-rss pull-right"></i><span class="block-line strong">Someone special liked this</span><span class="block-line small">60 seconds ago</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="external-last"> <a href="{{ url('cms/dashboard') }}" class="danger">View all notifications</a> </li>
                                    </ul>
                                </li>
                                <!-- /notifications -->

                                <!-- Messages -->
                                <li class="notifications dropdown">
                                    <a data-close-others="true" data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle" href="{{ url('cms/dashboard') }}"><i class="icon-mail"></i><span class="badge badge-secondary">12</span></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li class="first">
                                            <div class="dropdown-content-header"><i class="fa fa-pencil-square-o pull-right"></i> Messages</div>
                                        </li>
                                        <li>
                                            <ul class="media-list">
                                                <li class="media">
                                                    <div class="media-left"><img alt="" class="img-circle img-sm" src="{{ asset('lib/Mouldifi-4.2/light/images/domnic-brown.png') }}"></div>
                                                    <div class="media-body">
                                                        <a class="media-heading" href="{{ url('cms/dashboard') }}">
                                                            <span class="text-semibold">Domnic Brown</span>
                                                            <span class="media-annotation pull-right">Tue</span>
                                                        </a>
                                                        <span class="text-muted">Your product sounds interesting I would love to check this ne...</span>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <div class="media-left"><img alt="" class="img-circle img-sm" src="{{ asset('lib/Mouldifi-4.2/light/images/john-smith.png') }}"></div>
                                                    <div class="media-body">
                                                        <a class="media-heading" href="{{ url('cms/dashboard') }}">
                                                            <span class="text-semibold">John Smith</span>
                                                            <span class="media-annotation pull-right">12:30</span>
                                                        </a>
                                                        <span class="text-muted">Thank you for posting such a wonderful content. The writing was outstanding...</span>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <div class="media-left"><img alt="" class="img-circle img-sm" src="{{ asset('lib/Mouldifi-4.2/light/images/stella-johnson.png') }}"></div>
                                                    <div class="media-body">
                                                        <a class="media-heading" href="{{ url('cms/dashboard') }}">
                                                            <span class="text-semibold">Stella Johnson</span>
                                                            <span class="media-annotation pull-right">2 days ago</span>
                                                        </a>
                                                        <span class="text-muted">Thank you for trusting us to be your source for top quality sporting goods...</span>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <div class="media-left"><img alt="" class="img-circle img-sm" src="{{ asset('lib/Mouldifi-4.2/light/images/alex-dolgove.png') }}"></div>
                                                    <div class="media-body">
                                                        <a class="media-heading" href="{{ url('cms/dashboard') }}">
                                                            <span class="text-semibold">Alex Dolgove</span>
                                                            <span class="media-annotation pull-right">10:45</span>
                                                        </a>
                                                        <span class="text-muted">After our Friday meeting I was thinking about our business relationship and how fortunate...</span>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <div class="media-left"><img alt="" class="img-circle img-sm" src="{{ asset('lib/Mouldifi-4.2/light/images/domnic-brown.png') }}"></div>
                                                    <div class="media-body">
                                                        <a class="media-heading" href="{{ url('cms/dashboard') }}">
                                                            <span class="text-semibold">Domnic Brown</span>
                                                            <span class="media-annotation pull-right">4:00</span>
                                                        </a>
                                                        <span class="text-muted">I would like to take this opportunity to thank you for your cooperation in recently completing...</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="external-last"> <a class="danger" href="{{ url('cms/dashboard') }}">All Messages</a> </li>
                                    </ul>
                                </li>
                                <!-- /messages -->

                            </ul>
                            <!-- /user alerts -->

                        </div>
                    </div>
                </div>
                <!-- /main header -->
                @if( Session::has('ms'))
                <br>
                <div class="alert alert-info alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Great fun!</strong>
                    <br>
                    {!! Session::get('ms') !!}
                </div>						
                @endif
                @if( $errors && $errors->any())
                <br>
                <div class="alert alert-warning alert-dismissible costum-warning" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Warning!</strong>
                    @foreach($errors->all() as $error)
                    <br>{{ $error }}
                    @endforeach
                </div>
                @endif

                @yield('cms_content')

            </div>
            <!-- /main container -->
        </div>
        <!-- /page container --> 

        <!--Load JQuery-->
        <script src="{{ asset('lib/Mouldifi-4.2/light/js/jquery.min.js') }}"></script>
        <script src="{{ asset('lib/Mouldifi-4.2/light/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('lib/Mouldifi-4.2/light/js/plugins/metismenu/jquery.metisMenu.js') }}"></script>
        @if(  !empty($summernote) && !empty($dropzone) )
        <!--Summernote Editor-->
        <script src="{{ asset('lib/Mouldifi-4.2/light/js/plugins/summernote/summernote.min.js') }}"></script>
        <!--Markdown Editor-->
        <script src="{{ asset('lib/Mouldifi-4.2/light/js/plugins/markdown/bootstrap-markdown.js') }}"></script>
        <script src="{{ asset('lib/Mouldifi-4.2/light/js/plugins/markdown/markdown.js') }}"></script>
        <script>
            $(document).ready(function () {
                $('#article').summernote({
                    height: 260, // set editor height
                    minHeight: null, // set minimum height of editor
                    maxHeight: null, // set maximum height of editor
                    focus: true                  // set focus to editable area after initializing summernote
                });


            });
        </script>
        <script src="{{ asset('lib/Mouldifi-4.2/light/js/functions.js') }}"></script>
        @elseif( !empty($summernote) )
        <!--Summernote Editor-->
        <script src="{{ asset('lib/Mouldifi-4.2/light/js/plugins/summernote/summernote.min.js') }}"></script>
        <!--Markdown Editor-->
        <script src="{{ asset('lib/Mouldifi-4.2/light/js/plugins/markdown/bootstrap-markdown.js') }}"></script>
        <script src="{{ asset('lib/Mouldifi-4.2/light/js/plugins/markdown/markdown.js') }}"></script>
        <script>
            $(document).ready(function () {
                $('#article').summernote({
                    height: 260, // set editor height
                    minHeight: null, // set minimum height of editor
                    maxHeight: null, // set maximum height of editor
                    focus: true                  // set focus to editable area after initializing summernote
                });


            });
        </script>
        <script src="{{ asset('lib/Mouldifi-4.2/light/js/functions.js') }}"></script>
        @elseif( !empty($cards) )
        <!-- Select2-->
        <script src="{{ asset('lib/Mouldifi-4.2/light/js/plugins/select2/select2.full.min.js') }}"></script>
        <script src="{{ asset('lib/Mouldifi-4.2/light/js/functions.js') }}"></script>
        <script>
            $(document).ready(function () {
                $(".select2").select2();
            });
        </script>
        @else
        <script src="{{ asset('lib/Mouldifi-4.2/light/js/plugins/blockui-master/jquery-ui.js') }}"></script>
        <script src="{{ asset('lib/Mouldifi-4.2/light/js/plugins/blockui-master/jquery.blockUI.js') }}"></script>
        <!--Float Charts-->
        <script src="{{ asset('lib/Mouldifi-4.2/light/js/plugins/flot/jquery.flot.min.js') }}"></script>
        <script src="{{ asset('lib/Mouldifi-4.2/light/js/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
        <script src="{{ asset('lib/Mouldifi-4.2/light/js/plugins/flot/jquery.flot.resize.min.js') }}"></script>
        <script src="{{ asset('lib/Mouldifi-4.2/light/js/plugins/flot/jquery.flot.selection.min.js') }}"></script>        
        <script src="{{ asset('lib/Mouldifi-4.2/light/js/plugins/flot/jquery.flot.pie.min.js') }}"></script>
        <script src="{{ asset('lib/Mouldifi-4.2/light/js/plugins/flot/jquery.flot.time.min.js') }}"></script>
        <script src="{{ asset('lib/Mouldifi-4.2/light/js/functions.js') }}"></script>

        <!--ChartJs-->
        <script src="{{ asset('lib/Mouldifi-4.2/light/js/plugins/chartjs/Chart.min.js') }}"></script>
        <script>
            $(document).ready(function () {
                var previousPoint = null;
                $('#graph-bars, #graph-lines').bind('plothover', function (event, pos, item) {
                    if (item) {
                        if (previousPoint != item.dataIndex) {
                            previousPoint = item.dataIndex;
                            $('#flotTip').remove();
                            var x = item.datapoint[0],
                                    y = item.datapoint[1];
                            showTooltip(item.pageX, item.pageY, y + ' visitors at ' + x + '.00h');
                        }
                    } else {
                        $('#flotTip').remove();
                        previousPoint = null;
                    }
                });

                var graphData = [{
                        // Visits
                        data: [[6, 1300], [7, 1600], [8, 1900], [9, 2100], [10, 2500], [11, 2200], [12, 2000], [13, 1950], [14, 1900], [15, 2000]],
                        color: '#71c73e'
                    }, {
                        // Returning Visits
                        data: [[6, 500], [7, 600], [8, 550], [9, 600], [10, 800], [11, 900], [12, 800], [13, 850], [14, 830], [15, 1000]],
                        color: '#77b7c5',
                        points: {radius: 4, fillColor: '#77b7c5'}
                    }
                ];
                // Lines
                $.plot($('#graph-lines'), graphData, {
                    series: {
                        points: {
                            show: true,
                            radius: 5
                        },
                        lines: {
                            show: true
                        },
                        shadowSize: 0
                    },
                    grid: {
                        color: '#646464',
                        borderColor: 'transparent',
                        borderWidth: 20,
                        hoverable: true
                    },
                    xaxis: {
                        tickColor: 'transparent',
                        tickDecimals: 2
                    },
                    yaxis: {
                        tickSize: 1000
                    }
                });

                // Bars
                $.plot($('#graph-bars'), graphData, {
                    series: {
                        bars: {
                            show: true,
                            barWidth: .9,
                            align: 'center'
                        },
                        shadowSize: 0
                    },
                    grid: {
                        color: '#646464',
                        borderColor: 'transparent',
                        borderWidth: 20,
                        hoverable: true
                    },
                    xaxis: {
                        tickColor: 'transparent',
                        tickDecimals: 2
                    },
                    yaxis: {
                        tickSize: 1000
                    }
                });

                var $graphBar = $('#graph-bars'), $graphLine = $('#graph-lines'), $linkLine = $('#lines'), $linkBar = $('#bars');
                $graphBar.hide();
                $linkLine.on('click', function (e) {
                    e.preventDefault();

                    $linkBar.removeClass('active');
                    $graphBar.fadeOut(function () {
                        $(this).addClass('active');
                        $graphLine.fadeIn();
                    });
                });
                $linkBar.on('click', function (e) {
                    e.preventDefault();

                    $linkLine.removeClass('active');
                    $graphLine.fadeOut(function () {
                        $(this).addClass('active');
                        $graphBar.fadeIn();
                    });
                });

                var revenueData = [{
                        // Visits
                        data: [[1475280000000, 400.05], [1475366400000, 1600.32], [1475452800000, 900.35], [1475539200000, 2100.31], [1475625600000, 1800.55], [1475712000000, 900.42], [1475798400000, 2885.01], [1475884800000, 1870.97], [1475971200000, 2145.14], [1476057600000, 1130.14], [1476144000000, 1490.02], [1476230400000, 740.74], [1476316800000, 1280.88], [1476403200000, 1157.71], [1476489600000, 599.71], [1476576000000, 2159.89], [1476662400000, 1557.81], [1476748800000, 959.06], [1476835200000, 158.00], [1476921600000, 757.99], [1477008000000, 800], [1477094400000, 950.25], [1477180800000, 1289.22], [1477267200000, 400.52], [1477353600000, 2425], [1477440000000, 1300.35], [1477526400000, 1600.20], [1477612800000, 890.65], [1477699200000, 2165.29], [1477785600000, 1566.22], [1477872000000, 2064.33]],
                        //data: [[6, 400], [7, 1600], [8, 900], [9, 2100], [10, 1200], [12, 1800]],
                        //data: [[1167692400000, 1600.05], [1167778800000, 5800.32], [1167865200000, 570.35], [1167951600000, 5600.31], [1168210800000, 1155.55], [1168297200000, 2255.64], [1168383600000, 5334.02], [1168470000000, 1151.88], [1168556400000, 3352.99], [1168815600000, 2652.99], [1168902000000, 3251.21], [1168988400000, 4152.24], [1169074800000, 4450.48], [1169161200000, 7751.99], [1169420400000, 5851.13], [1169506800000, 1555.04], [1169593200000, 55.37], [1169679600000, 54.23], [1169766000000, 55.42], [1170025200000, 54.01], [1170111600000, 56.97], [1170198000000, 58.14], [1170284400000, 58.14], [1170370800000, 59.02], [1170630000000, 58.74], [1170716400000, 58.88], [1170802800000, 57.71], [1170889200000, 59.71], [1170975600000, 59.89], [1171234800000, 57.81], [1171321200000, 59.06], [1171407600000, 58.00], [1171494000000, 57.99], [1171580400000, 59.39], [1171839600000, 59.39], [1171926000000, 58.07], [1172012400000, 60.07], [1172098800000, 61.14], [1172444400000, 61.39], [1172530800000, 61.46], [1172617200000, 61.79], [1172703600000, 62.00], [1172790000000, 60.07], [1173135600000, 60.69], [1173222000000, 61.82], [1173308400000, 60.05], [1173654000000, 58.91], [1173740400000, 57.93], [1173826800000, 58.16], [1173913200000, 57.55], [1173999600000, 57.11], [1174258800000, 56.59], [1174345200000, 59.61], [1174518000000, 61.69], [1174604400000, 62.28], [1174860000000, 62.91], [1174946400000, 62.93], [1175032800000, 64.03], [1175119200000, 66.03], [1175205600000, 65.87], [1175464800000, 64.64], [1175637600000, 64.38], [1175724000000, 64.28], [1175810400000, 64.28], [1176069600000, 61.51], [1176156000000, 61.89], [1176242400000, 62.01], [1176328800000, 63.85], [1176415200000, 63.63], [1176674400000, 63.61], [1176760800000, 63.10], [1176847200000, 63.13], [1176933600000, 61.83], [1177020000000, 63.38], [1177279200000, 64.58], [1177452000000, 65.84], [1177538400000, 65.06], [1177624800000, 66.46], [1177884000000, 64.40], [1178056800000, 63.68], [1178143200000, 63.19], [1178229600000, 61.93], [1178488800000, 61.47], [1178575200000, 61.55], [1178748000000, 61.81], [1178834400000, 62.37], [1179093600000, 62.46], [1179180000000, 63.17], [1179266400000, 62.55], [1179352800000, 64.94], [1179698400000, 66.27], [1179784800000, 65.50], [1179871200000, 65.77], [1179957600000, 64.18], [1180044000000, 65.20], [1180389600000, 63.15], [1180476000000, 63.49], [1180562400000, 65.08], [1180908000000, 66.30], [1180994400000, 65.96], [1181167200000, 66.93], [1181253600000, 65.98], [1181599200000, 65.35], [1181685600000, 66.26], [1181858400000, 68.00], [1182117600000, 69.09], [1182204000000, 69.10]],
                        color: '#fff',
                        dashes: {show: true}
                    }
                ];

                var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
                $('#placeholder_overview, #Revenue-lines').bind('plothover', function (event, pos, item) {
                    if (item) {
                        if (previousPoint != item.dataIndex) {
                            previousPoint = item.dataIndex;
                            $('#flotTip').remove();
                            var x = item.datapoint[0],
                                    y = item.datapoint[1];
                            //showTooltip(item.pageX, item.pageY, y + ' visitors at ' + x + '.00h');

                            var color = item.series.color;
                            var day = new Date(x).getDate();
                            var month = monthNames[new Date(x).getMonth()];
                            var year = new Date(x).getFullYear();
                            showTooltip(item.pageX,
                                    item.pageY,
                                    day + ' ' + month + ',' + year
                                    + " : <strong>" + y +
                                    "($)</strong>");
                        }
                    } else {
                        $('#flotTip').remove();
                        previousPoint = null;
                    }
                });

                var options = {
                    series: {
                        points: {
                            show: false,
                            radius: 5
                        },
                        lines: {
                            show: true,
                            lineWidth: 5
                        },
                        shadowSize: 0
                    },
                    grid: {
                        color: '#646464',
                        borderColor: 'transparent',
                        borderWidth: 20,
                        hoverable: true,
                        tickColor: "rgba(255,255,255,0.05)",
                        markingsColor: "rgba(255,255,255,0.05)",
                        markingsLineWidth: 5,
                        /*backgroundColor: {
                         colors: ["rgba(54,58,60,0.05)", "rgba(0,0,0,0.2)"]
                         }*/
                    },
                    xaxis: {
                        mode: 'time',
                        font: {
                            weight: "bold"
                        },
                        color: "#D6D8DB",
                        tickColor: 'transparent',
                        tickDecimals: 2
                    },
                    selection: {
                        mode: "x"
                    },
                    yaxis: {
                        font: {
                            weight: "bold"
                        },
                        color: "#D6D8DB",
                        tickSize: 500
                    }
                };

                // Lines
                var plot = $.plot($('#Revenue-lines'), revenueData, options);

                // Bars
                var overview = $.plot($("#placeholder_overview"), revenueData, {
                    colors: ["#edc240", "#5eb95e"],
                    series: {
                        bars: {
                            show: true,
                            lineWidth: 5,
                            fillColor: "#5eb95e"
                        },
                        shadowSize: 2,
                        grow: {
                            active: false
                        }
                    },
                    legend: {
                        show: false
                    },
                    xaxis: {
                        ticks: [],
                        mode: "time"
                    },
                    yaxis: {
                        ticks: [],
                        min: 0,
                        autoscaleMargin: 0.1
                    },
                    selection: {
                        mode: "x"
                    },
                    grid: {
                        color: "#D6D8DB",
                        borderColor: 'transparent',
                        markingsColor: "rgba(255,255,255,0.05)",
                        /*backgroundColor: {
                         colors: ["rgba(54,58,60,0.05)", "rgba(0,0,0,0.2)"]
                         }*/
                    }
                });

                $("#Revenue-lines").bind("plotselected", function (event, ranges) {
                    // do the zooming
                    plot = $.plot($("#Revenue-lines"), revenueData,
                            $.extend(true, {}, options, {
                                xaxis: {
                                    min: ranges.xaxis.from,
                                    max: ranges.xaxis.to
                                }
                            }));

                    // don't fire event on the overview to prevent eternal loop
                    overview.setSelection(ranges, true);
                });

                $("#placeholder_overview").bind("plotselected", function (event, ranges) {
                    plot.setSelection(ranges);
                });

                $("#Revenuelines").click(function (event) {
                    event.preventDefault();
                    overview.clearSelection();
                    $.plot($("#Revenue-lines"), revenueData, options);
                });

                // pie graph
                var doughnutData = [
                    {
                        value: 5742,
                        color: "#2bbfba",
                        highlight: "#1fb3ae",
                        label: "Only Visited"
                    },
                    {
                        value: 2496,
                        color: "#00b8ce",
                        highlight: "#00acc2",
                        label: "Purchased"
                    },
                    {
                        value: 1762,
                        color: "#e5e8eb",
                        highlight: "#d9dcdf",
                        label: "Bounced"
                    }
                ];
                var doughnutOptions = {
                    segmentShowStroke: true,
                    segmentStrokeColor: "#fff",
                    segmentStrokeWidth: 4,
                    percentageInnerCutout: 60, // This is 0 for Pie charts
                    animationSteps: 100,
                    animationEasing: "easeOutBounce",
                    animateRotate: true,
                    animateScale: false,
                    responsive: true,
                    //String - A legend template
                    legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
                };

                var canvas = document.getElementById("doughnutChart");
                var helpers = Chart.helpers;
                //var ctx = document.getElementById("doughnutChart").getContext("2d");
                var moduleDoughnut = new Chart(canvas.getContext("2d")).Doughnut(doughnutData, doughnutOptions);
                var legendHolder = document.createElement('div');
                legendHolder.innerHTML = moduleDoughnut.generateLegend();
                helpers.each(legendHolder.firstChild.childNodes, function (legendNode, index) {
                    helpers.addEvent(legendNode, 'mouseover', function () {
                        var activeSegment = moduleDoughnut.segments[index];
                        activeSegment.save();
                        activeSegment.fillColor = activeSegment.highlightColor;
                        moduleDoughnut.showTooltip([activeSegment]);
                        activeSegment.restore();
                    });
                });
                helpers.addEvent(legendHolder.firstChild, 'mouseout', function () {
                    moduleDoughnut.draw();
                });
                canvas.parentNode.parentNode.appendChild(legendHolder.firstChild);
            });
        </script>
        @endif
        <script src="{{ asset('js/script.js') }}" type="text/javascript"></script>
    </body>
</html>


