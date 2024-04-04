<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Websites</title>
</head>
<body>
<?php
    $books=[
        [
            'name' => 'War and Peace',
            'author' => 'Leo Tolstoy',
            'realese date' => '1980',
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'Sachchi Ramayan',
            'author' => 'Periyar',
            'realese date' => '1944',
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'Periyar on Islam',
            'author' => 'Periyar',
            'realese date' => '2004',
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'Buddhism',
            'author' => 'Periyar',
            'realese date' => '2005',
            'purchaseUrl' => 'http://example.com'
        ],


    ];
    function filteredByAuthor($books){
       $filteredByAuthor = [];
      foreach( $books as $book ){
      if( $book['author'] ==='Periyar' ){
    }
}
return $filteredByAuthor;
    }


    ?>
    <ul>
    <?php foreach( $books as $book );  ?>
    <?php if($book['author'] ==='Periyar');?>
<li>
<a href="<?= $book['purchaseUrl']?>">
<?= $book['name']?> (<?= $book['realese date']?>) - By <?= $book['author']?>

</a>
</li>
<php endif; ?>
    
    <php endforeach; ?>
</ul>
    
</body>
</html>