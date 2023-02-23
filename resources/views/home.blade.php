@extends('layouts.main')
@section('body')

<div class="tombolKeHome"></div>
<div class="tombolKeFitur"></div>
<div class="tombolKePaket"></div>
<div class="tombolKeFooter"></div>
<div class="wa"><a href="https://web.whatsapp.com/send?phone=6285721911444&text=Hai Wedding Project, Saya ingin memesan..."><i class="fa-brands fa-whatsapp fa-2x"></i></a><h6>Whatsapp</h6></div>

{{------------------------------- SECTION 1 ----------------------------------}}
{{----------------------------------------------------------------------------}}

<div id="sec1" class="section1">
    <img class="flower1" src="{{ url('/img/flower_pink.png') }}" alt="">
    <img class="kelopak1 " src="/img/kelopak1.png" alt="">
    <img class="kelopak2 " src="/img/kelopak2.png" alt="">
    <img class="kelopak3 " src="/img/kelopak3.png" alt="">
    <div class="container-fluid">
        <div class="row text-align-center">
            <div class="col-12" style="top: 50px">
                <div class="mainTitle">
                    <h1>Wedding Project</h1>
                </div>
            </div>
        </div>   

    </div>
    <div class="gambarProduct">
        <img class="imgPreviewP" src="{{ url('img/iPhone.png') }}" alt="">
    </div>
    
</div>
{{------------------------------- SECTION 2 ----------------------------------}}
{{----------------------------------------------------------------------------}}
<div id="sec2" class="section2">
    <div class="container-fluid">
        <div class="row text-align-center">
            <div class="col-12" style="top: 50px">
                <div class="mainTitle2">
                    <h3>Kenapa harus memilih kami</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="sec2Pembungkus">
        <div class="sec2Card">
            <ul>
                <li>
                    <i class="fas fa-user-friends fa-5x icon"></i>
                </li>
                <li>
                    <h3>Unlimited</h3>
                </li>
                <li>
                    <p>Undangan dapat dikirim sebanyak apapun tanpa batasan seperti undangan fisik.</p>
                </li>
            </ul>
        </div>
        <div class="sec2Card">
            <ul>
                <li>
                    <i class="fas fa-walking fa-5x icon"></i>
                </li>
                <li>
                    <h3>Flexible</h3>
                </li>
                <li>
                    <p>Undangan dapat dikirim dan diterima dimanapun dan kapanpun</p>
                </li>
            </ul>
        </div>
        <div class="sec2Card">
            <ul>
                <li>
                    <i class="far fa-clock fa-5x icon"></i>
                </li>
                <li>
                    <h3>Proses Cepat</h3>
                </li>
                <li>
                    <p>Proses pembuatan cepat, pesan sekarang besok jadi</p>
                </li>
            </ul>
        </div>
        <div class="sec2Card">
            <ul>
                <li>
                    <i class="fas fa-dollar-sign fa-5x icon"></i>
                </li>
                <li>
                    <h3>Harga Pas</h3>
                </li>
                <li>
                    <p>Harga dijamin pas di dompet sesuai pilihan anda</p>
                </li>
            </ul>
        </div>
        <div class="sec2Card">
            <ul>
                <li>
                    <i class="fas fa-clipboard-list fa-5x icon"></i>
                </li>
                <li>
                    <h3>RSVP</h3>
                </li>
                <li>
                    <p>Anda dapat mengetahui siapa saja yang akan datang dan tidak hadir</p>
                </li>
            </ul>
        </div>
        <div class="sec2Card">
            <ul>
                <li>
                    <i class="fas fa-map-marked-alt fa-5x icon"></i>
                </li>
                <li>
                    <h3>Map Lokasi</h3>
                </li>
                <li>
                    <p>Lokasi undangan anda dengan jelas terbaca oleh penerima undangan</p>
                </li>
            </ul>

        </div>
        <div class="sec2Card">
            <ul>
                <li>
                    <i class="fas fa-check-square fa-5x icon"></i>
                </li>
                <li>
                    <h3>Garansi 100%</h3>
                </li>
                <li>
                    <p>Garansi 100% apabila ada kesalahan dan keterlambatan dari kami</p>
                </li>
            </ul>
        </div>
        <div class="sec2Card">
            <ul>
                <li>
                    <i class="fa-light fa-brush fa-5x icon"></i>
                </li>
                <li>
                    <h3>Design Unik</h3>
                </li>
                <li>
                    <p>Kami Menyediakan Design yang menarik serta background music yang indah.</p>
                </li>
            </ul>
        </div>
    </div>
    
</div>
{{------------------------------- SECTION 3 ----------------------------------}}
{{----------------------------------------------------------------------------}}
<div id="sec3" class="section3">
    <div class="container-fluid">
        <div class="row text-align-center">
            <div class="col-12" style="top: 50px">
                <div class="mainTitle3">
                    <h3>Pilih tema sesuai selera dan yang anda inginkan</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="sec3Pembungkus">
        <div class="sec3CardLeft">
             
        </div>
        <div class="sec3CardCenter">

            <div class="tombolSec3">
                <div class="tombolKiriSec3">
                    <i class="leftSec3 fa-solid fa-chevron-left fa-6x"></i>
                </div>
                <div class="tombolKananSec3">
                    <i class="rightSec3 fa-solid fa-chevron-right fa-6x"></i>
                </div> 
            </div>
        </div>
        <div class="sec3CardRight">
            <h3>Nature</h3>
            <hr>
        </div>
        
    </div>
