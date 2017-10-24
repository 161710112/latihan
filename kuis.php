<DOCTYPE html>
<html>
<head>
<title></title>
<body>
<?php
 
 class biodata {
 	public $nama;
 	public $tempatlahir;
 	public $kelas;
 	public $status;

 	public function __construct($name,$Tempat_lahir,$Kelas,$Status)
 	{
 		$this->nama   		= $name;
 		$this->tempatlahir  = $Tempat_lahir;
 		$this->kelas  		= $Kelas ;
 		$this->status  		= $Status;
 	}
 	public function set_nama($nama)
 	{
 		$this->nama = $nama;
 	}
 	public function get_nama()
 	{
 		return $this->nama;
 	}
    public function set_tempatlahir($tempatlahir)
 	{
 		$this->tempatlahir = $tempatlahir;
 	}	
 	public function get_tempatlahir()
 	{
 		return $this->tempatlahir;
 	}
 	public function set_kelas($kelas)
 	{
 		$this->kelas = $kelas;
 	}	
 	public function get_kelas()
 	{
 		return $this->kelas;
 	}
 	public function set_status($status)
 	{
 		$this->status = $status;
 	}	
 	public function get_status()
 	{
 		return $this->status;
 	}


 }
 


?>
	
</body>
</head>
</html>