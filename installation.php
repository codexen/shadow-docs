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
                                <li class="breadcrumb-item active" aria-current="page">Installation</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-3 text-left"> <a href="https://github.com/codexen/shadow" class="btn btn-sm btn-shadow btn-rounded" target="_blank">Free Download</a> </div>
                </div>
                <div class="row p-lg-4">
                    <article class="main-content col-md-9 pr-lg-5">
                        <!-- title -Add bootstrap helpers for spacing -->
                        <h1 class="mb-2 mt-3">Installation</h1>
                        <ul class="basic-nav">
                            <li> <a href="#section-1">Server Requirement</a> </li>
                            <li> <a href="#section-2">Installing Shadow</a> </li>
                            <li> <a href="#section-3">Local Development Server</a> </li>
                        </ul>
                        <hr class="my-3">

                        <div id="section-1">
                            <h3>Server Requirements</h3>
                            <p>The Shadow framework has a few system requirements.You will need to make sure your server meets the following requirements:</p>
                            <div class="content-list">
                                <ul>
                                    <li>PHP &gt;= 7.2.0</li>
                                    <li>BCMath PHP Extension</li>
                                    <li>Ctype PHP Extension</li>
                                    <li>JSON PHP Extension</li>
                                    <li>Mbstring PHP Extension</li>
                                    <li>OpenSSL PHP Extension</li>
                                    <li>PDO PHP Extension</li>
                                    <li>Tokenizer PHP Extension</li>
                                    <li>XML PHP Extension</li>
                                </ul>
                            </div>
                            <hr class="my-3">
                        </div>

                        <div id="section-2">
                            <h3>Installing Shadow</h3>
                            <h6 class="font-weight-bold mb-2">
                                Via Composer Create-Project
                            </h6>
                            <p> You may install Shadow by issuing the Composer create-project command in your terminal:</p>
                            <figure class="highlight">
                                <pre><code class="language-php" data-lang="php">composer create-project --prefer-dist codexen/shadow blog</code></pre>
                            </figure>
                            <br>

                            <h6 class="font-weight-bold mb-2">
                                Via Git
                            </h6>
                            <p> Also you may install Shadow by issuing the Git clone command in your terminal:</p>
                            <figure class="highlight">
                                <pre><code class="language-php" data-lang="php">git clone https://github.com/codexen/shadow.git blog

composer install</code></pre>
                            </figure>
                        </div>
                        <hr class="my-3">
                        <div id="section-3">
                            <h3>Local Development Server</h3>
                            <p>If you have PHP installed locally and you would like to use PHP's built-in development server to serve your application, you may use the server Kapitan command. This command will start a development server at <a href="http://localhost:8000" target="_blank">http://localhost:8000</a></p>

                            <figure class="highlight">
                                <pre><code class="language-php" data-lang="php">php kapitan server</code></pre>
                            </figure>
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