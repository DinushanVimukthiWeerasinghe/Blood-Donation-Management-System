<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BDMS</title>
<!--    <link rel="stylesheet" href="login.css">-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
    <!--form -->
    <section class="container forms">
        <div class="form login">
            <div class="form-content">
                <header>Login</header>
                <form action="#" method="post">
                    <div class="field input-field">
                        <input type="email" placeholder="Email" class="email" required>
                    </div>
                    <div class="field input-field">
                        <input type="password" placeholder="Password" class="password" id="password" required>
                        <i class="uil uil-eye-slash toggle"></i>
                    </div>  
                    <div class="form-link">
                        <a href="#" class="forgot">Forgot Password?</a>
                    </div>
                    <div class="field button-field">
                        <button>Login</button>
                    </div>
                </form>
            </div>
        </div>

    </section>
    <script>
        const toggle = document.body.querySelector(".toggle"),
            input = document.body.querySelector(".password");

        toggle.addEventListener("click", () => {
            if(input.type === "password"){
                input.type = "text";
                toggle.classList.replace("uil-eye-slash", "uil-eye");
            }else{
                input.type= "password";
                toggle.classList.replace("uil-eye", "uil-eye-slash");
            }
        })
    </script>
</body>

</html>