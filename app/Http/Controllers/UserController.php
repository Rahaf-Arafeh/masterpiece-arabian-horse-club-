<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\course;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        return view('admin.usertable',compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.userCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // User::create($request->all());
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->role = $request->input('role');
        $user->save();
        
        $users=User::all();
        return view('admin.usertable',compact("users"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.useredit',compact("user"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // $user->update($request->all());   
        // $user = User::findOrFail($id);
        
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->role = $request->input('role');
        $user->save();
        $users=User::all();

        return view('admin.usertable',compact("users")); 
    }

    public function userProfile()
    {
       $id=Auth::user()->id;
       $users=User::all();
        $courses =Course::join('course_user', 'courses.id', '=', 'course_user.course_id')
        ->where('course_user.user_id',$id)
        ->get(['courses.*' ,'course_user.*']);
            
        return view('auth.userProfile',compact("courses"));    
    }

    public function updateUserProfile(Request $request,User $user)
    {
        // $user->update($request->all());   
        $user->name = $request->input('name');
        $user->password = Hash::make($request->input('password'));
        $user->update();
        // $users=User::all();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete(); 
        return redirect()->route('user.index');
    }
}
