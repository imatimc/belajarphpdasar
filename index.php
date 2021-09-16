<?php include('server.php') 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JENNIFER-EVENT-</title>
    <link href="css/style.css" rel="stylesheet">
    <script defer src="js/scriptmodal.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
</head>

<body class="body">
    <nav class="navbar">
        <a class="navbar-brand" href="#">
            <img src="img/logo2.png" width="auto" height="auto" class="d-inline-block align-top" alt="">
        </a>
    </nav>
    <div class="hero" id="home">
        <div class="hero__container">
            <h1 class="hero__heading"><span>Real-Time Application Monitoring solution
                </span></h1>

            <div class="hero__description">
                <h1>
                    <p> Stress oleh keluhan performa website anda?</p>
                    <p>Lakukan diagnosa menggunakan JENNIFER secara realtime.</p>
                    <p>JENNIFER adalah satu-satunya solusi untuk memantau aplikasi web secara real-time.</p>
                </h1>
            </div>

            <button type="button" class="btn border-top-color main__btn" data-toggle="modal"
                data-modal-target="#modal">Dapatkan Free Trial
            </button>
            <div class="modal" id="modal">
                <div class="modal-header">
                    <div> <img class="img-modal" src=" img/logo2.png" width="auto" height="auto">
                    </div>
                    <button data-close-button class="close-button">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="body_regaistrasi">
                        <form method="post">
                            <!-- <?php include('errors.php'); ?> -->
                            <br>
                            <label></label>
                            <div class="input-group">
                                <input type="text" name="username" value="<?php echo $username;?>"
                                    placeholder=" Masukan Nama" required>
                            </div>
                            <br>
                            <label></label>
                            <div class="input-group">
                                <input type="email" name="email" value="<?php echo $email; ?>"
                                    placeholder=" Masukan Email" required>
                            </div>
                            <br>
                            <label></label>
                            <div class="input-group">
                                <input type="password" name="password_1" placeholder="Password" required>
                            </div>
                            <br>
                            <label></label>
                            <div class="input-group">
                                <input type="password" name="password_2" placeholder="Confirm password" required>
                            </div>
                            <br>
                            <label></label>
                    </div>
                    <div class="">
                        <select class="select" name=" Platform" required>
                            <option value=""> Pilih Platform Yang Anda Gunakan</option>
                            <option value="Php">Php</option>
                            <option value="Net">.Net</option>
                            <option value="Java">Java</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <button type="submit btn" class="btn border-top-color main__btn2 fourth " name="reg_user">Kirim
                            Permintaan
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div id="overlay"></div>

    <script>
    var gradeField = document.querySelector("input[name=username]");
    gradeField.addEventListener("invalid", function() {
        this.setCustomValidity('');
        if (!this.validity.valid) {
            this.setCustomValidity('masukan nama');
        }
    });
    var gradeField1 = document.querySelector("input[name=email]");
    gradeField1.addEventListener("invalid", function() {
        this.setCustomValidity('');
        if (!this.validity.valid) {
            this.setCustomValidity('masukan email');
        }
    });
    var gradeField2 = document.querySelector("input[name=password_1]");
    gradeField2.addEventListener("invalid", function() {
        this.setCustomValidity('');
        if (!this.validity.valid) {
            this.setCustomValidity('masukan Pasword')
        }
    });
    var gradeField3 = document.querySelector("input[name=password_2]");
    gradeField3.addEventListener("invalid", function() {
        this.setCustomValidity('');
        if (!this.validity.valid) {
            this.setCustomValidity('masukan Pasword Kembali')
        }
    });
    var gradeField4 = document.querySelector("input[name=platfrom]");
    gradeField4.addEventListener("invalid", function() {
        this.setCustomValidity('');
        if (!this.validity.valid) {
            this.setCustomValidity('PlatFrom Yang Anda Gunakan')
        }
    });