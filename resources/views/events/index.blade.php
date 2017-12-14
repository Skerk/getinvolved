<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Demo</title>
    </head>
    <body>
        
<h1>Events</h1>



 <!--  Liste de mes evenements  -->
<ul>
<?php foreach($events as $event): ?>
<li><?php $event ?></li>

<?php endforeach; ?>
</ul>




    </body>
</html>
