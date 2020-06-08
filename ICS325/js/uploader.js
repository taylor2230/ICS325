// only for lab4

async function upload() {
    const location = document.getElementsByClassName("lab4-form")[0];
    let file = document.getElementsByClassName("lab4-upload")[0].files;
    let form = new FormData();
    form.set("file", file[0],file[0].name);
    let data = await fetch('php/json.php', {
        method: 'POST',
        body: form,
        contentType: "multipart/form-data"
    });

    location.innerHTML = await data.text();
}
