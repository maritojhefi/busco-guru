<div class="row mt-3">
    @foreach ($lista as $titulo=>$variables)
    


      @if ($variables[1]=='text' || $variables[1]=='number' || $variables[1]=='password' || $variables[1]=='email')
                                           
                                      
      <div class="col-12 col-sm-6">
        <label>{{$titulo}}</label>
        <input type="{{$variables[1]}}" wire:model.debounce.1000ms="{{$variables[0]}}" class=" form-control  @error($variables[0]) is-invalid @enderror">
        @error($variables[0]) <span class="error">{{ $message }}</span> @enderror
      </div>

      @if ($variables[1]=='password')
      <div class="col-12 col-sm-6">
        <label>Confirmar</label>
        <input type="password" wire:model.debounce.1000ms="{{$variables[0]}}_confirmation" class=" form-control @error($variables[0]) is-invalid @enderror" placeholder="Confirmar">
      </div>
      
      @endif
      @elseif($variables[1]=='file')
      <div class="row col-12 col-sm-6">
        <div class="col-6 col-sm-6">
        
            <label for="{{$titulo}}" class="btn bg-gradient-primary mt-2 me-2 mt-4" >Subir Foto</label>
            <input id="{{$titulo}}" type="file" wire:model="{{$variables[0]}}"  class=" form-control @error($variables[0]) is-invalid @enderror" style="display:none">
           
        </div>
        <div class="col-6 col-sm-6">
            <div class="avatar avatar-xl position-relative mt-3 border  @error($variables[0]) border-danger @enderror">
            {{$slot}}
            </div>
        </div>
        <div wire:loading wire:target="{{$variables[0]}}"  class="col-12 col-sm-6">
        Cargando...
        </div>
        @error($variables[0])<span class="error">{{ $message }}</span> @enderror
      </div>
      
    
   @elseif($variables[1]=='textarea')
   
   

      <div class="col-12 col-sm-6">
        <label>{{$titulo}}</label>
        <textarea type="text" wire:model.debounce.1000ms="{{$variables[0]}}" class=" form-control @error($variables[0]) is-invalid @enderror"></textarea>
        @error($variables[0]) <span class="error">{{ $message }}</span> @enderror
      </div>
      @endif
    @endforeach
   
    @isset($otrosinputs)
  
        {{$otrosinputs}}
   
    @endisset
   
  </div>
  
  <div class="button-row d-flex mt-4">
    <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="submit" >Crear</button>
  </div>