@extends('layouts.admin')

@section('content')

<div class="bg-dark text-light">
    <form action="{{route('admin.projects.store')}}" method="post" class="p-4 my-4">
        @csrf
    
        <div class="mb-4">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" aria-describedby="titleHelper">
        </div>
    
        <div class="mb-4">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="3"></textarea>
        </div>
    
        <div class="mb-4">
            <label for="duration" class="form-label d-flex">Duration</label>
            <input type="number" name="duration" id="duration">
        </div>
    
        <div class="mb-4">
            <div class="row">
                <div class="col-6">
                    <label for="start_date" class="form-label">Start-date</label>
                    <input type="date" class="form-control" name="start_date" id="start_date">
                </div>
                <div class="col-6">
                    <label for="end_date" class="form-label">End-date</label>
                    <input type="date"class="form-control" name="end_date" id="end_date">
                </div>
            </div>

        </div>

    
        <button type="submit" class="btn btn-light">Save</button>
    
    </form>
</div>


@endsection