@extends('layouts.admin')

<title>Editare comic</title>

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Modifica Project con id: {{$project->id}} </h5>
                <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $project->name }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="4" value="{{ $project->description }}" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">image</label>
                        <input type="url" class="form-control" id="image" name="image" value="{{ $project->image }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="repository_url" class="form-label">image</label>
                        <input type="url" class="form-control" id="repository_url" name="repository_url" value="{{ $project->repository_url }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Invia</button>
                    <a href="{{ route('admin.projects.index') }}" class="btn btn-danger">Back to List</a>
                </form>
            </div>
        </div>
    </div>
@endsection
