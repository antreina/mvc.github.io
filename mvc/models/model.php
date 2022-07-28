<?php

class EnlacesPaginas{

	public function enlacesPaginasModel($enlacesModel){

		if($enlacesModel == "Ecuador" || 
		   $enlacesModel == "Costa" || 
		   $enlacesModel == "Sierra" ||
		   $enlacesModel == "Oriente" ||  
		   $enlacesModel == "Galapagos")
		   
		 
		  {

			$module = "views/modules/".$enlacesModel.".php";

		}

		else if($enlacesModel == "index" ){

			$module = "views/modules/Ecuador.php";

		}

		else{

			$module = "views/modules/Ecuador.php";

		}

		return $module;

	}

}


?>