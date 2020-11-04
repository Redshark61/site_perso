//Déclaration des variables de base : 
var para = document.querySelector('p');
var btn = document.querySelector('button');
btn.addEventListener('click', affiche);

//Déclaration des tableaux :
var alphabet = "abcdefghijklmopqrstuvwxyz";
var array_lettre = alphabet.split('');

var nombre = '1234567890';
var array_nombre = nombre.split('');

var liste_caractere = '@-_.';
var array_caractere = liste_caractere.split('');


//Affichage :
para.innerHTML='Alphabet = '+array_lettre+'<br>Chiffre = '+array_nombre+'<br>Liste de caractères = '+array_caractere;

function affiche(){

/*Le mot de passe doit impérativement doit être
un tableau pour pouvoir y ajouter les lettres, 
les chiffres et les caractères en connaissant les clés*/
    var mdp = []

    //Fonctions qui permet les nombres aléatoires :
    function getRandomInt(max) {
        return Math.floor(Math.random() * Math.floor(max));
    }

    //Boucles for pour créer un mot de passe de 12 lettres au hasard:
    for(var i =0; i<12; i++){
    var lettre = array_lettre[getRandomInt(27)];

    while(lettre==undefined){
        lettre = array_lettre[getRandomInt(27)];
    }

    mdp.push(lettre);
    }

    //Boucles for pour créer un mot de passe avec 3 chiffre au hasard :
    for (i=0; i<3; i++){
        var chiffre = array_nombre[getRandomInt(11)];

        while(chiffre==undefined){
            chiffre = array_nombre[getRandomInt(11)];
        }

        var insertion_chiffre = getRandomInt(13);
        mdp[insertion_chiffre] = chiffre;
    }

    //Boucles for pour créer un mot de passe de 2 caractères au hasard :
    for (i=0; i<2; i++){
        var caractere= array_caractere[getRandomInt(5)];

        while(caractere==undefined){
            caractere= array_caractere[getRandomInt(5)];

        }
        var insertion_caractere = getRandomInt(13);
        mdp[insertion_caractere] = caractere;
    }

//Transformation de la liste en chaîne de caractères :
var mdp2 = mdp.join('');

//Affichage :
para.style.height='60px'
para.innerHTML='Mot de passe = '+mdp2;
} 
