<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Client;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {   
        $rules = [
            'razaoSocial'       => 'required',
            'nomeFantasia'      => 'required',
            'cnpj'              => 'required',
            'endereco'          => 'required',
            'email'             => 'required|unique:clients|email',
            'telefone'          => 'required',
            'nomeDoResposavel' => 'required',
            'cpf'               => 'required',
            'celular'           => 'required',
        ];

        $messages = [
            'required'  => 'Campo obrigatório!',
            'email'     => 'Digite um endereço de email válido',
            'unique'    => 'Já existe um endereço email cadastrado com essa conta'
        ];
        $request->validate($rules, $messages);

        $client = new Client();
        $client = Auth::user()->id;
        $client->razao_social = $request->input('razaoSocial');
        $client->nome_fantasia = $request->input('nomeFantasia');
        $client->cnpj = $request->input('cnpj');
        $client->endereco = $request->input('endereco');
        $client->email = $request->input('email');
        $client->telefone = $request->input('telefone');
        $client->nome_do_responsavel = $request->input('nomeDoResposavel');
        $client->cpf = $request->input('cpf');
        $client->celular = $request->input('celular');
        $client->save();
        return redirect('/clientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);
        if(isset($client)){
            return view('clients.update', compact('client'));
        }
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
        $client = Client::find($id);
        if(isset($client)){
            $client->razao_social = $request->input('razaoSocial');
            $client->nome_fantasia = $request->input('nomeFantasia');
            $client->cnpj = $request->input('cnpj');
            $client->endereco = $request->input('endereco');
            $client->email = $request->input('email');
            $client->telefone = $request->input('telefone');
            $client->nome_do_responsavel = $request->input('nomeDoResposavel');
            $client->cpf = $request->input('cpf');
            $client->celular = $request->input('celular');
            $client->save();
            return redirect('/clientes');
        }
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
