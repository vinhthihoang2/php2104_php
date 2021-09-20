<!-- <div class="row mt-5">
<div class="col text-center">
    <div class="block-27">
    <ul>
        <li><a href="#">&lt;</a></li>
        <li class="active"><span>1</span></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">&gt;</a></li>
    </ul>
    </div>
</div>
</div> -->

<?php if($paginator->hasPages()): ?>
<div class="row mt-5">
    <div class="col text-center">
        <div class="block-27">
            <ul>
                
                <?php if($paginator->onFirstPage()): ?>
                    <li class="disabled" aria-disabled="true">
                        <span aria-hidden="true">&lt;</span>
                    </li>
                <?php else: ?>
                    <li><a href="<?php echo e($paginator->previousPageUrl()); ?>">&lt;</a></li>
                <?php endif; ?>

                
                <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <?php if(is_string($element)): ?>
                        <li class="disabled" aria-disabled="true"><span><?php echo e($element); ?></span></li>
                    <?php endif; ?>

                    
                    <?php if(is_array($element)): ?>
                        <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($page == $paginator->currentPage()): ?>
                                <li class="active" aria-current="page"><span><?php echo e($page); ?></span></li>
                            <?php else: ?>
                                <li><a href="<?php echo e($url); ?>"><?php echo e($page); ?></a></li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                
                <?php if($paginator->hasMorePages()): ?>
                    <li>
                        <a href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next" aria-label="<?php echo app('translator')->get('pagination.next'); ?>">&rsaquo;</a>
                    </li>
                <?php else: ?>
                    <li class="disabled" aria-disabled="true" aria-label="<?php echo app('translator')->get('pagination.next'); ?>">
                        <span aria-hidden="true">&rsaquo;</span>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>
<?php endif; ?>
<?php /**PATH /home/hoang/php/Nguyen_Hoang/laravel-app/resources/views/partials/my-paginate.blade.php ENDPATH**/ ?>