
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Arabian Horse</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{asset('css2/styles.css')}}"  rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
      @extends('layouts.dashboard');
            
            @section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4" style="margin-bottom:2%;">Courses Table</h1>
                        <div class="card mb-4" style="border:none;">
                       <button  style="width:20%" class="create"><a class="dropdown-item" href="{{route('course.create')}}">Create Course</a></button>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Courses
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>course name</th>
                                            <th>course description</th>
                                            <th>course trainer</th>
                                            <th>course price</th>
                                            <th>course period </th>
                                            <th>course date</th>
                                            <th>course image</th>
                                            <th>capacity</th>
                                            <th>Edit</th>
                                            <th>delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>course name</th>
                                            <th>course description</th>
                                            <th>course trainer</th>
                                            <th>course price</th>
                                            <th>course period </th>
                                            <th>course date</th>
                                            <th>course image</th>
                                            <th>capacity</th>
                                            <th>Edit</th>
                                            <th>delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($courses as $course)
                                        <tr>
                                            <td>{{$course->course_name}}</td>   
                                            <td>{{$course->course_desc}}</td>
                                            <td>{{$course->course_trainer}}</td>
                                            <td>{{$course->course_price}}</td>
                                            <td>{{$course->course_period}}</td>
                                            <td>{{$course->course_date}}</td>
                                            <td><img src="{{$course->img}}" alt="{{$course->course_name}}" width="300vw"/></td>
                                            <td>{{$course->capacity}}</td>
                                            <td><button class="edit"  style="background-color:green !important;color:white;border:none;padding:0.5rem;border-radius:3px"><a href="{{route('course.edit',$course->id)}}" style="text-decoration:none; color:white">edit</a></button></td>
                                          
                                            <td>
                                            <form method="POST" action="{{route('course.destroy',$course->id)}}">
                                             @csrf
                                             @method('delete')

                                          <button type="submit" class="delete" style="background-color:red !important;color:white;border:none;padding:0.5rem;border-radius:3px">delete</button>
                                       </form>
                                    </td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('js2/scripts.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{asset('js2/datatables-simple-demo.js')}}"></script>
        @endsection
    </body>
</html>
