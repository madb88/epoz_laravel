<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Request;
use App\Chart;
use Carbon\Carbon;


class ChartsController extends Controller
{
    public function index()
    {
        $charts = Chart::latest('approved')->approved()->get();

        return view('charts.index', compact('charts'));
    }

    public function show($id)
    {
        $chart = Chart::findOrFail($id);

        return view('charts.show', compact('chart'));
    }

    public function create()
    {
        return view('charts.create');
    }

    public function store()
    {
        Chart::create(Request::all());
        return redirect('charts');
    }
}
