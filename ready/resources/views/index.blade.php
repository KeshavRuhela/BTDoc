<x-header />
<style>
    .right-sidebar {
        background: tomato;
        /* padding-left: 100px; */
        width: 90%;
        height: 100%;
        position: fixed;
        left: 10%;
        overflow-y: scroll;
        padding-left: 3px;

    }

    /* #right-sidebar-container-Home {
        padding: 0.5rem;
        text-align: justify;
    } */


    .data-container {
        display: none;
        padding: 0.5rem;
        text-align: justify;
    }
</style>
<div class="right-sidebar">
    <!-- index page -->

    <!-- home -->
    <div id="right-sidebar-container-Home" class="data-container" style="display:block; ">
        <h1 class="main-container">Home</h1>
    </div>



    <!-- Branch -->
    <div id="right-sidebar-container-Branch" class="data-container">
        <h1 class="main-container">Branch</h1>

    </div>

    <!-- Login -->
    <div id="right-sidebar-container-Login" class="data-container">
        <h1 class="main-container">Login</h1>

    </div>

    <!-- Explore -->
    <div id="right-sidebar-container-Explore" class="data-container">
        <h1 class="main-container">Explore</h1>

    </div>

</div>





</body>

<script>
    function hide_show(id) {
        var rsc1 = document.getElementById("right-sidebar-container-Home");
        var rsc2 = document.getElementById("right-sidebar-container-Branch");
        var rsc3 = document.getElementById("right-sidebar-container-Login");
        var rsc4 = document.getElementById("right-sidebar-container-Explore");

        var leftSideItems = document.querySelectorAll(".sideNavigation");
        console.log(leftSideItems);

        switch (id) {
            case 0:
                leftSideItems[0].style.background = "blue";
                leftSideItems[0].style.color = "white";
                console.log(rsc1)
                rsc1.style.display = "block";
                rsc2.style.display = "none";
                rsc3.style.display = "none";
                rsc4.style.display = "none";
                break;
            case 1:
                console.log(rsc2);
                rsc1.style.display = "none";
                rsc2.style.display = "block";
                rsc3.style.display = "none";
                rsc4.style.display = "none";
                break;
            case 2:
                console.log(rsc3);
                rsc1.style.display = "none";
                rsc2.style.display = "none";
                rsc3.style.display = "block";
                rsc4.style.display = "none";
                break;
            case 3:
                console.log(rsc4);
                rsc1.style.display = "none";
                rsc2.style.display = "none";
                rsc3.style.display = "none";
                rsc4.style.display = "block";
                break;

            default:
                break;
        }
    }
</script>

</html>