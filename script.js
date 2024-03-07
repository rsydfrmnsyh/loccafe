function reveal() {
    var reveals = document.querySelectorAll(".reveal")
    for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;
        if (elementTop < windowHeight - elementVisible) {
            reveals[i].classList.add("active");
        }
    }
}
window.addEventListener("scroll", reveal); 

var pinhal = document.getElementById("rec1");
pinhal.addEventListener("click", function() {
    window.location.replace("cafelist.php");
});


var rekk2 = document.getElementById("rec2");
rekk2.addEventListener("click", function(){
    window.location.replace("cafelist.php");
});

var rekk3 = document.getElementById("rec3");
rekk3.addEventListener("click", function(){
    window.location.replace("cafelist.php");
});
