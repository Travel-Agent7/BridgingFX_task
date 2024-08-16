<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Submission;

class AdminController extends Controller
{
    public function dashboard()
    {
      $Submissions = Submission::all();
    //   dd($Submissions);
        return view('admin.dashboard',compact('Submissions'));
    }

    public function show($id)
    {
        $submission = Submission::find($id);
        return view('admin.show', compact('submission'));
    }
}
