<!-- @extends('layouts.footer') -->
@extends('layouts.navbar')
@section('content')

<header id="home">
    <div class='home-bg-content'>
        <div class='bg-content'>welcome to arabian horse club</div>
        <h2 class='bg-content2'>the #1 Horse venue in Amman</h2>
        <a href="#"><button>Join Us</button></a>
    </div>
</header>
<section class='home-course-card'>
    <div class='home-course-card-desc'><h3>Explore a variety of <strong>amazing </strong></h3>
    <h3><strong>horse training courses</strong> to head start to a world of adventures</h3>
    <div class="course-card-container container">
    <div class="course-card">
        <img src="https://images.pexels.com/photos/1364073/pexels-photo-1364073.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"/>
           <h2>Course name</h2>
            <p>Trainer:Mohmad Khateeb</p>
             <p>course price:<span>300JOD</span></p>
        <a href="#">Show more details</a>
    </div>
    <div class="course-card">
        <img src="https://images.pexels.com/photos/1364073/pexels-photo-1364073.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"/>
           <h2>Course name</h2>
            <p>Trainer:Mohmad Khateeb</p>
             <p>course price:<span>300JOD</span></p>
        <a href="#">Show more details</a>
    </div>
    <div class="course-card">
        <img src="https://images.pexels.com/photos/1364073/pexels-photo-1364073.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"/>
           <h2>Course name</h2>
            <p>Trainer:Mohmad Khateeb</p>
             <p>course price:<span>300JOD</span></p>
        <a href="#">Show more details</a>
    </div>
</div>
</div>
<button><a href="/coursespage">View All Courses</a></button>
</section>

        @endsection
    </body>
    </html>