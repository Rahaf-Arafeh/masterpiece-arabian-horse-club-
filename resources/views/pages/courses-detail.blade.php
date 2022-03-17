@extends('layouts.footer')
@extends('layouts.navbar')
@section('content')

        <div class="course-detail-container">
            <div class="img-detail">
                            <div class="img-box">
                                <img src="{{$course->img}}" alt="{{$course->course_name}}">
                            </div> 
                    <div class="name-book">  
                        <h1>{{$course->course_name}}<span>/{{$course->course_price}}JOD</span></h1>
                     <div class="book-section">
                       @if(!empty(Session::get('success')))
                        <div class="alert alert-success"> {{ Session::get('success') }}</div>
                        @endif
                      <h2>Reservation</h2>
                       <form method="post" action="{{route('courses.book',$course->id)}}">
                         @csrf
                        <div class="form-group">
                                <label for="phone">Phone:</label>
                                <input type="tel" id="phone" name="phone" required>
                                    
                            </div>
                            @if(!empty(Session::get('fail')))
                           <div class="alert alert-danger"> {{ Session::get('fail') }}</div>
                            @endif
                            
                            <div class="form-group"><input type="submit" value="Book Now" />
                        </div>
                       </form> 
                        </div>
               
                    
                    <!--  -->
                      </div>
                          </div>
                          <div class="table-details">
                            <table class="details">
                                <tbody>
                              
                                    <tr>
                                        <td class="label">Trainer:</td>
                                        <td class="info">{{$course->course_trainer}}</td>
                                    </tr>
                                    <tr>
                                        <td class="label">Period:</td>
                                        <td class="info">{{$course->course_period}}</td>
                                    </tr>
                                    <tr>
                                        <td class="label">Capacity:</td>
                                        <td class="info">{{$course->capacity}}</td>
                                    </tr>
                                    <tr>
                                        <td class="label">Description:</td>
                                        <td class="info">{{$course->course_desc}}</td>
                                    </tr>
                                </tbody>
                            </table>
                              </div>
                 <div class="comment-section">
                     <h2>Comments</h2>
                     <form method="post" action="{{route('coursedetails.storeComment',$course->id)}}">
                     @csrf
                     <div class="form-group">
                         
                            <label for="comment">Write your comment:</label>
                            <textarea id="comment" name="comment"></textarea>
                            <input type="submit" value="Comment" />
                        </div>
                           </form> 
                        </div>
                     <div class="user-comment">
                     @foreach($comments as $comment)
                         <p class="user-name">{{$comment->name}}<p>
                          <p class="comment-body">{{$comment->comment_desc}}</p>
                          @endforeach   
                     </div>   
                                       </div>
                           
@endsection       
</body>
</html>