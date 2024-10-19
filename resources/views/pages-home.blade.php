@section('title', 'Home')

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="<?php echo asset('assets/css/styles.css'); ?>">
    <title>Surfers Co.</title>
</head>
<body>
    <header>
        <div class="container-fluid" id="background_header_image">
            <div class="d-flex justify-content-between align-items-center p-3">
                <!-- Brand/logo -->
                <div>
                    <strong>Surfers Co.</strong>
                </div>

                <div>
                    <nav class="navbar navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Boards</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Accessories</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Technology</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Team</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Dealers</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>

                <div>
                    <a href="#" target="_blank" class="mx-2"><i class="fa-brands fa-facebook fa-2x"></i></a>
                    <a href="#" target="_blank" class="mx-2"><i class="fa-brands fa-instagram fa-2x"></i></a>
                    <a href="#" target="_blank" class="mx-2"><i class="fa-regular fa-envelope fa-2x"></i></a>
                </div>
            </div>
            <div class="py-5 mt-5">
                <h3 class="text-center">Ride every wave as if it's your last</h3>
                <h5 class="text-center text-white">We love the motion of the ocean</h5> 
            </div>
        </div>
    </header> 

    <main>  
        <div class="card px-5" id="top_middle_section">
            <div class="card-body d-flex flex-md-row">
                <div class="col-6 d-flex">
                    <div class="col-9 pe-2">
                        <img src="{{ asset('assets/img/middle_section/bigOne1.png') }}" class="img-fluid mb-2 full-size" alt="Big Image">
                    </div>
                    <div class="col-3">
                        <div class="d-flex flex-column">
                            <img src="{{ asset('assets/img/middle_section/preview1.png') }}" class="img-fluid mb-2 preview" alt="Preview 1">
                            <img src="{{ asset('assets/img/middle_section/preview2.png') }}" class="img-fluid mb-2 preview" alt="Preview 2">
                            <img src="{{ asset('assets/img/middle_section/preview3.png') }}" class="img-fluid preview" alt="Preview 3">
                        </div>
                    </div>
                </div>
                <div class="col-6 mt-3 mt-md-0">
                    <div class="content">
                        <h6>JR Surfboards The Donny Stoker Yellow/Green Rail Fade</h6>
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                    </div>
                    <div class="container">
                        <div class="col-md-12">
                            <div class="nav-align-top nav-tabs-shadow mb-6 mt-3">
                                <ul class="nav nav-tabs card-header-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="form-tabs-commands-tab" data-bs-toggle="tab"
                                            data-bs-target="#form-tabs-commands" type="button" role="tab"
                                            aria-controls="form-tabs-commands" aria-selected="true">Description</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="form-tabs-advanced-tab" data-bs-toggle="tab"
                                            data-bs-target="#form-tabs-advanced" type="button" role="tab"
                                            aria-controls="form-tabs-advanced" aria-selected="false">Features</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="form-tabs-configuration-tab" data-bs-toggle="tab"
                                            data-bs-target="#form-tabs-configuration" type="button" role="tab"
                                            aria-controls="form-tabs-configuration"
                                            aria-selected="false">Dimensions</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content mt-3">
                                <div class="tab-pane fade show active" id="form-tabs-commands" role="tabpanel"
                                    aria-labelledby="form-tabs-commands-tab">
                                    <p>Easy to ride, care free surfing craft that's fun to everone, paddleswell, super fast down the line and great for any level of surfing depending on who rides it.
                                       The Donny Stoker, a rework on design from stokesys first ever pro model. 
                                       A super easy to surf fun board. The Donny Stoker is a board for total freesurfing expression. 
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="form-tabs-advanced" role="tabpanel"
                                    aria-labelledby="form-tabs-advanced-tab">
                                    <p>The flying fish features a fuller outline and rail section that allows for maximum stability, 
                                        speed and control to glide on through those fatter waves. 
                                        The Flying Fish in its larger sizes are ideal for a confident beginner but the shape won’t disappoint 
                                        even the most experienced surfers.  This retro fish is constructed with a bamboo eco sandwich with timber on 
                                        both the deck and bottom of the board increasing its strength and durability. The double concave through the 
                                        tail combined with thruster or quad options provides functionality in a variety of surf conditions. 
                                        These boards are a must have for any quiver and will have you grinning ear to ear as you fly down the line.</p>
                                </div>
                                <div class="tab-pane fade" id="form-tabs-configuration" role="tabpanel"
                                    aria-labelledby="form-tabs-configuration-tab">
                                    <p>The Zephyr offers superior speed through its plan shape and will see you flying down the 
                                        line with increase speed and precision than you ever would have imagined.  
                                        Its shape features a generous amount of volume for its size for added paddle power and increased flow. 
                                        The plan shape has been refined and tweaked over the past year with the introduction of S*LAB’s Computational 
                                        Fluid Dynamics testing (CFD). This technology has helped fine tune the boards shape to ensure maximum speed, 
                                        manoeuvrability and surfing capability.</p>
                                </div>
                            </div>
                            <div>
                                <strong>$499.99</strong>
                                <button>Buy now</button>
                                <a>View all boards</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="px-5" id="middle_section">
            <div class="d-flex row">
                <div class="col-6 p-5">
                    <div class="card">
                        <div class="card-header">
                            <strong>We are surfers co.</strong>
                            <i class="fa-solid fa-x"></i>
                        </div>
                        <div class="card-body">
                            <p>Oat cake chupa chups dragée donut toffee. Sweet cotton candy jelly beans macaroon gummies cupcake gummi 
                            bears cake chocolate. Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake. 
                            Sweet roll icing sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding jelly jelly-o tart brownie jelly.
                            </p>
                            <a>Read more</a>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
                <div class="col-6 pt-3 mt-3 pb-0 mb-0">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/X9tU8ybzcFs" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="bg-light px-5">
            <div class="d-flex row">
                <div class="col-6">
                    <div class="d-flex flex-column">
                        <div>
                            <div class="col-12">
                                <img src="{{ asset('assets/img/background/footer_section1.jpg') }}" class="img-fluid mb-2 footer_section" alt="Preview 1">
                                <img src="{{ asset('assets/img/background/footer_section2.jpg') }}" class="img-fluid mb-2 footer_section" alt="Preview 2">
                            </div>
                            <div class="col-12">
                                <img src="{{ asset('assets/img/background/footer_section3.jpg') }}" class="img-fluid footer_section" alt="Preview 3">
                                <img src="{{ asset('assets/img/background/footer_section4.jpg') }}" class="img-fluid footer_section" alt="Preview 3">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 p-3">
                    <div class="card">
                        <div class="card-header">
                            <h4>Contact Us</h4>
                        </div>
                        <div class="card-body">
                            <div id="input-form">
                                {{ csrf_field() }}
                                <input class="col-12" id="name" placeholder="Name" type="text" required>
                                <input class="col-12" id="email" placeholder="Email" type="email" required>
                                <input class="col-12" id="birth_place" placeholder="Birth Place" type="text" required>
                                <input class="col-12" id="birthday" placeholder="Birthday" type="date" required>
                                <textarea class="col-12" id="message" placeholder="Your message here..." rows="4" required></textarea>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" onclick="sendData()">Send</button> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <footer id="footer" class="bg-dark py-4">
        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="container">
                <div class="collapse navbar-collapse" id="footerContent">
                    <div class="ms-auto">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <ul class="navbar-nav mb-2 mb-md-0">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Boards</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Accessories</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Blog</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-6">
                                <ul class="navbar-nav mb-2 mb-md-0">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Technology</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Team</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Dealers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </footer>




    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS (e Popper.js per i tooltip e i dropdown) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo asset('assets/js/home.js'); ?>"></script>
</body>
</html>


