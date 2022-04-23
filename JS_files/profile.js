$(document).ready(function(){
//for save profile

    $(".profile-button").click(function(){
        var lastname=$(".last-name").val();
        var firstname=$(".first-name").val();
        var check= /^[a-zA-Z\s]+$/;
        //firstname Pour mise a jour de profile
        if(firstname==""){
            $(".first-name-hide").text("*Entrez votre prénom");
            return false;
        }
        else{true;}
        if(!firstname.match(check)){
            $(".first-name-hide").text("*Entrez votre prenom valide");
            return false;
        }
        else{true;}
        if(firstname.length>20){
            $(".first-name-hide").text("*Le prénom ne doit pas dépasser 20 caractères");
            return false;
        }
        else{ $(".first-name-hide").text("");}
        //firstname for sign-up
        //lastname for sign-up
        if(lastname==""){
            $(".last-name-hide").text("*Entrez votre nom");
            return false;
        }
        else{true;}
        if(!lastname.match(check)){
            $(".last-name-hide").text("*Entrez votre nom valide");
            return false;
        }
        else{true;}
        if(lastname.length>20){
            $(".last-name-hide").text("*Le nom ne doit pas dépasser 20 caractères");
            return false;
        }
        else{ $(".last-name-hide").text("");}
        //lastname for sign-up
        //email-id for sign-up
        var check_email=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var email=$(".email").val();
        if(email==""){
            $(".email-hide").text("*Entrer votre Email");
            return false;
        }
        else{true}
        if(!email.match(check_email)){
            $(".email-hide").text("*Entrez votre email valide");
            return false;
        }
        else{ $(".email-hide").text("");}
        //email-id for sign-up
})

    $(".password-change").click(function(){
        //pass for sign-up
        var password = $(".password").val();
        if(password==""){
            $(".password-hide").text("*Tapez votre mot de passe");
            return false;
        }
        else{ $(".password-hide").text("");}
        //pass for sign-up
        //confirm-pass for sign-up
        var confirmPassword = $(".confirm-password").val();
        if(confirmPassword==""){
            $(".confirm-password-hide").text("*Tapez votre mot de passe");
            return false;
        }
        if(!confirmPassword.match(password)){
            $(".confirm-password-hide").text("*Votre mot de passe ne correspond pas");
            return false;
        }
        else{ $(".confirm-password-hide").text("");}
        //confirm-pass for sign-up

    })
})