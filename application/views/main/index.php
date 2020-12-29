<P>Главная страница</p>

<?php
foreach($news as $val):?>
    <h3><?echo $val['name'];?></h3>
    <p><?echo $val['text'];?></p>
    <hr>
<?php endforeach ?>
