<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST['euros'])) {
            echo "<p style='color:red;'>Please enter a valid amount.</p>";
        } else {
            $euros = $_POST['euros'];
            $currency = $_POST['currency'];

            $usd_rate = 1.05;
            $jpy_rate = 157.49;
            $chf_rate = 0.95;

            if ($currency == "usd") {
                $converted = $euros * $usd_rate;
                $currency_name = "US Dollars (USD)";
            } elseif ($currency == "jpy") {
                $converted = $euros * $jpy_rate;
                $currency_name = "Japanese Yen (JPY)";
            } else {
                $converted = $euros * $chf_rate;
                $currency_name = "Swiss Francs (CHF)";
            }

            echo "<h2>Converted Value:</h2>";
            echo "<p>" . number_format($euros, 2)." €" . " = " . number_format($converted, 2) . " " . $currency_name . "</p>";
        }
    }
?>
