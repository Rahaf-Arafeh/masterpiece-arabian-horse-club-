@extends('layouts.footer')
@extends('layouts.navbar')
@section('content')

<section class='form2-signin'>
                    <div class='img-box'>
                        <img src="assets/img/profile.png" />
                    </div>
                 <div class='content-box'>
                        <div class='form-box-sigin'>
                            <h2>YOUR PROFILE INFORMATION</h2>
                     <form method="POST" action="{{route('user.updateUserProfile',Auth::user()->id)}}">
                        @csrf
                       @method('PUT')
                        <div class="form-group">
                            <label for="name" >Full Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" value="{{ Auth::user()->name  }}" >
                            <small style="color:#eebc4f;">Your name may appear around here where you are mentioned. You can change or remove it at any time.</small>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" value="{{ Auth::user()->email  }}" name="email" disabled>
                         </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required >
                        </div>


                        <div class="form-group">
                            <div>
                                <input type="submit" value="Update Profile"/>
                                  
                            </div>
                       
                        </div>
                    </form>
                </div>
            </div>
       </section>
       <div class="reservation-table">
         <h2>MY RESERVATIONS</h2>
            <table>
              <th>Course Name</th>
              <th>Course Trainer</th>
              <th>Course Price</th>
              <th>Course Period</th>
                                <tbody>
                                @foreach ($courses as $course)
                                    <tr>
                                        <td>{{$course->course_name}}</td>
                                        <td>{{$course->course_trainer}}</td>
                                        <td>{{$course->course_price}}</td>
                                        <td>{{$course->course_period}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                             
                            </table>
                      </div>
       
  @endsection       
</body>
</html>