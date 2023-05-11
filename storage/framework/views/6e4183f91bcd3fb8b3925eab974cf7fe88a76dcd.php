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
                            All Categories
                        </div>
                        <div class="col-md-6">
                            <a href="<?php echo e(route('admin.addcategory')); ?>" class="btn btn-success pull-right">Add New</a>
                        </div>
                    </div>
                </div>
                    <div class="panel-body">
                        <?php if(Session::has('message')): ?>
                            <div class="alert alert-success" role="alert"><?php echo e(Session::get('message')); ?></div>
                        <?php endif; ?>
                        <?php if(Session::has('danger')): ?>
                            <div class="alert alert-danger" role="alert"><?php echo e(Session::get('danger')); ?></div>
                        <?php endif; ?>
                        <dir class="board">
                            <table width="100%">
                                <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>Category Name</td>
                                    <td>Slug</td>
                                    <td>Action</td>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($category->id); ?></td>
                                        <td><?php echo e($category->name); ?></td>
                                        <td><?php echo e($category->slug); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('admin.editcategory',['category_slug'=>$category->slug])); ?>" style="margin-left: 10px;"><i class="fa fa-edit fa-2x"> </i></a>
                                            <a href=<?php echo e("/deleteCategory/".$category['id']); ?>><i class="fa fa-times fa-2x  text-danger"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <?php echo e($categories->links()); ?>


                        </dir>
                    </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\wamp64\www\E-commerce4\resources\views/livewire/admin/admin-category-component.blade.php ENDPATH**/ ?>