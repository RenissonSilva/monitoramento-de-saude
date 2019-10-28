<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function listagemCheckup()
    {
        $checkups = \App\Checkup::paginate(5);
        return view('checkup.listagem', compact('checkups'));
    }
    public function adicionarCheckup()
    {
        return view('checkup.adicionar');
    }
    public function salvarCheckup(Request $request)
    {
        $request->validate([
        	'data_checkup' => 'required',
			'peso' => 'required',
			'altura' => 'required',
			'pressao' => 'required',
			'glicose' => 'required',
			'colesterol_LDL' => 'required',
			'colesterol_HDL' => 'required',
			'observacoes' => 'required'
        ]);

        \App\Checkup::create($request->all());
        return redirect()->route('listagem.checkup');
    }
}
