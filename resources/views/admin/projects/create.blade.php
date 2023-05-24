@extends('layouts.admin')

@section('content')

<h1>Crea un progetto</h1>

<div class="container">
    <form action="{{route('admin.projects.store')}}" method="POST">
    @csrf

        <div class="mb-3">
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}">
            @error('title')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                
            @enderror
        </div>

        <div class="mb-3">
            <label for="content">Contenuto del progetto</label>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control @error('content') is-invalid @enderror">{{old('content')}}</textarea>
            @error('content')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                
            @enderror
        </div>

        <button class="btn btn-primary" type="submit">Aggiungi</button>
    </form>
</div>
    
@endsection