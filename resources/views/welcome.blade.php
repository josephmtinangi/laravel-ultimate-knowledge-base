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
            <h1 class="text-center">Laravel Eloquent Relationships</h1>
        </div>
    </div>

    <section class="container summary">
        <div class="row">
            <h2>What are relationships</h2>
            <ul>
                <li>Link different Eloquent models</li>
                <li>Ex: A user has posts</li>
                <li>A user has a role</li>
                <li>Comments belong to a user</li>
                <li>Comments belong to a post</li>
            </ul>
        </div>
        <div class="row">
            <h2>Types of Relationships</h2>
            <ul>
                <li>One to One: hasOne()</li>
                <li>One to Many: hasMany()/belongsTo()</li>
                <li>Many to Many: belongsToMany()</li>
                <li>Has many through: hasManyThrough()</li>
                <li>Polymorphic: morphTo()/morphMany()</li>
            </ul>
        </div>
    </section>

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
                     <li><a href="{{ Config('social.github.url') }}" title="{{ Config('social.github.username') }}">Github</a></li>
                     <li><a href="{{ Config('social.bitbucket.url') }}" title="{{ Config('social.bitbucket.username') }}">Bitbucket</a></li>
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
