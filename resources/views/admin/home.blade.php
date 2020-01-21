@extends('layouts.frame')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                Grafik Penjualan Ticket pertahun
                <small>Gambaran grafik batang untuk penjualan tiket selama setahun</small>
            </h2>
        </div>
        <!-- Bar Chart -->        
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>GRAFIK TIKET TERJUAL</h2>
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
                    <canvas id="bar" height="150"></canvas>
                </div>
            </div>
        </div>
        <!-- #END# Bar Chart -->        
@endsection

@section('scripts')
    {{-- Chart Scripts --}}
    <script src="{{asset('base/plugins/chartjs/Chart.bundle.js')}}"></script>

    <script>
        
        // $(document).ready(function () {
            var lol = document.getElementById("bar");
            var lmao = new Chart(lol,{
                type: 'bar',
                data: {
                    labels: ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"],
                    datasets: [{
                            label: "Pesawat",
                            data: [20,25,48,96,31,57,20,80,12,30,40,55],
                            backgroundColor : 'dodgerblue'
                        },{
                            label: "Kereta",
                            data: [25,35,40,86,31,50,21,56,04,90,20,85],
                            backgroundColor : 'goldenrod'
                        }]
                },
                option:{
                    responsive:true,
                    legend:false
                }
            });
        // }

    </script>

@endsection