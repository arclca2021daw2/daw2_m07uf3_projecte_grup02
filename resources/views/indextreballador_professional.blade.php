@extends('disseny')

@section('content')

<h1>Llista treballadors professionals </h1>
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
          <td>carrec</td>
          <td>quantitat_SS</td>
          <td>percentatge_irpf</td>
        </tr>
    </thead>
    <tbody>
        @foreach($treballador_professionals as $treballador_professional)
        <tr>
            <td>{{$treballador_professional->NIF}}</td>
            <td>{{$treballador_professional->carrec}}</td>  
            <td>{{$treballador_professional->quantitat_SS}}</td> 
            <td>{{$treballador_professional->percentatge_irpf}}</td>  
            <td class="text-left">
                <a href="{{ route('treballador_professionals.edit', $treballador_professional->NIF)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('treballador_professionals.destroy', $treballador_professional->NIF)}}" method="post" style="display: inline-block">
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
<br><a href="{{ url('treballador_professionals/create') }}">Accés directe a la vista de creació de treballadors professionals</a>
@endsection
