let togglerBtn = document.getElementById("toggler-btn");
let navContent = document.getElementById("navContent");

togglerBtn.onclick = function () {
    let style = navContent.style.display;

    if (style === "block") {
        navContent.style.display = "none";
    }

    else {
        navContent.style.display = "block";
    }
}