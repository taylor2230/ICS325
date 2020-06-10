<?php
//include $_SERVER['DOCUMENT_ROOT'].'/ICS325/lab4/lab4.php';
include '/home/students/ics325su20/ics325su2028/public_html/lab4/lab4.php';
$data = $_FILES["file"];

if($data["error"] === UPLOAD_ERR_OK) {
    $process = new Json(json_decode(file_get_contents($data['tmp_name']), true));
    $process->builder();
} else {
    $site = lab4();
    $site .= "<h3 class='lab4-error'>Error - File did not upload successfully</h3>";
    $site .= "<button class='lab4-submit' onclick='loadSite(\"page-content\", 4, this);'>Lab Four</button>";
    print $site;
}
class Json
{
    private $json;

    public function __construct($json)
    {
        $this->json = $json;

    }

    function builder() {
        $html = "<table class='lab4-table'>";
        for($i = 0; $i < count($this->json);$i++) {
            foreach ($this->json[$i] as $k => $v) {
                $html .= "<tr>";
                $html .= "<td>" . $k . "</td>";
                $html .= $this->serialize($v);
                $html .= "</tr>";
            }
        }
        $html .= "</table>";
        $html .= "<button class='lab4-submit' onclick='loadSite(\"page-content\", 4, this);'>Lab Four</button>";
        print $html;
    }

    function serialize($value)
    {
        $html = "";

        if(is_array($value)) {
            $html .= "<td><table>";
            $html .= $this->iterateArray(null, $value);
            $html .= "</table></td>";
        } else {
            $html .= "<td>" . $value . "</td>";
        }

        return $html;
    }

    function iterateArray($k, $v)
    {
        $temp = "";
        if(is_array($v)) {
            foreach ($v as $item => $subItem) {
                if(!is_numeric($item)) {
                    $temp .= $this->iterateArray($item, $subItem);
                } else {
                    $temp .= $this->iterateArray(null, $subItem);
                }
            }
        } else {
            $temp .= "<tr>";
            if($k !== null) {
                $temp .= "<td>" . $k . "</td>";
            }
            $temp .= "<td>" . $v . "</td>";
            $temp .= "</tr>";
        }
        return $temp;
    }
}
