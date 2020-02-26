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
                            <li class="breadcrumb-item active" aria-current="page">CSRF Protection</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-3 text-left"> <a href="https://github.com/codexen/shadow" class="btn btn-sm btn-shadow btn-rounded" target="_blank">Free Download</a> </div>
            </div>
            <div class="row p-lg-4">
                <article class="main-content col-md-9 pr-lg-5">
                    <!-- title -Add bootstrap helpers for spacing -->
                    <h1 class="mb-2 mt-3">CSRF Protection</h1>
                    <ul class="basic-nav">
                        <li> <a data-scroll="" class="" href="#section-1">Introduction</a> </li>
                        <li> <a data-scroll="" class="" href="#section-2">X-CSRF-TOKEN</a> </li>
                    </ul>
                    <hr class="my-3">

                    <div id="section-1">
                        <h3>Introduction</h3>
                        <p>Shadow makes it easy to protect your application from cross-site request forgery (CSRF) attacks. Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.

                        Shadow automatically generates a CSRF "token" for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.

                        Anytime you define a HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request. You may use the csrf_field helper to generate the token field:</p>
                        
                        <pre><code class="language-php">&lt;form method="POST" action="/profile"&gt;
    &lt;input type="hidden" name="_csrfToken" value="&lt;?= _csrfToken(); ?&gt;"&gt;
    ...
&lt;/form&gt;</code></pre>
                        <p>The <code class="language-php">VerifyCsrfToken</code> middleware, which is included in the <code class="language-php">web</code> middleware group, will automatically verify that the token in the request input matches the token stored in the session.</p>
                        <hr class="my-3">
                    </div>

                    <div id="section-2">
                        <h3>X-CSRF-TOKEN</h3>
    
                        <p>In addition to checking for the CSRF token as a POST parameter, the <code class="language-php">VerifyCsrfToken</code> middleware will also check for the <code class="language-php">X-CSRF-TOKEN</code> request header. You could, for example, store the token in a HTML <code class="language-php">meta</code> tag:</p>
                        
                        <pre><code class="language-php">&lt;meta name="csrf-token" content="&lt;?= _csrfToken(); ?&gt;"&gt;</code></pre>

                        <p>Then, once you have created the <code class="language-php">meta</code> tag, you can instruct a library like jQuery to automatically add the token to all request headers. This provides simple, convenient CSRF protection for your AJAX based applications:</p>

                        <pre><code class="language-javascript">$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});</code></pre>
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