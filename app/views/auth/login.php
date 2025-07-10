<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/css/import.css">
    <script src="/js/jquery-3.7.1.js"></script>
    <!-- Toastify CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css" />

    <!-- Toastify JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>


    <!-- Your login.js (make sure it's loaded last) -->
    <script src="/path/to/login.js"></script>

</head>

<body class="bg-light">
    <main class="wrapper">
        <section class="content">
            <div class="container-fluid d-flex align-items-center justify-content-center vh-100">
                <div class="w-100 col-md-4 m-auto">
                    <div class="card bg-navy">
                        <form id="loginSubmitForm">
                            <div class="card-body">
                                <figure>
                                    <img src="/assets/images/logo/cloche-logo-no-bg.png" class="img-fluid" width="75" alt="">
                                </figure>

                                <div class="form-group">
                                    <!-- <label for="exampleInputEmail1">Email address</label> -->
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required />
                                </div>
                                <div class="form-group">
                                    <!-- <label for="exampleInputPassword1">Password</label> -->
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                                </div>
                                <div class="form-group mb-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                                        <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-warning w-100 mt-3">LOG IN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="/js/modules/auth/login.js"></script>
</body>

</html>