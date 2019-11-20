<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cholera Diagnosis</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
    
            <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="#">Logo</a>
                  
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Download thesis</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">About</a>
                        </li>
                      </ul>
                      <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="username" aria-label="password">
                        <input class="form-control mr-sm-2" type="password" placeholder="password" aria-label="password">
                        <button class="btn btn-primary my-2 my-sm-0" type="submit">Login</button>
                      </form>
                    </div>
            </nav>
           <div class="row">
            @yield('content')
           </div> 
           <div class="footer">
              <footer class="py-3 bg-dark">
                <div class="container">
                  <p class="text-center">Copyright &copy;  2019</p>
                </div>
            </footer>
          </div>
    
</body>
</html>