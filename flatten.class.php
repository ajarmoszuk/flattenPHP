<?php
/**
** flatten.class.php
** A class to flattify or "flat" a multi dimensional JSON array.
** @author Alex Jarmoszuk
**
**/


class Flatten {
	//Set Variables
	var $fileLocation;
	var $newFileLocation;
	
	/**
	** function __construct()
	** Constructs the class so that it can be run directly via new Flatten(filelocation, newlocation).
	**/

	function __construct($fileLocation, $newFileLocation) {
		$this->fileLocation = $fileLocation;
		$this->newFileLocation = $newFileLocation;
	}

	/**
	** function run()
	** Recieves the file contents and parses them to a flat JSON file.
	**/

	public function run() {
		$array = $this->readFile($this->fileLocation);
		$convertedArray = json_decode($array);

		$nonFlatArray = (object) array('Flatten' => array());
		$flatArray = array_walk_recursive($convertedArray, create_function('&$a, $b, &$c', '$c->Flatten[] = $a;'), $nonFlatArray);
		$newFlatArray = $nonFlatArray->Flatten;

		$this->saveFile($this->newFileLocation, $newFlatArray);
		return $newFlatArray;
	}

	/**
	** function readFile($fileLocation)
	** Reads the array information from the file and parses it to the run() function.
	**/

	private function readFile($fileLocation) {
		$file = fopen($fileLocation, "r") or die ("Error: Unable to open file!");
		$readData = fread($file, filesize($fileLocation));
		fclose($file);
		return $readData;
	}

	/**
	** function saveFile($newFileLocation)
	** Exports the new flattened array into a new file location.
	**/

	private function saveFile($newFileLocation, $fileContents) {
		file_put_contents($newFileLocation, json_encode($fileContents));
	}
}