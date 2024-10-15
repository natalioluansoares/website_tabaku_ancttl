<?php

namespace App\Controllers;

use App\Models\ModelDiretor;
use App\Models\ModelTotalSaldoAncttl;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Dompdf\Dompdf;

class Printtotalsaldo extends BaseController
{
    protected $helpers = ['antltl'];
    protected $totalsaldo;
    protected $diretor;
    public function __construct()
    {
        $this->totalsaldo = new ModelTotalSaldoAncttl();
        $this->diretor      = new ModelDiretor();
    }
    public function index(): string
    {
        $saldo = $this->totalsaldo->orderBy('id_saldo', 'DESC')->findAll();
        $data = [
            'title' => 'Administrasaun No Finansas ANCT-TL',
            'show' => 'Download Total Saldo ANCT-TL',
            'saldo' => $saldo
        ];

        return view('diresaun/laporandiresaun/totalsaldoancttlpdf/totalsaldoancttlpdf', $data);
    }

    public function saldoancttlpdf()
    {
        $dompdf = new Dompdf();
        $saldo = $this->totalsaldo->orderBy('id_saldo', 'DESC')->findAll();
        $diretor = $this->diretor->akundiretor();
        $data = [
            'title' => 'Project ANCT-TL',
            'saldo' =>$saldo,
            'diretor' => $diretor,
        ];
        $view = view('diresaun/laporandiresaun/totalsaldoancttlpdf/pdfsaldoancttl', $data);
        $dompdf->loadHtml($view);

        // (Optional) Setup the paper size and orientation (potrait, landscape)
        $dompdf->setPaper('A4', 'potrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream((helperDiresaun()->naran_kompleto_diresaun), array("Attachment" =>false));
    }

    public function saldoancttlexcel()
    {
        $saldoancttl = $this->totalsaldo->orderBy('id_saldo', 'DESC')->findAll();
        $diretor['diretor'] = $this->diretor->akundiretor();
        $spreadsheet = new Spreadsheet();
        $activeWorksheet = $spreadsheet->getActiveSheet();
        $activeWorksheet->setCellValue('A1', 'No');
        $activeWorksheet->setCellValue('B1', 'Instituisaun');
        $activeWorksheet->setCellValue('C1', 'Total Saldo ANCT-TL');
        
        $column = 2;
        $saldo = 0;
        $total = 0;
        foreach($saldoancttl as $donator){
            $activeWorksheet->setCellValue('A'.$column, ($column-1));
            $activeWorksheet->setCellValue('B'.$column, $donator->instituisaun);
            $activeWorksheet->setCellValue('C'.$column, '$'.number_format($donator->total_saldo, 2));
            $column++;
            
            $total = $donator->total_saldo;
        }
        $activeWorksheet->setCellValue('A'.$column, ($column-1));
        $activeWorksheet->setCellValue('B'.$column, 'TOTAL SALDO DONATOR');
        $activeWorksheet->setCellValue('C'.$column, '$'.number_format($total, 2));
        $column++;
            
            
        

        $activeWorksheet->getStyle('A1:C1')->getFont()->setBold(true);
        $spreadsheet->getActiveSheet()->getStyle('A1:C1')
        ->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_WHITE);
       $spreadsheet->getActiveSheet()->getStyle('A1:C1')
        ->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID);
        $spreadsheet->getActiveSheet()->getStyle('A1:C1')
        ->getFill()->getStartColor()->setARGB('FFFF0000');
        $styleArray = [
            'borders' => [
            'allBorders' => [
                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['argb' => 'FF000000'],
                ],
            ],
        ];

        $spreadsheet->getActiveSheet()->getStyle('A1:C1'.($column-1))->applyFromArray($styleArray);
        
        $activeWorksheet->getColumnDimension('A')->setAutoSize(true);
        $activeWorksheet->getColumnDimension('B')->setAutoSize(true);
        $activeWorksheet->getColumnDimension('C')->setAutoSize(true);

        $writer = new Xlsx($spreadsheet);
        header('Content-Type: application\vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=saldo_anct_tl.xlsx');
        header('Cache-Control: max-age=0');
        $writer->save('hello world.xlsx');
        $writer->save('php://output');
        exit();
    
    }
}
