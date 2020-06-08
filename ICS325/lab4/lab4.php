<?php
function lab4() {
    $html = "<h1 class='content-header'>UberJSON Parser</h1>";
    $html .= "<div class='lab4-form'>";
    $html .= "<input type='file' name='upload' class='lab4-upload' accept='.json, .txt, .csv'>";
    $html .= "<input type='submit' value='Process File' name='submit' class='lab4-submit' onclick='upload()'>";
    $html .= "</div>";
    return $html;
}
