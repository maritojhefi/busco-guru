
    <li class="nav-item">
        <a data-bs-toggle="collapse" href="#{{str_replace(' ', '', $titulo)}}" class="nav-link {{(request () -> is ($linkglobal.'*'))? 'active': ''}}" aria-controls="{{str_replace(' ', '', $titulo)}}" role="button" aria-expanded="false">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                {{$slot}}
            </div>
          <span class="nav-link-text ms-1">{{$titulo}}</span>
        </a>
        <div class="collapse {{(request () -> is ($linkglobal.'*'))? 'show': ''}} " id="{{str_replace(' ', '', $titulo)}}">
          <ul class="nav ms-4 ps-3">
              @foreach ($contenido as $nombre=>$ruta)
             
              <li class="nav-item {{(request () -> is ($linkglobal.'/'.$ruta))? 'active': ''}}">
                <a class="nav-link {{(request () -> is ($linkglobal.'/'.$ruta))? 'active': ''}}" href="{{route($ruta)}}">
                  <span class="sidenav-mini-icon"> {{$lista[$loop->index]}} </span>
                  <span class="sidenav-normal"> {{$nombre}}</span>
                </a>
              </li> 
              @endforeach
            
           
           
          </ul>
        </div>
      </li>
