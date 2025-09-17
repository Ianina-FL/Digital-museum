<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Museum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/custom.css?v=<?php echo time(); ?>">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Digital Museum</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#exhibits">Exhibits</a></li>
                    <li class="nav-item"><a class="nav-link" href="#schedule">Schedule</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tickets">Tickets</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero">
        <div class="hero-overlay">
            <h1 class="display-3">Experience the Future of Art</h1>
            <p class="lead">Explore our collection of digital marvels.</p>
            <a href="#tickets" class="btn btn-primary btn-lg">Get Tickets</a>
        </div>
    </header>

    <section id="exhibits" class="section">
        <div class="container">
            <h2 class="text-center mb-5">Featured Exhibits</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="exhibit-card">
                        <img src="https://picsum.photos/seed/exhibit1/800/600" alt="Abstract digital sculpture with flowing lights.">
                        <div class="card-body">
                            <h5 class="card-title">Luminous Forms</h5>
                            <p class="card-text">A dance of light and shadow, sculpted in the digital realm.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="exhibit-card">
                        <img src="https://picsum.photos/seed/exhibit2/800/600" alt="Interactive holographic display of ancient artifacts.">
                        <div class="card-body">
                            <h5 class="card-title">Holo-Relics</h5>
                            <p class="card-text">Ancient history brought to life through interactive holography.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="exhibit-card">
                        <img src="https://picsum.photos/seed/exhibit3/800/600" alt="A virtual reality experience of a surreal landscape.">
                        <div class="card-body">
                            <h5 class="card-title">VR Dreams</h5>
                            <p class="card-text">Step into another reality and explore breathtaking virtual worlds.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="full-width-section" style="background-image: url('https://d3hjf51r9j54j7.cloudfront.net/wp-content/uploads/sites/9/2023/12/webversion-1USE.jpg');">
        <div class="overlay-content">
            <h2>Section 1 Title</h2>
            <p>Description for section 1.</p>
        </div>
    </section>

    <section class="full-width-section" style="background-image: url('https://afar.brightspotcdn.com/dims4/default/850f1aa/2147483647/strip/false/crop/1600x1067+0+0/resize/1486x991!/quality/90/?url=https%3A%2F%2Fk3-prod-afar-media.s3.us-west-2.amazonaws.com%2Fbrightspot%2Faa%2F3a%2F506c18cc148ac2e4a2cba8f8f42a%2Foriginal-14787.jpg');">
        <div class="overlay-content">
            <h2>Section 2 Title</h2>
            <p>Description for section 2.</p>
        </div>
    </section>

    <section class="full-width-section" style="background-image: url('https://cdn.i-scmp.com/sites/default/files/d8/images/methode/2020/06/11/ec246d82-252f-11ea-9939-941d1970c7f1_image_hires_164843.jpg');">
        <div class="overlay-content">
            <h2>Section 3 Title</h2>
            <p>Description for section 3.</p>
        </div>
    </section>

    <footer class="py-4 text-center text-muted">
        <div class="container">
            <p>&copy; 2025 Digital Museum. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js?v=<?php echo time(); ?>"></script>
</body>
</html>