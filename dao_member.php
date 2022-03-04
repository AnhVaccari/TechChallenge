<?php 

function insertMember($bdd, $argonaute){
    // requête SQL
    $query = 'INSERT INTO argonaute SET nom_argonaute = :nom_argonaute';

    // préparation de la requête
    $statement = $bdd->prepare($query);

    // association des valeurs aux marqueurs
    $statement->bindValue(':nom_argonaute', $argonaute['name'], PDO::PARAM_STR);
   
    // execution de la requête
    $statement->execute();
}

function getAllMembers($bdd){
    $query = 'SELECT * FROM argonaute';
    $statement = $bdd->query($query);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

?>