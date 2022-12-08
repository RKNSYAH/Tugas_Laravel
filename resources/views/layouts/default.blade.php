<!doctype html>
<html>
<head>
   @include('includes.head')
   
</head>
<body>
<div class="container-fluid">
   
   <div id="main" class="w-100">
    <header class="row">
        @include('includes.header')
    </header>
   <nav id="sidebar">
    <div class="justify-content-end navflex">
        <button type="button" id="sidebarCollapse" class="btn btn-info">
            <span class="bi bi-list h2"></span>
         </button>
        </div>
   <a href="/cv">CV</a>
    <a href="/form">Formulir Biodata</a>
    <a href="/data">Tampilkan Data</a>
    
  </nav>

           @yield('content')

           <footer class="row">
               @include('includes.footer')
           </footer>
   </div>
   
</div>
</body>
</html>