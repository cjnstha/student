<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="description" content="">
    <!-- Base Css Files -->
    <link href="{{url('assets/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css')}}" rel="stylesheet"/>
    <link href="{{url('assets/libs/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{url('assets/libs/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"/>
    <link href="{{url('assets/libs/fontello/css/fontello.css')}}" rel="stylesheet"/>
    <link href="{{url('assets/libs/animate-css/animate.min.css')}}" rel="stylesheet"/>
    <link href="{{url('assets/libs/nifty-modal/css/component.css')}}" rel="stylesheet"/>
    <link href="{{url('assets/libs/magnific-popup/magnific-popup.css')}}" rel="stylesheet"/>
    <link href="{{url('assets/libs/ios7-switch/ios7-switch.css')}}" rel="stylesheet"/>
    <link href="{{url('assets/libs/pace/pace.css')}}" rel="stylesheet"/>
    <link href="{{url('assets/libs/sortable/sortable-theme-bootstrap.css')}}" rel="stylesheet"/>
    <link href="{{url('assets/libs/bootstrap-datepicker/css/datepicker.css')}}" rel="stylesheet"/>
    <link href="{{url('assets/libs/jquery-icheck/skins/all.css')}}" rel="stylesheet"/>
    <!-- Code Highlighter for Demo -->
    <link href="{{url('assets/libs/prettify/github.css')}}" rel="stylesheet"/>

    <!-- Extra CSS Libraries Start -->
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{url('assets/libs/jquery-jvectormap/css/jquery-jvectormap-1.2.2.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{url('assets/libs/bootstrap-datepicker/css/datepicker.css')}}">

    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{url('assets/libs/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
    <link href="{{url('assets/css/style.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('assets/css/main.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('assets/css/style-responsive.css')}}" rel="stylesheet"/>


    <link rel="apple-touch-icon" href="{{url('assets/img/apple-touch-icon.png')}}"/>
    <link rel="apple-touch-icon" sizes="57x57" href="{{url('assets/img/apple-touch-icon-57x57.png')}}"/>
    <link rel="apple-touch-icon" sizes="72x72" href="{{url('assets/img/apple-touch-icon-72x72.png')}}"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{{url('assets/img/apple-touch-icon-76x76.png')}}"/>
    <link rel="apple-touch-icon" sizes="114x114" href="{{url('assets/img/apple-touch-icon-114x114.png')}}"/>
    <link rel="apple-touch-icon" sizes="120x120" href="{{url('assets/img/apple-touch-icon-120x120.png')}}"/>
    <link rel="apple-touch-icon" sizes="144x144" href="{{url('assets/img/apple-touch-icon-144x144.png')}}"/>
    <link rel="apple-touch-icon" sizes="152x152" href="{{url('assets/img/apple-touch-icon-152x152.png')}}"/>
    <style type="text/css">
        .dt-buttons button {
            background-color: #fff;
            color: #444;
            border-radius: 0px;
            box-shadow: none;
            border: 1px solid #e5e5e5;
            font-size: 11px;
            font-weight: bold;
            text-transform: uppercase;
            font-family: 'Montserrat', sans-serif;
        }

        .dt-buttons button:hover, .dt-buttons button:active {
            background-color: #1ab394;
            color: #fff;
            border-color: #1ab394;
        }

        div.dt-buttons {
            position: relative;
            float: left;
        }

        .dataTables_wrapper .dataTables_filter {
            float: right;
            text-align: right;
        }

        .dataTables_filter input {
            background-color: #fff;
            color: #444;
            box-shadow: none;
            border: 1px solid #e5e5e5;
            font-size: 12px;
        }

        .dataTables_wrapper .dataTables_paginate {
            float: right;
            text-align: right;
            padding-top: 0.25em;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.disabled,
        .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover,
        .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active {
            cursor: default;
            color: #666 !important;
            border: 1px solid transparent;
            background: transparent;
            box-shadow: none;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button {
            box-sizing: border-box;
            display: inline-block;
            min-width: 1.5em;
            padding: 0.5em 1em;
            margin-left: 2px;
            text-align: center;
            text-decoration: none !important;
            cursor: pointer;
            *cursor: hand;
            color: #333;
            border: 1px solid #e5e5e5;
            border-radius: 2px;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.current,
        .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
            color: #ffffff;
            border: 1px solid #00a65a;
            background-color: #00a65a;
            font-weight: bold;

        }

        .dataTables_wrapper .dataTables_paginate #datatables-1_previous.paginate_button,
        .dataTables_wrapper .dataTables_paginate #datatables-1_next.paginate_button {
            border: 1px solid transparent;
            color: #00a65a;
        }

        .dataTables_wrapper .dataTables_paginate #datatables-1_previous.paginate_button:hover,
        .dataTables_wrapper .dataTables_paginate #datatables-1_next.paginate_button:hover {
            color: #00a65a
        }
    </style>
</head>

<body class="fixed-left">
<!-- Modal Start -->
<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
@include('layouts.header')
<!-- Top Bar End -->
@include('layouts.sidebar')

<!-- Right Sidebar End -->
    <!-- Start right content -->
@yield('contents')
<!-- End right content -->

</div>
<div id="contextMenu" class="dropdown clearfix">
    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu"
        style="display:block;position:static;margin-bottom:5px;">
        <li><a tabindex="-1" href="javascript:;" data-priority="high"><i class="fa fa-circle-o text-red-1"></i> High
                Priority</a></li>
        <li><a tabindex="-1" href="javascript:;" data-priority="medium"><i class="fa fa-circle-o text-orange-3"></i>
                Medium Priority</a></li>
        <li><a tabindex="-1" href="javascript:;" data-priority="low"><i class="fa fa-circle-o text-yellow-1"></i> Low
                Priority</a></li>
        <li><a tabindex="-1" href="javascript:;" data-priority="none"><i class="fa fa-circle-o text-lightblue-1"></i>
                None</a></li>
    </ul>
</div>
<!-- End of page -->
<!-- the overlay modal element -->
<div class="md-overlay"></div>
<!-- End of eoverlay modal -->
<script>
    var resizefunc = [];
</script>
<script src="{{url('assets/libs/jquery/jquery-1.11.1.min.js')}}"></script>
<script src="{{url('assets/libs/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{url('assets/libs/jqueryui/jquery-ui-1.10.4.custom.min.js')}}"></script>
<script src="{{url('assets/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js')}}"></script>

<script src="{{url('assets/libs/jquery-animate-numbers/jquery.animateNumbers.js')}}"></script>
<script src="{{url('assets/libs/ios7-switch/ios7.switch.js')}}"></script>
<script src="{{url('assets/libs/fastclick/js/fastclick.js')}}"></script>
<script src="{{url('assets/libs/jquery-blockui/jquery.blockUI.js')}}"></script>
<script src="{{url('assets/libs/bootstrap-bootbox/bootbox.min.js')}}"></script>
<script src="{{url('assets/libs/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<script src="{{url('assets/libs/jquery-sparkline/jquery-sparkline.js')}}"></script>
<script src="{{url('assets/libs/nifty-modal/js/classie.js')}}"></script>
<script src="{{url('assets/libs/nifty-modal/js/modalEffects.js')}}"></script>
<script src="{{url('assets/libs/sortable/sortable.min.js')}}"></script>
<script src="{{url('assets/libs/bootstrap-fileinput/bootstrap.file-input.js')}}"></script>
<script src="{{url('assets/libs/bootstrap-select/bootstrap-select.min.js')}}"></script>
<script src="{{url('assets/libs/bootstrap-select2/select2.min.js')}}"></script>
<script src="{{url('assets/libs/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{url('assets/libs/pace/pace.min.js')}}"></script>
<script src="{{url('assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script src="{{url('assets/libs/jquery-icheck/icheck.min.js')}}"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
<!-- FastClick -->
<script src="{{url('assets/libs/prettify/prettify.js')}}"></script>
<script src="{{url('assets/js/init.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#datatables-1').DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'csv',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7],
                    }
                }
            ]
        });
    });

</script>


</body>
</html>
