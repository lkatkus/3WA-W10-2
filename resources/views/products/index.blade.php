@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">

            @foreach($products as $product)

                <div class="col-4">
                    <div class="card p-2">
                        <div class="card-block">

                            <img class="card-img-top" src="https://picsum.photos/200/?random" alt="Card image cap">

                            <h3>
                                <a href="{{route('products.show',$product->id)}}">
                                    {{ $product -> title }}
                                </a>
                            </h3>

                            <p class="card-text">{{ str_limit($product -> description, 50) }}</p>
                        </div>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Price: <span class="badge badge-success">{{ $product -> price }} &dollar;</span></li>
                            <li class="list-group-item">Quantity: <span class="badge badge-primary">{{ $product -> quantity }} </span></li>
                            <li class="list-group-item">Category: <span class="badge badge-default">{{ $product->categories['title'] }}</span></li>
                            <li class="list-group-item">Manufacturer: - <span class="badge badge-default">{{ $product->manufacturers['title'] }}</span></li>
                        </ul>

                        <div class="card-block">
                            <a href="{{ route('products.edit', $product->id) }}">
                                <button class="btn btn-primary" type="button" name="button">Edit</button>
                            </a>
                            <a href="{{ route('products.edit', $product->id) }}">
                                <button class="btn btn-danger" type="button" name="button">Delete</button>
                            </a>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>
    </div>
@endsection
