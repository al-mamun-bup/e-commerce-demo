@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-4 mb-4 text-center">Categories</h1>

        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-3 mb-4">
                    <div class="card h-100 text-center">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Category Image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $category->name }}</h5>
                            <a href="#" class="btn btn-primary">View Products</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
