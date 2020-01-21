@extends('layouts.frame')

@section('stylesheets')
    <link rel="stylesheet" href="{{asset('base/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}">

    <link rel="stylesheet" href="{{asset('base/plugins/bootstrap-select/css/bootstrap-material-select.css')}}">

    <!-- Bootstrap Spinner Css -->
    <link href="{{ asset('base/plugins/jquery-spinner/css/bootstrap-spinner.css')}}" rel="stylesheet">    

    <!-- Bootstrap Select Css -->
    <link href="{{ asset('base/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" /> 
    
    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="{{ asset('base/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet" />    
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>FORM EXAMPLES</h2>
        </div>
        <!-- Vertical Layout | With Floating Label -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            VERTICAL LAYOUT
                            <small>With floating label</small>
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <form method="POST" action="/insertTrainDataTransportation">
                            {{ csrf_field() }}
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="nama_kereta" id="train_name" class="form-control" required>
                                    <label class="form-label">Nama Kereta</label>
                                </div>
                            </div>                            
                            <div class="form-group">
                                <p>Class</p>
                                <select name="jenis_kelas" class="form-control show-tick" id="trainClass" onchange="classMode()">
                                    <option value="" aria-placeholder="Pilih Salah Satu"></option>
                                    <option value="Ekonomi AC">Ekonomi AC</option>
                                    <option value="Bisnis">Bisnis</option>
                                    <option value="Eksekutif">Eksekutif</option>
                                </select>
                            </div>
                            <div class="form-group">                                
                                <div class="col-md-6">
                                    <p>
                                        <b>From</b>
                                    </p>
                                    <select name="asal_kereta" class="form-control show-tick" data-live-search="true">
                                        <optgroup label="Jawa Tengah">
                                            <option value="Semarang">Semarang</option>
                                            <option value="Pekalongan">Pekalongan</option>
                                            <option value="Pemalang">Pemalang</option>
                                        </optgroup>
                                        <optgroup label="DKI Jakarta">
                                            <option value="Jakarta">Jakarta</option>
                                            <option value="Tanah Abang">Tanah Abang</option>
                                            <option value="Pasar Senen">Pasar Senen</option>
                                        </optgroup>
                                        <optgroup label="Jawa Barat">
                                            <option value="Bandung">Bandung</option>
                                            <option value="Cikampek">Cikampek</option>
                                            <option value="Andir">Andir</option>
                                        </optgroup>                                        
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        <b>To</b>
                                    </p>
                                    <select name="tujuan_kereta" class="form-control show-tick" data-live-search="true">
                                        <optgroup label="Jawa Tengah">
                                            <option value="Semarang">Semarang</option>
                                            <option value="Pekalongan">Pekalongan</option>
                                            <option value="Pemalang">Pemalang</option>
                                        </optgroup>
                                        <optgroup label="DKI Jakarta">
                                            <option value="Jakarta">Jakarta</option>
                                            <option value="Tanah Abang">Tanah Abang</option>
                                            <option value="Pasar Senen">Pasar Senen</option>
                                        </optgroup>
                                        <optgroup label="Jawa Barat">
                                            <option value="Bandung">Bandung</option>
                                            <option value="Cikampek">Cikampek</option>
                                            <option value="Andir">Andir</option>
                                        </optgroup>      
                                    </select>
                                </div>                                
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <p>Keberangkatan</p>
                                    <div class="form-line">
                                        <input type="text" name="keberangkatan_kereta" class="datetimepicker form-control" placeholder="Please choose date & time..." required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p>Kedatangan</p>
                                    <div class="form-line">
                                        <input type="text" name="kedatangan_kereta" class="datetimepicker form-control" placeholder="Please choose date & time..." required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <p>Jumlah Gerbong</p>
                                <div class="col-md-12" id="gerbong">
                                    <div class="input-group spinner" data-trigger="spinner">
                                        <div class="form-line">                                            
                                            <p>Gerbong</p>
                                            <input type="text" autocomplete="off" name="gerbong" class="form-control text-center" value="1" data-rule="quantity">
                                        </div>
                                        <span class="input-group-addon">
                                            <a href="javascript:;" class="spin-up" data-spin="up"><i class="glyphicon glyphicon-chevron-up"></i></a>
                                            <a href="javascript:;" class="spin-down" data-spin="down"><i class="glyphicon glyphicon-chevron-down"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <p>Jumlah Seat</p>
                                <div class="col-md-4" id="eco">
                                    <div class="input-group spinner" data-trigger="spinner">
                                        <div class="form-line">                                            
                                            <p>Economy</p>
                                            <input type="text" autocomplete="off" name="eco_seat" class="form-control text-center" value="1" data-rule="quantity">
                                        </div>
                                        <span class="input-group-addon">
                                            <a href="javascript:;" class="spin-up" data-spin="up"><i class="glyphicon glyphicon-chevron-up"></i></a>
                                            <a href="javascript:;" class="spin-down" data-spin="down"><i class="glyphicon glyphicon-chevron-down"></i></a>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4" id="bus">
                                    <div class="input-group spinner" data-trigger="spinner">
                                        <div class="form-line">
                                            <p>Bussiness</p>
                                            <input type="text" autocomplete="off" name="bus_seat" class="form-control text-center" value="1" data-rule="quantity">
                                        </div>
                                        <span class="input-group-addon">
                                            <a href="javascript:;" class="spin-up" data-spin="up"><i class="glyphicon glyphicon-chevron-up"></i></a>
                                            <a href="javascript:;" class="spin-down" data-spin="down"><i class="glyphicon glyphicon-chevron-down"></i></a>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4" id="exe">
                                    <div class="input-group spinner" data-trigger="spinner">
                                        <div class="form-line">
                                            <p>Eksekutif</p>
                                            <input type="text" autocomplete="off" name="exe_seat" class="form-control text-center" value="1" data-rule="quantity">
                                        </div>
                                        <span class="input-group-addon">
                                            <a href="javascript:;" class="spin-up" data-spin="up"><i class="glyphicon glyphicon-chevron-up"></i></a>
                                            <a href="javascript:;" class="spin-down" data-spin="down"><i class="glyphicon glyphicon-chevron-down"></i></a>
                                        </span>
                                    </div>
                                </div>                                        
                            </div>                                                                                
                            <button id="submit" type="submit" class="btn btn-success btn-block m-t-15 waves-effect">SUBMIT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Vertical Layout | With Floating Label -->    
    </div>
