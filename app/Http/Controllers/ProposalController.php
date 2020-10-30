<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use App\Models\Proposal;
use App\Models\Client;

use App\Exports\ProposalsExport;
use Maatwebsite\Excel\Facades\Excel;

class ProposalController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function __construct() {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $proposals = Proposal::where('user_id', Auth::user()->id)->get();
        return view('proposals.index', compact('proposals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::where('user_id', Auth::user()->id)->get();
        return view('proposals.create', compact('clients'));
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
            'servico'                   => 'required',
            'valorTotal'                => 'required|numeric',
            'sinal'                     => 'required|numeric',
            'quantidadeDeParcelas'      => 'required|integer',
            'valorDasParcelas'          => 'required|numeric',
            'dataDeInicioDePagamento'   => 'required|date',
            'dataDasParcelas'           => 'required|date',
            'status'                    => [
                'required',
                Rule::in(['em aberto','fechada'])
            ]
        ];
        $messages = [
            'required'  => 'Campo obrigatório!',
            'numeric'   => 'Digite um número válido',
            'integer'   => 'Utilize um número de 1 a 99 (não utilize vírgula ou número negativo)',  
            'date'      => 'Digite uma data válida ex: (2020-10-28)'
        ];
        $request->validate($rules, $messages);

        $proposal = new Proposal();
        $proposal->user_id = Auth::user()->id;
        $proposal->client_id = $request->input('client_id');
        $proposal->servico = $request->input('servico');
        $proposal->valor_total = $request->input('valorTotal');
        $proposal->sinal = $request->input('sinal');
        $proposal->quantidade_de_parcelas = $request->input('quantidadeDeParcelas');
        $proposal->valor_das_parcelas = $request->input('valorDasParcelas');
        $proposal->data_de_inicio_de_pagamento = $request->input('dataDeInicioDePagamento');
        $proposal->data_das_parcelas = $request->input('dataDasParcelas');
        $proposal->status = $request->input('status');
        $proposal->save();
        return redirect('/propostas');
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
        $proposal = Proposal::find($id);
        if(isset($proposal)){
            return view('proposals.update', compact('proposal'));
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
        $proposal = Proposal::find($id);
        if(isset($proposal)){
            $rules = [
                'servico'                   => 'required',
                'valorTotal'                => 'required|numeric',
                'sinal'                     => 'required|numeric',
                'quantidadeDeParcelas'      => 'required|integer',
                'valorDasParcelas'          => 'required|numeric',
                'dataDeInicioDePagamento'   => 'required|date',
                'dataDasParcelas'           => 'required|date',
                'status'                    => [
                    'required',
                    Rule::in(['em aberto','fechada'])
                ]
            ];
            $messages = [
                'required'  => 'Campo obrigatório!',
                'numeric'   => 'Digite um número válido',
                'integer'   => 'Utilize um número de 1 a 99 (não utilize vírgula ou número negativo)',  
                'date'      => 'Digite uma data válida ex: (2020-10-28)'
            ];
            $request->validate($rules, $messages);

            $proposal->servico = $request->input('servico');
            $proposal->valor_total = $request->input('valorTotal');
            $proposal->sinal = $request->input('sinal');
            $proposal->quantidade_de_parcelas = $request->input('quantidadeDeParcelas');
            $proposal->valor_das_parcelas = $request->input('valorDasParcelas');
            $proposal->data_de_inicio_de_pagamento = $request->input('dataDeInicioDePagamento');
            $proposal->data_das_parcelas = $request->input('dataDasParcelas');
            $proposal->status = $request->input('status');
            $proposal->save();
            return redirect('/propostas');
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

    public function search(Request $request)
    {
        $query = $request->get('search');

        $proposals = Proposal::query()
            ->where('client_id', 'LIKE', "%{$query}%")
            ->orwhere('status', 'LIKE', "%{$query}%")
            ->get();

        

        return view('proposals.index', compact('proposals'));
    }

    public function export() 
    {
        return Excel::download(new ProposalsExport, 'propostas.xlsx');
    }
}
