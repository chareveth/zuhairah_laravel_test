<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <!-- Local Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <!-- Header -->
        <div class="row mb-4">
            <div class="col-lg-6 text-left">
                <h2>Edit Product</h2>
            </div>
            <div class="col-lg-6 text-right">
                <a href="{{ route('products.index') }}" class="btn btn-primary">Back to Products</a>
            </div>
        </div>

        <!-- Edit Product Form -->
        <form action="{{ route('products.update', $product) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $product->name) }}" required>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price (RM):</label>
                <input type="text" name="price" id="price" class="form-control" value="{{ old('price', $product->price) }}" required>
            </div>

            <div class="mb-3">
                <label for="details" class="form-label">Details:</label>
                <textarea name="details" id="details" class="form-control" rows="4">{{ old('details', $product->details) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="publish" class="form-label">Publish:</label>
                <div class="form-check">
                    <input type="radio" name="publish" id="publish_yes" value="yes" {{ $product->publish == 'yes' ? 'checked' : '' }} class="form-check-input">
                    <label for="publish_yes" class="form-check-label">Yes</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="publish" id="publish_no" value="no" {{ $product->publish == 'no' ? 'checked' : '' }} class="form-check-input">
                    <label for="publish_no" class="form-check-label">No</label>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

    <!-- Local Bootstrap JS -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
