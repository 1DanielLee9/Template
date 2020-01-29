<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransportationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexPlane()
    {        
        $plane = DB::select('SELECT pesawat.*, kelas_pesawat.*, jadwal_pesawat.* FROM pesawat INNER JOIN kelas_pesawat ON pesawat.id_kelas_pesawat = kelas_pesawat.id_kelas_pesawat INNER JOIN jadwal_pesawat ON pesawat.id_pesawat = jadwal_pesawat.id_pesawat');        
        return view('admin.plane.transportation.show',['pesawat' => $plane]);
    }

    public function indexTrain()
    {
        $train = DB::select('SELECT kereta.*, kelas_kereta.*, jadwal_kereta.* FROM kereta INNER JOIN kelas_kereta ON kereta.id_kelas_kereta = kelas_kereta.id_kelas_kereta INNER JOIN jadwal_kereta ON kereta.id_kereta = jadwal_kereta.id_kereta');
        // dd($train);
        return view('admin.train.transportation.show',['kereta' => $train]);
    }    

    public function inputPlane()
    {
        return view('admin.plane.transportation.insert');
    }

    public function inputTrain()
    {
        return view('admin.train.transportation.insert');
    }

    public function insertPlane(Request $req)
    {
        $id_class_plane;
        $id_plane;
        $jenis_class = implode(", ",$req->jenis_kelas);
        $total_kursi = [$req->eco_seat, $req->bus_seat, $req->ftl_seat];

        $total_seat = implode(", ", $total_kursi);        
        
        DB::table('kelas_pesawat')->insert([
          'jenis_kelas_pesawat' => $jenis_class,
          'jumlah_seat' => $total_seat,
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => null
        ]);

        $data_class_plane =DB::table('kelas_pesawat')->latest()->first();
        $id_class_plane = $data_class_plane->id_kelas_pesawat;        
                

        DB::table('pesawat')->insert([
            'maskapai' => $req->maskapai,
            'id_kelas_pesawat' => $id_class_plane,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => null
        ]);    

        $data_plane = DB::table('pesawat')->latest()->first();
        $id_plane = $data_plane->id_pesawat;

        DB::table('jadwal_pesawat')->insert([
            'id_pesawat' => $id_plane,
            'keberangkatan_pesawat' => $req->keberangkatan_pesawat,
            'asal_pesawat' => $req->asal_pesawat,
            'kedatangan_pesawat' => $req->kedatangan_pesawat,
            'tujuan_pesawat' => $req->tujuan_pesawat,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => null
        ]);
                
        return redirect('showPlaneDataTransportation');

    }

    public function insertTrain(Request $req)
    {
        $id_class_train;
        $id_train;        
        
        $jenis_class = $req->jenis_kelas;
        switch ($jenis_class) {
            case 'Economy':
            DB::table('kelas_kereta')->insert([
                'jenis_kelas_kereta' => $jenis_class,
                'jumlah_gerbong' => $req->gerbong,
                'jumlah_kursi' => $req->eco_seat,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => null
              ]);
                break;
            case 'Bussiness':
            DB::table('kelas_kereta')->insert([
                'jenis_kelas_kereta' => $jenis_class,
                'jumlah_gerbong' => $req->gerbong,
                'jumlah_kursi' => $req->bus_seat,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => null
              ]);
                break;
            default:
                echo "Nothing";
                break;
        }

        $data_class_train = DB::table('kelas_kereta')->latest()->first();
        $id_class_train = $data_class_train->id_kelas_kereta;        
                

        DB::table('kereta')->insert([
            'nama_kereta' => $req->nama_kereta,
            'id_kelas_kereta' => $id_class_train,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => null
        ]);    

        $data_train = DB::table('kereta')->latest()->first();
        $id_train = $data_train->id_kereta;

        DB::table('jadwal_kereta')->insert([
            'id_kereta' => $id_train,
            'keberangkatan_kereta' => $req->keberangkatan_kereta,
            'asal_kereta' => $req->asal_kereta,
            'kedatangan_kereta' => $req->kedatangan_kereta,
            'tujuan_kereta' => $req->tujuan_kereta,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => null
        ]);
                

        return redirect('showTrainDataTransportation');
    }

    public function editPlane($id)
    {   $seat;
        $plane = DB::select('SELECT pesawat.*, kelas_pesawat.*, jadwal_pesawat.* FROM pesawat INNER JOIN kelas_pesawat ON pesawat.id_kelas_pesawat = kelas_pesawat.id_kelas_pesawat INNER JOIN jadwal_pesawat ON pesawat.id_pesawat = jadwal_pesawat.id_pesawat WHERE pesawat.id_pesawat ='.$id);        
        foreach ($plane as $p) {
            $seat = $p->jumlah_seat;
        }
         $data_seat = explode(", ", $seat);
         $eco = $data_seat[0];
         $bus = $data_seat[1];
         $ftl = $data_seat[2];
        return view('admin.plane.transportation.edit',['pesawat' => $plane, 'eco' =>$eco, 'bus' => $bus, 'ftl' => $ftl]);
    }

    public function editTrain($id)    
    {        
        $train = DB::select('SELECT kereta.*, kelas_kereta.*, jadwal_kereta.* FROM kereta INNER JOIN kelas_kereta ON kereta.id_kelas_kereta = kelas_kereta.id_kelas_kereta INNER JOIN jadwal_kereta ON kereta.id_kereta = jadwal_kereta.id_kereta WHERE kereta.id_kereta = '.$id);        
        return view('admin.train.transportation.edit',['kereta' => $train]);
    }

    public function updatePlane(Request $req)
    {
        $id_class_plane;
        $jenis_class = implode(", ",$req->jenis_kelas);
        $total_kursi = [$req->eco_seat, $req->bus_seat, $req->ftl_seat];
        $total_seat = implode(", ", $total_kursi);        
        $data = DB::table('pesawat')->where('id_pesawat',$req->id_pesawat)->get();
        $date = date('Y-m-d H:i:s');
        foreach ($data as $p) {
            $id_class_plane = $p->id_kelas_pesawat;
        }
        DB::update('update kelas_pesawat set jenis_kelas_pesawat = "'.$jenis_class.'", jumlah_seat = "'.$total_seat.'", updated_at = "'.$date.'"  where id_kelas_pesawat = '.$id_class_plane);
        DB::update('update jadwal_pesawat set keberangkatan_pesawat = "'.$req->keberangkatan_pesawat.'", kedatangan_pesawat = "'.$req->kedatangan_pesawat.'", asal_pesawat = "'.$req->asal_pesawat.'", tujuan_pesawat = "'.$req->tujuan_pesawat.'", updated_at = "'.$date.'" where id_pesawat = '.$req->id_pesawat);
        DB::update('update pesawat set maskapai = "'.$req->maskapai.'", updated_at = "'.$date.'" where id_pesawat = '.$req->id_pesawat);        
        return redirect('showPlaneDataTransportation');
    }

    public function updateTrain(Request $req)
    {
        $id_class_train;
        $data = DB::table('kereta')->where('id_kereta',$req->id_kereta)->get();
        $date = date('Y-m-d H:i:s');
        foreach ($data as $k) {
            $id_class_train = $k->id_kelas_kereta;
        }
        switch ($req->jenis_kelas) {
            case 'Economy':
                DB::update('update kelas_kereta set jenis_kelas_kereta = "'.$req->jenis_kelas.'", jumlah_gerbong = '.$req->gerbong.', jumlah_kursi = '.$req->eco_seat.', updated_at = "'.$date.'"  where id_kelas_kereta = '.$id_class_train);
                break;
            case 'Bussiness':
                DB::update('update kelas_kereta set jenis_kelas_kereta = "'.$req->jenis_kelas.'", jumlah_gerbong = '.$req->gerbong.', jumlah_kursi = '.$req->bus_seat.', updated_at = "'.$date.'"  where id_kelas_kereta = '.$id_class_train);
                break;
            default:
            return redirect('showTrainDataTransportation');
                break;
        }        
        DB::update('update jadwal_kereta set keberangkatan_kereta = "'.$req->keberangkatan_kereta.'", kedatangan_kereta = "'.$req->kedatangan_kereta.'", asal_kereta = "'.$req->asal_kereta.'", tujuan_kereta = "'.$req->tujuan_kereta.'", updated_at = "'.$date.'" where id_kereta = '.$req->id_kereta);
        DB::update('update kereta set nama_kereta = "'.$req->nama_kereta.'", updated_at = "'.$date.'" where id_kereta = '.$req->id_kereta);

        return redirect('showTrainDataTransportation');
    }    

    public function deletePlane($id)    
    {
        $id_class;
        $data = DB::table('pesawat')->where('id_pesawat',$id)->get();
        foreach ($data as $k) {
            $id_class = $k->id_kelas_pesawat;
        }
        DB::delete('delete from kelas_pesawat where id_kelas_pesawat = '.$id_class);
        DB::delete('delete from jadwal_pesawat where id_pesawat = '.$id);
        DB::delete('delete from pesawat where id_pesawat = '.$id);                
        return redirect('showPlaneDataTransportation');
    }

    public function deleteTrain($id)    
    {
        $id_class;
        $data = DB::table('kereta')->where('id_kereta',$id)->get();
        foreach ($data as $k) {
            $id_class = $k->id_kelas_kereta;
        }
        DB::delete('delete from kelas_kereta where id_kelas_kereta = '.$id_class);
        DB::delete('delete from jadwal_kereta where id_kereta = '.$id);
        DB::delete('delete from kereta where id_kereta = '.$id);

        return redirect('showTrainDataTransportation');
    }
}
