<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Composting Vegetable Waste Safely</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-image: url("bg.jpg");
    background-size: cover
    background-position: center center;
    background-attachment: fixed; 
    margin: 0;
    padding: 0;
    height: 100vh;
}


.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.8); 
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

        h1, h3 {
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: auto;
        }

        .carousel {
            position: relative;
            width: 100%;
            max-width: 600px;
            margin: auto;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
        }
        .carousel-inner {
            display: flex;
            transition: transform 0.5s ease;
        }body {
    font-family: Arial, sans-serif;
    background-image: url("bg.jpg");
    background-size: cover; 
    background-position: center center; 
    background-attachment: fixed; 
    margin: 0;
    padding: 0;
    height: 100vh;
}


.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.8); 
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

        .carousel-item {
            min-width: 50%;
            box-sizing: border-box;
            text-align: center;
        }
        .carousel-item img {
            width: 50%;
            height: auto;
            border-radius: 10px;
        }
        .carousel-control {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            border: none;
            font-size: 2rem;
            padding: 5px 10px;
            cursor: pointer;
            z-index: 10;
        }
        .prev { left: 10px; }
        .next { right: 10px; }

        /* Step-by-Step Guide Styles */
        .guide {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-bottom: 40px;
        }
        .guide-step {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .guide-step h3 {
            margin: 0 0 10px;
        }

        .download-section {
            text-align: center;
            margin-top: 20px;
        }
        .download-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #28a745;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }
        .download-button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Composting Vegetable Waste Safely</h1>
    <p>Learn how to compost vegetable waste safely and effectively to control pests and pathogens.</p>

    <div class="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="ss.jpg" alt="Common Pest 1">
                <p>Pest 1: Small, winged insects that breed in decaying organic matter. They can spread diseases and attract other pests.
                </p>
            </div>
            <div class="carousel-item">
                <img src="b.jpg" alt="Common Pest 2">
                <p>Pest 2:These pests feed on organic matter and can hinder the breakdown of compost if present in large numbers.</p>
            </div>
           
        </div>
        <button class="carousel-control prev" onclick="prevSlide()">‹</button>
        <button class="carousel-control next" onclick="nextSlide()">›</button>
    </div>

    <h2>How to Compost Vegetable Waste Safely</h2>
    <div class="guide">
        <div class="guide-step">
            <h3>Step 1: Prepare the Waste</h3>
            <p>Chop vegetable scraps into small pieces to speed up the composting process.</p>
        </div>
        <div class="guide-step">
            <h3>Step 2: Set Up High-Temperature Composting</h3>
            <p>Turn the compost frequently to maintain high temperatures (above 131°F) to kill pathogens.</p>
        </div>
        <div class="guide-step">
            <h3>Step 3: Consider Vermicomposting</h3>
            <p>Use earthworms to help break down waste, which can help control pathogens naturally.</p>
        </div>
    </div>

    <div class="download-section">
        <a href="smallscaleguidance.pdf" download class="download-button">Download Composting Tips</a>
    </div>
</div>

<script>
    let currentIndex = 0;

    function showSlide(index) {
        const slides = document.querySelectorAll('.carousel-item');
        if (index >= slides.length) currentIndex = 0;
        if (index < 0) currentIndex = slides.length - 1;
        document.querySelector('.carousel-inner').style.transform = 'translateX(-' + currentIndex * 100 + '%)';
    }

    function nextSlide() {
        currentIndex++;
        showSlide(currentIndex);
    }

    function prevSlide() {
        currentIndex--;
        showSlide(currentIndex);
    }

    showSlide(currentIndex);
</script>

</body>
</html>
