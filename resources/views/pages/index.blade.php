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
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Expedita voluptatem dolor sit amet consectetur adipisicing.</p>
        </div>
        <div class="box-fix">
            <img src="assets/img/service1.png" alt=""/>
            <h1 class="sup-headings">Best Horse Riding</h1>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Expedita voluptatem dolor sit amet consectetur adipisicing.</p>
        </div>
        <div class="box">
            <img src="assets/img/service2.png" alt=""/>
            <h1 class="sup-headings">Professional Trainer</h1>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Expedita voluptatem dolor sit amet consectetur adipisicing.</p>
        </div>
    </div>
</section>
<!--  -->
<section class='home-course-card'>
    <div class='home-course-card-desc'><h3>Explore a variety of <strong>amazing </strong></h3>
    <h3><strong>horse training courses</strong> to head start to a world of adventures</h3>
<div class="course-card-container container">
    <div class="course-card">
    <img src="https://images.pexels.com/photos/1364073/pexels-photo-1364073.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"/>
           <h2>Course name</h2>
            <p><span>Trainer</span>:Mohmad Khateeb</p>
             <p><span>course price</span>:300JOD</p>
             <p><span>course period</span>:2 months</p>
        <a href="#">Show more details</a>
    </div>
    <div class="course-card">
    <img src="https://images.pexels.com/photos/1364073/pexels-photo-1364073.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"/>
           <h2>Course name</h2>
            <p><span>Trainer</span>:Mohmad Khateeb</p>
             <p><span>course price</span>:300JOD</p>
             <p><span>course period</span>:2 months</p>
        <a href="#">Show more details</a>
    </div>
    <div class="course-card">
    <img src="https://images.pexels.com/photos/1364073/pexels-photo-1364073.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"/>
           <h2>Course name</h2>
            <p><span>Trainer</span>:Mohmad Khateeb</p>
             <p><span>course price</span>:300JOD</p>
             <p><span>course period</span>:2 months</p>
        <a href="#">Show more details</a>
    </div>
</div>
</div>
<button><a href="/coursespage">View All Courses</a></button>
</section>
   
<!-- <div class="map">
                <iframe
                src="https://maps.google.com/maps?q=amman%20jordan&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    height="470" style="border:0;" allowfullscreen=""></iframe>
            </div> -->

      <div class="map">  
        <iframe  width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Amman,Arabian%20horse%20club&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="width:100%"></iframe>
        </div>
        @endsection
    </body>
    </html>