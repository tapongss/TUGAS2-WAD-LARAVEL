<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if($errors->any()): ?>
        <div style="color: red;">
            <?php echo e($errors->first()); ?>

        </div>
    <?php endif; ?>
    <form method="POST" action="<?php echo e(url('/login')); ?>">
        <?php echo csrf_field(); ?>
        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\tavi-reyhan\resources\views/auth/login.blade.php ENDPATH**/ ?>