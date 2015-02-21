<?php

    /* SECURISATION DES VARIABLES RECUS */
    $pseudo = htmlspecialchars($_POST["pseudo"]);
    $email = htmlspecialchars($_POST["email"]);
    $pass1 = htmlspecialchars($_POST["password"]);
    $pass2 = htmlspecialchars($_POST["password_verif"]);
    $tel = htmlspecialchars($_POST["tel"]) ? htmlspecialchars($_POST["tel"]) : "";
    $classe = htmlspecialchars($_POST["classe"]);

    /* INSERTION NOUVEAU MEMBRE */
    if($pass1 == $pass2){
        $pass1 = sha1($pass1);
        $insert = $bdd->prepare('INSERT INTO users(pseudo, email, classe, tel, password, date_inscription) VALUES(:pseudo, :email, :classe, :tel, :pass1, now())');
        $insert->execute(array(":pseudo" => $pseudo,
                                ":email" => $email, 
                                ":classe" => $classe, 
                                ":tel" => $tel,
                                ":pass1" => $pass1)
                        );
        $insert->closeCursor();
        $selectId= $bdd->query("SELECT * FROM users WHERE pseudo='$pseudo' and password='$pass1'");
        $donnees=$selectId->fetch();
            if($donnees){
                $_SESSION["Auth"]["id"]=$donnees["id"];
                $_SESSION["Auth"]["pseudo"] = $donnees["pseudo"];
                $_SESSION["Auth"]["email"] = $donnees["email"];
                setFlash("BIENVENU(E) ". strtoupper($donnees['pseudo']) ." SUR TOGOSCHOOL.COM LA PREMIERE PLATFORM TOGOLAISE DE COURS EN LIGNE ACCESSIBLE H24");
                header("Location: " .ROOT. "index.php");
                die();
            }else{
                setFlash("Veuillez bien renseigné les champs", "info");
                header("Location:" .ROOT. "sign_in.php");
                die();
            }
    }else{
        setFlash("Les deux mots de passes ne sont pas identiques", "info");
        header("Location:" .ROOT. "sign_in.php");
        die();
    }