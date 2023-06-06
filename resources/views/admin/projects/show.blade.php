@extends('layouts.admin')

@section('content')


<div class="container">
    <div class="card text-white bg-dark my-5" >
        <div class="card-body">
            <h4 class="card-title">Title: {{$project->title}}</h4>
            <p>Description: {{$project->description}}</p>
            <span>{{$project->duration}}</span>
        </div>
        <div class="card-footer">
            <ul class="d-flex justify-content-around list-unstyled">
                <li>Start: {{$project->start_date}}</li>
                @if ($project->end_date == '')
                    <li>End: <i class="fa-solid fa-spinner fa-spin"></i> </li>
                    @else
                    <li>End: {{$project->end_date}}</li>
                @endif
            </ul>
        </div>
    </div>
</div>


@endsection