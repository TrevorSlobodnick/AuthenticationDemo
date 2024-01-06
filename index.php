<?php $title = 'Welcome'; include(__DIR__ . "/includes/template-top.php");?>

<div id="auth-container" class="grid-y ama">
    <h1 class="text-center">Welcome</h1>
    <p class="text-center">This is an authentication app that showcases how to handle registering/logging in users</p>
    <div id="auth-btn-container" class="grid-y align-left f1">
        <div class="text-center">
            <a id="login-btn" class="button round primary m0" href="login">Login</a>
        </div>
        <div id="or-sep" class="grid-x grid-margin-x align-center align-middle w100 hauto hm0">
            <div class="f1"><hr class="amr" /></div>
            <div class="hpadding"><p class="secondary m0">OR</p></div>
            <div class="f1"><hr class="aml" /></div>
        </div>
        <div class="text-center">
            <a id="register-btn" class="button round primary m0" href="register">Register</a>
        </div>
    </div>
</div>

<?php include(__DIR__ . "/includes/template-bottom.php");?>