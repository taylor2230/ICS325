<?php
include $_SERVER['DOCUMENT_ROOT'].'/ICS325/lab3/lab3.php';
include $_SERVER['DOCUMENT_ROOT'].'/ICS325/lab4/lab4.php';
include $_SERVER['DOCUMENT_ROOT'].'/ICS325/lab5/lab5.php';
include $_SERVER['DOCUMENT_ROOT'].'/ICS325/lab6/lab6.php';
include $_SERVER['DOCUMENT_ROOT'].'/ICS325/lab7/lab7.php';
include $_SERVER['DOCUMENT_ROOT'].'/ICS325/lab8/lab8.php';
include $_SERVER['DOCUMENT_ROOT'].'/ICS325/lab9/lab9.php';
include $_SERVER['DOCUMENT_ROOT'].'/ICS325/lab10/lab10.php';
include $_SERVER['DOCUMENT_ROOT'].'/ICS325/phase1/phase1.php';
include $_SERVER['DOCUMENT_ROOT'].'/ICS325/phase2/phase2.php';
include $_SERVER['DOCUMENT_ROOT'].'/ICS325/phase3/phase3.php';
include $_SERVER['DOCUMENT_ROOT'].'/ICS325/phase4/phase4.php';
include $_SERVER['DOCUMENT_ROOT'].'/ICS325/final/final.php';

//include '/home/students/ics325su20/ics325su2028/public_html/lab3/lab3.php';
//include '/home/students/ics325su20/ics325su2028/public_html/lab4/lab4.php';
//include '/home/students/ics325su20/ics325su2028/public_html/lab5/lab5.php';
//include '/home/students/ics325su20/ics325su2028/public_html/lab6/lab6.php';
//include '/home/students/ics325su20/ics325su2028/public_html/lab7/lab7.php';
//include '/home/students/ics325su20/ics325su2028/public_html/lab8/lab8.php';
//include '/home/students/ics325su20/ics325su2028/public_html/lab9/lab9.php';
//include '/home/students/ics325su20/ics325su2028/public_html/lab10/lab10.php';
//include '/home/students/ics325su20/ics325su2028/public_html/phase1/phase1.php';
//include '/home/students/ics325su20/ics325su2028/public_html/phase2/phase2.php';
//include '/home/students/ics325su20/ics325su2028/public_html/phase3/phase3.php';
//include '/home/students/ics325su20/ics325su2028/public_html/phase4/phase4.php';
//include '/home/students/ics325su20/ics325su2028/public_html/final/final.php';

$header = explode("~", $_REQUEST["val"]);
$frame = new FrameLoad($header);
$frame -> requestHTML();
class FrameLoad
{

    private $type;
    function __construct($type)
    {
        $this->type = $type;
    }

    function requestHTML() {
        //handles the type of request to return correct content
        if($this->type[0] == 0) $this->siteFrame();
        elseif ($this->type[0] == 1) print $this->mainPage();
        elseif ($this->type[0] == 3) print lab3();
        elseif ($this->type[0] == 4) print lab4();
        elseif ($this->type[0] == 5) print lab5();
        elseif ($this->type[0] == 6) print lab6();
        elseif ($this->type[0] == 7) print lab7();
        elseif ($this->type[0] == 8) print lab8();
        elseif ($this->type[0] == 9) print lab9();
        elseif ($this->type[0] == 10) print lab10();
        elseif ($this->type[0] == 11) print phase1();
        elseif ($this->type[0] == 12) print phase2();
        elseif ($this->type[0] == 13) print phase3();
        elseif ($this->type[0] == 14) print phase4();
        elseif ($this->type[0] == 15) print fin();
    }

