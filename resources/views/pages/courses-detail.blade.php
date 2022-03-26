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
                                    <!-- <tr>
                                        <td class="label">Description:</td>
                                        <td class="info">{{$course->course_desc}}</td>
                                    </tr> -->
                                </tbody>
                            </table>
                             <div class="course-description">
                                 <h3>Description</h3>
                                 <p>{{$course->course_desc}}</p>
                                 <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ipsam odio illum, cupiditate totam explicabo accusantium dolor enim quod cum. Asperiores sequi esse incidunt minima, accusantium ullam! Ipsum temporibus omnis laboriosam explicabo accusantium minus in totam, perspiciatis, illum sunt odit blanditiis eius aliquid ea eligendi voluptatem obcaecati voluptatum eos, optio maiores et dolores consectetur labore. Ducimus atque amet enim aspernatur.</p> -->
                             </div>
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
                            <h4>{{$commentCount}}Comments</h4>
                        @foreach($comments as $comment)
                         <p class="user-name"><i class="fas fa-user-circle"></i>&nbsp &nbsp{{$comment->name}}<p>
                          <p class="comment-body">{{$comment->comment_desc}}</p>
                          <p class="comment-date">{{$comment->created_at}}</p>
                          @endforeach   
                        </div>   
                    </div>
                           
@endsection       
</body>
</html>