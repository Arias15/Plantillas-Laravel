<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Cliente;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ClienteFormRequest;
use DB;


class ClienteController extends Controller
{
    public function __contruct()
    {

    }
    public function index(Request $request){
        if($request){
            $query = trim($request->get('searchText'));
            $clientes = DB::table ('clientes')->where('cod_cliente','LIKE','%'.$query.'%')
                ->orderBy('id','desc')
                ->paginate(25);
            return view('cliente.index',["clientes" => $clientes,"searchText"=>$query]);
        }
    }
    /*public function cliente1(){
        return view('cliente.cliente1');
    }*/
    public function create(){
        return view('cliente.create');
    }

    public function store(ClienteFormRequest $request){
        $cliente = new Cliente;
        $cliente -> cod_cliente=$request->get('codigo_nombre');
        $cliente -> raz_social=$request->get('raz_social');
        $cliente -> segmento=$request->get('segmento');
        $cliente -> sub_seg=$request->get('sub_seg');
        $cliente -> canal=$request->get('canal');
        $cliente -> region=$request->get('region');
        $cliente -> departamento=$request->get('departamento');
        $cliente -> provincia=$request->get('provincia');
        $cliente -> ejec_comercial=$request->get('ejec_comercial');
        $cliente -> fac_agrupada=$request->get('fac_agrupada');
        $cliente -> tipo_cliente=$request->get('tipo_cliente');
        $cliente-> save();
        return Redirect::to('/cliente');
    }

    function show($id){
        return view ("cliente.show",["cliente" =>Cliente::findOrFail($id)]);

    }
    function edit ($id){
        return view ("cliente.edit",["cliente" =>Cliente::findOrFail($id)]);

    }

    public function update(ClienteFormRequest $request,$id){
        $cliente=Cliente::findOrFail($id);
        $cliente->cod_cliente=$request->get('cod_cliente');
        $cliente->raz_social=$request->get('raz_social');
        $cliente->segmento=$request->get('segmento');
        $cliente->sub_seg=$request->get('sub_seg');
        $cliente->canal=$request->get('canal');
        $cliente->region=$request->get('region');
        $cliente->departamento=$request->get('departamento');
        $cliente->provincia=$request->get('provincia');
        $cliente->ejec_comercial=$request->get('ejec_comercial');
        $cliente->fac_agrupada=$request->get('fac_agrupada');
        $cliente->tipo_cliente=$request->get('tipo_cliente');
        $cliente->update();
        return Redirect::to('/cliente');

    }
    /*public function destroy(){

    }*/

}
