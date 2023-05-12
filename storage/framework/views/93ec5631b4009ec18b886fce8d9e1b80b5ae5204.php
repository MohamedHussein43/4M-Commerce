<main id="main" class="main-site left-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">home</a></li>
                <li class="item-link"><span>login</span></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                <div class=" main-content-area">
                    <div class="wrap-login-item ">
                        <div class="login-form form-item form-stl">
                            <form name="frm-login" action="<?php echo e(route('login-user')); ?>" method="post">
                                <?php if(Session::has('success')): ?>
                                    <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
                                <?php endif; ?>
                                <?php if(Session::has('fail')): ?>
                                    <div class="alert alert-danger"><?php echo e(Session::get('fail')); ?></div>
                                <?php endif; ?>
                                <?php echo csrf_field(); ?>
                                <fieldset class="wrap-title">
                                    <h3 class="form-title">Log in to your account</h3>
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="validationDefaultUsername" class="form-label">Email Address:</label>
                                    <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required placeholder="Type your email address">
                                    <span class="text-danger"><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="validationDefault03" class="form-label">Password:</label>
                                    <input type="password" name="password" class="form-control" id="validationDefault03" required placeholder="Password">
                                    <span class="text-danger"><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                </fieldset>
                                <input type="submit" class="btn btn-submit">
                            </form>
                        </div>
                    </div>
                </div><!--end main products area-->
            </div>
        </div><!--end row-->

    </div><!--end container-->

</main>
<?php /**PATH C:\wamp64\www\E-commerce4\resources\views/FrontEnd/login-component.blade.php ENDPATH**/ ?>