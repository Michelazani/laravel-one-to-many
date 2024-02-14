@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('main-content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>
                Welcome to your portfolio, {{ Auth::user()->name }}
            </h2>
        </div>
    </div>
</div>

{{-- inizio parte della tabella per scegliere progetto da visualizzare --}}
<div class="col-10 mx-auto">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Project</th>
                <th scope="col">Author</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $portfolios as $portfolio )
                <tr>
                    <th scope="row">
                        {{ $portfolio->id }}
                    </th>
                <td>
                <a href="{{ route('admin.portfolios.show', $portfolio) }}">
                    {{ $portfolio->Project }}
                </a>
                </td>
                <td>
                    {{ $portfolio->Author }}
                </td>
                <td>
                    {{ $portfolio->Description }}
                </td>
                <td>
                    <a href="{{ route('admin.portfolios.show', $portfolio) }}" class="text-decoration-none">
                        <button class="btn btn-sm btn-primary">
                            View
                        </button>
                    </a>
                    <a href="{{ route('admin.portfolios.edit', $portfolio) }}" class="text-decoration-none">
                        <button class="btn btn-sm btn-success">
                            Edit
                        </button>
                    </a>
                    <form action="{{ route('admin.portfolios.destroy', $portfolio) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-warning btn-sm d-inline-block" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $portfolio->id }}">
                            Delete
                       </button>
                    </form>
                    @endforeach
@endsection