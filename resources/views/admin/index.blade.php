@extends("admin.layouts.app")

@section("page-title", "Projects")

@section("main-content")
<div class="container">
    <div class="row justify-content-center">
        <a href="{{ route("admin.create") }}" class="btn btn-danger m-3 d-flex justify-content-center align-content-center col-3">
            Crea un nuovo Progetto
        </a>
    </div>
    <div class="row mb-2">
    @forelse ($projects as $index => $project )
        <div style="width: 18rem;">
            <div class="card-body">
                <h1 class="card-text">Titolo:  {{$project->id}} . {{ $project->name }}</h1>
                <h2 class="card-text">Tipo: {{ $project->type->name }}</h2>
                <p class="card-text">Data: {{ $project->date }}</p>
                <p class="card-text">Descrizione: {{ $project->description }}</p>
                <a class="card-text" href="{{ $project->link }}"> Link </a>

            </div>
            <div>
                 <a class="btn btn-secondary mb-2" href="{{route("admin.show" , $project) }} ">
                    Vai al Progetto
                </a>
                <a class="btn btn-secondary mb-2" href="">
                                Edita Il progetto
                </a>
                <form action=" }}"
                method="post">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="Elimina" class="btn btn-danger mb-2">
                </form>
            </div>


        </div>
    @empty
        <div>
            <h1>
                No Projects Are aviable
            </h1>
        </div>
    @endforelse
    </div>
</div>
@endsection
