<div>
    <div class="row m-3">
        <div class="col-12">
          <div class="card">
            <!-- Card header -->
            <div class="card-header pb-0">
              <div class="d-lg-flex">
                <div>
                  
                  <h5 class="mb-0" wire:loading>Espere un momento...</h5>
                </div>
                
              </div>
            </div>
            <div class="card-body px-0 pb-0">
              <div class="table-responsive">
                <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns"><div class="m-2">
                    <div class="row mx-auto mt-3">
                        <div class="col-lg-2 col-md-6 mb-1">
                          <select class="form-control @error('desde') is-invalid @enderror" wire:model.defer="desde" id="exampleFormControlSelect1">
                            <option>Desde:</option>
                            
                            <option value="CNSZN">SHEN ZHEN</option>
                            <option value="CNGUA">GUANG ZHOU</option>
                            <option value="CNZSJ">ZHU SAN JIAO</option>
                            <option value="HKHKG">HONG KONG</option>
                            <option value="CNSHA">SHANG HAI</option>
                            <option value="CNNBO">NING BO</option>
                            <option value="CNXIA">XIA MEN</option>
                            <option value="CNQIN">QING DAO</option>
                            <option value="CNTJN">TIAN JIN</option>
                            <option value="CNDAL">DA LIAN</option>
                           
                          </select>
                        </div>
                        <div class="col-lg-2 col-md-6 mb-1">
                          
                          <select class="form-control @error('hasta') is-invalid @enderror" wire:model.defer="hasta" id="exampleFormControlSelect1">
                            <option>Hasta:</option>
                            <option value="ARENA">BUENOS AIRES</option>
                            <option value="UYMON">MONTEVIDEO</option>
                            <option value="BRSTS">SANTOS</option>
                            <option value="BRRGR">RIO GRANDE</option>
                            <option value="BRRDJ">RIO DE JANEIRO</option>
                            <option value="PYASU">ASUNCION</option>
                            <option value="COBUE">BUENAVENTURA</option>
                            <option value="PECAL2C">CALLAO</option>
                            <option value="ECGYL">GUAYAQUIL</option>
                            <option value="CLIQU">IQUIQUE</option>
                            
                          </select>
                        </div>
                        <div class="col-lg-2 col-md-6 mb-1">
                            <button wire:click="buscar" class="btn btn-rounded bg-gradient-primary btn-primary btn-sm">Buscar</button>
                        </div>
                        @if($desde!=null && $hasta!=null)
                        <div class="col-lg-2 col-md-6 mb-1">
                          <a href="{{route('pdf',[$desde,$hasta,$porcentaje])}}" class="btn btn-rounded bg-gradient-success btn-sm">Descargar PDF</a>
                      </div> 
                        @endif
                        
                        <div class="col-lg-2 col-md-6 mb-1">
                            <input type="number" placeholder="Sumar porcentaje" class="form-control " wire:model="porcentaje">
                      </div>
                      </div>
                    </div>
                    <div class="dataTable-container table-responsive">
                <table class="table table-flush dataTable-table" id="products-list">
                  <thead class="thead-light">
                    <tr>
                        <th >Periodo valido</th>
                        <th >Puerto salida</th>
                        <th>Tipo</th>
                        <th >Puerto destino</th>
                        <th >20GP</th>
                        <th >40GP</th>
                        <th >40HC</th>
                        <th >Cortar</th>
                        <th >Viaje</th>
                       
                    </tr>
                  </thead>
                  <tbody>
                      @isset($array)
                      @foreach ($array as $tr)
                      <tr>
                         @foreach ($tr as $td)
                         @if ($loop->last)
                          @else
                          @if($porcentaje!=null)
                          @if ($loop->index==4 || $loop->index==5 || $loop->index==6)
                          <td><span class="" translate="yes">{{$td+($td*($porcentaje/100))}} USD</span></td>

                          @else
                          <td><span class="" translate="yes">{{$td}}</span></td>

                          @endif 
                          @endif
                          @if($porcentaje==null)
                          @if ($loop->index==4 || $loop->index==5 || $loop->index==6)
                          <td><span class="" translate="yes">{{$td}} USD</span></td>
                          @else
                          <td><span class="" translate="yes">{{$td}}</span></td>
                          @endif
                         

                          @endif

                         @endif
                         @endforeach
                      </tr>
                  @endforeach
                      @endisset
                  
                           
                          
                   
                    </tbody>
                  
                </table>
                <div>
                    @isset($array)
                    <span class="m-3">Resultados encontrados: {{$array->count()}}</span>

                    @endisset
                </div>
            </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
