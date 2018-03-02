@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row py-3">
        <div class="col-6">
            <h5>Category:</h5>
            <h2>{{ $category->title }}</h2>
        </div>
        <div class="col-6 text-right">
            <a href="{{ route('categories.edit', $category) }}">
                <button class="btn btn-primary" type="button" name="button">Edit</button>
            </a>
        </div>

    </div>

    <div class="row py-3">
        <div class="col-12">
            <table class="table">
                <thead class="bg-warning">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Description</th>
                    </tr>
                </thead>

                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id}}</td>
                        <td>
                            <a href="{{ route('products.show',$product->id) }}">
                                {{ $product->title}}
                            </a>
                        </td>
                        <td>{{ $product->price}}</td>
                        <td>{{ $product->quantity}}</td>
                        <td>{{ $product->description}}</td>
                    </tr>
                @endforeach

            </table>

        </div>
    </div>
</div>


@endsection
