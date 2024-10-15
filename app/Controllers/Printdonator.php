<?php

namespace App\Controllers;

use App\Models\ModelDiretor;
use App\Models\ModelSaldoDonatorAncttl;
use App\Models\ModelTotalSaldoAncttl;
use Dompdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Printdonator extends BaseController
{
    protected $helpers = ['antltl'];
    protected $saldodonator;
    protected $totalsaldo;
    protected $diretor;
    protected $db;
    public function __construct()
    {
        $this->saldodonator = new ModelSaldoDonatorAncttl();
        $this->totalsaldo   = new ModelTotalSaldoAncttl();
        $this->diretor      = new ModelDiretor();
        $this->db = \Config\Database::connect();
    }
    public function index(): string
    {
        $data = [
            'title' => 'Sistema Administrasaun',
            'show' => 'Print Saldo Donator PDF',
        ];
        return view('diresaun/administrasaun/saldodonator/printsaldodonator', $data);
    }
    public function pdf()
    {
        $donator = $this->saldodonator->saldodonator();
        $data = [
            'title'     => 'Sistema Administrasaun',
            'show'      => 'Print File PDF Saldo Donator',
            'donator'   => $donator
        ];
         if (null !== $this->request->getGet('filter-data')) {
            $filterdonator = $this->saldodonator->filterdonator();
            if ($filterdonator == null) {
                return redirect()->to(base_url('printsaldodonator/pdf'))->with('error', 'Data Nebe Mak Ita Boot Buka Laiha!.. Favor Bele Buka Fali Data Seluk');
            }
            $donator = $this->saldodonator->saldodonator();
             $data = [
                'title'     => 'Sistema Administrasaun',
                'show'      => 'Print File PDF Saldo Donator',
                'donator'   => $donator,
                'donator'   => $filterdonator,
            ];
        }
        return view('diresaun/laporandiresaun/pdfdonator/printsaldodonatorpdf', $data);
    }

    public function cetakpdf()
    {
        $dompdf = new Dompdf();
        $donator = $this->saldodonator->saldodonator();
        $diretor = $this->diretor->akundiretor();
        $data = [
            'title' => 'Project ANCT-TL',
            'donator' =>$donator,
            'diretor' => $diretor,
        ];
        $view = view('diresaun/laporandiresaun/pdfdonator/pdfdonator', $data);
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
        $diretor = $this->diretor->akundiretor();
        if (null !== $this->request->getGet('filter-data')) {
            $filterdonator = $this->saldodonator->filterdonator();
            if ($filterdonator == null) {
                return redirect()->to(base_url('printsaldodonator/pdf'))->with('error', 'Data Nebe Mak Ita Boot Buka Laiha!.. Favor Bele Buka Fali Data Seluk');
            }
        $data = [
            'title' => 'Relatorio Osan',
            'donator' =>$filterdonator,
            'diretor' => $diretor,
        ];
    }
        $view = view('diresaun/laporandiresaun/pdfdonator/pdfdonator', $data);
        $dompdf->loadHtml($view);

        // (Optional) Setup the paper size and orientation (potrait, landscape)
        $dompdf->setPaper('A4', 'potrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream((helperDiresaun()->naran_kompleto_diresaun), array("Attachment" =>false));
    
    }

    public function totalsaldo()
    {
        $saldo = $this->totalsaldo->orderBy('id_saldo', 'DESC')->findAll();
        $data = [
            'title' => 'Administrasaun No Finansas ANCT-TL',
            'show' => 'Total Saldo ANCT-TL',
            'saldo' => $saldo
        ];

        return view('diretor/administrasaun/saldotamaancttl/totalsaldoancttl', $data);
    }
    public function excel()
    {
        $donator = $this->saldodonator->saldodonator();
        $data = [
            'title'     => 'Sistema Administrasaun',
            'show'      => 'Print File EXCEL Saldo Donator',
            'donator'   => $donator
        ];
         if (null !== $this->request->getGet('filter-data')) {
            $filterdonator = $this->saldodonator->filterdonator();
            if ($filterdonator == null) {
                return redirect()->to(base_url('printsaldodonator/excel'))->with('error', 'Data Nebe Mak Ita Boot Buka Laiha!.. Favor Bele Buka Fali Data Seluk');
            }
            $donator = $this->saldodonator->saldodonator();
             $data = [
                'title'     => 'Sistema Administrasaun',
                'show'      => 'Print File EXCEL Saldo Donator',
                'donator'   => $donator,
                'donator'   => $filterdonator,
            ];
        }
        return view('diresaun/laporandiresaun/exceldonator/printsaldodonatorexcel', $data);
    }
    public function cetakexcel()
    {
        $donator = $this->saldodonator->saldodonator();
        $diretor['diretor'] = $this->diretor->akundiretor();
        $spreadsheet = new Spreadsheet();
        $activeWorksheet = $spreadsheet->getActiveSheet();
        $activeWorksheet->setCellValue('A1', 'No');
        $activeWorksheet->setCellValue('B1', 'Kode Osan');
        $activeWorksheet->setCellValue('C1', 'Instituisaun');
        $activeWorksheet->setCellValue('D1', 'Data Osan Tama');
        $activeWorksheet->setCellValue('E1', 'Horas Osan Tama');
        $activeWorksheet->setCellValue('F1', 'Saldo Apoia Donator');
        // $activeWorksheet->setCellValue('F1', 'Saldo Apoia Donator');
        
        
        $column = 2;
        $saldo = 0;
        $total = 0;
        foreach($donator as $donator){
            $activeWorksheet->setCellValue('A'.$column, ($column-1));
            $activeWorksheet->setCellValue('B'.$column, $donator->kode_osan);
            $activeWorksheet->setCellValue('C'.$column, $donator->instituisaun);
            $activeWorksheet->setCellValue('D'.$column, $donator->data_osan_tama_donator);
            $activeWorksheet->setCellValue('E'.$column, $donator->horas_osan_tama_donator);
            $activeWorksheet->setCellValue('F'.$column, '$'.number_format($donator->saldo_tama_donator, 2));
            $activeWorksheet->setCellValue('G'.$column, '$'.number_format($donator->total_saldo, 2));
            $column++;
            
            $saldo += $donator->saldo_tama_donator;
            $total = $donator->total_saldo;
        }
        $activeWorksheet->setCellValue('A'.$column, ($column-1));
        $activeWorksheet->setCellValue('B'.$column, 'TOTAL SALDO DONATOR');
        $activeWorksheet->setCellValue('F'.$column, '$'.number_format($saldo, 2));
        $activeWorksheet->setCellValue('G'.$column, '$'.number_format($total, 2));
        $column++;
            
            
        

        $activeWorksheet->getStyle('A1:G1')->getFont()->setBold(true);
        $spreadsheet->getActiveSheet()->getStyle('A1:G1')
        ->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_WHITE);
       $spreadsheet->getActiveSheet()->getStyle('A1:G1')
        ->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID);
        $spreadsheet->getActiveSheet()->getStyle('A1:G1')
        ->getFill()->getStartColor()->setARGB('FFFF0000');
        $styleArray = [
            'borders' => [
            'allBorders' => [
                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['argb' => 'FF000000'],
                ],
            ],
        ];

        $spreadsheet->getActiveSheet()->getStyle('A1:G1'.($column-1))->applyFromArray($styleArray);
        
        $activeWorksheet->getColumnDimension('A')->setAutoSize(true);
        $activeWorksheet->getColumnDimension('B')->setAutoSize(true);
        $activeWorksheet->getColumnDimension('C')->setAutoSize(true);
        $activeWorksheet->getColumnDimension('D')->setAutoSize(true);
        $activeWorksheet->getColumnDimension('E')->setAutoSize(true);
        $activeWorksheet->getColumnDimension('F')->setAutoSize(true);
        $activeWorksheet->getColumnDimension('G')->setAutoSize(true);

        $writer = new Xlsx($spreadsheet);
        header('Content-Type: application\vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=saldo_donator.xlsx');
        header('Cache-Control: max-age=0');
        $writer->save('hello world.xlsx');
        $writer->save('php://output');
        exit();
    
    }

    public function filterexcel()
    {
        $donator = $this->saldodonator->filterdonator();
        if (null !== $this->request->getGet('filter-data')) {
            $filterdonator = $this->saldodonator->filterdonator();
            if ($filterdonator == null) {
                return redirect()->to(base_url('printsaldodonator/excel'))->with('error', 'Data Nebe Mak Ita Boot Buka Laiha!.. Favor Bele Buka Fali Data Seluk');
            }
        }
        $spreadsheet = new Spreadsheet();
        $activeWorksheet = $spreadsheet->getActiveSheet();
        $activeWorksheet->setCellValue('A1', 'No');
        $activeWorksheet->setCellValue('B1', 'Kode Osan');
        $activeWorksheet->setCellValue('C1', 'Instituisaun');
        $activeWorksheet->setCellValue('D1', 'Data Osan Tama');
        $activeWorksheet->setCellValue('E1', 'Horas Osan Tama');
        $activeWorksheet->setCellValue('F1', 'Saldo Apoia Donator');
        // $activeWorksheet->setCellValue('F1', 'Saldo Apoia Donator');
        
        
        $column = 2;
        $saldo = 0;
        $total = 0;
        foreach($donator as $donator){
            $activeWorksheet->setCellValue('A'.$column, ($column-1));
            $activeWorksheet->setCellValue('B'.$column, $donator->kode_osan);
            $activeWorksheet->setCellValue('C'.$column, $donator->instituisaun);
            $activeWorksheet->setCellValue('D'.$column, $donator->data_osan_tama_donator);
            $activeWorksheet->setCellValue('E'.$column, $donator->horas_osan_tama_donator);
            $activeWorksheet->setCellValue('F'.$column, '$'.number_format($donator->saldo_tama_donator, 2));
            $activeWorksheet->setCellValue('G'.$column, '$'.number_format($donator->total_saldo, 2));
            $column++;
            
            $saldo += $donator->saldo_tama_donator;
            $total = $donator->total_saldo;
        }
        $activeWorksheet->setCellValue('A'.$column, ($column-1));
        $activeWorksheet->setCellValue('B'.$column, 'TOTAL SALDO DONATOR');
        $activeWorksheet->setCellValue('F'.$column, '$'.number_format($saldo, 2));
        $activeWorksheet->setCellValue('G'.$column, '$'.number_format($total, 2));
        $column++;
            
            
        

        $activeWorksheet->getStyle('A1:G1')->getFont()->setBold(true);
        $spreadsheet->getActiveSheet()->getStyle('A1:G1')
        ->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_WHITE);
       $spreadsheet->getActiveSheet()->getStyle('A1:G1')
        ->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID);
        $spreadsheet->getActiveSheet()->getStyle('A1:G1')
        ->getFill()->getStartColor()->setARGB('FFFF0000');
        $styleArray = [
            'borders' => [
            'allBorders' => [
                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['argb' => 'FF000000'],
                ],
            ],
        ];

        $spreadsheet->getActiveSheet()->getStyle('A1:G1'.($column-1))->applyFromArray($styleArray);
        
        $activeWorksheet->getColumnDimension('A')->setAutoSize(true);
        $activeWorksheet->getColumnDimension('B')->setAutoSize(true);
        $activeWorksheet->getColumnDimension('C')->setAutoSize(true);
        $activeWorksheet->getColumnDimension('D')->setAutoSize(true);
        $activeWorksheet->getColumnDimension('E')->setAutoSize(true);
        $activeWorksheet->getColumnDimension('F')->setAutoSize(true);
        $activeWorksheet->getColumnDimension('G')->setAutoSize(true);

        $writer = new Xlsx($spreadsheet);
        header('Content-Type: application\vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=saldo_donator.xlsx');
        header('Cache-Control: max-age=0');
        $writer->save('hello world.xlsx');
        $writer->save('php://output');
        exit();

    
    }
}
