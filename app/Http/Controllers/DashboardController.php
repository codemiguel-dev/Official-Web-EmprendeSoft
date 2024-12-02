<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function clientDashboard()
    {
        $userCount = User::count();
        $productCount = Product::count();
        return view('dashboard', compact('userCount','productCount'));
    }

    public function sellerDashboard()
    {
        $userCount = User::count();
        $productCount = Product::count();
        return view('seller', compact('userCount','productCount'));
    }

    public function adminDashboard()
    {
        $userCount = User::count();
        $productCount = Product::count();
        return view('admin', compact('userCount','productCount'));
    }
}
