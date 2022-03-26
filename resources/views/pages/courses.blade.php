@extends('layouts.footer')
@extends('layouts.navbar')
@section('content')
<section class="courses-section">
    <h1>Courses</h1>
    <h5><a href="/">home</a>><a href="/coursespage">courses</a></h5>
</section>
<div class="row-search">
     <form method="GET" action="{{route('course.search')}}">
          <label >Course Name:</label>
          <input type="text" name="courseName" value="" placeholder="For Beginners..." class="form-control"  id="search"  />
          <label>Course Trainer:</label>
          <input type="text" name="courseTrainer" value="" placeholder="Mohmad" class="form-control"  id="search"/>
          <label>Course Price:</label>
          <input type="number" name="fromPrice" value="" placeholder="From" class="form-control" id="search" required/>
          <label>Course Price:</label>
          <input type="number" name="toPrice" value="" placeholder="To" class="form-control" id="search" required/>
          <button type="submit" >Search</button>
        </div>
        <div class="course-card-container container">
            @foreach($courses as $course)
            <div class="course-card">
                <img src="{{$course->img}}" alt="{{$course->course_name}}"/>
                <h2>{{$course->course_name}}</h2>
                <p><span>Trainer</span>:{{$course->course_trainer}}</p>
             <p><span>course price</span>:{{$course->course_price}}JOD</p>
             <p><span>course period</span>:{{$course->course_period}}</p>
        <a href="{{route('course.showSingleCourse',$course->id)}}">Show more details</a>
    </div>
    @endforeach
</div>

</form>
@endsection


</body>
</html>