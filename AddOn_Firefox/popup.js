API_URL = "http://116.203.31.114/Server_PHP/output.php?term="

term = document.getElementById("term");
description = document.getElementById("description")

if (window.localStorage["curia::selectedTerm"] && window.localStorage["curia::selectedTerm"] != "undefined") {
    term.innerText = window.localStorage["curia::selectedTerm"];
    term.classList.remove("is-danger");
    
    description.innerText = "Lade ...";

    originalTerm = window.localStorage["curia::selectedTerm"];
    window.localStorage["curia::selectedTerm"] = undefined;

    makeCuriaGeneralRequest(originalTerm, function () {
        if (originalTerm.slice(-2) == "es") {
            makeCuriaGeneralRequest(originalTerm.slice(0, -2), null);
        } else if (originalTerm.slice(-1) == "s") {
            makeCuriaGeneralRequest(originalTerm.slice(0, -1), null);
        } else if (originalTerm.slice(-5) == "innen") {
            makeCuriaGeneralRequest(originalTerm.slice(0, -5), null);
        } else if (originalTerm.slice(-2) == "in") {
            makeCuriaGeneralRequest(originalTerm.slice(0, -2), null);
        } else if (originalTerm.slice(-2) == "en") {
            makeCuriaGeneralRequest(originalTerm.slice(0, -2), null);
        } else return -1;
    })

} else {
    term.innerText = "Kein Begriff gewählt";
    term.classList.add("is-danger");
    description.innerHTML = "<p>Du hast noch keinen Begriff gewählt, den CURIA erklären soll. Markiere einen Text auf der Seite und wähle im Kontextmenü (Rechte Maustaste) den Punkt <em>Begriff mit CURIA erklären</em>.</p>";
}


function makeCuriaGeneralRequest(oterm, if_term_not_existant_callback) {

    fetch(API_URL + encodeURIComponent(oterm), {"mode": "cors"})
        .then(function (response) {
            if (response.status !== 200) {
                console.log(response.status);
                term.classList.add("is-danger");
                description.innerText = "Ein unbekannter Fehler ist aufgetreten. Bitte @luap42 auf Twitter melden.";
            } else {
                response.json().then(function (data) {
                    if(data.response == "data") {
                        description.innerHTML = "<p>" + data.definition + "</p>Zuletzt bearbeitet: " + data.last_update + ", Kategorie: " + data.category;
                    } else {
                        if (data.errno == 2) {
                            r = -1;
                            if (if_term_not_existant_callback) {
                                r = if_term_not_existant_callback()
                            }
                            if (r == -1) {
                                term.classList.add("is-danger");
                                description.innerText = "Der Begriff \"" + term.innerText + "\" wurde leider nicht gefunden."
                                term.innerText = "Begriff nicht gefunden"
                            }
                        } else {
                            term.classList.add("is-danger");
                            description.innerText = "Ein Fehler ist aufgetreten: " + data.errno + " (" + data.reason + ") ";
                            term.innerText = "Ein Fehler ist aufgetreten."
                        }
                    }
                }.bind(this));
            }
        }.bind(this))
    
        .catch(function () {
            console.log(response.status);
            term.classList.add("is-danger");
            description.innerText = "Ein unbekannter Fehler ist aufgetreten. Bitte @luap42 auf Twitter melden.";
        });

}