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
                                <li class="breadcrumb-item active" aria-current="page">Controllers</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-3 text-left"> <a href="https://github.com/codexen/shadow" class="btn btn-sm btn-shadow btn-rounded" target="_blank">Free Download</a> </div>
                </div>
                <div class="row p-lg-4">
                    <article class="main-content col-md-9 pr-lg-5">
                        <!-- title -Add bootstrap helpers for spacing -->
                        <h1 class="mb-2 mt-3">Controllers</h1>
                        <ul class="basic-nav">
                            <li> <a href="#section-1">Introduction</a> </li>
                            <li> <a href="#section-2">Defining Controllers</a> </li>
                        </ul>
                        <hr class="my-3">

                        <div id="section-1">
                            <h3>Introduction</h3>
                            <p>Instead of defining all of your request handling logic as Closures in route files, you may wish to organize this behavior using Controller classes. Controllers can group related request handling logic into a single class. Controllers are stored in the <code class="language-php">application/Http/Controllers</code> directory.</p>
                            <hr class="my-3">
                        </div>

                        <div id="section-2">
                            <h3>Defining Controllers</h3>
                            <p>Below is an example of a basic controller class. Note that the controller extends the base controller class included with Laravel. The base class provides a few convenience methods such as the middleware method, which may be used to attach middleware to controller actions:</p>

                            <pre><code class="language-php">&lt;?php 

namespace App\Controllers\Auth;

use App\Controllers\Controller;

class ProfileController extends Controller
{
    public function index() {
        return view('profile/index');
    }
}</code></pre>
                            <p>You can define a route to this controller action like so:</p>
                            <pre><code class="language-php">$router->get('profile', 'ProfileController@index');</code></pre>
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