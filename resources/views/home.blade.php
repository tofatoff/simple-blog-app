@extends('layouts.main')

@section('contents')

<!-- Heroes/Jumbotron -->

    <section id="overview">
        <div class="jumbotron mt-5">
            <img src="img/58c7d1.jpeg" alt="picture of me" width="200" class="rounded-circle float-end" />
            <h1 class="display-4">Hello, world!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        </div>
    </section>

    <!-- End of Heroes/Jumbotron -->

    <!-- Education -->

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#f3f4f5"
        fill-opacity="1"
        d="M0,288L30,250.7C60,213,120,139,180,96C240,53,300,43,360,64C420,85,480,139,540,144C600,149,660,107,720,85.3C780,64,840,64,900,96C960,128,1020,192,1080,229.3C1140,267,1200,277,1260,256C1320,235,1380,181,1410,154.7L1440,128L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"
      ></path>
    </svg>

    <section id="about">
        <div class="container">
            <div class="row text-center mb-5">
                <h2>About me</h2>
            </div>
            <div class="row justify-content-around">
                <div class="col-4 fs-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti tenetur aspernatur molestias voluptates quasi ab temporibus libero illum, ad minus.</div>
                <div class="col-4 fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur facere at mollitia. Numquam aspernatur quasi quis sint tenetur dolores deserunt?</div>
            </div>
        </div>
    </section>

    <!-- End of Education -->

    <!-- Skills -->

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#f3f4f5"
        fill-opacity="1"
        d="M0,0L30,10.7C60,21,120,43,180,48C240,53,300,43,360,64C420,85,480,139,540,138.7C600,139,660,85,720,96C780,107,840,181,900,213.3C960,245,1020,235,1080,213.3C1140,192,1200,160,1260,133.3C1320,107,1380,85,1410,74.7L1440,64L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"
      ></path>
    </svg>

    <section id="skills">
        <div class="container">
            <div class="row text-center mb-5">
                <h2>Skills</h2>
            </div>
            <div class="row justify-content-around">
                <div class="col-4 fs-5">
                    <div class="card" style="width: 18rem">
                        <img src="..." class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Color slider</h5>
                            <p class="card-text">A HTML page to select the desired color with RGB code</p>
                            <a href="./colorslider/colorslider.html" class="btn btn-primary">Visit color slider</a>
                        </div>
                    </div>
                    .
                </div>
                <div class="col-4 fs-5">
                    <div class="card" style="width: 18rem">
                        <img src="..." class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End of Skills -->

    <!-- Contact me -->

    <section id="contact">
        <div class="row text-center mb-5">
            <h2>Know me more</h2>
        </div>
        <div class="row justify-content-around">
            <div class="col text-center">
                <button type="button" class="btn btn-danger btn-lg">
            <a href="mailto:mail.mstofa@gmail.com" class="text-white" style="text-decoration: none"><i class="bi bi-envelope"></i> Mail</a>
          </button>
            </div>
            <div class="col text-center">
                <button type="button" class="btn btn-success btn-lg">
            <a href="https://wa.me/6281703447666" class="text-white" style="text-decoration: none"><i class="bi bi-whatsapp"></i> WhatsApp</a>
          </button>
            </div>
            <div class="col text-center">
                <button type="button" class="btn btn-primary btn-lg">
            <a href="https://linkedin.com/in/msholikhintofa" class="text-white" style="text-decoration: none"><i class="bi bi-linkedin"></i> LinkedIn</a>
          </button>
            </div>
        </div>
    </section>

    <!-- End of contact me -->

    <!-- Credits -->

    <div class="text-center mt-5">
        <p>Credit to Sandhika Galih (Owner of "Web Programming UNPAS" YouTube Channel).</p>
    </div>

    <div class="text-center">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/LkR-9Z1sle8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <!-- End of credits -->

@endsection