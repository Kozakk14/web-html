<?php
include "header.php";
?>

<?php
$cols=$_GET['c']??2;
$rows=$_GET['l']??3;
echo'<table class="table table-bordered">';
for($i=0;$i<$rows;$i++){
    $style='';
    if($i % 2 == 0){
        $style='font-weight: bold;';
    }
    echo "<tr style='$style'>";
    for($j=0;$j<$cols;$i++){
        $color='';
    }
}
?>


<?php
include "footer.php";
?>