<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1> Reserve Courses</h1>
    <p>From: <?php echo e($data['email']); ?></p>
    <p>Name: <?php echo e($data['name']); ?></p>
    <p>Mobile: <?php echo e($data['mobile']); ?></p>
    <p>Course: <?php echo e($data['select']); ?></p>
    <p>Notes: <?php echo e($data['notes']); ?></p>
</body>
</html>