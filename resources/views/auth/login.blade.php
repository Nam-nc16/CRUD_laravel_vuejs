<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="{{asset('auth/style.css')}}">
</head>
<body>
    <div class="background-wrap">
        <div class="background"></div>
    </div>
    <form id="accesspanel" action="/login" method="post">
        @csrf
        <h1 id="litheader">Login Admin</h1>
        <div class="inset">
            <p>
                <label for="email"></label>
                <input type="text" name="username" id="email" placeholder="Email address" />
            </p>
            <p>
                <label for="password"></label>
                <input type="password" name="password" id="password" placeholder="Password" />
            </p>
            <div style="text-align: center;">
                <div class="checkboxouter">
                    <input type="checkbox" name="rememberme" id="remember" value="Remember">
                    <label class="checkbox"></label>
                </div>
                <label for="remember">Remember</label>
            </div>
            <input class="loginLoginValue" type="hidden" name="service" value="login"/>
        </div>
        <p class="p-container">
            <input type="submit" name="Login" id="go" value="Login">
        </p>
    </form>
<script src="{{asset('auth/style.js')}}" type="text/javascript"></script>
</body>

</html>
