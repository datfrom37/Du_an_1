<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../public/css/dangnhap.css/">

    </head>

    <body>
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <!-- đăng ký; -->
                <form action="" method="POST">
                    <h1>Create Account</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span>or use your email for registration</span>
                    <input type="text" name="ten_kh" placeholder="Name" />
                    <input type="email" name="email" placeholder="Email" />
                    <input type="password" name="password" placeholder="Password" />
                    <input type="password" name="checkpass" placeholder="Password" />
                    <div>
                        <button name="dangky">Sign Up</button>
                    </div>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <!-- đăng nhập -->
                <form action="" method="POST">
                    <h1>Sign in</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span>or use your account</span>
                    <input type="email" name="email" placeholder="Email"/>
                    <input type="password" name="password" placeholder="Password"  />
                    <a href="#">Forgot your password?</a>
                    <button name="dangnhap">Sign In</button>

                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome Back!</h1>
                        <p>To keep connected with us please login with your personal info</p>
                        <button class="ghost" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Hello, Friend!</h1>
                        <p>Enter your personal details and start journey with us</p>
                        <button class="ghost" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </body>       
    <script>
        const $signUpButton = document.getElementById("signUp");
        const $signInButton = document.getElementById("signIn");
        const $container = document.getElementById("container");

        $signUpButton.addEventListener("click", () => {
            $container.classList.add("right-panel-active");
        });

        $signInButton.addEventListener("click", () => {
            $container.classList.remove("right-panel-active");
        });
    </script>

</html>