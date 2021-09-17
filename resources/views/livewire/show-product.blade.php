<div>
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h5 class="mb-4">Detalles de Envio</h5>
              <div class="row">
                
                <div class="col-lg-5 mx-auto">
                  
                  <br>
                  <h6 class="mb-0 mt-3">Precio</h6>
                  <h5>{{$precios}} USD</h5>
                  <span class="badge badge-success">En stock</span>
                  <br>
                  
                 
                  
                  
                </div>
              </div>
              <div class="row mt-5">
                <div class="col-12">
                  <h5 class="ms-3">Tipos de envio</h5>
                  <div class="table table-responsive">
                    <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Parametro</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Envio</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Metodo</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tiempo Estimado</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Servicio</th>

                        </tr>
                      </thead>
                      <tbody>
                       @foreach ($listado[0] as $pais)
                           @foreach ($pais as $info)
                           <tr>
                            <td>
                              <div class="d-flex px-2 py-1">
                              
                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm">{{$info['paisOrigen']}}-{{$info['destino']}}</h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-sm text-secondary mb-0">{{$info['precio']}} USD</p>
                            </td>
                            <td>
                                <p class="text-sm text-secondary mb-0">{{$info['compania']}}</p>

                            </td>
                            <td class="text-sm">
                                <p class="text-sm text-secondary mb-0">{{$info['tiempoEstimado']}}</p>

                            </td>
                            <td class="text-sm">
                                <p class="text-sm text-secondary mb-0">{{$info['nombreServicio']}}</p>

                            </td>
                          </tr>
                           @endforeach
                       @endforeach
                        
                      
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
