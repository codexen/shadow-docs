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
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Layout 2</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-3 text-left"> <a href="https://github.com/codexen/shadow" class="btn btn-sm btn-primary btn-rounded" target="_blank">Free Download</a> </div>
                    </div>
                    <div class="row p-lg-4">
                        <article class="main-content col-md-9 pr-lg-5">
                            <!-- title -Add bootstrap helpers for spacing -->
                            <h1 class="mb-2 mt-3">Introduction</h1>
                            <!--//title -->
                            <p class="lead mb-3"> How to get started with Docu! </p>
                            <p>Thank you for downloading our themes! We really appreciate it and ready to help you!</p>
                            <p> This guide will help you get started with the template! All the important stuff – compiling the source, file structure, build tools, file includes – is documented here, but should you have any questions, always feel free to reach out to info@sharebootstrap.com </p>
                            <!-- Sep -->
                            <hr class="my-5">
                            <!-- alert -->
                            <div class="alert alert-primary d-flex justify-content-start align-items-center" role="alert"> <span class="fa fa-info mr-4"></span>
                                <p class="m-0"> This documentation is always evolving. If you've not been here for a while, perhaps check out the This documentation is always evolving.This is a primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like. </p>
                            </div>
                            <!-- heading -->
                            <h3 class="font-weight-bold mb-2">
                                Dev setup
                            </h3>
                            <p> To get started, you need to do the following: </p>
                            <ol>
                                <li><strong>Make sure you have Node installed</strong> since Landkit uses npm to manage dependencies. If you don't, installing is quite easy, just visit the <a href="https://nodejs.org/en/download/">Node Downloads page</a> and install it. </li>
                                <li><strong>Unzip your theme and open your command line</strong>, making sure your command line prompt is at the root of the unzipped theme directory. </li>
                                <li><strong class="badge badge-danger-soft"><code>npm install gulp-cli -g</code></strong>: If you don't have the Gulp command line interface, you need to install it.</li>
                                <li><strong class="badge badge-danger-soft"><code>npm install</code></strong>: Open your command line to the root directory of your unzipped theme and run to install all of Landkit's dependencies.</li>
                            </ol>
                            <!-- Sep -->
                            <hr class="my-5">
                            <h3 class="font-weight-bold mb-2">
                                Code example
                            </h3>
                            <p>The Prism source, highlighted with Prism (don’t you just love how meta this is?):</p>
                            <p>The <a href="https://www.w3.org/TR/html5/grouping-content.html#the-pre-element">recommended way to mark up a code block</a> (both for semantics and for Prism) is a <code class=" language-markup"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>pre</span><span class="token punctuation">&gt;</span></span></code> element with a <code class=" language-markup"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>code</span><span class="token punctuation">&gt;</span></span></code> element inside, like so:</p>
                            <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- As a link --&gt;</span>
                                <span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-light bg-light"</span><span class="nt">&gt;</span>
                                <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Navbar<span class="nt">&lt;/a&gt;</span>
                                <span class="nt">&lt;/nav&gt;</span>

                                <span class="c">&lt;!-- As a heading --&gt;</span>
                                <span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-light bg-light"</span><span class="nt">&gt;</span>
                                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-brand mb-0 h1"</span><span class="nt">&gt;</span>Navbar<span class="nt">&lt;/span&gt;</span>
                                <span class="nt">&lt;/nav&gt;</span></code></pre></figure>
                            <hr class="my-5">
                            <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-expand-lg navbar-light bg-light"</span><span class="nt">&gt;</span>
                                  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
                                  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Navbar<span class="nt">&lt;/a&gt;</span>
                                  <span class="nt">&lt;/div&gt;</span>
                                  <span class="nt">&lt;/nav&gt;</span></code></pre></figure>
                        </article>
                        <aside class="col-md-3 d-none d-md-block border-left">
                            <div class="widget widget-support-forum p-md-3 p-sm-2"> <span class="icon icon-forum"></span>
                                <h4>Looking for help? Join Community</h4>
                                <p>Couldn’t find what your are looking for ? Why not join out support forums and let us help you.</p> <a href="#" class="btn btn-light">Support Forum</a> </div>
                            <hr class="my-5">
                            <ul class="aside-nav nav flex-column">
                                <li class="nav-item"> <a data-scroll="" class="nav-link text-dark" href="#section-1">Typography</a> </li>
                                <li class="nav-item"> <a data-scroll="" class="nav-link text-dark" href="#section-2">Colors</a> </li>
                                <li class="nav-item"> <a data-scroll="" class="nav-link text-dark" href="#section-3">File Tree</a> </li>
                                <li class="nav-item"> <a data-scroll="" class="nav-link text-dark" href="#section-4">Table</a> </li>
                                <li class="nav-item"> <a data-scroll="" class="nav-link text-dark" href="#section-5">Accordion</a> </li>
                                <li class="nav-item"> <a data-scroll="" class="nav-link text-dark" href="#section-6">Video</a> </li>
                                <li class="nav-item"> <a data-scroll="" class="nav-link text-dark" href="#section-7">Code</a> </li>
                                <li class="nav-item"> <a data-scroll="" class="nav-link text-dark" href="#section-8">Alert</a> </li>
                                <li class="nav-item"> <a data-scroll="" class="nav-link text-dark" href="#section-9">List</a> </li>
                                <li class="nav-item"> <a data-scroll="" class="nav-link text-dark" href="#section-10">Carousel</a> </li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </main>
            <!-- page-content" -->
    </div>
    <!-- page-wrapper -->
<?php require_once('partials/footer.php'); ?>