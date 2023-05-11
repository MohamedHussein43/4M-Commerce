<div>
<main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">home</a></li>
                <li class="item-link"><span>Cart</span></li>
            </ul>
        </div>
        <div class=" main-content-area">

            <?php if(Cart::count()>0): ?>
                <div class="wrap-iten-in-cart">
                    <?php if(Session::has('success_message')): ?>
                        <div class="alert alert-success">
                            <strong>Success</strong> <?php echo e(Session::get('success_message')); ?>


                        </div>
                    <?php endif; ?>
                    <?php if(Cart::count()>0): ?>
                    <h3 class="box-title">Products Name</h3>
                    <ul class="products-cart">
                        <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="pr-cart-item">
                            <div class="product-image">
                                <figure><img src="<?php echo e(asset('assets/images/products')); ?>/<?php echo e($item->model->image); ?>" alt="<?php echo e($item->model->name); ?>"></figure>
                            </div>
                            <div class="product-name">
                                <a class="link-to-product" href="<?php echo e(route('product.details',['slug'=>$item->model->slug])); ?>"><?php echo e($item->model->name); ?></a>
                            </div>
                            <div class="price-field produtc-price"><p class="price">$<?php echo e($item->model->regular_price); ?></p></div>
                            <div class="quantity">
                                <div class="quantity-input">
                                    <input type="text" name="product-quatity" value="<?php echo e($item->qty); ?>" data-max="120" pattern="[0-9]*" >
                                    <a class="btn btn-increase" href="#" wire:click.prevent="increaseQuantity('<?php echo e($item->rowId); ?>')"></a>
                                    <a class="btn btn-reduce" href="#" wire:click.prevent="decreaseQuantity('<?php echo e($item->rowId); ?>')"></a>
                                </div>
                            </div>
                            <div class="price-field sub-total"><p class="price">$<?php echo e($item->subtotal); ?></p></div>
                            <div class="delete">
                                <a href="#" wire:click.prevent="destroy('<?php echo e($item->rowId); ?>')" class="btn btn-delete" title="">
                                    <span>Delete from your cart</span>
                                    <i class="fa fa-times-circle" aria-hidden="true"></i>
                                </a>
                            </div>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <?php else: ?>
                    <p>No item in Cart</p>
                    <?php endif; ?>
                </div>

                <div class="summary">
                    <div class="order-summary">
                        <h4 class="title-box">Order Summary</h4>
                        <p class="summary-info"><span class="title">Subtotal</span><b class="index">$<?php echo e(Cart::subtotal()); ?></b></p>
                        <p class="summary-info"><span class="title">Tax</span><b class="index">$<?php echo e(Cart::tax()); ?></b></p>
                        <p class="summary-info"><span class="title">Shipping</span><b class="index">Free Shipping</b></p>
                        <p class="summary-info total-info "><span class="title">Total</span><b class="index">$<?php echo e(Cart::total()); ?></b></p>
                    </div>
                    <div class="checkout-info">
                        <a class="btn btn-checkout" href="#" wire:click.prevent="checkout()">Check out</a>
                        <a class="link-to-shop" href="/shop">Continue Shopping<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="update-clear">
                        <a class="btn btn-clear" href="#" wire:click.prevent="destroyAll()">Clear Shopping Cart</a>
                    </div>
                </div>
                <div class="wrap-show-advance-info-box style-1 box-in-site">
                    <h3 class="title-box">Most Viewed Products</h3>
                    <div class="wrap-products">
                        <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >

                            <?php $__currentLoopData = $latest_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="<?php echo e(route('product.details',['slug'=>$l_product->slug])); ?>" title="<?php echo e($l_product->name); ?>">
                                            <figure><img src="<?php echo e(asset('assets/images/products')); ?>/<?php echo e($l_product->image); ?>" width="800" height="800" alt="<?php echo e($l_product->name); ?>"></figure>
                                        </a>
                                        <div class="group-flash">
                                            <span class="flash-item new-label">new</span>
                                        </div>
                                        <div class="wrap-btn">
                                            <a href="<?php echo e(route('product.details',['slug'=>$l_product->slug])); ?>" class="function-link">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span><?php echo e($l_product->name); ?></span></a>
                                        <div class="wrap-price"><span class="product-price">$<?php echo e($l_product->regular_price); ?></span></div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div><!--End wrap-products-->
                </div>
            <?php else: ?>
                <div class="text-center" style="padding: 30px 0;">
                    <h1>Your Cart is empty!</h1>
                    <p>Add Items Now</p>
                    <a href="/shop" class="btn btn-success">Shop Now</a>
                </div>
            <?php endif; ?>




        </div><!--end main content area-->
    </div><!--end container-->

</main>
</div>
<?php /**PATH C:\wamp64\www\E-commerce4\resources\views/livewire/cart-component.blade.php ENDPATH**/ ?>