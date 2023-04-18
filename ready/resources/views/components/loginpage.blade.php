<div class="main-container" id="main-container-login">
    <div class="form-container">

        <div class="srouce"></div>

        <div class="form-body">
            <h2 class="title">Log in with</h2>
            <div class="social-login">
                <ul>
                    <li class="google"><a href="#">Google</a></li>
                    <li class="fb"><a href="#">Facebook</a></li>
                </ul>
            </div><!-- SOCIAL LOGIN -->

            <div class="_or">or</div>

            <form action="" id="login-form" class="the-form">

                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter your email">

                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password">

                <input type="button" class="__btn" onclick="check_login()" value="Log In">

            </form>

        </div><!-- FORM BODY-->

        <div class="form-footer">
            <div>
                <span>Don't have an account?</span> <a onclick="sign_up()">Sign Up</a>
            </div>
        </div><!-- FORM FOOTER -->

    </div><!-- FORM CONTAINER -->
</div>













<div class="main-container " id="main-container-sign">
    <div class="form-container">

        <div class="srouce"></div>

        <div class="form-body">
            <h2 class="title">Registration with</h2>
            <div class="social-login">
                <ul>
                    <li class="google"><a href="#">Google</a></li>
                    <li class="fb"><a href="#">Facebook</a></li>
                </ul>
            </div><!-- SOCIAL LOGIN -->

            <div class="_or">or</div>

            <form action="" id="sign-form" class="the-form">

                <!-- <label for="user_id">User ID</label>
                <input type="number" name="user_id" class="all-input-field" id="user_id" placeholder="Enter your email">
                 -->
                <label for="usser_email">Email</label>
                <input type="email" name="user_email" class="all-input-field" id="user_email" placeholder="Enter your email">
                
                <label for="user_pass">Password</label>
                <input type="password" name="user_pass" class="all-input-field" id="user_pass" placeholder="Enter your email">
                
                <label for="user_name">User Name</label>
                <input type="text" name="user_name" class="all-input-field" id="user_name" placeholder="Enter your user name">
                
                <label for="user_mobile">Mobile</label>
                <input type="tel" name="user_mobile" class="all-input-field" id="user_mobile" placeholder="Enter your email">
                
                <label for="dob">DOB</label>
                <input type="date" name="dob" class="all-input-field" id="dob" placeholder="Enter your password">
 

                <label for="gender">Gender</label>
                <select name="gender" class="all-input-field" id="gender">
                    <option value="M" selected>Male</option>
                    <option value="F">Female</option>
                    <option value="T">Trans</option>
                </select>

                
                <label for="college_id">College ID</label>
                <input type="password" class="all-input-field" name="college_id" id="college_id" placeholder="Enter your password">
 
                <label for="college_name">College Name</label>
                <input type="password" class="all-input-field" name="college_name" id="college_name" placeholder="Enter your password">

                <label for="year">Year</label>
                <select name="year" class="all-input-field" id="year">
                    <option value="1" selected>First</option>
                    <option value="2">Second</option>
                    <option value="3">Third</option>
                    <option value="4">Fourth</option>
                </select>
                
                <label for="sem">Sem</label>
                <select name="sem" class="all-input-field" id="sem">
                    <option value="1" selected>First</option>
                    <option value="2">Second</option>
                    <option value="3">Third</option>
                    <option value="4">Fourth</option>
                    <option value="5">Fiveth</option>
                    <option value="6">Sixth</option>
                    <option value="7">seventh</option>
                    <option value="8">Eightth</option>
                </select>

                <label for="user_branch">Branch</label>
                <select name="user_branch" class="all-input-field" id="user_branch">
                    <option value="CS" selected>Computer science</option>
                    <option value="IT" selected>Information Technology</option>
                    <option value="CSE" selected>Computer science & Engineering</option>
                    <option value="AIML">Artificial Inteligence</option>
                    <option value="CE">Civil Engineering</option>
                    <option value="ME">Mechanical Engineering</option>
                    <option value="BT">Bio Technology</option>
                    <option value="EE">Electrical Engineering</option>
                    <option value="ECE">Electronics Communication Engineering</option>
                    <option value="CHE">Chemical Engineering</option>
                </select>
                
                <label for="skills">Skills</label>
                <input type="text" class="all-input-field" name="skills" id="skills" placeholder="Enter your password">
 
                <label for="Social_links">Social links</label>
                <input type="text" class="all-input-field" name="Social_links" id="Social_links" placeholder="Enter your password">
 
                <label for="Hobby">Hobby</label>
                <input type="text" class="all-input-field" name="Hobby" id="Hobby" placeholder="Enter your Hobby">
 
                <input type="button" class="__btn" onclick="check_registration()" value="Registered">

            </form>

        </div><!-- FORM BODY-->

        <div class="form-footer">
            <div>
                <span>Allready have an account?</span> <a onclick="login()">Login</a>
            </div>
        </div><!-- FORM FOOTER -->

    </div><!-- FORM CONTAINER -->
</div>


<script>
    var main_container_sign = document.getElementById('main-container-sign');
    var main_container_login = document.getElementById('main-container-login');

    function sign_up() {    
        // console.log(main_container_login);
        main_container_login.style.display = "none";
        main_container_sign.style.display = "block";

    }

    function login() {
        main_container_login.style.display = "block";
        main_container_sign.style.display = "none";
    }

</script>