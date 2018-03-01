@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">

            @foreach($products as $product)
            <div class="col-sm-6 col-md-4">

                @component('components.card',['product' => $product])
                @endcomponent

                </div>
            @endforeach

        </div>
    </div>
@endsection
