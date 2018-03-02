@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row py-3">
            <div class="col-12">
                <form class="" action="{{ route('categories.store') }}" method="post">

                    @csrf

                    <div class="form-group">
                        <label for="inputTitle">New category title</label>
                        <input name="title" type="text" class="form-control @if($errors->has('title')) is-invalid @endif" id="inputTitle" placeholder="Enter new category title">

                        @if($errors->has('title'))
                            <div class="invalid-feedback">
                                {{ $errors->first('title') }}
                            </div>
                        @endif

                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>
    </div>

@endsection
