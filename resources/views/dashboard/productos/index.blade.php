@extends('layouts.app')
@section('content')
<x-cacebera-pagina breadcumb="productos" titulo="Listado de productos" nav="scroll"/>

<div class="container-fluid py-4">
 
    @livewire('listar-productos')
</div>
@endsection