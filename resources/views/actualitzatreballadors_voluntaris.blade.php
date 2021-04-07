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
        <form method="post" action="{{ route('treballadors_voluntaris.update', $treballadors_voluntaris->NIF) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="NIF">NIF</label>
                <input type="text" class="form-control" name="NIF" value="{{ $treballadors_voluntaris->NIF }}" />
            </div>
            <div class="form-group">
                <label for="edat">edat</label>
                <input type="text" class="form-control" name="edat" value="{{ $treballadors_voluntaris->edat }}" />
            </div>

            <div class="form-group">
                <label for="professio">professio</label>
                <input type="text" class="form-control" name="professio" value="{{ $treballadors_voluntaris->professio }}" />
            </div>

            <div class="form-group">
                <label for="hores">hores</label>
                <input type="text" class="form-control" name="hores" value="{{ $treballadors_voluntaris->hores }}" />
            </div>

            <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
        </form>
    </div>
</div>
<br><a href="{{ url('treballadors_voluntaris') }}">Accés directe a la Llista de treballadors voluntaris</a
@endsection