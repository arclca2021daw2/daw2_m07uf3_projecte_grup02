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
        <form method="post" action="{{ route('socis_ongs.update', $socis_ongs->CIF_ONG) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="CIF_ONG">CIF_ONG</label>
                <input type="text" class="form-control" name="CIF_ONG" value="{{ $socis_ongs->CIF_ONG }}" />
            </div>
            <div class="form-group">
                <label for="NIF_soci">NIF_soci</label>
                <input type="text" class="form-control" name="NIF_soci" value="{{ $socis_ongs->NIF_soci }}" />
            </div>
        

            <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
        </form>
    </div>
</div>
<br><a href="{{ url('socis_ongs') }}">Accés directe a la Llista de socis ongs</a
@endsection