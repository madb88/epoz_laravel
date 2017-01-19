<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Chart;
use Carbon\Carbon;
use App\Http\Requests\ChartRequest;


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
    public function store(ChartRequest $request)
    {
        Chart::create($request->all());
        return redirect('charts');
    }

    public function edit($id)
    {
      $chart = Chart::findOrFail($id);

      return view('charts.edit', compact('chart'));
    }

    public function update($id, ChartRequest $request)
    {
      $chart = Chart::findOrFail($id);
      $chart->update($request->all());

      return redirect('charts');
    }
}
