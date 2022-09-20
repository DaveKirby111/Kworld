setInterval(clock, 500);

    function clock() {
        const d = new Date();
        document.getElementById("time").innerHTML = d.toLocaleTimeString();
    }