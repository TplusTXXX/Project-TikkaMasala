<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'TikkaMasala')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            width: 1000px;
            margin-left: auto;
            margin-right: auto;
        }

        /*Start Navbar*/
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        nav li {
            float: left;
        }

        nav li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        nav li a:hover {
            background-color: #111;
        }
        /*Einde Navbar*/

        .col1, .col2, .col3, .col4, .col5, .col6, .col7, .col8, .col9, .col10, .col11, .col12{
            display: inline-block;
            float: left;
            margin: 0 0.5%;
        }
        .colrow{
            width: 100%;
            overflow: auto;
            margin: 0 -10px;
        }
        .col1 {width: 8.33%;}
        .col2 {width: 16.66%;}
        .col3 {width: 25%;}
        .col4 {width: 33.33%;}
        .col5 {width: 41.66%;}
        .col6 {width: 50%;}
        .col7 {width: 58.33%;}
        .col8 {width: 66.66%;}
        .col9 {width: 75%;}
        .col10 {width: 83.33%;}
        .col11 {width: 91.66%;}
        .col12 {width: 100%;}
    </style>

    <nav>
        <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/2">Submit</a></li>
        <li><a href="/contact">Contact us</a></li>
        <li><a href="/about-us">About us</a></li>
        </ul>
    </nav>
</head>
<body>

<h2>Tasks</h2>
<div class="content">
    <h1>@yield('title', 'TikkaMasala')</h1>
    @if(isset($success))
        <div class="alert">
            {{ $success }}
        </div>
    @endif
    @yield('content')
</div>

</body>
</html>
