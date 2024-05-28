<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beasiswa;
use App\Imports\BeasiswaImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\BeasiswaExport;

class BeasiswaController extends Controller
{
    protected $ranking;
    public function __construct()
    {
        $this->ranking = new RankingController();
    }

    public function index()
    {

        $beasiswa = Beasiswa::all();
        $count = Beasiswa::count();

        return view('beasiswa.index',  ['all_beasiswa' => $beasiswa, 'count' => $count])
            ->with('count', $count);

        // return view('beasiswa.index', ['all_beasiswa' => $beasiswa, 'count' => $count])
        // ->with('count', $count);

        //$count = Model::count();
        //return view('nama_view', ['count' => $count]);
        //$count = Model::count();
        //return view('nama_view1', ['count' => $count])->with('count', $count);

        // return view('beasiswa.index' ,['all_beasiswa' => $beasiswa]);

    }

    public function beasiswaexport()
    {
        return Excel::download(new BeasiswaExport, 'beasiswa.xlsx');
    }

    public function beasiswaimportexcel(Request $request)
    {
        Excel::import(new BeasiswaImport, $request->file('file')->store('temp'));
        return redirect()->route('beasiswa.index');
    }


    public function tampilkanData()
    {
        $beasiswa = Beasiswa::all();
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

        $penghasilanCounts = [
            '5' => $beasiswa->where('nilai_penghasilan', 5)->count(),
            '4' => $beasiswa->where('nilai_penghasilan', 4)->count(),
            '3' => $beasiswa->where('nilai_penghasilan', 3)->count(),
            '2' => $beasiswa->where('nilai_penghasilan', 2)->count(),
            '1' => $beasiswa->where('nilai_penghasilan', 1)->count(),
        ];


        $usiaCounts = [
            '1' => $beasiswa->where('nilai_usia', 1)->count(),
            '2' => $beasiswa->where('nilai_usia', 2)->count(),
            '3' => $beasiswa->where('nilai_usia', 3)->count(),
            '4' => $beasiswa->where('nilai_usia', 4)->count(),
            '5' => $beasiswa->where('nilai_usia', 5)->count(),
        ];

        $tanggunganCounts = [
            '1' => $beasiswa->where('nilai_tanggungan', 1)->count(),
            '2' => $beasiswa->where('nilai_tanggungan', 2)->count(),
            '3' => $beasiswa->where('nilai_tanggungan', 3)->count(),
            '4' => $beasiswa->where('nilai_tanggungan', 4)->count(),
            '5' => $beasiswa->where('nilai_tanggungan', 5)->count(),
        ];

        $semesterCounts = [
            '1' => $beasiswa->where('nilai_semester', 1)->count(),
            '2' => $beasiswa->where('nilai_semester', 2)->count(),
            '3' => $beasiswa->where('nilai_semester', 3)->count(),
            '4' => $beasiswa->where('nilai_semester', 4)->count(),
            '5' => $beasiswa->where('nilai_semester', 5)->count(),
        ];

        $ipkCounts = [
            '1' => $beasiswa->where('nilai_ipk', 1)->count(),
            '2' => $beasiswa->where('nilai_ipk', 2)->count(),
            '3' => $beasiswa->where('nilai_ipk', 3)->count(),
            '4' => $beasiswa->where('nilai_ipk', 4)->count(),
            '5' => $beasiswa->where('nilai_ipk', 5)->count(),
        ];

        $calculated = $this->ranking->calculate($beasiswa, $minPenghasilan, $minUsia, $maxTanggungan, $maxSemester, $maxIpk, true);
        $key_values = array_column($calculated, 'total');
        array_multisort($key_values, SORT_DESC, $calculated);
        $calculated = $this->formatChartData($calculated);

        $count = Beasiswa::count();
        return view('dashboard', compact('count', 'calculated', 'penghasilanCounts', 'usiaCounts', 'tanggunganCounts', 'semesterCounts', 'ipkCounts'));
    }

