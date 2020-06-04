<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Αίτηση Εγγραφής</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/kerberoscss.css">
</head>

<body id="register">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <header class="mb-5">
                    <h3 class="mt-0 white-text">Αίτηση Εγγραφής στον "Κέρβερο"</h3>
                    <p class="grey-text mb-4">Συμπληρώστε σωστά τα στοιχεία της φόρμας</p>
                    <p class="grey-text"> Το αρμόδιο τμήμα θα ελέγξει το δικαίωμα εγγραφής σας και θα επικοινωνήσει μαζί σας για την περαιτέρω διαιδκασία.</p>
                </header>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <form action="" method="post" class="tm-signup-form">
                    <div class="input-field">
                        <input placeholder="Όνομα Χρήστη" id="username" name="username" type="text" class="validate" required>
                    </div>
                    <div class="input-field">
                        <input placeholder="Κωδικός Πρόσβασης" id="password" name="password" type="password" class="validate" required>
                    </div>
                    <div class="input-field">
                        <input placeholder="Επανεισάγετε τον κωδικό πρόσβασης" id="password2" name="password2" type="password" class="validate" required>
                    </div>
                    <div class="input-field">
                        <input placeholder="Email" id="email" name="email" type="email" class="validate" required>
                    </div>
                    <div class="input-field">
                        <input placeholder="Τηλέφωνο" id="phone" name="phone" type="tel" class="validate" required>
                    </div>
                    <div class="text-right mt-4">
                        <button type="submit" class="waves-effect btn-large btn-large-white px-4 tm-border-radius-0">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
        <footer class="row tm-mt-big mb-3">
            <div class="col-xl-12 text-center">
                <p class="d-inline-block tm-bg-black white-text py-2 tm-px-5">
                    Crafted by <a rel="nofollow" href="https://github.com/d4t4k1ng" class="tm-footer-link">D4t4k1ng</a> &copy; 2020
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

</html>