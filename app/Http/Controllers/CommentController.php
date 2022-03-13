<?php

namespace App\Http\Controllers;

use App\Models\comment;
use Illuminate\Http\Request;
use App\Models\course;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $comments= DB::table('users')->select([
            'users.id',
            'users.name',
            'comments.comment_desc',
            'courses.course_name',
        ])->Join('comments','users.id', '=', 'comments.user_id')
        ->Join('courses','courses.id', '=','comments.course_id')
        ->get();
        // $comments=Comment::all();
        return view('admin.commentTable',compact("comments"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.courses-detail');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request,comment $comment,Course $course)
    // {
    
    //     // $courses=DB::table('courses')->where('id', $course->id)->get(); 
    //    if(Auth::check()){
    //     $id=Auth::user()->id;
    //     $course=Course::all();
    //     // Comment::create([$request->comment]);
    //     $data = array(
    //         'comment_desc'=>$request->comment,
    //         "user_id"=>$id,
    //         'course_id'=>$course->id
    //     );
    //     DB::table('comments')->insert($data);
    //     return view('pages.courses-detail');
    //    }
    //    else {
    //     return redirect('/login'); 
    //    }
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(comment $comment)
    {
        $comment->delete(); 
        return redirect()->back();
        // return redirect()->route('comment.index');
    }
}
