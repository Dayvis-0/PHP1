<?php 

    $my_array = [1,2,3,4,5]; 
    $index = 0;
?>

<?= while ($index <= sizeof($my_array) - 1) : ?>
    <li></li>
<?= endwhile;?>

<style>

    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

</style>