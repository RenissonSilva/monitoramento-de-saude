<?php

namespace App\Http\Controllers;

use App\Checkup;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listagemCheckup()
    {
        if(Auth::user()->type != 'medic'){
            //dd(\App\Checkup::all()->where('user_id',Auth::user()->id));
            $checkups = \App\Checkup::all()->where('user_id',Auth::user()->id);
            return view('checkup.listaciente', compact('checkups'));
        }
        $checkups = \App\Checkup::paginate(5);
        return view('checkup.listagem', compact('checkups'));
    }

    public function adicionarCheckup()
    {
        if(Auth::user()->type != 'medic'){
            return redirect()->route('home');
        }
        $patients = User::All()->where('type','patient');
        //dd($patients);
        return view('checkup.adicionar', compact('patients'));
    }

    public function salvarCheckup(Request $request)
    {
        $request->validate([
            'user_id' => 'required|numeric|min:0',
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
        if(Auth::user()->type != 'medic'){
            return redirect()->route('home');
        }
        $checkup = \App\Checkup::find($id);
        $checkup->delete();
        return redirect()->route('listagem.checkup');
    }

    public function editCheckup($id){
        if(Auth::user()->type != 'medic'){
            return redirect()->route('home');
        }
        $checkup = \App\Checkup::find($id);
        return view('checkup.edit', compact('checkup'));

    }

    public function updateCheckup(Request $request, $id){

        $request->validate([
        	'data_checkup' => 'required|date|min:10|max:10',
			'peso' => 'required|numeric|min:0.1|max:600',
			'altura' => 'required|numeric|min:0.1|max:3',
			'pressao' => 'required|string|min:4|max:30',
			'glicose' => 'required|numeric|integer|min:1|max:200',
			'colesterol_LDL' => 'required|numeric|min:1|max:200',
			'colesterol_HDL' => 'required|numeric|min:2|max:100',
			'observacoes' => 'required|string|min:1|max:500'
        ]);
        $checkup = \App\Checkup::find($id);
        $checkup->peso = $request->get('peso');
        $checkup->altura = $request->get('altura');
        $checkup->pressao = $request->get('pressao');
        $checkup->glicose = $request->get('glicose');
        $checkup->colesterol_LDL = $request->get('colesterol_LDL');
        $checkup->colesterol_HDL = $request->get('colesterol_HDL');
        $checkup->observacoes = $request->get('observacoes');
        $checkup->save();

        return redirect('/listagem/checkup')->withSuccess('Check-up modificado com sucesso');


    }


}
