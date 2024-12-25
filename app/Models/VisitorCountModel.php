<?php

namespace App\Models;

use CodeIgniter\Model;

class VisitorCountModel extends Model
{
    protected $table = 'visitor_count';
    protected $primaryKey = 'id';
    protected $allowedFields = ['menu_name', 'visit_date', 'visit_count'];

    public function incrementVisit($menuName)
    {
        $dateToday = date('Y-m-d');

        // Cek apakah data untuk menu dan tanggal ini sudah ada
        $existingRecord = $this->where('menu_name', $menuName)
            ->where('visit_date', $dateToday)
            ->first();

        if ($existingRecord) {
            // Update count
            $this->update($existingRecord['id'], ['visit_count' => $existingRecord['visit_count'] + 1]);
        } else {
            // Insert record baru
            $this->insert([
                'menu_name' => $menuName,
                'visit_date' => $dateToday,
                'visit_count' => 1
            ]);
        }
    }

    public function getDailyVisits($menuName)
    {
        return $this->where('menu_name', $menuName)
            ->where('visit_date', date('Y-m-d'))
            ->first();
    }

    public function getVisitStatistics($menuName, $year, $month)
    {
        return $this->select('visit_date, SUM(visit_count) as total_visits')
            ->where('menu_name', $menuName)
            ->where('YEAR(visit_date)', $year)
            ->where('MONTH(visit_date)', $month)
            ->groupBy('visit_date')
            ->orderBy('visit_date', 'ASC')
            ->findAll();
    }

    public function getDataByDate($menu, $month, $year)
    {
        return $this->db->table('visitor_counts')
            ->select('DATE(date) as date, COUNT(*) as count')
            ->where('menu', $menu)
            ->where('MONTH(date)', $month)
            ->where('YEAR(date)', $year)
            ->groupBy('DATE(date)')
            ->get()->getResultArray();
    }


    public function kunjunganHariIni($pageName)
    {
        $today = date('Y-m-d'); // Mendapatkan tanggal hari ini

        // Ambil jumlah kunjungan untuk halaman dan tanggal hari ini
        $record = $this->where(['menu_name' => $pageName, 'visit_date' => $today])->first();

        return $record ? $record['visit_count'] : 0; // Kembalikan 0 jika tidak ada catatan
    }
}
