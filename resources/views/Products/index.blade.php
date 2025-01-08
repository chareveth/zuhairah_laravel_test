<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <!-- Local Bootstrap CSS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        .input-group{
            margin-left: 190px;
        }

        #search {
            margin-right: 5px;
            border-radius: 5px;
        }

        .custom-light-gray-btn {
            background-color: #d3d3d3; /* Light gray */
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <!-- Header and Create Button -->
        <div class="row mb-4">
            <div class="col-lg-6 text-left">
                <a href="{{ route('products.index') }}" style="text-decoration: none; color: inherit;">
                    <h2>Laravel</h2>
                </a>
            </div>
            <div class="col-lg-6 text-right">
                <a href="{{ route('products.create') }}" class="btn btn-success">Create New Product</a>
            </div>
        </div>

        <!-- Search Bar -->
        <div class="row mb-4">
        <div class="col-lg-4 offset-lg-6 text-right">
        <form action="{{ route('products.index') }}" method="GET">
                    <div class="input-group">
                        <input type="text" name="search" id="search" class="form-control custom-search-width custom-search-input" placeholder="Search products..." value="{{ request('search') }}">
                        <button class="btn custom-light-gray-btn" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Success Message -->
        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <!-- Table for Products -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Price (RM)</th>
                    <th>Details</th>
                    <th>Publish</th>
                    <th width="250px">Action</th>
                </tr>
            </thead>
            <tbody id="productTableBody">
                @foreach ($products as $index => $product)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ number_format($product->price, 2) }}</td>
                        <td>{{ $product->details }}</td>
                        <td>{{ ucfirst(strtolower($product->publish)) }}</td>
                        <td>
                            <a href="{{ route('products.show', $product) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('products.edit', $product) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Local Bootstrap JS -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
