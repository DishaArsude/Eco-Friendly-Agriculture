<!DOCTYPE html>
<html>
<head>
    
    <title>Nutrient Comparison in Vegetable Waste vs Conventional Fertilizers</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-image: url("n1.jpg");
            color: #333;
            line-height: 1.6;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        h1 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #ffffff;
            text-align: center;
        }

        .table-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            max-width: 800px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .table-header {
            text-align: center;
            font-weight: bold;
            font-size: 1.2rem;
            color: #fff;
            background-color: #28a745;
            padding: 10px 0;
            border-radius: 8px 8px 0 0;
        }

        .table-row {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .table-row:last-child {
            border-bottom: none;
        }

        .icon {
            width: 40px;
            height: 40px;
        }

        .nutrient-info {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .nutrient-name {
            font-weight: bold;
            color: #fefefe;
        }

        .accordion-container {
            margin-top: 30px;
            max-width: 800px;
            width: 100%;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .accordion-header {
            padding: 15px;
            background-color: #28a745;
            color: #fff;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .accordion-header:hover {
            background-color: #218838;
        }

        .accordion-content {
            display: none;
            padding: 15px;
            background-color: #f9f9f9;
            color: #333;
        }

        .accordion-content ul {
            padding-left: 20px;
            list-style-type: disc;
        }
        .accordion-content.active {
            display: block;
        }
    </style>
</head>
<body>

    <h1>Nutrient Content in Vegetable Waste vs Conventional Fertilizers</h1>

    <div class="table-container">
       
        <div class="table-header">Nutrient</div>
        <div class="table-header">Comparison</div>

        <div class="table-row">
            <img src="n.jpg" alt="Nitrogen Icon" class="icon">
            <div class="nutrient-info">
                <span class="nutrient-name">Nitrogen (N)</span>
                <span>Vegetable Waste: Low</span>
            </div>
            <div class="nutrient-info">
                <span>Conventional Fertilizer: High</span>
            </div>
        </div>

        <div class="table-row">
            <img src="p.jpg" alt="Phosphorus Icon" class="icon">
            <div class="nutrient-info">
                <span class="nutrient-name">Phosphorus (P)</span>
                <span>Vegetable Waste: Moderate</span>
            </div>
            <div class="nutrient-info">
                <span>Conventional Fertilizer: High</span>
            </div>
        </div>

        <div class="table-row">
            <img src="k.jpg" alt="Potassium Icon" class="icon">
            <div class="nutrient-info">
                <span class="nutrient-name">Potassium (K)</span>
                <span>Vegetable Waste: Moderate</span>
            </div>
            <div class="nutrient-info">
                <span>Conventional Fertilizer: High</span>
            </div>
        </div>
    </div>

    <div class="accordion-container">
        <div class="accordion-header" onclick="toggleAccordion()">
            <span>Solution: Enhancing Nutrient Balance</span>
            <span>+</span>
        </div>
        <div class="accordion-content" id="accordionContent">
            <p>To balance the nutrient content in vegetable waste and create a more effective organic fertilizer, consider these additions:</p>
            <ul>
                <li><strong>High-Nitrogen Materials:</strong> Add grass clippings, manure, or legumes to supplement nitrogen levels.</li>
                <li><strong>Phosphorus Supplements:</strong> Bone meal or rock phosphate can be added to boost phosphorus content.</li>
                <li><strong>Potassium Sources:</strong> Wood ash and seaweed are excellent potassium-rich organic materials to add.</li>
            </ul>
        </div>
    </div>

    <script>
        function toggleAccordion() {
            const content = document.getElementById("accordionContent");
            content.classList.toggle("active");
        }
    </script>

</body>
</html>
