<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ContactsController extends Controller
{
    

   
    public function contacts(){
        $categories = Category::all();
        
        // Get the authenticated user's ID
        $userId = Auth::id();
    
        // Fetch contacts belonging to the authenticated user
        $contacts = Contact::where('user_id', $userId)->get();
    
        return view('contacts', compact('categories', 'contacts'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'comment' => 'nullable|string',
        ]);
    
        // Upload the avatar image
        $avatarPath = $request->file('avatar')->store('avatars', 'public');
    
        // Create a new contact
        $contact = Contact::create([
            'user_id' => $request->input('user_id'),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'telephone' => $request->input('telephone'),
            'category' => $request->input('category'),
            'avatar' => $avatarPath,
            'comment' => $request->input('comment'),
        ]);
    
        
        return redirect()->back()->with('success', 'Contact created successfully');
    }

    public function show($id)
    {
      
        $contact = Contact::findOrFail($id);

        
        return view('contact-details', compact('contact'));
    }
    
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
    
        return redirect()->back()->with('success', 'Contact deleted successfully');
    }
   
    public function edit($id)
    {
        
        $userId = Auth::id();
    
        $contact = Contact::findOrFail($id);
    
        if ($contact->user_id !== $userId) {
            abort(403); 
        }
    
        $categories = Category::all();
    
        return view('contacts-edit', compact('contact', 'categories'));
    }
    

    public function update(Request $request, $id)
    {
        // Retrieve the authenticated user's ID
        $userId = Auth::id();
    
        // Retrieve the contact by its ID
        $contact = Contact::findOrFail($id);
    
        // Ensure the contact belongs to the authenticated user
        if ($contact->user_id !== $userId) {
            abort(403); // Unauthorized access
        }
    
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'comment' => 'nullable|string',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Update the contact's attributes
        $contact->update([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'telephone' => $request->input('telephone'),
            'category' => $request->input('category'),
            'comment' => $request->input('comment'),
        ]);
    
        // Check if a new avatar image was provided
        if ($request->hasFile('avatar')) {
            // Delete the old avatar file
            Storage::disk('public')->delete($contact->avatar);
    
            // Upload the new avatar image
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
    
            // Update the contact's avatar attribute
            $contact->update(['avatar' => $avatarPath]);
        }
    
        return redirect()->route('home')->with('success', 'Contact updated successfully');
    }
    
    


}

