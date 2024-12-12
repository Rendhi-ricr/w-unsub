<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;


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
        // Ambil parameter filter dari request GET
        $menuName = $this->request->getGet('menu_name');
        $year = $this->request->getGet('year');
        $month = $this->request->getGet('month');

        // Debug filter input
        // echo "Filter Menu: $menuName, Tahun: $year, Bulan: $month";
        // die();

        // Query awal
        $query = $stat->select('*');

        // Tambahkan filter jika ada
        if ($menuName) {
            $query->where('menu_name', $menuName);
        }
        if ($year) {
            $query->where('YEAR(visit_date)', $year); // Format YEAR(visit_date) cocok dengan MySQL
        }
        if ($month) {
            $query->where('MONTH(visit_date)', $month); // Format MONTH(visit_date) cocok dengan MySQL
        }

        // Eksekusi query
        $data = $query->findAll();


        // Kirim data ke view
        return view('admin/statistics', ['data' => $data]);
    }

    public function trackVisit($menuName)
    {
        // Tambahkan kunjungan untuk menu tertentu
        $this->visitorCountModel->incrementVisit($menuName);

        // Dapatkan jumlah kunjungan hari ini untuk menu
        $visitData = $this->visitorCountModel->getDailyVisits($menuName);

        return view('visitor_view', ['menuName' => $menuName, 'visitCount' => $visitData['visit_count']]);
    }

    public function viewStatistics()
    {
        $menuName = $this->request->getPost('menu_name') ?? 'sejarah';
        $year = $this->request->getPost('year') ?? date('Y');
        $month = $this->request->getPost('month') ?? date('m');

        // Ambil data statistik
        $visitData = $this->visitorCountModel->getVisitStatistics($menuName, $year, $month);

        // Format data untuk grafik
        $dates = [];
        $visitCounts = [];

        foreach ($visitData as $data) {
            $dates[] = $data['visit_date'];
            $visitCounts[] = $data['total_visits'];
        }

        return view('admin/statistics', [
            'menuName' => $menuName,
            'year' => $year,
            'month' => $month,
            'dates' => $dates,
            'visitCounts' => $visitCounts,
        ]);
    }

    public function getStatistics()
    {
        $menu = $this->request->getVar('menu');
        $month = $this->request->getVar('month');
        $year = $this->request->getVar('year');

        $data = $this->visitorCountModel->getDataByDate($menu, $month, $year);

        return $this->response->setJSON($data);
    }
}
