<?php 
 
?>
<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Responsive Login and Signup Form </title>

        <!-- CSS -->
        <link rel="stylesheet" href="login.css">
                
        <!-- Boxicons CSS -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
                        
    </head>
    <body>
  <section class="container forms">
            <div class="form login">
                <div class="form-content">
                    <header>Se connecter</header>
                    <form action="#">
            
                        <div class="field input-field">
                            <input type="email" name="email" placeholder="Email" class="input" autocomplete="off"">
                        </div>

                        <div class="field input-field">
                            <input type="password"   placeholder="Mot de passe" class="password" autocomplete="off">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="form-link">
                            <a href="#" class="forgot-pass">Mot de passe oublié</a>
                        </div>

                        <div class="field button-field">
                            <button type="submit" nam="submit2"connecter </button>
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Pas encore inscrit<a href="#" class="link signup-link">S'inscrire </a></span>
                    </div>
                </div>

                <div class="line"></div>

                <div class="media-options">
                    <a href="#" class="field facebook">
                        <i class='bx bxl-facebook facebook-icon'></i>
                        <span>Se connecter avec Facebook</span>
                    </a>
                </div>

                <div class="media-options">
                    <a href="#" class="field google">
                        <img src="images/google.png" alt="" class="google-img">
                        <span>Se connecter avec google</span>
                    </a>
                </div>

            </div>

            <!-- Signup Form -->

            <div class="form signup">
                <div class="form-content">
                    <header>S'inscrire</header>
                    <form action="backinscrip.inc.php" method="post">
                    <div class="field input-field">
                            <input type="text" name="nom" placeholder="Nom" class="input" autocomplete="off">
                        </div>
                        <div class="field input-field">
                            <input type="email" nom="email" placeholder="Email" class="input" autocomplete="off">
                        </div>

                        <div class="field input-field">
                            <input type="password" name="password1" placeholder="Create password" class="password" autocomplete="off"> 
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="field input-field">
                            <input type="password" name="password2" placeholder="Confirm password" class="password" autocomplete="off">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="field button-field">
                            <button type="submit" name="submit1">S'inscrire </button>
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Déjà inscrit <a href="#" class="link login-link">Se connecter </a></span>
                    </div>
                </div>

                <div class="line"></div>

                <div class="media-options">
                    <a href="#" class="field facebook">
                        <i class='bx bxl-facebook facebook-icon'></i>
                        <span>Se connecter avec facebook</span>
                    </a>
                </div>

                <div class="media-options">
                    <a href="#" class="field google">
                        <img src="images/google.png" alt="" class="google-img">
                        <span>Se connecter avec facebook</span>
                    </a>
                </div>

            </div>
        </section>

        <!-- JavaScript -->
        <script src="login.js"></script>
    </body>
</html>