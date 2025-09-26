<?php
include "Html.php";
$table = new mano\kodas\Table();
$table->title = "My table";
$table->numRows = 5;

$row = new mano\kodas\Row();
$row->numCells = 3;
?>

<html>
<body>

<?php $table->message(); ?>
<?php $row->message(); ?>

</body>
</html>
