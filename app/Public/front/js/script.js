
    

    const bande = document.querySelector('#bande');
    window.addEventListener('scroll', () => {

        if(window.scrollY > 30){
            bande.classList.add('fond-bande');            
        }
        else{
            bande.classList.remove('fond-bande');
        }
    });

    

    let verification = document.querySelector("#validate");
    let bouton = document.querySelector("#envoiFormulaire");
    
if(typeof verification == null || typeof bouton == null){
    e.preventDefault;
} else{
    bouton.classList.add('hidden');

    let acceptation = document.getElementById("acceptation");

    verification.addEventListener('click', function(){

        bouton.classList.toggle('hidden');
        acceptation.classList.toggle('hidden');
        
    });
}
    