<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\ürünler;
use Illuminate\Support\Facades\Response;
use App\Models\sepet;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Mail\ContactMailiki;
use App\Mail\mailbir;
class FirstController extends Controller
{
    public function admingiris() {

        return view('admingiris');
    }
    public function anasayfa() {

        $dataeksi= DB::table('footer')->get();
        $data= DB::table('slider')->get();
        $dataiki= DB::table('ürünlers')->where('durum','aktif')->get();
        return view('welcome',array('footer'=>$dataeksi,'slider'=>$data,'ürün'=>$dataiki));
    }
    public function ürünlerwelcome() {

        $dataeksi= DB::table('footer')->get();
        $dataiki= DB::table('ürünlers')->where('durum','aktif')->get();
        return view('ürünlerwelcome',array('footer'=>$dataeksi,'ürün'=>$dataiki));
    }
    public function vizyonwelcome() {

        $dataeksi= DB::table('vizyon')->get();
        $data= DB::table('footer')->get();
        return view('vizyonwelcome',array('numara'=>$dataeksi,'footer'=>$data));
    }
    public function iletişimwelcome() {

        $dataeksi= DB::table('iletisim')->get();
        $data= DB::table('footer')->get();
        return view('iletişimwelcome',array('numara'=>$dataeksi,'footer'=>$data));
    }
    public function hakkımızdawelcome() {

        $dataeksi= DB::table('hakkımızda')->get();
        $data= DB::table('footer')->get();
        return view('hakkımızdawelcome',array('numara'=>$dataeksi,'footer'=>$data));
    }

