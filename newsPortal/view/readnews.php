<?php
ob_start();
?>

<br>

<?php
ViewNews::ReadNews($n);

echo "<br>";
viewComments::CommentsForm();

$content = ob_get_clean();
include_once 'view/layout.php';

?>