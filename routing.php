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
                                <li class="breadcrumb-item active" aria-current="page">Routing</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-3 text-left"> <a href="https://github.com/codexen/shadow" class="btn btn-sm btn-shadow btn-rounded" target="_blank">Free Download</a> </div>
                </div>
                <div class="row p-lg-4">
                    <article class="main-content col-md-9 pr-lg-5">
                        <!-- title -Add bootstrap helpers for spacing -->
                        <h1 class="mb-2 mt-3">Routing</h1>
                        <ul class="basic-nav">
                            <li> <a href="#section-1">Basic Routing</a> </li>
                            <li> <a href="#section-2">Available Router Methods</a> </li>
                            <li> <a href="#section-3">Parameters Pattern</a> </li>
                            <li> <a href="#section-4">Grouping Routes</a> </li>
                        </ul>
                        <hr class="my-3">

                        <div id="section-1">
                            <h3>Basic Routing</h3>
                            <p>The most basic Shadow routes accept a URI and a Closure, providing a very simple and expressive method of defining routes:</p>

<pre><code class="language-php" data-lang="php">$router->get('foo', function () {
    return 'Hello World';
});</code></pre>                            
                        </div>
                        <hr class="my-3">

                        <div id="section-2">
                            <h3>Available Router Methods</h3>
                            <p>Shadow supports GET, POST, PUT, DELETE, OPTIONS, PATCH, HEAD, AJAX and ANY request methods.</p>

<pre><code class="language-php" data-lang="php"># GET Request
$router->get('/get-request', function() {
    echo 'Hello World.';
});

# POST Request
$router->post('/post-request', function() {
    echo 'Hello World.';
});

# PUT Request
$router->put('/put-request', function() {
    echo 'Hello World.';
});

# DELETE Request
$router->delete('/delete-request', function() {
    echo 'Hello World.';
});

# AJAX Request
$router->ajax('/ajax-request', function() {
    echo 'Hello World.';
});

# AJAXP Request (Post & Ajax)
$router->ajaxp('/ajaxp-request', function() {
    echo 'Hello World.';
});

# ANY Request (It accepts all requests.)
$router->any('/any-request', function() {
    echo 'Hello World.';
});

# You can define more than one method at one time for a request.
# Example:
$router->add('GET|POST', '/request', function() {
    echo "Hello World. I'm working GET or POST method.";
});
</code></pre>
<p>NOTE: </br> 
A post value must be sent in an object named "_method" for the Put, Delete, Patch, Options, Head methods.</br>
Example: </br>
curl -X PUT http://localhost:3000/put-request</br>
OR</br> 
curl -X POST http://localhost:3000/put-request -d _method=put</p>
<pre><code class="language-php" data-lang="php">$router->put('/put-request', function() {
    echo 'Hello World.';
});</code></pre>

                        </div>
                        <hr class="my-3">
                        
                        <div id="section-3">
                            <h3>Parameters Pattern</h3>
                            <p>The patterns defined in PHP-Router are: </p>
                            <ul>
                                <li>{a} => All chars without '/' char.</li>
                                <li>{d} => Digits.</li>
                                <li>{i} => Digits.</li>
                                <li>{s} => Alphabetic characters.</li>
                                <li>{w} => Alphanumeric characters.</li>
                                <li>{u} => URL format characters for SEO. (Alphanumeric characters, _ and -)</li>
                                <li>{*} => All characters</li>
                            </ul>
                            or<br>
                            <ul>
                                <li>:all => All characters</li>
                                <li>:any => All chars without '/' char</li>
                                <li>:id => Digits</li>
                                <li>:number => Digits</li>
                                <li>:string => Alphanumeric characters</li>
                                <li>:slug => URL format characters for SEO. (Alphanumeric characters, _ and -)</li>
                            </ul>
                            <h5>Single pattern</h5>
<pre><code class="language-php" data-lang="php"># get request -> localhost/hello/{s}
$router->get('/hello/{s}', function($value) {
    echo 'Hello, ' . $value;
});

# OR

$router->get('/hello/:string', function($value) {
    echo 'Hello, ' . $value;
});

# Output:
# /hello/burak ---> Hello, burak
# /hello/php ---> Hello, php
# /hello/ ---> Error!!!
</code></pre>

<h5>Multi pattern</h5>
<pre><code class="language-php" data-lang="php"># get request -> localhost/post/{i}/{u}
$router->get('/post/{i}/{u}', function($id, $slug) {
    echo "Post ID: " . $id . "<br />";
    echo "Post Slug: " . $slug;
});

# OR

$router->get('/post/:id/:slug', function($id, $slug) {
    echo "Post ID: " . $id . "<br />";
    echo "Post Slug: " . $slug;
});

# Output:
# /post/5/hello-world ---> Post ID: 5 <br />Post Slug: hello-world
# /post/17/php-router ---> Post ID: 17 <br />Post Slug: php-router
# /post/foo/bar ---> Error!!! ({i} params cannot be string.)
</code></pre>

<h5>optional pattern - add default value</h5>
<pre><code class="language-php"># get request -> localhost/page/{u}
$router->get('/page/{u?}', function($page = 'home')
{
  echo "Page: " . $page;
});

# OR

$router->get('/page/:slug?', function($page = 'home')
{
  echo "Page: " . $page;
});

# Output:
# /page/contact ---> Page: contact
# /page/about-us ---> Page: about-us
# /page ---> Page: home
</code></pre>

<h5>custom pattern - create own pattern</h5>
<pre><code class="language-php">$router->pattern('{lowercase}', '[a-z]+');
$router->pattern(':uppercase', '[A-Z]+');

$router->get('/demo/{lowercase}', function($value)
{
  echo "Value: " . $value;
});

# Output:
# /demo/burak ---> Value: burak 
# /demo/php ---> Value: php
# /demo/Router ---> Error!!!

$router->get('/demo/:uppercase', function($value)
{
  echo "Value: " . $value;
});

# Output:
# /demo/burak ---> Value: BURAK 
# /demo/php ---> Value: PHP
# /demo/Router ---> Error!!!
</code></pre>

<p>To define multiple patterns at once, you can use this method:</p>
<pre><code class="language-php">$patterns = [':lowcase' => '[a-z]+', ':upcase' => '[A-Z]+'];

$router->pattern($patterns);</code></pre>
<p>Great! That's it. :)</p>
                        </div>
                        <div id="section-4">
                            <h3>Grouping Routes</h3>

                            <pre><code class="language-php">$router->group('admin', function($r) {
    $r->get('foo', function(){ echo 'page: admin/foo'; });
    $r->get('bar', function(){ echo 'page: admin/bar'; });
    $r->get('baz/php', function(){ echo 'page: admin/baz/php'; });
    $r->post('login', function(){ echo 'page: admin/login'; });
});

# Created Routes:
/*
- GET /admin/foo
- GET /admin/bar
- GET /admin/baz/php
- POST /admin/login
*/
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