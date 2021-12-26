<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SING UP | KOMICORP</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="cssregister/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="cssregister/css/style.css">
</head>

<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Selamat datang </h2>
                        <form action="<?= base_url('auth/save'); ?>" method="POST">
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Masukan Nama Anda" />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Masukkan Email Anda" />
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Masukkan Password Anda" />
                            </div>
                            <div class="form-group">
                                <label for="cpassword"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="cpassword" id="cpassword"
                                    placeholder="Repeat your password" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>Saya setuju
                                    persyaratan web ini
                                    <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <a href="login" style="color:brown" aria-setsize="50">DAFTAR</a>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="cssregister/images/bg-01.jpg" alt="sing up image"></figure>
                        <a href="login" class="signup-image-link">Saya sudah menjadi member</a>
                    </div>
                </div>
            </div>
        </section>





        <!-- JS -->
        <script src="cssregister/vendor/jquery/jquery.min.js"></script>
        <script src="cssregister/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>