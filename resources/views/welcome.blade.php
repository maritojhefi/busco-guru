@extends('layouts.app')
@section('login')

<nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
    <div class="container">
      <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" href="../../pages/dashboards/default.html">
        BUSCO-GURU
      </a>
      <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>
      <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0 ps ps--active-y" id="navigation">
        
        <ul class="navbar-nav d-lg-block d-none">
          <li class="nav-item">
            <a href="{{route('login')}}" class="btn btn-sm  bg-white  btn-round mb-0 me-1" >Iniciar Sesion</a>
          </li>
        </ul>
      <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 39px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 3px;"></div></div></div>
    </div>
  </nav>
    <!-- End Navbar -->
    <div class="page-header bg-gradient-primary  position-relative m-3 border-radius-xl">
      
      <div class="container pb-lg-9 pb-10 pt-7 postion-relative z-index-2">
        <div class="row">
          <div class="col-md-6 mx-auto text-center">
            <h3 class="text-white">Que hacemos?</h3>
            <p class="text-white">Todos tus pedidos con asistencia inmediata y seguridad!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-7 mx-auto text-center">
            <div class="nav-wrapper mt-5 position-relative z-index-2">
              <ul class="nav nav-pills nav-fill p-1 flex-row" id="tabs-pricing" role="tablist">
                <li class="nav-item">
                  <a class="nav-link mb-0 active" id="tabs-iconpricing-tab-1" data-bs-toggle="tab" href="#monthly" role="tab" aria-controls="monthly" aria-selected="true">
                    Del exterior a tu puerta!
                  </a>
                </li>
                
              <div class="moving-tab position-absolute nav-link" style="padding: 0px; transition: all 0.5s ease 0s; transform: translate3d(0px, 0px, 0px); width: 144px;"><a class="nav-link mb-0 active" id="tabs-iconpricing-tab-1" data-bs-toggle="tab" href="#monthly" role="tab" aria-controls="monthly" aria-selected="true">-</a></div></ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mt-n8">
      <div class="container">
        <div class="tab-content tab-space">
          <div class="tab-pane active" id="monthly">
            <div class="row">
              <div class="col-lg-4 mb-lg-0 mb-4">
                <div class="card">
                  <div class="card-header text-center pt-4 pb-3">
                    <span class="badge rounded-pill bg-light text-dark">LOGISTICA</span>
                    <h1 class="font-weight-bold mt-2">
                      <small>$</small>59
                    </h1>
                  </div>
                  <div class="card-body text-lg-start text-center pt-0">
                    <div class="d-flex justify-content-lg-start justify-content-center p-2">
                      <div class="icon icon-shape icon-xs rounded-circle bg-gradient-success shadow text-center">
                        <i class="fas fa-check opacity-10" aria-hidden="true"></i>
                      </div>
                      <div>
                        <span class="ps-3">2 team members</span>
                      </div>
                    </div>
                    <div class="d-flex justify-content-lg-start justify-content-center p-2">
                      <div class="icon icon-shape icon-xs rounded-circle bg-gradient-success shadow text-center">
                        <i class="fas fa-check opacity-10" aria-hidden="true"></i>
                      </div>
                      <div>
                        <span class="ps-3">20GB Cloud storage </span>
                      </div>
                    </div>
                    <div class="d-flex justify-content-lg-start justify-content-center p-2">
                      <div class="icon icon-shape icon-xs rounded-circle bg-gradient-secondary shadow text-center">
                        <i class="fas fa-minus" aria-hidden="true"></i>
                      </div>
                      <div>
                        <span class="ps-3">Integration help </span>
                      </div>
                    </div>
                    <div class="d-flex justify-content-lg-start justify-content-center p-2">
                      <div class="icon icon-shape icon-xs rounded-circle bg-gradient-secondary shadow text-center">
                        <i class="fas fa-minus" aria-hidden="true"></i>
                      </div>
                      <div>
                        <span class="ps-3">Sketch Files </span>
                      </div>
                    </div>
                    <div class="d-flex justify-content-lg-start justify-content-center p-2">
                      <div class="icon icon-shape icon-xs rounded-circle bg-gradient-secondary shadow text-center">
                        <i class="fas fa-minus" aria-hidden="true"></i>
                      </div>
                      <div>
                        <span class="ps-3">API Access </span>
                      </div>
                    </div>
                    <div class="d-flex justify-content-lg-start justify-content-center p-2">
                      <div class="icon icon-shape icon-xs rounded-circle bg-gradient-secondary shadow text-center">
                        <i class="fas fa-minus" aria-hidden="true"></i>
                      </div>
                      <div>
                        <span class="ps-3">Complete documentation </span>
                      </div>
                    </div>
                    <a href="javascript:;" class="btn btn-icon bg-gradient-dark d-lg-block mt-3 mb-0">
                      Join
                      <i class="fas fa-arrow-right ms-1" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 mb-lg-0 mb-4">
                <div class="card">
                  <div class="card-header text-center pt-4 pb-3">
                    <span class="badge rounded-pill bg-light text-dark">ENVIO SEGURO</span>
                    <h1 class="font-weight-bold mt-2">
                      <small>$</small>89
                    </h1>
                  </div>
                  <div class="card-body text-lg-start text-center pt-0">
                    <div class="d-flex justify-content-lg-start justify-content-center p-2">
                      <div class="icon icon-shape icon-xs rounded-circle bg-gradient-success shadow text-center">
                        <i class="fas fa-check opacity-10" aria-hidden="true"></i>
                      </div>
                      <div>
                        <span class="ps-3">10 team members</span>
                      </div>
                    </div>
                    <div class="d-flex justify-content-lg-start justify-content-center p-2">
                      <div class="icon icon-shape icon-xs rounded-circle bg-gradient-success shadow text-center">
                        <i class="fas fa-check opacity-10" aria-hidden="true"></i>
                      </div>
                      <div>
                        <span class="ps-3">40GB Cloud storage </span>
                      </div>
                    </div>
                    <div class="d-flex justify-content-lg-start justify-content-center p-2">
                      <div class="icon icon-shape icon-xs rounded-circle bg-gradient-success shadow text-center">
                        <i class="fas fa-check opacity-10" aria-hidden="true"></i>
                      </div>
                      <div>
                        <span class="ps-3">Integration help </span>
                      </div>
                    </div>
                    <div class="d-flex justify-content-lg-start justify-content-center p-2">
                      <div class="icon icon-shape icon-xs rounded-circle bg-gradient-success shadow text-center">
                        <i class="fas fa-check opacity-10" aria-hidden="true"></i>
                      </div>
                      <div>
                        <span class="ps-3">Sketch Files </span>
                      </div>
                    </div>
                    <div class="d-flex justify-content-lg-start justify-content-center p-2">
                      <div class="icon icon-shape icon-xs rounded-circle bg-gradient-secondary shadow text-center">
                        <i class="fas fa-minus" aria-hidden="true"></i>
                      </div>
                      <div>
                        <span class="ps-3">API Access </span>
                      </div>
                    </div>
                    <div class="d-flex justify-content-lg-start justify-content-center p-2">
                      <div class="icon icon-shape icon-xs rounded-circle bg-gradient-secondary shadow text-center">
                        <i class="fas fa-minus" aria-hidden="true"></i>
                      </div>
                      <div>
                        <span class="ps-3">Complete documentation </span>
                      </div>
                    </div>
                    <a href="javascript:;" class="btn btn-icon bg-gradient-primary d-lg-block mt-3 mb-0">
                      Try Premium
                      <i class="fas fa-arrow-right ms-1" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 mb-lg-0 mb-4">
                <div class="card">
                  <div class="card-header text-center pt-4 pb-3">
                    <span class="badge rounded-pill bg-light text-dark">ADUANAS</span>
                    <h1 class="font-weight-bold mt-2">
                      <small>$</small>99
                    </h1>
                  </div>
                  <div class="card-body text-lg-start text-center pt-0">
                    <div class="d-flex justify-content-lg-start justify-content-center p-2">
                      <div class="icon icon-shape icon-xs rounded-circle bg-gradient-success shadow text-center">
                        <i class="fas fa-check opacity-10" aria-hidden="true"></i>
                      </div>
                      <div>
                        <span class="ps-3">Unlimited team members</span>
                      </div>
                    </div>
                    <div class="d-flex justify-content-lg-start justify-content-center p-2">
                      <div class="icon icon-shape icon-xs rounded-circle bg-gradient-success shadow text-center">
                        <i class="fas fa-check opacity-10" aria-hidden="true"></i>
                      </div>
                      <div>
                        <span class="ps-3">100GB Cloud storage </span>
                      </div>
                    </div>
                    <div class="d-flex justify-content-lg-start justify-content-center p-2">
                      <div class="icon icon-shape icon-xs rounded-circle bg-gradient-success shadow text-center">
                        <i class="fas fa-check opacity-10" aria-hidden="true"></i>
                      </div>
                      <div>
                        <span class="ps-3">Integration help </span>
                      </div>
                    </div>
                    <div class="d-flex justify-content-lg-start justify-content-center p-2">
                      <div class="icon icon-shape icon-xs rounded-circle bg-gradient-success shadow text-center">
                        <i class="fas fa-check opacity-10" aria-hidden="true"></i>
                      </div>
                      <div>
                        <span class="ps-3">Sketch Files </span>
                      </div>
                    </div>
                    <div class="d-flex justify-content-lg-start justify-content-center p-2">
                      <div class="icon icon-shape icon-xs rounded-circle bg-gradient-success shadow text-center">
                        <i class="fas fa-check opacity-10" aria-hidden="true"></i>
                      </div>
                      <div>
                        <span class="ps-3">API Access </span>
                      </div>
                    </div>
                    <div class="d-flex justify-content-lg-start justify-content-center p-2">
                      <div class="icon icon-shape icon-xs rounded-circle bg-gradient-success shadow text-center">
                        <i class="fas fa-check opacity-10" aria-hidden="true"></i>
                      </div>
                      <div>
                        <span class="ps-3">Complete documentation </span>
                      </div>
                    </div>
                    <a href="javascript:;" class="btn btn-icon bg-gradient-dark d-lg-block mt-3 mb-0">
                      Join
                      <i class="fas fa-arrow-right ms-1" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    <div class="container my-6">
      <div class="row">
        <div class="col-8 mx-auto text-center">
          <h6 class="opacity-5"> Miles de clientes confian en busco-guru</h6>
        </div>
      </div>
     
      <div class="row mt-8">
        <div class="col-md-6 mx-auto text-center">
          <h2>Preguntas Frecuentes</h2>
          <p>Encuentra las respuestas a las dudas mas comunes que nos hacen nuestros clientes.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10 mx-auto">
          <div class="accordion" id="accordionRental">
            <div class="accordion-item mb-3">
              <h5 class="accordion-header" id="headingOne">
                <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  How do I order?
                  <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                  <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                </button>
              </h5>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionRental">
                <div class="accordion-body text-sm opacity-8">
                  We’re not always in the position that we want to be at. We’re constantly growing. We’re constantly making mistakes. We’re constantly trying to express ourselves and actualize our dreams. If you have the opportunity to play this game
                  of life you need to appreciate every moment. A lot of people don’t appreciate the moment until it’s passed.
                </div>
              </div>
            </div>
            <div class="accordion-item mb-3">
              <h5 class="accordion-header" id="headingTwo">
                <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  How can i make the payment?
                  <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                  <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                </button>
              </h5>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionRental">
                <div class="accordion-body text-sm opacity-8">
                  It really matters and then like it really doesn’t matter. What matters is the people who are sparked by it. And the people who are like offended by it, it doesn’t matter. Because it's about motivating the doers. Because I’m here to follow my dreams and inspire other people to follow their dreams, too.
                  <br>
                  We’re not always in the position that we want to be at. We’re constantly growing. We’re constantly making mistakes. We’re constantly trying to express ourselves and actualize our dreams. If you have the opportunity to play this game of life you need to appreciate every moment. A lot of people don’t appreciate the moment until it’s passed.
                </div>
              </div>
            </div>
            <div class="accordion-item mb-3">
              <h5 class="accordion-header" id="headingThree">
                <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  How much time does it take to receive the order?
                  <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                  <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                </button>
              </h5>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionRental">
                <div class="accordion-body text-sm opacity-8">
                  The time is now for it to be okay to be great. People in this world shun people for being great. For being a bright color. For standing out. But the time is now to be okay to be the greatest you. Would you believe in what you believe in, if you were the only one who believed it?
                  If everything I did failed - which it doesn't, it actually succeeds - just the fact that I'm willing to fail is an inspiration. People are so scared to lose that they don't even try. Like, one thing people can't say is that I'm not trying, and I'm not trying my hardest, and I'm not trying to do the best way I know how.
                </div>
              </div>
            </div>
            <div class="accordion-item mb-3">
              <h5 class="accordion-header" id="headingFour">
                <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Can I resell the products?
                  <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                  <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                </button>
              </h5>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionRental">
                <div class="accordion-body text-sm opacity-8">
                  I always felt like I could do anything. That’s the main thing people are controlled by! Thoughts- their perception of themselves! They're slowed down by their perception of themselves. If you're taught you can’t do anything, you won’t do anything. I was taught I could do everything.
                  <br><br>
                  If everything I did failed - which it doesn't, it actually succeeds - just the fact that I'm willing to fail is an inspiration. People are so scared to lose that they don't even try. Like, one thing people can't say is that I'm not trying, and I'm not trying my hardest, and I'm not trying to do the best way I know how.
                </div>
              </div>
            </div>
            <div class="accordion-item mb-3">
              <h5 class="accordion-header" id="headingFifth">
                <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifth" aria-expanded="false" aria-controls="collapseFifth">
                  Where do I find the shipping details?
                  <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                  <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                </button>
              </h5>
              <div id="collapseFifth" class="accordion-collapse collapse" aria-labelledby="headingFifth" data-bs-parent="#accordionRental">
                <div class="accordion-body text-sm opacity-8">
                  There’s nothing I really wanted to do in life that I wasn’t able to get good at. That’s my skill. I’m not really specifically talented at anything except for the ability to learn. That’s what I do. That’s what I’m here for. Don’t be afraid to be wrong because you can’t learn anything from a compliment.
                  I always felt like I could do anything. That’s the main thing people are controlled by! Thoughts- their perception of themselves! They're slowed down by their perception of themselves. If you're taught you can’t do anything, you won’t do anything. I was taught I could do everything.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <footer class="footer py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mb-4 mx-auto text-center">
            <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Company
            </a>
            <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              About Us
            </a>
            <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Team
            </a>
            <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Products
            </a>
            <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Blog
            </a>
            <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Pricing
            </a>
          </div>
          <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
            <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
              <span class="text-lg fab fa-dribbble" aria-hidden="true"></span>
            </a>
            <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
              <span class="text-lg fab fa-twitter" aria-hidden="true"></span>
            </a>
            <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
              <span class="text-lg fab fa-instagram" aria-hidden="true"></span>
            </a>
            <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
              <span class="text-lg fab fa-pinterest" aria-hidden="true"></span>
            </a>
            <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
              <span class="text-lg fab fa-github" aria-hidden="true"></span>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-8 mx-auto text-center mt-1">
            <p class="mb-0 text-secondary">
              Copyright © <script>
                document.write(new Date().getFullYear())
              </script>2021 Soft by Creative Tim.
            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <div class="fixed-plugin ps">
      <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
        <i class="fa fa-cog py-2" aria-hidden="true"> </i>
      </a>
      <div class="card shadow-lg blur">
        <div class="card-header pb-0 pt-3  bg-transparent ">
          <div class="float-start">
            <h5 class="mt-3 mb-0">Soft UI Configurator</h5>
            <p>See our dashboard options.</p>
          </div>
          <div class="float-end mt-4">
            <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
              <i class="fa fa-close" aria-hidden="true"></i>
            </button>
          </div>
          <!-- End Toggle Button -->
        </div>
        <hr class="horizontal dark my-1">
        <div class="card-body pt-sm-3 pt-0">
          <!-- Sidebar Backgrounds -->
          <div>
            <h6 class="mb-0">Sidebar Colors</h6>
          </div>
          <a href="javascript:void(0)" class="switch-trigger background-color">
            <div class="badge-colors my-2 text-start">
              <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
              <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
              <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
              <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
              <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
              <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
            </div>
          </a>
          <!-- Sidenav Type -->
          <div class="mt-3">
            <h6 class="mb-0">Sidenav Type</h6>
            <p class="text-sm">Choose between 2 different sidenav types.</p>
          </div>
          <div class="d-flex">
            <button class="btn bg-gradient-primary w-100 px-3 mb-2 active disabled" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
            <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2 disabled" data-class="bg-white" onclick="sidebarType(this)">White</button>
          </div>
          <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
          <!-- Navbar Fixed -->
          <div class="mt-3">
            <h6 class="mb-0">Navbar Fixed</h6>
          </div>
          <div class="form-check form-switch ps-0">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
          <hr class="horizontal dark mb-1">
          <div class="mt-2">
            <h6 class="mb-0">Sidenav Mini</h6>
          </div>
          <div class="form-check form-switch ps-0">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarMinimize" onclick="navbarMinimize(this)">
          </div>
          <hr class="horizontal dark my-sm-4">
          <a class="btn bg-gradient-info w-100" href="https://www.creative-tim.com/product/soft-ui-dashboard-pro">Buy now</a>
          <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/soft-ui-dashboard">Free demo</a>
          <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/soft-ui-dashboard">View documentation</a>
          <div class="w-100 text-center">
            <span></span>
            <h6 class="mt-3">Thank you for sharing!</h6>
            <a href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Dashboard%20PRO%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard-pro" class="btn btn-dark mb-0 me-2" target="_blank">
              <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
            </a>
            <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard-pro" class="btn btn-dark mb-0 me-2" target="_blank">
              <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
            </a>
          </div>
        </div>
      </div>
    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
    <!--   Core JS Files   -->
  
    <!-- Github buttons -->
 @endsection