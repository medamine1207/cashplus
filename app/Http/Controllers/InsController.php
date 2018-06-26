<?php

namespace App\Http\Controllers;

use App\Http\Requests\form_in;
use App\models\in;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;

class InsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

       $ins = in::all();
        return view('ins.index', compact('ins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(form_in $request)
    {
        
        in::create(['montant_in'=>$request->f_montant_in,
                    'motif_in'=>$request->f_motif_in,
                    'remarque_in'=>$request->f_remarque_in    ]);
        Flashy::success('entrée créée avec succès');
        return redirect()->route('ins.home');
        //dd('test du formulaire de creation');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_in)
    {


       $ins = in::findOrFail($id_in);
        return view('ins.show',compact('ins'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
