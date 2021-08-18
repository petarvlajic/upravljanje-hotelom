<!DOCTYPE html>
<html lang="en">

<head>
    @stack('css')
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--CSSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/app.css" />
    <title>AG Hotel</title>
</head>

<body>
    <!--Header-->
    <div class="background ">
        <div class="container">
            <!--Navbar-->
            <nav class="navbar navbar-expand-lg text-white">
                <a class="navbar-brand text-white" href="#">AG Hotel</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link text-white active" href="#">Home <span
                                class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link text-white" href="#">Features</a>
                        <a class="nav-item nav-link text-white" href="#">Pricing</a>
                        <a class="nav-item nav-link text-white disabled" href="#">Disabled</a>
                    </div>
                </div>
            </nav>
            <!--Hero-->
            <div class="hero jumbotron text-center text-white bg-transparent">
                <h1 class="display-4">Dobro dosli u AG Hotel!</h1>
                <p class="lead">
                    Proverite najbolji kvalitet i tradiciju koja traje 20 godina!
                </p>
                <hr class="my-4" />

                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="{{route('dashboard')}}" role="button">Rezervisi odmah!</a>
                </p>
            </div>
        </div>
    </div>
    <!--Landing-->
    <div class="container">
        <h2 class="text-center m-4">Nudimo vam</h2>
        <hr class="my-4" />
        <div class="row mx-3 justify-content-between">
            <!--First Card-->
            <div class="card text-center col-md-3 col-lg-4 col-xl-3 mx-auto mb-4" style="width: 18rem">
                <img src="https://media.istockphoto.com/photos/hotel-room-suite-with-view-picture-id627892060?k=6&m=627892060&s=612x612&w=0&h=lVIi3QTDsZ1UDnMAjuy8ob9Zm6sBPCZ84x_e_OUl7Wk="
                    class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Savrsen smestaj</h5>
                    <p class="card-text">
                        Some quick example text to build on the card title and make up the
                        bulk of the card's content.
                    </p>
                </div>
            </div>
            <!--First Card-->
            <div class="card text-center col-md-3 col-lg-4 col-xl-3 mx-auto mb-4" style="width: 18rem">
                <img src="https://media.cntraveler.com/photos/5b22bfdff04a775484b99dfc/5:4/w_2810,h_2248,c_limit/Alo-Restaurant__2018_Raffi-Photo-2.jpg"
                    class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Tradicionalnu hranu</h5>
                    <p class="card-text">
                        Some quick example text to build on the card title and make up the
                        bulk of the card's content.
                    </p>
                </div>
            </div>
            <!--First Card-->
            <div class="card text-center col-md-3 col-lg-4 col-xl-3 mx-auto mb-4" style="width: 18rem">
                <img src="https://cocotravel.rs/wp-content/uploads/2019/03/GetImage.jpg" class="card-img-top"
                    alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Spa & Wellnes</h5>
                    <p class="card-text">
                        Some quick example text to build on the card title and make up the
                        bulk of the card's content.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Form -->
    <div class="background-form">
        <div class="container">
            <div class="row mx-3">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mt-4 mb-4">
                    <h3>
                        Pretplatite se na kako ne biste propustili najnovije akcije i
                        ponude
                    </h3>
                </div>
                <div class="form-input col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <input type="email" name="" id="" placeholder="Unesi Email" />
                    <input type="submit" value="Prijavi se" class="pdl-4" />
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    
        <footer class="text-center text-lg-start bg-light text-muted">
            <!-- Section: Social media -->
            <section class="
            d-flex
            justify-content-around 
            p-4
            border-bottom
          ">
                <!-- Left -->
                <div class="me-5 d-none d-lg-block">
                    <span>Get connected with us on social networks:</span>
                </div>
                <!-- Left -->

                <!-- Right -->
                <div>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
                <!-- Right -->
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                <i class="fas fa-gem me-3"></i>AG HOTEL
                            </h6>
                            <p>
                                Here you can use rows and columns to organize your footer
                                content. Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit.
                            </p>
                        </div>

                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">Useful links</h6>
                            <p>
                                <a href="#!" class="text-reset">Pricing</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Settings</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Orders</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Help</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                            <p><i class="fas fa-home me-3"></i> Beograd, BG 11211, SRB</p>
                            <p>
                                <i class="fas fa-envelope me-3"></i>
                                vlajic.p27@gmail.com
                            </p>
                            <p><i class="fas fa-phone me-3"></i> + 381 63 129 1415</p>
                            <p><i class="fas fa-print me-3"></i> + 381 63 129 1415</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05)">
                © 2021 Copyright:
                <a class="text-reset fw-bold" href="https://github.com/petarvlajicS3219">Petar Vlajic</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    
</body>

</html>