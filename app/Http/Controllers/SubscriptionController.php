<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber; // Import the Subscriber model
use Illuminate\Support\Facades\Log; // Import Log facade

class SubscriptionController extends Controller
{
    /**
     * Store a new subscriber in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'first_name' => 'nullable|string|max:255',
            'email' => 'required|email|max:255|unique:subscribers,email', // Ensure email is unique in the 'subscribers' table
        ]);

        try {
            // Create a new Subscriber record
            Subscriber::create([
                'first_name' => $request->input('first_name'),
                'email' => $request->input('email'),
            ]);

            return redirect()->back()->with('success', 'Thank you for subscribing!');
        } catch (\Exception $e) {
            // Log the error for debugging purposes
            Log::error('Subscription error: ' . $e->getMessage());

            // Redirect back with an error message
            return redirect()->back()->with('error', 'There was an issue with your subscription. Please try again.');
        }
    }
}
