function verificationChampsObligatoireArticle(form) {
    if (form.titre.value==""){
        alert ("Veuillez choisir un titre");
    }
    else{
        form.submit();
    }
}

function verificationChampsObligatoireMessage(form){
   if (form.destinataire.value==""){
        alert ("Veuillez remplir tous les champs");
   }
    else{
        form.submit();
    }
}
