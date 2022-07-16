<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/gallery.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <nav class="navbar fixed-top navbar-expand-lg navbar-light scrolling-navbar">
    <a class="navbar-brand" href="#"><strong>WE TOUR</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/"">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="gallery">Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
        </ul>
    </div>
</nav>

    <div class="photo-gallery" style="background-size:contain;background-image:url(https://goindonesiatour.id/wp-content/uploads/2018/08/indonesia-map1.jpg)">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Gallery Bantul</h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
            </div>
            <div class="row photos">
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/1.jpg" data-lightbox="photos"><img class="img-fluid rounded" src="img/1.jpg"></a></div>

                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/13.jpg" data-lightbox="photos"><img class="img-fluid rounded" src="img/13.jpg"></a></div>

                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/3.jpg" data-lightbox="photos"><img class="img-fluid rounded" src="img/3.jpg"></a></div>

                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/8.jpg" data-lightbox="photos"><img class="img-fluid rounded" src="img/8.jpg"></a></div>

                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/16.jpg" data-lightbox="photos"><img class="img-fluid rounded" src="img/16.jpg"></a></div>
                
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/6.jpg" data-lightbox="photos"><img class="img-fluid rounded" src="img/6.jpg"></a></div>

                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/12.jpg" data-lightbox="photos"><img class="img-fluid rounded" src="img/12.jpg"></a></div>

                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/7.jpg" data-lightbox="photos"><img class="img-fluid rounded" src="img/7.jpg"></a></div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</body>
<section>
  @include('./components/Footer')
</section>

</html>