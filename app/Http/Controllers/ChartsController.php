<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chart;

class ChartsController extends Controller
{
    public function index()
    {
        $charts = Chart::all();

        return $charts;
    }
}
