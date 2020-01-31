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

        $total = intval($adult)+intval($children)+intval($infant);
        // echo $total;

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
        $id = $req->session()->get('id');
        $name = $req->session()->get('name');
        
        return view('customer.findTrain',['data' => $data, 'cost' => 150000*$total ,'id' =>$id , 'name' => $name,'passengers' => $total]);
        
    }    

    public function customerTrainTicket($trainId,$passengerId,$cost,$passengers)
    {
        $trainData = DB::table('kereta')
        ->join('kelas_kereta','kereta.id_kelas_kereta','=','kelas_kereta.id_kelas_kereta')
        ->join('jadwal_kereta','kereta.id_kereta','=','jadwal_kereta.id_kereta')
        ->select('kereta.*','kelas_kereta.*','jadwal_kereta.*')
        ->where('kereta.id_kereta',$trainId)
        ->get();
        
        $passengerData = DB::table('pelanggan')
        ->where('pelanggan.id_pelanggan',$passengerId)
        ->get();

        $depart;
        $arrive;
        $grade;
        $from;
        $to;
        foreach ($trainData as $t) {
            $depart = $t->keberangkatan_kereta;
            $arrive = $t->kedatangan_kereta;
            $grade = $t->jenis_kelas_kereta;
            $from = $t->asal_kereta;
            $to = $t->tujuan_kereta;
        }

        $fee = $cost / $passengers;        

        // DB::table('pesan_kereta')->insert([
        //     'id_pelanggan'=>$passengerId,
        //     'id_kereta'=>$trainId,
        //     'tgl_berangkat'=>$depart,
        //     'harga'=>$fee,
        //     'jumlah_pesan'=>$passengers,
        //     'total_bayar'=>$cost,
        //     'status_bayar'=>1,
        //     'created_at'=>date('Y-m-d H:i:s'),
        //     'updated-at'=>null          
        // ]);

        $bookData = DB::table('pesan_kereta')
        ->where('pesan_kereta.id_kereta',$trainId)
        ->where('pesan_kereta.id_pelanggan',$passengerId)
        ->get();
        
        $bookId;        

        foreach ($bookData as $b) {
            $bookId = $b->id_pesan_kereta;                                    
        }
        
        $clockwise = explode(" ",$arrive);;
        $clock = explode(" ",$depart);        
        $date_start = $clock[1]." ".$clock[2]." ".$clock[3]." ".$clock[5];
        $date_end = $clockwise[1]." ".$clockwise[2]." ".$clockwise[3]." ".$clockwise[5];        
        $datetime_start = strtotime($date_start);
        $datetime_end = strtotime($date_end);        
        $time_start = date('d M Y H.i',$datetime_start);
        $time_end = date('d M Y H.i',$datetime_end);
        $book_code = $datetime_start."".$passengerId."".$trainId;        

        $cargo;
        switch ($grade) {
            case 'Economy':
                $cargo = "ECAC";
                break;
            
            case 'Bussiness':
                $cargo = "BNAC";
                break;                
            
            default:
                echo $grade;
                break;
        }

        $ticket = DB::table('ticket_kereta')
                ->where('ticket_kereta.id');
        $ticket_count = $ticket->count();        

        if ($ticket_count == 0) {
            // DB::table('tiket_kereta')->insert([
            //     'id_pesan_kereta' =>$bookId,
            //     'id_pelanggan' =>$passengerId,
            //     'id_kereta' =>$trainId,
            //     'no_kursi' => $cargo.' I ; 1A',
            //     'keberangkatan_kereta' =>$time_start,
            //     'kedatangan_kereta' =>$time_end,
            //     'asal_kereta' =>$from,
            //     'tujuan_kereta' =>$to,
            //     'created_at' =>date('Y-m-d H:i:s'),
            //     'updated_at' =>null
            // ]);   
        } else {
            $ticket->get();
            
        }        

        // DB::table('tiket_kereta')
        // ->where('pesan_kereta.id_pesan_kereta',$bookId)
        // ->where('kereta.id_kereta',$trainId)
        // ->where('pelanggan.id_pelanggan',$passengerId)
        // ->get();


            // return null;
        return view('customer.ticketTrain');
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
