<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html body {
            margin: 0px;
            height: 100%;
        }

        .mainTop {
            background: #07c2ff;
            /* margin: -10px; */
            padding: 8px;
        }

        .navigation {
            display: flex;
            padding: 0px;
            justify-content: end;
            margin: 0px;
        }

        .icons {
            padding: 5px;
            border: 2px solid blue;
            list-style: none;
            margin-right: 8px;
            cursor: pointer;
            background: white;

        }

        .icons:hover {
            background: skyblue;
            text-decoration: underline;
        }

        .side_navbar {
            background: #07c2ff;
            position: fixed;
            width: 10%;
            height: 100%;
            z-index: 10;

        }
        #sideNavigationList{
            padding-left: 0.8rem;
        }
        .sideNavigation{
            background: white;
            margin-bottom: 2rem;
            list-style: none;
            padding: 0.5rem;
            font-weight: 800;
            border-radius: 15px 0px 0px 10px;
        }
        .sideNavigation:hover{
            background: blue;
            color: white;
            cursor: pointer;

        }

    </style>
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

