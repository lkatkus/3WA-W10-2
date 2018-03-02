@extends('layouts.app')

@section('content')

@if ($user = Auth::user())
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a class="btn btn-primary" href="{{ route('categories.create') }}">Add New Category</a>
            </div>
        </div>
    </div>
@endif


<div class="container">

    <div class="row py-3">

        <div class="col-12">
            <table class="table">

                <thead class="bg-warning">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th colspan="2">Products</th>
                    </tr>
                </thead>

                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>
                            <a href="{{ route('categories.show', $category) }}">{{ $category->title }}</a>
                        </td>

                        <td> {{ $category->products() }}</td>

                        @if($category->products() == 0 && $user = Auth::user())
                        <td>
                            <form class="d-inline" action="{{ route('categories.destroy', $category) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger" type="submit" name="button">Delete</button>
                            </form>
                        </td>
                        @else
                            <td></td>
                        @endif

                    </tr>
                @endforeach
            </table>
        </div>


    </div>
</div>

@endsection
