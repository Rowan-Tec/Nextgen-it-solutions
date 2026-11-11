<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">
    <meta name="description"
          content="NextGen IT Solutions builds purposeful websites and custom software, and provides practical IT support for businesses in South Africa.">
    <meta name="theme-color" content="#08152d">

    <title>NextGen IT Solutions | Websites, Software & IT Support</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

    <link rel="preconnect"
          href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">

</head>
<body id="top">

@include('partials.navbar')

@yield('content')

@include('partials.footer')

</body>
</html>