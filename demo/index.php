<?php 

require_once '../vendor/autoload.php';

$validation = new \Jsnlib\Validation;

/*

若有帶入參數
\Jsnlib\Validation::input($data)
\Jsnlib\Validation::input($data, ['string_empty' => false])

若無帶入參數
\Jsnlib\Validation::no_input($data)
\Jsnlib\Validation::no_input($data, ['string_empty' => false])


*/



echo "<table border=1>";

foreach ([true, false, null, '', 0, 0.5, -1, 1, "0", "1", new \Jsnlib\Ao] as $a)
{
    echo "<tr>";
        echo "<td>";
            var_dump($a);
        echo "</td>";
        echo "<td>";
            echo gettype($a);
        echo "</td>";
        echo "<td>";
            if (\Jsnlib\Validation::input($a, ['string_empty' => false])) 
            {
                echo "有帶入參數";
            }
        echo "</td>";
        echo "<td>";
            if (\Jsnlib\Validation::no_input($a, ['string_empty' => false])) 
            {
                echo "沒有參數";
            }
        echo "</td>";
    echo "</tr>";
}
echo "</table>";