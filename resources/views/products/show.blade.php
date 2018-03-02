@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">

                    @component('components.card',['product' => $product, 'admin' => TRUE])
                    @endcomponent

            </div>
        </div>
    </div>
@endsection
