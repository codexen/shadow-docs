<?php require_once('partials/header.php'); ?>
    <div class="page-wrapper toggled light-theme">
        <?php require_once('partials/sidebar.php'); ?>
        <!-- page-content  -->
        <main class="page-content">
            <div id="overlay" class="overlay"></div>
            <div class="container-fluid">
                <div class="row d-flex align-items-center p-3 border-bottom">
                    <div class="col-md-1">
                        <a id="toggle-sidebar" class="btn rounded-0 p-3" href="#"> <i class="fa fa-bars"></i> </a>
                    </div>
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb" class="align-items-center">
                            <a href="index.html" class="breadcrumb-back" title="Back"></a>
                            <ol class="breadcrumb d-none d-lg-inline-flex m-0">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="">Getting Started</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Middleware</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-3 text-left"> <a href="https://github.com/codexen/shadow" class="btn btn-sm btn-shadow btn-rounded" target="_blank">Free Download</a> </div>
                </div>
                <div class="row p-lg-4">
                    <article class="main-content col-md-9 pr-lg-5">
                        <!-- title -Add bootstrap helpers for spacing -->
                        <h1 class="mb-2 mt-3">Middleware</h1>
                        <ul class="basic-nav">
                            <li> <a href="#section-1">Introduction</a> </li>
                            <li> <a href="#section-2">Defining Middleware</a> </li>
                            <li> <a href="#section-3">Registering Middleware</a> </li>
                            <li> <a href="#section-4">Assigning Middleware To Routes</a> </li>
                        </ul>
                        <hr class="my-3">

                        <div id="section-1">
                            <h3>Introduction</h3>
                            <p>Middleware provide a convenient mechanism for filtering HTTP requests entering your application. For example, Shadow includes a middleware that verifies the user of your application is authenticated. If the user is not authenticated, the middleware will redirect the user to the login screen. However, if the user is authenticated, the middleware will allow the request to proceed further into the application.

                            Of course, additional middleware can be written to perform a variety of tasks besides authentication. A CORS middleware might be responsible for adding the proper headers to all responses leaving your application. A logging middleware might log all incoming requests to your application.

                            There are several middleware included in the Shadow framework, including middleware for authentication and CSRF protection. All of these middleware are located in the application/Http/Middlewares directory.</p>
                        </div>    
                        <hr class="my-3">

                        <div id="section-2">
                            <h3>Defining Middleware</h3>
                            <p>To create a new middleware, use the create:middleware Kapitan command:</p>
<pre><code class="language-php">&lt;?php

namespace App\Middlewares;

use Shadow\Authentication\Auth;

class AuthMiddleware
{
    public function __construct() {

    }

    public function init() {        
        if(Auth::checkSession()) {
            return true;
        }
        
        return redirect('backend/login');
    }
}</code></pre>
                        </div>
                        <hr class="my-3">
                        <div id="section-3">
                            <h3>Registering Middleware</h3>
                            <p>You have to first register middleware in <code class="language-php">application/Http/Routes/web.php</code> file before using it</p>
                            <pre><code class="language-php" data-lang="php">$router->middleware('auth', 'AuthMiddleware@init');</code></pre>
                        </div>
                        <hr class="my-3">

                        <div id="section-4">
                            <h3>Assigning Middleware To Routes</h3>
                            <p>Once the middleware has been defined in <code class="language-php">application/Http/Routes/web.php</code> file, you may use the middleware method to assign middleware to a route:</p>
                            <pre><code class="language-php" data-lang="php">$router->get('/', ['before' => 'auth'], function() {
    return view('welcome');
});
</code></pre>
                        </div>
                    </article>
                    <aside class="col-md-3 d-none d-md-block border-left">
                        <div class="widget widget-support-forum p-md-3 p-sm-2"> 
                            <span class="icon icon-forum"></span>
                            <h4>Looking for help? Join Community</h4>
                            <p>Couldn’t find what your are looking for ? Why not join out support forums and let us help you.</p> <a href="#" class="btn btn-light">Support Forum</a> 
                        </div>
                    </aside>
                </div>
            </div>
        </main>
        <!-- page-content" -->
    </div>
    <!-- page-wrapper -->
<?php require_once('partials/footer.php'); ?>