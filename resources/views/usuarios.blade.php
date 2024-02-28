@extends('paginas.principal')

@section('titolo','Usuarios')

@section('conteudo')

<style>

  
</style>
<form action="/usuarios" method="get">
<input type="search" class="pesquisar" name="pesquisar" placeholder="pesquisar...">
<br>

                  <br>
<p>Escolha uma intervalo de datas para procurar</p>
<div class="col-md-2">
                  <div class="form-floating">
                    <input type="date" class="form-control" id="floatingZip" name="dataInicio"placeholder="Data Inical">
                    <label for="floatingZip">Data Inical</label>
                  </div>
                  </div>
               <br>
                  <div class="col-md-2">
                  <div class="form-floating">
                    <input type="date" class="form-control" id="floatingZip" name="dataFim"placeholder="Data Final">
                    <label for="floatingZip">Data Fina</label>
                  </div>
                  </div>    
                    
</form>
<br>

<br>
<br>
@if(session('sucesso'))
<p>session('sucesso')</p>
@endif
<div class="card">
  <div class="card-header">
    Informações de Cidadãos
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>Registro</th>
            <th>Nome</th>
            <th>Pai</th>
            <th>Mãe</th>
            <th>Naturalidade</th>
            <th>Estado Civil</th>
            <th>Sexo</th>
            <th>Identidade</th>
            <th>Provincia</th>
            <th>Altura</th>
            <th>Nascido</th>
            <th>Emissão</th>
            <th>Validade</th>
            <th>Acção</th>
          </tr>
        </thead>
        @foreach($usuarios as $usuario)
        <tbody>
          <tr>
            <td>{{$usuario->id}}</td>
            <td>{{$usuario->nome}}</td>
            <td>{{$usuario->nome_pai}}</td>
            <td>{{$usuario->nome_mae}}</td>
            <td>{{$usuario->naturalidade}}</td>
            <td>{{$usuario->estado_civil}}</td>
            <td>{{$usuario->sexo}}</td>
            <td>{{$usuario->identidade}}</td>
            <td>{{$usuario->provincia}}</td>
            <td>{{$usuario->altura}}</td>
            <td>{{$usuario->data_nascimento}}</td>
            <td>{{$usuario->data_emissao}}</td>
            <td>{{$usuario->data_validade}}</td>
            <td>
 <form action="/usuarios/{{$usuario->id}}" method="post">
 @csrf
 @method('DELETE')
 <button class='btn btn-danger delete-btn'><ion-icon name="trash-outline"></ion-icon></button>
 </form>
</td>
          </tr>
        </tbody>
        @endforeach
      </table>
    </div>
  </div>
</div>
@endsection
