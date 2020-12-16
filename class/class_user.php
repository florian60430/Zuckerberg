<?php
class user
{
    private $_bdd;
    public function __construct($bdd)
    {
        $this->_bdd = $bdd;
    }
    public function login($mail, $password)
    {
        if (!empty($mail) && !empty($password)) {
            $reqUser = $this->_bdd->prepare("SELECT * FROM user WHERE pseudo = ? AND mdp = ?");
            $reqUser->execute(array($mail, $password));
            $userExist = $reqUser->rowCount();
            $userInfo = $reqUser->fetch();
            if ($userExist != 0) {
                $_SESSION['logged'] = true;
                $_SESSION['id_user'] = $userInfo['id_user'];
                header('Location:main.php');
            } else {
                return "<h6 class='red-text'><i>Mail ou mot de passe incorrect</i></h6>";
            }
        } else {
            return "<h6 class='red-text'><i>Tous les champs doivent être remplis</i></h6>";
        }
    }
    public function signin($mail, $password, $passwordconfirm)
    {
        if (!empty($mail) && !empty($password) && !empty($passwordconfirm)) {
            if ($password == $passwordconfirm) {

                $this->_bdd->query("INSERT INTO `user`(`id_user`, `pseudo`, `mdp`) VALUES (NULL,'" . $mail . "','" . $password . "')");
                $data = $this->_bdd->query("SELECT * FROM user WHERE pseudo = '" . $mail . "' AND mdp = '" . $password . "'");
                $tabData = $data->fetch();
                $_SESSION['id_user'] = $tabData["id_user"];

                $data = $this->_bdd->query("SELECT * from manga");
                while ($tabData = $data->fetch()) {
                    $this->_bdd->query("INSERT INTO `assoc`(`id_assoc`, `id_user`, `id_manga`, `etat`) VALUES (NULL,'" . $_SESSION['id_user'] . "', '" . $tabData['id_manga'] . "', 0)");
                }
                $_SESSION['logged'] = true;
                return "<h6 class='green-text'><i>Vous êtes inscrit!</i></h6>";
            } else {
                return "<h6 class='red-text'><i>Les mots de passe ne correspondent pas</i></h6>";
            }
        } else {
            return "<h6 class='red-text'><i>Tous les champs doivent être remplis</i></h6>";
        }
    }
}
