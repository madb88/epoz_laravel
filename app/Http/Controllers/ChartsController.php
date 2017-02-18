<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Chart;
use Carbon\Carbon;
use App\Http\Requests\ChartRequest;
use Auth;

class ChartsController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth', ['except' => ['index','show']]);
    }

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
    public function show(Chart $chart)
    {
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
        $chart = new Chart($request->all());
        Auth::user()->charts()->save($chart);

        return redirect('charts');
    }

    public function edit(Chart $chart)
    {

      return view('charts.edit', compact('chart'));
    }

    public function update(Chart $chart, ChartRequest $request)
    {
      $chart = Chart::findOrFail($id);
      $chart->update($request->all());

      return redirect('charts');
    }
}
