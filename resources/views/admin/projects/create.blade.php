@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="text-center mt-3">Crea un nuovo progetto</h2>
        <div class="row justify-content-center">
            <div class="col-8">
                @include('partials.errors')
                <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="title">Titolo</label>
                        <input type="text" id="title" name="title"
                            class="form-control @error('title')
                        is-invalid
                        @enderror"
                            value="{{ old('title') }}">
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="cover_image">Immagine</label>
                        <input type="file" id="cover_image" name="cover_image"
                            class="form-control @error('cover_image')
                        is-invalid 
                        @enderror">
                        @error('cover_image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="w-25 mt-3 mb-3">
                            <img id="image_preview" src="" alt="">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="description">Descrizione</label>
                        <textarea name="description" id="description" rows="10"
                            class="form-control @error('description')
                        is-invalid
                        @enderror">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="btn btn-success" type="submit">Salva</button>
                    <a class="btn btn-primary" href="{{ route('admin.projects.index') }}">Indietro</a>
                </form>
            </div>
        </div>
    </div>
@endsection
