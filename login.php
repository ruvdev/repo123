<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--    <link rel="stylesheet" href="styles.css">-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css" rel="stylesheet">
    <link href="css/stylesLogin.css" rel="stylesheet" type="text/css"/>
    
    <title>Login ClientePHP</title>
</head>



<?php


// Iniciar sesión


// URL del Servicio Web
//$Cliente = new SoapClient('http://localhost:8080/ProyectoSOAP/WSusuario?WSDL');
//    
//    // Se asigna una variable para el método
//    $IniciaSesionP = $Cliente->login([
//        
//            "user" => 'c@gmail.com',
//            "pass" => '12345'
//        
//       ])->return;
//
//    if ($IniciaSesionP) {
//        echo 'Se inició sesión correctamente';
//    } else {
//        echo 'ERROR: No se inició Sesión';
//    }
//    
    
?>



<body>
    <header class="color-mode">
        <input type="checkbox" class="checkbox" id="toogle_mode" />
        <label class="label" for="toogle_mode">
            <i class="fas fa-moon"></i>
            <i class="fas fa-sun"></i>
            <div class="ball"></div>
        </label>
    </header>
    <main>
        <div class="login_card">
            <header>
                <a style="text-decoration: none; color:white" href="index.php"><img src="img/logo.png" style="height: 70px" alt="logo">
                <h3>Inicia Sesión</h3></a>
            </header>
            <div class="login_card__info-data">
                <fieldset>
                    <label for="email">
                        E-mail
                        <input type="email" name="email" id="email">
                    </label>
                </fieldset>
                <fieldset>
                    <label for="senha">
                        Password
                        <input type="password" name="password" id="senha">
                        <div toggle="#password-field" class="toggle-password">
                            <img class="off" src="img/toogle_pass.svg" alt="toggle password" />
                            <img class="on hide" src="img/toogle_pass_on.svg" alt="toggle password" />
                        </div>
                    </label>
                </fieldset>
                <a href="#" target="_self">Mostrar password</a>
            </div>
            <button >Entrar</button>
            <p>Has olvidado la contraseña? <a href="#" target="_self">Contáctanos</a></p>
            <footer>
                <a href="" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21"
                        viewBox="0 0 21 21" fill="none">
                        <g clip-path="url(#clip0)">
                            <path
                                d="M20.9797 6.17406C20.9305 5.05825 20.75 4.29114 20.4915 3.62643C20.2249 2.92085 19.8147 2.28915 19.2772 1.76402C18.752 1.23071 18.1162 0.816306 17.4188 0.553819C16.7502 0.295338 15.9871 0.114898 14.8713 0.0657019C13.7472 0.0123391 13.3903 0 10.5391 0C7.68801 0 7.33113 0.0123391 6.21116 0.0615355C5.09535 0.110732 4.32824 0.291332 3.66369 0.549653C2.95795 0.816306 2.32625 1.22654 1.80112 1.76402C1.26781 2.28915 0.853568 2.92502 0.590921 3.62242C0.33244 4.29114 0.152 5.05408 0.102804 6.16989C0.0494409 7.29403 0.0371017 7.65091 0.0371017 10.5021C0.0371017 13.3532 0.0494409 13.7101 0.0986372 14.83C0.147833 15.9459 0.328434 16.713 0.586914 17.3777C0.853568 18.0833 1.26781 18.715 1.80112 19.2401C2.32625 19.7734 2.96212 20.1878 3.65952 20.4503C4.32824 20.7088 5.09118 20.8892 6.20715 20.9384C7.32697 20.9878 7.684 20.9999 10.5351 20.9999C13.3863 20.9999 13.7432 20.9878 14.8631 20.9384C15.9789 20.8892 16.7461 20.7088 17.4106 20.4503C18.8219 19.9046 19.9377 18.7888 20.4834 17.3777C20.7417 16.709 20.9223 15.9459 20.9715 14.83C21.0207 13.7101 21.033 13.3532 21.033 10.5021C21.033 7.65091 21.0289 7.29403 20.9797 6.17406ZM19.0886 14.748C19.0434 15.7736 18.8711 16.3274 18.7275 16.6966C18.3747 17.6115 17.6486 18.3376 16.7337 18.6904C16.3645 18.834 15.8067 19.0063 14.7851 19.0513C13.6775 19.1007 13.3453 19.1128 10.5433 19.1128C7.74137 19.1128 7.40501 19.1007 6.30138 19.0513C5.27579 19.0063 4.72197 18.834 4.35276 18.6904C3.89749 18.5222 3.48309 18.2555 3.14672 17.9068C2.79802 17.5663 2.53137 17.1561 2.36311 16.7008C2.21953 16.3316 2.04726 15.7736 2.00223 14.7522C1.95287 13.6445 1.94069 13.3122 1.94069 10.5102C1.94069 7.70828 1.95287 7.37192 2.00223 6.26844C2.04726 5.24285 2.21953 4.68903 2.36311 4.31982C2.53137 3.86439 2.79802 3.45015 3.15089 3.11363C3.49126 2.76493 3.90149 2.49828 4.35692 2.33017C4.72613 2.18659 5.28412 2.01432 6.30554 1.96913C7.41318 1.91994 7.74554 1.9076 10.5473 1.9076C13.3534 1.9076 13.6856 1.91994 14.7893 1.96913C15.8149 2.01432 16.3687 2.18659 16.7379 2.33017C17.1931 2.49828 17.6076 2.76493 17.9439 3.11363C18.2926 3.45416 18.5593 3.86439 18.7275 4.31982C18.8711 4.68903 19.0434 5.24686 19.0886 6.26844C19.1378 7.37608 19.1501 7.70828 19.1501 10.5102C19.1501 13.3122 19.1378 13.6404 19.0886 14.748Z"
                                fill="white" fill-opacity="0.7" />
                            <path
                                d="M10.5388 5.10756C7.56061 5.10756 5.14423 7.52379 5.14423 10.5022C5.14423 13.4805 7.56061 15.8968 10.5388 15.8968C13.5172 15.8968 15.9334 13.4805 15.9334 10.5022C15.9334 7.52379 13.5172 5.10756 10.5388 5.10756ZM10.5388 14.0015C8.60672 14.0015 7.03949 12.4344 7.03949 10.5022C7.03949 8.56989 8.60672 7.00282 10.5388 7.00282C12.4711 7.00282 14.0382 8.56989 14.0382 10.5022C14.0382 12.4344 12.4711 14.0015 10.5388 14.0015Z"
                                fill="white" fill-opacity="0.7" />
                            <path
                                d="M17.4064 4.89418C17.4064 5.58966 16.8425 6.15357 16.1469 6.15357C15.4514 6.15357 14.8875 5.58966 14.8875 4.89418C14.8875 4.19854 15.4514 3.63478 16.1469 3.63478C16.8425 3.63478 17.4064 4.19854 17.4064 4.89418Z"
                                fill="white" fill-opacity="0.7" />
                        </g>
                        <defs>s
                            <clipPath id="clip0">
                                <rect width="21" height="21" fill="white" />
                            </clipPath>
                        </defs>
                    </svg></a>
                <a href="" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21"
                        viewBox="0 0 21 21" fill="none">
                        <path
                            d="M3.07617 21H9.92578V13.5352H7.46484V11.0742H9.92578V7.99805C9.92578 6.30183 11.3057 4.92188 13.002 4.92188H16.0781V7.38281H13.6172C12.9387 7.38281 12.3867 7.93476 12.3867 8.61328V11.0742H15.9671L15.5569 13.5352H12.3867V21H17.9238C19.62 21 21 19.62 21 17.9238V3.07617C21 1.37995 19.62 0 17.9238 0H3.07617C1.37995 0 0 1.37995 0 3.07617V17.9238C0 19.62 1.37995 21 3.07617 21ZM1.23047 3.07617C1.23047 2.05847 2.05847 1.23047 3.07617 1.23047H17.9238C18.9415 1.23047 19.7695 2.05847 19.7695 3.07617V17.9238C19.7695 18.9415 18.9415 19.7695 17.9238 19.7695H13.6172V14.7656H16.5993L17.4196 9.84375H13.6172V8.61328H17.3086V3.69141H13.002C10.6272 3.69141 8.69531 5.62331 8.69531 7.99805V9.84375H6.23438V14.7656H8.69531V19.7695H3.07617C2.05847 19.7695 1.23047 18.9415 1.23047 17.9238V3.07617Z"
                            fill="white" fill-opacity="0.7" />
                    </svg></a>
                <a href="" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21"
                        viewBox="0 0 21 21" fill="none">
                        <path
                            d="M6.56282 17.3496H3.69173V8.08008H6.56282V17.3496ZM6.84929 5.12679C6.84929 4.19865 6.09627 3.44531 5.16861 3.44531C4.23743 3.44531 3.48633 4.19865 3.48633 5.12679C3.48633 6.05525 4.23743 6.80859 5.16861 6.80859C6.09627 6.80859 6.84929 6.05525 6.84929 5.12679ZM17.3086 12.2499C17.3086 9.76156 16.7829 7.91602 13.8761 7.91602C12.4793 7.91602 11.5417 8.61456 11.159 9.34099H11.1562V8.08008H8.36719V17.3496H11.1562V12.7472C11.1562 11.5419 11.4631 10.3742 12.9571 10.3742C14.4308 10.3742 14.4785 11.7526 14.4785 12.8238V17.3496H17.3086V12.2499ZM21 18.5391V2.46094C21 1.1039 19.8961 0 18.5391 0H2.46094C1.1039 0 0 1.1039 0 2.46094V18.5391C0 19.8961 1.1039 21 2.46094 21H18.5391C19.8961 21 21 19.8961 21 18.5391ZM18.5391 1.64062C18.9914 1.64062 19.3594 2.00864 19.3594 2.46094V18.5391C19.3594 18.9914 18.9914 19.3594 18.5391 19.3594H2.46094C2.00864 19.3594 1.64062 18.9914 1.64062 18.5391V2.46094C1.64062 2.00864 2.00864 1.64062 2.46094 1.64062H18.5391Z"
                            fill="white" fill-opacity="0.7" />
                    </svg></a>
            </footer>
        </div>
    </main>
</body>
<script>
    // Toogle dark and light mode
    const btn_check = document.getElementById('toogle_mode');

    btn_check.addEventListener('change', () => {
        document.body.classList.toggle('dark');
    });

    // Toogle password display
    const toggle_input = document.querySelector(".toggle-password");
    const input = document.querySelector("#senha");
    const password_on = document.querySelector(".toggle-password .on");
    const password_off = document.querySelector(".toggle-password .off");

    toggle_input.addEventListener("click", function (e) {
        e.preventDefault();
        if (input.type === "password") {
            input.type = "text";
            input.focus();
            password_on.classList.remove('hide');
            password_off.classList.add('hide');
        } else {
            input.type = "password";
            input.focus();
            password_on.classList.add('hide');
            password_off.classList.remove('hide');
        }
    })
</script>

</html>