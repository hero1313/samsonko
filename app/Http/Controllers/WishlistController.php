<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;


class WishlistController extends Controller
{
    public function addToCache(Request $request)
    {
        $productId = $request->input('product_id');
    
        // Retrieve the existing array of product IDs from the cache, or create a new empty array if it doesn't exist
        $productIds = Cache::get('product_ids', []);
        
        // Check if the product ID already exists in the array
        if (in_array($productId, $productIds)) {
            return response()->json(['message' => 'პროდუქტი უკვე დამატებულია']);
        }
        
        // Add the new product ID to the array
        $productIds[] = $productId;
        
        // Store the updated array back into the cache
        Cache::put('product_ids', $productIds);
        
        // Return the updated array
        return response()->json(['product_ids' => $productIds, 'message' => 'წარმატებით დაემატა']);
    }

    public function deleteFromCache($id)
    {
        // Retrieve the existing array of product IDs from the cache
        $productIds = Cache::get('product_ids', []);

        // Find and remove the specified product ID from the array
        $index = array_search($id, $productIds);
        if ($index !== false) {
            unset($productIds[$index]);
            // Store the updated array back into the cache
            Cache::put('product_ids', $productIds);
            return response()->json(['success' => true]);
        }

        return response()->json(['error' => 'Product not found in cache'], 404);
    }

    public function index()
    {
        // Retrieve the array of product IDs from the cache
        $productIds = Cache::get('product_ids', []);

        // Query the database to retrieve products based on the product IDs
        $products = Product::whereIn('id', $productIds)->get();

        return view('website.components.wishlist', ['products' => $products]);
    }

}
