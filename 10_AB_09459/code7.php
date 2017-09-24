<?php
class smartphone {
	protected static function beli_smartphone(){
		return "Beli smartphone baru";
	}
}
class smartphone_dualsim extends smartphone{
	public static function beli_smartphone_dualsim(){
		return "Beli smartphone dual sim baru";
	}
	public static function beli_semua(){
//lengkapi baris kode berikut ini
		return parent::beli_smartphone();
	}
}
echo smartphone_dualsim::beli_semua();
echo"<br />";
echo smartphone_dualsim::beli_smartphone_dualsim();
?>