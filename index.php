<?php
//Εκκινώ την συνεδρία Session
session_start();

//Δηλώνω τις κλάσεις που θα χρειαστώ στην εφαρμογή μου
require_once("Classes/Ergazomenos.php");
require_once("Classes/Database.php");

    ?>
<!--Σχεδίαση της κεντρικής σελίδας της εφαρμογής -->
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Εταιρεία Cloup v1.0</title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/materialize.min.css">
        <link rel="stylesheet" href="css/kerberoscss.css">
    </head>
    <?php
    if (!isset($_SESSION['username'])) { //Έλεγχος αν ο χρήστης είναι συνδεδεμένος στην εφαρμογή.

        if (!isset($_POST['username'])) { //Έλεγχος αν έχει έρθει post με στοιχεία εισόδου,συγκεκριμένα με username
            ?>
            <body id="login">
            <div class="container">
                <div class="row tm-register-row tm-mb-35">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 tm-login-l">
                        <!-- Εδώ αρχίζει η φόρμα του login κι εδώ ξεκινά η διαδικασία -->
                        <form action="" method="post" class="tm-bg-black p-5 h-100">
                              <div class="input-field">
                                <input placeholder="Όνομα Χρήστη" id="username" name="username" type="text"
                                       class="validate">
                            </div>
                            <div class="input-field mb-5">
                                <input placeholder="Συνθηματικό" id="password" name="password" type="password"
                                       class="validate">
                            </div>
                            <div class="tm-flex-lr">
                                <a href="#" class="white-text small">Ξέχασα τα στοιχεία μου</a>
                                <button type="submit"
                                        class="waves-effect btn-large btn-large-white px-4 black-text rounded-0">Είσοδος
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 tm-login-r">
                        <header class="font-weight-light tm-bg-black p-5 h-100">
                            <h3 class="mt-0 text-white font-weight-light">Είσοδος στην Cloup</h3>
                            <p>Εισάγετε τα στοιχεία που σας δηλώσατε κατα την εγγραφή σας!</p>
                        </header>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ml-auto mr-0 text-center">
                        <a href="signup.php" target="_blank" class="waves-effect btn-large btn-large-white px-4 black-text rounded-0">Αίτηση
                            Εγγραφής</a>
                    </div>
                </div>
                <footer class="row tm-mt-big mb-3">
                    <div class="col-xl-12 text-center">
                        <p class="d-inline-block tm-bg-black white-text py-2 tm-px-5">
                            Crafted by <a rel="nofollow" href="https://github.com/d4t4k1ng" class="tm-footer-link">D4t4k1ng</a>
                            &copy; 2020
                        </p>
                    </div>
                </footer>
            </div>

            <script src="js/jquery-3.2.1.slim.min.js"></script>
            <script src="js/materialize.min.js"></script>
            <script>
                $(document).ready(function () {
                    $('select').formSelect();
                });
            </script>
            </body>
            <?php

        } else { //Eφόσον έχει ληφθεί post φόρμας με μεταβλητές

            $ergazomenos = new Ergazomenos(); //Νέο αντικείμενο Credentials
            //Με εκχώρηση των username και password τις τιμές των αντίστοιχων μεταβλητών απο Post.
            $ergazomenos->alias = $_POST['username'];
            $ergazomenos->crypto = $_POST['password'];

            $ergazomenos->login(); //Εκτέλεση της συνάρτησης login() της κλάσσης Credentials

            if ($ergazomenos->kwd_ergazomenou !== -1) { //Έλεγχος αν έχει βρεθεί εγγραφή στην ΒΔ κι έτσι δεν έχει την αρχική τιμή της Construct() δλδ -1

                $_SESSION['username'] = $ergazomenos->alias;
                $_SESSION['kwd_ergazomenou'] = $ergazomenos->kwd_ergazomenou;

                //Μεταφερόμαστε στην Index σελίδα
                header('location: index.php'); //Όταν τοποθετηθεί σε web server θα δωθεί η σωστή τοποθεσία του redirection
            }
            else
                {
                    header('location: index.php');//Όταν τοποθετηθεί σε web server θα δωθεί η σωστή τοποθεσία του redirection
                }
        }

    }


    else { //Όταν ο χρήστης έχει συνδεθεί επιτυχώς.

        ?>

    <body id="home">
    <div class="container tm-home-mt tm-home-container">
        <div class="row">
            <div class="col-12">
                <div class="tm-home-mt">
                    <h1 class="tm-site-title">Εταιρεία Cloup</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-20 col-lg-20 col-md-20 col-sm-20">
                <div class="tm-home-mt mt-3 font-weight-light">
                    <h5 class="tm-mb-35">Συγχαρητήρια! Είστε συνδεδεμένοι στην Cloup SA</h5>
                </div>
            </div>


            <div  class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <a href="logout.php" class="waves-effect btn-large btn-large-white px-4 black-text rounded-0">Αποσύνδεση</a>
            </div>
        </div>
    </div>

    <footer class="row tm-mt-big mb-3">
        <div class="col-xl-12 text-center">
            <p class="d-inline-block tm-bg-black white-text py-2 tm-px-5">
                Crafted by <a rel="nofollow" href="https://github.com/d4t4k1ng" class="tm-footer-link">D4t4k1ng</a> &copy; 2020
            </p>
        </div>
    </footer>
    </body>
</html>


<?php
}
?>



