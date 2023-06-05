@extends('layouts.admin')

@section('content')
<h1>Portfolio</h1>

@foreach ($projects as $project)
    <h2>{{ $project->name }}</h2>
    <p>{{ $project->description }}</p>
    <a href="{{ $project->repository_url }}">Repository</a>
@endforeach


@endsection
