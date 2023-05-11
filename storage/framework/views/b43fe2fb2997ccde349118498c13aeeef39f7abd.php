<main id="main" class="main-site left-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="\" class="link">home</a></li>
                <li class="item-link"><span>Register</span></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                <div class=" main-content-area">
                    <div class="wrap-login-item ">
                        <div class="register-form form-item ">
                            <form class="form-stl" action="#" name="frm-login" method="get" >
                                <fieldset class="wrap-title">
                                    <h3 class="form-title">Create an account</h3>
                                    <h4 class="form-subtitle">Personal infomation</h4>
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="validationDefault01" class="form-label">Name*</label>
                                    <input type="text" class="form-control" id="validationDefault01" required name="reg-fname" placeholder="First name">
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="validationDefault02" class="form-label">Name*</label>
                                    <input type="text" class="form-control" id="validationDefault02" required name="reg-lname" placeholder="Last name">
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="validationDefaultUsername" class="form-label">Email Address*</label>
                                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                                    <input type="email" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required name="reg-email" placeholder="Email address">
                                </fieldset>
                                <fieldset class="wrap-title">
                                    <h3 class="form-title">Login Information</h3>
                                </fieldset>
                                <fieldset class="wrap-input item-width-in-half left-item ">
                                    <label or="validationDefault03" class="form-label">Password *</label>
                                    <input type="password" class="form-control" id="validationDefault03" required name="reg-pass" placeholder="Password">

                                </fieldset>

                                <fieldset class="wrap-input item-width-in-half ">
                                    <label for="validation" class="form-label">Confirm Password *</label>
                                    <input type="password" class="form-control" id="validationDefault04" required name="reg-cfpass" placeholder="Confirm Password">
                                </fieldset>
                                <div class="registrationFormAlert" style="color:#f10000;" id="CheckPasswordMatch"></div>
                                <input class="btn btn-primary" id="btnSubmit" type="submit" onclick="return checkPasswordMatch()" value="Register" name="register">
                            </form>
                        </div>
                    </div>
                </div><!--end main products area-->
            </div>
        </div><!--end row-->

    </div><!--end container-->

</main>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/additional-methods.min.js"></script>
<script>
    function checkPasswordMatch() {
        var password = $("#validationDefault03").val();
        var confirmPassword = $("#validationDefault04").val();
        if (password !== confirmPassword){
            $("#CheckPasswordMatch").html("Passwords does not match!");
            return false;}
        else {
            return true;
        }
    }
    $(document).ready(function () {
        $("#txtConfirmPassword").keyup(checkPasswordMatch);
    });
</script>
<?php /**PATH C:\wamp64\www\E-commerce4\resources\views/livewire/register-component.blade.php ENDPATH**/ ?>