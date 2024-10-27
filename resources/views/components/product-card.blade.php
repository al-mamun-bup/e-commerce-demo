<div class="card" style="width: 18rem;">
    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product Image">
    <div class="card-body">
        <h5 class="card-title">{{ $product->name }}</h5>
        <p class="card-text">${{ $product->price }}</p>
        <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">View Details</a>
    </div>
</div>
