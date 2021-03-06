<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataPort = Portfolio::all();
        return view('backoffice.portfolio.show', compact('dataPort'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $portfolio = new Portfolio();
        $portfolio->titre = $request->titre;
        $portfolio->url = $request->file('url')->hashName();
        $portfolio->description = $request->description;
        $portfolio->save();
        $request->file('url')->storePublicly("img", "public");
        return redirect()->route('photos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        return view('backoffice.portfolio.show', compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *o
     * @param  \App\Models\Portfoli  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        return view('backoffice.portfolio.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        Storage::disk("public")->delete("img/" .$portfolio->url);
        $portfolio->titre = $request->titre;
        $portfolio->url = $request->file("url")->hashName();
        $portfolio->description = $request->description;
        $portfolio->save();
        $request->file("url")->storePublicly("img", "public");
        return redirect()->route('portfolios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        Storage::disk("public")->delete("img/" .$portfolio->url);
        $portfolio->delete();
        return redirect()->route('portfolios.index');
    }
}
