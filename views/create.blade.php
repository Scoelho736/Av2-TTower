@extends('templates.template')

@section('content')

<br>
<link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
<div class="card border mb-3 shadow-lg p-3 mb-5 bg-body rounded" style="width:1000px;margin-top:10px;margin-left:30px;height:400px">
  <div class="card-header">Cadastro</div>

<p class="card-text">
<form class="row g-1 bg-black-50 rounded
position-absolute top-100" style="height: 400px;width:900px;margin-top:-350px;margin-left:30px">
  <div class="col-md-4" style="margin-top:40px;margin-left:70px">
    <label  class="form-label text-secondary">Nome Morador</label>
    <input  class="form-control" id="name">
  </div>
  <div class="col-md-3"style="margin-top:40px">
    <label  class="form-label text-secondary">Bloco</label>
    <input class="form-control" id="bloco">
  </div>
  <div class="col-3"style="margin-top:40px">
    <label  class="form-label text-secondary">Apto</label>
    <input  class="form-control" id="apto" >
  </div>
  <div class="col-4"style="margin-top:-15px;margin-left:70px">
    <label class="form-label text-secondary">Vaga de Garagem</label>
    <input  class="form-control" id="garagem" >
  </div>
  <div class="col-md-3"style="margin-top:-15px">
    <label  class="form-label text-secondary">Qtd Moradores Apto</label>
    <input  class="form-control" id="qtdmoradores">
  </div>

  <div class="col-12"style="margin-top:-15px;margin-left:70px">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>


</div>



@endsection
