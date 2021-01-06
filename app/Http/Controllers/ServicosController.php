<?php

namespace App\Http\Controllers;

use App\Models\Servicos;
use Illuminate\Http\Request;

class ServicosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicos = Servicos::paginate();
        $title = 'Serviços';
        return view('servicos.index', compact('servicos', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Serviços';
        return view('servicos.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {

            Servicos::create($request->all());
            return redirect()->route('servicos.index');
        }catch (\Throwable $error){
            return view('servicos.index', [
                'errors' => $error->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servicos  $servicos
     * @return \Illuminate\Http\Response
     */
    public function show(Servicos $servicos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servicos  $servico
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicos $servico)
    {
        $title = 'Serviços';
        return view('servicos.edit', compact('servico', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Servicos  $servicos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servicos $servico)
    {
        $servico->fill($request->all());
        $servico->save();
        return redirect()->route('servicos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servicos  $servicos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicos $servico)
    {
        $servico->delete();
        return redirect()->route('servicos.index');
    }
}
