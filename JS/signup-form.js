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
                    var respnom = $('input[name="respnom"]').val();
                    var resptel = $('input[name="resptel"]').val();
                    var respmail = $('input[name="respmail"]').val();

                    if (respnom != '' && resptel != '' && respmail != '' && validateEmail(respmail) == true && validateTel(resptel) == true){
                        $("#form-container2b").addClass('no-display');
                        $("#form-container2b").removeClass('display');
                        $("#form-container3").addClass('display');
                        $("#form-container3").removeClass('no-display');
                    }
                    else{
                        //Message d'erreur pour l'etape 2
                        if(validateEmail(respmail) == false){
                            $('input[name="respmail"]').addClass('input-error');
                            cosyAlert('Veuillez saisir un adresse mail valide', 'error',{ vPos : 'top', hPos : 'center',autoHide : true, autoHideTime : 3000, });
                            $('input[name="respmail"]').keyup(function(){
                                $('input[name="respmail"]').removeClass('input-error');
                            })
                        }

                        if(resptel!= '' && validateTel(resptel) == false){
                            $('input[name="resptel"]').addClass('input-error');
                            cosyAlert('Veuillez saisir un numéro valide', 'error',{ vPos : 'top', hPos : 'center',autoHide : true, autoHideTime : 3000, });
                            $('input[name="resptel"]').keyup(function(){
                                $('input[name="resptel"]').removeClass('input-error');
                            })
                        }

                        if(respnom == ''){
                            cosyAlert('Veuillez remplir le champ "Nom"', 'error',{ vPos : 'top', hPos : 'center',autoHide : true, autoHideTime : 3000, });
                            $('input[name="respnom"]').addClass('input-error');
                            $('input[name="respnom"]').keyup(function(){
                                $('input[name="respnom"]').removeClass('input-error');
                            })
                        }
                        if(resptel == ''){
                            cosyAlert('Veuillez remplir le champ "Téléphone"', 'error',{ vPos : 'top', hPos : 'center',autoHide : true, autoHideTime : 3000, });
                            $('input[name="resptel"]').addClass('input-error');
                            $('input[name="resptel"]').keyup(function(){
                                $('input[name="resptel"]').removeClass('input-error');
                            })
                        }
                        if(respmail == ''){
                            cosyAlert('Veuillez remplir le champ "Mail"', 'error',{ vPos : 'top', hPos : 'center',autoHide : true, autoHideTime : 3000, });
                            $('input[name="respmail"]').addClass('input-error');
                            $('input[name="respmail"]').keyup(function(){
                                $('input[name="respmail"]').removeClass('input-error');
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

    //Submit à l'étape 3
    if($('button[name="finaliser"]').click(function(){
        var jourCheckBoxes = $('input[name="chk[]"]:checked').length;
        if (jourCheckBoxes > 0 && $('input[name="droitimage"]').is(':checked')) {
            console.log("yay");
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

