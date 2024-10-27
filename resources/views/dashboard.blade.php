@extends('layouts.app')

@section('content')
    <h1>Dashboard</h1>
    <nav class="navbar navbar-expand-lg navbar-light mb-4" style="padding: 20px; background-color: #007bff;">
        <div class="container">
            <a class="navbar-brand" href="#">My Product Page</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <form class="d-flex ms-auto">
                    <input class="form-control me-2" type="search" placeholder="Search products..." aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
                <ul class="navbar-nav ms-3">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Save More on App</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Become a Seller</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Help & Support</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.index') }}">Manage Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories.index') }}">Manage Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Product Cards Section -->
    <div class="mt-6">
        <h3 class="text-lg font-semibold">Products</h3>
        <div class="row">
            @php
                // Sample product data
                $products = [
                    [
                        'name' => 'Camera ',
                        'price' => '$10.00',
                        'image' =>
                            'https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg?cs=srgb&dl=pexels-madebymath-90946.jpg&fm=jpg',
                    ],
                    [
                        'name' => 'Headphone',
                        'price' => '$20.00',
                        'image' =>
                            'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8cHJvZHVjdHxlbnwwfHwwfHx8MA%3D%3D',
                    ],
                    [
                        'name' => 'Watch',
                        'price' => '$30.00',
                        'image' =>
                            'https://images.unsplash.com/photo-1523275335684-37898b6baf30?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHx8MA%3D%3D',
                    ],
                    [
                        'name' => 'Hand Bag',
                        'price' => '$40.00',
                        'image' =>
                            'https://plus.unsplash.com/premium_photo-1664392147011-2a720f214e01?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8cHJvZHVjdHxlbnwwfHwwfHx8MA%3D%3D',
                    ],
                ];
            @endphp

            @foreach ($products as $product)
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $product['image'] }}" class="card-img-top" alt="{{ $product['name'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product['name'] }}</h5>
                            <p class="card-text">{{ $product['price'] }}</p>
                            <a href="#" class="btn btn-primary"
                                onclick="showDetails('{{ $product['name'] }}', '{{ $product['price'] }}')">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        function showDetails(productName, productPrice) {
            alert('Product: ' + productName + '\nPrice: ' + productPrice);
        }
    </script>

    <style>
        /* Custom Navbar Styles */
        .navbar {
            background-color: #007bff;
            /* Navbar background color */
            border-radius: 0.5rem;
            /* Rounded corners */
        }

        .navbar-brand {
            color: white !important;
            /* Navbar brand text color */
            font-weight: bold;
            font-size: 1.5rem;
            /* Brand font size */
        }

        .nav-link {
            color: white !important;
            /* Navbar link color */
            padding: 15px 20px;
            /* Spacing around links */
        }

        .nav-link:hover {
            background-color: #0056b3;
            /* Hover color for links */
            border-radius: 0.25rem;
            /* Rounded corners on hover */
        }

        .form-control {
            border-radius: 0.25rem;
            /* Rounded corners for search input */
        }

        .btn-outline-light {
            border-color: white;
            /* Change button border color */
            color: white;
            /* Change button text color */
        }

        .btn-outline-light:hover {
            background-color: white;
            /* Button background on hover */
            color: #007bff;
            /* Button text color on hover */
        }
    </style>
@endsection
