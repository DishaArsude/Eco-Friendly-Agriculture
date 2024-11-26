<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $wasteAmount = $_POST['wasteAmount'];

    if ($wasteAmount <= 0) {
        header("Location: index.php?message=Invalid+amount&amount=$wasteAmount");
        exit();
    }

    // Example conversion logic: 1 kg of waste = 0.5 kg of fertilizer
    $fertilizerAmount = $wasteAmount * 0.5;

    $message = "You can produce $fertilizerAmount kg of fertilizer";
    header("Location: index.php?message=" . urlencode($message) . "&amount=$wasteAmount");
    exit();
} else {
    header("Location: index.php?message=Invalid+request");
    exit();
}
?>
