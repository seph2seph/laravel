<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->get();
        $total = Product::count();
        return view('admin.product.home', compact(['products', 'total']));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'middle_name' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',    
            'last_name' => 'required',
            'age' => 'required',
            'section' => 'required',
            'contact' => 'required',
            'gender' => 'required',
        ]); 
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('uploads/products', 'public');
            } 
            else {
                $imagePath = null;
            }

            $data = Product::create([
                'image' => $imagePath,
                'first_name' => $request->first_name,
                'middle_name' => $request->middle_name,
                'last_name' => $request->last_name,
                'age' => $request->age,
                'section' => $request->section,
                'contact' => $request->contact,
                'gender' => $request->gender,
            ]);
        
            if ($data) {
                session()->flash('success', 'Product created successfully');
                return redirect(route('admin/products'));
            } else {
                session()->flash('error', 'Product creation failed');
                return redirect(route('admin/products/create'));
            }
        }        

        public function edit($id)
        {
            $product = Product::findOrFail($id);
            return view('admin.product.update', compact('product'));
        }
        
        public function update(Request $request, $id)
        {
            $request->validate([
                'first_name' => 'required',
                'middle_name' => 'required',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',    
                'last_name' => 'required',
                'age' => 'required',
                'section' => 'required',
                'contact' => 'required',
                'gender' => 'required',
            ]);

            $product = Product::findOrFail($id);

            if ($request->hasFile('image')) {
                if ($product->image) {
                    Storage::disk('public')->delete($product->image);
                }
                $imagePath = $request->file('image')->store('uploads/products', 'public');
            } else {
                $imagePath = $product->image;
            }

            $product->update([
                'image' => $imagePath,
                'first_name' => $request->first_name,
                'middle_name' => $request->middle_name,
                'last_name' => $request->last_name,
                'age' => $request->age,
                'section' => $request->section,
                'contact' => $request->contact,
                'gender' => $request->gender,
            ]);

            if ($product) {
                session()->flash('success', 'Product updated successfully');
                return redirect(route('admin/products'));
            } else {
                session()->flash('error', 'Product update failed');
                return redirect(route('admin/products/edit', $id));
            }
        }

        public function delete($id)
        {
            $product = Product::findOrFail($id);
            if ($product->delete()) {
                session()->flash('success', 'Product deleted successfully');
                return redirect(route('admin/products'));
            } else {
                session()->flash('error', 'Product deletion failed');
                return redirect(route('admin/products'));
            }
        }

        
}
