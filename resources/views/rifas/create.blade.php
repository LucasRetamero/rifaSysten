@extends('layouts.app')

@section('content')
<form action="{{ route('home.rifas.add.picture') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" id="img_Rifa" name="imgRifa[]" multiple="multiple">
    
    <div class="form-group">
     <label for="exampleInputEmail1">Nome da rifa</label>
     <input type="text" class="form-control" id="exampleInputName" name="name_raffle" aria-describedby="emailHelp" placeholder="Digite o nome">
   </div>

   <div class="form-group">
     <label for="exampleInputEmail1">Quantidade de numeros</label>
     <input type="number" class="form-control" id="exampleInputQttyNumber" name="quantity_raffle" aria-describedby="emailHelp" placeholder="000">
   </div>

   <div class="form-group">
     <label for="exampleInputEmail1">Valor de cada rifa</label>
     <input type="number" class="form-control" id="exampleInputPriceRaffle" name="price_raffle" aria-describedby="emailHelp" placeholder="0.00">
   </div>

   <div class="form-group">
     <label for="exampleInputEmail1">Descritivo</label>
     <textarea type="text" class="form-control" id="exampleInputDescribeRaffle" name="describe_raffle" placeholder="Descritivo da rifa"></textarea>
   </div>
    
    
    <button type="submit" class="btn btn-primary">Cadastrar Rifa</button>
</form>
@endsection
