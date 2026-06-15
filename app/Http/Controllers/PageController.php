<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Enquiry;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $categories = Category::all();
        $products = \App\Models\Product::with('category')->get();
        $brands = Brand::all();

        return view('home', compact('categories', 'products', 'brands'));
    }

    public function about()
    {
        $brands = Brand::all();

        return view('about', compact('brands'));
    }

    public function products()
    {
        $categories = Category::with('products')->get();

        return view('products', compact('categories'));
    }

    public function gallery()
    {
        $images = Gallery::all();

        return view('gallery', compact('images'));
    }

    public function enquiry()
    {
        return view('enquiry');
    }

    public function storeEnquiry(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'required|string|max:50',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Enquiry::create($validated);

        return redirect()->route('enquiry')
            ->with('success', t('form', 'success') ?: 'Your enquiry has been submitted successfully!');
    }

    public function setLanguage(Request $request)
    {
        $lang = $request->input('lang', 'English');
        $allowed = ['English', 'Arabic'];

        if (!in_array($lang, $allowed)) {
            $lang = 'English';
        }

        return redirect()->back()->withCookie(cookie()->forever('Language', $lang));
    }
}
