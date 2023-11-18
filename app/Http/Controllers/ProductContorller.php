<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProductContorller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->get();

         return view('Pages.Admin.Products.index', compact('products'));
    }

    public function publicIndex()
    {
        $products = Product::latest()->get();

        return view('Pages.Public.products', compact('products'));
    }

    public function create()
    {
        return view('Pages.Admin.products.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255|unique:products',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'stock' => 'required|numeric',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'images'   => 'max:4'
        ]);
        // Save the image to storage
        $imagePaths = [];
        foreach ($request->file('images') as $image) {
            $imagePath = $image->store('product', 'public');
            $imagePaths[] = 'storage/'.$imagePath;
        }

        $data['images'] = implode(',', $imagePaths);
        $product = Product::create($data);

        return redirect()->route('admin.product.home');
        // return view('Pages.Public.products', compact('products'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find(decrypt($id));

        $images = explode(',', $product->images);

        $images[1] = $images[1] ?? null;
        $images[2] = $images[2] ?? null;
        $images[3] = $images[3] ?? null;

        return view('Pages.Public.product-detail', compact('product', 'images'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id){
        $product = Product::find(decrypt($id));

        return view('Pages.Admin.Products.edit', compact('product'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $data = $request->validate([
                'name' => 'required|string|max:255|'.Rule::unique('products', 'name')->ignore(decrypt($id)),
                'description' => 'required|string|max:255',
                'price' => 'required|numeric',
                'discount' => 'nullable|numeric',
                'stock' => 'required|numeric',
                'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'images'   => 'nullable|max:4'
            ]);
            // Save the image to storage
            if ($request->hasFile('images')) {
                $imagePaths = [];
                foreach ($request->file('images') as $image) {
                    $imagePath = $image->store('product', 'public');
                    $imagePaths[] = 'storage/'.$imagePath;
                }
                $data['images'] = implode(',', $imagePaths);
            }
            $product = Product::find(decrypt($id));
            $product->update($data);

            return redirect()->route('admin.product.home');
        }catch (\Exception $exception) {
            dd($exception);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('admin.product.home');
    }
}
