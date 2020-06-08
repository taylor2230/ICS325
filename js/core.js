class Ajax {
    constructor(element, request) {
        this.htmlElement = element;
        this.paramRequest = request;
    }
    request(file){
        const files = "./php/" + file + "?val=";
        let xmlhttp = new XMLHttpRequest();
        xmlhttp.id = this.htmlElement;
        xmlhttp.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                document.getElementById(this.id).innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", files + this.paramRequest,true);
        xmlhttp.send();
    }
}

function loadSite(id, type, pElement) {
    let async = new Ajax(id, type);
    async.request('FrameLoad.php');

    if(type !== 0) {
        const header = document.getElementsByClassName('title-1')[0];
        header.innerText = pElement.innerHTML;
    }
}

function menuSlide(element) {
    //menu slide control
    let parent = element.parentNode;
    const sibling = document.getElementById("page-content");
    if(element.checked === true) {
        parent.style.animation = "menuForward .5s forwards";
        sibling.style.animation = "pageRight .5s forwards";
    } else {
        parent.style.animation = "menuBackward 1s";
        sibling.style.animation = "pageLeft 1.1s forwards";
    }
}

let currentImage = 0;
function swapImages() {
    //swaps images
    let ele = document.getElementById("h-img");
    cssImages(ele, 0, false );
    rotateImages(ele);
    setTimeout("cssImages(document.getElementById('h-img'), 100, true)", 5600);
    setTimeout("swapImages()", 9600)

}
function rotateImages(element) {
    //loops through saved images
    let max = 4;
    currentImage++;
    if(currentImage > max) {
        currentImage = 1;
        element.src = "./assets/" + currentImage + ".svg";
    } else {
        element.src = "./assets/" + currentImage + ".svg";
    }
}

function cssImages(tag, startValue, bool) {
    //transitions for the images
    if(bool) {
        startValue--;
    } else {
        startValue++;
    }

    if(startValue > 0 && startValue < 100) {
        tag.style.opacity = (startValue / 100).toString();
        setTimeout(function(){cssImages(tag, startValue, bool);}, 10);
    }
}

function clock() {
    try {
        let a = document.getElementsByClassName('date')[0];
        let d = new Date().toLocaleDateString();
        let t = new Date().toLocaleTimeString();
        a.innerText = d + " " + t;
    } catch (e) {
        setTimeout("clock()",11000);
    }
    setInterval("clock()",11000);
}
