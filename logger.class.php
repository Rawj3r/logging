<?php


// file logger
// I can use this for tracking errors in any PHP based system
// Nkosi RN

class Log
{
	private $fileName;
	private $data;

	/**
	* @desc File logger we create and simple text file, and write string data to it.
	* @param str $fileName
	* @param str $data
	*
	**/

	public function Write($fileName, $data)
	{
		// instantiate instance variables
		$this->fileName = $fileName;
		$this->data = $data;

		//check permission
		$this->CheckPerm();


		$handle = fopen($fileName,  'a+');


		fwrite($handle, "\r". $data);
		fclose($handle);
	}

	private function CheckPerm(){

		if (!is_writable($this->fileName)) {
			die("Change your permissions");
		}

	}

	private function CheckData(){
		if (strlen($this->data) < 1) {
			die("You have no readable data");
		}
	}

	private function CheckExist(){
		if (!file_exists($this->fileName)) {
			die("File does not exist");
		}
	}

	/**
	* @desc File logger we create and simple text file, and write string data to it.
	* @param str $fileName
	* @return str returns contents of the text file
	*
	**/

	public function Read($fileName)
	{
		$this->CheckExist();
		
		$this->fileName = $fileName;
		$handle = fopen($fileName, "r");
		return file_get_contents($fileName);

	}


}