</div>

{{------------------------------- SECTION 4 ----------------------------------}}
{{----------------------------------------------------------------------------}}
<div id="sec4" class="section4">
    <div class="container-fluid">
        <div class="row text-align-center">
            <div class="col-12" style="top: 50px">
                <div class="mainTitle4">
                    <h3>Pilih Paket</h3>
                </div>
            </div>
        </div>
    </div>
    
    <div class="sec4Pembungkus">

        <div class="sec4Card">
            <div class="paketTitle">
                <h4>Terlaris</h4>
                <h5>Rp 99.000 ,-</h5>
                <hr>
            </div>
            <div class="imgCover">
                <img class="imgPhoneCover" src="img/iPhone.png" alt="">
            </div>
            <div class="imgBasic">
                <img class="imgBShow" src="img/paket1.jpg" alt="">
            </div>
            <div class="imgBList">
                <img class="imgB" src="img/paket1.jpg" alt="">
                <img class="imgB" src="img/paket2.jpg" alt="">
                <img class="imgB" src="img/paket3.jpg" alt="">
            </div>
            <div class="tombol">
                <div class="tombolKiri">
                    <i class="left fa-solid fa-chevron-left fa-4x"></i>
                </div>
                <div class="tombolKanan">
                    <i class="right fa-solid fa-chevron-right fa-4x"></i>
                </div> 
            </div>
            <ul>
                <li >
                    <div id="1" class="bullet activeBullet"></div>
                </li>
                <li>
                    <div id="2" class="bullet"></div>
                </li>
                <li>
                    <div id="3" class="bullet"></div>
                </li>
            </ul>                       
            
        </div>

        <div class="sec4CardP">
            <div class="paketTitle">
                <h4>Premium</h4>
                <h5>Rp 150.000 ,-</h5>
                <hr>
            </div>
            <div class="imgCover">
                <img class="imgPhoneCover" src="img/iPhone.png" alt="">
            </div>
            <div class="imgPrem">
                <img class="imgPShow" src="img/paket1.jpg" alt="">
            </div>
            <div class="imgPList">
                <img class="imgP" src="img/paket1.jpg" alt="">
                <img class="imgP" src="img/paket2.jpg" alt="">
                <img class="imgP" src="img/paket3.jpg" alt="">
                <img class="imgP" src="img/paket4.jpg" alt="">
            </div>
            <div class="tombol">
                <div class="tombolKiri">
                    <i class="left fa-solid fa-chevron-left fa-4x"></i>
                </div>
                <div class="tombolKanan">
                    <i class="right fa-solid fa-chevron-right fa-4x"></i>
                </div> 
            </div>
            <ul>
                <li >
                    <div id="1" class="bullet activeBullet"></div>
                </li>
                <li>
                    <div id="2" class="bullet"></div>
                </li>
                <li>
                    <div id="3" class="bullet"></div>
                </li>
                <li>
                    <div id="4" class="bullet"></div>
                </li>
            </ul>                     
            
        </div>

        <div class="sec4CardG">
            <div class="paketTitle">
                <h4>Gold</h4>
                <h5>Rp 300.000 ,-</h5>
                <hr>
            </div>
            <div class="imgCover">
                <img class="imgPhoneCover" src="img/iPhone.png" alt="">
            </div>
            <div class="imgGold">
                <img class="imgGShow" src="img/paket1.jpg" alt="">
            </div>
            <div class="imgGList">
                <img class="imgG" src="img/paket1.jpg" alt="">
                <img class="imgG" src="img/paket2.jpg" alt="">
                <img class="imgG" src="img/paket3.jpg" alt="">
                <img class="imgP" src="img/paket4.jpg" alt="">
                <img class="imgP" src="img/paket5.jpg" alt="">
            </div>
            <div class="tombol">
                <div class="tombolKiri">
                    <i class="left fa-solid fa-chevron-left fa-4x"></i>
                </div>
                <div class="tombolKanan">
                    <i class="right fa-solid fa-chevron-right fa-4x"></i>
                </div> 
            </div>
            <ul>
                <li >
                    <div id="1" class="bullet activeBullet"></div>
                </li>
                <li>
                    <div id="2" class="bullet"></div>
                </li>
                <li>
                    <div id="3" class="bullet"></div>
                </li>
                <li>
                    <div id="4" class="bullet"></div>
                </li>
                <li>
                    <div id="5" class="bullet"></div>
                </li>
            </ul>                       
            
        </div>
        
    </div>

</div>

{{------------------------------- SECTION 5 ----------------------------------}}
{{----------------------------------------------------------------------------}}

<div id="sec5" class="section5">
    <div class="container-fluid">
        <div class="row text-align-center">
            <div class="col-12" style="top: 50px">
                <div class="mainTitle5">
                    <h3>Apakah anda tertarik ? Berikut langkah-langkah pemesanan </h3>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="footerTitle">
            <h4>Wedding Project</h4>
        </div>
        <h6><i class="fa-regular fa-envelope"></i> fauzilax@gmail.com & aldiazharpermana@gmail.com</h6>
        <h6><i class="fa-brands fa-square-instagram"></i> @kekovlakan</h6>
        <h6><i class="fa-regular fa-copyright"></i>2022 Design by Wedding Project. All Rights Reserved</h6>
        
    </div>
</div>




@endsection