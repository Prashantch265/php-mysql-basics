<style>
  tr td{
      border: 1px solid;
      border-collapse: collapse;
  }
</style>
<?php
$array = array(array("Name", "Age", "Gender"),
array("R", 21, "M"),
array("A", 20, "F"));
?>
<table style="border:1px solid; border-collapse: collapse">
<?php
for($i = 0 ; $i<3; $i++){
    echo "<tr>";
    for($j = 0; $j<3; $j++){
        ?>
        <td> <?php echo $array[$i][$j]; ?></td>
    <?php }
}?>
</table>