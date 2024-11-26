<!DOCTYPE html>
<html>
<head>
    <title>Vegetable Waste to Fertilizer</title>
    <link rel="stylesheet" href="styles.css">
    <style>
       <style>
         * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        
        body {
            background-image: url('convert.jpg');
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

        .logo img {
            height: 50px;
            width: auto;
            border-radius: 50%;
        }

        .nav-links {
            display: flex;
            gap: 20px; 
            position: relative;
            color: rgb(245, 245, 245);
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-size: 1rem;
            transition: color 0.3s;
            font-family: Arial, sans-serif;
        }

        .nav-links a:hover {
            color: #FFD700;
            background-color: rgba(0, 0, 0, 0.4);
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
        .b button {
                border: none;
                color: #fff;
                background-image: linear-gradient(30deg, #00ff2a, #4ce3f7);
                border-radius: 20px;
                background-size: 100% auto;
                font-family: inherit;
                font-size: 13px;
                padding: 0.6em 1.5em;
                margin-top: -7px;
                margin-left: 670px;
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
        <div class="b">
            <button><a href="login.php" style="color: white; text-decoration: none;">Login</a></button>
        </div>
    </div>
</nav>

<section class="conversion">
    <h2>Start the Conversion Process</h2>
    <form id="conversionForm" method="POST" action="process.php">
        <label for="wasteAmount">Amount of Vegetable Waste (kg):</label>
        <input type="number" id="wasteAmount" name="wasteAmount" required>
        <button type="button" id="convertButton">Convert Waste</button>
    </form>
    <div id="result">
        <?php
           
            if (isset($_GET['message']) && isset($_GET['amount'])) {
                $amount = htmlspecialchars($_GET['amount']);
                $message = htmlspecialchars($_GET['message']);
                echo "Result: " . $message . " for " . $amount . " kg of waste.";
            }
        ?>
    </div>
</section>

<script>
    document.getElementById('convertButton').addEventListener('click', function() {
        const wasteAmount = document.getElementById('wasteAmount').value;

        if (wasteAmount === "" || wasteAmount <= 0) {
            alert("Please enter a valid amount of vegetable waste.");
        } else {
            const confirmation = confirm(`You are about to convert ${wasteAmount} kg of vegetable waste. Do you want to proceed?`);
            if (confirmation) {
                document.getElementById('conversionForm').submit();
            }
        }
    });
</script>
</body>
</html>
