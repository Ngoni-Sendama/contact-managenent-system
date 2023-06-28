<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::all();
        
        // Get the authenticated user's ID
        $userId = Auth::id();
    
        // Fetch contacts belonging to the authenticated user
        $contacts = Contact::where('user_id', $userId)->get();
    
        return view('home', compact('categories', 'contacts'));
    }
    public function adminHome()
    {
        $userCount = User::count();
        $categoryCount = Category::count();
        $contactCount = Contact::count();
        $adminUserCount = User::where('is_admin', 1)->count();
    
        return view('admin.home', compact('userCount', 'categoryCount', 'contactCount', 'adminUserCount'));
    }
    
}
