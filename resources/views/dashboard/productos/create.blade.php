@extends('layouts.app')
@section('content')
<x-cacebera-pagina breadcumb="crear" titulo="Crear Nuevo Producto" nav="scroll"/>

<div class="container-fluid py-4">
 
    <div class="row">
        <div class="col-12">
          <div class="multisteps-form mb-5">
           
           @livewire('crear-producto')
          </div>
        </div>
      </div>
</div>
@endsection