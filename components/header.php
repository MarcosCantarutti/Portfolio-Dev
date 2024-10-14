<?php 

$nav = ['#' => 'Home', '#main' => 'About', '#contacts' => 'Contact'];

?>

<nav class="bg-gray-800 p-4">
    <ul class="flex gap-10 justify-end" id="#">
        <?php 
            foreach ($nav as $key => $value) {
               echo "<li><a href='$key' class='text-white hover:text-gray-300 transition-colors'>$value</a></li>";
            }
        ?>
    </ul>
</nav>

