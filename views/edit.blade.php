@extends('templates.template')

@section('content')

<br>

<div class="card border mb-3 shadow-lg p-3 mb-5 bg-body rounded" style="width:1000px;margin-top:10px;margin-left:30px;height:400px">
  <div class="card-header">Cadastro</div>

<p class="card-text">
<form name="formEdit" id="formEdit" method="post" action="{{url('edit/$Apto->id')}}"  class="row g-1 bg-black-50 rounded
position-absolute top-100" style="height: 400px;width:900px;margin-top:-350px;margin-left:30px">
@csrf

@method('PUT')
  <div class="col-md-4" style="margin-top:40px;margin-left:70px">
    <label  class="form-label text-secondary">Nome Morador</label>
    <input  class="form-control" id="nome" name="nome" value="{{$Apto->nome ?? ''}}">
  </div>
  <div class="col-md-3"style="margin-top:40px">
    <label  class="form-label text-secondary">Bloco</label>
    <input class="form-control" id="bloco" name="bloco" value="{{$Apto->bloco ?? ''}}">
  </div>
  <div class="col-3"style="margin-top:40px">
    <label  class="form-label text-secondary">Apto</label>
    <input  class="form-control" id="apto" name="apto" value="{{$Apto->apto ?? ''}}">
  </div>
  <div class="col-4"style="margin-top:-15px;margin-left:70px">
    <label class="form-label text-secondary">Vaga de Garagem</label>
    <input  class="form-control" id="v_garagem" name="v_garagem"value="{{$Apto->v_garagem ?? ''}}" >
  </div>
  <div class="col-md-3"style="margin-top:-15px">
    <label  class="form-label text-secondary">Qtd Moradores Apto</label>
    <input  class="form-control" id="qtd_morador" name="qtd_morador" value="{{$Apto->qtd_morador ?? ''}}">
  </div>

  <div class="col-12"style="margin-top:-15px;margin-left:70px">
    <button type="submit" value="Cadastra" class="btn btn-primary">Cadastrar</button>
  </div>
</form>


</div>

@endsection
