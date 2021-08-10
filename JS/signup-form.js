$(document).ready(function(){
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
    
});
