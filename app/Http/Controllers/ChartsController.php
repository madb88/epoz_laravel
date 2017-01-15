<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Chart;
use Carbon\Carbon;
use App\Http\Requests\CreateChartRequest;


class ChartsController extends Controller
{
    /**
     * Show all approved Charts
     * @return [array] [array of Charts]
     */
    public function index()
    {
        $charts = Chart::latest('approved')->approved()->get();

        return view('charts.index', compact('charts'));
    }

    /**
     * Show one chart
     * @param  [int] $id
     * @return Response
     */
    public function show($id)
    {
        $chart = Chart::findOrFail($id);

        return view('charts.show', compact('chart'));
    }

    /**
     * Return form for create
     * @return Form
     */
    public function create()
    {
        return view('charts.create');
    }

    /**
     * Saving new chart to DB
     * @param CreateChartRequest $request
     * @return Response
     */
    public function store(CreateChartRequest $request)
    {
        Chart::create($request->all());
        return redirect('charts');
    }
}
