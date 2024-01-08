const form = document.getElementById("form");
const error = document.getElementById("error");

form.addEventListener("submit", function(event){
    const nom = document.getElementById("nom").value;
    if (nom.trim() == "") {
        error.textContent = "Ce champs ne doit pas être vide";
        event.preventDefault();
    }else{
        error.textContent = "";
    }
});