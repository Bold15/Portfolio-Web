<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use DB;

class commentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('comment');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $user = Auth::user();
    $komen = new \App\Models\Comment;
    $komen->name = $user->name;
    $komen->email = $user->email;
    $komen->time = now();
    $komen->comment = $request->comment;
    $komen->save();

    return redirect('comment');
}


    /**
     * Display the specified resource.
     */
    public function show()
{
    $komen = DB::table('comments')->get();
    $sortedData = $komen->sortByDesc('time');
    return view('comment')->with('data', $sortedData);
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(comment $comment)
    {
        return view('edit', [
            'comment' => $comment
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, comment $comment)
{
    $validatedData = $request->validate([
        'comment' => 'required|string|max:255',
    ]);

    $validatedData['email'] = auth()->user()->email;

    $comment->comment = $validatedData['comment'];
    $comment->save();

    return redirect('comment')->with('success', 'Comment updated successfully.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Comment::destroy($id);
        return redirect('/comment')->with('success', 'Comment has been deleted!');
    }
    

    public function userProfile($username){
        $data = Profile::where('username', $username)->first();
        return view ('profile')->with('data', $data);
    }
}
