<?php
/**
 * Created by PhpStorm.
 * User: anna.karutina
 * Date: 15.03.2017
 * Time: 13:08
 */
// võtame konfiguratsiooni kasutusele
require_once 'conf.php';
// pealehe sisu
echo '<h1>Veebiprogrammeerimise esileht</h1>';
// valmistame peatemplate objekti
$main_tmpl = new template(TMPL_DIR.'main.html');
// kontrollime antud objekti sisu
echo '<pre>';
print_r($main_tmpl);
echo '</pre>';
?>