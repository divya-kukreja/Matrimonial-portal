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

let myProfile = document.getElementById("profileData");
let myProfileData = document.getElementById("profileDataDrop");

myProfile.onclick = function () {
    let style = myProfileData.style.display;

    if (style === "block") {
        myProfileData.style.display = "none";
    }

    else {
        myProfileData.style.display = "block";
    }
}

let myProfile1 = document.getElementById("profileRequest");
let myProfileData1 = document.getElementById("profileRequestData");

myProfile1.onclick = function () {
    let style = myProfileData1.style.display;

    if (style === "block") {
        myProfileData1.style.display = "none";
    }

    else {
        myProfileData1.style.display = "block";
    }
}