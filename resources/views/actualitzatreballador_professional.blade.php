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
        <form method="post" action="{{ route('treballador_professionals.update', $treballador_professionals->NIF) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="NIF">NIF</label>
                <input type="text" class="form-control" name="NIF" value="{{ $treballador_professionals->NIF }}" />
            </div>
            <div class="form-group">
                <label for="carrec">carrec</label>
                <input type="text" class="form-control" name="carrec" value="{{ $treballador_professionals->carrec }}" />
            </div>

            <div class="form-group">
                <label for="quantitat_SS">quantitat_SS</label>
                <input type="text" class="form-control" name="quantitat_SS" value="{{ $treballador_professionals->quantitat_SS }}" />
            </div>

            <div class="form-group">
                <label for="percentatge_irpf">percentatge_irpf</label>
                <input type="text" class="form-control" name="percentatge_irpf" value="{{ $treballador_professionals->percentatge_irpf }}" />
            </div>

            <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
        </form>
    </div>
</div>
<br><a href="{{ url('treballador_professionals') }}">Accés directe a la Llista de treballadors professionals</a
@endsection