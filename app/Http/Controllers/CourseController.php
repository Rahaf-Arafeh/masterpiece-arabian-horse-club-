<?php

namespace App\Http\Controllers;

use App\Models\comment;
use App\Models\course;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $courses=Course::all();
        return view('admin.tables',compact("courses"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.coursecreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Course::create($request->all());
        $courses=Course::all();
        return view('admin.tables',compact("courses"));

    }
  
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(course $course)
    {
        $courses=Course::all();
        return view('pages.courses',compact("courses"));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(course $course)
    {
        return view('admin.courseedit',compact("course"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, course $course)
    {
        $course->update($request->all()); 
        $courses=Course::all();
        return view('admin.tables',compact("courses"));
    }

    public function showSingleCourse(course $course)
    {
        $comments= DB::table('users')->select([
                    'users.id',
                    'users.name',
                    'comments.created_at',
                    'comments.comment_desc',
                    'courses.course_name',
                ])->Join('comments','users.id', '=', 'comments.user_id')
                ->Join('courses','courses.id', '=','comments.course_id')
                ->where('course_id','=',$course->id)
                ->get();
         $commentCount=$comments->count();       
        return view("pages.courses-detail",compact('course','comments','commentCount'));

    }

    public function search(Request $request)
    {
       $courses=Course::query()
       ->where('course_name','LIKE',"%{$request->courseName}%")
       ->where('course_trainer','LIKE',"%{$request->courseTrainer}%")
       ->whereBetween('course_price', [$request->fromPrice,$request->toPrice])
       ->get();
       if(empty($courses)){
           return redirect()->back()->with('search','No Results Found!');
       }
      else{ 
        return view('pages.courses',compact("courses"));
      }
    }

    public function book(Request $request,Course $course)
    {  
         $courses=DB::table('courses')->where('id', $course->id)->first();

        if (Auth::check()) {
       
        $courses = DB::table('course_user')->where('course_id', $course->id)->get();
        $courseCount = $courses->count();
        if($courseCount == $course->capacity){
            return redirect()->back()->with('fail','This Course is Full!');
        }
        $error=false;
    
        
        if(!$error){
             $id=Auth::user()->id;
            $course->users()->attach($id,['phone'=> $request->phone]);
            return redirect()->back()->with('success','This Course Booked Successfully');
        }
    }
        else{
            return redirect('/login'); 
        }
          
    }
    public function storeComment(Request $request,comment $comment,Course $course)
    {
       if(Auth::check()){
        $id=Auth::user()->id;
        $data = array(
            'comment_desc'=>$request->comment,
            "user_id"=>$id,
            'course_id'=>$course->id
        );
        DB::table('comments')->insert($data);
        return redirect()->back();
       }
       else {
        return redirect('/login'); 
       }
    }
    public function bestprice()
    {
        $courses = DB::table('courses')->where('course_price', '<',350)->get();
        return view('pages.index',compact("courses"));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(course $course)
    {
        //
        $course->delete(); 
        return redirect()->route('course.index');
    }
}
