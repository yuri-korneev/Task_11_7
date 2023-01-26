<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Практика 11_7</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>

<?php

$array1 = array(0, 0, 1, 1);
$array2 = array(0, 1, 0, 1);


?>
    <table>
        <caption>Таблица истинности PHP</caption>
        <thead>      
            <tr>
                <th>A</th>                
                <th>B</th>
                <th>!A</th>
                <th>A||B</th>
                <th>A&&B</th>
                <th>A xor B</th>             
            </tr>
        </thead>
        <tbody>



    <?php


foreach ($array1 as $key => $value1):
    ?>

        <tr>
    
    <?php echo "<td>" . $value1 . "</td>"; ?>

    <?php echo "<td>" . $array2[$key] . "</td>"; ?>

    <?php echo "<td>" . (integer) !$value1 . "</td>"; ?>

    <?php echo "<td>" . (integer) ($value1 || $array2[$key]) . "</td>"; ?>

    <?php echo "<td>" . (integer) ($value1 && $array2[$key]) . "</td>"; ?>

    <?php echo "<td>" . (integer) ($value1 xor $array2[$key]) . "</td>"; ?>
    
    <?php endforeach; ?>
    
        </tr> 


        </tbody>
    </table>

<?php

$array1 = array(true, false, 1, 0, -1, "1", null, "PHP");
$array2 = array(true, false, 1, 0, -1, "1", null, "PHP");
    
?>
    <table>
        <caption>Гибкое сравнение в PHP</caption>
        <thead>
            <tr>
                <th>&nbsp;</th>
                <th>true</th>
                <th>false</th>
                <th>1</th>
                <th>0</th>
                <th>-1</th>
                <th>"1"</th>
                <th>null</th>
                <th>"PHP"</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>true</th>

<?php

foreach ($array1 as $value1) {

        if ($value1 == $array2[0]) {
            echo '<td id="label">' . "true" . "</td>";
        } else {
            echo "<td>" . "false" . "</td>";
        }
    }

?>
            <tr>
                <th>false</th>
<?php

foreach ($array1 as $value1) {

        if ($value1 == $array2[1]) {
            echo '<td id="label">' . "true" . "</td>";
        } else {
            echo "<td>" . "false" . "</td>";
        }
    }

?>
           
                
            </tr>
            <tr>
                <th>1</th>
<?php

foreach ($array1 as $value1) {

        if ($value1 == $array2[2]) {
            echo '<td id="label">' . "true" . "</td>";
        } else {
            echo "<td>" . "false" . "</td>";
        }
    }

?>
            </tr>
            <tr>
                <th>0</th>
<?php

foreach ($array1 as $value1) {

        if ($value1 == $array2[3]) {
            echo '<td id="label">' . "true" . "</td>";
        } else {
            echo "<td>" . "false" . "</td>";
        }
    }

?>
              
            </tr>
            <tr>
                <th>-1</th>
<?php

foreach ($array1 as $value1) {

        if ($value1 == $array2[4]) {
            echo '<td id="label">' . "true" . "</td>";
        } else {
            echo "<td>" . "false" . "</td>";
        }
    }

?>
            <tr>
                <th>"1"</th>
<?php

foreach ($array1 as $value1) {

        if ($value1 == $array2[5]) {
            echo '<td id="label">' . "true" . "</td>";
        } else {
            echo "<td>" . "false" . "</td>";
        }
    }

?>
            </tr>
            <tr>
                <th>null</th>
<?php

foreach ($array1 as $value1) {

        if ($value1 == $array2[6]) {
            echo '<td id="label">' . "true" . "</td>";
        } else {
            echo "<td>" . "false" . "</td>";
        }
    }

?>
            </tr>
            <tr>
                <th>"PHP"</th>
                <?php

foreach ($array1 as $value1) {

        if ($value1 == $array2[7]) {
            echo '<td id="label">' . "true" . "</td>";
        } else {
            echo "<td>" . "false" . "</td>";
        }
    }

?>
            </tr>
        </tbody>
    </table>

    <table>
        <caption>Жесткое сравнение в PHP</caption>
        <thead>
            <tr>
                <th>&nbsp;</th>
                <th>true</th>
                <th>false</th>
                <th>1</th>
                <th>0</th>
                <th>-1</th>
                <th>"1"</th>
                <th>null</th>
                <th>"PHP"</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>true</th>

<?php

foreach ($array1 as $value1) {

        if ($value1 === $array2[0]) {
            echo '<td id="label">' . "true" . "</td>";
        } else {
            echo "<td>" . "false" . "</td>";
        }
    }

?>
            <tr>
                <th>false</th>
<?php

foreach ($array1 as $value1) {

        if ($value1 === $array2[1]) {
            echo '<td id="label">' . "true" . "</td>";
        } else {
            echo "<td>" . "false" . "</td>";
        }
    }

?>
           
                
            </tr>
            <tr>
                <th>1</th>
<?php

foreach ($array1 as $value1) {

        if ($value1 === $array2[2]) {
            echo '<td id="label">' . "true" . "</td>";
        } else {
            echo "<td>" . "false" . "</td>";
        }
    }

?>
            </tr>
            <tr>
                <th>0</th>
<?php

foreach ($array1 as $value1) {

        if ($value1 === $array2[3]) {
            echo '<td id="label">' . "true" . "</td>";
        } else {
            echo "<td>" . "false" . "</td>";
        }
    }

?>
              
            </tr>
            <tr>
                <th>-1</th>
<?php

foreach ($array1 as $value1) {

        if ($value1 === $array2[4]) {
            echo '<td id="label">' . "true" . "</td>";
        } else {
            echo "<td>" . "false" . "</td>";
        }
    }

?>
            <tr>
                <th>"1"</th>
<?php

foreach ($array1 as $value1) {

        if ($value1 === $array2[5]) {
            echo '<td id="label">' . "true" . "</td>";
        } else {
            echo "<td>" . "false" . "</td>";
        }
    }

?>
            </tr>
            <tr>
                <th>null</th>
<?php

foreach ($array1 as $value1) {

        if ($value1 === $array2[6]) {
            echo '<td id="label">' . "true" . "</td>";
        } else {
            echo "<td>" . "false" . "</td>";
        }
    }

?>
            </tr>
            <tr>
                <th>"PHP"</th>
                <?php

foreach ($array1 as $value1) {

        if ($value1 === $array2[7]) {
            echo '<td id="label">' . "true" . "</td>";
        } else {
            echo "<td>" . "false" . "</td>";
        }
    }

?>
            </tr>
        </tbody>
    </table>

    <p><b>Выводы: </b></br>При анализе гибкого и жесткого сравнения одинаковых значений видно, что результат <span style="color: blueviolet;">"true"</span> (выделен фиолетовым цветом)
    совпадает только, когда и тип и значение являются одинаковыми. При гибком сравнении сначала происходит попытка приведения типов,
    а потом уже само сравнение, это может привести к непредсказуемому поведению, соответстенно, гибкое сравнение можно использовать, 
    когда есть уверенность, что типы будут одинаковыми, либо сначала выполнить приведение типов, а потом уже сравнивать, во всех остальных случаях
    предпочтительнее использовать строгое сравнение.</p>

</body>
</html>