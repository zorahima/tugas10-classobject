<?php
// buat abstract class
abstract class smartphone{
	public static function hidupkan_komputer(){
		echo "Hidupkan Komputer";
	}
// buat abstract method
	abstract public function lihat_spec();
	abstract public function lihat_processor();
	abstract public function lihat_harddisk();
	abstract public function lihat_pemilik();
}
class tablet extends smartphone{
// .. isi class tablet
	public function lihat_spec()
	{
		return "Lihat Spec tablet ...";

	}
	public function lihat_processor()
	{
		return "Lihat procesos tablet ...";

	}
	public function lihat_harddisk()
	{
		return "Lihat hardisk tablet ...";

	}
	public function lihat_pemilik()
	{
		return "Lihat pemilik tablet ...";

	}
}


$tablet = new tablet();
echo $tablet->lihat_spec();
echo"<br />";
echo $tablet->lihat_processor();
echo"<br />";
echo $tablet->lihat_harddisk();
echo"<br />";
echo $tablet->lihat_pemilik();
echo"<br />";

?>