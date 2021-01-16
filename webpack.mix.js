const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/vendor/sass/light-bootstrap-dashboard.scss', 'vendor/css/light-bootstrap-dashboard.css')
    .sass('resources/sass/app.scss', 'public/css')
    .styles([
        'resources/vendor/css/bootstrap.min.css',
        'public/vendor/css/light-bootstrap-dashboard.css',
    ], 'public/css/bundle.min.css')
    .scripts([
        "resources/vendor/js/core/jquery.3.2.1.min.js",
        "resources/vendor/js/core/popper.min.js",
        "resources/vendor/js/core/bootstrap.min.js",
        "resources/vendor/js/plugins/bootstrap-switch.js",
        "resources/vendor/js/plugins/chartist.min.js",
        "resources/vendor/js/plugins/bootstrap-notify.js",
        "resources/vendor/js/plugins/jquery-jvectormap.js",
        "resources/vendor/js/plugins/moment.min.js",
        "resources/vendor/js/plugins/bootstrap-datetimepicker.js",
        "resources/vendor/js/plugins/sweetalert2.min.js",
        "resources/vendor/js/plugins/bootstrap-tagsinput.js",
        "resources/vendor/js/plugins/nouislider.js",
        "resources/vendor/js/plugins/bootstrap-selectpicker.js",
        "resources/vendor/js/plugins/jquery.validate.min.js",
        "resources/vendor/js/plugins/jquery.bootstrap-wizard.js",
        "resources/vendor/js/plugins/bootstrap-table.js",
        "resources/vendor/js/plugins/jquery.dataTables.min.js",
        "resources/vendor/js/plugins/fullcalendar.min.js",
        "resources/vendor/js/plugins/jquery.mask.min.js",
        "resources/vendor/js/light-bootstrap-dashboard.js",
        "resources/vendor/js/demo.js",
    ], 'public/js/bundle.min.js')
    .copyDirectory('resources/vendor/img', 'public/images')
    .copyDirectory('resources/vendor/fonts', 'public/fonts')
    .sourceMaps()
    .version();
