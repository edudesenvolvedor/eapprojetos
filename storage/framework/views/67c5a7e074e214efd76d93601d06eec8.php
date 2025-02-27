<?php $__env->startSection("title", "Eduardo Pacheco | Portfólio"); ?>

<?php $__env->startSection("content"); ?>

    <main>

        <?php echo $__env->make("partials.homepage.hero", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <?php echo $__env->make("partials.homepage.clients", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <?php echo $__env->make("partials.homepage.info", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <?php echo $__env->make("partials.homepage.services", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <?php echo $__env->make("partials.homepage.call_to_action", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <?php echo $__env->make("partials.homepage.portfolio", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <?php echo $__env->make("partials.homepage.request_quote", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <?php echo $__env->make("partials.homepage.testimonials", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <?php echo $__env->make("partials.homepage.blog", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <?php echo $__env->make("partials.homepage.contact", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.main", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\epach\PhpstormProjects\eapprojetos\resources\views/homepage.blade.php ENDPATH**/ ?>