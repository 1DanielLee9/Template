<?php

namespace App\Http\Controllers;

use App\Pelanggan;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

   public function customerIndex()
   {
       return view('customer.home');
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
        
        
        if ($count != 0) {

            return redirect('/');
        } else {
            // echo $customer;
            return redirect('customerLogin')->with('alert',$data);
        }        
        
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
        /**
         * 1. get plane data where from.transportation = from.findFlight & to.transportation = to.findFlight
         * 2. count how much ticket sold in the same plane(for the seat) & how much the free seat
         * 3. 
         * 
         */
        
    }    

    public function customerContact()
    {
        return view('customer.contact');
    }

}
