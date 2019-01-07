@extends('layouts.app')

@section('content')
    <div>
        <div class="posicion-central row"><h2>Listado de Clientes</h2></div>
        <div class="row ">@include('cliente.search')</div>
    </div>
    <div class="row tab-esp">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered  ">
                    <thead class="thead-dark">
                    <th>RUC</th>
                    <th>Razon social</th>
                    <th>Segmento</th>
                    <th>Sub segmento</th>
                    <th>Canal</th>
                    <th>Region</th>
                    <th>Departamento</th>
                    <th>Provincia</th>
                    <th>Ejecutivo comercial</th>
                    <th>Jefe Comercial</th>
                    <th>Fact.Agrupada</th>
                    <th>Tipo Cliente</th>
                    </thead>
                    @foreach($clientes as $cat)
                        <tr>
                            <td>{{$cat -> cod_cliente}}</td>
                            <td>{{$cat-> raz_social}}</td>
                            <td>{{$cat-> segmento}}</td>
                            <td>{{$cat-> sub_seg}}</td>
                            <td>{{$cat-> canal}}</td>
                            <td>{{$cat-> region}}</td>
                            <td>{{$cat-> departamento}}</td>
                            <td>{{$cat-> provincia}}</td>
                            <td>{{$cat-> ejec_comercial}}</td>
                            <td>{{$cat-> jefe_comercial}}</td>
                            <td>{{$cat-> fac_agrupada}}</td>
                            <td>{{$cat-> tipo_cliente}}</td>
                        </tr>
                    @endforeach

                </table>
            </div>
            {{$clientes-> render()}}
        </div>
    </div>
     <div>

        <div class="row boton1">
            <div class="botosepa"><a href="movil"><button class="buttonaum0 btn btn-info"> PLANTA MOVIL</button></a></div>
            <div><a href="fija"><button class="buttonaum1 btn btn-info"> PLANTA FIJA</button></a></div>
        </div>
        <div class="row boton2">
            <a href="campaña"><button class="buttonaum2 btn btn-info"> CAMPAÑA</button></a>
        </div>
    </div>

@endsection