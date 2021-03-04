<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Posting;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
        $user_count = User::count();
        $posting_count = Posting::published()->count();
        $latest_postings = Posting::published()->latest()->take(10)->get();

        dd($user_count, $posting_count, $latest_postings);
    }
}
