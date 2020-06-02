// Open the modals
var modalBtn = document.querySelectorAll(".modal-btn");

modalBtn.forEach(function (btn) {
    btn.onclick = function () {
        var modal = btn.getAttribute("data-modal");

        document.getElementById(modal).style.display = "block";
    }
});

// Close the modals
var closeBtn = document.querySelectorAll(".close-modal");

closeBtn.forEach(function (btn) {
    btn.onclick = function () {
        var modal = (btn.closest(".modal").style.display = "none");
    };
});

// Close modal when user clicks outside modal window
window.onclick = function (e) {
    if (e.target.className == "modal") {
        e.target.style.display = "none";
    }
};

//Back button
function goBack() {
    window.history.back();
}

//Print button  
function printCert() {
    window.print();
}