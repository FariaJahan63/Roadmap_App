<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="icon" href="/favicon.ico" type="image/x-icon"/>

<title>:: Roadmap :: Project Dashboard</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="/plugins/bootstrap/css/bootstrap.min.css" />
<!-- Core css -->
<link rel="stylesheet" href="/css/main.css"/>
<link rel="stylesheet" href="/css/theme1.css"/>
</head>

<body class="font-montserrat">
<div id="main_content">
    <div id="left-sidebar" class="sidebar ">
        <h5 class="brand-name">User</h5>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul class="metismenu">
                <li class="g_heading">Project</li>
                
                    <ul><li><a href="{{ route('logout') }}">logout</a></li></ul>
                </li>
               
            </ul>
        </nav>        
    </div>

    <div class="page">
        <div id="page_top" class="section-body top_dark">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="left">
                        <h1 class="page-title">Dashboard</h1>                        
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="section-body mt-3">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="mb-4">
                            <h4>Welcome {{ auth()->user()->name }}!</h4>
                            <small>This is a Roadmap app developed by Faria Jahan for interview assignment.</small>
                        </div>                        
                    </div>
                </div>   
            </div>
        </div>
        @yield('content')       
        <div class="section-body">
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <a href="#">©Faria Jahan</a>
                        </div>
                        <div class="col-md-6 col-sm-12 text-md-right">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a href="#">Documentation</a></li>
                                <li class="list-inline-item"><a href="#">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>    
</div>
</body>

</html>
