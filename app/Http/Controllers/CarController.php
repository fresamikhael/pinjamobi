<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $cars = Car::with(['galleries'])
            ->where('status', 'TERSEDIA')
            ->paginate(16);

        return view('pages.car', [
            'categories' => $categories,
            'cars'  => $cars
        ]);
    }

    public function detail(Request $request, $slug)
    {
        $categories = Category::all();
        $category = Category::where('slug', $slug)->firstOrFail();
        $cars = Car::with(['galleries'])
            ->where('categories_id', $category->id)
            ->where('status', 'TERSEDIA')
            ->paginate(16);

        return view('pages.cars', [
            'categories' => $categories,
            'cars'  => $cars
        ]);
    }
}
