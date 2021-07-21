<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use Dompdf\Dompdf;

class PdfControl extends Controller
{

    public function index() 
	{
        return view('pdfgen');
    }

    function htmlToPDF(){
        $dompdf = new \Dompdf\Dompdf(); 
        $dompdf->loadHtml(view('pdfgen'));
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream();
    }

}