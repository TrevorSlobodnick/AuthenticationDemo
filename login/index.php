<?php $title = 'Login'; include(__DIR__ . "/includes/template-top.php");?>

<div id="auth-container" class="grid-y ama">
    <h1>Sign In</h1>
    <p class="m0">Need an account? <a id="register-btn" class="m0 hover" href="../register">Sign Up</a></p>
    <form id="auth-form">
        <div class="grid-y grid-y-padding">
            <label for="username">Username
                <input type="text" name="username" id="username" placeholder="Username" />
            </label>
            <label for="password">Password
                <input type="password" name="password" id="password" placeholder="Password" />
            </label>
        </div>
    </form>
    <div id="auth-btn-container" class="grid-y align-left f1">
        <div class="text-center">
            <a id="login-btn" class="button primary round m0" href="">Login</a>
        </div>
        <div id="or-sep" class="grid-x grid-margin-x align-center align-middle w100 hauto hm0">
            <div class="f1"><hr class="amr" /></div>
            <div class="hpadding"><p class="secondary m0">OR</p></div>
            <div class="f1"><hr class="aml" /></div>
        </div>
        <div class="text-center">
            <button class="m0 button outline round">Choose A Partner</button>
        </div>
    </div>
    <div class="text-center">
        <a class="hover" href="../">Back</a>
    </div>
</div>

<?php include(__DIR__ . "/includes/template-bottom.php");?>