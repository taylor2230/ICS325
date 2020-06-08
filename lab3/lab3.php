<?php
function lab3() {

    $html = "<h1 class='content-header'>1st Grade Calculator</h1>";
    $html .= "<div class='lab3'>";
    $html .= "<label class='lab3-label' for='num-1'>Number One:</label>";
    $html .= "<input class='calc' type='number' id='num-1'>";
    $html .= "<label class='lab3-label' for='num-2'>Number Two:</label>";
    $html .= "<input class='calc' type='number' id='num-2'>";
    $html .= "<button class='calc-submit' onclick='calculate(\"+\")'>Add</button>";
    $html .= "<button class='calc-submit' onclick='calculate(\"-\")'>Subtract</button>";
    $html .= "<button class='calc-submit' onclick='calculate(\"*\")'>Multiply</button>";
    $html .= "<button class='calc-submit' onclick='calculate(\"/\")'>Divide</button>";
    $html .= "</div>";
    return $html;
}
