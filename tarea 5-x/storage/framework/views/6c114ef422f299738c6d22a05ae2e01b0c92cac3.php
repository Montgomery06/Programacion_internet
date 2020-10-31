 <?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
	 <?php $__env->slot('header'); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Categories')); ?> 
        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
            	<table class="table table-striped table-bordered">
				  <thead class="thead-dark ">
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Name</th>
				      <th scope="col">Description</th>
				      <th scope="col">Created</th>
				      <th scope="col">Movies</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php if(isset($categories) && count($categories)>0): ?>
				  	<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				  	<tr>
				      <th scope="row">
				      	<?php echo e($category->id); ?>

				      </th>
				      <td> <?php echo e($category->name); ?> </td>
				      <td> <?php echo e($category->description); ?> </td>
				      <td> <?php echo e($category->created_at); ?> </td>
				      <td> <?php echo e(count($category->movie)); ?> </td>
				    </tr> 
				  	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				  	<?php endif; ?> 
				  </tbody>
				</table>

            </div>
        </div>
    </div>

 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> <?php /**PATH /Applications/MAMP/htdocs/Copia de blog/resources/views/categories/index.blade.php ENDPATH**/ ?>