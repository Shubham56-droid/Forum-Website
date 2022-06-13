<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Page</title>

    <!----------- Bootstrap CSS ---------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!------------ Icon Script ----------->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-------------  Custom CSS ---------->
    <link rel="stylesheet" href="./css/signup.css">

</head>
<body id="main">
<div id="removeeffect" class="removeeffect">
</div>
<div class="toggle-mode">
    <div class="modebar" id="tmode">
        <div class="ball" id="iconval"><ion-icon name="moon-outline"></ion-icon></div>
    </div>
</div>


<ion-icon class="des1" name="cog-outline"></ion-icon>
<ion-icon class="des2" name="cog-outline"></ion-icon>
<ion-icon class="des3" name="cog-outline"></ion-icon>

<div class="form-container" id="formContent">
    <div class="logo">
        Secure<span style="color:rgb(193, 58, 255)">Note</span>
    </div>
    <div class="input-details">
        <p>SignIn to create Account</p>

        <form action="/loginsystem/login.php" method="post" autocomplete="off">

            <div class="inp_content" id="inp_con">

                <div class="email_inp">
                    <ion-icon id="person" name="person"></ion-icon>
                    <input type="email" name="email" id="email" placeholder="Email"/>
                </div>

                <div class="pass_inp">
                    <ion-icon  id="lock" name="lock-closed"></ion-icon>
                    <input type="password" name="pass" id="pass" placeholder="Password"/>
                </div>

                <div class="con_pass_inp">
                    <ion-icon  id="conlock" name="lock-closed"></ion-icon>
                    <input type="password" name="conpass" id="conpass" placeholder="Confirm Password"/>
                </div>

                <div class="phone_inp">
                    <ion-icon id="phone" name="call"></ion-icon>
                    <input type="text" name="number" id="number" placeholder="Phone"/>
                </div>

                <div class="location_inp">
                    <ion-icon  id="locate" name="location"></ion-icon>
                    <input type="text" name="address" id="address" placeholder="Address"/>
                </div>

                <div class="btn_inp">
                    <button id="btnsub" type="submit">Create</button>
                </div>

                <div class="signin">
                    Already have an account ?<a href="./login.php"> Sign In</a>
                </div>
            </div>
        </form>
    </div>
</div>
    


<!----------- Bootstrap JS --------->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

<!-----------Custom JS ------------->
<script src="./js/signup.js"></script>
</body>
</html>