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
    
   <a href="/">CV</a>
    <a href="/form">Formulir Biodata</a>
    <a href="/data">Tampilkan Data</a>
    
  </nav>
  
           @yield('content')
   </div>
   <footer class="row">
       @include('includes.footer')
   </footer>
</div>
</body>
</html>