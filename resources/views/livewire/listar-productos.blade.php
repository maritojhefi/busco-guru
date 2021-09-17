<div>
    <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- Card header -->
            <div class="card-header pb-0">
              <div class="d-lg-flex">
                <div>
                  <h5 class="mb-0">Todos los productos</h5>
                  
                </div>
                <div class="ms-auto my-auto mt-lg-0 mt-4">
                  <div class="ms-auto my-auto">
                    <a href="{{route('crear')}}" class="btn bg-gradient-primary btn-sm mb-0">+&nbsp; AGREGAR NUEVO</a>
                    
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-0">
              <div class="table-responsive">
                <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns"><div class="dataTable-top"><div class="dataTable-dropdown"><label>
                    <select class="dataTable-selector" wire:model="paginate">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                    </select> resultados por pagina</label></div>
                    <div class="dataTable-search">
                        <input class="dataTable-input" wire:model.debounce.700ms="search" placeholder="Buscar..." type="text"></div>
                    </div>
                    <div class="dataTable-container table-responsive">
                <table class="table table-flush dataTable-table" id="products-list">
                  <thead class="thead-light">
                    <tr>
                        <th >Producto</th>
                        <th >Precio</th>
                        <th >Detalle</th>
                        <th >Estado</th>
                        <th >Opciones</th>
                       
                    </tr>
                  </thead>
                  <tbody>
                      
                            @foreach ($productos as $prod)
                            <tr>
                            <td>
                                <div class="d-flex">
                                  @if ($prod->image)
                                  <img class="w-10 ms-3" src="{{$prod->image->imagen}}" alt="hoodie">
                               

                                  @endif
                          <h6 class="ms-3 my-auto">{{$prod->nombre}}</h6>
                        </div>
                      </td>
                      <td class="text-sm">{{$prod->precio}} Bs</td>
                      <td class="text-sm">{{Str::limit($prod->detalle, 25)}}</td>
                      <td ><a href="#" wire:click="actualizar('{{ $prod->id }}')" ><span  class="badge badge-{{$prod->estado=='activo'?'success':'danger'}} badge-sm">{{$prod->estado}}</span></a></td>
                      
                      <td>
                        
                      </td>
                      <td class="text-sm">
                        <a href="javascript:;" data-bs-toggle="tooltip" data-bs-original-title="Mostrar detalle">
                          <i class="fas fa-eye text-secondary" aria-hidden="true"></i>
                        </a>
                        <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Editar producto">
                          <i class="fas fa-user-edit text-secondary" aria-hidden="true"></i>
                        </a>
                        <a href="javascript:;" data-bs-toggle="tooltip" data-bs-original-title="Borrar producto">
                          <i class="fas fa-trash text-secondary" aria-hidden="true"></i>
                        </a>
                      </td>
                    </tr>
                            @endforeach
                          
                   
                    </tbody>
                  
                </table></div>
                <div class="dataTable-bottom">
                    {{$productos->links()}}
                    <div class="dataTable-info">Mostrando {{$productos->count()}} resultados de {{$total}}</div></div></div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
