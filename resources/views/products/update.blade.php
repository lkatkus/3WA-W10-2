@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row py-3">
        <div class="col-12">
            <form class="" action="{{ route('products.update',$product->id) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="form-group row">
                    <label for="input-title" class="col-2 col-form-label">Title</label>
                    <div class="col-10">
                        <input class="form-control @if($errors->has('title')) is-invalid @endif" name="title" type="text" value="{{ old('title',$product->title) }}" id="input-title">
                            @if($errors->has('title'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('title') }}
                                </div>
                            @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="input-price" class="col-2 col-form-label">Price</label>
                    <div class="col-10">
                        <input class="form-control @if($errors->has('price')) is-invalid @endif" name="price" type="text" value="{{ old('price',$product->price) }}" id="input-price">
                            @if($errors->has('price'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('price') }}
                                </div>
                            @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="input-quantity" class="col-2 col-form-label">Quantity</label>
                    <div class="col-10">
                        <input class="form-control @if($errors->has('quantity')) is-invalid @endif" name="quantity" type="text" value="{{ old('quantity',$product->quantity) }}" id="input-quantity">
                            @if($errors->has('quantity'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('quantity') }}
                                </div>
                            @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="input-category" class="col-2 col-form-label">Category</label>
                    <div class="col-10">
                        <select class="form-control @if($errors->has('category')) is-invalid @endif" id="input-category" name="category">
                            @foreach($categories as $category)
                                @if ($category -> id == $product -> category)
                                    <option value="{{ $category -> id }}" selected>{{ $category -> title }}</option>
                                @else
                                    <option value="{{ $category -> id }}">{{ $category -> title }}</option>
                                @endif
                            @endforeach
                        </select>
                            @if($errors->has('category'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('category') }}
                                </div>
                            @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="input-manufacturer" class="col-2 col-form-label">Manufacturer</label>
                    <div class="col-10">
                        <select class="form-control @if($errors->has('manufacturer')) is-invalid @endif" id="input-manufacturer" name="manufacturer">
                            @foreach($manufacturers as $manufacturer)
                                @if ($manufacturer -> id == $product -> manufacturer)
                                    <option value="{{ $manufacturer -> id }}" selected>{{ $manufacturer -> title }}</option>
                                @else
                                    <option value="{{ $manufacturer -> id }}">{{ $manufacturer -> title }}</option>
                                @endif
                            @endforeach
                        </select>
                            @if($errors->has('manufacturer'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('manufacturer') }}
                                </div>
                            @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="input-description" class="col-2 col-form-label">Description</label>
                    <div class="col-10">
                        <textarea class="form-control @if($errors->has('description')) is-invalid @endif" id="input-description" rows="3" name="description">{{ old('description',$product->description) }}</textarea>
                            @if($errors->has('description'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('description') }}
                                </div>
                            @endif
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        </div>
    </div>
</div>

@endsection
