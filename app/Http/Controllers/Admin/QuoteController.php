<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quotes = Quote::orderBy('updated_at', 'DESC')->paginate(10);

        return view('admin.quotes.index', compact('quotes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $quote = new Quote();
        return view('admin.quotes.create', compact('quote'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required',
            'discount' => 'required'
        ]);
        $data = $request->all();
        $quote = new Quote();

        $quote->fill($data);
        $quote->save();

        return redirect()->route('admin.quotes.show', $quote->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function show(Quote $quote)
    {
        return view('admin.quotes.show', compact('quote', $quote->id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function edit(Quote  $quote)
    {
        return view('admin.quotes.edit', compact('quote'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quote  $quote)
    {
        $request->validate([
            'amount' => 'required',
            'discount' => 'required'
        ]);
        $data = $request->all();

        $quote->update($data);

        return redirect()->route('admin.quotes.show', $quote->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quote  $quote)
    {
        $quote->delete();
        return redirect()->route('admin.quotes.index');
    }
}
