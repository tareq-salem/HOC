<?php
session_start();
// Ceci est le personnel autorisé


/*
 *
 * si il ne sont pas vide
 * si ils sont dans le tableau
 * si le jeux d  $_POST corespond (username + password)
 * ++ conditons de validation
 * ==
 * récupérer les donnés $_POST
 * $_POST['username']
 * $_POST['password']
 *
 *
 */

/* CE QUE DOIT FAIRE MON SCRIPT A LA FIN:
//$_SESSION["username"] = $_POST['username'];
//$_SESSION["password"] = $_POST['password'];
*/
if($_POST['username'] AND $_POST['password']){
    echo $_POST['username'].$_POST['password'];
}

$employees = array(
	0 => array(
		"username" => "toto",
		"password" => "haha",
	),
	1 => array(
		"username" => "titi",
        "password" => "hehe",
	),
	2 => array(
		"username" => "john",
		"password" => "123123",
	),
);


//si dans le tableau $employes[$user]["usernname"] ==  $session_name
//si dans le tableau $employes[$user]["password"] ==  $sespassword
foreach ($employees as $user){
    if ($user["username"] == $_POST['username'] AND $user["password"] ==$_POST['password'])
    {
        // mon scirpt exécute ce que je voulais == but
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];

        /*  TOMEMORY REDIRECTION
         * pour l'exemple on a mis un refresh: 3(secondes)pour que l'on puisse voir ce qui se passe avant redirection
         * car les parametres de délais doivent être fais js
         *
         * en règle général on utilisera header('location: monlien.php')
         */
        //header('location: http://localhost/vagrant/httpdoc/php_courses/login/profil.php');
        header('refresh:3 ;url=profil.php');
        exit();
    }
}

var_dump($_SESSION);
/*
 * si on est pas connecté (== on est pas rentré dans le if du foreach)
 * on redirige la page vers le formulaire du login.php
 * pour redemander de s'identifier
 */


header('refresh:3 ;url=login.php');
exit();

?>