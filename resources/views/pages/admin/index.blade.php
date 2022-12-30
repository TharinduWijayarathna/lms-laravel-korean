<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Dashboard
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />

    @include('libraries.style')
</head>

<body class="">
    <div class="wrapper ">

        @include('components.sidebar')

        <div class="main-panel">

            @include('components.nav')


            @yield('content')


            @include('components.footer')
        </div>
    </div>

    @include('libraries.script')
</body>

</html>
