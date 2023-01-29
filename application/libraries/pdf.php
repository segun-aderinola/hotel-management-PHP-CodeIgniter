<?php 
if (! defined('BASEPATH')) exit('No direct script access allowed');
	
require_once APPPATH.'/libraries/dompdf/autoload.inc.php';

	use Dompdf\Dompdf as Dompdf;
	use Dompdf\Options;

class Pdf extends Dompdf {

	function __construct(){
		parent ::__construct();
	}

}

// defined('BASEPATH') OR exit('No direct script access allowed');

//   require_once APPPATH.'/libraries/dompdf/autoload.inc.php';

// class Dompdf
// { 
//   public function __construct()
//   {
   
//     $pdf = new Dompdf\DOMPDF(); 
//     $CI = &get_instance();
//     $CI->dompdf=$pdf; 
//   } 
// }
?>