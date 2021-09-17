<div>
    <br>
    <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- Card header -->
            <div class="card-header pb-0">
              <div class="">
                <div>
                  <h5 wire:loading.remove class="mb-0">Buscador Aliexpress</h5>
                  <h5 wire:loading class="mb-0">Encontrando resultados...</h5>
                </div>
                <div class="row mx-auto mt-3">
                  <div class="col-lg-3 col-md-6 mb-1"><input class="form-control " wire:model.defer="search" placeholder="Nombre o ID" type="text" autofocus> </div>
                  <div class="col-lg-2 col-md-6 mb-1"><input class="form-control @error('min') is-invalid @enderror" wire:model.defer="min" placeholder="min(USD)" type="number"></div>
                  
                  <div class="col-lg-2 col-md-6 mb-1"><input class="form-control @error('max') is-invalid @enderror" wire:model.defer="max" placeholder="max(USD)" type="number"></div>
                  <div class="col-lg-2 col-md-6 mb-1">
                    <select class="form-control @error('desde') is-invalid @enderror"  wire:model.defer="desde" id="exampleFormControlSelect1">
                      <option>Desde:</option>
                      
                      <option  value="US">Estados Unidos</option>
                      <option  value="CN">China</option>
                      
                    </select>
                  </div>
                  <div class="col-lg-2 col-md-6 mb-1">
                    
                    <select class="form-control @error('hasta') is-invalid @enderror"  wire:model.defer="hasta" id="exampleFormControlSelect1">
                      <option>Hasta:</option>
                      <option value="BO">Bolivia</option>
                      <option  value="US">Estados Unidos</option>
                      <option  value="CN">China</option>
                      
                    </select>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-6">
                    <button wire:click="buscarAliexpress" class="btn btn-rounded bg-gradient-primary btn-primary btn-sm">Buscar en Aliexpress</button>
                  </div>
                  

                </div>      
                    
      
              </div>
            </div>
            <div class="card-body px-0 pb-0">
              <div class="table-responsive">
                <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns"><div class="dataTable-top"><div class="dataTable-dropdown"><label>
                   
                    
                    </div>
                    <div class="dataTable-container table-responsive">
                <table class="table table-flush dataTable-table" id="products-list">
                  <thead class="thead-light">
                    <tr>
                        <th >Producto</th>
                        @isset($item['logistica'])
                            
                        @endisset
                        <th>Logistica</th>
                        <th >Precio</th>
                        <th>Moneda</th>
                        <th >ID</th>
                       
                        
                       
                    </tr>
                  </thead>
                  <tbody>
                    
                           @isset($lista)
                          @foreach($lista as $item)
                          <tr>
                            <td class="text-sm"> <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#modal-notification{{$item['id']}}">
                              <i class="fas fa-eye text-secondary" aria-hidden="true"></i></a>
                              <img class="w-10 ms-3" src="{{$item['foto']}}" alt="hoodie">{{Str::limit($item['nombre'], 30)}}
                             </td>
                             @isset($item['logistica'])
                             <td class="text-sm"><h6 class="ms-3 my-auto">{{$item['logistica']}}</h6></td>

                            @endisset
                            @empty($item['logistica'])
                            <td class="text-sm"><span class="badge badge-danger">Sin informacion</span></td>

                           @endempty
                            <td class="text-sm"><h6 class="ms-3 my-auto">{{$item['precio']}}</h6></td>
                            <td class="text-sm"><span class="badge badge-success badge-sm">{{$item['moneda']}}</span></td>

                            <td class="text-sm">{{$item['id']}}</td>
                           
                           
                           
                           
                          </tr>


                          <div class="col-md-4">
        
                            <div class="modal fade" id="modal-notification{{$item['id']}}"  tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
                              <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h6 class="modal-title" id="modal-title-notification">{{$item['nombre']}}</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="false" class="text-secondary">×</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="row">
                                      <div class="col-lg-12 col-md-12 col-12">
                                        <div class="d-flex">
                                          <div>
                                            <img src="{{$item['foto']}}" class="avatar avatar-xxl me-3" alt="product image">
                                          </div>
                                          <div>
                                            <h6 class="text-lg mb-0 mt-2">{{$item['precio']}} USD</h6>
                                            <p class="text-sm mb-3"><a href="{{$item['url']}}">{{$item['url']}}</a></p>
                                            @isset($item['logistica'])
                                            <span class="badge badge-sm bg-gradient-success">Logistica:</span>
                                            <p class="text-sm mb-3">{{$item['logistica']}}</p>

                                            @endisset
                                           
                                          </div>
                                        </div>
                                      </div>
                                      
                                    </div>
                                    
                                   
                                    
                                  </div>
                                  <div class="modal-footer">
                                    <a href="{{route('crear/aliexpress/detalle',[$item['id'],$item['precio']])}}" class="btn btn-white">Ver mas detalles</a>
                                    <button type="button" class="btn btn-link ml-auto" data-bs-dismiss="modal">Cerrar</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          @endforeach
                           @endisset
                          
                   
                    </tbody>
                  
                </table></div>
                <div class="dataTable-bottom">
                   
                    
              </div>
            </div>
          </div>
        </div>
      </div>
  
    </div>
  
       <!-- Modal -->
       <script type="text/javascript">
        
     
            window.addEventListener('abrirmodal', event => {
                var myModal = new bootstrap.Modal(document.getElementById("modal-notification"+event.detail.modal), {});
                myModal.show();
            })
           
       </script>
</div>
