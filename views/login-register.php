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


<!DOCTYPE html>
<html>
<head>

     <title>E-watch account</title>

    <?php require '../partials/head_assets.php'; ?>

</head>


<body class="article-body">

<?php require '../partials/nav.php'; ?>


<div class="row my-3 article-content">
     <div class="container">
          <section id="rgt-account">
               <h1 class="rgt-title">Inscrivez vous sur My E-watch</h1>
               <hr>
               <div class="tab-pane container-fluid <?php if (isset($_POST['register'])): ?>active<?php endif; ?>"
                    id="register" role="tabpanel">

                    <form action="login-register.php" method="post" class="p-4 row flex-column">

                         <h4 class="rgt-subtitle">VOS INFORMATIONS PERSONNELLES</h4>

                        <?php if (isset($registerMessage)): ?>
                             <div class="text-danger col-sm-8 offset-sm-2 mb-4"><?php echo $registerMessage; ?></div>
                        <?php endif; ?>

                         <div class="form-group w-50">
                              <label for="firstname">Prénom <b class="text-danger">*</b></label>
                              <input class="form-control" value="" type="text" placeholder="Prénom"
                                     name="firstname" id="firstname"/>
                         </div>
                         <div class="form-group w-50">
                              <label for="lastname">Nom de famille</label>
                              <input class="form-control" value="" type="text" placeholder="Nom de famille"
                                     name="lastname" id="lastname"/>
                         </div>
                         <div class="form-group w-50">
                              <label for="email">Email <b class="text-danger">*</b></label>
                              <input class="form-control" value="" type="email" placeholder="Email" name="email"
                                     id="email"/>
                         </div>
                         <div class="form-group w-50">
                              <label for="password">Mot de passe <b class="text-danger">*</b></label>
                              <input class="form-control" value="" type="password" placeholder="Mot de passe"
                                     name="password" id="password"/>
                         </div>
                         <div class="form-group w-50">
                              <label for="password_confirm">Confirmation du mot de passe <b
                                           class="text-danger">*</b></label>
                              <input class="form-control" value="" type="password"
                                     placeholder="Confirmation du mot de passe" name="password_confirm"
                                     id="password_confirm"/>
                         </div>
                         <div class="form-group w-50">
                              <label for="bio">Biographie</label>
                              <textarea class="form-control" name="bio" id="bio"
                                        placeholder="Ta vie Ton oeuvre..."></textarea>
                         </div>

                         <div class="text-right w-50">
                              <p class="text-danger">* champs requis</p>
                              <input class="btn btn-success" type="submit" name="register" value="Valider"/>
                         </div>

                    </form>
               </div>
          </section>
     </div>
</div>

<?php require '../partials/footer.php'; ?>


</body>
</html>
