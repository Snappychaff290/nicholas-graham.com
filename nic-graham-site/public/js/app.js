//import "./bootstrap";

document.getElementById("test").onmousemove = (e) => {
    for (const card of document.getElementsByClassName("section-2")) {
        const rect = card.getBoundingClientRect(),
            x = e.clientX - rect.left,
            y = e.clientY - rect.top;
        card.style.setProperty("--mouse-x", `${x}px`);
        card.style.setProperty("--mouse-y", `${y}px`);
        console.log("HERE");
    }
};
