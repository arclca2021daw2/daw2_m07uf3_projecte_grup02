@extends('disseny')

@section('content')


<div class="card mt-5">
    <div class="card-header">
        Actualització de dades
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
        <form method="post" action="{{ route('treballadors.update', $treballador->NIF) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="NIF">NIF</label>
                <input type="text" class="form-control" name="NIF" value="{{ $treballador->NIF }}" />
            </div>
            <div class="form-group">
                <label for="nom_cognoms">nom_cognoms</label>
                <input type="text" class="form-control" name="nom_cognoms" value="{{ $treballador->nom_cognoms }}" />
            </div>

            <div class="form-group">
                <label for="adresa">adresa</label>
                <input type="text" class="form-control" name="adresa" value="{{ $treballador->adresa }}" />
            </div>

            <div class="form-group">
                <label for="poblacio">poblacio</label>
                <input type="text" class="form-control" name="poblacio" value="{{ $treballador->poblacio }}" />
            </div>

            <div class="form-group">
                <label for="comarca">comarca</label>
                <input type="text" class="form-control" name="comarca" value="{{ $treballador->comarca }}" />
            </div>

            <div class="form-group">
                <label for="tel_fixe">tel_fixe</label>
                <input type="text" class="form-control" name="tel_fixe" value="{{ $treballador->tel_fixe }}" />
            </div>

            <div class="form-group">
                <label for="tel_mobil">tel_mobil</label>
                <input type="text" class="form-control" name="tel_mobil" value="{{ $treballador->tel_mobil }}" />
            </div>

            <div class="form-group">
                <label for="email">email</label>
                <input type="text" class="form-control" name="email" value="{{ $treballador->email }}" />
            </div>
        
            <div class="form-group">
                <label for="data_ingres">data_ingres</label>
                <input type="text" class="form-control" name="data_ingres" value="{{ $treballador->data_ingres }}" />
            </div>
            <div class="form-group">
                <label for="CIF_ong">CIF_ong</label>
                <input type="text" class="form-control" name="CIF_ong" value="{{ $treballador->CIF_ong }}" />
            </div>

            <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
        </form>
    </div>
</div>
<br><a href="{{ url('treballadors') }}">Accés directe a la Llista de treballadors</a
@endsection