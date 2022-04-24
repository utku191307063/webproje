<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;

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

Route::get('admingiris', [FirstController::class, 'admingiris']);
Route::get('kayıtol', [FirstController::class, 'kayıtol']);
Route::GET('kayıtgiris', [FirstController::class, 'kayıtgiris']);
Route::POST('kullanıcıgiris', [FirstController::class, 'kullanıcıgiris']);
Route::get('ürünler', [FirstController::class, 'ürünler']);
Route::get('admingirisiki', [FirstController::class, 'admingirisiki']);
Route::post('admingirisüc', [FirstController::class, 'admingirisüc']);
Route::GET('ürünekle/{id}', [FirstController::class, 'ürünekle']);
Route::POST('ürünekleme/{id}', [FirstController::class, 'ürünekleme']);
Route::get('ürünlistesi/{id}', [FirstController::class, 'ürünlistesi']);
Route::get('deneme/{id}', [FirstController::class, 'deneme']);
Route::get('vizyonekle/{id}', [FirstController::class, 'vizyonekle']);
Route::GET('vizyonekleme', [FirstController::class, 'vizyonekleme']);
Route::get('iletisimekle/{id}', [FirstController::class, 'iletisimekle']);
Route::GET('iletisimekleme', [FirstController::class, 'iletisimekleme']);
Route::GET('hakkımızdaekleme', [FirstController::class, 'hakkımızdaekleme']);
Route::get('hakkımızda', [FirstController::class, 'hakkımızda']);
Route::get('hakkımızdaekle/{id}', [FirstController::class, 'hakkımızdaekle']);
Route::get('footerekle/{id}', [FirstController::class, 'footerekle']);
Route::GET('footerekleme', [FirstController::class, 'footerekleme']);
Route::GET('deneme/{id}', [FirstController::class, 'deneme']);
Route::GET('denemeiki/{id}', [FirstController::class, 'denemeiki']);
Route::GET('profilgüncelle/{id}', [FirstController::class, 'profilgüncelle']);
Route::get('anasayfa',[FirstController::class, 'anasayfa']);
Route::get('/',[FirstController::class, 'anasayfa']);
Route::GET('adminprofilgüncelle/{id}', [FirstController::class, 'adminprofilgüncelle']);
Route::get('sepet/{id}', [FirstController::class, 'sepet']);
Route::get('sepetekle/{id}/{idiki}', [FirstController::class, 'sepetekle']);
Route::GET('ürünleriki/{id}', [FirstController::class, 'ürünleriki']);
Route::GET('anasayfaiki/{id}', [FirstController::class, 'anasayfaiki']);
Route::GET('/güneşgözlükleri/{id}', [FirstController::class, 'güneşgözlükleri']);
Route::GET('numaralıgözlükler/{id}', [FirstController::class, 'numaralıgözlükler']);
Route::GET('lensler/{id}', [FirstController::class, 'lensler']);
Route::GET('vizyonmisyon/{id}', [FirstController::class, 'vizyonmisyon']);
Route::GET('hakkımızda/{id}', [FirstController::class, 'hakkımızda']);
Route::GET('iletişim/{id}', [FirstController::class, 'iletişim']);
Route::GET('ürünleriki/güneşgözlükleri/{id}', [FirstController::class, 'güneşgözlükleri']);
Route::GET('ürünleriki/numaralıgözlükler/{id}', [FirstController::class, 'numaralıgözlükler']);
Route::GET('ürünleriki/lensler/{id}', [FirstController::class, 'lensler']);
Route::GET('güneşgözlükleri/numaralıgözlükler/{id}', [FirstController::class, 'numaralıgözlükler']);
Route::GET('ürünleriki/güneşgözlükleri/numaralıgözlükler/{id}', [FirstController::class, 'numaralıgözlükler']);
Route::GET('ürünleriki/güneşgözlükleri/numaralıgözlükler/güneşgözlükleri/{id}', [FirstController::class, 'numaralıgözlükler']);
Route::GET('ürünleriki/güneşgözlükleri/numaralıgözlükler/lensler/{id}', [FirstController::class, 'numaralıgözlükler']);
Route::GET('ürünleriki/güneşgözlükleri/lensler/{id}', [FirstController::class, 'numaralıgözlükler']);
Route::GET('güneşgözlükleri/lensler/{id}', [FirstController::class, 'lensler']);
Route::GET('kullanıcıgetir/{id}', [FirstController::class, 'kullanıcıgetir']);
Route::GET('ürüngüncelle/{id}/{idiki}', [FirstController::class, 'ürüngüncelle']);
Route::post('ürüngüncellemeiki/{id}/{idiki}', [FirstController::class, 'ürüngüncellemeiki']);
Route::GET('hesabısil/{id}/{idiki}', [FirstController::class, 'hesabısil']);
Route::GET('hesabıdondur/{id}/{idiki}', [FirstController::class, 'hesabıdondur']);
Route::GET('hesabıaktifet/{id}/{idiki}', [FirstController::class, 'hesabıaktifet']);
Route::GET('sliderekle/{id}', [FirstController::class, 'sliderekle']);
Route::POST('sliderekleme/{id}', [FirstController::class, 'sliderekleme']);
Route::GET('inaktifet/{id}', [FirstController::class, 'inaktifet']);
Route::GET('aktifet/{id}', [FirstController::class, 'aktifet']);
Route::GET('sepetçıkar/{id}/{idiki}', [FirstController::class, 'sepetçıkar']);
Route::GET('ürünayrıntı/{id}/{idiki}', [FirstController::class, 'ürünayrıntı']);
Route::GET('ürünüsil/{id}/{idiki}', [FirstController::class, 'ürünüsil']);
Route::GET('ürünüinaktifet/{id}/{idiki}', [FirstController::class, 'ürünüinaktifet']);
Route::GET('ürünüaktifet/{id}/{idiki}', [FirstController::class, 'ürünüaktifet']);
Route::GET('ürünayrıntıiki/{id}', [FirstController::class, 'ürünayrıntıiki']);
Route::get('ürünlerwelcome', [FirstController::class, 'ürünlerwelcome']);
Route::get('vizyonwelcome', [FirstController::class, 'vizyonwelcome']);
Route::get('hakkımızdawelcome', [FirstController::class, 'hakkımızdawelcome']);
Route::get('iletişimwelcome', [FirstController::class, 'iletişimwelcome']);
Route::GET('güneşgözlükleriwelcome', [FirstController::class, 'güneşgözlükleriwelcome']);
Route::GET('numaralıwelcome', [FirstController::class, 'numaralıwelcome']);
Route::GET('lenswelcome', [FirstController::class, 'lenswelcome']);
Route::GET('iletişim/{id}', [FirstController::class, 'iletişim']);
Route::GET('hakkımızda/{id}', [FirstController::class, 'hakkımızda']);
Route::GET('sepetonaylaiki/{id}/{idiki}', [FirstController::class, 'sepetonaylaiki']);
Route::GET('tamam/{id}/{idiki}', [FirstController::class, 'tamam']);
Route::GET('siparisdurum/{id}', [FirstController::class, 'siparisdurum']);
Route::GET('siparisonay/{id}/{idiki}', [FirstController::class, 'siparisonay']);
Route::GET('siparisiptal/{id}/{idiki}', [FirstController::class, 'siparisiptal']);
Route::GET('geçmiş/{id}', [FirstController::class, 'geçmiş']);
Route::GET('geçmişiki/{id}', [FirstController::class, 'geçmişiki']);
Route::GET('adminanasayfa/{id}', [FirstController::class, 'adminanasayfa']);
Route::GET('sayfa', [FirstController::class, 'sayfa']);



