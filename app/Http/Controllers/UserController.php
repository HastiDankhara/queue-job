<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Jobs\CustomerJob;
use Illuminate\Http\Request;
use App\Mail\JobNotification;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function register()
    {
        return view('reg');
    }
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        // Create a new user
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        $maildata = [
            'name' => $user->name,
            'email' => $user->email,
        ];

        // Dispatch Job to queue
        CustomerJob::dispatch($maildata);

        // Redirect or return a response
        return redirect()->route('welcome')->with('success', $user->name . ' Your registered successfully!');
    }
}
