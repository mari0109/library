
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- CSS Style -->
        <link href="/css/app.css" rel="stylesheet"> <!--bootstrap-->
        <link href="/css/main.css" rel="stylesheet">
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> -->
        <link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    
        <!-- Load icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body class="antialiased">
        <!-- Navigation Bar -->
        <nav class="m-auto navbar navbar-light bg-light "> <!--justify-center items-center relative-->
            <img src="/image/logo_copy.png" width="390" height="155" alt="">
            <div class="flex justify-content-end mr-4">
                <button class="btn btn-dark"><a href="/create">Add Book</a></button>
                <!-- Search -->
                <form class="form-inline rounded ml-2" action="/search" method="GET">
                    <input type="text" class="form-control rounded" placeholder="Search..." name="search">
                    <button type="submit" class="btn btn-outline-dark my-2 my-lg-0"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </nav>
        @yield('message')
        <div class="mt-2 p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
            @yield('name')
            <main class="container mx-auto "> 
                 @yield('content')  
            </main>    
        </div>  

        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <hr>
                    <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2023 All Rights Reserved.</p>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
                    </ul>
                    </div>
                </div>
                </div>
        </footer>   
        <!-- Javascript -->
        <!-- must read the jquery js src before the datatable -->
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>   
        <script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>  
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
        <script src="/js/main.js"></script>
    </body>
    
</html>