<div>
    <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- Card header -->
            <div class="card-header pb-0">
              <div class="d-lg-flex">
                <div>
                  <h5 class="mb-0" wire:loading.remove>Buscador de aranceles</h5>
                  <h5 class="mb-0" wire:loading>Espere un momento...</h5>
                </div>
                
              </div>
            </div>
            <div class="card-body px-0 pb-0">
              <div class="table-responsive">
                <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns"><div class="dataTable-top">
                    <div class="dataTable-search">
                        <input class="dataTable-input" wire:model.debounce.700ms="buscar" placeholder="Buscar..." type="text"></div>
                    </div>
                    <div class="dataTable-container table-responsive">
                <table class="table table-flush dataTable-table" id="products-list">
                  <thead class="thead-light">
                    <tr>
                        <th >#</th>
                        <th >Subpartida</th>
                        <th >Porcentaje</th>
                        <th >Detalle</th>
                        
                       
                    </tr>
                  </thead>
                  <tbody>
                      @isset($resultado)
                      @foreach ($resultado as $fila)
                      <tr>
                          @foreach ($fila as $atributo)
                              @if ($loop->index==3)
                              <td><small>{{Str::limit($atributo, 120)}}</small></td>  
                             
                              @elseif($loop->index==4)
                             
                              @elseif($loop->index==0 || $loop->index==1 || $loop->index==2)
                                <td><small>{{$atributo}}</small></td>
                              @endif
                          @endforeach
                          
                      </tr>
                      @endforeach
                      @endisset
                           
                          
                   
                    </tbody>
                  
                </table></div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
