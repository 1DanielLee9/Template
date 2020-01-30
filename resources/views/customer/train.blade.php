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

    </style>
</head>

<body class="train-page">
    <div class="train-box">
        <div class="logo">
            <a href="{{route('customerHome')}}"><img style="width:150px;" src="{{asset('Chiketto-logo-white.png')}}"></a>
            <small style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Take You Anywhere</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST" action="customerTrainFind">
                    {{ csrf_field() }}
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group align-right">                                
                                <input name="type" type="radio" value="oneway" id="oneway" class="with-gap radio-col-blue" />
                                <label for="oneway">ONE WAY</label>                                
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <input name="type" type="radio" value="roundtrip" id="roundtrip" class="with-gap radio-col-blue"/>
                                <label for="roundtrip">ROUNDTRIP</label>
                            </div>
                        </div> 
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                    <p>
                                        <b>From</b>
                                    </p>
                                    <select data-size="3" name="from" class="form-control show-tick" data-live-search="true">
                                        <optgroup label="Sumatra">
                                            <option value="Banda Aceh">Banda Aceh</option>
                                            <option value="Medan">Medan</option>
                                            <option value="Padang">Padang</option>
                                            <option value="Pekan Baru">Pekan Baru</option>
                                            <option value="Jambi">Jambi</option>
                                            <option value="Bengkulu">Bengkulu</option>
                                            <option value="Pangkal Pinang">Pangkal Pinang</option>
                                            <option value="Palembang">Palembang</option>
                                            <option value="Bandar Lampung">Bandar Lampung</option>
                                        </optgroup>
                                        <optgroup label="Banten & D.K.I. Jakarta">
                                            <option value="Lebak">Lebak</option>
                                            <option value="Pandeglang">Pandeglang</option>
                                            <option value="Serang">Serang</option>
                                            <option value="Tangerang">Tangerang</option>
                                            <option value="Cilegon">Cilegon</option>
                                            <option value="Gambir">Gambir</option>
                                            <option value="Pasar Senen">Pasar Senen</option>
                                        </optgroup>
                                        <optgroup label="Jawa Barat">
                                            <option value="Bekasi">Bekasi</option>
                                            <option value="Bandung">Bandung</option>
                                            <option value="Bogor">Bogor</option>
                                            <option value="Ciamis">Ciamis</option>
                                            <option value="Cianjur">Cianjur</option>
                                            <option value="Cirebon">Cirebon</option>
                                            <option value="Garut">Garut</option>
                                            <option value="Indramayu">Indramayu</option>
                                            <option value="Karawang">Karawang</option>
                                            <option value="Kuningan">Kuningan</option>
                                            <option value="Majalengka">Majalengka</option>
                                            <option value="Pangandaran">Pangandaran</option>
                                            <option value="Purwakarta">Purwakarta</option>
                                            <option value="Subang">Subang</option>
                                            <option value="Sukabumi">Sukabumi</option>
                                            <option value="Sumedang">Sumedang</option>
                                            <option value="Tasikmalaya">Tasikmalaya</option>
                                            <option value="Banjar">Banjar</option>
                                            <option value="Cimahi">Cimahi</option>
                                            <option value="Depok">Depok</option>                                            
                                        </optgroup>
                                        <optgroup label="Jawa Tengah">
                                            <option value="Banjarnegara">Banjarnegara</option>
                                            <option value="Banyumas">Banyumas</option>
                                            <option value="Batang">Batang</option>
                                            <option value="Blora">Blora</option>
                                            <option value="Boyolali">Boyolali</option>
                                            <option value="Brebes">Brebes</option>
                                            <option value="Cilacap">Cilacap</option>
                                            <option value="Demak">Demak</option>
                                            <option value="Grobogan">Grobogan</option>
                                            <option value="Jepara">Jepara</option>
                                            <option value="Karanganyar">Karanganyar</option>
                                            <option value="Kebumen">Kebumen</option>
                                            <option value="Kendal">Kendal</option>
                                            <option value="Klaten">Klaten</option>
                                            <option value="Kudus">Kudus</option>
                                            <option value="Megelang">Megelang</option>
                                            <option value="Pati">Pati</option>
                                            <option value="Pekalongan">Pekalongan</option>
                                            <option value="Pemalang">Pemalang</option>
                                            <option value="Purbalingga">Purbalingga</option>
                                            <option value="Purworejo">Purworejo</option>
                                            <option value="Rembang">Rembang</option>
                                            <option value="Semarang">Semarang</option>
                                            <option value="Sragen">Sragen</option>
                                            <option value="Sukoharjo">Sukoharjo</option>
                                            <option value="Tegal">Tegal</option>
                                            <option value="Temanggung">Temanggung</option>
                                            <option value="Wonogiri">Wonogiri</option>
                                            <option value="Wonosobo">Wonosobo</option>
                                            <option value="Surakarta">Surakarta</option>
                                            <option value="Salatiga">Salatiga</option>
                                            <option value="Pekalongan">Pekalongan</option>
                                        </optgroup>
                                        <optgroup label="Jawa Timur">
                                            <option value="Bangkalan">Bangkalan</option>
                                            <option value="Banyuwangi">Banyuwangi</option>
                                            <option value="Blitar">Blitar</option>
                                            <option value="Bojonegoro">Bojonegoro</option>
                                            <option value="Bondowoso">Bondowoso</option>
                                            <option value="Gresik">Gresik</option>
                                            <option value="Jember">Jember</option>
                                            <option value="Jombang">Jombang</option>
                                            <option value="Kediri">Kediri</option>
                                            <option value="Lamongan">Lamongan</option>
                                            <option value="Lumajang">Lumajang</option>
                                            <option value="Malang">Malang</option>
                                            <option value="Mojokerto">Mojokerto</option>
                                            <option value="Nganjuk">Nganjuk</option>
                                            <option value="Ngawi">Ngawi</option>
                                            <option value="Pacitan">Pacitan</option>
                                            <option value="Pamekasan">Pamekasan</option>
                                            <option value="Pasuruan">Pasuruan</option>
                                            <option value="Ponorogo">Ponorogo</option>
                                            <option value="Probolinggo">Probolinggo</option>
                                            <option value="Sampang">Sampang</option>
                                            <option value="Sidoarjo">Sidoarjo</option>
                                            <option value="Situbondo">Situbondo</option>
                                            <option value="Sumenep">Sumenep</option>
                                            <option value="Trenggalek">Trenggalek</option>
                                            <option value="Tuban">Tuban</option>
                                            <option value="Tulungagung">Tulungagung</option>
                                            <option value="Batu">Batu</option>
                                            <option value="Madiun">Madiun</option>
                                            <option value="Surabaya">Surabaya</option>                                            
                                        </optgroup>
                                    </select>
                                </div>                        
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 align-center">
                                    <a href="javascript:void(0);" class="btn btn-primary btn-circle waves-effect waves-circle waves-float">
                                        <i class="material-icons" id="icons">swap_horiz</i>
                                    </a>
                                </div>                        
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                    <p>
                                        <b>To</b>
                                    </p>
                                    <select data-size="3" name="to" class="form-control show-tick" data-live-search="true" >
                                        <optgroup label="Sumatra">
                                            <option value="Banda Aceh">Banda Aceh</option>
                                            <option value="Medan">Medan</option>
                                            <option value="Padang">Padang</option>
                                            <option value="Pekan Baru">Pekan Baru</option>
                                            <option value="Jambi">Jambi</option>
                                            <option value="Bengkulu">Bengkulu</option>
                                            <option value="Pangkal Pinang">Pangkal Pinang</option>
                                            <option value="Palembang">Palembang</option>
                                            <option value="Bandar Lampung">Bandar Lampung</option>
                                        </optgroup>
                                        <optgroup label="Banten & D.K.I. Jakarta">
                                            <option value="Lebak">Lebak</option>
                                            <option value="Pandeglang">Pandeglang</option>
                                            <option value="Serang">Serang</option>
                                            <option value="Tangerang">Tangerang</option>
                                            <option value="Cilegon">Cilegon</option>
                                            <option value="Gambir">Gambir</option>
                                            <option value="Pasar Senen">Pasar Senen</option>
                                        </optgroup>
                                        <optgroup label="Jawa Barat">
                                            <option value="Bekasi">Bekasi</option>
                                            <option value="Bandung">Bandung</option>
                                            <option value="Bogor">Bogor</option>
                                            <option value="Ciamis">Ciamis</option>
                                            <option value="Cianjur">Cianjur</option>
                                            <option value="Cirebon">Cirebon</option>
                                            <option value="Garut">Garut</option>
                                            <option value="Indramayu">Indramayu</option>
                                            <option value="Karawang">Karawang</option>
                                            <option value="Kuningan">Kuningan</option>
                                            <option value="Majalengka">Majalengka</option>
                                            <option value="Pangandaran">Pangandaran</option>
                                            <option value="Purwakarta">Purwakarta</option>
                                            <option value="Subang">Subang</option>
                                            <option value="Sukabumi">Sukabumi</option>
                                            <option value="Sumedang">Sumedang</option>
                                            <option value="Tasikmalaya">Tasikmalaya</option>
                                            <option value="Banjar">Banjar</option>
                                            <option value="Cimahi">Cimahi</option>
                                            <option value="Depok">Depok</option>                                            
                                        </optgroup>
                                        <optgroup label="Jawa Tengah">
                                            <option value="Banjarnegara">Banjarnegara</option>
                                            <option value="Banyumas">Banyumas</option>
                                            <option value="Batang">Batang</option>
                                            <option value="Blora">Blora</option>
                                            <option value="Boyolali">Boyolali</option>
                                            <option value="Brebes">Brebes</option>
                                            <option value="Cilacap">Cilacap</option>
                                            <option value="Demak">Demak</option>
                                            <option value="Grobogan">Grobogan</option>
                                            <option value="Jepara">Jepara</option>
                                            <option value="Karanganyar">Karanganyar</option>
                                            <option value="Kebumen">Kebumen</option>
                                            <option value="Kendal">Kendal</option>
                                            <option value="Klaten">Klaten</option>
                                            <option value="Kudus">Kudus</option>
                                            <option value="Megelang">Megelang</option>
                                            <option value="Pati">Pati</option>
                                            <option value="Pekalongan">Pekalongan</option>
                                            <option value="Pemalang">Pemalang</option>
                                            <option value="Purbalingga">Purbalingga</option>
                                            <option value="Purworejo">Purworejo</option>
                                            <option value="Rembang">Rembang</option>
                                            <option value="Semarang">Semarang</option>
                                            <option value="Sragen">Sragen</option>
                                            <option value="Sukoharjo">Sukoharjo</option>
                                            <option value="Tegal">Tegal</option>
                                            <option value="Temanggung">Temanggung</option>
                                            <option value="Wonogiri">Wonogiri</option>
                                            <option value="Wonosobo">Wonosobo</option>
                                            <option value="Surakarta">Surakarta</option>
                                            <option value="Salatiga">Salatiga</option>
                                            <option value="Pekalongan">Pekalongan</option>
                                        </optgroup>
                                        <optgroup label="Jawa Timur">
                                            <option value="Bangkalan">Bangkalan</option>
                                            <option value="Banyuwangi">Banyuwangi</option>
                                            <option value="Blitar">Blitar</option>
                                            <option value="Bojonegoro">Bojonegoro</option>
                                            <option value="Bondowoso">Bondowoso</option>
                                            <option value="Gresik">Gresik</option>
                                            <option value="Jember">Jember</option>
                                            <option value="Jombang">Jombang</option>
                                            <option value="Kediri">Kediri</option>
                                            <option value="Lamongan">Lamongan</option>
                                            <option value="Lumajang">Lumajang</option>
                                            <option value="Malang">Malang</option>
                                            <option value="Mojokerto">Mojokerto</option>
                                            <option value="Nganjuk">Nganjuk</option>
                                            <option value="Ngawi">Ngawi</option>
                                            <option value="Pacitan">Pacitan</option>
                                            <option value="Pamekasan">Pamekasan</option>
                                            <option value="Pasuruan">Pasuruan</option>
                                            <option value="Ponorogo">Ponorogo</option>
                                            <option value="Probolinggo">Probolinggo</option>
                                            <option value="Sampang">Sampang</option>
                                            <option value="Sidoarjo">Sidoarjo</option>
                                            <option value="Situbondo">Situbondo</option>
                                            <option value="Sumenep">Sumenep</option>
                                            <option value="Trenggalek">Trenggalek</option>
                                            <option value="Tuban">Tuban</option>
                                            <option value="Tulungagung">Tulungagung</option>
                                            <option value="Batu">Batu</option>
                                            <option value="Madiun">Madiun</option>
                                            <option value="Surabaya">Surabaya</option>                                            
                                        </optgroup>
                                    </select>
                                </div>                        
                            </div>                    
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="depart">
                                    <h2 class="card-inside-title align-center">Departure</h2>                                
                                    <div class="form-line" id="datepicker_container">
                                        <input type="text" name="depart_date" class="form-control" placeholder="Please choose a date..." required>
                                    </div>                                
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="return">                                    
                                    <h2 class="card-inside-title align-center">Return</h2>
                                    <div class="form-line" id="datepicker_container">
                                        <input type="text" name="return_date" class="form-control" id="ret_date" placeholder="Please choose a date...">
                                    </div>                                
                                </div>
                            </div>                                            
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 align-center" id="seat_btn">
                            <a href="javascript:void(0);" style="text-decoration: none;color: black " id="drpd" ><h4><b id="number"></b> passengers, <b id="grade"></b> <i class="material-icons">keyboard_arrow_down</i></h4></a>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="fun">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="seat">
                                <h4>Passengers</h4>
                                <div class="form-group">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div class="input-group spinner" data-trigger="spinner">
                                            <div class="form-line">
                                                <p>Adult</p>
                                                <input type="text" id="adult" autocomplete="off" name="adult" class="form-control text-center" data-value="1" value="1" data-min="0" data-rule="quantity">
                                            </div>
                                            <span class="input-group-addon">
                                                <a href="javascript:;" class="spin-up" data-spin="up"><i class="glyphicon glyphicon-chevron-up"></i></a>
                                                <a href="javascript:;" class="spin-down" data-spin="down"><i class="glyphicon glyphicon-chevron-down"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div class="input-group spinner" data-trigger="spinner">
                                            <div class="form-line">
                                                <p>Children</p>
                                                <input type="text" id="children" autocomplete="off" name="children" class="form-control text-center" value="0" data-min="0" data-rule="quantity">
                                            </div>
                                            <span class="input-group-addon">
                                                <a href="javascript:;" class="spin-up" data-spin="up"><i class="glyphicon glyphicon-chevron-up"></i></a>
                                                <a href="javascript:;" class="spin-down" data-spin="down"><i class="glyphicon glyphicon-chevron-down"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" >
                                        <div class="input-group spinner" data-trigger="spinner">
                                            <div class="form-line">
                                                <p>Infant</p>
                                                <input type="text" id="infant" autocomplete="off" name="infant" class="form-control text-center" value="0" data-min="0" data-rule="quantity">
                                        </div>
                                            <span class="input-group-addon">
                                                <a href="javascript:;" class="spin-up" data-spin="up"><i class="glyphicon glyphicon-chevron-up"></i></a>
                                                <a href="javascript:;" class="spin-down" data-spin="down"><i class="glyphicon glyphicon-chevron-down"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="class">
                                    <h4>Cabin Class</h4>
                                    <select class="form-control show-tick" name="grade" id="cabinClass">
                                        <option value="Economy">Economy</option>
                                        <option value="Bussiness">Bussiness</option>                                        
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <a href="javascript:void(0);" class="btn btn-block btn-primary waves-effect" id="ready">Done</a>
                            </div>                                
                        </div>                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-block bg-light-blue waves-effect" id="done" type="submit">FIND TRIP</button>
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
            $('#depart').removeClass();
            $('#depart').addClass('col-lg-12 col-md-12 col-sm-12 col-xs-12');
            $('#return').slideUp();
            $('#oneway').attr('checked','true');
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