$(document).ready(function(){
    let burger = $("#burger")

    burger.click(function(){
        $("#menu").fadeToggle(800);
    });

    let boutonRepondre = $("#boutonRepondre")
    let reponses = $("input[name='radio']:checked");
    
    

     console.log(reponses);

    $nombreReponsesDonnees = 0;
    boutonRepondre.click(function(){
        $(':radio:checked').each(function(){
            console.log($(this).val());
         });
    })
    
});
