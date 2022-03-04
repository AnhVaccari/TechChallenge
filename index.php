<?php 
 
  include("./connectDb.php");
  include("./dao_member.php");
  $bdd = connectDBS();

  if (isset($_POST["name"])) {
   insertMember($bdd, $_POST);
   $_POST = [];
}

  $listeMembers = getAllMembers($bdd);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tech Challenge</title>
  <link rel="stylesheet" href="style.css?<?php echo rand();?>">
  
</head>
<body>
<!-- Header section -->
<header>
  <h1>
    <img src="https://www.wildcodeschool.com/assets/logo_main-e4f3f744c8e717f1b7df3858dce55a86c63d4766d5d9a7f454250145f097c2fe.png" alt="Wild Code School logo" />
    Les Argonautes
  </h1>
</header>

<!-- Main section -->
<main>
    <div class="add-member">
      <img src="./image/navire.jpg" alt="bateau">
        <!-- New member form -->
        <h3>Ajouter un(e) Argonaute</h3>
        <form  action="index.php" method="POST" class="new-member-form">
          <label for="name">Nom de l&apos;Argonaute</label>
          <input id="name" name="name" type="text" placeholder="Charalampos" />
          <button type="submit">Envoyer</button>
        </form>
    </div>
    <!-- Member list -->
      <h2>Membres de l'équipage </h2>
      <section class="member-list">
        <?php 
          foreach ($listeMembers as $key => $value) {?>
              <div class="member-item"><?=$value['nom_argonaute']?></div>
          <?php }?>
      </section>
    
</main>

<footer>
  <p>Réalisé par Jason en Anthestérion de l'an 515 avant JC</p>
</footer>
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>-->

</body>
</html>