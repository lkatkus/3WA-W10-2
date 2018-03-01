@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row py-3">
        <div class="col-12">
            <form class="" action="{{ route('products.update',$product->id) }}" method="POST">

                {{ csrf_field() }}

                @method('PUT')

                <div class="form-group row">
                    <label for="input-title" class="col-2 col-form-label">Title</label>
                    <div class="col-10">
                        <input class="form-control" name="title" type="text" value="{{$product->title}}" id="input-title">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="input-price" class="col-2 col-form-label">Price</label>
                    <div class="col-10">
                        <input class="form-control" name="price" type="text" value="{{$product->price}}" id="input-price">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="input-quantity" class="col-2 col-form-label">Quantity</label>
                    <div class="col-10">
                        <input class="form-control" name="quantity" type="text" value="{{$product->quantity}}" id="input-quantity">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="input-category" class="col-2 col-form-label">Category</label>
                    <div class="col-10">
                        <select class="form-control" id="input-category" name="category">

                            @foreach($categories as $category)
                                @if ($category -> id == $product -> category)
                                    <option value="{{ $category -> id }}" selected>{{ $category -> title }}</option>
                                @else
                                    <option value="{{ $category -> id }}">{{ $category -> title }}</option>
                                @endif
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="input-manufacturer" class="col-2 col-form-label">Manufacturer</label>
                    <div class="col-10">
                        <select class="form-control" id="input-manufacturer" name="manufacturer">

                            @foreach($manufacturers as $manufacturer)
                                @if ($manufacturer -> id == $product -> manufacturer)
                                    <option value="{{ $manufacturer -> id }}" selected>{{ $manufacturer -> title }}</option>
                                @else
                                    <option value="{{ $manufacturer -> id }}">{{ $manufacturer -> title }}</option>
                                @endif
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="input-description" class="col-2 col-form-label">Description</label>
                    <div class="col-10">
                        <textarea class="form-control" id="input-description" rows="3" name="description">{{$product->description}}</textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        </div>
    </div>
</div>

@endsection