    public function güneşgözlükleriwelcome() {

        $dataeksi= DB::table('footer')->get();
        $dataiki= DB::table('ürünlers')->where('durum','aktif')->where('tür','güneş gözlüğü')->get();
        return view('güneşgözlükleriwelcome',array('footer'=>$dataeksi,'ürün'=>$dataiki));
    }
    public function numaralıwelcome() {

        $dataeksi= DB::table('footer')->get();
        $dataiki= DB::table('ürünlers')->where('durum','aktif')->where('tür','numaralı')->get();
        return view('numaralıwelcome',array('footer'=>$dataeksi,'ürün'=>$dataiki));
    }
    public function lenswelcome() {

        $dataeksi= DB::table('footer')->get();
        $dataiki= DB::table('ürünlers')->where('durum','aktif')->where('tür','lens')->get();
        return view('lenswelcome',array('footer'=>$dataeksi,'ürün'=>$dataiki));
    }
    public function vizyonmisyon($id) {

        $data= DB::table('kullanıcılar')->where('id',$id)->get();
        $dataüc= DB::table('footer')->get();
        $datadört=DB::table('sepet')->where('kullanıcıid',$id)->count();
        $databes=DB::table('vizyon')->get();
        return view('vizyonmisyon',array('ad'=>$data,'footer'=>$dataüc,'numara'=>$databes))->with ('variable',$datadört);

    }
    public function iletişim($id) {

        $data= DB::table('kullanıcılar')->where('id',$id)->get();
        $dataüc= DB::table('footer')->get();
        $datadört=DB::table('sepet')->where('kullanıcıid',$id)->count();
        $databes=DB::table('iletisim')->get();
        return view('iletişim',array('ad'=>$data,'footer'=>$dataüc,'numara'=>$databes))->with ('variable',$datadört);

    }
    public function hakkımızda($id) {

        $data= DB::table('kullanıcılar')->where('id',$id)->get();
        $dataüc= DB::table('footer')->get();
        $datadört=DB::table('sepet')->where('kullanıcıid',$id)->count();
        $databes=DB::table('hakkımızda')->get();
        return view('hakkımızda',array('ad'=>$data,'footer'=>$dataüc,'numara'=>$databes))->with ('variable',$datadört);

    }
    public function kayıtol() {

        return view('kayıtol');
    }
    public function ürünler() {

        return view('ürünler');
    }
    public function admingirisiki() {

        return view('admingirisiki');
    }
    public function ürünekle($id) {
        $data= DB::table('admin')->where('id',$id)->get();
        return view('ürünekle',array('ad'=>$data));

    }
    public function ürünlistesi($id) {
        $data= DB::table('admin')->where('id',$id)->get();
        $dataiki= DB::table('ürünlers')->get();
        $aktif= DB::table('ürünlers')->where('durum','aktif')->get();
        $inaktif= DB::table('ürünlers')->where('durum','inaktif')->get();

  return view('ürünlistesi',array('ürün'=>$dataiki,'ad'=>$data,'aktif'=>$aktif,'inaktif'=>$inaktif));


    }
    public function vizyonekle($id) {

        $data= DB::table('admin')->where('id',$id)->get();
        return view('vizyonekle',array('ad'=>$data));
    }
    public function iletisimekle($id) {
        $data= DB::table('admin')->where('id',$id)->get();
        return view('iletisimekle',array('ad'=>$data));
    }
    public function ürüngüncelle($id,$idiki) {
        $data= DB::table('ürünlers')->where('id',$id)->get();
        $dataeksi= DB::table('admin')->where('id',$idiki)->get();
        return view('ürüngüncelle',array('ad'=>$dataeksi,'ürün'=>$data));
    }
    public function ürüngüncellemeiki(Request $request, $id,$idiki) {

        $dataeksi= DB::table('admin')->where('id',$id)->get();
        $ürünad= $request->ürünadı;
        $ürünfiyat= $request->fiyat;
        $ürüncinsiyet= $request->cinsiyet;
        $ürünmalzeme= $request->malzeme;
        $ürüntür= $request->tür;
        $ürünadet= $request->adet;
        $ürünacıklama= $request->acıklama;
        if($request->hasfile('resim')){
            $resim=$request->file('resim');
            $extension=$resim->getClientOriginalExtension();
            $resimiki = time(). '.' .$extension;
            $resim->move('public/images/',$resimiki);

        }
        DB::update('update ürünlers set ürünadı=?,fiyat=?,cinsiyet=?,malzeme=?,tür=?,adet=?,açıklama=?,resim=? where id = ?',[$ürünad,$ürünfiyat,$ürüncinsiyet,$ürünmalzeme,$ürüntür,$ürünadet,$ürünacıklama,$resimiki,$idiki]);
        return view('admin',array('ad'=>$dataeksi));
    }
    public function kayıtgiris(Request $request) {

        $ad= $request->Ad;
        $soyad= $request->Soyad;
        $sifre= $request->Sifre;
        $email= $request->Email;
       $sifreiki=password_hash($sifre,PASSWORD_DEFAULT);
        $telefon= $request->TelefonNo;

        DB::table('kullanıcılar')->insert(
            array(
                   'ad'     =>$ad,
                   'soyad'   =>$soyad,
                   'sifre'     =>$sifreiki,
                   'email'     =>$email,
                   'telefon'   =>$telefon,
                   'hesap'=>'aktif'


            ));
     return redirect('admingiris')->with('status','Hesabınız Oluşturuldu.' );
    }
    public function kullanıcıgiris(Request $request) {

        $sifre= $request->Sifre;
        $numara= $request->email;
        $users = DB::table('kullanıcılar')->where('email', $numara)->value('sifre');
        $data= DB::table('kullanıcılar')->where('email', $numara)->get();
        //$data = DB::select('select * from yonetıcıs')->where('numara', $numara);
        if (Hash::check($sifre, $users)){
            $data= DB::table('kullanıcılar')->where('email',$numara)->get();
            $id=DB::table('kullanıcılar')->where('email',$numara)->value('id');
            $dataiki= DB::table('ürünlers')->where('durum','aktif')->get();
            $dataüc= DB::table('footer')->get();
            $datadört=DB::table('sepet')->where('kullanıcıid',$id)->count();
            $databes=DB::table('slider')->get()->all();
      return view('welcome2',array('ad'=>$data,'ürün'=>$dataiki,'footer'=>$dataüc,'slider'=>$databes))->with ('variable',$datadört);

   }
  else {
    return redirect('admingiris')->with('status','Hatalı Giriş' );
  }
}
public function admingirisüc(Request $request) {

    $sifre= $request->Sifre;
    $numara= $request->email;
    $users = DB::table('admin')->where('email', $numara)->value('sifre');
    $data= DB::table('admin')->where('email', $numara)->get();
    //$data = DB::select('select * from yonetıcıs')->where('numara', $numara);
    if (Hash::check($sifre, $users)){
        $data= DB::table('admin')->where('email',$numara)->get();
  return view('admin',array('ad'=>$data));

}
else {
//return redirect('admingirisiki')->with('status','Hatalı Giriş' );
}
}
public function ürünekleme(Request $request,$id) {
    $ürünler= new ürünler;
    $ürünler->ürünadı= $request->ürünadı;
    $ürünler->fiyat= $request->fiyat;
    $ürünler->cinsiyet= $request->cinsiyet;
    $ürünler->malzeme= $request->malzeme;
    $ürünler->tür= $request->tür;
    $ürünler->adet= $request->adet;
    $ürünler->açıklama= $request->açıklama;
    $ürünler->durum= 'aktif';
    if($request->hasfile('resim')){
        $resim=$request->file('resim');
        $extension=$resim->getClientOriginalExtension();
        $resimiki = time(). '.' .$extension;
        $resim->move('public/images/',$resimiki);
        $ürünler->resim=$resimiki;
    }
    $ürünler->save();
    $data= DB::table('admin')->where('id',$id)->get();
  return view('admin',array('ad'=>$data));
}
public function deneme($id) {
    $dataeksi= DB::table('kullanıcılar')->where('id',$id)->get();
    $dataiki= DB::table('ürünlers')->get();
    $dataüc= DB::table('footer')->get();
    $data= DB::table('kullanıcılar')->where('hesap','aktif')->where('id',$id)->get();
    $datadört= DB::table('kullanıcılar')->where('hesap','inaktif')->where('id',$id)->get();
    $databes=DB::table('sepet')->where('kullanıcıid',$id)->count();
    return view('profil',array('ad'=>$dataeksi,'ürün'=>$dataiki,'footer'=>$dataüc,'aktif'=>$data,'inaktif'=>$datadört))->with ('variable',$databes);
}
public function vizyonekleme(Request $request) {

    $bir= $request->bir;
    $iki= $request->iki;

    $id=DB::table('vizyon')->value('id');
    if($id==NULL){
        DB::table('vizyon')->insert(
            array(
                   'vizyon'     =>$bir,
                   'misyon'   =>$iki,



            ));
     return view('admin');
    }
    else{
        $id=DB::table('vizyon')->value('id');
        DB::update('update vizyon set vizyon = ?,misyon=? where id = ?',[$bir,$iki,$id]);
        return view('admin');


    }



}
public function iletisimekleme(Request $request) {

    $bir= $request->bir;
    $iki= $request->iki;
    $üc= $request->üc;
    $dört= $request->dört;
    $bes= $request->bes;
    $altı= $request->altı;

    $id=DB::table('iletisim')->value('id');
    if($id==NULL){
        DB::table('iletisim')->insert(
            array(
                   'ad'     =>$bir,
                   'numara'   =>$iki,
                   'faks'     =>$üc,
                   'adres'   =>$dört,
                   'email'     =>$bes,
                   'harita'   =>$altı,



            ));
     return view('admin');
    }
    else{
        $id=DB::table('iletisim')->value('id');
        DB::update('update iletisim set ad = ?,numara=?,faks = ?,adres=?,email = ?,harita=? where id = ?',[$bir,$iki,$üc,$dört,$bes,$altı,$id]);
        return view('admin');


    }
}
public function hakkımızdaekle($id) {

    $data= DB::table('admin')->where('id',$id)->get();
    return view('hakkımızdaekle',array('ad'=>$data));
}
public function adminanasayfa($id) {

    $data= DB::table('admin')->where('id',$id)->get();
    return view('admin',array('ad'=>$data));
}
public function hakkımızdaekleme(Request $request) {
    $baslık= $request->baslık;
    $bir= $request->bir;
    $iki= $request->iki;
    $üc= $request->üc;
    $id=DB::table('hakkımızda')->value('id');
    if($id==NULL){
        DB::table('hakkımızda')->insert(
            array(
                   'bir'     =>$bir,
                   'iki'   =>$iki,
                   'üc'     =>$üc,
                   'baslık'     =>$baslık,


            ));
     return view('admin');
    }
    else{
        $id=DB::table('hakkımızda')->value('id');
        DB::update('update hakkımızda set bir = ?,iki=?,üc=?,baslık=? where id = ?',[$bir,$iki,$üc,$baslık,$id]);
        return view('admin');


    }



}
public function footerekle($id) {

    $data= DB::table('admin')->where('id',$id)->get();
    return view('footerekle',array('ad'=>$data));
}
public function footerekleme(Request $request) {

    $bir= $request->bir;
    $iki= $request->iki;
    $üc= $request->üc;
    $dört= $request->dört;

    $id=DB::table('footer')->value('id');
    if($id==NULL){
        DB::table('footer')->insert(
            array(
                   'hakkımızda'     =>$dört,
                   'adres'   =>$bir,
                   'telefon'     =>$iki,
                   'mail'   =>$üc,




            ));
     return view('admin');
    }
    else{
        $id=DB::table('footer')->value('id');
        DB::update('update footer set hakkımızda = ?,adres=?,telefon = ?,mail = ? where id = ?',[$dört,$bir,$iki,$üc,$id]);
        return view('admin');


    }



}
public function profilgüncelle(Request $request,$id) {
    $bir= $request->ad;
    $iki= $request->soyad;
    $üc= $request->telefon;
    $dört= $request->email;
    $beş= $request->sifre;
    $sifreiki=password_hash($beş,PASSWORD_DEFAULT);

    DB::update('update kullanıcılar set ad=?,soyad=?,telefon=?,email=?,sifre=? where id = ?',[$bir,$iki,$üc,$dört,$sifreiki,$id]);
    $dataeksi= DB::table('kullanıcılar')->where('id',$id)->get();
    $dataüc= DB::table('footer')->get();
    return view('profil',array('ad'=>$dataeksi,'footer'=>$dataüc));
}
public function denemeiki($id) {
    $dataeksi= DB::table('admin')->where('id',$id)->get();
    return view('adminprofil',array('ad'=>$dataeksi));
}
public function adminprofilgüncelle(Request $request,$id) {
    $bir= $request->ad;
    $iki= $request->soyad;
    $üc= $request->telefon;
    $dört= $request->email;
    $beş= $request->sifre;
    $sifreiki=password_hash($beş,PASSWORD_DEFAULT);

    DB::update('update admin set ad=?,soyad=?,telefon=?,email=?,sifre=? where id = ?',[$bir,$iki,$üc,$dört,$sifreiki,$id]);
    $dataeksi= DB::table('admin')->where('id',$id)->get();
    return view('adminprofil',array('ad'=>$dataeksi));
}
public function sepet($id)
{
    //$numara= $request->email;
    $data= DB::table('kullanıcılar')->where('id',$id)->get();
    $dataiki= DB::table('ürünlers')->get();
    $dataüc= DB::table('footer')->get();
    $datadört=DB::table('sepet')->where('kullanıcıid',$id)->count();
    $databes=DB::table('sepet')->where('kullanıcıid',$id)->get();
    $fiyat=0;
    for($indis=0; $indis<count($databes);$indis++){
        $fiyat=$fiyat+$databes[$indis]->fiyat;
    }
    return view('sepet',array('ad'=>$data,'ürün'=>$dataiki,'footer'=>$dataüc,'sepet'=>$databes),['variable2'=> $fiyat])->with ('variable',$datadört);
}

public function sepetekle($id,$idiki)
{
    $data= DB::table('kullanıcılar')->where('id',$idiki)->get();
    $databeş= DB::table('ürünlers')->where('id',$id)->value('fiyat');
    $dataaltı= DB::table('ürünlers')->where('id',$id)->value('ürünadı');
    $datayedi= DB::table('ürünlers')->where('id',$id)->value('resim');
    $dataiki= DB::table('ürünlers')->get();
    $dataüc= DB::table('footer')->get();
    $datasekiz=DB::table('slider')->get()->all();
    DB::table('sepet')->insert(
        array(
               'kullanıcıid'     =>$idiki,
               'ürünid'   =>$id,
               'fiyat'=>$databeş,
               'ürünadı'=>$dataaltı,
               'resim'=>$datayedi,

        ));
        $datadört=DB::table('sepet')->where('kullanıcıid',$idiki)->count();
        return view('welcome2',array('ad'=>$data,'ürün'=>$dataiki,'footer'=>$dataüc,'slider'=>$datasekiz))->with ('variable',$datadört);
}

public function ürünleriki($id) {

    $data= DB::table('kullanıcılar')->where('id',$id)->get();
    $dataiki= DB::table('ürünlers')->where('durum','aktif')->get();
    $dataüc= DB::table('footer')->get();
    $datadört=DB::table('sepet')->where('kullanıcıid',$id)->count();
    return view('ürünleriki',array('ad'=>$data,'ürün'=>$dataiki,'footer'=>$dataüc))->with ('variable',$datadört);
}
public function güneşgözlükleri($id) {

    $data= DB::table('kullanıcılar')->where('id',$id)->get();
    $dataiki= DB::table('ürünlers')->where('durum','aktif')->where('tür','güneş gözlüğü')->get();
    $dataüc= DB::table('footer')->get();
    $datadört=DB::table('sepet')->where('kullanıcıid',$id)->count();
    return view('güneşgözlükleri',array('ad'=>$data,'ürün'=>$dataiki,'footer'=>$dataüc))->with ('variable',$datadört);
}
public function lensler($id) {

    $data= DB::table('kullanıcılar')->where('id',$id)->get();
    $dataiki= DB::table('ürünlers')->where('durum','aktif')->where('tür','lens')->get();
    $dataüc= DB::table('footer')->get();
    $datadört=DB::table('sepet')->where('kullanıcıid',$id)->count();
    return view('lensler',array('ad'=>$data,'ürün'=>$dataiki,'footer'=>$dataüc))->with ('variable',$datadört);
}
public function numaralıgözlükler($id) {

    $data= DB::table('kullanıcılar')->where('id',$id)->get();
    $dataiki= DB::table('ürünlers')->where('durum','aktif')->where('tür','numaralı')->get();
    $dataüc= DB::table('footer')->get();
    $datadört=DB::table('sepet')->where('kullanıcıid',$id)->count();
    return view('numaralıgözlükler',array('ad'=>$data,'ürün'=>$dataiki,'footer'=>$dataüc))->with ('variable',$datadört);
}

public function kullanıcıgetir($id) {

    $data= DB::table('admin')->where('id',$id)->get();
    $dataiki= DB::table('kullanıcılar')->where('hesap','aktif')->get();
    $dataüc= DB::table('kullanıcılar')->where('hesap','inaktif')->get();
    return view('kullanıcıislemleri',array('ad'=>$data,'kullanıcılar'=>$dataiki,'kullanıcılariki'=>$dataüc));
}
public function hesabıdondur($id,$idiki) {

    $data= DB::table('admin')->where('id',$idiki)->get();
    $dataiki= DB::table('kullanıcılar')->where('hesap','aktif')->get();
    $dataüc= DB::table('kullanıcılar')->where('hesap','inaktif')->get();
    DB::update('update kullanıcılar set hesap = ? where id = ?',['inaktif',$id]);
    return view('kullanıcıislemleri',array('ad'=>$data,'kullanıcılar'=>$dataiki,'kullanıcılariki'=>$dataüc));
}
public function hesabısil($id,$idiki) {

    $data= DB::table('admin')->where('id',$idiki)->get();
    DB::table('kullanıcılar')->where('id',$id)->delete();
    $dataiki= DB::table('kullanıcılar')->where('hesap','aktif')->get();
    $dataüc= DB::table('kullanıcılar')->where('hesap','inaktif')->get();
    return view('kullanıcıislemleri',array('ad'=>$data,'kullanıcılar'=>$dataiki,'kullanıcılariki'=>$dataüc));
}
public function hesabıaktifet($id,$idiki) {

    $data= DB::table('admin')->where('id',$idiki)->get();
    $dataiki= DB::table('kullanıcılar')->where('hesap','aktif')->get();
    $dataüc= DB::table('kullanıcılar')->where('hesap','inaktif')->get();
    DB::update('update kullanıcılar set hesap = ? where id = ?',['aktif',$id]);
    return view('kullanıcıislemleri',array('ad'=>$data,'kullanıcılar'=>$dataiki,'kullanıcılariki'=>$dataüc));
}
public function sliderekle($id) {

    $data= DB::table('admin')->where('id',$id)->get();
    return view('sliderekle',array('ad'=>$data));
}
public function sliderekleme(Request $request,$id) {
    $ürünbaslık= $request->baslık;
    $ürünbaslıkiki= $request->baslıkiki;
    $ürünyazı= $request->yazı;
    if($request->hasfile('resim')){
        $resim=$request->file('resim');
        $extension=$resim->getClientOriginalExtension();
        $resimiki = time(). '.' .$extension;
        $resim->move('public/images/',$resimiki);
    }
    DB::table('slider')->insert(
        array(
               'baslık'     =>$ürünbaslık,
               'baslık2'   =>$ürünbaslıkiki,
               'yazı'     =>$ürünyazı,
               'resim'=>$resimiki,

        ));
    $data= DB::table('admin')->where('id',$id)->get();
    return view('admin',array('ad'=>$data));
}
public function aktifet($id) {

    $data= DB::table('kullanıcılar')->where('id',$id)->get();
     $dataüc= DB::table('footer')->get();
     $datadört=DB::table('sepet')->where('kullanıcıid',$id)->count();

    DB::update('update kullanıcılar set hesap = ? where id = ?',['aktif',$id]);
    $dataiki= DB::table('kullanıcılar')->where('hesap','aktif')->where('id',$id)->get();
     $databes= DB::table('kullanıcılar')->where('hesap','inaktif')->where('id',$id)->get();
    return view('profil',array('ad'=>$data,'footer'=>$dataüc,'aktif'=>$dataiki,'inaktif'=>$databes))->with ('variable',$datadört);
}
public function inaktifet($id) {

    $data= DB::table('kullanıcılar')->where('id',$id)->get();
     $dataüc= DB::table('footer')->get();
     $datadört=DB::table('sepet')->where('kullanıcıid',$id)->count();

    DB::update('update kullanıcılar set hesap = ? where id = ?',['inaktif',$id]);
    $dataiki= DB::table('kullanıcılar')->where('hesap','aktif')->where('id',$id)->get();
     $databes= DB::table('kullanıcılar')->where('hesap','inaktif')->where('id',$id)->get();
    return view('profil',array('ad'=>$data,'footer'=>$dataüc,'aktif'=>$dataiki,'inaktif'=>$databes))->with ('variable',$datadört);
}
public function sepetçıkar($id,$idiki) {

    $data= DB::table('kullanıcılar')->where('id',$idiki)->get();
    DB::table('sepet')->where('id',$id)->delete();
    $dataüc= DB::table('footer')->get();
    $datadört=DB::table('sepet')->where('kullanıcıid',$idiki)->count();
    $databes=DB::table('sepet')->where('kullanıcıid',$idiki)->get();
    $fiyat=0;
    for($indis=0; $indis<count($databes);$indis++){
        $fiyat=$fiyat+$databes[$indis]->fiyat;
    }
    return view('sepet',array('ad'=>$data,'footer'=>$dataüc,'sepet'=>$databes),['variable2'=> $fiyat])->with ('variable',$datadört);
}
public function ürünayrıntı($id,$idiki) {

    $data= DB::table('kullanıcılar')->where('id',$idiki)->get();
    $dataüc= DB::table('footer')->get();
    $datadört=DB::table('sepet')->where('kullanıcıid',$idiki)->count();
    $databes=DB::table('ürünlers')->where('id',$id)->get();
    return view('ürünayrıntı',array('ad'=>$data,'footer'=>$dataüc,'sepet'=>$databes))->with ('variable',$datadört);
}
public function ürünüsil($id,$idiki) {

    $data= DB::table('admin')->where('id',$idiki)->get();
    DB::table('ürünlers')->where('id',$id)->delete();
    DB::table('sepet')->where('ürünid',$id)->delete();
    $databes=DB::table('ürünlers')->get();
    return view('ürünlistesi',array('ad'=>$data,'ürün'=>$databes,''));
}
public function ürünüinaktifet($id,$idiki) {

    $data= DB::table('admin')->where('id',$idiki)->get();
    DB::update('update ürünlers set durum = ? where id = ?',['inaktif',$id]);
    $dataiki= DB::table('ürünlers')->where('durum','aktif')->where('id',$id)->get();
     $databes= DB::table('ürünlers')->where('durum','inaktif')->where('id',$id)->get();
     $dataaltı= DB::table('ürünlers')->get();
    return view('ürünlistesi',array('ad'=>$data,'aktif'=>$dataiki,'inaktif'=>$databes,'ürün'=>$dataaltı));
}
public function ürünüaktifet($id,$idiki) {

    $data= DB::table('admin')->where('id',$idiki)->get();
    DB::update('update ürünlers set durum = ? where id = ?',['aktif',$id]);
    $dataiki= DB::table('ürünlers')->where('durum','aktif')->where('id',$id)->get();
     $databes= DB::table('ürünlers')->where('durum','inaktif')->where('id',$id)->get();
     $dataaltı= DB::table('ürünlers')->get();
    return view('ürünlistesi',array('ad'=>$data,'aktif'=>$dataiki,'inaktif'=>$databes,'ürün'=>$dataaltı));
}
public function ürünayrıntıiki($id) {

    $dataüc= DB::table('footer')->get();
    $databes=DB::table('ürünlers')->where('id',$id)->get();
    return view('ürünayrıntıiki',array('footer'=>$dataüc,'sepet'=>$databes));
}
public function anasayfaiki($id){
    $data=DB::table('kullanıcılar')->where('id',$id)->get();
    $dataiki= DB::table('ürünlers')->where('durum','aktif')->get();
    $dataüc= DB::table('footer')->get();
    $datadört=DB::table('sepet')->where('kullanıcıid',$id)->count();
    $databes=DB::table('slider')->get()->all();
return view('welcome2',array('ad'=>$data,'ürün'=>$dataiki,'footer'=>$dataüc,'slider'=>$databes))->with ('variable',$datadört);

}
public function sepetonaylaiki($id,$idiki){
    $data=DB::table('kullanıcılar')->where('id',$id)->get();
    $dataiki= DB::table('ürünlers')->where('durum','aktif')->get();
    $dataüc= DB::table('footer')->get();
    $datadört=DB::table('sepet')->where('kullanıcıid',$id)->count();
    $databes=DB::table('slider')->get()->all();
return view('sepetonay',array('ad'=>$data,'ürün'=>$dataiki,'footer'=>$dataüc,'slider'=>$databes),['variable2'=> $idiki])->with ('variable',$datadört);

}
public function tamam($id,$idiki){
    $data=DB::table('kullanıcılar')->where('id',$id)->get();
    $dataoniki=DB::table('kullanıcılar')->where('id',$id)->value('ad');
    $dataonüc=DB::table('kullanıcılar')->where('id',$id)->value('soyad');
    $dataiki= DB::table('ürünlers')->where('durum','aktif')->get();
    $dataüc= DB::table('footer')->get();

    $dataaltı=DB::table('sepet')->where('kullanıcıid',$id)->get();
    $databes=DB::table('slider')->get()->all();

    if($data[0]->hesap=='inaktif'){
        $datadört=DB::table('sepet')->where('kullanıcıid',$id)->count();
        return  redirect('sepetonaylaiki/'.$id.'/'.$idiki)->with('status','Hesabınız inaktif durumda alışverişi tamamlamak için lütfen aktif ediniz.' );

    }else{
    $ids="";
    $idsiki="";
    for($indis=0; $indis<count($dataaltı);$indis++){
        $dataon=DB::table('ürünlers')->where('id',$dataaltı[$indis]->ürünid)->value('ürünadı');
        $dataonbir=DB::table('ürünlers')->where('id',$dataaltı[$indis]->ürünid)->value('id');
        $ids=$ids." Ürün Adı: ".$dataon." Ürün id: ".$dataonbir;
        $idsiki=$idsiki." Ürün Adı: ".$dataon." ";
    };

    DB::table('siparis')->insert(
        array(
               'kullanıcıid'     =>$id,

               'kullanıcıadı'  =>"$dataoniki $dataonüc",
            'ürünid'   =>$ids,
'tutar'=>$idiki,
               'durum'=>'beklemede'


        ));
        DB::table('sepet')->where('kullanıcıid',$id)->delete();
        $datadört=DB::table('sepet')->where('kullanıcıid',$id)->count();
        $siparis = [
            'name' => $data[0]->ad." ".$data[0]->soyad,
            'tutar' => $idiki,
            'detay' => $idsiki,
            'email' =>$data[0]->email,
            'durum' =>'beklemede'
          ];
          Mail::to($siparis['email']) -> send(new ContactMail($siparis));
return view('welcome2',array('ad'=>$data,'ürün'=>$dataiki,'footer'=>$dataüc,'slider'=>$databes),['variable2'=> $idiki])->with ('variable',$datadört);
    }
}
public function siparisdurum($id) {

    $data= DB::table('admin')->where('id',$id)->get();
    $dataiki= DB::table('siparis')->where('durum','beklemede')->get();
    return view('siparisdurum',array('ad'=>$data,'siparis'=>$dataiki));
}
public function siparisonay($id,$idiki) {


    DB::update('update siparis set durum = ? where id = ?',['onaylandı',$id]);
    $data= DB::table('admin')->where('id',$idiki)->get();
    $dataüc= DB::table('siparis')->where('id',$id)->value('tutar');
    $datadört= DB::table('siparis')->where('id',$id)->value('ürünid');
    $databes= DB::table('siparis')->where('id',$id)->value('durum');
    $dataaltı= DB::table('siparis')->where('id',$id)->value('kullanıcıid');
    $datayedi=DB::table('kullanıcılar')->where('id',$dataaltı)->value('email');
    $datasekiz=DB::table('kullanıcılar')->where('id',$dataaltı)->get();
    $siparis = [
        'name' => $datasekiz[0]->ad." ".$datasekiz[0]->soyad,
        'tutar' => $dataüc,
        'detay' => $datadört,
        'durum' => $databes,
        'email' =>$datayedi,

      ];
      Mail::to($siparis['email']) -> send(new ContactMail($siparis));

    $dataiki= DB::table('siparis')->where('durum','beklemede')->get();
    return view('siparisdurum',array('ad'=>$data,'siparis'=>$dataiki));
}
public function siparisiptal($id,$idiki) {


    DB::update('update siparis set durum = ? where id = ?',['iptal edildi',$id]);
    $data= DB::table('admin')->where('id',$idiki)->get();
    $dataiki= DB::table('siparis')->where('durum','beklemede')->get();
    return view('siparisdurum',array('ad'=>$data,'siparis'=>$dataiki));
}
public function geçmiş($id) {

    $data= DB::table('admin')->where('id',$id)->get();
    $dataiki= DB::table('siparis')->get();
    return view('geçmiş',array('ad'=>$data,'siparis'=>$dataiki));
}
public function geçmişiki($id) {

    $data= DB::table('kullanıcılar')->where('id',$id)->get();
    $dataiki= DB::table('siparis')->where('kullanıcıid',$id)->get();
    $footer= DB::table('footer')->get();
    $datadört=DB::table('sepet')->where('kullanıcıid',$id)->count();
    return view('geçmişiki',array('ad'=>$data,'siparis'=>$dataiki,'footer'=>$footer))->with ('variable',$datadört);
}
public function sayfa(){

    return view('webapı');
}
}
