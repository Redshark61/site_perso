var btn = document.querySelector('button');
var validation = document.querySelector('p');
var valide = document.getElementById('valide');

//validation.style.display='none';

btn.addEventListener('click', affiche);

function affiche(){
    var pseudo = document.getElementById('pseudo').value;
    var mdp = document.getElementById('mdp').value;
    var input_mdp = document.getElementById('mdp');
    var input_pseudo = document.getElementById('pseudo');
    var reg1 = /[a-z]/ig;
    var res_lettre_mdp = reg1.test(mdp);
    var res_lettre_pseudo = reg1.test(pseudo);
    var reg2 = /[0-9]/ig;
    var reg3 = /[0-9]/ig;
    var res_chiffre_mdp = reg2.test(mdp);
    var res_chiffre_pseudo = reg3.test(pseudo);

    if(!res_chiffre_pseudo){
        input_pseudo.value=null;
        input_pseudo.placeholder= 'Veuillez mettre un chiffre';
        input_pseudo.style.border='red solid 1px';    
    }


    if(!res_chiffre_mdp){
        input_mdp.value=null;
        input_mdp.placeholder= 'Veuillez mettre un chiffre';
        input_mdp.style.border='red solid 1px';
    }
    if(!res_lettre_mdp){
        input_mdp.value=null;
        input_mdp.placeholder ='Veuillez mettre des lettres';
        input_mdp.style.border='red solid 1px';

    }
    if(!res_lettre_pseudo){
        input_pseudo.value=null;
        input_pseudo.placeholder= 'Veuillez mettre des lettres';
        input_pseudo.style.border='red solid 1px';        
    }

    if(!res_chiffre_mdp && !res_lettre_mdp){
        input_mdp.value=null;
        input_mdp.placeholder = 'Veuillez mettre un mot de passe';
        input_mdp.style.border='red solid 1px';

    }
    if(!res_chiffre_pseudo && !res_lettre_pseudo){
        input_mdp.value=null;
        input_pseudo.placeholder = 'Veuillez mettre un pseudo';
        input_pseudo.style.border='red 1px solid';
    }

    if(res_chiffre_mdp && res_chiffre_pseudo && res_lettre_mdp && res_lettre_pseudo){
        validation.setAttribute('class', 'validation');
        valide.setAttribute('id', 'ok');
        validation.innerHTML = 'Inscription effectué...';
    }
console.log('chiffre pseudo = '+res_chiffre_pseudo + ' / lettre pseudo = '+res_lettre_pseudo);
}