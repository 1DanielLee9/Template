<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Chiketto | Train</title>
    <!-- Favicon-->
    <link rel="icon" href="{{asset('base/chiketto.ico')}}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{asset('base/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Select Css -->
    <link href="{{ asset('base/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />         
    
    <!-- Waves Effect Css -->
    <link href="{{asset('base/plugins/node-waves/waves.css')}}" rel="stylesheet" />
    
    <!-- Animation Css -->
    <link href="{{asset('base/plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- Bootstrap Spinner Css -->
    <link href="{{ asset('base/plugins/jquery-spinner/css/bootstrap-spinner.css')}}" rel="stylesheet">        
    
    <!-- Bootstrap DatePicker Css -->
    <link href="{{asset('base/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{asset('base/css/style.css')}}" rel="stylesheet">  
    
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('base/css/themes/all-themes.css')}}" rel="stylesheet" />    

    <style>
        .train-page{
            background-image: url("{{asset('base/images/trains-bg.jpg')}}");
            height: 100%;
            background-repeat: no-repeat;
            background-size: cover;
            padding-left: 0;
            max-width: 80%;
            margin: 5% auto;
            overflow-x: hidden;            
        }
        .train-page .train-box .logo small {
            display: block;
            width: 100%;
            text-align: center;
            color: #fff;
            margin-top: -5px;
        }
        .train-page .train-box .logo a {
            font-size: 36px;
            display: block;
            width: 100%;
            text-align: center;
            color: #fff;
        }
        .train-page .train-box .msg {
            color: #555;
            margin-bottom: 30px;
            text-align: center;
        }
        .train-page .train-box .logo {
            margin-bottom: 20px;
        }
        @media (max-width: 991px){
            .train-page{
                background-image: url("{{asset('base/images/trains-bg-s.jpg')}}");
                background-size: cover;                
            }
        }
        @media print {
            body * {
                visibility: hidden;
            }
            #section-to-print, #section-to-print * {
                visibility: visible;
            }
            #section-to-print {
                position: absolute;
                left: 0;
                top: 0;
            }
        }        

    </style>
</head>

<body class="train-page">
    <div class="train-box">
        <div class="logo">
            <a href="{{route('customerHome')}}"><img style="width:150px;" src="{{asset('Chiketto-logo-white.png')}}"></a>
            <small style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Take You Anywhere</small>
        </div>
        <div class="card">
            <div class="body" id="section-to-print" style="padding: 0;background-color:lightsalmon">
                <div class="row clearfix "> 
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                        <div class="form-group m-b-0" style="background-color: coral;width:100%;height:100%;margin-bottom: 0;">
                            <img src="{{asset('base/images/train-ticket.png')}}" alt="PT.KAI" style="width: 50px">
                            <h2 style="width: fit-content;float: right;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" class="m-l-0 m-r-0 m-t-10 p-r-50">BOARDING PASS</h2>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="form-group">
                                <p>nama/<i>name</i></p>
                            </div>
                            <div class="form-group">
                                <p>nomor identitas/<i>id number</i></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="form-group">
                                <p>kode booking/<i>bookingcode</i></p>
                            </div>
                            <div class="form-group">
                                <p>tipe pnp/<i>pax type</i></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 padding-0 align-center">
                            <img src="{{asset('base/images/barcode.png')}}" alt="Barcode" style="width: 200px;height: 60px">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <p>kereta api/<i>train</i></p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <p>no td/<i>seat number</i></p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <p>berangkat/<i>depart</i></p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <p>perkiraan tiba/<i>ETA</i></p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin:0;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color: coral;width:100%;height:100%;margin-bottom: 0;">
                            <div class="form-group" style="margin-bottom: 0;">
                                <h1 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;opacity: 0;" class="m-t-0">l</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Jquery Core Js -->
    <script src="{{asset('base/plugins/jquery/jquery.min.js')}}"></script>
    
    <!-- Bootstrap Core Js -->
    <script src="{{asset('base/plugins/bootstrap/js/bootstrap.js')}}"></script>
    
    <!-- Select Plugin Js -->
    <script src="{{asset('base/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>   
    
    <!-- Jquery Spinner Plugin Js -->
    <script src="{{ asset('base/plugins/jquery-spinner/js/jquery.spinner.js')}}"></script>    
    
    <!-- Autosize Plugin Js -->
    <script src="{{asset('base/plugins/autosize/autosize.js')}}"></script>        

    <!-- Waves Effect Plugin Js -->
    <script src="{{asset('base/plugins/node-waves/waves.js')}}"></script>

    <!-- Validation Plugin Js -->
    <script src="{{asset('base/plugins/jquery-validation/jquery.validate.js')}}"></script>

    <!-- Moment Plugin Js -->
    <script src="{{ asset('base/plugins/momentjs/moment.js')}}"></script>    

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="{{ asset('base/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>    
    
    <script>
        $(document).ready(function () {
            $('#fun').slideUp();
            var a = parseInt($('#adult').val());
            var c = parseInt($('#children').val());
            var i = parseInt($('#infant').val());
            var total = a+c+i;
            var grade = $('#cabinClass').val();
            $('#grade').text(grade);
            $('#number').text(total);
            $('#depart').removeClass();
            $('#depart').addClass('col-lg-12 col-md-12 col-sm-12 col-xs-12');
            $('#return').slideUp();
            $('#oneway').attr('checked','true');
            window.print();
        });
    </script>

    <script>
        $('#drpd').click(function () {
            $('#fun').slideToggle('fast', function () {
                if ($('#fun').is(':hidden')) {
                    // console.log('LoL');
                    $('#done').removeAttr('disabled');
                } else {
                    // console.log('O_o;');
                    $('#done').attr('disabled','true');
                }
            });
        });
    </script>

    <script>
        $('#ready').click(function () {
            $('#fun').slideUp();
            var a = parseInt($('#adult').val());
            var c = parseInt($('#children').val());
            var i = parseInt($('#infant').val());
            var total = a+c+i;
            var grade = $('#cabinClass').val();
            $('#grade').text(grade);
            $('#number').text(total);
            $('#done').removeAttr('disabled');
        });
    </script>

    <script>
        $('#oneway').click(function () {
            $('#return').slideUp();            
            $('#depart').removeClass();
            $('#depart').addClass('col-lg-12 col-md-12 col-sm-12 col-xs-12');
        });
    </script>

    <script>
        $('#roundtrip').click(function () {
            $('#return').slideDown();            
            $('#depart').removeClass();
            $('#depart').addClass('col-lg-6 col-md-6 col-sm-6 col-xs-6');
        });
    </script>

    <script>
        $(function () {
            //Bootstrap datepicker plugin
            $('#datepicker_container input').datepicker({
                autoclose: true,
                container: '#datepicker_container',                
                format: 'DD dd MM yyyy',
                language: 'en',
                startDate: '+0d',
                maxViewMode:1,
                orientation: "bottom left",
                clearBtn:true,
                todayHighlight:true
            });   
        });
    </script> 


    <!-- Custom Js -->
    <script src="{{asset('base/js/admin.js')}}"></script>


    <script src="{{asset('base/js/pages/examples/sign-in.js')}}"></script>
    

</body>

</html>