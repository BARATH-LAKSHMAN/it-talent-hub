var button1 = document.getElementById("button1");
var button2 = document.getElementById("button2")
var img1 = document.getElementById("img1");
var img2 = document.getElementById("img2");

button1.onclick = () => {
    button1.classList.add("selected");
    button2.classList.remove("selected");
    img2.classList.add("hide");
    img1.classList.remove("hide");
};

button2.onclick = () => {
    button2.classList.add("selected");
    button1.classList.remove("selected");
    img1.classList.add("hide");
    img2.classList.remove("hide");
};

