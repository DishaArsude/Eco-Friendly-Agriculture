<!DOCTYPE html>
<html >
<head>
  
    <title>Science And Innovation</title>
    <link rel="stylesheet" href="login.css">
   
    <style>
           
               body {
            background-image: url('login.jpg'); 
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
            font-family: Arial, sans-serif;
        }
            .nav-links {
            display: flex;
            gap: 20px; 
            position: relative;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-size: 1rem;
            transition: color 0.1s;
            font-family: Arial, sans-serif;
        }

        .nav-links a:hover {
            color: #FFD700;
            background-color: rgba(0, 0, 0, 0.1);
        }

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
                margin-left: 990px;
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
        </div>
        <button><a href="login.html" style="color: white; text-decoration: none;">Login</a></button>
    </nav>

    <div class="login-box">
        <p>Login</p>
        <form id="loginForm">
            <div class="user-box">
                <input required="" name="email" type="text" id="email">
                <label>Email</label>
            </div>
            <div class="user-box">
                <input required="" name="password" type="password" id="password">
                <label>Password</label>
            </div>
            <a href="science.php" id="submitBtn">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Submit
            </a>
        </form>
        <p>Don't have an account? <a href="signup.php" class="a2">Sign up!</a></p>
    </div>
  
    <video autoplay muted loop>
        <source src="lo.mp4" type="video/mp4">
        <source src="lo.mp4" type="video/webm">
    </video>

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
