<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{

    public function index(){
        $products = Product::all();
        $tags = Tag::all();
        return view('admin.products.index', ['products' => $products, 'tags' => $tags]);
    }

    public function create(){
        $tags = Tag::all();
        return view('admin.products.create', ['tags' => $tags]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'prep' => ['required'],
            'serving' => ['required'],
            'price' => ['required'],
            'image_location' => ['required'],
            'tags' => ['array'],
        ]);

        $imagePath = null;
        if ($request->hasFile('image_location')) {
            $image = $request->file('image_location');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/products'), $imageName);
            $imagePath = 'images/products/' . $imageName;
        }

        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'prep_time' => $request->prep,
            'serving' => $request->serving,
            'description' => $request->description,
            'image_location' => $imagePath,
        ]);

        if ($request->has('tags')) {
            $product->tags()->attach($request->tags);
        }

        return redirect('/admin/products');
    }


    public function show(Product $product){
        $recommendedProducts = Product::where('id', '!=', $product->id)->take(5)->get();
        return view('user.products.show', ['product' => $product, 'recommendedProducts' => $recommendedProducts]);
    }

    public function edit(Product $product){
        return view('admin.products.edit', ['products' => $product, 'tags' => Tag::all()]);
    }

    public function update(Product $product, Request $request){
        $product->update([
            'name' => request('name'),
            'price' => request('price'),
            'description' => request('description'),
        ]);
        $product->tags()->sync($request->input('tags'));
        return redirect('/admin/products');
    }

        public function destroy(Product $product){
            $imagePath = public_path($product->image_location);

            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }

            $product->delete();

            return redirect('/admin/products');
        }
}
