<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <!-- Local Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <!-- Header -->
        <div class="row mb-4">
            <div class="col-lg-4">
                <h1>Show Product</h1>
            </div>
            <div class="col-lg-4 text-right">
                <a href="{{ route('products.index') }}" class="btn btn-primary btn-lg">Back</a>
            </div>
        </div>

        <!-- Product Details -->
        <div class="mb-4">
            <p><strong>Name:</strong> {{ $product->name }}</p>
            <p><strong>Price:</strong> RM{{ $product->price }}</p>
            <p><strong>Details:</strong> {{ $product->details }}</p>
            <p><strong>Publish:</strong> {{ $product->publish == 'yes' ? 'Yes' : 'No' }}</p>
        </div>

    </div>

    <!-- Local Bootstrap JS -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
