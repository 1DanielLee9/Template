@extends('layouts.frame')

@section('stylesheets')

    <!-- JQuery DataTable Css -->
    <link href="{{asset('base/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">

@endsection

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                JQUERY DATATABLES
                <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small>
            </h2>
        </div>
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            EXPORTABLE TABLE
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
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>Nama Kereta</th>
                                        <th>Jenis Kelas</th>
                                        <th>Keberangkatan</th>
                                        <th>Kedatangan</th>
                                        <th>Asal</th>
                                        <th>Tujuan</th>
                                        <th>Jumlah Gerbong</th>
                                        <th>Jumlah Kursi / Gerbong</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Nama Kereta</th>
                                        <th>Jenis Kelas</th>
                                        <th>Keberangkatan</th>
                                        <th>Kedatangan</th>
                                        <th>Asal</th>
                                        <th>Tujuan</th>
                                        <th>Jumlah Gerbong</th>
                                        <th>Jumlah Kursi / Gerbong</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($kereta as $d)
                                        <tr>
                                            <td>{{$d->nama_kereta}}</td>
                                            <td>{{$d->jenis_kelas_kereta}}</td>
                                            <td>{{$d->keberangkatan_kereta}}</td>
                                            <td>{{$d->kedatangan_kereta}}</td>
                                            <td>{{$d->asal_kereta}}</td>
                                            <td>{{$d->tujuan_kereta}}</td>
                                            <td>{{$d->jumlah_gerbong}}</td>
                                            <td>{{$d->jumlah_kursi}}</td>
                                            <td><a href="editTrainDataTransportation/{{$d->id_kereta}}" class="btn btn-primary glyphicon glyphicon-edit"></a> <a href="deleteTrainDataTransportation/{{$d->id_kereta}}" class="btn btn-danger glyphicon glyphicon-trash"></a></td>
                                        </tr>                                        
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="{{route('adminTrainInputTransportation')}}" class="btn btn-block btn-lg btn-success waves-effect">Tambah</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
    </div>
</section>


@endsection

@section('scripts')
    
    <!-- Jquery DataTable Plugin Js -->
    <script src="{{asset('base/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
    <script src="{{asset('base/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('base/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('base/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
    <script src="{{asset('base/plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
    <script src="{{asset('base/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
    <script src="{{asset('base/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
    <script src="{{asset('base/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
    <script src="{{asset('base/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>

    {{-- Custom Js --}}     

    <script>
    
$(function () {
    $('.js-basic-example').DataTable({
        responsive: true
    });

    //Exportable table
    $('.js-exportable').DataTable({
        dom: 'Bfrtip',
        responsive: true,
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
});    
    
    </script>

@endsection