<!DOCTYPE html>
<html lang="en">
              <head>
                <title>Title</title>
                <!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            
        {{--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">--}}
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <style>
        #carouselExampleSlidesOnly img{
         padding-bottom: 30px;
        }
    </style>
    
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
                <br>
        <h1 style="color: blue; font-size:large; text-align:center">Welcome To The Page</h1>
        <h3 style="color: blue; font-size:large; text-align:center">We Try To  Make More Comfortable And Easier Way To Connect With Our Site</h3>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
   <div class="carousel-inner">
     <div class="carousel-item active">
         <img class="d-block w-100" src="{{asset('/images/image.jpg')}}" alt="First slide">
       </div>
       <div class="carousel-item">
         <img class="d-block w-100" src="{{asset('/images/double.png')}}" alt="Second slide">
       </div>
  </div>
</div>
 

</body>
</html>
