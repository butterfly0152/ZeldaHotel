<?php
 class Persoane {
	 public $nume;
	 public $prenume;
	 public $cnp;
	 public $data_sosirii;
	 public $data_plecarii;
	 public $numar_persoane;
	 public $tip_camera;
	  
	 function __construct($nume, $prenume, $cnp, $data_sosirii, $data_plecarii, $numar_persoane, $tip_camera){
		 $this -> nume = $nume;
		 $this -> prenume = $prenume;
		 $this -> cnp = $cnp;
		 $this -> data_sosirii = $data_sosirii;
		 $this -> data_plecarii = $data_plecarii;
		 $this -> numar_persoane = $numar_persoane;
		 $this -> tip_camera = $tip_camera;
	 }
	 function calculNrZile(){
		 $dataSosire = new DateTime($this -> data_sosirii);
		 $dataPlecare = new DateTime($this -> data_plecarii);
         $diff = date_diff($dataSosire, $dataPlecare);
		 return $diff->format("%d");
		 }
	 function calculCamere(){
		 return $this -> numar_persoane / $this -> tip_camera;
		 }	 
 }
?>