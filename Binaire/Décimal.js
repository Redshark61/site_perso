var btn_decimal = document.getElementById('button_decimal');
var para_decimal = document.getElementById('p_decimal');

btn_decimal.addEventListener('click', affiche_decimal);

function affiche_decimal(){

var reponse_decimal = document.getElementById('input_decimal').value;
var plouf_decimal = reponse_decimal;
liste_decimal = [];

while (reponse_decimal>0) {
    var reste_decimal = reponse_decimal%2;
    reste_decimal = parseInt(reste_decimal);
    reponse_decimal=reponse_decimal/2;
    reponse_decimal= parseInt(reponse_decimal);
	liste_decimal.push(reste_decimal);
	
}
var resultat_decimal = liste_decimal.reverse();
para_decimal.innerHTML = "Le nombre décimal "+ plouf_decimal+" est égal à "+resultat_decimal+" en binaire";
}

var btn_binaire = document.getElementById('button_binaire');
var para_binaire = document.getElementById('para_binaire');

btn_binaire.addEventListener('click', binaire);

function binaire(){

    //Récupération de la réponse :
    var reponse_binaire = document.getElementById('input_binaire').value;
    var plouf_binaire = reponse_binaire;

    //Création de la liste :
    var liste_binaire = reponse_binaire.split('');

    //a est le coéfficient multiplicateur
    //Il faut faire -1 car les nombre binnaire commence à 0
    //Donc si la liste contient 2 éléments, le calcul commence à 0, puis 1
    var a_binaire =liste_binaire.length;
    a_binaire--  
    var resultat_binaire = 0
    var calcul_binaire;

    //Initialisation de la boucle 

    for (var j_binaire=0 ;j_binaire<liste_binaire.length; j_binaire++){

        var chiffre_binaire = liste_binaire[j_binaire];
        calcul_binaire = chiffre_binaire*(2**a_binaire);
        resultat_binaire = resultat_binaire + calcul_binaire;
        a_binaire--;
        resultat_binaire = parseInt(resultat_binaire);
    }

    para_binaire.innerHTML ="La conversion de "+ plouf_binaire +" en nombre décimal est "+resultat_binaire;
}
