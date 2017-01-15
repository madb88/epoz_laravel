<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chart;

class ChartsController extends Controller
{
    public function index()
    {
        $charts = Chart::all();

        return view('charts.index', compact('charts'));
    }

    public function show($id)
    {
        $chart = Chart::findOrFail($id);

        return view('charts.show', compact('chart'));
    }
}
