@extends('disseny')

@section('content')

<h1>Llista socis_ong</h1>
<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <table class="table">
    <thead>   
        <tr class="table-primary">
          <td>CIF_ONG</td>
          <td>NIF_soci</td>
        </tr>
    </thead>
    <tbody>
        @foreach($socis_ongs as $soci_ong)
        <tr>
            <td>{{$soci_ong->CIF_ONG}}</td>
            <td>{{$soci_ong->NIF_soci}}</td>     
            <td class="text-left">
                <a href="{{ route('socis_ongs.edit', $soci_ong->CIF_ONG)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('socis_ongs.destroy', $soci_ong->CIF_ONG)}}" method="post" style="display: inline-block">
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
<br><a href="{{ url('socis_ongs/create') }}">Accés directe a la vista de creació d'empleats</a>
@endsection