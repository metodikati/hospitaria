<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @yield('pageTitle') - {{ ENV('APP_NAME')  }}
    </title>

    {{-- Fonts --}}
    {{ Html::style('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800') }}
    {{-- Bootstrap --}}
    {{ Html::style('back/bower_components/bootstrap/dist/css/bootstrap.min.css') }}
    {{-- themify icons --}}
    {{ Html::style('back/assets/icon/themify-icons/themify-icons.css') }}
    {{-- ico fonts --}}
    {{ Html::style('back/assets/icon/icofont/css/icofont.css') }}
    {{-- style --}}
    {{ Html::style('back/assets/css/style.css') }}
    {{-- color --}}
    {{ Html::style('back/assets/css/color/color-1.css') }}

    {{-- Page CSS --}}
    @section('pageCSS')
    @show

</head>

<body class="fix-menu">
<section class="login p-fixed d-flex text-center bg-primary common-img-bg" style="background-size: cover; background-position: top !important;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="login-card card-block auth-body">
                    @section('mainContent')
                    @show
                </div>
            </div>
        </div>
    </div>
</section>

{{-- JQuery --}}
{{ Html::script('back/bower_components/jquery/dist/jquery.min.js') }}
{{ Html::script('back/bower_components/jquery-ui/jquery-ui.min.js') }}
{{ Html::script('back/bower_components/tether/dist/js/tether.min.js') }}
{{ Html::script('back/bower_components/bootstrap/dist/js/bootstrap.min.js') }}
{{-- JQuery slimscroll --}}
{{ Html::script('back/bower_components/jquery-slimscroll/jquery.slimscroll.js') }}
{{-- Modernizr --}}
{{ Html::script('back/bower_components/modernizr/modernizr.js') }}
{{ Html::script('back/bower_components/modernizr/feature-detects/css-scrollbars.js') }}
{{-- i18next.min.js --}}
{{ Html::script('back/bower_components/i18next/i18next.min.js') }}
{{ Html::script('back/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js') }}
{{ Html::script('bck/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js') }}
{{ Html::script('back/bower_components/jquery-i18next/jquery-i18next.min.js') }}
{{-- Custom JS --}}
{{ Html::script('back/assets/js/script.js') }}
</body>
</html>