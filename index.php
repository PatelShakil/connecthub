<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>ConnectHub|Home</title>
</head>

<body>
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/connecthub/">ConnectHub</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/connecthub/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/connecthub/about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/connecthub/services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/connecthub/contact.php">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Carousel -->
    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/slider1.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-font-bolder">We will guide you carefully
                            through every step of the way
                            to study in CANADA!</h3>
                        <p>Study in abroad is easy through <a href="/connecthub/index.php">@ConnectHub</a></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/slider2.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>We will guide you carefully
                            through every step of the way
                            to study in CANADA!</h3>
                        <p>Study in abroad is easy through <a href="/connecthub/index.php">@ConnectHub</a></p>

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/2400x600/?school,bachelor,college,canada,university,study" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>We will guide you carefully
                            through every step of the way
                            to study in CANADA!</h3>
                        <p>Study in abroad is easy through <a href="/connecthub/index.php">@ConnectHub</a>
                            <oa>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- articles based on studing in abroad -->
    <p class="text-center font-weight-bold display-4">Our Services</p>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row">
                    <div class="col md-4 my-3 ml-2">
                        <div class="card" style="width: 18rem;">
                            <img src="assets/admission.png" class="rounded" alt="admission">
                            <div class="card-body">
                                <h5 class="card-title">Admission</h5>
                                <p class="card-text">Admission open for every countries students</p>
                                <a href="pages/admission.php" class="btn btn-primary">More...</a>
                            </div>
                        </div>

                    </div>
                    <div class="col md-4 my-3 ml-2">
                        <div class="card" style="width: 18rem;">
                            <img src="assets/accomodation.png" class="rounded" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Accomodation</h5>
                                <p class="card-text">Homestay Solution.</p>
                                <a href="pages/accomodation.php" class="btn btn-primary">More...</a>
                            </div>
                        </div>
                    </div>
                    <div class="col md-4 my-3 ml-2">
                        <div class="card" style="width: 18rem;">
                            <img src="assets/additional_services.png" class="rounded" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Additional Services</h5>
                                <p class="card-text">Check out our special services.</p>
                                <a href="pages/additionalservices.php" class="btn btn-primary">More...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php include 'footer.php' ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>