    public function deleteAll(Request $request)
    {
        $ids = $request->ids;
        Beasiswa::whereIn('id', explode(",", $ids))->delete();

        return response()->json(['success' => "Data yang dipilih berhasil dihapus."]);
    }
    private function formatChartData($data)
    {
        $res = [];
        foreach ($data as $key => $d) {
            $res['nama'][] = $d['nama'];
            $res['total'][] = round($d['total'], 3);
        }

        return $res;
    }


    public function tambah()
    {
        $title = 'Tambah Beasiswa';

        return view('beasiswa.tambah', [
            'title' => $title,
        ]);
    }

    public function destroy(Request $request, $id)
    {
        $beasiswa = Beasiswa::findOrFail($id);
        $beasiswa->delete();

        return redirect()->route('beasiswa.index')->with('success', 'Beasiswa telah berhasil dihapus.');
    }

    public function store(Request $request)
    {
        try {
            switch ($request->penghasilan) {
                case '<= Rp 1.000.000':
                    $nilai_penghasilan = 5;
                    break;

                case 'Rp 1.000.000 - Rp 1.999.999':
                    $nilai_penghasilan = 4;
                    break;

                case 'Rp 2.000.000 - Rp 2.999.999':
                    $nilai_penghasilan = 3;
                    break;

                case 'Rp 3.000.000 - Rp 3.999.999':
                    $nilai_penghasilan = 2;
                    break;

                case 'Rp 4.000.000':
                    $nilai_penghasilan = 1;
                    break;
            }

            switch ($request->usia) {
                case '23 Tahun':
                    $nilai_usia = 1;
                    break;

                case '22 Tahun':
                    $nilai_usia = 2;
                    break;

                case '21 Tahun':
                    $nilai_usia = 3;
                    break;

                case '20 Tahun':
                    $nilai_usia = 4;
                    break;

                case '19 Tahun':
                    $nilai_usia = 5;
                    break;
            }

            switch ($request->tanggungan) {
                case 'Tanggungan 1':
                    $nilai_tanggungan = 1;
                    break;

                case 'Tanggungan 2':
                    $nilai_tanggungan = 2;
                    break;

                case 'Tanggungan 3':
                    $nilai_tanggungan = 3;
                    break;

                case 'Tanggungan 4':
                    $nilai_tanggungan = 4;
                    break;

                case 'Tanggungan 5 atau lebih':
                    $nilai_tanggungan = 5;
                    break;
            }

            switch ($request->semester) {
                case 'Semester 1-2':
                    $nilai_semester = 1;
                    break;

                case 'Semester 3-4':
                    $nilai_semester = 2;
                    break;

                case 'Semester 5-6':
                    $nilai_semester = 3;
                    break;

                case 'Semester 7':
                    $nilai_semester = 4;
                    break;

                case 'Semester 8 atau lebih':
                    $nilai_semester = 5;
                    break;
            }

            switch ($request->ipk) {
                case '3.00-3.09':
                    $nilai_ipk = 1;
                    break;

                case '3.10-3.19':
                    $nilai_ipk = 2;
                    break;

                case '3.20-3.39':
                    $nilai_ipk = 3;
                    break;

                case '3.40-3.59':
                    $nilai_ipk = 4;
                    break;

                case '3.60-4.00':
                    $nilai_ipk = 5;
                    break;
            }

            $beasiswa = Beasiswa::create([
                'nama_mahasiswa' => $request->nama_mahasiswa,
                'penghasilan' => $request->penghasilan,
                'nilai_penghasilan' => $nilai_penghasilan,
                'usia' => $request->usia,
                'nilai_usia' => $nilai_usia,
                'tanggungan' => $request->tanggungan,
                'nilai_tanggungan' => $nilai_tanggungan,
                'semester' => $request->semester,
                'nilai_semester' => $nilai_semester,
                'ipk' => $request->ipk,
                'nilai_ipk' => $nilai_ipk
            ]);
            return redirect()->route('beasiswa.index')->with('success', 'Data Beasiswa telah berhasil ditambahkan.');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->route('beasiswa.tambah')->with('error', 'Data Beasiswa gagal ditambahkan. ' . $th->getMessage());
        }
    }

