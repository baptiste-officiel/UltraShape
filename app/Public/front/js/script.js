
    // Fonction js permettant d'ajouter un fond à la barre de navigation lors du scroll sur la page 

    const bande = document.querySelector('#bande');
    window.addEventListener('scroll', () => {

        if(window.scrollY > 30){
            bande.classList.add('fond-bande');            
        }
        else{
            bande.classList.remove('fond-bande');
        }
    });


    // Fonction qui enregistre le nom, prénom et mail en local storage en cas de fermeture de la page, le visiteur n'a pas besoin de rentrer à nouveau ces données

    const inputLastname = document.getElementById("lastname")
    const inputFirstname = document.getElementById("firstname")
    const inputEmail = document.getElementById("email")
    
    let storedLastname = localStorage.getItem('lastnameInput');
    let storedFirstname = localStorage.getItem('firstnameInput');
    let storedEmail = localStorage.getItem('emailInput');

    
    if(inputLastname){
        inputLastname.value = storedLastname;
    }  
        inputLastname.addEventListener('input', function(){
            localStorage.setItem('lastnameInput', inputLastname.value);
    });

    if(inputFirstname){
        inputFirstname.value = storedFirstname;
    }  
        inputFirstname.addEventListener('input', function(){
            localStorage.setItem('firstnameInput', inputFirstname.value);
    });

    if(inputEmail){
        inputEmail.value = storedEmail;
    }  
        inputEmail.addEventListener('input', function(){
            localStorage.setItem('emailInput', inputEmail.value);
    });
    


    // Fonction qui force l'utilisateur à accepter l'utilisation de ses données lors de l'envoi d'un formulaire de contact. Si la case n'est pas cochée, il n'y a pas de bouton "envoyer"

    let verification = document.querySelector("#validate");
    let bouton = document.querySelector("#envoiFormulaire");
    
    if(typeof verification == null || typeof bouton ==  null){
        e.preventDefault;
    } else{
    bouton.classList.add('hidden');

    let acceptation = document.getElementById("acceptation");

    verification.addEventListener('click', function(){

        bouton.classList.toggle('hidden');
        acceptation.classList.toggle('hidden');
        
    });
}
    