<?php

namespace App\Http\Controllers;

use App\Amounts;
use App\Leaks;
use App\Subscripts;
use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index()
    {
        $data['items']   = Leaks::all();
        $data['amounts'] = Amounts::all();


        // Counts
        $data['count_1'] = Subscripts::where('source', 'Lux Leaks')->sum('amount');
        $data['count_2'] = Subscripts::find(5)->sum('amount');
        $data['count_3'] = Subscripts::where('source', 'Panama Papers')->sum('amount');
        $data['count_4'] = Subscripts::where('source', 'Bahama Leaks')->sum('amount');
        $data['count_5'] = Subscripts::where('source', 'Rijkentaks')->sum('amount');
        $data['total'] = $data['count_1'] + $data['count_2'] + $data['count_3'] + $data['count_4'] + $data['count_5'];

        // dd($data);

        return view('welcome', $data);
    }
}
