<!doctype html>
            <html lang="en">
              <head>
                <title>Title</title>
                <!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            
                <!-- Bootstrap CSS -->
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
               </head>
                <body>
                  <div class="container-fluid bg-dark">
                    <div class="container">
                       <nav class="navbar navbar-expand-sm">
                        <a class="navbar-brand" href="{{url('/techno')}}" style="color: white">TeCHnO_SHu</a>
                        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                 
                       <div class="collapse navbar-collapse" id="collapsibleNavId">
                         <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                         <li class="nav-item">
                        <a class="nav-link" href="{{url('/try')}}" style= "color:white">Home</a>
                    </li>
                    <br>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/branchform')}}" style="color:white">Register</a>
                    </li>
                    <br>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/view')}}" style="color:white">User_list</a>
                    </li>
                    <br>
                </ul>
            </div>
       </nav>
      </div>
    </div>
                  
                <!-- Optional JavaScript -->
                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                
                <div class="container" style="text-align:center">
                    <a href="{{url('/view')}}">
                  <button class="btn btn-primary d-inline-block m-2 float-right" type="button">user view</button>
                  </a>
                  <a href="{{route('branchform')}}">
                  <button class="btn btn-primary d-inline-block m-2 float-right" type="button">Add</button>
                  </a>
                <table class="table">
                            {{--<pre>
                            {{print_r($foundArray)}}
                        </pre>--}}
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>E-mail</th>
                            <th>Address</th>
                            <th>Gender</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                              
                        {{--@if(isset($foundArray))--}}
                        @foreach($foundArray as $values)
                        {{--<h1>{{$product->id}}</h1>--}}
                        <tr>
                            <td>{{$values->name}}</td>
                            <td>{{$values->email}}</td>
                            <td>{{$values->address}}</td>
                            <td>
                              @if($values->gender=="M")
                              male
                              @elseif($values->gender=="f")
                              female
                              @else
                              other
                              @endif
                            </td>
                            <td>{{$values->city}}</td>
                            <td>{{$values->country}}</td>
                            <td>
                              <a href="{{route('forcedelete' , ['id'=>$values->id])}}">
                              <button class="btn btn-danger" type="button">Delete</button>
                              </a>
                              <a href="{{route('restore',['id'=> $values->id])}}">
                            <button class="btn btn-primary" type="button">Restore</button>
                              </a>
                            </td>
                        </tr>
                        @endforeach 
                       {{--@else
                          <h3>no more data for showing...!!</h3>
                        @endif--}}
                    </tbody>
                </table>

                </div>
              </body>
            </html>
        </div>