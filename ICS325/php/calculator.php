<?php
function calculator($num1, $operator, $num2) {
    switch($operator) {
        case "+":
            return $num1 + $num2;
            break;

        case "-":
            return $num1 - $num2;
            break;

        case "*":
            return $num1 * $num2;
            break;

        case "/":
            return $num1 / $num2;
            break;

        default:
            return "Error";
    }
}

$header = explode("~", $_REQUEST["val"]);
$result = calculator($header[0], $header[1], $header[2]);

$html = "<h1 class='content-header'>1st Grade Calculator - Results</h1>";
$html .= "<div class='lab3'>";
$html .= "<label class='lab3-label'>Number One: $header[0]</label>";
$html .= "<label class='lab3-label'>Number Two: $header[2]</label>";
$html .= "<label class='lab3-result'>Result: " . $header[0] . $header[1] . $header[2] . "=" . $result . "</label>";
$html .= "<button class='calc-submit' onclick='loadSite(\"page-content\", 3, this);'>Lab Three</button>";
$html .= "</div>";
print $html;
