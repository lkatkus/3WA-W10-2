@extends('layouts.app')

@section('content')

@if ($user = Auth::user())
    <div class="container">
        <div class="row py-3">
            <div class="col-12">
                <a class="btn btn-primary" href="{{ route('manufacturers.create') }}">Add New Manufacturers</a>
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

                @foreach($manufacturers as $manufacturer)
                    <tr>
                        <td>{{ $manufacturer->id }}</td>
                        <td>
                            <a href="{{ route('manufacturers.show', $manufacturer) }}">{{ $manufacturer->title }}</a>
                        </td>

                        <td> {{ $manufacturer->products() }}</td>

                        @if($manufacturer->products() == 0 && $user = Auth::user())
                        <td>
                            <form class="d-inline" action="{{ route('manufacturers.destroy', $manufacturer) }}" method="post">
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
