const leadPopUp = document.querySelector(".lead-pop-up"),
    leadPopUpExit = document.querySelector(".lead-pop-up .exit-container span"),
    leadExitMobile = document.querySelector(".lead-pop-up .button-container button"),
    exitButtons = [leadPopUpExit, leadExitMobile];

exitButtons.forEach((e) => {
    e.addEventListener("click", (e) => {
        e.preventDefault(), leadPopUp.classList.remove('lead-pop-up'),leadPopUp.classList.add("lead-pop-up-hide");
    });
});
    setTimeout(() => {
        leadPopUp.classList.remove("lead-pop-up-hide"), leadPopUp.classList.remove("lead-pop-up-display");
    }, 3e3);
