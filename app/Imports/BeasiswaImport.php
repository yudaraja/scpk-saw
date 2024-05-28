<?php

namespace App\Imports;

use App\Models\Beasiswa;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;

class BeasiswaImport implements ToModel
{
    /**
     * @param Collection $collection
     */
    public function model(array $collection)
    {
        switch ($collection[2]) {
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

        switch ($collection[3]) {
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

        switch ($collection[4]) {
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

        switch ($collection[5]) {
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

        switch ($collection[6]) {
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

        return new Beasiswa([
            'nama_mahasiswa' => $collection[1],
            'ipk' => $collection[6],
            'nilai_ipk' => $nilai_ipk,
            'semester' => $collection[5],
            'nilai_semester' => $nilai_semester,
            'tanggungan' => $collection[4],
            'nilai_tanggungan' => $nilai_tanggungan,
            'usia' => $collection[3],
            'nilai_usia' => $nilai_usia,
            'penghasilan' => $collection[2],
            'nilai_penghasilan' => $nilai_penghasilan,
        ]);
    }
}
