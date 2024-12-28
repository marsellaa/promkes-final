<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::middleware('auth')->group(function () {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/profile', 'ProfileController@index')->name('profile');
    Route::put('/profile', 'ProfileController@update')->name('profile.update');

    Route::get('/about', function () {
        return view('about');
    })->name('about');



    // Halaman PEH
    Route::get('/peh', 'PehController@index')->name('peh.index');
    Route::get('/peh/create', 'PehController@create')->name('peh.create');
    Route::post('/peh', 'PehController@store')->name('peh.store');
    Route::get('/peh/{peh}/edit', 'PehController@edit')->name('peh.edit');
    Route::put('/peh/{peh}', 'PehController@update')->name('peh.update');
    Route::delete('/peh/{id}', 'PehController@destroy')->name('peh.destroy');
    Route::post('/peh/print', 'PehController@print')->name('peh.print');
    Route::get('/peh/download-pdf', 'PehController@downloadPdf')->name('peh.downloadPdf');

    // Halaman Mitra
    Route::get('/mitra', 'mitraController@index')->name('mitra.index');
    Route::get('/mitra/create', 'mitraController@create')->name('mitra.create');
    Route::post('/mitra', 'mitraController@store')->name('mitra.store');
    Route::get('/mitra/{mitra}/edit', 'mitraController@edit')->name('mitra.edit');
    Route::put('/mitra/{mitra}', 'mitraController@update')->name('mitra.update');
    Route::delete('/mitra/{id}', 'mitraController@destroy')->name('mitra.destroy');
    Route::post('/mitra/print', 'mitraController@print')->name('mitra.print');

    // Halaman Partisipan
    Route::get('/partisipan', 'partisipanController@index')->name('partisipan.index');
    Route::get('/partisipan/create', 'partisipanController@create')->name('partisipan.create');
    Route::post('/partisipan', 'partisipanController@store')->name('partisipan.store');
    Route::get('/partisipan/{partisipan}/edit', 'partisipanController@edit')->name('partisipan.edit');
    Route::put('/partisipan/{partisipan}', 'partisipanController@update')->name('partisipan.update');
    Route::delete('/partisipan/{id}', 'partisipanController@destroy')->name('partisipan.destroy');
    Route::post('/partisipan/print', 'partisipanController@print')->name('partisipan.print');

    // Halaman Pertanyaan
    Route::get('/pertanyaan', 'pertanyaanController@index')->name('pertanyaan.index');
    Route::get('/pertanyaan/create', 'pertanyaanController@create')->name('pertanyaan.create');
    Route::post('/pertanyaan', 'pertanyaanController@store')->name('pertanyaan.store');
    Route::get('/pertanyaan/{pertanyaan}/edit', 'pertanyaanController@edit')->name('pertanyaan.edit');
    Route::put('/pertanyaan/{pertanyaan}', 'pertanyaanController@update')->name('pertanyaan.update');
    Route::delete('/pertanyaan/{id}', 'pertanyaanController@destroy')->name('pertanyaan.destroy');
    Route::post('/pertanyaan/print', 'pertanyaanController@print')->name('pertanyaan.print');

    //Halaman Donor Darah
    Route::get('/donordarah', 'DonorDarahController@index')->name('donordarah.index');
    Route::get('/donordarah/create', 'DonorDarahController@create')->name('donordarah.create');
    Route::post('/donordarah', 'DonorDarahController@store')->name('donordarah.store');
    Route::get('/donordarah/{donordarah}/edit', 'DonorDarahController@edit')->name('donordarah.edit');
    Route::put('/donordarah/{donordarah}', 'DonorDarahController@update')->name('donordarah.update');
    Route::delete('/donordarah/{donordarah}', 'DonorDarahController@destroy')->name('donordarah.destroy');
    Route::delete('/donordarah/{donordarah}/dokumentasi/{file}', 'DonorDarahController@deleteDokumentasi')->name('donordarah.delete_dokumentasi');

    // Halaman Feedback
    Route::get('/feedback', 'FeedbackController@index')->name('feedback.index');
    Route::get('/feedback/create', 'FeedbackController@create')->name('feedback.create');
    Route::post('/feedback', 'FeedbackController@store')->name('feedback.store');
    Route::get('/feedback/{feedback}/edit', 'FeedbackController@edit')->name('feedback.edit');
    Route::put('/feedback/{feedback}', 'FeedbackController@update')->name('feedback.update');
    Route::delete('/feedback/{id}', 'FeedbackController@destroy')->name('feedback.destroy');
    Route::post('/feedback/print', 'FeedbackController@print')->name('feedback.print');

    // Halaman HealthTalk
    Route::get('/healthtalk', 'HealthTalkController@index')->name('healthtalk.index');
    Route::get('/healthtalk/create', 'HealthTalkController@create')->name('healthtalk.create');
    Route::post('/healthtalk', 'HealthTalkController@store')->name('healthtalk.store');
    Route::get('/healthtalk/{healthtalk}/edit', 'HealthTalkController@edit')->name('healthtalk.edit');
    Route::put('/healthtalk/{healthtalk}', 'HealthTalkController@update')->name('healthtalk.update');
    Route::delete('/healthtalk/{healthtalk}', 'HealthTalkController@destroy')->name('healthtalk.destroy');

    // Halaman Informasi dan Komplain
    Route::get('/infodankomplain', 'InfoDanKomplainController@index')->name('infodankomplain.index');
    Route::get('/infodankomplain/create', 'InfoDanKomplainController@create')->name('infodankomplain.create');
    Route::post('/infodankomplain', 'InfoDanKomplainController@store')->name('infodankomplain.store');
    Route::get('/infodankomplain/{infodankomplain}/edit', 'InfoDanKomplainController@edit')->name('infodankomplain.edit');
    Route::put('/infodankomplain/{infodankomplain}', 'InfoDanKomplainController@update')->name('infodankomplain.update');
    Route::delete('/infodankomplain/{id}', 'InfoDanKomplainController@destroy')->name('infodankomplain.destroy');

    // Halaman Kunjungan Mitra
    Route::get('/kjmitra', 'KjMitraController@index')->name('kjmitra.index');
    Route::get('/kjmitra/create', 'KjMitraController@create')->name('kjmitra.create');
    Route::post('/kjmitra', 'KjMitraController@store')->name('kjmitra.store');
    Route::get('/kjmitra/{kjmitra}/edit', 'KjMitraController@edit')->name('kjmitra.edit');
    Route::put('/kjmitra/{kjmitra}', 'KjMitraController@update')->name('kjmitra.update');
    Route::delete('/kjmitra/{kjmitra}', 'KjMitraController@destroy')->name('kjmitra.destroy');

    //Halaman Kerja Sama Non BPJS
    Route::get('/kerjasama_nonbpjs', 'KerjaSamaNonBpjsController@index')->name('kerjasama_nonbpjs.index');
    Route::get('/kerjasama_nonbpjs/create', 'KerjaSamaNonBpjsController@create')->name('kerjasama_nonbpjs.create');
    Route::post('/kerjasama_nonbpjs', 'KerjaSamaNonBpjsController@store')->name('kerjasama_nonbpjs.store');
    Route::get('/kerjasama_nonbpjs/{kerjasama_nonbpjs}/edit', 'KerjaSamaNonBpjsController@edit')->name('kerjasama_nonbpjs.edit');
    Route::put('/kerjasama_nonbpjs/{kerjasama_nonbpjs}', 'KerjaSamaNonBpjsController@update')->name('kerjasama_nonbpjs.update');
    Route::delete('/kerjasama_nonbpjs/{kerjasama_nonbpjs}', 'KerjaSamaNonBpjsController@destroy')->name('kerjasama_nonbpjs.destroy');

    //Halaman Kerja Sama Non BPJS
    Route::get('/video', 'VideoController@index')->name('video.index');
    Route::get('/video/create', 'VideoController@create')->name('video.create');
    Route::post('/video', 'VideoController@store')->name('video.store');
    Route::get('/video/{video}/edit', 'VideoController@edit')->name('video.edit');
    Route::put('/video/{video}', 'VideoController@update')->name('video.update');
    Route::delete('/video/{video}', 'VideoController@destroy')->name('video.destroy');

    //Halaman Kerja Sama Non BPJS
    Route::get('/flyer', 'FlyerController@index')->name('flyer.index');
    Route::get('/flyer/create', 'FlyerController@create')->name('flyer.create');
    Route::post('/flyer', 'FlyerController@store')->name('flyer.store');
    Route::get('/flyer/{flyer}/edit', 'FlyerController@edit')->name('flyer.edit');
    Route::put('/flyer/{flyer}', 'FlyerController@update')->name('flyer.update');
    Route::delete('/flyer/{flyer}', 'FlyerController@destroy')->name('flyer.destroy');
});
