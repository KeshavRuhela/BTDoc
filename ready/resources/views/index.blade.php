<x-header />
<style>
    .right-sidebar {
        background: #9efe7b1a;
        /* padding-left: 100px; */
        width: 90%;
        height: 100%;
        position: fixed;
        left: 10%;
        overflow-y: scroll;
        padding-left: 3px;

    }

    .data-container {
        display: none;
        padding: 0.5rem;
        text-align: justify;
        margin-bottom: 100px
    }

    .branch_code {
        padding: 5px;
        list-style: none;
        background: whitesmoke;
        margin: 0.3rem;
        cursor: pointer;

    }

    .branch_code:hover {
        border-bottom: 2px solid black;
    }

    #branch_name {
        background: lightgray;
        width: fit-content;
        width: 20%;
        border-radius: 8px;
        padding: 0.5rem;
    }

    .branch_year_using_js {
        background: lightgray;
        width: fit-content;
        width: 20%;
        border-radius: 8px;
        padding: 0.5rem;
        margin-left: 1rem;
    }



    @media screen and (max-width: 750px) {
        .right-sidebar {
            background: #9efe7b1a;
            /* padding-left: 100px; */
            width: 80%;
            height: 100%;
            position: fixed;
            left: 20%;
            overflow-y: scroll;
            padding-left: 3px;

        }

        .side_navbar {
            background: #07c2ff;
            position: fixed;
            width: 20%;
            height: 100%;
            z-index: 10;

        }
    }

    @media screen and (max-width: 600px) {
        #branch_name {
            background: lightgray;
            width: fit-content;
            /* width: 20%; */
            border-radius: 8px;
            padding: 0.5rem;
        }

        .branch_year_using_js {
            background: lightgray;
            width: fit-content;
            /* width: 20%; */
            border-radius: 8px;
            padding: 0.5rem;
            margin-left: 1rem;

        }

    }

    @media screen and (max-width: 390px) {
        #right-sidebar-container-Branch {
            flex-direction: column;
        }

        .branch_year_using_js {
            background: lightgray;
            width: fit-content;
            /* width: 20%; */
            border-radius: 8px;
            padding: 0.5rem;
            margin-left: 1rem;
            display: flex;
            margin: 2px;

        }

        .right-sidebar {
            background: #9efe7b1a;
            /* padding-left: 100px; */
            width: 70%;
            height: 100%;
            position: fixed;
            left: 30%;
            overflow-y: scroll;
            padding-left: 3px;
            padding-bottom: 30px;

        }

        .side_navbar {
            position: fixed;
            width: 30%;
        }
    }
</style>

<!-- Login form css -->





<div class="right-sidebar">
    <!-- index page -->

    <!-- home -->
    <div id="right-sidebar-container-Home" class="data-container" style="display:flex; ">


    </div>



    <!-- Branch -->
    <div id="right-sidebar-container-Branch" style="margin-bottom: 100px;" class="data-container">

        <ul id="branch_name">
            @for ($i=0; $i<7; $i++) <li class="branch_code" id="{{$list[$i]['branch_code']}}" onclick="print_value({{$i}})">
                {{$list[$i]['branches']}}
                </li>
                @endfor
        </ul>

        <ul id="branch_year">
        </ul>

        <ul id="branch_year_sem">
        </ul>

    </div>

    <!-- Login -->
    <div id="right-sidebar-container-Login"  class="data-container">
        <!-- <h1 class="main-container">Login</h1> -->
        <x-loginpage />


    </div>

    <!-- Explore -->
    <div id="right-sidebar-container-Explore" class="data-container">
        <h1 class="main-container">Explore</h1>

    </div>

</div>





</body>

<script>
    var leftSideItems = document.querySelectorAll(".sideNavigation");

    function hide_show(id) {
        var rsc1 = document.getElementById("right-sidebar-container-Home");
        var rsc2 = document.getElementById("right-sidebar-container-Branch");
        var rsc3 = document.getElementById("right-sidebar-container-Login");
        var rsc4 = document.getElementById("right-sidebar-container-Explore");



        switch (id) {
            case 0:
                unselected_area();
                selected_area(id);
                // console.log(rsc1);
                rsc1.style.display = "flex";
                rsc2.style.display = "none";
                rsc3.style.display = "none";
                rsc4.style.display = "none";
                break;
            case 1:
                unselected_area();
                selected_area(id);
                // console.log(rsc2);
                rsc1.style.display = "none";
                rsc2.style.display = "flex";
                rsc3.style.display = "none";
                rsc4.style.display = "none";
                break;
            case 2:
                unselected_area();
                selected_area(id);
                // console.log(rsc3);
                rsc1.style.display = "none";
                rsc2.style.display = "none";
                rsc3.style.display = "block";
                rsc4.style.display = "none";
                break;
            case 3:
                unselected_area();
                selected_area(id);
                // console.log(rsc4);
                rsc1.style.display = "none";
                rsc2.style.display = "none";
                rsc3.style.display = "none";
                rsc4.style.display = "block";
                break;

            default:
                break;
        }
    }

    function selected_area(id) {
        leftSideItems[id].style.background = "blue";
        leftSideItems[id].style.color = "white";
    }

    function unselected_area() {
        leftSideItems.forEach(ele => {
            ele.style.background = "white";
            ele.style.color = "black";
        });


    }
