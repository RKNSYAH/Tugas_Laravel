<!doctype html>
<html>
<head>
   @include('includes.head')
   
</head>
<body>
<div class="container">
   <header class="row">
       @include('includes.header')
   </header>
   <div id="main" class="row">
   <nav>
    <ul>
    <li><a href="/">CV</a></li><br>
      <li><a href="/form">Formulir Biodata</a></li><br>
      <li><a href="/data">Tampilkan Data</a></li>
    </ul>
  </nav>
  
           @yield('content')
   </div>
   <footer class="row">
       @include('includes.footer')
   </footer>
</div>
</body>
</html>