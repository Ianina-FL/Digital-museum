<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Museum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/custom.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css"/>
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
                    <div class="exhibit-card hidden-left">
                        <img src="https://media.istockphoto.com/id/1367089822/vector/blue-glowing-swirl-light-effect-magic-abstract-frame-power-energy-of-circular-element.jpg?s=612x612&w=0&k=20&c=d5kDHchWlUENE1MtqJiiUmCt7SNEYQGlU6y0JvpKAP0=" alt="Abstract digital sculpture with flowing lights.">
                        <div class="card-body">
                            <h5 class="card-title">Luminous Forms</h5>
                            <p class="card-text">A dance of light and shadow, sculpted in the digital realm.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="exhibit-card hidden-bottom">
                        <img src="https://fydn.imgix.net/m/x1000/1f3fcb96-543b-4e38-929d-ad1e13a46c61.jpg?q=75&auto=format,compress&w=480&dpr=1" alt="Interactive holographic display of ancient artifacts." class="holo-relics-img">
                        <div class="card-body">
                            <h5 class="card-title">Holo relics</h5>
                            <p class="card-text">Ancient history brought to life through interactive holography.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="exhibit-card hidden-right">
                        <img src="https://media.licdn.com/dms/image/v2/D4E12AQHegyw27WmVOA/article-cover_image-shrink_720_1280/article-cover_image-shrink_720_1280/0/1669022700627?e=2147483647&v=beta&t=sCWZCe6juhtnPhHwKvSshY07hUoloLMaSj_I6XxoeqE" alt="A virtual reality experience of a surreal landscape.">
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

    <section id="tickets" class="section">
        <div class="container">
            <h2 class="text-center mb-5">Buy Tickets</h2>
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="ticket-form-container">
                        <form>
                            <div class="mb-3">
                                <label for="ticket-type" class="form-label">Tariff</label>
                                <select class="form-select" id="ticket-type" aria-label="Select ticket type">
                                    <option selected>Choose tariff...</option>
                                    <option value="adult">Adult</option>
                                    <option value="child">Child</option>
                                    <option value="family">Family</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="ticket-quantity" class="form-label">Number of tickets</label>
                                <select class="form-select" id="ticket-quantity" aria-label="Select number of tickets">
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="visit-date" class="form-label">Date of visit</label>
                                <input type="date" class="form-control" id="visit-date">
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary btn-lg">Buy Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-4 text-center text-muted">
        <div class="container">
            <p>&copy; 2025 Digital Museum. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="assets/js/main.js?v=<?php echo time(); ?>"></script>
</body>
</html>