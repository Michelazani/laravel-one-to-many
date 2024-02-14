@extends('layouts.admin')

@section('title', 'Creating a new post')

@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-7">
           
           @include('layouts.partials.errors')

            <form action="{{ route('admin.portfolios.store') }}" method="POST">
                @csrf

                <h2 class="m-4">Edit the project:</h2>
                <div class="mb-3 input-group">
                    <label for="project" class="input-group-text">Name of the project you'd like to edit:</label>
                    <input class="form-control" type="text" name="project" id="project" value="{{ old('Project', $portfolio->Project) }}">
                </div>

                <div class="mb-3 input-group">
                    <label for="author" class="input-group-text">Author of the project:</label>
                    <input class="form-control" type="text" name="author" id="author" value="{{ old('Author', $portfolio->Author) }}">
                </div>
                <div class="mb-3 input-group">
                    <label for="description" class="input-group-text">Description:</label>
                    <textarea class="form-control"  name="description" id="description" cols="20" rows="5">{{ old('Description', $portfolio->Description)  }}</textarea>
                </div>
                <div class="mb-3 input-group">
                    <a href="{{ route('admin.portfolios.edit', $portfolio) }}" class="text-decoration-none">
                        <button class="btn btn-sm btn-success">
                            Edit
                        </button>
                    </a>
                    <button type="reset" class="btn btn-warning m-2">
                        Reset all fields
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection