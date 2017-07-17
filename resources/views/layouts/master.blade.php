
<!DOCTYPE html>
<html lang="en">
@extends('layouts.head')
  <body>
    @include('layouts.nav')


    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title">The Bootstrap Blog</h1>
        <p class="lead blog-description">An example blog template built with Bootstrap.</p>
      </div>
    </div>

    <div class="container">

      <div class="row">
        @yield('content')

        @include('layouts.sidebar')

      </div><!-- /.row -->

    </div><!-- /.container -->

    @extends('layouts.footer')
  </body>
</html>
