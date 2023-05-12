<!--main area-->
<main id="main" class="main-site left-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">home</a></li>
                <li class="item-link"><span>Digital & Electronics</span></li>
            </ul>
        </div>
        <div class="row">

            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

                <div class="banner-shop">
                    <a href="#" class="banner-link">
                        <figure> <img src="<?php echo e(asset('assets/images/shop-banner.jpg')); ?>" alt=""></figure>
                    </a>
                </div>

                <div class="wrap-shop-control">

                    <h1 class="shop-title">Digital & Electronics</h1>

                    </div>

                </div><!--end wrap shop control-->

            </div><!--end sitebar-->
        <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

                <div class="row">
                    <?php if($products->count()>0): ?>
                    <ul class="product-list grid-products equal-container">
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                                <div class="product product-style-3 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="<?php echo e(route('product.details',['slug'=>$product->slug])); ?>" title="<?php echo e($product->name); ?>">
                                            <figure><img src="<?php echo e(asset('assets/images/products')); ?>/<?php echo e($product->image); ?>" alt="<?php echo e($product->name); ?>"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="<?php echo e(route('product.details',['slug'=>$product->slug])); ?>" class="product-name"><span><?php echo e($product->name); ?></span></a>
                                        <div class="wrap-price"><span class="product-price">$<?php echo e($product->regular_price); ?></span></div>
                                        <a href="#" class="btn add-to-cart" wire:click.prevent="store(<?php echo e($product->id); ?>,'<?php echo e($product->name); ?>',<?php echo e($product->regular_price); ?>)">Add To Cart</a>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <?php else: ?>
                        <p style="padding-top: 30px;">No Products</p>
                    <?php endif; ?>

                </div>

                        <?php echo e($products->links()); ?>

        </div>

        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
            <div class="widget mercado-widget categories-widget">
                <h2 class="widget-title">All Categories</h2>
                <div class="widget-content">
                    <ul class="list-category">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="category-item">
                                <a href="<?php echo e(route('product.category',['category_slug'=>$category->slug])); ?>" class="cate-link"><?php echo e($category->name); ?></a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div><!-- Categories widget-->


            <div class="widget mercado-widget widget-product">
                <h2 class="widget-title">Popular Products</h2>
                <div class="widget-content">
                    <ul class="products">
                        <?php $__currentLoopData = $popular_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="product-item">
                                <div class="product product-widget-style">
                                    <div class="thumbnnail">
                                        <a href="<?php echo e(route('product.details',['slug'=>$p_product->slug])); ?>" title="<?php echo e($p_product->name); ?>">
                                            <figure><img src="<?php echo e(asset('assets/images/products')); ?>/<?php echo e($p_product->image); ?>" alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="<?php echo e(route('product.details',['slug'=>$p_product->slug])); ?>" class="product-name"><span><?php echo e($p_product->name); ?>...</span></a>
                                        <div class="wrap-price"><span class="product-price">$<?php echo e($p_product->regular_price); ?></span></div>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div><!-- brand widget-->

        </div><!--end row-->

    </div><!--end container-->

</main>
<?php /**PATH C:\wamp64\www\E-commerce4\resources\views/livewire/search-component.blade.php ENDPATH**/ ?>