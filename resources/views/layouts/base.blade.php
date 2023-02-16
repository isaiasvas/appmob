<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="76x76" href="url(assets/img/apple-icon.png)">
    <link rel="icon" type="image/png" href={{ url("assets/img/favicon.png") }}>
    <title>
        appMob
    </title>
    <!-- Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href={{ url("assets/css/nucleo-icons.css") }} rel="stylesheet" />
    <link href={{ url("assets/css/nucleo-svg.css") }} rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href={{ url("assets/css/nucleo-svg.css") }} rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href={{ url("assets/css/soft-ui-dashboard.css?v=1") }} rel="stylesheet" />
    <!-- Alpine -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    @livewireStyles
    <link id="pagestyle" href={{ url("assets/css/slick.css") }} rel="stylesheet" />

</head>

<body class="g-sidenav-show bg-gray-100">

    {{ $slot }}

    <!--   Core JS Files   -->
    <script src={{ url("assets/js/core/popper.min.js") }}></script>
    <script src={{ url("assets/js/core/bootstrap.min.js") }}></script>
    <script src={{ url("assets/js/plugins/smooth-scrollbar.min.js") }}></script>
    <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src={{ url("assets/js/soft-ui-dashboard.js") }}></script>

    @livewireScripts
    <script src={{ url("assets/js/jquery-3.6.3.js") }}> </script>
    <script src={{ url("assets/js/slick.js") }}> </script>

    <script src={{ url("assets/js/jquery.mask.min.js") }}></script>
    <script>
    $(document).ready(function() {
        

        $('.date').mask('00/00/0000');
        $('.time').mask('00:00:00');
        $('.date_time').mask('00/00/0000 00:00:00');
        $('.cep').mask('00000-000');
        $('.phone').mask('0000-0000');
        $('.phone_sp').mask('(00) 00000-0000');
        $('.phone_us').mask('(000) 000-0000');
        $('.mixed').mask('AAA 000-S0S');
        $('.cpf').mask('000.000.000-00', {
            reverse: true
        });
        $('.cnpj').mask('00.000.000/0000-00', {
            reverse: true
        });
        $('.money').mask('000.000.000.000.000,00', {
            reverse: true
        });
        var SPMaskBehavior = function(val) {
                return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
            },
            spOptions = {
                onKeyPress: function(val, e, field, options) {
                    field.mask(SPMaskBehavior.apply({}, arguments), options);
                }
            };
        $('.sp_celphones').mask(SPMaskBehavior, spOptions);
    });
    </script>

</body>

</html>