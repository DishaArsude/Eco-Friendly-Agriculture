<!DOCTYPE html>
<html lang="en">
<head>
 
    <title>Science & Innovation</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        
        body {
            background-image: url('d1.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
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

     

        .nav-links {
            display: flex;
            gap: 20px; 
            position: relative;
        }

        .nav-links a {
            color: rgb(0, 0, 0);
            text-decoration: none;
            font-size: 1rem;
            transition: color 0.3s;
            font-family: Arial, sans-serif;
        }

        .nav-links a:hover {
            color: #FFD700;
            background-color: rgba(0, 0, 0, 0.4);
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

        .home {
            text-align: center;
            max-width: 800px;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0);
            border-radius: 8px;
            margin-top: 70px;
        }

        .home p {
            color: black;
            font-size: 2rem;
            line-height: 1.5;
            font-family: Arial, Helvetica, sans-serif;
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

    <div class="home">
        <p><b><i>Eco-Friendly Agriculture: The Power of Vegetable Waste in Soil Enrichment</i></b></p>
    </div>

</body>
</html>
