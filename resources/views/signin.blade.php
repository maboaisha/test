<title>Sign in</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Sign in Form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="/signed" method="post">
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                            <h3 class="text-center text-info">Sign in</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-info">E-mail:</label><br>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="text-info">Phone-No:</label><br>
                                <input type="text" name="phone" id="phone" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me </span><span><input
                                            id="remember-me" name="remember-me" type="checkbox"
                                            ></span></label><br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Sign in">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="{{route('login')}}" class="text-info">Login Here</a><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>