<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <?php echo e(__('Category')); ?>

            </h2>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Total Category <span class="px-1 rounded-md bg-red-600"></span>
            </h2>
        </div>
     <?php $__env->endSlot(); ?>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white mt-10 pb-3 text-gray-700">
        <div class="flex justify-between py-8">
            <div>
                <a href="<?php echo e(route('dashboard')); ?>" class="font-normal text-xl text-gray-800 leading-tight">
                    <?php echo e(__('Dashboard >')); ?>

                </a>
                <a href="<?php echo e(route('all.category')); ?>" class="font-normal text-xl text-gray-800 leading-tight">
                    <?php echo e(__('Category >')); ?>

                </a>
                <a href="<?php echo e(route('all.category')); ?>" class="font-normal text-xl text-gray-800 leading-tight">
                    <?php echo e(__('Add')); ?>

                </a>
            </div>
            <div>
                <a href="<?php echo e(route('all.category')); ?>" class="bg-indigo-500 px-2 py-2 rounded-md text-white hover:bg-indigo-600 focus:ring focus:ring-indigo-300 ...">List</a>
            </div>
        </div>
        <div class="flex justify-center">
            
            <form action="<?php echo e(route('store.category')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <!-- <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.validation-errors','data' => ['class' => 'mb-4']]); ?>
<?php $component->withName('jet-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?> -->
                <?php $__errorArgs = ['category_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-red-700"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <div>
                    <label for="name">Name</label>
                    <input type="text" name="category_name" id="name" class="w-full py-2 border-gray-400 focus:outline-none focus:ring focus:ring-violet-300" placeholder="Category Name...">
                </div>
                <div class="mt-5">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="30" rows="3" class="w-full border-gray-400 focus:outline-none focus:ring focus:ring-violet-300" placeholder="Description..."></textarea>
                </div>
                <button name="submit" class="bg-indigo-500 px-4 py-2 rounded-md text-white focus:outline-none focus:ring focus:ring-violet-300 ...">Summit</button>
            </form>
        </div>
    </div>
            
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\laravel-crud-operation-master\resources\views/backend/category/add.blade.php ENDPATH**/ ?>