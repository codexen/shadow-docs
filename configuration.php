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
                                <li class="breadcrumb-item active" aria-current="page">Configuration</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-3 text-left"> <a href="https://github.com/codexen/shadow" class="btn btn-sm btn-shadow btn-rounded" target="_blank">Free Download</a> </div>
                </div>
                <div class="row p-lg-4">
                    <article class="main-content col-md-9 pr-lg-5">
                        <!-- title -Add bootstrap helpers for spacing -->
                        <h1 class="mb-2 mt-3">Configuration</h1>
                        <ul class="basic-nav">
                            <li> <a href="#section-1">Introduction</a> </li>
                            <li> <a href="#section-2">Environment Configuration</a> </li>
                            <li> <a href="#section-3">Retrieving Environment Configuration</a> </li>
                        </ul>
                        <hr class="my-3">

                        <div id="section-1">
                            <h3>Introduction</h3>
                            <p>All of the configuration files for the Shadow framework are stored in the bin/config directory. Each option is documented, so feel free to look through the files and get familiar with the options available to you.</p>
                        </div>
                        <hr class="my-3">

                        <div id="section-2">
                            <h3>Environment Configuration</h3>
                            <p>It is often helpful to have different configuration values based on the environment where the application is running. For example, you may wish to use a different cache driver locally than you do on your production server.</p>

                            <p>To make this a cinch, Laravel utilizes the DotEnv PHP library by Vance Lucas. In a fresh Laravel installation, the root directory of your application will contain a .env.example file. If you install Laravel via Composer, this file will automatically be renamed to .env. Otherwise, you should rename the file manually.</p>

                            <p>Your .env file should not be committed to your application's source control, since each developer / server using your application could require a different environment configuration. Furthermore, this would be a security risk in the event an intruder gain access to your source control repository, since any sensitive credentials would get exposed.</p>

                            <p>If you are developing with a team, you may wish to continue including a .env.example file with your application. By putting place-holder values in the example configuration file, other developers on your team can clearly see which environment variables are needed to run your application. You may also create a .env.testing file. This file will override the .env file when running PHPUnit tests or executing Artisan commands with the --env=testing option.</p>
                        </div>
                        <hr class="my-3">
                        
                        <div id="section-3">
                            <h3>Retrieving Environment Configuration</h3>
                            <p>All of the variables listed in this file will be loaded into the $_ENV PHP super-global when your application receives a request. However, you may use the env helper to retrieve values from these variables in your configuration files. In fact, if you review the Laravel configuration files, you will notice several of the options already using this helper:</p>    
                            
                            <figure class="highlight">
                                <pre><code class="language-php" data-lang="php">'name'=> remote('application', 'APP_NAME'),</code></pre>
                            </figure>

                            <p>The second value passed to the env function is the "default value". This value will be used if no environment variable exists for the given key.</p>
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