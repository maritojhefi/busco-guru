@extends('layouts.app')
@section('content')
<x-cacebera-pagina breadcumb="aliexpress" titulo="Detalle Producto" nav="scroll"/>
@livewire('show-product', ['id' => $item,'precio'=>$precio])

@endsection