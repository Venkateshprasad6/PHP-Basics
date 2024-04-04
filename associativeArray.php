<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Website</title>
</head>
<body>
    <?php
    $languages=[
        [
            'language' => 'Tamil',
            'place' => 'Tamil Nadu',
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'language' => 'Telugu',
            'place' => 'AP',
            'purchaseUrl' => 'http://example.com'
        ],


    ];
    ?>
   
    <ul>
        <li>
    <?php foreach($languages as $language): ?>
        <a href="<?= $language['purchaseUrl']?>">
        <?= $language['place']?>
    </a>
    </li>
    <?php endforeach; ?>

   
   
    </ul>
</body>
</html>