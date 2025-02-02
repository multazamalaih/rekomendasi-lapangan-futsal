<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Halo</h1>
    <?php foreach($user as $data) : ?>
        <p>Username: <?php echo $data['nama'];?>, Email: <?php echo $data['email'];?></p>
    <?php endforeach; ?>
</body>
</html>