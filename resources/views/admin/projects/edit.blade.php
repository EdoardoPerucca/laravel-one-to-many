@extends('layouts.admin')

@section('content')

<h1>Modifica il Progetto</h1>

<div class="container">
    <form action="{{route('admin.projects.update', $project)}}" method="POST">
    @csrf
    @method('PUT')

        <div class="mb-3">
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title') ?? $project->title}}">
            @error('title')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            
        @enderror
        </div>

        <div class="mb-3">
            <label for="content">Contenuto del progetto</label>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control @error('content') is-invalid @enderror">{{old('content') ?? $project->content}}</textarea>
        </div>

        <button class="btn btn-primary" type="submit">Modifica</button>
    </form>
</div>
    
@endsection