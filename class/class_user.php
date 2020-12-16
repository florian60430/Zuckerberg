<?php
    class user{
        private $_bdd;
        public function __construct($bdd)
        {
            $this->_bdd = $bdd;
        }
        public function login($mail,$password){
            if(!empty($mail) && !empty($password)){
                $reqUser = $this->_bdd->prepare("SELECT * FROM user WHERE pseudo = ? AND password = ?");
                $reqUser->execute(array($mail,$password));
                $userExist = $reqUser->rowCount();
                $userInfo = $reqUser->fetch();
                if($userExist != 0){
                    $_SESSION['logged'] = true;
                    $_SESSION['id_user'] = $userInfo['id_user'];
                    header('Location:main.php');
                }
                else{
                    return "<h6 class='red-text'><i>Mail ou mot de passe incorrect</i></h6>";
                }
            }
            else{
                return "<h6 class='red-text'><i>Tous les champs doivent être remplis</i></h6>";
            }
        }
        public function signin($mail,$password,$passwordconfirm){
            if(!empty($mail) && !empty($password) && !empty($passwordconfirm)){
                if($password == $passwordconfirm){
                    $reqUser = $this->_bdd->query("INSERT INTO `user`(`id_user`, `mail`, `password`) VALUES (NULL,'".$mail."','".$password."')");
                    return "<h6 class='green-text'><i>Vous êtes inscrit!</i></h6>";
                }
                else{
                    return "<h6 class='red-text'><i>Les mots de passe ne correspondent pas</i></h6>";
                }
            }
            else{
                return "<h6 class='red-text'><i>Tous les champs doivent être remplis</i></h6>";
            }
        }
    }
?>