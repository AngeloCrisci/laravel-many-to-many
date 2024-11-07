@extends("admin.layouts.app")

@section("page-title", "Aggiungi Progetto")

@section("main-content")

<section class="container py-4">
    <div class="row justify-content-around">
        <form class="col-12 col-md-6 card m-3" method="POST" action="{{ route("admin.store") }}">
            @csrf
            <h1 class="mb-3">
                Aggiungi un nuovo progetto:
            </h1>
            <div class="mb-3">
                <label for="projet-name" class="form-label">Titolo:</label>
                <input type="text" class="form-control" id="project-name" name="name" value="{{ old('name')}}">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="project-description" class="form-label">Descrizione:</label>
                <input type="text" class="form-control" id="project-description" name="description" value="{{ old('description') }}" >
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="project-date" class="form-label">Data:</label>
                <input type="number" class="form-control" id="project-date" name="date" value="{{ old('date') }}">
                @error('date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="project-link" class="form-label">Link:</label>
                <input type="text" class="form-control" id="project-link" name="link" value="{{ old('link') }}">
                @error('link')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-primary me-3">
                    Aggiungi
                </button>
                <button type="reset" class="btn btn-warning me-3">
                    Reset
                </button>
            </div>
        </form>
    </div>
</section>

@endsection
