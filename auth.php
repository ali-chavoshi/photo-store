<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/fancybox.min.css">
    <title>image store project</title>
    <script>var baseUrl = "http://localhost/photo-store/"; </script>
</head>
<body>

<div class="container">
    <div class="header"><h1>Welcome To Our Image Store</h1></div>
    <div class="body">
        <div class="col-md-4 col-sm-12 sidebar">

            <!---------------------Shopping Cart-------------------->
            <a class="btn btn-primary btn-cart-shopping">
                <i class="bi bi-cart3"></i>cart
                <span class="count-cart-shopping">1</span>
            </a>

            <!----------------------MemberShip Form----------------->
            <div class="login">
                <form class="row g-3 login-form">
                    <div class="form-floating mb-3 login-email">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating login-password">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="col-auto ">
                        <button type="submit" class="btn btn-primary mb-3 confirm-button">Login</button>
                    </div>
                    <div class="forgot">
                        <a href="#" class="forgot-pass">Forgot Password</a>
                        <a href="#" class="forgot-join">Join</a>
                    </div>
                </form>
            </div>

            <!-----------------------category-------------------------->
            <div class="category">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        طبیعت
                        <span class="badge bg-primary rounded-pill">14</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        بازیگران-سینما
                        <span class="badge bg-primary rounded-pill">2</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        فوتبالیست ها
                        <span class="badge bg-primary rounded-pill">1</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        زمستان
                        <span class="badge bg-primary rounded-pill">3</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        هنری
                        <span class="badge bg-primary rounded-pill">5</span>
                    </li>
                </ul>
            </div>
        </div>

        <!------------------------auth part-------------------------->
        <div class="col-md-8 col-sm-12 auth">
            <!--------------------Login auth------------------------->
           <div class="login-auth">
               <h2 class="auth-h2">ورود به سایت</h2>

               <form class="row g-3 login-form-auth">
                   <!--email-->
                   <div class="col-auto">
                       <label for="inputPassword2" class="visually-hidden">Email</label>
                       <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                   </div>
                   <!--pass-->
                   <div class="col-auto">
                       <label for="inputPassword2" class="visually-hidden">Password</label>
                       <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                   </div>
                   <!--button-->
                   <div class="col-auto">
                       <button type="submit" class="btn btn-primary mb-3">Confirm</button>
               </form>
           </div>
            <!----------------------forgot password------------------>
           <div class="forgot-pass-auth">
               <h2 class="auth-h2">بازیابی رمز عبور</h2>

               <form class="row g-3 forgot-form-auth">
                   <div class="col-auto">
                       <label for="inputPassword2" class="visually-hidden">Email</label>
                       <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                   </div>
                   <!--button-->
                   <div class="col-auto">
                       <button type="submit" class="btn btn-primary mb-3">Forgot Password</button>
               </form>
           </div>
            <!-----------------------join to site---------------------->
           <div class="join-auth">
               <h2 class="auth-h2">عضویت در سایت</h2>
               <form class="row g-3 join-form-auth">
                   <p>اطلاعات شما</p>
                   <div class="col-auto">
                       <label for="inputPassword2" class="visually-hidden">Name</label>
                       <input type="text" class="form-control" id="inputName" placeholder="Name">
                   </div>
                   <div class="col-auto">
                       <label for="inputPassword2" class="visually-hidden">Phone</label>
                       <input type="text" class="form-control" id="inputNumber" placeholder="Phone">
                   </div>
                   <p>اطلاعات ورود به سایت</p>
                   <div class="col-auto">
                       <label for="inputEmail" class="visually-hidden">Email</label>
                       <input type="email" class="form-control" id="inputNumber" placeholder="Email">
                   </div>
                   <div class="col-auto">
                       <label for="inputPassword2" class="visually-hidden">Password</label>
                       <input type="password" class="form-control" id="inputNumber" placeholder="Password">
                   </div>
                   <div class="col-auto">
                       <label for="inputPassword2" class="visually-hidden">Password</label>
                       <input type="password" class="form-control" id="inputNumber" placeholder="Password Again">
                   </div>
                   <!--button-->
                   <div class="col-auto">
                       <button type="submit" class="btn btn-primary mb-3">Join Us</button>
               </form>




               </form>

           </div>

        </div>
    </div>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/fancybox.min.js"></script>
</body>
</html>
