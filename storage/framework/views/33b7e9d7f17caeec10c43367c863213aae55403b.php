
<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <?php echo e(__('Dashboard')); ?>

            </h2>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Total Users <span class="px-1 rounded-md bg-indigo-500 text-white"><?php echo e(count($users)); ?></span>
            </h2>
        </div>
     <?php $__env->endSlot(); ?>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pb-3 mt-10 bg-white shadow-md text-gray-700">
        <div class="flex justify-between py-8">
            <div>
                <a href="<?php echo e(route('dashboard')); ?>" class="font-normal text-xl text-gray-800 leading-tight">
                    <?php echo e(__('Dashboard >')); ?>

                </a>
                <a class="font-normal text-xl text-gray-800 leading-tight">
                    <?php echo e(__('Users')); ?>

                </a>
            </div>
            <div>
                <a href="<?php echo e(route('register')); ?>" class="bg-indigo-500 px-2 py-2 rounded-md text-white ...">Add User</a>
            </div>
        </div>
        <div class="bg-white overflow-hidden sm:rounded-lg">
            <table class="w-full border text-left">
                <thead>
                    <tr class="border-t-2 border-b-2 bg-indigo-100 border-indigo-500 ...">
                        <th class="p-3 sm:p-2">#</th>
                        <th class="p-3 sm:p-2">Name</th>
                        <th class="p-3 sm:p-2">Email</th>
                        <th class="p-3 sm:p-2">Created At</th>
                        <th class="p-3 sm:p-2">Updated At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="border-y border-indigo-500 ...">
                        <td  class="p-3"><?php echo e($user->id); ?></td>
                        <td  class="p-3"><?php echo e($user->name); ?></td>
                        <td  class="p-3"><?php echo e($user->email); ?></td>
                        <td  class="p-3"><?php echo e(Carbon\Carbon::parse($user->created_at)->diffForHumans()); ?></td>
                        <td  class="p-3"><?php echo e(Carbon\Carbon::parse($user->updated_at)->diffForHumans()); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                </tbody>
            </table>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\laravel-crud-operation-master\resources\views/dashboard.blade.php ENDPATH**/ ?>