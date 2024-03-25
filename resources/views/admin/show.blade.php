@extends('layouts.app')

@section('title', 'Dettaglio')



@section('content')

    <div class="show-card">
        <div>
            <figure>
                <img src="{{ $project->image }}" alt="{{ $project->title }}">
            </figure>
        </div>
        <div>
            <h3>{{ $project->title }}</h3>
            <p>{{ $project->description }}</p>
        </div>
        <div class="navigation">
            <a href=" {{ route('admin.projects.index')}} ">
                <i class="fas fa-arrow-left"></i>
            </a>
            <a href="{{ route('admin.projects.edit', $project->id) }}">
                <i class="fas fa-pencil"></i>
            </a>
            <a href="{{ route('admin.projects.destroy', $project->id) }}">
                <i class="fas fa-trash-can"></i>
            </a>
        </div>

    </div>

@endsection