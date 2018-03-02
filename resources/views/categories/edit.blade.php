@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row py-3">
            <div class="col-12">

                <form action="{{ route('categories.update',$category->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="inputTitle">New category title</label>
                        <input name="title" type="text" class="form-control @if($errors->has('title')) is-invalid @endif" id="inputTitle" placeholder="Enter new category title" value={{ $category->title}}>
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
