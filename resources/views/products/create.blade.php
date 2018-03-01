@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row py-3">
        <div class="col-12">


            <form class="needs-validation" action="{{ route('products.store')}}" method="POST">

                @csrf

                <div class="form-group row">
                    <label for="input-title" class="col-2 col-form-label">Title</label>
                    <div class="col-10">
                        <input class="form-control @if($errors->has('title')) is-invalid @endif" name="title" type="text" value="{{ old('title')}}" id="input-title">
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
                        <input class="form-control @if($errors->has('price')) is-invalid @endif" name="price" type="text" value="{{ old('price')}}" id="input-price">
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
                        <input class="form-control @if($errors->has('quantity')) is-invalid @endif" name="quantity" type="text" value="{{ old('quantity')}}" id="input-quantity">
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
                            <option value="" disabled selected>Select your option</option>
                            @foreach($categories as $category)
                                <option value="{{ $category -> id }}">{{ $category -> title }}</option>
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
                            <option value="" disabled selected>Select your option</option>
                            @foreach($manufacturers as $manufacturer)
                                <option value="{{ $manufacturer -> id }}">{{ $manufacturer -> title }}</option>
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
                        <textarea class="form-control @if($errors->has('description')) is-invalid @endif" id="input-description" rows="3" name="description">{{ old('description')}}</textarea>
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
