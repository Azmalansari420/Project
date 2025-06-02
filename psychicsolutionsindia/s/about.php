<?php
file_put_contents("click.txt", "clicked\n", FILE_APPEND);
header("Location: index.html");
exit;
?>
