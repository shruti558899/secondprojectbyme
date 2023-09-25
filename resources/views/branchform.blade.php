<!doctype html>
   <html lang="en">
              <head>
                <title>Title</title>
                <!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                
               {{--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">--}}
               <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
           {{--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">--}}
             </head>
    <body>
          <!-- Nav tabs -->
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
                        <a class="nav-link" href="{{url('/try')}}" style="color:white">Home</a>
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
           <!--nav tab-->

        <div class="container" style="text-align:center">
            <form action="{{$url}}" method="post">
                {!! csrf_field() !!}
                {{-- <form action="/branchstore/{{$request}}" method="post"> --}}
            <h2> {{$title}}</h2>
            <br>
   
        <label for="name" style="color:blue">Name:</label>
            <input type="text" name="name"  placeholder="user_name" value="{{$foundArray->name}}"/>
            <br>
            <label for="email" style="color:blue">Email:</label>
            <input type="email" name="email" placeholder="enter the email" value="{{$foundArray->email}}">
            <br>
        <label for="address" style="color:blue">Address:</label>
            <input type="text" name="address" placeholder="enter the address" value="{{$foundArray->address}}">
            <br>
        <label for="gender" style="color:blue">Gender:</label>
            <input type="text" name="gender"placeholder="enter the gender" value="">
            <br>
        <label for="city" style="color:blue">City:</label>
            <input type="text" name="city" placeholder="enter the city" value="{{$foundArray->city}}">
            <br>
        <label for="country" style="color:blue">Country:</label>
            <input type="text"name="country" placeholder="enter the country_name" value="{{$foundArray->country}}">
            <br>
        <label for="password" style="color:blue">Password:</label>
            <input type="password" name="password" placeholder="enter the password">
        <br><br>   
         <input type="submit" value="submit" style="background-color:blue; color:white">
        
        <br>
        </form>
    </div>
    
</body>
</html>