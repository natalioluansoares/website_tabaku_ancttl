<?php

namespace App\Controllers;

use App\Models\ModelAkunAncttl;
use App\Models\ModelDiretor;
use App\Models\ModelSalarioDiresaunAncttl;
use App\Models\ModelTotalSaldoAncttl;
use Dompdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class printsalarioancttl extends BaseController
{
    protected $salario;
    protected $diresaun;
    protected $diretor;
    protected $total;
    protected $db;
    protected $helpers = ['antltl'];
    public function __construct()
    {
        $this->salario = new ModelSalarioDiresaunAncttl();
        $this->diresaun = new ModelAkunAncttl();
        $this->diretor = new ModelDiretor();
        $this->total = new ModelTotalSaldoAncttl();
        $this->db = \Config\Database::connect();
    }
    public function index()
    {
        $data = [
            'title' => 'Sistema Administrasaun',
            'show' => 'Print Salario ANCT-TL File PDF',
            'show1' => 'Print Salario ANCT-TL File EXCEL',
        ];
        return view('diresaun/saldosai/salariosaldosai/detailsalarioancttl',$data);
    }
    public function salariopdf()
    {
        $salario  = $this->salario->salario();
        $data = [
            'title' => 'Salario Diresaun',
            'show' => 'Download Salario Diresaun ANCT-TL PDF',
            'salario' => $salario,
        ];
        return view('diresaun/saldosai/salariosaldosai/printsalariosaldosaipdf',$data);
    }
    public function salarioexcel()
    {
        $salario  = $this->salario->salario();
        $data = [
            'title' => 'Salario Diresaun',
            'show' => 'Download Salario Diresaun ANCT-TL EXCEL',
            'salario' => $salario,
        ];
        return view('diresaun/saldosai/salariosaldosai/printsalariosaldosaiexcel',$data);
    }

    public function cetakpdf()
    {
        $dompdf = new Dompdf();
        $salario  = $this->salario->downloadsalario();
        $diretor = $this->diretor->akundiretor();
        $data = [
            'title' => 'Project ANCT-TL',
            'salario' =>$salario,
            'diretor' => $diretor,
        ];
        $view = view('diresaun/laporandiresaun/pdfsalarioancttl/pdfsalarioancttl', $data);
        $dompdf->loadHtml($view);

        // (Optional) Setup the paper size and orientation (potrait, landscape)
        $dompdf->setPaper('A4', 'potrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream((helperDiresaun()->naran_kompleto_diresaun), array("Attachment" =>false));

    }
    public function filterpdf()
    {
        $dompdf = new Dompdf();
        $salario  = $this->salario->salario();
        $diretor = $this->diretor->akundiretor();
        $data = [
            'title' => 'Project ANCT-TL',
            'salario' =>$salario,
            'diretor' => $diretor,
        ];
        $view = view('diresaun/laporandiresaun/pdfsalarioancttl/pdfsalarioancttl', $data);
        $dompdf->loadHtml($view);

        // (Optional) Setup the paper size and orientation (potrait, landscape)
        $dompdf->setPaper('A4', 'potrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream((helperDiresaun()->naran_kompleto_diresaun), array("Attachment" =>false));

    }

}
