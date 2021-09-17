const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
   .scripts([
       'resources/dashboard-creative/assets/js/soft-ui-dashboard.min.js',
       'resources/dashboard-creative/assets/js/core/bootstrap.min.js',
       'resources/dashboard-creative/assets/js/core/popper.min.js',
       'resources/dashboard-creative/assets/js/plugins/dragula/dragula.min.js',
       'resources/dashboard-creative/assets/js/plugins/jkanban/jkanban.js',
       'resources/dashboard-creative/assets/js/plugins/chartjs.min.js',
       'resources/dashboard-creative/assets/js/plugins/choices.min.js',
       'resources/dashboard-creative/assets/js/plugins/countup.min.js',
       'resources/dashboard-creative/assets/js/plugins/datatables.js',
       'resources/dashboard-creative/assets/js/plugins/dropzone.min.js',
       'resources/dashboard-creative/assets/js/plugins/fullcalendar.min.js',
       'resources/dashboard-creative/assets/js/plugins/leaflet.min.js',
       'resources/dashboard-creative/assets/js/plugins/multistep-form.js',
       'resources/dashboard-creative/assets/js/plugins/nouislider.min.js',
       'resources/dashboard-creative/assets/js/plugins/orbit-controls.js',
       'resources/dashboard-creative/assets/js/plugins/perfect-scrollbar.min.js',
       'resources/dashboard-creative/assets/js/plugins/quill.min.js',
       'resources/dashboard-creative/assets/js/plugins/round-slider.min.js',
       'resources/dashboard-creative/assets/js/plugins/smooth-scrollbar.min.js',
       'resources/dashboard-creative/assets/js/plugins/sweetalert.min.js',
       'resources/dashboard-creative/assets/js/plugins/threejs.js',
       'resources/dashboard-creative/assets/js/plugins/tilt.min.js',
    ],'public/js/ui-creative.js')
   .styles([
       'resources/dashboard-creative/assets/css/nucleo-icons.css',
       'resources/dashboard-creative/assets/css/nucleo-svg.css',
       'resources/dashboard-creative/assets/css/soft-ui-dashboard.min.css',
       
    ],'public/css/ui-creative.css');
