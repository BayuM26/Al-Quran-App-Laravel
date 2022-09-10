<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../../lib/img/l.png">
    <link rel="stylesheet" href="../../lib/Boostrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../lib/W3School/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>{{ $title }}</title>

</head>

<body>
    @include('layouts.link')
  
    @yield('content')
  
    <script src="../../lib/js/sidebar.js"></script>
</body>
</html>