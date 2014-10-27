<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $months = array('Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Decembre');
        if (date('m')== 1) {
            echo 'Janvier';  
        }
        elseif (date('m')== 2) {
            echo 'Fevrier';
        }
        elseif (date('m')== 3) {
            echo 'Mars';
        }
        elseif (date('m')== 4) {
            echo 'Avril';
        }
        elseif (date('m')== 5) {
            echo 'Mai';
        }
        elseif (date('m')== 6) {
            echo 'Juin';
        }
        elseif (date('m')== 7) {
            echo 'Juillet';
        }
        elseif (date('m')== 8) {
            echo 'Août';
        }
        elseif (date('m')== 9) {
            echo 'Septembre';
        }
        elseif (date('m')== 10) {
            echo $months[9];
        }
         elseif (date('m')== 11) {
            echo 'Novembre';
        }
         elseif (date('m')== 12) {
            echo 'Decembre';
        }
 else {
            echo 'Veuillez saisir un mois valable';
 }
        ?>
    </body>
</html>