</script>

<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous">



</script>
<script>
    function print_value(id) {
        if ($('#branch_year_sem').css('display') == 'block') {
            $('#branch_year_sem').html("");
            $("#branch_year_sem").removeClass('branch_year_using_js');

        }

        var branch_code = $(".branch_code")[id];
        var myObject = new Object();
        myObject.branch = branch_code.id;
        req_data = JSON.stringify(myObject);
        $.ajax({
            url: "http://localhost/BTDoc/APIs/year.php",
            data: req_data,
            type: "POST",
            beforeSend: function() {

            },
            success: function(data) {
                // console.log(data);
                str = "";
                data.forEach(el => {
                    str += "<li class='branch_code' onclick='show_sem(" +
                        el['branch_code'] +
                        "," +
                        el['year'] +
                        ")'>" +
                        el['year'] +
                        "</li>";
                });
                $('#branch_year').html(str);
                $('#branch_year').html(str).addClass("branch_year_using_js");
            },
            error: function(e) {
                $('#branch_year').html("Something went wrong !");

            }
        });
    }

    function show_sem(branch, year) {
        var myObject = new Object();
        myObject.branch = branch.id;
        myObject.year = year;
        req_data = JSON.stringify(myObject);

        $.ajax({
            url: "http://localhost/BTDoc/APIs/sem.php",
            data: req_data,
            type: "POST",
            beforeSend: function() {

            },
            success: function(data) {
                str = "";
                data.forEach(el => {
                    str += "<li class='branch_code' onclick='show_sub(" +
                        el['branch_code'] +
                        "," +
                        el['year'] + "," + el['sem'] + ")'>SEM" +
                        el['sem'] +
                        "</li>";
                });
                console.log(data);

                $('#branch_year_sem').html(str);
                $('#branch_year_sem').html(str).addClass("branch_year_using_js");
            },
            error: function(e) {
                $('#branch_year').html("Something went wrong !");

            }
        });

        // console.log(req_data);
    }

    // login user
    function check_login() {


        // var form_data = $('#login-form').serializeArray();
        // console.log(form_data)


        var form_data = $('#login-form').serializeArray();
        console.log(form_data)


        // console.log(JSON.stringify($('#login-form').serializeArray()));

        // exit();

        let url = "http://127.0.0.1:8000/api/check-login";
        $.ajax({
            url: url,
            data: form_data,
            type: "POST",
            beforeSend: function() {

            },
            success: function(data) {
                // .................. for each loop in jquery ....................

                // $.each(data, function(i) {
                //     console.log(data[i]['email'])
                // });

                console.log(data['data']);
                if (data['data'] != undefined)
                    alert("email :" + data['data']['email'], "login" + `'data[login]'`);
                else
                    alert(data["message"]);


            },
            error: function(e) {
                console.log("Something went wrong !");

            }
        });

    }

    // user registration

    function check_registration() {

        var all_input_field = document.querySelectorAll('.all-input-field');
        console.log(all_input_field)
        var form_data = $('#sign-form').serializeArray();

        console.log(form_data[0]['value'])
        console.log(form_data)
        send = true;
        all_input_field.forEach(ele => {
            if (ele.value == "") {
                ele.style.border = "2px solid red";
                send = false;
            }
        });
        // form_data = $('#sign-form').serializeArray();
        if (send) {

            let url = "http://127.0.0.1:8000/api/check-registration";
            $.ajax({
                url: url,
                data: form_data,
                type: "POST",
                beforeSend: function() {

                },
                success: function(data) {
                    // .................. for each loop in jquery ....................

                    // $.each(data, function(i) {
                    //     console.log(data[i]['email'])
                    // });
                    alert(data['message'])

                },
                error: function(e) {
                    console.log(e)
                    alert("Something went wrong !");

                }
            });
        }else
            alert("Fill correctly !")


    }
</script>

</html>