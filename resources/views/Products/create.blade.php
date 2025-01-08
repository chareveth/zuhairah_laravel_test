<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
    <!-- Local Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <!-- Header -->
        <div class="row mb-4">
            <div class="col-lg-6">
                <h2>Add New Product</h2>
            </div>
            <div class="col-lg-6 text-right">
                <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>

        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price (RM):</label>
                <input type="text" name="price" id="price" class="form-control" placeholder="99.90" required>
            </div>

            <div class="mb-3">
                <label for="details" class="form-label">Details:</label>
                <textarea name="details" id="details" class="form-control" placeholder="Detail"></textarea>
            </div>

            <div class="mb-3">
                <label for="publish" class="form-label">Publish:</label>
                <div>
                    <div class="form-check">
                        <input type="radio" name="publish" id="publish_yes" value="yes" class="form-check-input" required>
                        <label class="form-check-label" for="publish_yes">Yes</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="publish" id="publish_no" value="no" class="form-check-input" required>
                        <label class="form-check-label" for="publish_no">No</label>
                    </div>
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
