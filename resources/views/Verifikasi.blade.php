<div>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="css/register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image bg-primary">
                           
                    <!-------------      image     ------------->
                    
                    <img src="img/haicel-white-1.png" alt="">
                    <div class="text">
                        <h4>Hi Welcome back</h4>
                        <p>to keep connected with us please login 
                        <br>with your personali info
                        </p>
                    </div>
                    <div class="rectangle-parent">
                        <div class="group-child">
                        </div>
                        <div class="group-item">
                        </div>
                    </div>
                </div>
    
                <div class="col-md-6 right">
                    
                    
                    <div class="input-box w-100">
                       <div class="steper">
                        <div class="progress_header">
                            <p class="completed"><span class="step"><i data-feather="check"></i></span>Daftar</p>
                            <p><span class="step">2</span>Verifikasi</p>
                            <p><span class="step">3</span>Pilih Paket</p>
                            <p><span class="step">4</span>Pembayaran</p>
                        </div>
                       </div> 
                       <div class="form-outer">
                        <form action="#">
                            <div class="page">
                                <header class="page-title">Verifikasi</header>
                                <p>Silahkan daftar terlebih dahulu untuk melanjutkan  ke step berikutnya</p>
                                <div class="otp-field">
                                    <input type="text" class="input" maxlength="1" id="nama" required="" autocomplete="off">
                                    <input type="text" class="input" maxlength="1" id="nama" required="" autocomplete="off">
                                    <input type="text" class="input" maxlength="1" id="nama" required="" autocomplete="off">
                                    <input type="text" class="input" maxlength="1" id="nama" required="" autocomplete="off"> 
                                    <input type="text" class="input" maxlength="1" id="nama" required="" autocomplete="off">
                                    <input type="text" class="input" maxlength="1" id="nama" required="" autocomplete="off">
                                </div>
                                <p class="time">00:59</p>
                                <div class="re-msg">
                                    <p>Belum punya kode OTP</p>
                                    <a href="">Kirim ulang</a>
                                </div>
                                <div class="input-submit">
                                    <a class="submit" href="/packet">next</a>
                                </div>
                            </div>
                        </form>
                       </div> 
                    </div>             
                </div>
            </div>
        </div>
    </div>
    
    <script src="js/jsOTP.js" ></script>
    <script>
        feather.replace();
    </script>
    
</div>