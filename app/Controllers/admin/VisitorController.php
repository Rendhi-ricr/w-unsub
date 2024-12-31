<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

use Dompdf\Dompdf;
use Dompdf\Options;


use App\Models\VisitorCountModel;

class VisitorController extends BaseController
{
    protected $visitorCountModel;

    public function __construct()
    {
        $this->visitorCountModel = new VisitorCountModel();
    }

    public function index()
    {
        $stat = new VisitorCountModel();

        // Ambil parameter filter dari request GET dengan validasi sederhana
        $menuName = filter_var($this->request->getGet('menu_name'), FILTER_SANITIZE_STRING);
        $year = filter_var($this->request->getGet('year'), FILTER_VALIDATE_INT);
        $month = filter_var($this->request->getGet('month'), FILTER_VALIDATE_INT);

        // Query awal
        $query = $stat->select('menu_name, SUM(visit_count) as visit_count,visit_date');

        // Tambahkan filter jika ada
        if ($menuName) {
            $query->where('menu_name', $menuName);
        }
        if ($year) {
            $query->where('YEAR(visit_date)', $year);
        }
        if ($month) {
            $query->where('MONTH(visit_date)', $month);
        }

        // Group data berdasarkan bulan
        $query->groupBy('visit_date, menu_name');

        // Eksekusi query
        $data = $query->findAll();
        // Kirim data ke view
        return view('admin/statistics', [
            'data' => $data,
            'chartData' => json_encode($data), // Encode data untuk digunakan di JavaScript
        ]);
    }

    public function downloadPdf()
    {
        // Ambil parameter filter dari request GET
        $menuName = filter_var($this->request->getGet('menu_name'), FILTER_SANITIZE_STRING);
        $year = filter_var($this->request->getGet('year'), FILTER_VALIDATE_INT);
        $month = filter_var($this->request->getGet('month'), FILTER_VALIDATE_INT);

        // Query untuk mengambil data
        $stat = new VisitorCountModel();
        $query = $stat->select('menu_name, SUM(visit_count) as visit_count, visit_date');

        // Tambahkan filter jika ada
        if ($menuName) {
            $query->where('menu_name', $menuName);
        }
        if ($year) {
            $query->where('YEAR(visit_date)', $year);
        }
        if ($month) {
            $query->where('MONTH(visit_date)', $month);
        }

        // Group data berdasarkan bulan dan menu
        $query->groupBy('visit_date, menu_name');

        // Eksekusi query
        $data = $query->findAll();

        // Menghasilkan HTML untuk PDF
        $html = view('admin/statistics_pdf', [
            'data' => $data,
            'menuName' => $menuName,
            'year' => $year,
            'month' => $month
        ]);

        // Set options for Dompdf
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);
        $dompdf = new Dompdf($options);

        // Load HTML content
        $dompdf->loadHtml($html);

        // Set paper size (A4)
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF (first pass)
        $dompdf->render();

        // Output the generated PDF (force download)
        $dompdf->stream('statistik_kunjungan.pdf', array('Attachment' => 1));
    }



    // public function trackVisit($menuName)
    // {
    //     // Tambahkan kunjungan untuk menu tertentu
    //     $this->visitorCountModel->incrementVisit($menuName);

    //     // Dapatkan jumlah kunjungan hari ini untuk menu
    //     $visitData = $this->visitorCountModel->getDailyVisits($menuName);

    //     return view('visitor_view', ['menuName' => $menuName, 'visitCount' => $visitData['visit_count']]);
    // }

    // public function viewStatistics()
    // {
    //     $menuName = $this->request->getPost('menu_name') ?? 'sejarah';
    //     $year = $this->request->getPost('year') ?? date('Y');
    //     $month = $this->request->getPost('month') ?? date('m');

    //     // Ambil data statistik
    //     $visitData = $this->visitorCountModel->getVisitStatistics($menuName, $year, $month);

    //     // Format data untuk grafik
    //     $dates = [];
    //     $visitCounts = [];

    //     foreach ($visitData as $data) {
    //         $dates[] = $data['visit_date'];
    //         $visitCounts[] = $data['total_visits'];
    //     }

    //     return view('admin/statistics', [
    //         'menuName' => $menuName,
    //         'year' => $year,
    //         'month' => $month,
    //         'dates' => $dates,
    //         'visitCounts' => $visitCounts,
    //     ]);
    // }

    // public function getStatistics()
    // {
    //     $menu = $this->request->getVar('menu');
    //     $month = $this->request->getVar('month');
    //     $year = $this->request->getVar('year');

    //     $data = $this->visitorCountModel->getDataByDate($menu, $month, $year);

    //     return $this->response->setJSON($data);
    // }
}
