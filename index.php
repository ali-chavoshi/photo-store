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
    <div class="header">Welcome To Our Image Store</div>
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
                        ??????????
                        <span class="badge bg-primary rounded-pill">14</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        ????????????????-??????????
                        <span class="badge bg-primary rounded-pill">2</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        ?????????????????? ????
                        <span class="badge bg-primary rounded-pill">1</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        ????????????
                        <span class="badge bg-primary rounded-pill">3</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        ????????
                        <span class="badge bg-primary rounded-pill">5</span>
                    </li>
                </ul>
            </div>
        </div>

        <!------------------------images-------------------------->
        <div class="col-md-8 col-sm-12 images">
            <ul class="imageUl">
                <li class="imageLi"><a href="images/500x500.jpeg" class="fancybox" rel="group" title="?????? ??????">
                        <img src="images/demo-image.jpg" alt="" width="150" height="121">
                    </a></li>
                <li class="imageLi"><a href="images/500x500.jpeg" class="fancybox" rel="group" title="?????? ??????">
                        <img src="images/demo-image.jpg" alt="" width="150" height="121">
                    </a></li>
                <li class="imageLi"><a href="images/500x500.jpeg" class="fancybox" rel="group" title="?????? ??????">
                        <img src="images/demo-image.jpg" alt="" width="150" height="121">
                    </a></li>
                <li class="imageLi"><a href="images/500x500.jpeg" class="fancybox" rel="group" title="?????? ??????">
                        <img src="images/demo-image.jpg" alt="" width="150" height="121">
                    </a></li>
                <li class="imageLi"><a href="images/500x500.jpeg" class="fancybox" rel="group" title="?????? ??????">
                        <img src="images/demo-image.jpg" alt="" width="150" height="121">
                    </a></li>
                <li class="imageLi"><a href="images/500x500.jpeg" class="fancybox" rel="group" title="?????? ??????">
                        <img src="images/demo-image.jpg" alt="" width="150" height="121">
                    </a></li>
                <li class="imageLi"><a href="images/500x500.jpeg" class="fancybox" rel="group" title="?????? ??????">
                        <img src="images/demo-image.jpg" alt="" width="150" height="121">
                    </a></li>
                <li class="imageLi"><a href="images/500x500.jpeg" class="fancybox" rel="group" title="?????? ??????">
                        <img src="images/demo-image.jpg" alt="" width="150" height="121">
                    </a></li>
                <li class="imageLi"><a href="images/500x500.jpeg" class="fancybox" rel="group" title="?????? ??????">
                        <img src="images/demo-image.jpg" alt="" width="150" height="121">
                    </a></li>
                <li class="imageLi"><a href="images/500x500.jpeg" class="fancybox" rel="group" title="?????? ??????">
                        <img src="images/demo-image.jpg" alt="" width="150" height="121">
                    </a></li>
            </ul>

        </div>
    </div>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/fancybox.min.js"></script>
<script>
    $(document).ready(function(){
        $(".fancybox").fancybox({
            afterLoad:function (){
                var tArr =this.title.split('|');
                this.title = '<a class="addBtn btn1" href="'+baseUrl+'?add2cart="'+tArr+[0]+'"></a>'+'<span class="btn1">'+tArr+'</span>';

            },
            headers : {
                title : {
                    type:'inside'
                }
            }
        })
    })
</script>
</body>
</html>
