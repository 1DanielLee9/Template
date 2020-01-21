<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexPlane()
    {
        return view('admin.plane.tickets.show');
    }

    public function indexTrain()
    {
        return view('admin.train.tickets.show');
    }    

    public function inputPlane()
    {
        return view('admin.plane.tickets.insert');
    }

    public function inputTrain()
    {
        return view('admin.train.tickets.insert');
    }

    public function insertPlane(Request $req)
    {
        return view('admin.plane.tickets.show');
    }

    public function insertTrain(Request $req)
    {
        return view('admin.train.tickets.show');
    }

    public function editPlane($id)
    {
        return view('admin.plane.tickets.edit',[$example => 'example']);
    }

    public function editTrain($id)
    {
        return view('admin.train.tickets.edit',[$example => 'example']);
    }

    public function updatePlane(Request $req)
    {
        return view('admin.plane.tickets.show');
    }

    public function updateTrain(Request $req)
    {
        return view('admin.train.tickets.show');
    }    
}
