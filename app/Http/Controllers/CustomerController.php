<?php

namespace App\Http\Controllers;

use App\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{

   public function customerIndex(Request $req)
   {
    $id = $req->session()->get('id');
    $name = $req->session()->get('name');
       return view('customer.home',['id' =>$id , 'name' => $name]);
   }

    public function customerLogin()
    {
        return view('customer.sign_in');
    }

    public function customerSignIn(Request $req)
    {        
        $pwrd = base64_encode($req->password);
        $customer = Pelanggan::where('email_pelanggan',$req->email)->where('password_pelanggan',$pwrd);
        $count = $customer->count();
        $data = $customer->get();

        $id;
        $name;
        foreach ($data as $d) {
            $req->session()->put('id',$d->id_pelanggan);
            $req->session()->put('name',$d->nama_pelanggan);
        }
        if ($count != 0) {
            return redirect('/');
        } else {            
            return redirect('customerLogin')->with('alert','Try Again');
        }        
        
    }  
    
    public function customerLogout(Request $req)
    {
        $req->session()->forget('name');
        $req->session()->forget('id');
        return view('customer.home',['name' => null, 'id' => null]);
    }    


    public function customerRegister()
    {
        return view('customer.sign_up');
    }

    public function customerSignUp(Request $req)
    {
        Pelanggan::create([
            'nama_pelanggan' => $req->nama,
            'email_pelanggan'=> $req->email,
            'telpon_pelanggan'=> $req->telpon,
            'alamat_pelanggan'=> $req->alamat,
            'password_pelanggan'=>base64_encode($req->password)            
            ]);

        return redirect('/');
    }

    //Flight

    public function customerFlight()
    {
        return view('customer.flight');
    }

    public function customerFlightFind(Request $req)
    {
        $type = $req->type;
        $from = $req->from;
        $to = $req->to;
        $depart = $req->depart_date;
        $return = $req->return_date;
        $adult = $req->adult;
        $children = $req->children;
        $infant = $req->infant;
        $grade = $req->grade;

        echo $type."<br/>";
        echo $from."<br/>";
        echo $to."<br/>";
        echo $depart."<br/>";
        echo $return."<br/>";
        echo $adult."<br/>";
        echo $children."<br/>";
        echo $infant."<br/>";
        echo $grade."<br/>";
        
    }

    public function customerTrain()
    {
        return view('customer.train');
    }

    public function customerTrainFind(Request $req)
    {
        $type = $req->type;
        $from = $req->from;
        $to = $req->to;
        $depart = $req->depart_date;
        $return = $req->return_date;
        $adult = $req->adult;
        $children = $req->children;
        $infant = $req->infant;
        $grade = $req->grade;

        // echo $type."<br/>";
        // echo $from."<br/>";
        // echo $to."<br/>";
        // echo $depart."<br/>";
        // echo $return."<br/>";
        // echo $adult."<br/>";
        // echo $children."<br/>";
        // echo $infant."<br/>";
        // echo $grade."<br/>";
        $data = DB::table('kereta')
            ->join('kelas_kereta','kereta.id_kelas_kereta','=','kelas_kereta.id_kelas_kereta')
            ->join('jadwal_kereta','kereta.id_kereta','=','jadwal_kereta.id_kereta')
            ->select('kereta.*','kelas_kereta.*','jadwal_kereta.*')
            ->where('kelas_kereta.jenis_kelas_kereta',$grade)
            ->where('jadwal_kereta.keberangkatan_kereta','like','%'.$depart.'%')
            ->where('jadwal_kereta.asal_kereta',$from)
            ->where('jadwal_kereta.tujuan_kereta',$to)
            ->get();
        ;
        // dd($data);
        //  = DB::select('SELECT kereta.nama_kereta, kelas_kereta.jenis_kelas_kereta, kelas_kereta.jumlah_gerbong, kelas_kereta.jumlah_kursi, jadwal_kereta.keberangkatan_kereta, jadwal_kereta.asal_kereta, jadwal_kereta.kedatangan_kereta, jadwal_kereta.tujuan_kereta FROM ( ( kereta INNER JOIN kelas_kereta ON kereta.id_kelas_kereta = kelas_kereta.id_kelas_kereta ) INNER JOIN jadwal_kereta ON kereta.id_kereta = jadwal_kereta.id_kereta ) WHERE kelas_kereta.jenis_kelas_kereta LIKE "%'.$grade.'%" AND jadwal_kereta.keberangkatan_kereta LIKE "%'.$depart.'%" AND jadwal_kereta.asal_kereta = "'.$from.'" AND jadwal_kereta.tujuan_kereta = "'.$to.'"');
        // foreach ($data as $d) {
        //     echo $d->nama_kereta."<br/>";
        //     echo $d->jenis_kelas_kereta."<br/>";
        //     echo $d->jumlah_gerbong."<br/>";
        //     echo $d->jumlah_kursi."<br/>";
        //     echo $d->keberangkatan_kereta."<br/>";
        //     echo $d->asal_kereta."<br/>";
        //     echo $d->kedatangan_kereta."<br/>";
        //     echo $d->tujuan_kereta."<br/>";            
        // }
        
        return view('customer.findTrain',['data' => $data, 'cost' => 150000]);
        
    }    

    public function customerContact()
    {
        return view('customer.contact');
    }

    public function customerFlightTicket()
    {
        return view('customer.findFlight');
    }    

}
