<?php

require_once '../tools/common.php';

//en cas de connexion
if (isset($_POST['login'])) {

    //si email ou password non renseigné
    if (empty($_POST['email']) OR empty($_POST['password'])) {
        $loginMessage = "Merci de remplir tous les champs";
    } else {
        //on cherche un utilisateur correspondant au couple email / password renseigné
        $query = $db->prepare('SELECT *
			FROM user
			WHERE email = ? AND password = ?');
        $query->execute(array($_POST['email'], $_POST['password']));
        $user = $query->fetch();

        //si un utilisateur correspond
        if ($user) {
            //on prend en session ses droits d'administration pour vérifier s'il a la permission d'accès au back-office
            $_SESSION['is_admin'] = $user['is_admin'];
            $_SESSION['user'] = $user['firstname'];
            //détruire $_SESSION["user_id"] sera utilisé pour une requête de pré-remplissage du formulaire user-profile.php
            $_SESSION['user_id'] = $user['id'];
        } else { //si pas d'utilisateur correspondant on génère un message pour l'afficher plus bas
            $loginMessage = "Mauvais identifiants";
        }
    }
}

//En cas d'enregistrement
if (isset($_POST['register'])) {

    //un enregistrement utilisateur ne pourra se faire que sous certaines conditions

    //en premier lieu, vérifier que l'adresse email renseignée n'est pas déjà utilisée
    $query = $db->prepare('SELECT email FROM user WHERE email = ?');
    $query->execute(array($_POST['email']));

    //$userAlreadyExists vaudra false si l'email n'a pas été trouvé, ou un tableau contenant le résultat dans le cas contraire
    $userAlreadyExists = $query->fetch();

    //on teste donc $userAlreadyExists. Si différent de false, l'adresse a été trouvée en base de données
    if ($userAlreadyExists) {
        $registerMessage = "Adresse email déjà enregistrée";
    } elseif (empty($_POST['firstname']) OR empty($_POST['password']) OR empty($_POST['email'])) {
        //ici on test si les champs obligatoires ont été remplis
        $registerMessage = "Merci de remplir tous les champs obligatoires (*)";
    } elseif ($_POST['password'] != $_POST['password_confirm']) {
        //ici on teste si les mots de passe renseignés sont identiques
        $registerMessage = "Les mots de passe ne sont pas identiques";
    } else {

        //si tout les tests ci-dessus sont passés avec succès, on peut enregistrer l'utilisateur
        //le champ is_admin étant par défaut à 0 dans la base de données, inutile de le renseigner dans la requête
        $query = $db->prepare('INSERT INTO user (firstname,lastname,email) VALUES (?, ?, ?)');
        $newUser = $query->execute(
            [
                $_POST['firstname'],
                $_POST['lastname'],
                $_POST['email'],

            ]
        );

        //une fois l'utilisateur enregistré, on le connecte en créant sa session
        $_SESSION['is_admin'] = 0; //PAS ADMIN !
        $_SESSION['user'] = $_POST['firstname'];
    }
}


//si l'utilisateur a une session (il est connécté), on le redirige ailleurs

?>






<?php require_once '../partials/head_assets.php'; ?>
<?php require '../partials/nav.php' ?>

<hr>

<section id="rgt-account">
     <div class="container">
          <h1 class="rgt-title">Bienvenue sur My E-watch</h1>
          <hr>
          <p>Créer votre compte personnel et profitez de nos offres exceptionelle.</p>
          <form action="register.php" method="POST" class="rgt-form pb-5">
               <div class="form-group">
                    <h2 class="rgt-subtitle">VOS INFORMATIONS PERSONNELLES</h2>

                    <label for="lastname ">Titre*</label>
                    <select class="form-control w-50">
                         <option value=""></option>
                         <option value="Mme">Mme</option>
                         <option value="M">M</option>
                    </select>

                    <label for="lastname ">Nom*</label>
                    <input class="form-control w-50 mb-3" value="" type="text" placeholder="Nom de famille"
                           name="lastname"
                           id="lastname"/>
                    <label for="firstname ">Prenom*</label>
                    <input class="form-control w-50 mb-3" value="" type="text" placeholder="Prénom" name="firstname"
                           id="firstname"/>


                    <h2 class="rgt-subtitle">IDENTIFIANTS</h2>
                    <label for="exampleInputEmail1">Votre adresse e-mail*</label>
                    <input type="email" class="form-control w-50" id="email" name="email" aria-describedby="emailHelp"
                           placeholder="Entrer email">
                    <small id="emailHelp" class="form-text text-muted">Nous garderons votre email en sécurité</small>
               </div>

               <div class="form-group">
                    <label for="exampleInputPassword1">Mot de passe*</label>
                    <input type="password" class="form-control w-50" id="password" name="password"
                           placeholder="Mot de Passe">
               </div>

               <div class="form-group">
                    <label for="exampleInputPassword1">Confirmez votre mot de passe*</label>
                    <input type="password" class="form-control w-50" id="confirm" name="confirm"
                           placeholder="Confirmez">
               </div>


               <div class="form-check">
                    <input type="checkbox" class="form-control" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Je souhaite recevoir les communications de
                         E-watch</label>
               </div>
               <button type="submit" name="register" id="register" class="btn btn-primary">Submit</button>
          </form>
     </div>
</section>

<?php require '../partials/footer.php' ?>

</body>
</html>