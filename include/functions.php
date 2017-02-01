<?php 
// Fonction permettant de vérifier la présence d'un membre ou non en base de donnée.
// Pour cette exemple on ne traite pas encore les bdd donc on va se contenter d'un tableau vide pour avoir une erreur d'afficher.
// Pour voir que la redirection fonctionnera, on saisira : 
// ---------------------------------------------------------------------------------------------
// return [
//      "id" => 8;
//      "password" => "totototo";
// ];
function accountExist() : array {
    return [
        "id" => 10,
        "password" => "0123456789"
    ];
}

// Fonction permettant de simuler la présence d'une adresse email ou nous via un teste simple.
// true     -> Permet de dire que l'adresse mail est disponible.
// false    -> Permet de dire que l'adresse mail n'est pas disponible.
function mailFree() : bool  {
    return true;
};

// Fonction permettant l'envoi d'un mail au format html
// Il faut se rendre dans la doc php afin de récupérer les headers correspondant à : 
// - l'émetteur du mail
// - Le sujet du mail
// - le message
// La doc officiel traitant sur le sujet est à cette adresse : https://secure.php.net/manual/fr/function.mail.php
function mailHtml(string $subject, string $message) {
    // L'ajout d'en-têtes simples, spécifiant au MUA les adresses "From"
    $headers = 'From: Membre001 <membre001@espace-membre.dev>' . "\r\n";
    // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8';

    // On envoi le mail avec la fonction mail.
    mail($_POST['email'], $subject, $message, $headers);
}

// Fonction permettant de siluer que le mot de passe saisit est correcte.
// - true saisit correct
// - false saisit incorrect
function passwordOk() :bool {
    return true;
}

// On initialise une fonction permettant de sauvegrder le mot de passe généré. 
// Ou lorsqu'on voudra le modifier via le formulaire de changement de mot de passe.
// ------------------------------------------------------------------------------------
// Utilisation de l'opérateur null coalescing nous sera utile vu que le nouveau mot de passe
// peut être soit équivalent à la variable password qu'on aura mis en argument dans notre fonction.
// Soit, avec la superglobale $_POST() qui sera transmise grâce au changement de mot de passe dans 
// l'espace membre.
 // ------------------------------------------------------------------------------------
 // Dans l'argument de la fonction, on définit une chaine vide par défaut. Ainsi on n'aura pas l'obligation
 // de saisir un argument lors de notre initialisation.
 // - $_POST['email'] corresponddra à notre formulaire dans l'espace membre
 // - $password correspondra au formulaire d'oubli et donc la génération du mot de passe.'
function passwordSave(string $password = "") {
    $newpassword = $_POST['email'] ?? $password;

    // Conception d'une condition qui traitera la transmission des données dans la bdd selon ce qu'on aura décidé.
    if (isset($_POST['email'])) {
        // On traitera la gestion du mot de passe du formulaire d'oubli de mot de passe.
    } else {
        // Gestion changement du mot de passe en BDD
    }
}