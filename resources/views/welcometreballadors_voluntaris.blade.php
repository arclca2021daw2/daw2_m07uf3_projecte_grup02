@extends('disseny')

@section('content')

<h1>Aplicació d'administració treballadors_voluntaris</h1>
<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou treballador_voluntari
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
      <form method="post" action="{{ route('treballadors_voluntaris.store') }}">
          <div class="form-group">
              @csrf
              <label for="NIF">NIF</label>
              <input type="text" class="form-control" name="NIF"/>
          </div>
          <div class="form-group">
              <label for="edat">edat</label>
              <input type="text" class="form-control" name="edat"/>
          </div>
          <div class="form-group">
              <label for="professio">professio</label>
              <input type="text" class="form-control" name="professio"/>
          </div>
          <div class="form-group">
              <label for="hores">hores</label>
              <input type="text" class="form-control" name="hores"/>
          </div>
          <button type="submit" class="btn btn-block btn-primary">Envia</button>
      </form>
  </div>
</div>
<br><a href="{{ url('treballadors_voluntaris') }}">Accés directe a la Llista treballadors_voluntaris</a>
<a href="{{ url('treballadors_voluntaris') }}">Accés directe a la Llista de treballadors_voluntaris</a>
@endsection
