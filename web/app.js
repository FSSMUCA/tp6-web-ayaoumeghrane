// Sélection des éléments du DOM
const form = document.getElementById("calcForm");
const errorBox = document.getElementById("errorBox");
const resultBox = document.getElementById("resultBox");
const historyList = document.getElementById("historyList");

// Tableau pour stocker l’historique
let history = [];

// Événement sur le formulaire
form.addEventListener("submit", function(event) {
    event.preventDefault();  // empêche le refresh automatique

    // Réinitialiser messages d’erreurs et résultat
    errorBox.textContent = "";
    resultBox.textContent = "";

    // Récupération des valeurs
    let a = document.getElementById("numberA").value;
    let b = document.getElementById("numberB").value;
    let op = document.getElementById("operation").value;

    // Validation : champs vides
    if (a === "" || b === "") {
        errorBox.textContent = "Veuillez remplir les deux nombres.";
        return;
    }

    // Convertir en nombres
    a = parseFloat(a);
    b = parseFloat(b);

    // Validation : division par zéro
    if (op === "/" && b === 0) {
        errorBox.textContent = "Division par zéro interdite.";
        return;
    }

    // Calcul
    let result;
    switch (op) {
        case "+": result = a + b; break;
        case "-": result = a - b; break;
        case "*": result = a * b; break;
        case "/": result = a / b; break;
    }

    // Affichage du résultat
    resultBox.textContent = result;

    // Ajouter à l'historique
    const entry = `${a} ${op} ${b} = ${result}`;
    history.push(entry);

    // Mettre à jour l'affichage de l'historique
    updateHistory();
});

// Fonction pour afficher l’historique dans le DOM
function updateHistory() {
    historyList.innerHTML = ""; // vider

    history.forEach(item => {
        let li = document.createElement("li");
        li.textContent = item;
        historyList.appendChild(li);
    });
}