    public function edit($id)
    {
        $beasiswa = Beasiswa::findOrFail($id);
        return view('beasiswa.edit', compact('beasiswa'));
    }

    public function update(Request $request, $id)
    {
        try {
            $beasiswa = Beasiswa::findOrFail($id);

            switch ($request->penghasilan) {
                case '<= Rp 1.000.000':
                    $nilai_penghasilan = 5;
                    break;
                case 'Rp 1.000.000 - Rp 1.999.999':
                    $nilai_penghasilan = 4;
                    break;
                case 'Rp 2.000.000 - Rp 2.999.999':
                    $nilai_penghasilan = 3;
                    break;
                case 'Rp 3.000.000 - Rp 3.999.999':
                    $nilai_penghasilan = 2;
                    break;
                case 'Rp 4.000.000':
                    $nilai_penghasilan = 1;
                    break;
            }

            switch ($request->usia) {
                case '23 Tahun':
                    $nilai_usia = 1;
                    break;
                case '22 Tahun':
                    $nilai_usia = 2;
                    break;
                case '21 Tahun':
                    $nilai_usia = 3;
                    break;
                case '20 Tahun':
                    $nilai_usia = 4;
                    break;
                case '19 Tahun':
                    $nilai_usia = 5;
                    break;
            }

            switch ($request->tanggungan) {
                case 'Tanggungan 1':
                    $nilai_tanggungan = 1;
                    break;
                case 'Tanggungan 2':
                    $nilai_tanggungan = 2;
                    break;
                case 'Tanggungan 3':
                    $nilai_tanggungan = 3;
                    break;
                case 'Tanggungan 4':
                    $nilai_tanggungan = 4;
                    break;
                case 'Tanggungan 5 atau lebih':
                    $nilai_tanggungan = 5;
                    break;
            }

            switch ($request->semester) {
                case 'Semester 1-2':
                    $nilai_semester = 1;
                    break;
                case 'Semester 3-4':
                    $nilai_semester = 2;
                    break;
                case 'Semester 5-6':
                    $nilai_semester = 3;
                    break;
                case 'Semester 7':
                    $nilai_semester = 4;
                    break;
                case 'Semester 8 atau lebih':
                    $nilai_semester = 5;
                    break;
            }

            switch ($request->ipk) {
                case '3.00-3.09':
                    $nilai_ipk = 1;
                    break;
                case '3.10-3.19':
                    $nilai_ipk = 2;
                    break;
                case '3.20-3.39':
                    $nilai_ipk = 3;
                    break;
                case '3.40-3.59':
                    $nilai_ipk = 4;
                    break;
                case '3.60-4.00':
                    $nilai_ipk = 5;
                    break;
            }

            $beasiswa->update([
                'nama_mahasiswa' => $request->nama_mahasiswa,
                'penghasilan' => $request->penghasilan,
                'nilai_penghasilan' => $nilai_penghasilan,
                'usia' => $request->usia,
                'nilai_usia' => $nilai_usia,
                'tanggungan' => $request->tanggungan,
                'nilai_tanggungan' => $nilai_tanggungan,
                'semester' => $request->semester,
                'nilai_semester' => $nilai_semester,
                'ipk' => $request->ipk,
                'nilai_ipk' => $nilai_ipk
            ]);

            return redirect()->route('beasiswa.index')->with('success', 'Data Beasiswa telah berhasil diupdate.');
        } catch (\Throwable $th) {
            return redirect()->route('beasiswa.edit', $id)->with('error', 'Data Beasiswa gagal diupdate. ' . $th->getMessage());
        }
    }
}
