<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class HomeController extends Controller
{
    
    public function index(User $user)
    {
        $activeUsers=$user->where('activated',true)->get();
        // $inactiveUsers=$user->inactive()->get();
        // $activeUsers=$user->active()->get();

        return response()->json($activeUsers);
        // dd($activeUsers,$inactiveUsers);

    //  $posts=$post->get();
    //   $postToUpdate->title='This is an updated title';
    //   $postToUpdate->save();
    //   dd($postToUpdate);

        return view('test.dog')->with('activeUsers',$user);

    }
}
