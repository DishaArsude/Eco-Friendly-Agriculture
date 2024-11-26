<html>
    <head>
       
        <title>Science And Innovation - Signup</title>
   
        <style>
               body {
            background-image: url('sign.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
            font-family: Arial, sans-serif;
        }
          nav {
            display: flex;
            justify-content: space-between; 
            align-items: center;
            padding: 15px 30px;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 10;
            background: rgba(0, 0, 0, 0);
        }

        .logo img {
            height: 50px;
            width: auto;
            border-radius: 50%;
        }

        .nav-links {
            display: flex;
            gap: 20px; 
            position: relative;
        }

        .nav-links a {
            color:white;
            text-decoration: none;
            font-size: 1rem;
            transition: color 0.1s;
            font-family: Arial, sans-serif;
        }

        .nav-links a:hover {
            color: #FFD700;
            background-color: rgba(0, 0, 0, 0.1);
        }

        /* Dropdown Styles */
        .dropdown {
            position: relative;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: rgba(0, 0, 0, 0.8);
            min-width: 150px;
            border-radius: 5px;
            overflow: hidden;
            z-index: 1;
        }

        .dropdown-content a {
            display: block;
            color: white;
            padding: 10px;
            text-decoration: none;
            transition: background-color 0.3s;
            font-size: 12px;
        }

        .dropdown-content a:hover {
            background-color: rgba(255, 215, 0, 0.6);
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        @media (max-width: 768px) {
            nav {
                flex-direction: column;
                align-items: flex-start;
                padding: 15px;
            }

            .nav-links {
                flex-direction: column;
                width: 100%;
                margin-top: 10px;
            }

            .nav-links a {
                margin: 5px 0;
            }
        }

        .login-box {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 400px;
            padding: 40px;
            margin: 20px auto;
            transform: translate(-50%, -55%);
            background: rgba(0,0,0,.9);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0,0,0,.6);
            border-radius: 10px;
            border: 1px solid white;
        }

        .login-box p:first-child {
            margin: 0 0 30px;
            padding: 0;
            color: #fff;
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .login-box .user-box {
            position: relative;
        }

        .login-box .user-box input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            background: transparent;
        }

        .login-box .user-box label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: .5s;
        }

        .login-box .user-box input:focus ~ label,
        .login-box .user-box input:valid ~ label {
            top: -20px;
            left: 0;
            color: #fff;
            font-size: 12px;
        }

        .login-box form a {
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            font-weight: bold;
            color: #fff;
            font-size: 16px;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            transition: .5s;
            margin-top: 40px;
            letter-spacing: 3px;
        }

        .login-box a:hover {
            background: #fff;
            color: #272727;
            border-radius: 5px;
        }

        .login-box a span {
            position: absolute;
            display: block;
        }

        .login-box a span:nth-child(1) {
            top: 0;
            left: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, #fff);
            animation: btn-anim1 1.5s linear infinite;
        }

        @keyframes btn-anim1 {
            0% {
                left: -100%;
            }

            50%,100% {
                left: 100%;
            }
        }

        .login-box a span:nth-child(2) {
            top: -100%;
            right: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(180deg, transparent, #fff);
            animation: btn-anim2 1.5s linear infinite;
            animation-delay: .375s;
        }

        @keyframes btn-anim2 {
            0% {
                top: -100%;
            }

            50%,100% {
                top: 100%;
            }
        }

        .login-box a span:nth-child(3) {
            bottom: 0;
            right: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(270deg, transparent, #fff);
            animation: btn-anim3 1.5s linear infinite;
            animation-delay: .75s;
        }

        @keyframes btn-anim3 {
            0% {
                right: -100%;
            }

            50%,100% {
                right: 100%;
            }
        }

        .login-box a span:nth-child(4) {
            bottom: -100%;
            left: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(360deg, transparent, #fff);
            animation: btn-anim4 1.5s linear infinite;
            animation-delay: 1.125s;
        }

        @keyframes btn-anim4 {
            0% {
                bottom: -100%;
            }

            50%,100% {
                bottom: 100%;
            }
        }

        .login-box p:last-child {
            color: #aaa;
            font-size: 14px;
        }

        .login-box a.a2 {
            color: #fff;
            text-decoration: none;
        }

        .login-box a.a2:hover {
            background: transparent;
            color: #aaa;
            border-radius: 5px;
        }

        video {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }
        button {
                border: none;
                color: #fff;
                background-image: linear-gradient(30deg, #00ff2a, #4ce3f7);
                border-radius: 20px;
                background-size: 100% auto;
                font-family: inherit;
                font-size: 13px;
                padding: 0.6em 1.5em;
                margin-top: -7px;
                margin-left: 600px;
                }

                button:hover {
                background-position: right center;
                background-size: 200% auto;
                -webkit-animation: pulse 2s infinite;
                animation: pulse512 1.5s infinite;
                }

                @keyframes pulse512 {
                0% {
                box-shadow: 0 0 0 0 #05bada66;
                }

                70% {
                box-shadow: 0 0 0 10px rgb(218 103 68 / 0%);
                }

                100% {
                box-shadow: 0 0 0 0 rgb(218 103 68 / 0%);
 }
}
        </style>
    </head>
    <body>
   
        <nav>
            <div class="nav-links">
            <a href="science.php"><b>Home</b></a>
                
                <div class="dropdown">
                    <a href="#"><b>Challenges</b></a>
                    <div class="dropdown-content">
                        <a href="neutritions.php">Nutrient Content Limitations</a>
                        <a href="pathogens.php">Pathogen & Pest Risks</a>
                        <a href="large.php">Large-Scale Application Challenges</a>
                    </div>
                </div>
                
                <a href="index.php"><b>Conversion</b></a>
                <button><a href="login.php" style="color: white; text-decoration: none;">Login</a></button>
            </div>
        </nav>

        <div class="login-box">
            <p>Sign Up</p>
            <form>
                <div class="user-box">
                    <input required="" name="email" type="text">
                    <label>Email</label>
                </div>
                <div class="user-box">
                    <input required="" name="password" type="password">
                    <label>Password</label>
                </div>
                <div class="user-box">
                    <input required="" name="confirm_password" type="password">
                    <label>Confirm Password</label>
                </div>
                <a href="science.php">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Submit
                </a>
            </form>
            <p>Already have an account? <a href="login.php" class="a2">Login here</a></p>
        </div>
  
        <script>
    
        const submitBtn = document.getElementById('submitBtn');
        const loginForm = document.getElementById('loginForm');

      
        loginForm.addEventListener('submit', function(event) {
            event.preventDefault(); 
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            if (email === "" || password === "") {
                alert("Please fill in both email and password.");
            } else {
                
                alert("Login successful!");
                loginForm.submit();  
            }
        });

        submitBtn.addEventListener('click', function() {
            
            alert("You are about to submit your login details.");
        });
    </script>
    </body>
</html>
