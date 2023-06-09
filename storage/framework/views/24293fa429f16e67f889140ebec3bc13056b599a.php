<style>

    nav svg{
        height: 20px;
    }
    nav .hidden{
        display: block !important;
    }

</style>
<div class="container" style="padding: 30px 0;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            All Products
                        </div>
                        <div class="col-md-6">
                            <a href="<?php echo e(route('admin.addproduct')); ?>" class="btn btn-success pull-right">Add New</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body board">
                    <?php if(Session::has('message')): ?>
                        <div class="alert alert-success" role="alert"><?php echo e(Session::get('message')); ?></div>
                    <?php endif; ?>
                    <?php if(Session::has('danger')): ?>
                        <div class="alert alert-danger" role="alert"><?php echo e(Session::get('danger')); ?></div>
                    <?php endif; ?>
                        <table >
                            <thead>
                            <tr>
                                <td>ID</td>
                                <td>Image</td>
                                <td>Name</td>
                                <td>Stock</td>
                                <td>Price</td>
                                <td>Category</td>
                                <td>Date</td>
                                <td>Action</td>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($product->id); ?></td>
                                    <td><img src="<?php echo e(asset('assets/images/products')); ?>/<?php echo e($product->image); ?>" width="60"/></td>
                                    <td><?php echo e($product->name); ?></td>
                                    <td><?php echo e($product->stock_status); ?></td>
                                    <td><?php echo e($product->regular_price); ?></td>
                                    <td><?php echo e($product->category->name); ?></td>
                                    <td><?php echo e($product->created_at); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('admin.editproduct',['product_slug'=>$product->slug])); ?>" ><i class="fa fa-edit fa-2x"> </i></a>

                                        <a href=<?php echo e("/deleteProduct/".$product['id']); ?>><i class="fa fa-times fa-2x  text-danger"></i></a>

                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <?php echo e($products->links()); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\wamp64\www\E-commerce4\resources\views/livewire/admin/admin-product-component.blade.php ENDPATH**/ ?>