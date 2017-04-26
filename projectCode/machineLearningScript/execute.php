<!DOCTYPE html>

<head>
  <title>Machine Learn to March Madness Glory</title>
</head>
<?php 
$command = "python mm.py";
echo '<br>';

$model = $_POST['model'];
$command = $command." ".$model;
foreach ($_POST['select'] as $selectedOption){
    $command=$command." ".$selectedOption;
}
echo $command;
echo '<br>';

$output = shell_exec($command);
echo "<pre>$output</pre>";

echo '<a href="select.php">See the new prediction picture</a>';
?>
