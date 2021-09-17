<div>
    <div class="row mt-4">
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <h5 class="font-weight-bolder">Primeras reglas</h5>
              <label>Factor para medidas</label>
              <input class="form-control" type="text" value="{{$variables->factor_medidas}}">
              <label class="mt-4">Flete 1</label>
              <div class="input-group">
               
                <input type="text" class="form-control" value="{{$variables->flete1}}">
                <span class="input-group-text">%</span>
              </div>
              <label class="mt-4">Seguro</label>
              <div class="input-group">
               
                <input type="text" class="form-control" value="{{$variables->seguro}}">
                <span class="input-group-text">%</span>
              </div>
              <label class="mt-4">IVA</label>
              <div class="input-group">
               
                <input type="text" class="form-control" value="{{$variables->iva}}">
                <span class="input-group-text">%</span>
              </div>
             
            </div>
          </div>
        </div>
        <div class="col-sm-8 mt-sm-0 mt-4">
          <div class="card">
            <div class="card-body">
              <div class="row">
               
                <h5 class="font-weight-bolder">Escala de precios</h5>
                <div class="col-md-12 col-lg-3">
                    <form wire:submit.prevent="guardarRegistro">
                  <label>Minimo</label>
                  <div class="input-group">
                   
                    <input wire:model.debounce.750ms="min" step=".01" type="number" class="form-control @error('min') is-invalid @enderror" >
                    <span class="input-group-text">kg</span>
                  </div>
                  @error('min')
                  <small class="text-danger font-weight-bold ms-2">{{$message}}</small>   
                  @enderror
                </div>
                <div class="col-md-12 col-lg-3">
                  <label>Maximo</label>
                  <div class="input-group">
                    
                    <input wire:model.debounce.750ms="max" step=".01" type="number" class="form-control @error('max') is-invalid @enderror" >
                    <span class="input-group-text">kg</span>
                  </div>
                  @error('max')
                  <small class="text-danger font-weight-bold ms-2">{{$message}}</small>   
                  @enderror
                </div>
                <div class="col-md-12 col-lg-3">
                    <label>Precio</label>
                    <div class="input-group">
                        <span class="input-group-text">USD</span>
                        <input wire:model.debounce.750ms="precio" type="text" class="form-control @error('precio') is-invalid @enderror" >
                       
                      </div>
                      @error('precio')
                  <small class="text-danger font-weight-bold ms-2">{{$message}}</small>   
                  @enderror
                  </div>
                  
                <div class="col-md-12 col-lg-3">
                  <label></label><br>
                  <button class="choices btn btn-success bg-gradient-success">Guardar</button>
                </div>
                </form>
              </div>
              <br>
              <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                  <h6 class="mb-3">Registrados: {{$variables->precios->count()}}</h6>
                  <div class="timeline timeline-one-side">
                    @isset($variables->precios)
                    @foreach ($variables->precios as $item)
                    <div class="timeline-block mb-3">
                      <span class="timeline-step">
                        <i class="ni ni-check-bold text-success text-gradient"></i>
                      </span>
                      <div class="timeline-content">
                        <h6 class="text-dark text-sm font-weight-bold mb-0">{{$item->min}} Kg - {{$item->max}} Kg</h6>
                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{$item->precio}} USD</p>
                        @if ($loop->last)
                        <a href="#" wire:click="borrarUltimo({{$item->id}})"><span class="badge badge-sm bg-gradient-danger">Borrar</span></a>                
                         @endif
                      </div>
                    </div>
                    @endforeach
                    @endisset
                   
                   
                  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
