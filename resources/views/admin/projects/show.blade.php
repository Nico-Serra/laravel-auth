@extends('layouts.admin')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-6">
                <img src="{{ $project->cover_image }}" alt="">
            </div>
            <div class="col-6 text-center">
                <h2 class="mb-3">{{ $project->name }}</h2>
                <a href="{{ $project->link }}" class="btn btn-dark btn-sm mb-3">Go to link</a>
                <div class="mb-3">
                    Project Date : <strong>{{ $project->project_date }}</strong>
                </div>
            </div>
        </div>
    </div>
@endsection
