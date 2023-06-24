<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function index()
    {
        $users = User::where('roles', 'OWNER')->where('rent_name', '!=', 'NULL')->get();

        return view('pages.rentals', [
            'users' => $users,
        ]);
    }

    public function details(Request $request, $id)
    {
        $users = User::with(['galleries', 'car'])->where('id', $id)->firstOrFail();
        $cars = Car::with(['galleries'])->where('status', 'TERSEDIA')->where('users_id', $users->id)->get();

        return view('pages.rental', [
            'users'  => $users,
            'cars' => $cars,
        ]);
    }
}