    function siteFrame() {
        $html = null;

        /*
         * header section
         */
        $html .= "<section class='header'>";
        //left most image
        $html .= "<img class='header-img' id='h-img' src='./assets/1.svg' alt=''>";
        //title
        $html .= "<div class='title'><h1 class='title-0'>Shane's Site</h1><h3 class='title-1'>Home</h3></div>";
        //metro logo
        $html .= "<img class='header-metro' src='./assets/MetroLogo.png' alt=''>";
        //profile picture
        $html .= "<div class='logopicture'></div>";
        //color sliders
        $html .= "<div class='slider'>";
        $html .= "<input class='slider-0' id='red' type='range' min='0' max='255' value='255' oninput='color();'>";
        $html .= "<input class='slider-1' id='green' type='range' min='0' max='255' value='255' oninput='color();'>";
        $html .= "<input class='slider-2' id='blue' type='range' min='0' max='255' value='255' oninput='color();'>";
        $html .= "</div>";
        //closing div
        $html .= "</section>";

        /*
         * content section
         */
        $html .= "<section class='content'>";
        //side menu
        $html .= "<div class='menu'>";
        $html .= "<input type='checkbox' class='sidebar-control' id='h-s' name='h-s' onclick='menuSlide(this)'>";
        $html .= "<label class='sidebar-control-0' for='h-s'>";
        $html .= "<svg viewBox='0 0 100 80' width='40' height='40'>";
        $html .= "<rect width='60' height='10'></rect>";
        $html .= "<rect y='20' width='60' height='10'></rect>";
        $html .= "<rect y='40' width='60' height='10'></rect>";
        $html .= "</svg>";
        $html .= "</label>";
        $html .= "<div class='sidebar'>";
        //labs drop down menu
        $html .= "<a href='#' class='home-link' target='_self' onclick='loadSite(\"page-content\", 1, this);'>Home</a>";
        $html .= "<input type='checkbox' class='sidebar-1' id='labs' name='labs'>";
        $html .= "<label class='sidebar-1-0' for='labs'>Labs</label>";
        $html .= "<a href='#' class='labs-links' target='_self' onclick='loadSite(\"page-content\", 3, this);'>Lab Three</a>";
        $html .= "<a href='#' class='labs-links' target='_self' onclick='loadSite(\"page-content\", 4, this);'>Lab Four</a>";
        $html .= "<a href='#' class='labs-links' target='_self' onclick='loadSite(\"page-content\", 5, this);'>Lab Five</a>";
        $html .= "<a href='#' class='labs-links' target='_self' onclick='loadSite(\"page-content\", 6, this);'>Lab Six</a>";
        $html .= "<a href='#' class='labs-links' target='_self' onclick='loadSite(\"page-content\", 7, this);'>Lab Seven</a>";
        $html .= "<a href='#' class='labs-links' target='_self' onclick='loadSite(\"page-content\", 8, this);'>Lab Eight</a>";
        $html .= "<a href='#' class='labs-links' target='_self' onclick='loadSite(\"page-content\", 9, this);'>Lab Nine</a>";
        $html .= "<a href='#' class='labs-links' target='_self' onclick='loadSite(\"page-content\", 10, this);'>Lab Ten</a>";
        //projects drop down menu
        $html .= "<input type='checkbox' class='sidebar-2' id='projects' name='projects'>";
        $html .= "<label class='sidebar-2-0' for='projects'>Projects</label>";
        $html .= "<a href='#' class='project-links' target='_self' onclick='loadSite(\"page-content\", 11, this);'>Phase One</a>";
        $html .= "<a href='#' class='project-links' target='_self' onclick='loadSite(\"page-content\", 12, this);'>Phase Two</a>";
        $html .= "<a href='#' class='project-links' target='_self' onclick='loadSite(\"page-content\", 13, this);'>Phase Three</a>";
        $html .= "<a href='#' class='project-links' target='_self' onclick='loadSite(\"page-content\", 14, this);'>Phase Four</a>";
        $html .= "<a href='#' class='project-links' target='_self' onclick='loadSite(\"page-content\", 15, this);'>Final</a>";
        $html .= "</div>";
        $html .= "</div>";
        //website page content
        $html .= "<div class='page-content' id='page-content'>";
        $html .= $this->mainPage();
        $html .= "</div>";
        $html .= "</section>";

        /*
         * footer section
         */
        $html .= "<section class='footer'>";
        //$html .= "<p class='date'>" . date("m/d/Y h:i:sa") . "</p>";
        $html .= "<p class='date' onload='clock(this)'></p>";
        $html .= "<p class='copyright'>CopyRight @ Metropolitan State University</p>";
        $html .= "<p class='accessed'>Accessed By: Shane Taylor</p>";
        $html .= "</section>";

        print $html;
    }

    function mainPage() {
        $main = "<h1 class='content-header'>About Me</h1>";
        $main .= "<p class='content-text'>Name: Shane Taylor</p>";
        $main .= "<p class='content-text'>Hobbies: I spend a lot of time outside of work and school developing my own websites and apps</p>";
        $main .= "<p class='content-text'>The attached image is what I plan on doing when I graduate school to visit most of the major Civil War battlefields</p>";
        $main .= "<img class='content-img' src='./assets/trip.jpeg' alt='' width='40%' height='40%'>";
        $main .= "<p class='content-text'>Favorite Quote: 'It'll take a lot more than a bullet to the brain, lungs, heart, back and balls to kill Michael Scarn', Michael Scarn</p>";
        $main .= "<p class='content-text'>Bio: I wouldn't say I love programming in general as I like programming in specific ways.
                    I prefer to not write in PL/SQL which makes me rip my hair out at work but I love to create things in JS, PHP, and Swift.
                    Besides programming, I really enjoy things related to history and electric bikes. I bike roughly 30 miles a day and use it as a way to enjoy the outdoors.</p>";
        return $main;
    }

}
