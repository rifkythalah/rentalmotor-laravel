<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Modern Business - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
       <!-- Core theme CSS (includes Bootstrap)-->
        <!-- Link Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .custom-font {
            font-family: 'Lobster', cursive;
            font-size: 24px;
            font-weight: bold;
            color: #ff4500;
        }
    </style>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container px-5">
                    <i><a class="navbar-brand custom-font" href="{{ route('index')}}">MotoRen</a></i>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="mb-2 navbar-nav ms-auto mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="{{ route('index')}}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('about')}}">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('contact')}}">Contact</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('faq')}}">FAQ</a></li>
                            @if(Auth::check() && Auth::user()->role === 'admin')
                            <li class="nav-item"><a class="nav-link"  href="{{ url('/dashboard') }}">Dashboard</a></li>           
                            @endif
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Rifqi</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                                    <li><a class="dropdown-item" href="#">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page Content-->
            <section class="py-5">
                <div class="container px-5">
                    <h1 class="mb-4 fw-bolder fs-5">Company Blog</h1>
                    <div class="overflow-hidden border-0 shadow card rounded-3">
                        <div class="p-0 card-body">
                            <div class="row gx-0">
                                <div class="col-lg-6 col-xl-5 py-lg-5">
                                    <div class="p-4 p-md-5">

                                        <div class="h2 fw-bolder">Vespa Gts 150</div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique delectus ab doloremque, qui doloribus ea officiis...</p>
                                        <a class="stretched-link text-decoration-none" href="#!">
                                            Read more
                                            <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-7"><div class="bg-featured-blog" style="background-image: url('https://dummyimage.com/700x350/343a40/6c757d')"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-5 bg-light">
                <div class="container px-5">
                    <div class="row gx-5">
                        <div class="col-xl-8">
                            <h2 class="mb-4 fw-bolder fs-5">News</h2>
                            <!-- News item-->
                            <div class="mb-4">
                                <div class="small text-muted">May 12, 2023</div>
                                <a class="link-dark" href="#!"><h3>Start Bootstrap releases Bootstrap 5 updates for templates and themes</h3></a>
                            </div>
                            <!-- News item-->
                            <div class="mb-5">
                                <div class="small text-muted">May 5, 2023</div>
                                <a class="link-dark" href="#!"><h3>Bootstrap 5 has officially landed</h3></a>
                            </div>
                            <!-- News item-->
                            <div class="mb-5">
                                <div class="small text-muted">Apr 21, 2023</div>
                                <a class="link-dark" href="#!"><h3>This is another news article headline, but this one is a little bit longer</h3></a>
                            </div>
                            <div class="mb-5 text-end mb-xl-0">
                                <a class="text-decoration-none" href="#!">
                                    More news
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="border-0 card h-100">
                                <div class="p-4 card-body">
                                    <div class="d-flex h-100 align-items-center justify-content-center">
                                        <div class="text-center">
                                            <div class="h6 fw-bolder">Contact</div>
                                            <p class="mb-4 text-muted">
                                                For press inquiries, email us at
                                                <br />
                                                <a href="#!">press@domain.com</a>
                                            </p>
                                            <div class="h6 fw-bolder">Follow us</div>
                                            <a class="px-2 fs-5 link-dark" href="#!"><i class="bi-twitter"></i></a>
                                            <a class="px-2 fs-5 link-dark" href="#!"><i class="bi-facebook"></i></a>
                                            <a class="px-2 fs-5 link-dark" href="#!"><i class="bi-linkedin"></i></a>
                                            <a class="px-2 fs-5 link-dark" href="#!"><i class="bi-youtube"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Blog preview section-->
            <section class="py-5">
                <div class="container px-5">
                    <h2 class="mb-4 fw-bolder fs-5">Featured Stories</h2>
                    <div class="row gx-5">
                        <div class="mb-5 col-lg-4">
                            <div class="border-0 shadow card h-100">
                                <img class="card-img-top" src="https://dummyimage.com/600x350/ced4da/6c757d" alt="..." />
                                <div class="p-4 card-body">
                                    <div class="mb-2 badge bg-primary bg-gradient rounded-pill">News</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><div class="mb-3 h5 card-title">Blog post title</div></a>
                                    <p class="mb-0 card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <div class="p-4 pt-0 bg-transparent card-footer border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                            <div class="small">
                                                <div class="fw-bold">Kelly Rowan</div>
                                                <div class="text-muted">March 12, 2023 &middot; 6 min read</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5 col-lg-4">
                            <div class="border-0 shadow card h-100">
                                <img class="card-img-top" src="https://dummyimage.com/600x350/adb5bd/495057" alt="..." />
                                <div class="p-4 card-body">
                                    <div class="mb-2 badge bg-primary bg-gradient rounded-pill">Media</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><div class="mb-3 h5 card-title">Another blog post title</div></a>
                                    <p class="mb-0 card-text">This text is a bit longer to illustrate the adaptive height of each card. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <div class="p-4 pt-0 bg-transparent card-footer border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                            <div class="small">
                                                <div class="fw-bold">Josiah Barclay</div>
                                                <div class="text-muted">March 23, 2023 &middot; 4 min read</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5 col-lg-4">
                            <div class="border-0 shadow card h-100">
                                <img class="card-img-top" src="https://dummyimage.com/600x350/6c757d/343a40" alt="..." />
                                <div class="p-4 card-body">
                                    <div class="mb-2 badge bg-primary bg-gradient rounded-pill">News</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><div class="mb-3 h5 card-title">The last blog post title is a little bit longer than the others</div></a>
                                    <p class="mb-0 card-text">Some more quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <div class="p-4 pt-0 bg-transparent card-footer border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                            <div class="small">
                                                <div class="fw-bold">Evelyn Martinez</div>
                                                <div class="text-muted">April 2, 2023 &middot; 10 min read</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5 text-end mb-xl-0">
                        <a class="text-decoration-none" href="#!">
                            More stories
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer-->
        <footer class="py-4 mt-auto bg-dark">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="m-0 text-white small">Copyright &copy; Your Website 2023</div></div>
                    <div class="col-auto">
                        <a class="link-light small" href="#!">Privacy</a>
                        <span class="mx-1 text-white">&middot;</span>
                        <a class="link-light small" href="#!">Terms</a>
                        <span class="mx-1 text-white">&middot;</span>
                        <a class="link-light small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>
