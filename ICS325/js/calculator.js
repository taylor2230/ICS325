//only for lab3

function submit(id, type) {
    let async = new Ajax(id, encodeURIComponent(type));
    async.request("calculator.php");
}

function calculate(text) {
    let num1 = document.getElementById("num-1");
    let num2 = document.getElementById("num-2");
    console.log(num1.value, num2.value);
    if(num1.value !== "" && num2.value !== "") {
        let bool = (text === "/" && (num1.value * num2.value === 0));
        if(!bool) {
            submit("page-content", `${num1.value}~${text}~${num2.value}`);
        } else {
            alert("Cannot divide by zero");
        }
    } else {
        if(num1.value === "") {
            alert("Missing first number");
        } else {
            alert ("Missing second number");
        }
    }
}

