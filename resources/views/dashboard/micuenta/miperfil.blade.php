@extends('layouts.app')
@section('content')
<x-cacebera-pagina breadcumb="principal" titulo="Mi Perfil" nav="background"/>

<div class="container-fluid">
    <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('{{asset('img/curved-images/curved0.jpg')}}'); background-position-y: 50%;">
      <span class="mask bg-gradient-primary opacity-6"></span>
    </div>
    <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
      <div class="row gx-4">
        <div class="col-auto">
          <div class="avatar avatar-xl position-relative">
            <img src="{{asset('img/team-3.jpg')}}" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
          </div>
        </div>
        <div class="col-auto my-auto">
          <div class="h-100">
            <h5 class="mb-1">
             {{auth()->user()->name}}
            </h5>
            <p class="mb-0 font-weight-bold text-sm">
            @if (auth()->user()->rol)
            {{auth()->user()->rol->nombre}}
            @else
                Sin rol asignado
            @endif  
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
        
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid py-4">
    <div class="row mt-3">
      
      <div class="col-12 col-md-6 col-xl-6 mt-md-0 mt-4">
        <div class="card h-100">
          <div class="card-header pb-0 p-3">
            <div class="row">
              <div class="col-md-8 d-flex align-items-center">
                <h6 class="mb-0">Informacion Personal</h6>
              </div>
              <div class="col-md-4 text-end">
                <a href="javascript:;">
                  <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" aria-hidden="true" data-bs-original-title="Edit Profile" aria-label="Edit Profile"></i><span class="sr-only">Edit Profile</span>
                </a>
              </div>
            </div>
          </div>
          <div class="card-body p-3">
            <p class="text-sm">
              Aqui informacion tuya, tus virtudes y todo rasgo que podria servir a los usuarios para saber mas de ti.
            </p>
            <hr class="horizontal gray-light my-4">
            <ul class="list-group">
              <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Nombre Completo:</strong> &nbsp; Alec M. Thompson</li>
              <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Telefono:</strong> &nbsp; (+591) 123 1234 123</li>
              <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp; marioso@mail.com</li>
              <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Localidad:</strong> &nbsp; Tarija</li>
              <li class="list-group-item border-0 ps-0 pb-0">
                <strong class="text-dark text-sm">Social:</strong> &nbsp;
                <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                  <i class="fab fa-facebook fa-lg" aria-hidden="true"></i>
                </a>
                <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                  <i class="fab fa-twitter fa-lg" aria-hidden="true"></i>
                </a>
                <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                  <i class="fab fa-instagram fa-lg" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-12 col-xl-6 mt-xl-0 mt-4">
        <div class="card h-100">
          <div class="card-header pb-0 p-3">
            <h6 class="mb-0">Tus productos</h6>
          </div>
          <div class="card-body p-3">
            <ul class="list-group">
              
             
              <li class="list-group-item border-0 d-flex align-items-center px-0">
                <div class="avatar me-3">
                  <img src="{{asset('img/home-decor-3.jpg')}}" alt="kal" class="border-radius-lg shadow">
                </div>
                <div class="d-flex align-items-start flex-column justify-content-center">
                  <h6 class="mb-0 text-sm">Zapatillas</h6>
                  <p class="mb-0 text-xs">300 Bs</p>
                </div>
                <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">Ir a detalle</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0 p-3">
            <h6 class="mb-1">Interacciones</h6>
            <p class="text-sm">Verifica la interaccion de los visitantes con tus productos mas exitosos</p>
          </div>
          <div class="card-body p-3">
            <div class="row">
              <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                <div class="card card-blog card-plain">
                  <div class="position-relative">
                    <a class="d-block shadow-xl border-radius-xl">
                      <img src="{{asset('img/home-decor-3.jpg')}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                    </a>
                  </div>
                  <div class="card-body px-1 pb-0">
                    <p class="text-gradient text-dark mb-2 text-sm">Producto #2</p>
                    <a href="javascript:;">
                      <h5>
                        Modern
                      </h5>
                    </a>
                    <p class="mb-4 text-sm">
                      
                    </p>
                    <div class="d-flex align-items-center justify-content-between">
                      <button type="button" class="btn btn-outline-primary btn-sm mb-0">View Producto</button>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                <div class="card card-blog card-plain">
                  <div class="position-relative">
                    <a class="d-block shadow-xl border-radius-xl">
                      <img src="{{asset('img/home-decor-3.jpg')}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                    </a>
                  </div>
                  <div class="card-body px-1 pb-0">
                    <p class="text-gradient text-dark mb-2 text-sm">Producto #1</p>
                    <a href="javascript:;">
                      <h5>
                        Scandinavian
                      </h5>
                    </a>
                    <p class="mb-4 text-sm">
                     
                    </p>
                    <div class="d-flex align-items-center justify-content-between">
                      <button type="button" class="btn btn-outline-primary btn-sm mb-0">View Producto</button>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                <div class="card card-blog card-plain">
                  <div class="position-relative">
                    <a class="d-block shadow-xl border-radius-xl">
                      <img src="{{asset('img/home-decor-3.jpg')}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                    </a>
                  </div>
                  <div class="card-body px-1 pb-0">
                    <p class="text-gradient text-dark mb-2 text-sm">Puesto #3</p>
                    <a href="javascript:;">
                      <h5>
                        Mueble
                      </h5>
                    </a>
                    <p class="mb-4 text-sm">
                      
                    </p>
                    <div class="d-flex align-items-center justify-content-between">
                      <button type="button" class="btn btn-outline-primary btn-sm mb-0">View Producto</button>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                <div class="card h-100 card-plain border">
                  <div class="card-body d-flex flex-column justify-content-center text-center">
                    <a href="javascript:;">
                      <i class="fa fa-plus text-secondary mb-3" aria-hidden="true"></i>
                      <h5 class=" text-secondary"> New project </h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
@endsection