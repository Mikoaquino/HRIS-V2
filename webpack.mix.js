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

mix.js('resources/assets/js/accordion.js', 'public/assets/js')
mix.js('resources/assets/js/advanced-form-elements.js', 'public/assets/js')
mix.js('resources/assets/js/apexcharts-rtl.js', 'public/assets/js')
mix.js('resources/assets/js/apexchart-custom.js', 'public/assets/js')
mix.js('resources/assets/js/apexcharts.js', 'public/assets/js')
mix.js('resources/assets/js/app-calendar-events.js', 'public/assets/js')
mix.js('resources/assets/js/app-calendar.js', 'public/assets/js')
mix.js('resources/assets/js/calendar-events.js', 'public/assets/js')
mix.js('resources/assets/js/calendar.js', 'public/assets/js')
mix.js('resources/assets/js/carousel.js', 'public/assets/js')
mix.js('resources/assets/js/chart-circle.js', 'public/assets/js')
mix.js('resources/assets/js/chart.chartjs.js', 'public/assets/js')
mix.js('resources/assets/js/chart.flot.js', 'public/assets/js')
mix.js('resources/assets/js/chart.flot.sampledata.js', 'public/assets/js')
mix.js('resources/assets/js/chart.morris.js', 'public/assets/js')
mix.js('resources/assets/js/chart.peity.js', 'public/assets/js')
mix.js('resources/assets/js/chart.sparkline.js', 'public/assets/js')
mix.js('resources/assets/js/chat.js', 'public/assets/js')
mix.js('resources/assets/js/check-all-mail.js', 'public/assets/js')
mix.js('resources/assets/js/checkout-jquery-steps.js', 'public/assets/js')
mix.js('resources/assets/js/colorpicker.js', 'public/assets/js')
mix.js('resources/assets/js/contact.js', 'public/assets/js')
mix.js('resources/assets/js/cookie.js', 'public/assets/js')
mix.js('resources/assets/js/custom.js', 'public/assets/js')
mix.js('resources/assets/js/custom1.js', 'public/assets/js')
mix.js('resources/assets/js/dashboard.sampledata.js', 'public/assets/js')
mix.js('resources/assets/js/echarts.js', 'public/assets/js')
mix.js('resources/assets/js/edit-datatable.js', 'public/assets/js')
mix.js('resources/assets/js/exported.js', 'public/assets/js')
mix.js('resources/assets/js/form-editor-2.js', 'public/assets/js')
mix.js('resources/assets/js/form-editor.js', 'public/assets/js')
mix.js('resources/assets/js/form-elements.js', 'public/assets/js')
mix.js('resources/assets/js/form-layouts.js', 'public/assets/js')
mix.js('resources/assets/js/form-validation.js', 'public/assets/js')
mix.js('resources/assets/js/form-wizard.js', 'public/assets/js')
mix.js('resources/assets/js/formelementadvnced.js', 'public/assets/js')
mix.js('resources/assets/js/fullcalendar.js', 'public/assets/js')
mix.js('resources/assets/js/gallery.js', 'public/assets/js')
mix.js('resources/assets/js/generate-otp.js', 'public/assets/js')
mix.js('resources/assets/js/handleCounter.js', 'public/assets/js')
mix.js('resources/assets/js/image-comparision.js', 'public/assets/js')
mix.js('resources/assets/js/index-dark.js', 'public/assets/js')
mix.js('resources/assets/js/index-map.js', 'public/assets/js')
mix.js('resources/assets/js/index.js', 'public/assets/js')
mix.js('resources/assets/js/index1.js', 'public/assets/js')
mix.js('resources/assets/js/invoice.js', 'public/assets/js')
mix.js('resources/assets/js/jquery.vmap.sampledata.js', 'public/assets/js')
mix.js('resources/assets/js/left-menu.js', 'public/assets/js')
mix.js('resources/assets/js/mail-two.js', 'public/assets/js')
mix.js('resources/assets/js/map-leafleft.js', 'public/assets/js')
mix.js('resources/assets/js/map.apple.js', 'public/assets/js')
mix.js('resources/assets/js/map.bluewater.js', 'public/assets/js')
mix.js('resources/assets/js/map.mapbox.js', 'public/assets/js')
mix.js('resources/assets/js/map.shiftworker.js', 'public/assets/js')
mix.js('resources/assets/js/modal-popup.js', 'public/assets/js')
mix.js('resources/assets/js/modal.js', 'public/assets/js')
mix.js('resources/assets/js/navigation.js', 'public/assets/js')
mix.js('resources/assets/js/newsticker.js', 'public/assets/js')
mix.js('resources/assets/js/owl.carousel.js', 'public/assets/js')
mix.js('resources/assets/js/popover.js', 'public/assets/js')
mix.js('resources/assets/js/profile.js', 'public/assets/js')
mix.js('resources/assets/js/rangeslider.js', 'public/assets/js')
mix.js('resources/assets/js/select2.js', 'public/assets/js')
mix.js('resources/assets/js/sticky.js', 'public/assets/js')
mix.js('resources/assets/js/summernote.js', 'public/assets/js')
mix.js('resources/assets/js/sweet-alert.js', 'public/assets/js')
mix.js('resources/assets/js/table-data.js', 'public/assets/js')
mix.js('resources/assets/js/tabs.js', 'public/assets/js')
mix.js('resources/assets/js/themecolor.js', 'public/assets/js')
mix.js('resources/assets/js/timline.js', 'public/assets/js')
mix.js('resources/assets/js/tooltip.js', 'public/assets/js')
mix.js('resources/assets/js/user-list.js', 'public/assets/js')
mix.js('resources/assets/js/vector-map.js', 'public/assets/js')

mix.postCss('resources/assets/css/animate.css', 'public/assets/css')

mix.sass('resources/assets/css/style-dark.scss', 'public/assets/css')
mix.sass('resources/assets/css/skin-modes.scss', 'public/assets/css')
mix.sass('resources/assets/css/style-transparent.scss', 'public/assets/css')
mix.sass('resources/assets/scss/style.scss', 'public/assets/css')

mix.copyDirectory('resources/assets/img', 'public/assets/img')
mix.copyDirectory('resources/assets/plugins', 'public/assets/plugins')
mix.copyDirectory('resources/assets/switcher', 'public/assets/switcher')

mix.options({
    processCssUrls: false
});

mix.browserSync('http://127.0.0.1:8000');
