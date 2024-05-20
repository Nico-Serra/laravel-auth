@extends('layouts.admin')

@section('content')
    <div class="container py-5">
        @include('layouts.partials.validations-errors')

        <form action="{{ route('admin.projects.update', $project) }}" method="post">
            @csrf

            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                    aria-describedby="NamehelpId" placeholder="Laravel-auth project"
                    value="{{ old('name', $project->name) }}" />
                <small id="NamhelpId" class="form-text text-muted">Insert your project name</small>
            </div>

            <div class="mb-3">
                <label for="cover_image" class="form-label">cover_image</label>
                <input type="text" class="form-control @error('cover_image') is-invalid @enderror" name="cover_image"
                    id="cover_image" aria-describedby="cover_imagehelpId" placeholder="//http:"
                    value="{{ old('cover_image', $project->cover_image) }}" />
                <small id="cover_imagehelpId" class="form-text text-muted">Insert your project cover image</small>
            </div>

            <div class="mb-3">
                <label for="link" class="form-label">link</label>
                <input type="text" class="form-control @error('link') is-invalid @enderror" name="link" id="link"
                    aria-describedby="linkhelpId" placeholder="//http:" value="{{ old('link', $project->link) }}" />
                <small id="linkhelpId" class="form-text text-muted">Insert your project link</small>
            </div>

            <div class="mb-3">
                <label for="project_date" class="form-label">project_date</label>
                <input type="project_date" class="form-control @error('project_date') is-invalid @enderror"
                    project_date="project_date" id="project_date" aria-describedby="project_datehelpId"
                    value="{{ old('project_date', $project->project_date) }}" />
                <small id="project_datehelpId" class="form-text text-muted">Insert your project date</small>
            </div>

            <button type="submit" class="btn btn-warning">
                Edit
            </button>

        </form>



    </div>
@endsection