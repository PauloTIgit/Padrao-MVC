<!-- Start  page-footer Section-->
<section class="signing-page  d-flex align-items-center">
    <div class="overlay-image-bg  "></div>
    <div class="overlay-color"></div>
    <div class="container">
    <div class="sining-area">
        <div class="row ">
        <div class="col-12   mx-auto">
            <div class="signing-wrap">
            <div class="content">
                <h1 class="sining-heading">Entrar </h1>
            </div>
            </div>
        </div>
        <div class="col-12 mx-auto ">       
            <!--Form To sign-in-->
            <div class="main-form-wraper"> 
            <form class="main-form" id="form-login">
                <div class="row ">
                <div class="col-12 ">
                    <div class="   input-wraper">
                    <input class="text-input" id="user-email" name="user_email" type="email">
                    <label for="user-email">E-mail</label><span class="b-border"></span>
                    </div>
                </div>
                <div class="col-12 ">
                    <div class="   input-wraper">
                    <input class="text-input" id="user-password" name="user_password" type="password">
                    <label for="user-password">Senha</label><span class="b-border"></span>
                    </div>
                </div>
                <div class="col-12">
                    <div class="   keep-me-logged-in  mb-5">
                    <input class="check-input" id="keep-logged" name="keep_logged" type="checkbox">
                    <label class="lbl-for-checkbox" for="keep-logged">Mantenha-me conectado</label><i class="fas fa-check icon"></i>
                    </div>
                </div>
                <div class="col-12 ">
                    <button class=" ma-btn-primary no-borders no-box-shadow w-100" type="submit"> Entrar</button>
                </div>
                </div>
            </form>
            </div>
        </div>
        </div>
        <div class="or-sign-up">
        <p class="sign-up-hint">novo em nosso site ?<a class="sign-up-link" href="./register">crie uma conta aqui. </a></p>        </div>
    </div>
    </div>
</section>
<!-- End  page-footer Section-->
 
<script>
    $(document).ready( function(){

        $('#form-login').submit(function (event) {
            event.preventDefault();

            var formData = $(this).serialize();
            
            // Enviar via AJAX
            $.ajax({
                type: 'POST',
                url: './login', // URL do endpoint para login
                data: formData,
                dataType: 'json',
                success: function (response) {
                    console.log(response);
                    
                    // Exibir notificação de sucesso com Toastr
                    toastr.success('Login realizado com sucesso!');
                    // Redirecionar ou realizar outras ações conforme necessário
                },
                error: function (error) {
                    console.log(error);

                    // Exibir notificação de erro com Toastr
                    toastr.error('Erro ao realizar login. Verifique suas credenciais.');
                }
            });

        });
    });
</script>