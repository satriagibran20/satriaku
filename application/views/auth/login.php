<div class="container pt-4">
    <div class="info-box bg-transparent shadow-none">
        <?php
        $logo_app = $setting->logo_kanan == null ? base_url() . 'assets/img/favicon.png' : base_url() . $setting->logo_kanan;
        ?>
        <div class="info-box-content ml-2 text-center">
            <div class="d-flex justify-content-center align-items-center">
                <img src="<?= $logo_app ?>" width="55" height="55" class="mr-2">
                <div class="text-center">
                    <h5 class="info-box-text" style="color: white;"><b><?= $setting->nama_aplikasi ?></b></h5>
                    <span class="info-box-text" style="color: white;"><?= $setting->alamat ?></span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
                <div class="card form-signin">
                    <div class="card-body">
                        <p class="login-box-msg" style="font-weight: bold; font-size: 30px;">Selamat Datang</p>
                        <p class="login-box-msg" style="font-weight: normal; text-align: left; margin-top: 2px;">Masukan Username dan Password Anda</p>
                        <div id="infoMessage"><?php echo $message; ?></div>

                        <?= form_open("auth/cek_login", array('id' => 'login')); ?>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text" style="background: transparent; border: none;">
                                    <span class="fas fa-user" style="color: #007bff;"></span>
                                </div>
                            </div>
                            <?= form_input($identity, '', 'class="form-control" placeholder="Nama Pengguna" style="border: none; border-bottom: 2px solid #ced4da; background-color: transparent; border-radius: 10px;" required'); ?>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text" style="background: transparent; border: none;">
                                    <span class="fas fa-lock" style="color: #007bff;"></span>
                                </div>
                            </div>
                            <?= form_input($password, '', 'type="password" class="form-control" placeholder="Kata Sandi" style="border: none; border-bottom: 2px solid #ced4da; background-color: transparent; border-radius: 10px;" required'); ?>
                            <div class="input-group-append">
                                <div class="input-group-text" style="background: transparent; border: none;">
                                    <span id="toggle-password" class="fas fa-eye-slash" style="cursor: pointer; color: #007bff;"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <?= form_submit('submit', 'Masuk', 'class="btn btn-primary btn-block" style="width: 100%; border-radius: 20px;"'); ?>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="form-group">
                                    <select class="form-control" id="login-mode" name="login-mode">
                                        <option value="CBT">CBT</option>
                                        <option value="E-learning">E-learning</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <span style="color: gray;">MOD Anonim CBT versi 1.5.3</span>
                            </div>
                        </div>
                        <?= form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url() ?>/assets/app/js/jquery.backstretch.js"></script>
<script type="text/javascript">
    let base_url = '<?=base_url();?>';
    var img = ["wall1.png", "wall1.png", "wall3.png"];

    $.backstretch([
        base_url + 'assets/img/' + img[0],
        base_url + 'assets/img/' + img[1],
        base_url + 'assets/img/' + img[2]
    ], {
        fade: 1000,
        duration: 10000
    });

    $(document).ready(function(){
        $('#myCarousel').carousel({
            interval: 1000 * 2,
            pause: 'none'
        });

        $('form#login input').on('change', function(){
            $(this).parent().removeClass('has-error');
            $(this).next().next().text('');
        });

        $('#login-mode').on('change', function() {
            if ($(this).val() === 'CBT') {
                localStorage.setItem('satriaCBT.login', '1');
            } else {
                localStorage.removeItem('satriaCBT.login');
            }
        });

        $('form#login').on('submit', function(e){
            e.preventDefault();
            e.stopImmediatePropagation();

            var infobox = $('#infoMessage');
            infobox.addClass('info-box align-items-center justify-content-center bg-gradient-info').text('Checking...');

            var btnsubmit = $('#submit');
            btnsubmit.attr('disabled', 'disabled').val('Wait...');

            const arrForm = $(this).serializeArray();
            const loginMode = $('#login-mode').val();
            const cbtOnly = loginMode === 'CBT' ? '1' : '0';
            localStorage.setItem('satriaCBT.login', cbtOnly);

            $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: $(this).serialize() + '&cbt-only=' + cbtOnly,
            success: function(data){
                infobox.removeAttr('class').text('');
                btnsubmit.removeAttr('disabled').val('Login');
                console.log('login', data);
                if(data.status){
                    infobox.addClass('info-box align-items-center justify-content-center').css('color', 'gray').text('Login Sukses');

                    const isLogin = localStorage.getItem('satriaCBT.login');
                    const isCbtMode = isLogin ? isLogin === '1' : false;
                    let go = base_url + data.url;
                    if (isCbtMode && data.role === 'siswa') {
                        go = 'siswa/cbt';
                    }
                    window.location.href = go;
                }else{
                    if(data.invalid){
                        $.each(data.invalid, function(key, val){
                        $('[name="'+key+'"').parent().addClass('has-error');
                        $('[name="'+key+'"').next().next().text(val);
                        if(val == ''){
                            $('[name="'+key+'"').parent().removeClass('has-error');
                            $('[name="'+key+'"').next().next().text('');
                        }
                        });
                    }
                        if(data.failed){
                            infobox.addClass('info-box align-items-center justify-content-center').css('color', 'gray').text(data.failed);
                        }
                    }
                }
            });
        });

        $('#toggle-password').on('click', function (e) {
            // toggle the type attribute
            const type = $('#password').attr('type') === 'password' ? 'text' : 'password';
            $('#password').attr('type', type);
            // toggle the eye / eye slash icon
            $(this).toggleClass('fa-eye-slash fa-eye');
        });
    });
</script>

<style>
    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 1px 0 0 #007bff;
    }
    .input-group-text {
        border: none;
    }
    .card.form-signin {
        position: absolute;
        top: 16%;
        left: 50%;
        transform: translateX(-50%);
        width: 90%;
        max-width: 400px;
        background-color: white;
        background-image: url('<?= base_url() ?>assets/img/tutwuri2.png');
        background-size: 70%;
        background-position: top right;
        background-repeat: no-repeat;
        border-radius: 15px;
        padding: 10px;
    }

    @media (max-width: 600px) {
        .card.form-signin {
            width: 95%;
            padding: 5px;
        }
    }
</style>
