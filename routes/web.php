<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//DASHBOARD

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/analitik', 'HomeController@analitik')->name('analitik');
// Route::get('/statistik', 'HomeController@statistik')->name('statistik');
Route::get('/get-curl', 'HomeController@getCURL');
Route::get('{path}', "HomeController@index")->where('path', '([A-z\d\-\/_.]+)');

/* ABSENSI */
// Route::get('/kendalifingerprint', 'absensi@kendalifingerprint')->name('kendalifingerprint');

// Route::get('/absenfingerprint', function () {
//     return view('absensi.absenfingerprint');
// })->name('absenfingerprint');

// Route::get('/buatrekapabsensi', function () {
//     return view('absensi.buatrekapabsensi');
// })->name('buatrekapabsensi');

// Route::get('/laporanizin', function () {
//     return view('absensi.laporanizin');
// })->name('laporanizin');

// Route::get('/mekanismeizin', function () {
//     return view('absensi.mekanismeizin');
// })->name('mekanismeizin');

// Route::get('/terbitkanbarcode', function () {
//     return view('absensi.terbitkanbarcode');
// })->name('terbitkanbarcode');

// Route::get('/scanbarcode', function () {
//     return view('absensi.scanbarcode');
// })->name('scanbarcode');

// Route::get('/outputabsensi', function () {
//     return view('absensi.outputabsensi');
// })->name('outputabsensi');

// /* PELAJARAN */

// Route::get('/lihatjadwal', function () {
//     return view('pelajaran.lihatjadwal');
// })->name('lihatjadwal');

// Route::get('/moderasi', function () {
//     return view('pelajaran.moderasi');
// })->name('moderasi');

// Route::get('/penerbit', function () {
//     return view('pelajaran.penerbit');
// })->name('penerbit');

// Route::get('/simpanjadwal', function () {
//     return view('pelajaran.simpanjadwal');
// })->name('simpanjadwal');

// /* PENGUMUMAN */

// Route::get('/insidental', function () {
//     return view('pengumuman.insidental');
// })->name('insidental');

// Route::get('/jadwallibur', function () {
//     return view('pengumuman.jadwallibur');
// })->name('jadwallibur');

// Route::get('/jadwalrapat', function () {
//     return view('pengumuman.jadwalrapat');
// })->name('jadwalrapat');

// Route::get('/jadwalsekolah', function () {
//     return view('pengumuman.jadwalsekolah');
// })->name('jadwalsekolah');

// /* UJIAN */

// Route::get('/kurasinilai', function () {
//     return view('ujian.kurasinilai');
// })->name('kurasinilai');

// Route::get('/lihatjadwalujian', function () {
//     return view('ujian.lihatjadwal');
// })->name('lihatjadwalujian');

// Route::get('/moderasiujian', function () {
//     return view('ujian.moderasi');
// })->name('moderasiujian');

// Route::get('/penjadwalan', function () {
//     return view('ujian.penjadwalan');
// })->name('penjadwalan');

// /* DOWNLOAD */

// Route::get('/terbitkansilabus', function () {
//     return view('download.terbitkansilabus');
// })->name('terbitkansilabus');

// Route::get('/uploadsoal', function () {
//     return view('download.uploadsoal');
// })->name('uploadsoal');

// /* PEMBAYARAN */

// Route::get('/daftarkonfirmasi', function () {
//     return view('pembayaran.daftarkonfirmasi');
// })->name('daftarkonfirmasi');

// Route::get('/konfirmasipembayaran', function () {
//     return view('pembayaran.konfirmasipembayaran');
// })->name('konfirmasipembayaran');

// Route::get('/kurasifaktur', function () {
//     return view('pembayaran.kurasifaktur');
// })->name('kurasifaktur');

// Route::get('/pembayaranfaktur', function () {
//     return view('pembayaran.pembayaranfaktur');
// })->name('pembayaranfaktur');

// Route::get('/penerbitfaktur', function () {
//     return view('pembayaran.penerbitfaktur');
// })->name('penerbitfaktur');

// Route::get('/penerimaanpembayaran', function () {
//     return view('pembayaran.penerimaanpembayaran');
// })->name('penerimaanpembayaran');

// Route::get('/terimafaktur', function () {
//     return view('pembayaran.terimafaktur');
// })->name('terimafaktur');

// /* RAPOR */

// Route::get('/editnilai', function () {
//     return view('rapor.editnilai');
// })->name('editnilai');

// Route::get('/inputnilai', function () {
//     return view('rapor.inputnilai');
// })->name('inputnilai');

// Route::get('/lihatoutputnilai', function () {
//     return view('rapor.lihatoutputnilai');
// })->name('lihatoutputnilai');

// Route::get('/pdfprintout', function () {
//     return view('rapor.pdfprintout');
// })->name('pdfprintout');

// /* ADMINISTRASI */

// Route::get('/inputguru', function () {
//     return view('administrasi.inputguru');
// })->name('inputguru');

// Route::get('/inputpegawai', function () {
//     return view('administrasi.inputpegawai');
// })->name('inputpegawai');

// Route::get('/inputsiswa', function () {
//     return view('administrasi.inputsiswa');
// })->name('inputsiswa');

// /* EKSTRA */

// Route::get('/blog', function () {
//     return view('blog');
// })->name('blog');

// Route::get('/panduan', function () {
//     return view('panduan');
// })->name('panduan');

// Route::get('/kelolafrontend', function () {
//     return view('kelolafrontend');
// })->name('kelolafrontend');
