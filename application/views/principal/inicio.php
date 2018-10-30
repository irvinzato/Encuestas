<!DOCTYPE html>  
<html>  

    <head>  
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>  
    <body>  
        <form id="login-form"class="form-horizontal">
            <fieldset>

                <!-- Form Name -->
                <legend>Easy Parking - Login</legend>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Alumno: </label>  
                    <div class="col-md-4">
                        <input id="textinput" name="textinput" type="text" placeholder="Informe seu usuário" class="form-control input-md">

                    </div>
                </div>

                <!-- Password input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="passwordinput">Contraseña: </label>
                    <div class="col-md-4">
                        <input id="passwordinput" name="passwordinput" type="password" placeholder="Informe sua senha" class="form-control input-md">

                    </div>
                </div>

                <!-- Button -->
               
                        <button type="submit">LogIN</button>
                    </div>
                </div>

            </fieldset>
        </form>
    </div>  
</body>  
</html>  
<script>
    $(document).ready(function () {
        $('#login-form').submit(
                function (event) {
                    event.preventDefault();
                    $.ajax({
                        url:"<?=base_url("/index.php/principal/ingresar") ?>",
                        type: "post",
                        data: $("#login-form").serialize(),
                        success: function (resp) {
                            alert(resp);
                        }
                    });
                }
        );
    });
</script>