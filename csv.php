<?php
class csv extends mysqli
{ private $state_csv=false;
   public function _construct()
	{
	parent::_construct("localhost","root","","csv");
	if($this->connect_error)
	{
	echo "failed to connect:".$this->connect_errorr;
	}
	}
	public function import($file)
	{
		$file=fopen($file,'r');
		while($row=fgetcsv($file))
		{
			/*echo "<pre>";
			print_r($row);
			echo "</pre>";
			//var_dump($row);*/
			  $value="'".implode("','",$row)."'";
			 $q="INSERT INTO FILE(first,last,age) VALUES (".$value.")";
			$this->query($q);
			/*if($r==1)
			{
				$this->state_csv=true;
			}
			else
			{
				$this->state_csv=false;
				echo $this->error;
			}*/
		}
		
	}
}
?>