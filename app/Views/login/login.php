<?php if (session()->has('error')): ?>
    <div class="alert alert-danger">
        <?php echo session('error'); ?>
    </div>
<?php endif; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/images/logo.png'); ?>">
    <title>ATS | Login</title>
    <base href="<?php echo base_url('assets')?>/">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google reCAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>Attendance</b>Tracking</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg"><b>Log in</b></p>

                <form action="/auth" method="post">
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" name="nip_user" placeholder="NIP">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" id="passwordInput"
                            placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                            <button class="btn btn-outline-secondary" type="button" id="showPasswordBtn">
                                Show
                            </button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="YOUR_RECAPTCHA_SITE_KEY"></div>
                    </div>
                    <hr>
                    <div class="social-auth-links text-center mb-3">
                        <button type="submit" class="btn btn-block btn-primary">Log In</button>
                    </div>
                </form>
                <!-- /.social-auth-links -->
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
    <script>
    const passwordInput = document.getElementById("passwordInput");
    const showPasswordBtn = document.getElementById("showPasswordBtn");

    showPasswordBtn.addEventListener("click", () => {
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            showPasswordBtn.textContent = "Hide";
        } else {
            passwordInput.type = "password";
            showPasswordBtn.textContent = "Show";
        }
    });
    </script>
    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
</body>

</html>