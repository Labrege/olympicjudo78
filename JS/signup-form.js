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
/* Jquery Disable Button if Textarea is empty */

$(document).ready(function () {
    //Etape 1
    $('button[name="etape1"]').attr('disabled', true);
    $('input[name="prenom"], input[name="nom"], input[name="dob"]').on('keyup', function () {
        var prenom = $('input[name="prenom"]').val();
        var nom = $('input[name="nom"]').val();
        var dob = $('#datepicker').datepicker();

        if (prenom != '' && nom != '' && dob.datepicker('getDate') == null) {
            $('button[name="etape1"]').attr('disabled', false);
        } else {
            $('button[name="etape1"]').attr('disabled', true);
        }
    });

    //Etape 2
    if($('button[name="etape1"]').click(function(){
        $("#form-container1").addClass('no-display');
        $("#form-container1").removeClass('display');
        $("#form-container2").addClass('display');
        $("#form-container2").removeClass('no-display');
    }));

    if($('button[name="retour1"]').click(function(){
        $("#form-container1").addClass('display');
        $("#form-container1").removeClass('no-display');

        $("#form-container2").addClass('no-display');
        $("#form-container2").removeClass('display');
    }));
});

