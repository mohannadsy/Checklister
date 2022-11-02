<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Option 1: CoreUI for Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.2.0/dist/css/coreui.min.css" rel="stylesheet" integrity="sha384-UkVD+zxJKGsZP3s/JuRzapi4dQrDDuEf/kHphzg8P3v8wuQ6m9RLjTkPGeFcglQU" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="{{asset('css/coreui/style.css')}}">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.5/css/perfect-scrollbar.min.css" integrity="sha512-ygIxOy3hmN2fzGeNqys7ymuBgwSCet0LVfqQbWY10AszPMn2rB9JY0eoG0m1pySicu+nvORrBmhHVSt7+GI9VA==" crossorigin="anonymous" referrerpolicy="no-referrer" />   -->
    <!-- <link rel="stylesheet" href="{{asset('css/coreui/simplebar.css')}}">
  <link rel="stylesheet" href="{{asset('css/coreui/simplebar2.css')}}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
  <link rel="stylesheet" href="{{asset('css/coreui/example.css')}}">
  <link rel="stylesheet" href="{{asset('css/coreui/chartjs.css')}}"> -->

    <!-- Option 2: CoreUI PRO for Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui-pro@4.3.4/dist/css/coreui.min.css" rel="stylesheet" integrity="sha384-B25jn3HrWNnbfszQBjQT5iHKf8BuG+Og9Al4zXNJgLl6orefC7UQYjD/Uxo1jMis" crossorigin="anonymous"> -->

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body>

    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card-group d-block d-md-flex row">
                        <div class="card col-md-7 p-4 mb-0">
                            <div class="card-body">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.5/perfect-scrollbar.min.js" integrity="sha512-X41/A5OSxoi5uqtS6Krhqz8QyyD8E/ZbN7B4IaBSgqPLRbWVuXJXr9UwOujstj71SoVxh5vxgy7kmtd17xrJRw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Option 1: CoreUI for Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.2.0/dist/js/coreui.bundle.min.js" integrity="sha384-n0qOYeB4ohUPebL1M9qb/hfYkTp4lvnZM6U6phkRofqsMzK29IdkBJPegsyfj/r4" crossorigin="anonymous"></script>

    <!-- Option 2: CoreUI PRO for Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui-pro@4.3.4/dist/js/coreui.bundle.min.js" integrity="sha384-PXCF+7AmSRaBre024Vj/351upY3ItGUEnFXlXC/dzueNTk5I2xipIib6qgx3GRjw" crossorigin="anonymous"></script> -->

    <!-- Option 3: Separate Popper and CoreUI/CoreUI PRO  for Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity=" sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.2.0/dist/js/coreui.min.js" integrity="sha384-2hww80ziDjQXYpFulPf5tfdCCXLTxn70HdSwL9MfeEvpS0kjfHd1iaBRsLpnuaSC" crossorigin="anonymous"></script>
    or
    <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui-pro@4.3.4/dist/js/coreui.min.js" integrity="sha384-WKICWLKiGYGo9MnQV6DZZno4M501Ru9jJGvYE9v66X/wp+vWZpJL3y2TJzlT7VIr" crossorigin="anonymous"></script>
    -->

    <!-- <script src="{{asset('js/coreui/coreui.bundle.min.js')}}"></script> -->
    <!-- <script src="{{asset('js/coreui/simblebar.js')}}"></script> -->
    <!-- <script src="{{asset('js/coreui/chart.min.js')}}"></script> -->
    <!-- <script src="{{asset('js/coreui/coreui-chart.js')}}"></script> -->
    <!-- <script src="{{asset('js/coreui/coreui-utils.js')}}"></script> -->
    <!-- <script src="{{asset('js/coreui/main.js')}}"></script> -->

</body>

</html>