{!! Form :: open(array('url'=> '/cliente','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<div class=" emp-bus">
    <div class="input-group mb-3">
        <input type="text" class="form-control" name="searchText" placeholder="Buscar" value="{{$searchText}}">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit">Buscar</button>
        </div>
    </div>
</div>
{{Form::close()}}