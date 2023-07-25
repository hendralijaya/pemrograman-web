<?php

namespace App\Http\Controllers;

use App\Models\Main;
use App\Models\Dashboard;
use App\Models\Pengangguran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardWebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Dashboard::all();
        foreach ($data as $d) {
            $d['jumlah_penduduk'] = number_format($d['jumlah_penduduk'],0,',','.');
        }
        return view('dashboard.beranda',[
            'title' => 'Welcome to the  Website',
            'data' => $data
        ]);
    }

    public function petaJumlahPenduduk()
    {
        $data2016 = DB::select('SELECT nama_kabupaten_kota, jumlah_penduduk, tahun, CASE WHEN jumlah_penduduk > 1729984.04 THEN "Diatas rata-rata" WHEN jumlah_penduduk = 1729984.04 THEN "Rata-rata" WHEN jumlah_penduduk < 1729984.04 THEN "Dibawah rata-rata" END AS status FROM main WHERE tahun = "2016" ORDER BY tahun ASC, jumlah_penduduk DESC');
        $data2017 = DB::select('SELECT nama_kabupaten_kota, jumlah_penduduk, tahun, CASE WHEN jumlah_penduduk > 1754792.19 THEN "Diatas rata-rata" WHEN jumlah_penduduk = 1754792.19 THEN "Rata-rata" WHEN jumlah_penduduk < 1754792.19 THEN "Dibawah rata-rata" END AS status FROM main WHERE tahun = "2017" ORDER BY tahun ASC, jumlah_penduduk DESC');
        $data2018 = DB::select('SELECT nama_kabupaten_kota, jumlah_penduduk, tahun, CASE WHEN jumlah_penduduk > 1779178.78 THEN "Diatas rata-rata" WHEN jumlah_penduduk = 1779178.78 THEN "Rata-rata" WHEN jumlah_penduduk < 1779178.78 THEN "Dibawah rata-rata" END AS status FROM main WHERE tahun = "2018" ORDER BY tahun ASC, jumlah_penduduk DESC');
        $data2019 = DB::select('SELECT nama_kabupaten_kota, jumlah_penduduk, tahun, CASE WHEN jumlah_penduduk > 1803105.96 THEN "Diatas rata-rata" WHEN jumlah_penduduk = 1803105.96 THEN "Rata-rata" WHEN jumlah_penduduk < 1803105.96 THEN "Dibawah rata-rata" END AS status FROM main WHERE tahun = "2019" ORDER BY tahun ASC, jumlah_penduduk DESC');
        $data2020 = DB::select('SELECT nama_kabupaten_kota, jumlah_penduduk, tahun, CASE WHEN jumlah_penduduk > 1826544.89 THEN "Diatas rata-rata" WHEN jumlah_penduduk = 1826544.89 THEN "Rata-rata" WHEN jumlah_penduduk < 1826544.89 THEN "Dibawah rata-rata" END AS status FROM main WHERE tahun = "2020" ORDER BY tahun ASC, jumlah_penduduk DESC');
        return view('peta.jumlahpenduduk.jumlahpenduduk', [
            'title' => 'Peta Jumlah Penduduk di Jawa Barat Tahun 2016 - 2020',
            'data2016' => $data2016,
            'data2017' => $data2017,
            'data2018' => $data2018,
            'data2019' => $data2019,
            'data2020' => $data2020
        ]);
    }

    public function petaJumlahPengangguran()
    {
        $data = Pengangguran::all();
        $data2017 = Pengangguran::where('tahun', '2017')->get();
        $data2018 = Pengangguran::where('tahun', '2018')->get();
        $data2019 = Pengangguran::where('tahun', '2019')->get();
        $data2020 = Pengangguran::where('tahun', '2020')->get();
        return view('peta.jumlahpengangguran.jumlahpengangguran', [
            'title' => 'Peta Jumlah Pengangguran di Jawa Barat Tahun 2017 - 2020',
            'data' => $data,
            'data2017' => $data2017,
            'data2018' => $data2018,
            'data2019' => $data2019,
            'data2020' => $data2020
        ]);
    }

    public function petaJumlahPendudukMiskin()
    {
        $data = Main::all();
        $data2016 = Main::where('tahun', '=', '2016')->get();
        $data2017 = Main::where('tahun', '=', '2017')->get();
        $data2018 = Main::where('tahun', '=', '2018')->get();
        $data2019 = Main::where('tahun', '=', '2019')->get();
        $data2020 = Main::where('tahun', '=', '2020')->get();
        return view('peta.jumlahpendudukmiskin.jumlahpendudukmiskin', [
            'title' => 'Peta Jumlah Penduduk Miskin di Jawa Barat Tahun 2016 - 2020',
            'data' => $data,
            'data2016' => $data2016,
            'data2017' => $data2017,
            'data2018' => $data2018,
            'data2019' => $data2019,
            'data2020' => $data2020
        ]);
    }

    public function petaAngkaHarapanHidup()
    {
        $angkaHarapanHidup = DB::select('SELECT *,
        CASE
        WHEN angka_harapan_hidup > 72 THEN "Diatas rata-rata"
        WHEN angka_harapan_hidup = 72 THEN "rata-rata"
        WHEN angka_harapan_hidup < 72 THEN "Dibawah rata-rata"
        END AS status

        FROM harapan_hidup
        WHERE kabupaten_kota NOT IN( SELECT kabupaten_kota FROM harapan_hidup WHERE kabupaten_kota = "Jawa Barat" )
        ORDER BY tahun ASC, harapan_hidup.angka_harapan_hidup DESC');
        return view('peta.jumlahangkaharapanhidup.jumlahangkaharapanhidup', [
            'title' => 'Peta Angka Harapan Hidup di Jawa Barat Tahun 2016 - 2020',
            'data' => $angkaHarapanHidup
        ]);
    }

    public function kesimpulan()
    {
        return view('dashboard.kesimpulan', ['title' => 'Kesimpulan']);
    }

    public function about()
    {
        return view('dashboard.tentangkami', ['title' => 'Tentang Kami']);
    }
}
