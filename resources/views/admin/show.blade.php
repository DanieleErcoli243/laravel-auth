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
    </div>

@endsection