@extends('disseny')

@section('content')

<h1>Llista treballadors voluntariis</h1>
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
          <td>edat</td>
          <td>professio</td>
          <td>hores</td>
        </tr>
    </thead>
    <tbody>
        @foreach($treballadors_voluntaris as $treballador_voluntari)
        <tr>
            <td>{{$treballador_voluntari->NIF}}</td>
            <td>{{$treballador_voluntari->edat}}</td>  
            <td>{{$treballador_voluntari->professio}}</td> 
            <td>{{$treballador_voluntari->hores}}</td>  
            <td class="text-left">
                <a href="{{ route('treballadors_voluntaris.edit', $treballador_voluntari->NIF)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('treballadors_voluntaris.destroy', $treballador_voluntari->NIF)}}" method="post" style="display: inline-block">
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
<br><a href="{{ url('treballadors_voluntaris/create') }}">Accés directe a la vista de creació de treballadors voluntaris</a>
@endsection
