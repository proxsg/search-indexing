<?php namespace ProximitySg\SearchIndexing;

class SearchIndexing {
	public $conn;

	public function connect($catalog_name)
	{
		$this->conn = new \COM("ADODB.Connection") or die("Cannot start ADO"); 
		$this->conn->Open("Provider=MSIDXS.1;Integrated Security .='';Data Source=".$catalog_name);
		return $this->conn;
	}

	public static function createUrl($path)
	{
		return str_replace(\Config::get('search-indexing::index_dir_path'), \Config::get('search-indexing::domain'), $path);
	}

	public static function getTitle($path)
	{
		$title = "";
		if (preg_match('/<title>(.+)<\/title>/',file_get_contents($path),$matches) && isset($matches[1] ))
	    {
		   $title = $matches[1];    	
	    }

	    return $title;
	}	
}