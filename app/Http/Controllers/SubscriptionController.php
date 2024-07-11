<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    
    // Show subscribe page
    public function showSubscribePage() 
    {
        return view('subscribe');
    }

    // Handle form
    public function subscribe(Request $request)
    {
        $user = Auth::user();
        $user->subscribed = 1;
        $user->save();

        return redirect()->route('projects')->with('success', 'You have successfully subscribed! Thank you!');
    }

    public function showUnSubscribePage()
    {
        return view('unsubscribe');
    }

    public function unsubscribe(Request $request)
{
    $user = Auth::user();
    $user->subscribed = 0; // Ensure this corresponds to your database schema (tinyint 0 for unsubscribed)
    $user->save();

    return redirect()->route('projects')->with('success', 'You have successfully unsubscribed! Goodbye!');
}

}
