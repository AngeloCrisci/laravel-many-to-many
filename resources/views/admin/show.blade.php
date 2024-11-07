@extends("admin.layouts.app")

@section("page-title", "{{$project->name}}")

@section("main-content")
<h1 class="text-center text-white mb-4">
    Nome Progetto {{$project["name"]}}
</h1>
<div class="container">
    <div class="row mb-2">
        <div>
            <div class="card-body">
            <h1 class="card-text">Titolo: {{ $project["name"] }}</h1>
            <p class="card-text">Descrizione: {{ $project["description"] }}</p>
            <p class="card-text">  <a href="{{ $project["link"] }}">LINK:</a> </p>
            </div>
        </div>
        <a class="btn btn-secondary mb-2" href="{{route("admin.index") }}">
            Torna alla lista
        </a>
    </div>
</div>
@endsection
