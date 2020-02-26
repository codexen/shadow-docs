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
                                <li class="breadcrumb-item active" aria-current="page">Requests</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-3 text-left"> <a href="https://github.com/codexen/shadow" class="btn btn-sm btn-shadow btn-rounded" target="_blank">Free Download</a> </div>
                </div>
                <div class="row p-lg-4">
                    <article class="main-content col-md-9 pr-lg-5">
                        <!-- title -Add bootstrap helpers for spacing -->
                        <h1 class="mb-2 mt-3">Requests</h1>
                        <ul class="basic-nav">
                            <li> <a href="#section-1">Accessing The Request</a> </li>
                        </ul>
                        <hr class="my-3">

                        <div id="section-1">
                            <h3>Accessing The Request</h3>
                            <p>To obtain an instance of the current HTTP request via dependency injection, you should type-hint the <code class="language-php">Shadow\Request\Input</code> class on your controller method. The incoming request instance will automatically be injected by the service container:</p>

                            <pre><code class="language-php">&lt;?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function store()
    {
        $name = input()->input('name');
        
        //
    }
}
</code></pre>
                            <hr class="my-3">
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