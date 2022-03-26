@extends('layouts.footer')
@extends('layouts.navbar')
@section('content')

<section id="home">
    <div class='home-bg-content'>
        <div class='bg-content'>welcome to arabian horse club</div>
        <h2 class='bg-content2'>the First Horse venue in Amman</h2>
        <a href="/coursespage"><button type="submit">Join Us</button></a>
    </div>
</section>
<section class="services">
 <div class="row-service">
        <div class="box">
            <img src="assets/img/service3.png" alt=""/>
            <h1 class="sup-headings">Satisfaction Guarantee</h1>
                 <p>We have more than 20 years of experience in
                      Equestrian And Horse Riding.</p>
        </div>
        <div class="box-fix">
            <img src="assets/img/service1.png" alt=""/>
            <h1 class="sup-headings">Best Horse Riding</h1>
                 <p>We have the best trained horses in the world so we can gurantee for you unique experience.</p>
        </div>
        <div class="box">
            <img src="assets/img/service2.png" alt=""/>
            <h1 class="sup-headings">Professional Trainer</h1>
                 <p>We have the best horse training experts With a rich history of their achievements.</p>
        </div>
    </div>
</section>
<!--  -->
<section class='home-course-card'>
    <div class='home-course-card-desc'><h3>Explore a variety of <strong>amazing </strong></h3>
    <h3><strong>horse training courses</strong> to head start to a world of adventures</h3>
<div class="course-card-container container">
  @foreach($courses->take(3) as $course) 
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
</div>
<button><a href="/coursespage">View All Courses</a></button>
</section>


      <div class="map">  
        <iframe  width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Amman,Arabian%20horse%20club&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="width:100%"></iframe>
        </div>
        @endsection
    </body>
    </html>