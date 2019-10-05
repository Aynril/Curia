term = document.getElementById("term");
description = document.getElementById("description")

if (window.localStorage["curia::selectedTerm"] && window.localStorage["curia::selectedTerm"] != "undefined") {
    term.innerText = window.localStorage["curia::selectedTerm"];
    term.classList.remove("is-danger");
    window.localStorage["curia::selectedTerm"] = undefined;
} else {
    term.innerText = "Kein Begriff gewählt";
    term.classList.add("is-danger");
    description.innerHTML = "<p>Du hast noch keinen Begriff gewählt, den CURIA erklären soll. Markiere einen Text auf der Seite und wähle im Kontextmenü (Rechte Maustaste) den Punkt <em>Begriff mit CURIA erklären</em>.</p>";
}