<?php $title = 'Create An Account'; include(__DIR__ . "/includes/template-top.php");?>

<div id="auth-container" class="grid-y ama">
    <h1 class="">Sign Up</h1>
    <p class="m0">Already have an account? <a id="login-btn" class="m0 hover" href="../login">Sign In</a></p>
    <form id="auth-form">
        <div class="grid-y grid-y-padding">
            <div class="grid-x align-justify">
                <label for="firstname">First Name
                    <input type="text" name="firstname" id="firstname" placeholder="John" />
                </label>
                <label for="lastname">Last Name
                    <input type="text" name="lastname" id="lastname" placeholder="Doe" />
                </label>
            </div>
            <label for="email">Email
                <input type="email" name="email" id="email" placeholder="JohnDoe@example.com" />
            </label>
            <label for="password">Password
                <input type="password" name="password" id="password" placeholder="Password" />
            </label>
        </div>
    </form>
    <div id="auth-btn-container" class="grid-y align-left f1">
        <div class="text-center">
            <a id="login-btn" class="button primary round m0" href="">Create Account</a>
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