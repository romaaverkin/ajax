<?php

switch ($_REQUEST['action']) {
    case 'instance1':
        echo 'Задача завершилась успешно.';
        break;
    case 'instance2':
        echo 'Задача завершилась успешно. Параметры из запроса: author = ' . $_POST['author'] . ', novel= ' . $_POST['novel'] . ".";
        break;
    case 'instance3':
        echo "$('.instance3').append('Задача завершилась успешно - сервер вернул код JavaScript');";
        break;
    case 'instance4':
        $aRes = array('student' => 'Ivanov', 'age' => '24');

        require_once('Services_JSON.php');
        $oJson = new Services_JSON();
        echo $oJson->encode($aRes);
        break;
}

?>