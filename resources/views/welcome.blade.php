<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="/css/app.css">

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">


  </head>

  <body>

    <div class="jumbotron">
        <div class="container">
            <h1 class="text-center">Welcome</h1>
        </div>
    </div>

    {{-- Footer --}}
    <footer class="container-fluid">
        <div class="footer-top">
            <div class="col-xs-12 col-sm-4">
                <h3>About</h3>
                <p>
                    Neural denim hacker dome claymore mine modem car industrial grade assault sub-orbital wonton soup apophenia papier-mache urban narrative garage. 3D-printed corrupted smart-augmented reality decay bicycle bomb soul-delay faded meta-numinous. 
                </p>
            </div>
            <div class="col-xs-12 col-sm-4">
                <h3>Links</h3>
                <ul class="list-unstyled">
                    <li><a href="#">Link 1</a></li>
                    <li><a href="#">Link 2</a></li>
                    <li><a href="#">Link 3</a></li>
                    <li><a href="#">Link 4</a></li>
                    <li><a href="#">Link 5</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-4">
                <h3>Social</h3>
                <ul class="list-unstyled">
                     <li><a href="{{ Config('social.github') }}">Github</a></li>
                     <li><a href="{{ Config('social.bitbucket') }}">Bitbucket</a></li>
                 </ul> 
            </div>
        </div>
        <div class="footer-bottom">
            Laravel Ultimate Knowledge Base &copy; {{ date('Y') }} All Rights Reserved
        </div>
    </footer>
    {{-- // Footer --}}

    <!-- Scripts -->
    <script src="/js/app.js"></script>
  </body>
</html>
