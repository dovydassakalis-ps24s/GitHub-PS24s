<?php
include "Html.php";
use mano\kodas as a;

$table = new a\Table();
$table->title = "My table";
$table->numRows = 5;

$row = new a\Row();
$row->numCells = 3;
?>

<html>
<body>

<?php $table->message(); ?>
<?php $row->message(); ?>

</body>
</html>
