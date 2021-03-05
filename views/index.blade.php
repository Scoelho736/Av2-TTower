@extends('templates.template')

@section('content')


<div class="col-11 m-auto" >
  <div class="card shadow p-3 mb-5 bg-body rounded"style="margin-top:50px">
    <div class="card-body">
      @csrf
      @method('delete')
  <table class="table text-center">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nome</th>
        <th scope="col">Apto</th>
        <th scope="col">Bloco</th>
        <th scope="col">V. Garagem</th>
        <th scope="col">Qtd Morador</th>
        <th scope="col">Opcoes</th>
      </tr>
    </thead>
    <tbody>

      @foreach($Apto as $Aptos)


      <tr>
        <th scope="row">{{$Aptos->id}}</th>
        <td>{{$Aptos->nome}}</td>
        <td>{{$Aptos->apto}}</td>
        <td>{{$Aptos->bloco}}</td>
        <td>{{$Aptos->v_garagem}}</td>
        <td>{{$Aptos->qtd_morador}}</td>
        <td>
          <a href="edit/{{ $Aptos->id }}/edit">
            <button class="btn btn-primary">Editar</button>
          </a>
          <a href="delete/{{ $Aptos->id }}">
            <button class="btn btn-danger">Excluir</button>
          </a>

        </td>
      </tr>
      <tr>


      @endforeach
    </tbody>
  </table>
</div>
</div>
</div>



@endsection
