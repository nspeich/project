<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="test.css">
    <script src="https://kit.fontawesome.com/57339feb85.js" crossorigin="anonymous"></script>
    <title>page d'inscription pour le site de e-commerce</title>
</head>


<body>

    <!--  <h1>Inscription</h1>
    <form action="" method="POST" class="form">
      <br />
      <div class="form">
        <div class="label_class"><label>Nom d'utilisateur</label></div>
        <div class="input_class"><input type="username" name="username" required></div>
      </div>

      <div class="form">
        <div class="label_class"><label>Adresse mail</label></div>
        <div class="input_class"><input type="email" name="email" required></div>
      </div>

      <div class="form">
        <div class="label_class"><label>mot de passe</label></div>
        <div class="input_class"><input type="password" name="password" required></div>
      </div>

      <div class="form">
        <div class="label_class"><label>confirmez votre mot de passe</label></div>
        <div class="input_class"><input type="password" name="confirmer_mdp" required></div>
      </div>
      <div class="row">
        <div class="input_class">
          <input type="submit" value="Submit">
          <input type="reset" value="Reset">
        </div>
      </div>
    </form>
  </form> -->

    <form action="#" method="post">

        <input name="username" type="text" placeholder="username"><br />

        <input name="email" type="text" placeholder="email"><br />

        <input name="password" type="password" placeholder="password"><br />

        <input name="password_confirmation" type="password" placeholder="password_confirmation"><br />

        <button name="submit">Submit</button>

        <input type="reset">

    </form>


    <?php

    include "DB_connexion.php";

    if (isset($_POST["submit"])) {

        $username = ($_POST["username"]);
        $Userlength = strlen($username);
        $email = ($_POST["email"]);
        $password = $_POST["password"];
        $confirm_password = $_POST["password_confirmation"];

        if (!empty($_POST["username"]) && !empty($_POST["email"]) && !empty($_POST["password"]) && !empty($_POST["password_confirmation"])) {
            print("FULLREMPLI  77 ");

            if ($Userlength <= 20) {
                var_dump($Userlength);
                print(" userlengh 78  ");

                $verif_username = $PDO->prepare("SELECT * FROM my_shop.users WHERE username = ?");
                $verif_username->execute(array($username));
                $username_v = $verif_username->rowCount();

                if ($username_v == 0) {
                    print(" username 82  ");

                    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        print(" email 83  ");

                        $verif_email = $PDO->prepare("SELECT * FROM my_shop.users WHERE email = ?");
                        $verif_email->execute(array($email));
                        $email_v = $verif_email->rowCount();

                        if ($email_v == 0) {
                            print("emailverif 87  ");

                            if ($password == $confirm_password) {
                                print("mdp1-2 88  ");

                                $password = crypt($_POST["password"], (uniqid('', false)));
                                $sql = "INSERT INTO my_shop.users(username, password, email) VALUES ('$username','$password','$email');";
                                $insertUser = $PDO->prepare($sql);
                                $insertUser->execute();
                            } else {
                                echo "mot de passe non-identique";
                            }
                        } else {
                            echo "ce mail déjà utilisé";
                        }
                    } else {
                        echo "votre mail n'est pas valide";
                    }
                } else {
                    echo "ce username est déjà utilisée";
                }
            } else {
                echo "votre username n'est pas valide";
            }
        } else {
            echo "Veuillez completer tous les champs!";
        }
    }
    ?>
</body>

</html>