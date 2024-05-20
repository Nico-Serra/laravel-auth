@extends('layouts.admin')

@section('content')
    <section class="bg-light py-3">
        <div class="container d-flex align-items-center justify-content-between py-3">
            <h1>Projects</h1>

            <a href="{{ route('admin.projects.create') }}" class="btn btn-secondary  ">Add Project</a>
        </div>

        <div class="container">
            <div class="table-responsive">
                <table class="table table-secondary">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Cover Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Link</th>
                            <th scope="col">Project Date</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($projects as $project)
                            <tr class="">
                                <td scope="row">{{ $project->id }}</td>
                                <td><img src="{{ $project->cover_image }}" alt="{{ $project->name }}" width="100"></td>
                                <td>{{ $project->name }}</td>
                                <td>{{ $project->slug }}</td>
                                <td><a href="{{ $project->link }}" class="btn btn-dark btn-sm ">Go to link</a></td>
                                <td>{{ $project->project_date }}</td>
                                <td>
                                    <a href="{{ route('admin.projects.show', $project) }}"
                                        class="btn btn-dark btn-sm">👁‍🗨View</a>
                                    /Edit/Delit
                                </td>
                            </tr>
                        @empty

                            <tr class="">
                                <td scope="row" colspan="7">Nothing Found</td>

                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
            {{ $projects->links('pagination::bootstrap-5') }}
        </div>


    </section>
@endsection
