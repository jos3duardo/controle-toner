<?php

namespace App\Http\Controllers;

use App\Http\Requests\TonerRequest;
use App\Models\Toner;
use Illuminate\Http\Request;

class TonerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $toners = Toner::paginate(5);
        $title = 'Toners';
        return view('toners.index', compact('title', 'toners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Toners';
        return view('toners.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TonerRequest $request)
    {
        try {
            Toner::create($request->all());
            return redirect()->route('toners.index');
        }catch (\Throwable $error){
            return view('toners.index', [
                'errors' => $error->getMessage()
            ]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Toner  $toner
     * @return \Illuminate\Http\Response
     */
    public function show(Toner $toner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Toner  $toner
     * @return \Illuminate\Http\Response
     */
    public function edit(Toner $toner)
    {
        $title = 'Toners';
        return view('toners.edit', compact('toner', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Toner  $toner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Toner $toner)
    {
        $toner->fill($request->all());
        $toner->save();
        return redirect()->route('toners.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Toner  $toner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Toner $toner)
    {
        $toner->delete();
        return redirect()->route('toners.index');
    }
}
