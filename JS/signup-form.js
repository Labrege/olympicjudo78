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

$(document).ready(function() {
    //Etape 1
    if($('button[name="etape1"]').click(function(){
        var prenom = $('input[name="prenom"]').val();
        var nom = $('input[name="nom"]').val();
        var dob = $('input[name="dob"]').val();
        var email = $('input[name="email"]').val();
        var tel = $('input[name="tel"]').val();
        var respnom = $('input[name="respnom"]').val();
        var resptel = $('input[name="resptel"]').val();
        var respmail = $('input[name="respmail"]').val();

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
                    console.log('hello');
                }));
            }
            else{
                $("#form-container2a").addClass('display');
                $("#form-container2a").removeClass('no-display');
            }
        } else {
            console.log('not all filled up');
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
});

