@extends('disseny')

@section('content')

<h1>Aplicació d'administració treballador_professional </h1>
<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou treballador_professional
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
      <form method="post" action="{{ route('treballador_professionals.store') }}">
          <div class="form-group">
              @csrf
              <label for="NIF">NIF</label>
              <input type="text" class="form-control" name="NIF"/>
          </div>
          <div class="form-group">
              <label for="carrec">carrec</label>
              <input type="text" class="form-control" name="carrec"/>
          </div>
          <div class="form-group">
              <label for="quantitat_SS">quantitat_SS</label>
              <input type="text" class="form-control" name="quantitat_SS"/>
          </div>
          <div class="form-group">
              <label for="percentatge_irpf">percentatge_irpf</label>
              <input type="text" class="form-control" name="percentatge_irpf"/>
          </div>
          <button type="submit" class="btn btn-block btn-primary">Envia</button>
      </form>
  </div>
</div>
<br><a href="{{ url('treballador_professionals') }}">Accés directe a la Llista treballadors_professionals</a>
@endsection
