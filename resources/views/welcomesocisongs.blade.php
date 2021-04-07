@extends('disseny')

@section('content')

<h1>Aplicació d'administració socis_ongs</h1>
<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou soci_ong
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif
      <form method="post" action="{{ route('socis_ongs.store') }}">
          <div class="form-group">
              @csrf
              <label for="CIF_ONG">CIF_ONG</label>
              <input type="text" class="form-control" name="CIF_ONG"/>
          </div>
          <div class="form-group">
              <label for="NIF_soci">NIF_soci</label>
              <input type="text" class="form-control" name="NIF_soci"/>
          </div>
          <button type="submit" class="btn btn-block btn-primary">Envia</button>
      </form>
  </div>
</div>
<br><a href="{{ url('socis_ongs') }}">Accés directe a la Llista d'empleats</a>
<a href="{{ url('treballadors') }}">Accés directe a la Llista de treballadors</a>
@endsection
