<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <?php echo e(__('Gallery')); ?>

            </h2>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Total Gallery <span class="px-1 rounded-md text-white bg-indigo-500"><?php echo e(count($gallery)); ?></span>
            </h2>
        </div>
     <?php $__env->endSlot(); ?>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white mt-10 pb-3 text-gray-700">
        <div class="flex justify-between py-8">
            <div>
                <a href="<?php echo e(route('dashboard')); ?>" class="font-normal text-xl text-gray-800 leading-tight">
                    <?php echo e(__('Dashboard >')); ?>

                </a>
                <a class="font-normal text-xl text-gray-800 leading-tight">
                    <?php echo e(__('Gallery >')); ?>

                </a>
            </div>
            <div>
                <a href="" class="bg-indigo-500 px-2 py-2 rounded-md text-white hover:bg-indigo-600 focus:ring focus:ring-indigo-300 ..."><i class="fa fa-list-ul"></i> List</a>
            </div>
        </div>
        <div class="flex gap-10">
            
            <div class="w-70 flex">
                <form action="<?php echo e(route('gallery.insert')); ?>" method="POST" class="w-3/1" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.validation-errors','data' => ['class' => 'mb-4 text-red-700']]); ?>
<?php $component->withName('jet-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-4 text-red-700']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <div class="my-4">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="block w-full mt-2 mb-3   focus:ring focus:ring-violet-300" placeholder="Gallery Title..."/>
                        <label for="file">Gallery Image</label>
                        <input type="file" name="image[]" id="file" class="block w-full mt-2 cursor-pointer file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100  focus:ring focus:ring-violet-300" multiple/>
                    </div>
                    <button name="submit" class="bg-indigo-500 px-4 py-2 rounded-md text-white hover:bg-indigo-600 focus:outline-none focus:ring focus:ring-violet-300 ...">Add Gallery</button>
                </form>
            </div>
            <div class="w-full text-center justify-center">
                <h1 class="text-2xl mb-5">Gallery Image</h1>
                <div class="flex grid grid-cols-4 gap-3">
                    <?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div><img src="<?php echo e(asset($image->image)); ?>" class="w-full height-auto" alt=""></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
            
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\laravel-crud-operation-master\resources\views/backend/gallery/index.blade.php ENDPATH**/ ?>