
<?php
function theunique_names($array1, $array2) {

    $map = $result = array();
    
    foreach($array1 as $val) {
        $map[$val] = 1;
    }
    foreach($array2 as $val) {
        if(isset($map[$val])) {
            $map[$val] = 0;
        }else {
            $map[$val] = 0;
        }
    } 

    foreach($map as $val => $ok)  {
        $result[] = $val;
    }
        
    return $result;
}

$nameArray1 = ['Ava', 'Emma', 'Olivia'];
$nameArray2 = ['Olivia', 'Sophia', 'Emma'];

$unique_names = theunique_names($nameArray1, $nameArray2);

// foreach($unique_names as $names) {
//     echo $names;
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($unique_names as $names) { ?>
    <h1><?php echo $names; ?></h1>
    <?php } ?>
</body>
</html>