@extends('layouts.admin')

<title>Add Project</title>

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Create Project</h5>
                <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Name</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="repository_url" class="form-label">Repository</label>
                        <input type="url" class="form-control" id="repository_url" name="repository_url" required>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">image</label>
                        <input type="file" class="form-control" id="image" name="image" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add new project</button>
                    <a href="{{ route('admin.projects.index') }}" class="btn btn-danger">Back to Project</a>
                </form>
            </div>
        </div>
    </div>
@endsection

