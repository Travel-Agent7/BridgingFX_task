<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{

    public function store(Request $request)
    {
        $Validator = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
        // dd($Validator);
        $admin = User::where('is_admin', 1)->first();
        $submission = Submission::create($request->all());

        Mail::send('emails.user', ['submission' => $submission], function ($message) use ($submission) {
            $message->to($submission->email)
                ->subject('Thank you for contacting us');
        });

        if ($admin) {
            Mail::send('emails.admin', ['submission' => $submission], function ($message) use ($admin) {
                $message->to($admin->email)
                    ->subject('New Contact Form Submission');
            });
        }

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
