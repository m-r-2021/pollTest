<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoteController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'candidate1' => 'required',
            'candidate2' => 'required',
            'candidate3' => 'required',
            'candidate4' => 'required',
            'candidate5' => 'required',
            'candidate6' => 'required',
            'candidate7' => 'required',
            'candidate8' => 'required',
        ]);

        $post = new Vote();
        $post->user = Auth::user()->name;
        $post->candidate = $request->candidate1;
        $post->candidate2 = $request->candidate2;
        $post->candidate3 = $request->candidate3;
        $post->candidate4 = $request->candidate4;
        $post->candidate5 = $request->candidate5;
        $post->candidate6 = $request->candidate6;
        $post->candidate7 = $request->candidate7;;
        $post->candidate8 = $request->candidate8;

        $post->save();

        $user = User::FindOrFail(Auth::user()->id);
        
        $user->canVote = false;

        $user->save();

        return view('poll.voted');
    }
}