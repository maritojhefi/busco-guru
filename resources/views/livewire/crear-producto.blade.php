<div>
    <div class="row">
        <div class="col-12 col-lg-8 m-auto">
          <form class="multisteps-form__form mb-8" style="height: 1310px;" wire:submit.prevent="submit">
            <!--single form panel-->
            <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
              <h5 class="font-weight-bolder mb-0">Rellene el formulario</h5>
              <p class="mb-0 text-sm">Informacion Importante</p>
              
                <x-create-form  :lista="([
                    'Nombre del Producto'=>['nombre','text'],
                    'Precio'=>['precio','number'],
                    'Stock'=>['stock','number'],
                    
                    'Detalle'=>['detalle','textarea'],
                    'Foto'=>['foto','file'],
                   
                                        ])" >
                                    
                     @if ($foto)
                        <img src="{{ $foto->temporaryUrl() }}" class="w-100 border-radius-lg shadow-sm">
                    @endif

                    <x-slot name="otrosinputs">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Categoria</label>
                                <select  wire:model="categoria"  class="form-control @error($categoria)is-invalid @enderror">
                                    <option  class="dropdown-item" aria-labelledby="dropdownMenuButton" >Seleccione una opcion</option>
                                    @foreach ($categorias as $cat)
                                    <option value="{{$cat->id}}" class="dropdown-item" aria-labelledby="dropdownMenuButton" >{{$cat->nombre}}</option>
                                    
                                    @endforeach
                                </select>
                                

                          </div>
                        </div>

                       
                    </x-slot>
                </x-create-form>

                                      
              
            </div>
           
          </form>
        </div>
      </div>
    
     
</div>
