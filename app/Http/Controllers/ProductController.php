<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // Get the search query from the request
        $query = Product::query();

        // If search term is provided, filter the products
        if ($request->has('search') && $request->search != '') {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // Fetch the filtered products
        $products = $query->get();

        // Return the view with the products
        return view('products.index', compact('products'));
    }


    // Show the form for creating a new product
    public function create()
    {
        // Return the create view for the product
        return view('products.create');
    }

    // Store a newly created product in storage
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'details' => 'nullable|string',
            'publish' => 'required|string|in:yes,no', // Assuming "yes" or "no"
        ]);

        // Create the product in the database
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'details' => $request->details,
            'publish' => $request->publish,
        ]);

        // Redirect to the product index with success message
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    // Display the specified product
    public function show(Product $product)
    {
        // Return the show view with the product details
        return view('products.show', compact('product'));
    }

    // Show the form for editing the specified product
    public function edit(Product $product)
    {
        // Return the edit view with the product details
        return view('products.edit', compact('product'));
    }

    // Update the specified product in storage
    public function update(Request $request, Product $product)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'details' => 'nullable|string',
            'publish' => 'required|string|in:yes,no',
        ]);

        // Update the product in the database
        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'details' => $request->details,
            'publish' => $request->publish,
        ]);

        // Redirect to the product index with success message
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    // Remove the specified product from storage
    public function destroy(Product $product)
    {
        // Delete the product from the database
        $product->delete();

        // Redirect to the product index with success message
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }

}
