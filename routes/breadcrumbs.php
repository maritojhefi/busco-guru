<?php
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

//padre
Breadcrumbs::for('tienda', function ($trail) {
    $trail->push('Tienda', route('entrada'));
});
//para inicio
Breadcrumbs::for('general', function ($trail) {
    $trail->parent('tienda');
    $trail->push('General', route('general'));
});
Breadcrumbs::for('principal', function ($trail) {
    $trail->parent('tienda');
    $trail->push('Principal', route('principal'));
});


//breadcrumbs para productos


Breadcrumbs::for('productos', function ($trail) {
    $trail->parent('tienda');
    $trail->push('Productos', route('listar'));
});
Breadcrumbs::for('crear', function ($trail) {
    $trail->parent('productos');
    $trail->push('Crear', route('crear'));
});
Breadcrumbs::for('aliexpress', function ($trail) {
    $trail->parent('crear');
    $trail->push('Aliexpress', route('crear/aliexpress'));
});

//breadcumbs para politicas

Breadcrumbs::for('reglas', function ($trail) {
    $trail->parent('tienda');
    $trail->push('Reglas', route('reglas'));
});
Breadcrumbs::for('calculadoraAerea', function ($trail) {
    $trail->parent('tienda');
    $trail->push('CalculadoraAerea', route('calculadoraAerea'));
});
Breadcrumbs::for('aranceles', function ($trail) {
    $trail->parent('tienda');
    $trail->push('Aranceles', route('aranceles'));
});

Breadcrumbs::for('alquileres', function ($trail) {
    $trail->parent('tienda');
    $trail->push('Alquiler', route('alquileres'));
});