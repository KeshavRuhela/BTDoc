<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{asset('assets/css/login.css')}}"  rel="stylesheet">
    <link href="{{asset('assets/css/header.css')}}"  rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>

    <header class="mainTop">
        <!-- <div> -->
        <ul class="navigation">
            <li class="icons">Contact</li>
            <li class="icons">Ideas</li>
            <li class="icons">Upload</li>
        </ul>
        <!-- </div> -->

    </header>

    <div class="side_navbar">
        <!-- side bar -->

        <ul id="sideNavigationList">
            <li class="sideNavigation" onclick="hide_show(0)" style="background:blue; color:white;">Home</li>
            <li class="sideNavigation" onclick="hide_show(1)">Branch</li>
            <li class="sideNavigation" onclick="hide_show(2)">Login</li>
            <li class="sideNavigation" onclick="hide_show(3)">Explore</li>
        </ul>

    </div>


