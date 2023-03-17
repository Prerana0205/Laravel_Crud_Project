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
                Total Category <span class="px-1 rounded-md bg-indigo-500 text-white"><?php echo e(count($category)); ?></span>
            </h2>
        </div>
     <?php $__env->endSlot(); ?>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-10 bg-white shadow-md text-gray-700">
        <div class="flex justify-between py-8">
            <div>
                <a href="<?php echo e(route('dashboard')); ?>" class="font-normal text-xl text-gray-800 leading-tight">
                    <?php echo e(__('Dashboard >')); ?>

                </a>
                <a class="font-normal text-xl text-gray-800 leading-tight">
                    <?php echo e(__('Category')); ?>

                </a>
            </div>
            <div>
                <a href="<?php echo e(route('add.category')); ?>" class="bg-indigo-500 px-3 py-2 rounded-md text-white hover:bg-indigo-600 focus:ring focus:ring-indigo-300 ..."><i class="fa fa-plus"></i></a>
                <a id="menuBtn" class="relative cursor-pointer bg-gray-300 px-3 py-2 rounded-md text-gray-700 focus:ring focus:ring-indigo-300 ..."><i class="fa fa-align-center"></i></a>
                <div id="trashDropdown" class="bg-white p-2 shadow-xl absolute border mt-5 hidden flex flex-col rounded">
                    <a href="<?php echo e(url('/category/trash/list/')); ?>" class="p-2 text-sm hover:bg-indigo-200 sm:text-none"><i class="fa fa-list"><span class="pl-2">Trash List</span></i></a>
                    <a href="" class="p-2 text-sm hover:bg-indigo-200 sm:text-none"><i class="fa fa-trash-alt"><span class="pl-2">Trash All</span></i></a>
                    <a href="" class="p-2 text-sm hover:bg-indigo-200 sm:text-none"><i class="fa fa-recycle"><span class="pl-2">Restore All</span></i></a>
                </div>
            </div>
        </div>
        <?php if(session('status')): ?>
            <span class="text-green-700 block rounded-md mb-4 bg-green-300 w-full py-3 px-5"><?php echo e(session('status')); ?></span>
        <?php endif; ?>
        <div class="bg-white overflow-hidden sm:rounded-lg">
            <table class="w-full border text-left">
                <thead>
                    <tr class="border-t-2 border-b-2 bg-indigo-100 border-indigo-500 ...">
                        <th class="p-3 sm:p-2">#</th>
                        <th class="p-3 sm:p-2">Name</th>
                        <th class="p-3 sm:p-2">Slug</th>
                        <th class="p-3 sm:p-2">Author</th>
                        <th class="p-3 sm:p-2">Created At</th>
                        <th class="p-3 sm:p-2">Updated At</th>
                        <th class="p-3 sm:p-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="border-y border-indigo-500 ...">
                        <td  class="p-3"><?php echo e($category->firstItem()+$loop->index); ?></td>
                        <td  class="p-3"><?php echo e($data->category_name); ?></td>
                        <td  class="p-3"><?php echo e($data->slug); ?></td>
                        <td  class="p-3"><?php echo e($data->user->name); ?></td>
                        <td  class="p-3">
                            <?php if($data->created_at == NULL): ?>
                                <span class="text-red-700"></span>
                            <?php else: ?>
                                <?php echo e(Carbon\Carbon::parse($data->created_at)->diffForHumans()); ?>

                            <?php endif; ?>
                        </td>
                        <td  class="p-3">
                            <?php if($data->updated_at == NULL): ?>
                                <span class="text-red-700">Data not set</span>
                            <?php else: ?>
                                <?php echo e(Carbon\Carbon::parse($data->updated_at)->diffForHumans()); ?>

                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="<?php echo e(url('/edit/category/'.$data->id,$data->slug)); ?>" class="bg-blue-600 py-1 px-2 text-white rounded-md hover:bg-blue-700 focus:ring focus:ring-blue-300"><i class="fa fa-wrench"></i></a>
                            <a href="<?php echo e(url('/delete/category/'.$data->id,$data->slug)); ?>" class="bg-red-600 py-1 px-2 text-white rounded-md hover:bg-red-700 focus:ring focus:ring-red-300"><i class="fa fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                </tbody>
                <tfoot>
                
                </tfoot>
            </table>
        </div>
            <div class="block justify-between mx-auto py-6">
                <?php echo e($category->links()); ?>

            </div>
    </div>

    <script>
        window.addEventListener('DOMContentLoaded', () => {
            const menuBtn = document.querySelector("#menuBtn");
            const dropdown = document.querySelector("#trashDropdown");
            menuBtn.addEventListener('click', () => {
                dropdown.classList.toggle('hidden');
                dropdown.classList.toggle('');
            })
        })
    </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\laravel-crud-operation-master\resources\views/backend/category/index.blade.php ENDPATH**/ ?>