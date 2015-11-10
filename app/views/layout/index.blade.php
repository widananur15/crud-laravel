<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- First load's css boostrap --}}
    <link rel="stylesheet" href="/boostrap/css2/bootstrap.min.css">
    <link rel="stylesheet" href="/boostrap/css2/style.css">

    {{-- Second load's javascipt boostrap --}}
    <script type="text/javascript" src="/boostrap/css2/bootstrap.min.js"></script>
    <script type="text/javascript" src="/boostrap/css2/jquery.min.js"></script>

    @yield("head")

</head>

<body>

@include('layout/menus')


@yield("content")

</body>
</html>