</section>
@endsection

@section('scripts')

    <!-- Jquery Spinner Plugin Js -->
    <script src="{{ asset('base/plugins/jquery-spinner/js/jquery.spinner.js')}}"></script>

    <!-- Autosize Plugin Js -->
    <script src="{{ asset('base/plugins/autosize/autosize.js')}}"></script>

    <!-- Moment Plugin Js -->
    <script src="{{ asset('base/plugins/momentjs/moment.js')}}"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="{{ asset('base/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>

    <script>
        $(function () {
            //Datetimepicker plugin
            $('.datetimepicker').bootstrapMaterialDatePicker({
                format: 'dddd DD MMMM YYYY - HH:mm',
                clearButton: true,
                weekStart: 1,
                nowButton:true,
                
            });         
        });
    </script>

    <script>
        function classMode() {
        var eco = $('#eco');
        var bus = $('#bus');
        var exe = $('#exe');
        var cls = $('#trainClass').val();
            switch (cls) {
                case "Ekonomi AC":
                    eco.slideDown();
                    eco.removeClass();
                    eco.addClass("col-md-12");
                    bus.slideUp();
                    exe.slideUp();
                    $('#submit').removeAttr("disabled");
                    break;
                case "Bisnis":
                    bus.slideDown();
                    bus.removeClass();
                    bus.addClass("col-md-12");
                    eco.slideUp();
                    exe.slideUp();
                    $('#submit').removeAttr("disabled");
                    break;
                case "Eksekutif":
                    exe.slideDown();
                    exe.removeClass();
                    exe.addClass("col-md-12");
                    eco.slideUp();
                    bus.slideUp();
                    $('#submit').removeAttr("disabled");
                    break;                                
                default:
                    eco.removeClass();
                    bus.removeClass();
                    exe.removeClass();
                    eco.addClass("col-md-4");
                    bus.addClass("col-md-4");
                    exe.addClass("col-md-4");
                    eco.slideDown();
                    bus.slideDown();
                    exe.slideDown();
                    alert("Pilih Salah Satu Kelas Kereta");
                    $('#submit').attr("disabled","true");
                    break;
            }        
        }
    </script>
@endsection