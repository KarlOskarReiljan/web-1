<?php

/**
 * Created by PhpStorm.
 * User: anna.karutina
 * Date: 22.03.2017
 * Time: 12:11
 */
class template
{// klassi algus
	// template klassi omadused - muutujad
	var $file = ''; // html malli faili nimi
	var $content = false; // html malli faili sisu
	var $vars = array(); // html vaade sisu - reaalsed väärtused
	// klassi tegevused - meetodid - funktsioonid

	// html malli faili lugemine
	function loadFile(){
		$f = $this->file; // lokaalne asendus
		// kontrollime mallide kausta olemasolu
		if(!is_dir(TMPL_DIR)){
			echo 'Kataloogi '.TMPL_DIR.' ei ole leitud<br />';
			exit;
		}
		// kui fail on olemas ja lugemiseks sobiv
		if(file_exists($f) and is_file($f) and is_readable($f)){
			// loeme failist malli sisu
			$this->readFile($f);
		}
		// kui sisu ei olnud võimalik lugeda
		if($this->content === false){
			echo 'Ei suutnud lugeda faili '.$this->file.'<br />';
		}
	}// loadFile

	// loeme sisu html malli failist
	function readFile($f){
		$this->content = file_get_contents($f);
	}// readFile
}// klassi lõpp
?>