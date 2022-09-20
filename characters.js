function characters() {
    document.getElementById("chars").classList.toggle("show");
}

window.onclick = function(event) {
    if (!event.target.matches('.char-btn')) {
        var dropdown = document.getElementsByClassName("char-container");
        var i;

        for (i=0; i<dropdown.length; i++) {
            var open = dropdown[i];

            if (open.classList.contains('show')) {
                open.classList.remove('show');
            }
        }
    }
}