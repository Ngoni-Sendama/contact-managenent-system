<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function category(){
        $categories = Category::all();
        return view('admin.category', compact('categories'));
    }
    public function storeCategory(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
    
        $category = Category::create([
            'name' => $request->name,
        ]);
    
        return redirect()->back()->with('success', 'Category created successfully');
    }
    public function destroy($id)
{
    $category = Category::findOrFail($id);
    $category->delete();

    return redirect()->back()->with('success', 'Category deleted successfully');
}
public function users()
{
    $users = User::where('is_admin', 0)->get();
    return view('admin.users', compact('users'));
}
public function destroyUser($id)
{
    $user = User::findOrFail($id);
    $user->delete();

    return redirect()->back()->with('success', 'User deleted successfully');
}
public function allcontacts(){
    $contacts = Contact::all();

    return view('admin.allcontacts', compact('contacts'));
}
}
