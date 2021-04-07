@extends('disseny')

@section('content')

<h1>Llista treballadors</h1>
<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <table class="table">
    <thead>   
        <tr class="table-primary">
          <td>NIF</td>
          <td>nom_cognoms</td>
          <td>adresa</td>
          <td>poblacio</td>
          <td>comarca</td>
          <td>tel_fixe</td>
          <td>tel_mobil</td>
          <td>email</td>
          <td>data_ingres</td>
          <td>CIF_ong</td>
        </tr>
    </thead>
    <tbody>
        @foreach($treballadors as $treballador)
        <tr>
            <td>{{$treballador->NIF}}</td>
            <td>{{$treballador->nom_cognoms}}</td>  
            <td>{{$treballador->adresa}}</td> 
            <td>{{$treballador->poblacio}}</td> 
            <td>{{$treballador->comarca}}</td> 
            <td>{{$treballador->tel_fixe}}</td> 
            <td>{{$treballador->tel_mobil}}</td> 
            <td>{{$treballador->email}}</td>    
            <td>{{$treballador->data_ingres}}</td>  
            <td>{{$treballador->CIF_ong}}</td>  
            <td class="text-left">
                <a href="{{ route('treballadors.edit', $treballador->NIF)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('treballadors.destroy', $treballador->NIF)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Esborra</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
<br><a href="{{ url('treballadors/create') }}">Accés directe a la vista de creació de treballadors</a>
@endsection