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
                        @foreach ($pesawat as $p)
                            
                        @endforeach
                        <form method="POST" action="/updatePlaneDataTransportation">
                            {{ csrf_field() }}                            
                            <div class="form-group form-float">
                                <input type="hidden" name="id_pesawat" value="{{$p->id_pesawat}}">
                                <div class="form-line">
                                    <input type="text" name="maskapai" id="email_address" value="{{$p->maskapai}}" class="form-control">
                                    <label class="form-label">Maskapai</label>
                                </div>
                            </div>                            
                            <div class="form-group">
                                <p>Class</p>
                                @if($p->jenis_kelas_pesawat == "Ekonomi, Bisnis, First Class")
                                    <select name="jenis_kelas[]" class="form-control show-tick" multiple id="planeClass"">
                                        <option value="Ekonomi" selected>Ekonomi</option>
                                        <option value="Bisnis" selected>Bisnis</option>
                                        <option value="First Class" selected>First Class</option>
                                    </select>
                                @else
                                    <select name="jenis_kelas[]" class="form-control show-tick" multiple id="planeClass"">
                                        <option value="Ekonomi">Ekonomi</option>
                                        <option value="Bisnis">Bisnis</option>
                                        <option value="First Class">First Class</option>
                                    </select>
                                @endif
                            </div>
                            <div class="form-group">                                
                                <div class="col-md-6">
                                    <p>
                                        <b>From</b>
                                    </p>
                                    @if($p->asal_pesawat == "New York")
                                    <select name="asal_pesawat" class="form-control show-tick" data-live-search="true">
                                        <optgroup label="America">
                                            <option value="New York" selected>New York</option>
                                            <option value="Washington D.C.">Washington D.C.</option>
                                            <option value="Chicago">Chicago</option>
                                        </optgroup>
                                        <optgroup label="Europe">
                                            <option value="London">London</option>
                                            <option value="Paris">Paris</option>
                                            <option value="Amsterdam">Amsterdam</option>
                                        </optgroup>
                                        <optgroup label="Asia">
                                            <option value="Jakarta">Jakarta</option>
                                            <option value="Tokyo">Tokyo</option>
                                            <option value="Seoul">Seoul</option>
                                        </optgroup>                                        
                                    </select>                                        
                                    @elseif($p->asal_pesawat == "Washington D.C." )
                                    <select name="asal_pesawat" class="form-control show-tick" data-live-search="true">
                                        <optgroup label="America">
                                            <option value="New York">New York</option>
                                            <option value="Washington D.C." selected>Washington D.C.</option>
                                            <option value="Chicago">Chicago</option>
                                        </optgroup>
                                        <optgroup label="Europe">
                                            <option value="London">London</option>
                                            <option value="Paris">Paris</option>
                                            <option value="Amsterdam">Amsterdam</option>
                                        </optgroup>
                                        <optgroup label="Asia">
                                            <option value="Jakarta">Jakarta</option>
                                            <option value="Tokyo">Tokyo</option>
                                            <option value="Seoul">Seoul</option>
                                        </optgroup>                                        
                                    </select>                                    
                                    @elseif($p->asal_pesawat == "Chicago" )
                                    <select name="asal_pesawat" class="form-control show-tick" data-live-search="true">
                                        <optgroup label="America">
                                            <option value="New York">New York</option>
                                            <option value="Washington D.C.">Washington D.C.</option>
                                            <option value="Chicago" selected>Chicago</option>
                                        </optgroup>
                                        <optgroup label="Europe">
                                            <option value="London">London</option>
                                            <option value="Paris">Paris</option>
                                            <option value="Amsterdam">Amsterdam</option>
                                        </optgroup>
                                        <optgroup label="Asia">
                                            <option value="Jakarta">Jakarta</option>
                                            <option value="Tokyo">Tokyo</option>
                                            <option value="Seoul">Seoul</option>
                                        </optgroup>                                        
                                    </select>                                    
                                    @elseif($p->asal_pesawat == "London" )
                                    <select name="asal_pesawat" class="form-control show-tick" data-live-search="true">
                                        <optgroup label="America">
                                            <option value="New York">New York</option>
                                            <option value="Washington D.C.">Washington D.C.</option>
                                            <option value="Chicago">Chicago</option>
                                        </optgroup>
                                        <optgroup label="Europe">
                                            <option value="London" selected>London</option>
                                            <option value="Paris">Paris</option>
                                            <option value="Amsterdam">Amsterdam</option>
                                        </optgroup>
                                        <optgroup label="Asia">
                                            <option value="Jakarta">Jakarta</option>
                                            <option value="Tokyo">Tokyo</option>
                                            <option value="Seoul">Seoul</option>
                                        </optgroup>                                        
                                    </select>                                    
                                    @elseif($p->asal_pesawat == "Paris" )
                                    <select name="asal_pesawat" class="form-control show-tick" data-live-search="true">
                                        <optgroup label="America">
                                            <option value="New York">New York</option>
                                            <option value="Washington D.C.">Washington D.C.</option>
                                            <option value="Chicago">Chicago</option>
                                        </optgroup>
                                        <optgroup label="Europe">
                                            <option value="London">London</option>
                                            <option value="Paris" selected>Paris</option>
                                            <option value="Amsterdam">Amsterdam</option>
                                        </optgroup>
                                        <optgroup label="Asia">
                                            <option value="Jakarta">Jakarta</option>
                                            <option value="Tokyo">Tokyo</option>
                                            <option value="Seoul">Seoul</option>
                                        </optgroup>                                        
                                    </select>                                    
                                    @elseif($p->asal_pesawat == "Amsterdam" )
                                    <select name="asal_pesawat" class="form-control show-tick" data-live-search="true">
                                        <optgroup label="America">
                                            <option value="New York">New York</option>
                                            <option value="Washington D.C.">Washington D.C.</option>
                                            <option value="Chicago">Chicago</option>
                                        </optgroup>
                                        <optgroup label="Europe">
                                            <option value="London">London</option>
                                            <option value="Paris">Paris</option>
                                            <option value="Amsterdam" selected>Amsterdam</option>
                                        </optgroup>
                                        <optgroup label="Asia">
                                            <option value="Jakarta">Jakarta</option>
                                            <option value="Tokyo">Tokyo</option>
                                            <option value="Seoul">Seoul</option>
                                        </optgroup>                                        
                                    </select>                                    
                                    @elseif($p->asal_pesawat == "Jakarta" )
                                    <select name="asal_pesawat" class="form-control show-tick" data-live-search="true">
                                        <optgroup label="America">
                                            <option value="New York">New York</option>
                                            <option value="Washington D.C.">Washington D.C.</option>
                                            <option value="Chicago">Chicago</option>
                                        </optgroup>
                                        <optgroup label="Europe">
                                            <option value="London">London</option>
                                            <option value="Paris">Paris</option>
                                            <option value="Amsterdam">Amsterdam</option>
                                        </optgroup>
                                        <optgroup label="Asia">
                                            <option value="Jakarta" selected>Jakarta</option>
                                            <option value="Tokyo">Tokyo</option>
                                            <option value="Seoul">Seoul</option>
                                        </optgroup>                                        
                                    </select>                                    
                                    @elseif($p->asal_pesawat == "Tokyo" )
                                    <select name="asal_pesawat" class="form-control show-tick" data-live-search="true">
                                        <optgroup label="America">
                                            <option value="New York">New York</option>
                                            <option value="Washington D.C.">Washington D.C.</option>
                                            <option value="Chicago">Chicago</option>
                                        </optgroup>
                                        <optgroup label="Europe">
                                            <option value="London">London</option>
                                            <option value="Paris">Paris</option>
                                            <option value="Amsterdam">Amsterdam</option>
                                        </optgroup>
                                        <optgroup label="Asia">
                                            <option value="Jakarta">Jakarta</option>
                                            <option value="Tokyo" selected>Tokyo</option>
                                            <option value="Seoul">Seoul</option>
                                        </optgroup>                                        
                                    </select>                                    
                                    @elseif($p->asal_pesawat == "Seoul" )
                                    <select name="asal_pesawat" class="form-control show-tick" data-live-search="true">
                                        <optgroup label="America">
                                            <option value="New York">New York</option>
                                            <option value="Washington D.C.">Washington D.C.</option>
                                            <option value="Chicago">Chicago</option>
                                        </optgroup>
                                        <optgroup label="Europe">
                                            <option value="London">London</option>
                                            <option value="Paris">Paris</option>
                                            <option value="Amsterdam">Amsterdam</option>
                                        </optgroup>
                                        <optgroup label="Asia">
                                            <option value="Jakarta">Jakarta</option>
                                            <option value="Tokyo">Tokyo</option>
                                            <option value="Seoul" selected>Seoul</option>
                                        </optgroup>                                        
                                    </select>                                    
                                    @else
                                    <select name="tujuan_pesawat" class="form-control show-tick" data-live-search="true">
                                            <optgroup label="America">
                                                <option value="New York">New York</option>
                                                <option value="Washington D.C.">Washington D.C.</option>
                                                <option value="Chicago">Chicago</option>
                                            </optgroup>
                                            <optgroup label="Europe">
                                                <option value="London">London</option>
                                                <option value="Paris">Paris</option>
                                                <option value="Amsterdam">Amsterdam</option>
                                            </optgroup>
                                            <optgroup label="Asia">
                                                <option value="Jakarta">Jakarta</option>
                                                <option value="Tokyo">Tokyo</option>
                                                <option value="Seoul">Seoul</option>
                                            </optgroup>      
                                        </select>                                        
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        <b>To</b>
                                    </p>
                                    @if($p->tujuan_pesawat == "New York")
                                    <select name="tujuan_pesawat" class="form-control show-tick" data-live-search="true">
                                        <optgroup label="America">
                                            <option value="New York" selected>New York</option>
                                            <option value="Washington D.C.">Washington D.C.</option>
                                            <option value="Chicago">Chicago</option>
                                        </optgroup>
                                        <optgroup label="Europe">
                                            <option value="London">London</option>
                                            <option value="Paris">Paris</option>
                                            <option value="Amsterdam">Amsterdam</option>
                                        </optgroup>
                                        <optgroup label="Asia">
                                            <option value="Jakarta">Jakarta</option>
                                            <option value="Tokyo">Tokyo</option>
                                            <option value="Seoul">Seoul</option>
                                        </optgroup>                                        
                                    </select>                                    
                                    @elseif($p->tujuan_pesawat == "Washington D.C.")
                                    <select name="tujuan_pesawat" class="form-control show-tick" data-live-search="true">
                                        <optgroup label="America">
                                            <option value="New York">New York</option>
                                            <option value="Washington D.C." selected>Washington D.C.</option>
                                            <option value="Chicago">Chicago</option>
                                        </optgroup>
                                        <optgroup label="Europe">
                                            <option value="London">London</option>
                                            <option value="Paris">Paris</option>
                                            <option value="Amsterdam">Amsterdam</option>
                                        </optgroup>
                                        <optgroup label="Asia">
                                            <option value="Jakarta">Jakarta</option>
                                            <option value="Tokyo">Tokyo</option>
                                            <option value="Seoul">Seoul</option>
                                        </optgroup>                                        
                                    </select>                                    
                                    @elseif($p->tujuan_pesawat == "Chicago")
                                    <select name="tujuan_pesawat" class="form-control show-tick" data-live-search="true">
                                        <optgroup label="America">
                                            <option value="New York">New York</option>
                                            <option value="Washington D.C.">Washington D.C.</option>
                                            <option value="Chicago" selected>Chicago</option>
                                        </optgroup>
                                        <optgroup label="Europe">
                                            <option value="London">London</option>
                                            <option value="Paris">Paris</option>
                                            <option value="Amsterdam">Amsterdam</option>
                                        </optgroup>
                                        <optgroup label="Asia">
                                            <option value="Jakarta">Jakarta</option>
                                            <option value="Tokyo">Tokyo</option>
                                            <option value="Seoul">Seoul</option>
                                        </optgroup>                                        
                                    </select>                                    
                                    @elseif($p->tujuan_pesawat == "London")
                                    <select name="tujuan_pesawat" class="form-control show-tick" data-live-search="true">
                                        <optgroup label="America">
                                            <option value="New York">New York</option>
                                            <option value="Washington D.C.">Washington D.C.</option>
                                            <option value="Chicago">Chicago</option>
                                        </optgroup>
                                        <optgroup label="Europe">
                                            <option value="London" selected>London</option>
                                            <option value="Paris">Paris</option>
                                            <option value="Amsterdam">Amsterdam</option>
                                        </optgroup>
                                        <optgroup label="Asia">
                                            <option value="Jakarta">Jakarta</option>
                                            <option value="Tokyo">Tokyo</option>
                                            <option value="Seoul">Seoul</option>
                                        </optgroup>                                        
                                    </select>                                    
                                    @elseif($p->tujuan_pesawat == "Paris")
                                    <select name="tujuan_pesawat" class="form-control show-tick" data-live-search="true">
                                        <optgroup label="America">
                                            <option value="New York">New York</option>
                                            <option value="Washington D.C.">Washington D.C.</option>
                                            <option value="Chicago">Chicago</option>
                                        </optgroup>
                                        <optgroup label="Europe">
                                            <option value="London">London</option>
                                            <option value="Paris" selected>Paris</option>
                                            <option value="Amsterdam">Amsterdam</option>
                                        </optgroup>
                                        <optgroup label="Asia">
                                            <option value="Jakarta">Jakarta</option>
                                            <option value="Tokyo">Tokyo</option>
                                            <option value="Seoul">Seoul</option>
                                        </optgroup>                                        
                                    </select>                                    
                                    @elseif($p->tujuan_pesawat == "Amsterdam")
                                    <select name="tujuan_pesawat" class="form-control show-tick" data-live-search="true">
                                        <optgroup label="America">
                                            <option value="New York">New York</option>
                                            <option value="Washington D.C.">Washington D.C.</option>
                                            <option value="Chicago">Chicago</option>
                                        </optgroup>
                                        <optgroup label="Europe">
                                            <option value="London">London</option>
                                            <option value="Paris">Paris</option>
                                            <option value="Amsterdam" selected>Amsterdam</option>
                                        </optgroup>
                                        <optgroup label="Asia">
                                            <option value="Jakarta">Jakarta</option>
                                            <option value="Tokyo">Tokyo</option>
                                            <option value="Seoul">Seoul</option>
                                        </optgroup>                                        
                                    </select>                                    
                                    @elseif($p->tujuan_pesawat == "Jakarta")
                                    <select name="tujuan_pesawat" class="form-control show-tick" data-live-search="true">
                                        <optgroup label="America">
                                            <option value="New York">New York</option>
                                            <option value="Washington D.C.">Washington D.C.</option>
                                            <option value="Chicago">Chicago</option>
                                        </optgroup>
                                        <optgroup label="Europe">
                                            <option value="London">London</option>
                                            <option value="Paris">Paris</option>
                                            <option value="Amsterdam">Amsterdam</option>
                                        </optgroup>
                                        <optgroup label="Asia">
                                            <option value="Jakarta" selected>Jakarta</option>
                                            <option value="Tokyo">Tokyo</option>
                                            <option value="Seoul">Seoul</option>
                                        </optgroup>                                        
                                    </select>                                    
                                    @elseif($p->tujuan_pesawat == "Tokyo")
                                    <select name="tujuan_pesawat" class="form-control show-tick" data-live-search="true">
                                        <optgroup label="America">
                                            <option value="New York">New York</option>
                                            <option value="Washington D.C.">Washington D.C.</option>
                                            <option value="Chicago">Chicago</option>
                                        </optgroup>
                                        <optgroup label="Europe">
                                            <option value="London">London</option>
                                            <option value="Paris">Paris</option>
                                            <option value="Amsterdam">Amsterdam</option>
                                        </optgroup>
                                        <optgroup label="Asia">
                                            <option value="Jakarta">Jakarta</option>
                                            <option value="Tokyo" selected>Tokyo</option>
                                            <option value="Seoul">Seoul</option>
                                        </optgroup>                                        
                                    </select>                                    
                                    @elseif($p->tujuan_pesawat == "Seoul")
                                    <select name="tujuan_pesawat" class="form-control show-tick" data-live-search="true">
                                        <optgroup label="America">
                                            <option value="New York">New York</option>
                                            <option value="Washington D.C.">Washington D.C.</option>
                                            <option value="Chicago">Chicago</option>
                                        </optgroup>
                                        <optgroup label="Europe">
                                            <option value="London">London</option>
                                            <option value="Paris">Paris</option>
                                            <option value="Amsterdam">Amsterdam</option>
                                        </optgroup>
                                        <optgroup label="Asia">
                                            <option value="Jakarta">Jakarta</option>
                                            <option value="Tokyo">Tokyo</option>
                                            <option value="Seoul" selected>Seoul</option>
                                        </optgroup>                                        
                                    </select>                                    
                                    @else
                                    <select name="tujuan_pesawat" class="form-control show-tick" data-live-search="true">
                                            <optgroup label="America">
                                                <option value="New York">New York</option>
                                                <option value="Washington D.C.">Washington D.C.</option>
                                                <option value="Chicago">Chicago</option>
                                            </optgroup>
                                            <optgroup label="Europe">
                                                <option value="London">London</option>
                                                <option value="Paris">Paris</option>
                                                <option value="Amsterdam">Amsterdam</option>
                                            </optgroup>
                                            <optgroup label="Asia">
                                                <option value="Jakarta">Jakarta</option>
                                                <option value="Tokyo">Tokyo</option>
                                                <option value="Seoul">Seoul</option>
                                            </optgroup>      
                                        </select>                                        
                                    @endif                                    
                                </div>                                
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <p>Departure</p>
                                    <div class="form-line">
                                        <input type="text" name="keberangkatan_pesawat" class="datetimepicker form-control" placeholder="Please choose date & time..." value="{{$p->keberangkatan_pesawat}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p>Arrival</p>
                                    <div class="form-line">
                                        <input type="text" name="kedatangan_pesawat" class="datetimepicker form-control" placeholder="Please choose date & time..." value="{{$p->kedatangan_pesawat}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <p>Jumlah Seat</p>
                                <div class="col-md-4" id="eco">
                                    <div class="input-group spinner" data-trigger="spinner">
                                        <div class="form-line">                                            
                                            <p>Economy</p>
                                            <input type="text" autocomplete="off" name="eco_seat" class="form-control text-center" value="{{$eco}}" data-rule="quantity">
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
                                            <input type="text" autocomplete="off" name="bus_seat" class="form-control text-center" value="{{$bus}}" data-rule="quantity">
                                        </div>
                                        <span class="input-group-addon">
                                            <a href="javascript:;" class="spin-up" data-spin="up"><i class="glyphicon glyphicon-chevron-up"></i></a>
                                            <a href="javascript:;" class="spin-down" data-spin="down"><i class="glyphicon glyphicon-chevron-down"></i></a>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4" id="fcl">
                                    <div class="input-group spinner" data-trigger="spinner">
                                        <div class="form-line">
                                            <p>First Class</p>
                                            <input type="text" autocomplete="off" name="ftl_seat" class="form-control text-center" value="{{$ftl}}" data-rule="quantity">
                                        </div>
                                        <span class="input-group-addon">
                                            <a href="javascript:;" class="spin-up" data-spin="up"><i class="glyphicon glyphicon-chevron-up"></i></a>
                                            <a href="javascript:;" class="spin-down" data-spin="down"><i class="glyphicon glyphicon-chevron-down"></i></a>
                                        </span>
                                    </div>
                                </div>                                        
                            </div>                                                                                
                            <button type="submit" class="btn btn-success btn-block m-t-15 waves-effect">SUBMIT</button>
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
@endsection@extends('layouts.frame')

@section('stylesheets')
    <link rel="stylesheet" href="{{asset('base/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}">

    <link rel="stylesheet" href="{{asset('base/plugins/bootstrap-select/css/bootstrap-material-select.css')}}">
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
                        <form>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="email_address" class="form-control">
                                    <label class="form-label">Email Address</label>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="password" id="password" class="form-control">
                                    <label class="form-label">Password</label>
                                </div>
                            </div>

                            <input type="checkbox" id="remember_me_2" class="filled-in">
                            <label for="remember_me_2">Remember Me</label>
                            <br>
                            <button type="button" class="btn btn-primary m-t-15 waves-effect">LOGIN</button>
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
    
@endsection