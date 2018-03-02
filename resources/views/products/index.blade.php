@extends('layouts.app')

@section('content')

    <div class="container">

        <!-- FILTERS -->
        <div class="row">
            <div class="col-12">

                <!-- CATEGORY FILTER -->
                <div class="col-3 d-inline-block">
                    <form action="{{ route('home')}}" method="get">
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select class="form-control" name="category" id="category" onchange="submit()">
                                @foreach($categories as $category)
                                    <option value="{{ $category -> id }}">{{ $category -> title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="submit" hidden>
                    </form>
                </div>
                <!-- END CATEGORY FILTER -->

                <!-- MANUFACTURER FILTER -->
                <div class="col-3 d-inline-block">
                    <form action="{{ route('home')}}" method="get">
                        <div class="form-group">
                            <label for="category">Manufacturer</label>
                            <select class="form-control" name="manufacturer" id="manufacturer" onchange="submit()">
                                @foreach($manufacturers as $manufacturer)
                                    <option value="{{ $manufacturer -> id }}">{{ $manufacturer -> title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="submit" hidden>
                    </form>
                </div>
                <!-- END MANUFACTURER FILTER -->

            </div>
        </div>
        <!-- END FILTERS -->

        <div class="row">

            @foreach($products as $product)
            <div class="col-sm-6 col-md-4">

                @component('components.card',['product' => $product, 'admin' => FALSE])
                @endcomponent

                </div>
            @endforeach

        </div>
    </div>
@endsection
