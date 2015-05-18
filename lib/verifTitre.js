function verificationChampsObligatoire(form) {
    if (form.titre.value==""){
        alert ("Un titre est necessaire pour poster un article");
    }
    else{
        form.submit();
    }
}

