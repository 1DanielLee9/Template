<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Chiketto | Flight</title>
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
        .flight-page{
            background-image: url("{{asset('base/images/airlines-bg.jpg')}}");
            height: 100%;
            background-repeat: no-repeat;
            background-size: cover;
            padding-left: 0;
            max-width: 80%;
            margin: 5% auto;
            overflow-x: hidden;            
        }
        .flight-page .flight-box .logo small {
            display: block;
            width: 100%;
            text-align: center;
            color: #fff;
            margin-top: -5px;
        }
        .flight-page .flight-box .logo a {
            font-size: 36px;
            display: block;
            width: 100%;
            text-align: center;
            color: #fff;
        }
        .flight-page .flight-box .msg {
            color: #555;
            margin-bottom: 30px;
            text-align: center;
        }
        .flight-page .flight-box .logo {
            margin-bottom: 20px;
        }
        @media (max-width: 991px){
            .flight-page{
                background-image: url("{{asset('base/images/airlines-bg-s.jpg')}}");
                background-size: auto;                
            }
        }

    </style>
</head>

<body class="flight-page">
    <div class="flight-box">
        <div class="logo">
            <a href="{{route('customerHome')}}"><img style="width:150px;" src="{{asset('Chiketto-logo-white.png')}}"></a>
            <small style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Take You Anywhere</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST" action="customerFlightFind">
                    {{ csrf_field() }}
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">                                
                                <input name="type" type="radio" value="oneway" id="oneway" class="with-gap radio-col-blue" />
                                <label for="oneway">ONE WAY</label>                                
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <input name="type" type="radio" value="roundtrip" id="roundtrip" class="with-gap radio-col-blue" onchange="swaps()"/>
                                <label for="roundtrip">ROUNDTRIP</label>
                            </div>
                        </div> 
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                    <p>
                                        <b>From</b>
                                    </p>
                                    <select name="from" data-size="3" class="form-control show-tick" data-live-search="true">
                                        <optgroup label="National">
                                            <option value="Banda Aceh">Banda Aceh</option>
                                            <option value="Medan">Medan</option>
                                            <option value="Padang">Padang</option>
                                            <option value="Pekan Baru">Pekan Baru</option>
                                            <option value="Jambi">Jambi</option>
                                            <option value="Bengkulu">Bengkulu</option>
                                            <option value="Pangkal Pinang">Pangkal Pinang</option>
                                            <option value="Palembang">Palembang</option>
                                            <option value="Bandar Lampung">Bandar Lampung</option>
                                            <option value="Jakarta">Jakarta</option>
                                            <option value="Bandung">Bandung</option>
                                            <option value="Semarang">Semarang</option>
                                            <option value="Yogyakarta">Yogyakarta</option>
                                            <option value="Surabaya">Surabaya</option>
                                            <option value="Pontianak">Pontianak</option>
                                            <option value="Banjarmasin">Banjarmasin</option>
                                            <option value="Samarinda">Samarinda</option>
                                            <option value="Balikpapan">Balikpapan</option>
                                            <option value="Denpasar">Denpasar</option>
                                            <option value="Praya">Praya</option>
                                            <option value="Kupang">Kupang</option>
                                            <option value="Alor">Alor</option>
                                            <option value="Palu">Palu</option>
                                            <option value="Makassar">Makassar</option>
                                            <option value="Gorontalo">Gorontalo</option>
                                            <option value="Manado">Manado</option>
                                            <option value="Ternate">Ternate</option>
                                            <option value="Manokwari">Manokwari</option>
                                            <option value="Biak">Biak</option>
                                            <option value="Sorong">Sorong</option>
                                            <option value="Timika">Timika</option>
                                            <option value="Jayapura">Jayapura</option>
                                            <option value="Wamena">Wamena</option>
                                            <option value="Merauke">Merauke</option>                                    
                                        </optgroup>
                                    </select>
                                </div>                        
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <a href="javascript:void(0);" class="btn btn-primary btn-circle waves-effect waves-circle waves-float">
                                        <i class="material-icons" id="icons">swap_horiz</i>
                                    </a>
                                </div>                        
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                    <p>
                                        <b>To</b>
                                    </p>
                                    <select name="to" data-size="3" class="form-control show-tick" data-live-search="true" >
                                        <optgroup label="National">
                                            <option value="Banda Aceh">Banda Aceh</option>
                                            <option value="Medan">Medan</option>
                                            <option value="Padang">Padang</option>
                                            <option value="Pekan Baru">Pekan Baru</option>
                                            <option value="Jambi">Jambi</option>
                                            <option value="Bengkulu">Bengkulu</option>
                                            <option value="Pangkal Pinang">Pangkal Pinang</option>
                                            <option value="Palembang">Palembang</option>
                                            <option value="Bandar Lampung">Bandar Lampung</option>
                                            <option value="Jakarta">Jakarta</option>
                                            <option value="Bandung">Bandung</option>
                                            <option value="Semarang">Semarang</option>
                                            <option value="Yogyakarta">Yogyakarta</option>
                                            <option value="Surabaya">Surabaya</option>
                                            <option value="Pontianak">Pontianak</option>
                                            <option value="Banjarmasin">Banjarmasin</option>
                                            <option value="Samarinda">Samarinda</option>
                                            <option value="Balikpapan">Balikpapan</option>
                                            <option value="Denpasar">Denpasar</option>
                                            <option value="Praya">Praya</option>
                                            <option value="Kupang">Kupang</option>
                                            <option value="Alor">Alor</option>
                                            <option value="Palu">Palu</option>
                                            <option value="Makassar">Makassar</option>
                                            <option value="Gorontalo">Gorontalo</option>
                                            <option value="Manado">Manado</option>
                                            <option value="Ternate">Ternate</option>
                                            <option value="Manokwari">Manokwari</option>
                                            <option value="Biak">Biak</option>
                                            <option value="Sorong">Sorong</option>
                                            <option value="Timika">Timika</option>
                                            <option value="Jayapura">Jayapura</option>
                                            <option value="Wamena">Wamena</option>
                                            <option value="Merauke">Merauke</option>                                    
                                        </optgroup>
                                        <optgroup label="International">
                                            <option value="Moscow">Moscow</option>
                                            <option value="Rome">Rome</option>
                                            <option value="Beijing">Beijing</option>
                                            <option value="Seoul">Seoul</option>
                                            <option value="Manila">Manila</option>
                                            <option value="Athens">Athens</option>
                                            <option value="New Delhi">New Delhi</option>
                                            <option value="Canberra">Canberra</option>
                                            <option value="Kuala Lumpur">Kuala Lumpur</option>
                                            <option value="Islamabad">Islamabad</option>
                                            <option value="Ankara">Ankara</option>
                                            <option value="Abuja">Abuja</option>
                                            <option value="Tehran">Tehran</option>
                                            <option value="Prague">Prague</option>
                                            <option value="Hanoi">Hanoi</option>
                                            <option value="Jerusalem">Jerusalem</option>
                                            <option value="Cairo">Cairo</option>
                                            <option value="Copenhagen">Copenhagen</option>
                                            <option value="Belmopan">Belmopan</option>
                                            <option value="Valletta">Valletta</option>
                                            <option value="Ottawa">Ottawa</option>
                                            <option value="Nur-Sultan">Nur-Sultan</option>
                                            <option value="Taipei">Taipei</option>
                                            <option value="Porto-Novo">Porto-Novo</option>
                                            <option value="Budapest">Budapest</option>
                                            <option value="Helsinki">Helsinki</option>
                                            <option value="Belgrade">Belgrade</option>
                                            <option value="Brasilia">Brasilia</option>
                                            <option value="Bern">Bern</option>
                                            <option value="Pyongyang">Pyongyang</option>
                                            <option value="Yamoussoukro">Yamoussoukro</option>
                                            <option value="Lisbon">Lisbon</option>
                                            <option value="Addis Ababa">Addis Ababa</option>
                                            <option value="Bucharest">Bucharest</option>
                                            <option value="Baghdad">Baghdad</option>
                                            <option value="Vientiane">Vientiane</option>
                                            <option value="Tbilisi">Tbilisi</option>
                                            <option value="Kabul">Kabul</option>
                                            <option value="Oslo">Oslo</option>
                                            <option value="Stockholm">Stockholm</option>
                                            <option value="Dublin">Dublin</option>
                                            <option value="Yerevan">Yerevan</option>
                                            <option value="Warsaw">Warsaw</option>
                                            <option value="Nairobi">Nairobi</option>
                                            <option value="Bratislava">Bratislava</option>
                                            <option value="Vilnius">Vilnius</option>
                                            <option value="Phnom Penh">Phnom Penh</option>
                                            <option value="Zagreb">Zagreb</option>
                                            <option value="Tashkent">Tashkent</option>
                                            <option value="Sarajevo">Sarajevo</option>
                                            <option value="Washington D.C.">Washington D.C.</option>
                                            <option value="London">London</option>
                                            <option value="London">London</option>
                                            <option value="Paris">Paris</option>
                                        </optgroup>
                                    </select>
                                </div>                        
                            </div>                    
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <h2 class="card-inside-title">Departure</h2>                                
                                    <div class="form-line" id="datepicker_container">
                                        <input type="text" name="depart_date" class="form-control" placeholder="Please choose a date...">
                                    </div>                                
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                                                                
                                    <input type="checkbox" class="chk-col-green" name="" id="ret" onchange="swaps()">
                                    <label for="ret"><h2 class="card-inside-title">Return</h2></label>
                                    <div class="form-line" id="datepicker_container">
                                        <input type="text" name="return_date" class="form-control" id="ret_date" placeholder="Please choose a date...">
                                    </div>                                
                                </div>
                            </div>                                            
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="seat_btn">
                            <h4><b id="number"></b> passengers, <b id="grade"></b> <a href="javascript:void(0);" style="text-decoration: none;" id="drpd" class="material-icons">keyboard_arrow_down</a></h4>
                        </div>
                        <div class='row clearfix' id="fun">
                            <div class='col-lg-6 col-md-6 col-sm-12 col-xs-12' id='seat'>
                                <h4>Passengers</h4>
                                <div class='form-group'>
                                    <div class='col-lg-4 col-md-4 col-sm-4 col-xs-4'>
                                        <div class='input-group spinner' data-trigger='spinner'>
                                            <div class='form-line'>
                                                <p>Adult</p>
                                                <input type='text' id='adult' autocomplete='off' name='adult' class='form-control text-center' data-value='1' value='1' data-min='0' data-rule='quantity'>
                                            </div>
                                            <span class='input-group-addon'>
                                                <a href='javascript:;' class='spin-up' data-spin='up'><i class='glyphicon glyphicon-chevron-up'></i></a>
                                                <a href='javascript:;' class='spin-down' data-spin='down'><i class='glyphicon glyphicon-chevron-down'></i></a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class='col-lg-4 col-md-4 col-sm-4 col-xs-4'>
                                        <div class='input-group spinner' data-trigger='spinner'>
                                            <div class='form-line'>
                                                <p>Children</p>
                                                <input type='text' id='children' autocomplete='off' name='children' class='form-control text-center' value='0' data-min='0' data-rule='quantity'>
                                            </div>
                                            <span class='input-group-addon'>
                                                <a href='javascript:;' class='spin-up' data-spin='up'><i class='glyphicon glyphicon-chevron-up'></i></a>
                                                <a href='javascript:;' class='spin-down' data-spin='down'><i class='glyphicon glyphicon-chevron-down'></i></a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class='col-lg-4 col-md-4 col-sm-4 col-xs-4' >
                                        <div class='input-group spinner' data-trigger='spinner'>
                                            <div class='form-line'>
                                                <p>Infant</p>
                                                <input type='text' id='infant' autocomplete='off' name='infant' class='form-control text-center' value='0' data-min='0' data-rule='quantity'>
                                        </div>
                                            <span class='input-group-addon'>
                                                <a href='javascript:;' class='spin-up' data-spin='up'><i class='glyphicon glyphicon-chevron-up'></i></a>
                                                <a href='javascript:;' class='spin-down' data-spin='down'><i class='glyphicon glyphicon-chevron-down'></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='form-group'>
                                <div class='col-lg-6 col-md-6 col-sm-12 col-xs-12' id='class'>
                                    <h4>Cabin Class</h4>
                                    <select class='form-control show-tick' name='grade' id='cabinClass'>
                                        <option value='Economy'>Economy</option>
                                        <option value='Bussiness'>Bussiness</option>
                                        <option value='First Class'>First Class</option>
                                    </select>
                                </div>
                            </div>
                            <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                                <a href='javascript:void(0);' class='btn btn-block btn-primary waves-effect' id='ready'>Done</a>
                            </div>                                
                        </div>                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-block bg-light-blue waves-effect" type="submit">FIND THE FLIGHT</button>
                        </div>                        
                    </div>
                </form>                
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
        });
    </script>

    <script>
        $('#drpd').click(function () {
            $('#fun').slideToggle();
        });
    </script>

    <script>
        $('#ready').click(function () {

            $('#fun').slideUp();
        });
    </script>


    <script>
        $(function () {
            //Bootstrap datepicker plugin
            $('#datepicker_container input').datepicker({
                autoclose: true,
                container: '#datepicker_container',                
                format: 'DD, dd MM yyyy',
                language: 'en',
                startDate: '+0d',
                maxViewMode:1,
                orientation: "auto left",
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