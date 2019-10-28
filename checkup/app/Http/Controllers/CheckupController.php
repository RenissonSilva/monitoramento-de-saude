<?php

namespace App\Http\Controllers;

use App\User;
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
        $patients = User::All()->where('type','patient');
        //dd($patients);
        return view('checkup.adicionar', compact('patients'));
    }
    public function salvarCheckup(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
        	'data_checkup' => 'required|date|min:10|max:10',
			'peso' => 'required|numeric|min:0.1|max:600',
			'altura' => 'required|numeric|min:0.1|max:3',
			'pressao' => 'required|string|min:4|max:30',
			'glicose' => 'required|numeric|integer|min:1|max:200',
			'colesterol_LDL' => 'required|numeric|min:1|max:200',
			'colesterol_HDL' => 'required|numeric|min:2|max:100',
			'observacoes' => 'required|string|min:1|max:500'
        ]);

        \App\Checkup::create($request->all());
        return redirect()->route('listagem.checkup')->withSuccess('Check-up criado com sucesso');
    }
    public function visualizarCheckup($id)
    {
        $checkup = \App\Checkup::find($id);
        return view('checkup.visualizar', compact('checkup'));
    }
    public function deletarCheckup($id)
    {
        $checkup = \App\Checkup::find($id);
        $checkup->delete();
        return redirect()->route('listagem.checkup');
    }
}
