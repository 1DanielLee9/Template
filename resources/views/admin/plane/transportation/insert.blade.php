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
                        <form method="POST" action="/insertPlaneDataTransportation">
                            {{ csrf_field() }}
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="maskapai" id="email_address" class="form-control">
                                    <label class="form-label">Maskapai</label>
                                </div>
                            </div>                            
                            <div class="form-group">
                                <p>Class</p>
                                <select name="jenis_kelas[]" class="form-control show-tick" multiple id="planeClass"">
                                    <option value="Ekonomi">Ekonomi</option>
                                    <option value="Bisnis">Bisnis</option>
                                    <option value="First Class">First Class</option>
                                </select>
                            </div>
                            <div class="form-group">                                
                                <div class="col-md-6">
                                    <p>
                                        <b>From</b>
                                    </p>
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
                                            <option value="Seoul">Seoul</option>
                                        </optgroup>                                        
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        <b>To</b>
                                    </p>
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
                                </div>                                
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <p>Departure</p>
                                    <div class="form-line">
                                        <input type="text" name="keberangkatan_pesawat" class="datetimepicker form-control" placeholder="Please choose date & time...">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p>Arrival</p>
                                    <div class="form-line">
                                        <input type="text" name="kedatangan_pesawat" class="datetimepicker form-control" placeholder="Please choose date & time...">
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
                                <div class="col-md-4" id="fcl">
                                    <div class="input-group spinner" data-trigger="spinner">
                                        <div class="form-line">
                                            <p>First Class</p>
                                            <input type="text" autocomplete="off" name="ftl_seat" class="form-control text-center" value="1" data-rule="quantity">
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
            var d = new Date();
            var s = d.setDate(d.getDate()+60)
            // console.log(d);
            //Datetimepicker plugin
            $('.datetimepicker').bootstrapMaterialDatePicker({
                format: 'dddd DD MMMM YYYY - HH:mm',
                clearButton: true,
                weekStart: 1,
                minDate: new Date(),                
                maxDate: d,
                nowButton:true,
                
            });         
        });
    </script>
@endsection