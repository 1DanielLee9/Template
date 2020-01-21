<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data_auth = User::all();
        $data_customer = DB::table('pelanggan')->get();

        return view('admin.accounts.show',['authority' => $data_auth, 'customer' => $data_customer ]);

    }

}
