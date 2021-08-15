/*$(document).ready(function(){
    var form1 = $("#form1");
    form1.validate({
        rules: {
            nom:"required",
            prenom: "required"
        },
        messages:{
            nom: "Entrez votre nom",
            prenom: "Entrez votre prénom"
        }
    });
    $("#button1").click(function(){
        if(form1.valid()){
            $('#form-container1').addClass('no-display');
            console.log("hello");
        };
    });
    
});*/
/* Fonctions */
function CalculAge(dob){
    dob = new Date(dob);
    var today = new Date();
    var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
    return age;
}

function validateEmail(email) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    return emailReg.test(email);
}

function validateTel(tel) {
    var intRegex  = /[0-9 -()+]+$/;
    return intRegex .test(tel);
}

$(document).ready(function() {
    //Etape 1
    if($('button[name="etape1"]').click(function(){
        var prenom = $('input[name="prenom"]').val();
        var nom = $('input[name="nom"]').val();
        var dob = $('input[name="dob"]').val();

        if (prenom != '' && nom != '' && dob != '') {
            //Calcul de l'age
            age = CalculAge(dob);
            
            //Changement d'etape
            $("#form-container1").addClass('no-display');
            $("#form-container1").removeClass('display');

            if(age<18){
                $("#form-container2b").addClass('display');
                $("#form-container2b").removeClass('no-display');

                if($('button[name="etape2"]').click(function(){
                    var respnom = $('input[name="resp1nom"]').val();
                    var resptel = $('input[name="resp1tel"]').val();
                    var respmail = $('input[name="resp1mail"]').val();

                    if (respnom != '' && resptel != '' && respmail != '' && validateEmail(respmail) == true && validateTel(resptel) == true){
                        $("#form-container2b").addClass('no-display');
                        $("#form-container2b").removeClass('display');
                        $("#form-container3").addClass('display');
                        $("#form-container3").removeClass('no-display');
                    }
                    else{
                        //Message d'erreur pour l'etape 2
                        if(validateEmail(respmail) == false){
                            $('input[name="resp1mail"]').addClass('input-error');
                            cosyAlert('Veuillez saisir un adresse mail valide', 'error',{ vPos : 'top', hPos : 'center',autoHide : true, autoHideTime : 3000, });
                            $('input[name="resp1mail"]').keyup(function(){
                                $('input[name="resp1mail"]').removeClass('input-error');
                            })
                        }

                        if(resptel!= '' && validateTel(resptel) == false){
                            $('input[name="resp1tel"]').addClass('input-error');
                            cosyAlert('Veuillez saisir un numéro valide', 'error',{ vPos : 'top', hPos : 'center',autoHide : true, autoHideTime : 3000, });
                            $('input[name="resp1tel"]').keyup(function(){
                                $('input[name="resp1tel"]').removeClass('input-error');
                            })
                        }

                        if(respnom == ''){
                            cosyAlert('Veuillez remplir le champ "Nom"', 'error',{ vPos : 'top', hPos : 'center',autoHide : true, autoHideTime : 3000, });
                            $('input[name="resp1nom"]').addClass('input-error');
                            $('input[name="resp1nom"]').keyup(function(){
                                $('input[name="resp1nom"]').removeClass('input-error');
                            })
                        }
                        if(resptel == ''){
                            cosyAlert('Veuillez remplir le champ "Téléphone"', 'error',{ vPos : 'top', hPos : 'center',autoHide : true, autoHideTime : 3000, });
                            $('input[name="resp1tel"]').addClass('input-error');
                            $('input[name="resp1tel"]').keyup(function(){
                                $('input[name="resp1tel"]').removeClass('input-error');
                            })
                        }
                        if(respmail == ''){
                            cosyAlert('Veuillez remplir le champ "Mail"', 'error',{ vPos : 'top', hPos : 'center',autoHide : true, autoHideTime : 3000, });
                            $('input[name="resp1mail"]').addClass('input-error');
                            $('input[name="resp1mail"]').keyup(function(){
                                $('input[name="resp1mail"]').removeClass('input-error');
                            })
                        }
                    }
                }));
            }
            else{
                $("#form-container2a").addClass('display');
                $("#form-container2a").removeClass('no-display');

                if($('button[name="etape2"]').click(function(){
                    var email = $('input[name="email"]').val();
                    var tel = $('input[name="tel"]').val();

                    if (email != '' && tel != '' && validateEmail(email) == true && validateTel(tel) == true){
                        $("#form-container2a").addClass('no-display');
                        $("#form-container2a").removeClass('display');

                        $("#form-container3").addClass('display');
                        $("#form-container3").removeClass('no-display');
                    }
                    else{
                        //Message d'erreur pour l'etape 2                    
                        if(validateEmail(email) == false){
                            $('input[name="email"]').addClass('input-error');
                            cosyAlert('Veuillez saisir un adresse mail valide', 'error',{ vPos : 'top', hPos : 'center',autoHide : true, autoHideTime : 3000, });
                            $('input[name="email"]').keyup(function(){
                                $('input[name="email"]').removeClass('input-error');
                            })
                        }

                        if(tel!= '' && validateTel(tel) == false){
                            $('input[name="tel"]').addClass('input-error');
                            cosyAlert('Veuillez saisir un numéro valide', 'error',{ vPos : 'top', hPos : 'center',autoHide : true, autoHideTime : 3000, });
                            $('input[name="tel"]').keyup(function(){
                                $('input[name="tel"]').removeClass('input-error');
                            })
                        }

                        if(email == ''){
                            $('input[name="email"]').addClass('input-error');
                            cosyAlert('Veuillez remplir tous les champs', 'error',{ vPos : 'top', hPos : 'center',autoHide : true, autoHideTime : 3000, });
                            $('input[name="email"]').keyup(function(){
                                $('input[name="email"]').removeClass('input-error');
                            })
                        }
                        if(tel == ''){
                            $('input[name="tel"]').addClass('input-error');
                            cosyAlert('Veuillez remplir tous les champs', 'error',{ vPos : 'top', hPos : 'center',autoHide : true, autoHideTime : 3000, });
                            $('input[name="tel"]').keyup(function(){
                                $('input[name="tel"]').removeClass('input-error');
                            })
                        }
                    }
                }));
            }
        } else {
            //Messages d'erreur pour l'etape 1
            cosyAlert('Veuillez remplir tous les champs', 'error',{ vPos : 'top', hPos : 'center', autoHide : true, autoHideTime : 3000, });
            if(prenom == ''){
                $('input[name="prenom"]').addClass('input-error');
                $('input[name="prenom"]').keyup(function(){
                    $('input[name="prenom"]').removeClass('input-error');
                })
            }
            if(nom == ''){
                $('input[name="nom"]').addClass('input-error');
                $('input[name="nom"]').keyup(function(){
                    $('input[name="nom"]').removeClass('input-error');
                })
            }
            if(dob == ''){
                $('input[name="dob"]').addClass('input-error');
                $('input[name="dob"]').keyup(function(){
                    $('input[name="dob"]').removeClass('input-error');
                })
            }
        }
    }));

    

    if ($('select[name="cours"]').click(function(){
        var cours = $('select[name="cours"]').val();
        console.log(1);
        console.log(cours);
        if (cours=="Cadet-junior-senior"){
            $(".musculation").removeClass('no-display');
            $(".mardi").removeClass('no-display');
            $(".mercredi").addClass('no-display');
            $(".vendredi").removeClass('no-display');
            $(".samedi").addClass('no-display');
        }
        else{
            $(".musculation").addClass('no-display');
        }

        if(cours=="baby"){
            $(".mardi").addClass('no-display');
            $(".mercredi").removeClass('no-display');
            $(".vendredi").removeClass('no-display');
            $(".samedi").removeClass('no-display');
        }
        else if(cours=="eveil" || cours=="mini-poussin"|| cours=="poussin" || cours=="beinjamin")
        {
            $(".mardi").removeClass('no-display');
            $(".mercredi").removeClass('no-display');
            $(".vendredi").removeClass('no-display');
            $(".samedi").removeClass('no-display');
        } 
        else if (cours=="minime")
        {
            $(".mardi").removeClass('no-display');
            $(".mercredi").removeClass('no-display');
            $(".vendredi").removeClass('no-display');
            $(".samedi").addClass('no-display');
        }
       
        //prix 
        if(cours=="baby")
        {
            $(".180").removeClass('no-display');
            $(".220").addClass('no-display');
            $(".330").addClass('no-display');
        }
        else{
            $(".180").addClass('no-display');
            $(".220").removeClass('no-display');
            $(".330").addClass('no-display');
        }

    }));


    if ($('input[name="muscu"]').click(function(){

        if($('input[name="muscu"]').is(':checked'))
        {
            $(".180").addClass('no-display');
            $(".220").addClass('no-display');
            $(".330").removeClass('no-display');
        }else{
            $(".180").addClass('no-display');
            $(".220").removeClass('no-display');
            $(".330").addClass('no-display');
        }
    }));

    //Submit à l'étape 3
    if($('button[name="finaliser"]').click(function(){
        var jourCheckBoxes = $('input[name="chk[]"]:checked').length;
       
        if ( $('input[name="droitimage"]').is(':checked')) {
            var prenom = $('input[name="prenom"]').val();
            var nom = $('input[name="nom"]').val();
            var dob = $('input[name="dob"]').val();
            
            var resp1nom = $('input[name="resp1nom"]').val();
            var resp1tel = $('input[name="resp1tel"]').val();
            var resp1mail = $('input[name="resp1mail"]').val();
            var resp2nom = $('input[name="resp2nom"]').val();
            var resp2tel = $('input[name="resp2tel"]').val();
            var resp2mail = $('input[name="resp2mail"]').val();
            var email = $('input[name="email"]').val();
            var tel = $('input[name="tel"]').val();
            
            var ceinture = $('select[name="ceinture"]').val();
            var cours = $('select[name="cours"]').val();
            var droitimage = $('input[name="droitimage"]').val();
            var newsletter = $('input[name="newsletter"]').val();

            if ($('input[name="mardi"]').is(':checked'))
            {
                mardi=1;
            }else{
                mardi=0;
            }
            if ($('input[name="mercredi"]').is(':checked'))
            {
                mercredi=1;
            }else{
                mercredi=0;
            }
            if ($('input[name="vendredi"]').is(':checked'))
            {
                vendredi=1;
            }else{
                vendredi=0;
            }
            if ($('input[name="samedi"]').is(':checked'))
            {
                samedi=1;
            }else{
                samedi=0;
            }
            if ($('input[name="musculation"]').is(':checked'))
            {
                muscu=1;
            }else{
                muscu=0;
            }
            console.log(mardi);
            console.log(mercredi);
            console.log(vendredi);
            console.log(samedi);
           
            var submit = $('button[name="finaliser"]').val();
            
            $(".message").load("inscription_back.php", {
                prenom: prenom,
                nom: nom,
                dob: dob,
                resp1nom: resp1nom,
                resp1tel: resp1tel,
                resp1mail:resp1mail,
                respnom: resp2nom,
                resptel: resp2tel,
                respmail:resp2mail,
                email: email,
                tel:tel,
                ceinture: ceinture,
                cours:cours,
                droitimage:droitimage,
                newsletter:newsletter,
                mardi:mardi,
                mercredi:mercredi,
                vendredi:vendredi,
                samedi:samedi,
                muscu:muscu,
                submit: submit
            });
        }
        else{
            if(jourCheckBoxes <= 0){
                cosyAlert('Veuillez selectionner des jours', 'error',{ vPos : 'top', hPos : 'center', autoHide : true, autoHideTime : 3000, });
            }

            if (!$('input[name="droitimage"]').is(':checked')) {
                cosyAlert("Droit à l'image obligatoire", 'error',{ vPos : 'top', hPos : 'center', autoHide : true, autoHideTime : 3000, });
            }
        }
    }));

    //Retour à etape 1
    if($('button[name="retour1"]').click(function(){
        $("#form-container1").addClass('display');
        $("#form-container1").removeClass('no-display');
        
        $("#form-container2a").addClass('no-display');
        $("#form-container2a").removeClass('display');

        $("#form-container2b").addClass('no-display');
        $("#form-container2b").removeClass('display');
    }));

    //Retour à etape 2
    if($('button[name="retour2"]').click(function(){
        $("#form-container3").addClass('no-display');
        $("#form-container3").removeClass('display');
        var dob = $('input[name="dob"]').val();
        age = CalculAge(dob);
        
        if(age<18){
            $("#form-container2b").addClass('display');
            $("#form-container2b").removeClass('no-display');
        }
        else{
            $("#form-container2a").addClass('display');
            $("#form-container2a").removeClass('no-display');
        }
    }));
});

