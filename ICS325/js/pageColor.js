//js file specifically for color handling

function color() {
    function changeTextColor() {

    }
    const nonChange = ['menu', 'page-content'];
    let r = document.getElementById('red').value;
    let g = document.getElementById('green').value;
    let b = document.getElementById('blue'). value;
    let rgb = 'rgb(' + [r, g, b].join(',') + ')';

    let body = document.getElementById("body_main").children;

    for(let i=0;i < body.length; i++) {
        body[i].style.backgroundColor = rgb;
        let gChildren = body[i].children;
        let j = 0;
        if(gChildren.length > 0) {
            do if (nonChange.indexOf(gChildren[j].className) !== -1) {
                gChildren[j].style.backgroundColor = "";
                j++
            } else {
                j++;
            } while(j < gChildren.length);
        }
    }
}
