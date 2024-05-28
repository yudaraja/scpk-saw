<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use Illuminate\Http\Request;

class RankingController extends Controller
{
    public function calculate($beasiswa, $minUsia, $minPenghasilan, $maxIpk, $maxSemester, $maxTanggungan, $is_chart = false)
    {
        $data = $beasiswa;
        $chart_data = [];

        for ($i = 0; $i < count($data); $i++) {
            $data[$i]['normalized_penghasilan'] = $minPenghasilan / $data[$i]['nilai_penghasilan']; //normalisasi nilai fuzzy
            $data[$i]['normalized_usia'] = $minUsia / $data[$i]['nilai_usia'];
            $data[$i]['normalized_tanggungan'] = $data[$i]['nilai_tanggungan'] / $maxTanggungan;
            $data[$i]['normalized_semester'] = $data[$i]['nilai_semester'] / $maxSemester;
            $data[$i]['normalized_ipk'] = $data[$i]['nilai_ipk'] / $maxIpk;

            $data[$i]['preferensi_penghasilan'] = $data[$i]['normalized_penghasilan'] * 0.25;
            $data[$i]['preferensi_usia'] = $data[$i]['normalized_usia'] * 0.10;
            $data[$i]['preferensi_tanggungan'] = $data[$i]['normalized_tanggungan'] * 0.25;
            $data[$i]['preferensi_semester'] = $data[$i]['normalized_semester'] * 0.10;
            $data[$i]['preferensi_ipk'] = $data[$i]['normalized_ipk'] * 0.3;

            $data[$i]['total'] = ($data[$i]['normalized_penghasilan'] * 0.25) + ($data[$i]['normalized_usia'] * 0.10) + ($data[$i]['normalized_tanggungan'] * 0.25) + ($data[$i]['normalized_semester'] * 0.10) + ($data[$i]['normalized_ipk'] * 0.3); //nilai prefensi setiap baris

            if ($is_chart) {
                $chart_data[$i]['nama'] = $beasiswa[$i]['nama_mahasiswa'];
                $chart_data[$i]['total'] = $data[$i]['total'];
            }
        }

        if ($is_chart) {
            return $chart_data;
        }

        return $data;
    }

    public function index()
    {

        $beasiswa = Beasiswa::all()->toArray();
        $penghasilan = Beasiswa::pluck('nilai_penghasilan')->toArray();
        $usia = Beasiswa::pluck('nilai_usia')->toArray();
        $tanggungan = Beasiswa::pluck('nilai_tanggungan')->toArray();
        $semester = Beasiswa::pluck('nilai_semester')->toArray();
        $ipk = Beasiswa::pluck('nilai_ipk')->toArray();

        $minPenghasilan = min($penghasilan);
        $minUsia = min($usia);
        $maxTanggungan = max($tanggungan);
        $maxSemester = max($semester);
        $maxIpk = max($ipk);

        $calculated = $this->calculate($beasiswa, $minPenghasilan, $minUsia, $maxTanggungan, $maxSemester, $maxIpk);
        $calculated = collect($calculated)->sortByDesc('total');

        return view('ranking.index', [
            'all_beasiswa' => $calculated
        ]);
    }

    // // public function search(Request $request)
    // // {
    // //     $keyword = $request->input('keyword');

    // //     // Lakukan pencarian berdasarkan kata kunci pada kolom 'nama_mahasiswa'
    // //     $results = Beasiswa::where('nama_mahasiswa', 'LIKE', "%$keyword%")->get();

    // //     // Kembalikan hasil pencarian ke tampilan
    // //     return view('ranking.index', ['results' => $results]);
    // }



    // public function search(Request $request)
    // {
    //     $keyword = $request->input('keyword');

    //     $results = Beasiswa::where('nama_mahasiswa', 'LIKE', "%$keyword%")
    //         ->get();

    //     return view('hasil_pencarian', ['results' => $results]);
    // }
}
