@extends('layouts.admin')


@section('content')
<div class="d-flex justify-content-between my-3">
    <h1>Show projects table</h1>
    <a name="" id="" class="btn btn-primary" href="{{route('admin.projects.create')}}" role="button">+</a>
</div>

<div class="table-responsive">
    <table class="table table-striped
    table-hover
    table-borderless
    table-primary
    align-middle">
        <thead class="table-light">

            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Description</th>
                <th>Duration</th>
                <th>Start-date</th>
                <th>End-date</th>
                <th>Actions</th>

            </tr>
        </thead>
        <tbody class="table-group-divider">


            @forelse ($projects as $project)
            <tr class="table-primary">
                <td scope="row">{{$project->id}}</td>
                <td>{{$project->title}}</td>
                <td>{{$project->slug}}</td>
                <td>{{$project->description}}</td>
                <td>{{$project->duration}}</td>
                <td>{{$project->start_date}}</td>
                <td>{{$project->end_date}}</td>

                <td>

                    <a name="" id="" class="btn btn-primary" href="#" role="button">View</a>
                    <a name="" id="" class="btn btn-primary" href="#" role="button">Edit</a>
                    <a name="" id="" class="btn btn-primary" href="#" role="button">Delete</a>

                </td>

            </tr>
            @empty
            <tr class="table-primary">
                <td scope="row">No projects yet.</td>

            </tr>
            @endforelse
        </tbody>
    </table>
</div>


@endsection