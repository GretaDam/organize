require('./bootstrap');


// Vérification formulaire de connexion
const userConnect = document.getElementById("userConnect");
const alertLog = document.getElementById("alertLog");

if (userConnect) {
    userConnect.addEventListener('submit', function(event) { 
        event.preventDefault()
        if (!checkInput(this.elements)) {
            alertLog.innerHTML = "<p class='alert'>Vous devez indiquer votre mail et votre mot de passe</p>";
            return;
        }
    this.submit()
    }) 


    function checkInput (els) {
        for (let i = 0; i<els.length; i++) {
            if (els[i].value ==="") return false;
        }
        return true;
    }
}

// Lien de déconnexion
const formLogout = document.getElementById('formLogout');
const linkLogout =  document.getElementById('linkLogout');

valideForm(formLogout,linkLogout);

// Lien de suppression
const formDel = document.getElementById('formDel');
const linkDel =  document.getElementById('linkDel');

valideForm(formDel,linkDel);


// Mise en place Modal

const delModal = document.getElementById("delModal");
const delBtn = document.getElementById("delBtn");
const exitBtn = document.getElementById("exitBtn");

if (delModal) {
    delBtn.onclick = function() {   
    delModal.style.display = "block";
    }

    exitBtn.onclick = function() {  
    delModal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
        delModal.style.display = "none";
        }
    }
}

// Fonction de validation de formulaire CSRF par un lien

function valideForm(form, link) {
    if (link) {
        link.addEventListener('click', event => {
            event.preventDefault();
            form.submit();
        })
    }
}