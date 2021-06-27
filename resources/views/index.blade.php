@extends('layouts.master-home')
@section('title', 'home')
@section('content')

<div class="containerBaner">
    <div class="gambarBaner">
        <div class="opacit">
            <div class="kataFreelance">
                <h1>FREELANCER</h1>
            </div>
            <div class="kataJudul">
                <h1>WIDDU SERVICE</h1>
            </div>
            <div class="containerButton">
                <div class="kirivis">

                </div>

                <div class="containerVisiMisi">
                    <div class="buttonVisi">
                        <a href="https://widduservice.com/visimisi/"></a>
                        <li><a id="visiMisi" href="https://widduservice.com/visimisi/">VISI & MISI</a></li>
                    </div>
                </div>

                <div class="kananvis">

                </div>
            </div>
        </div>
    </div>
</div>

<!-- JASA -->
<div class="atasjasa">
    <div class="containerJudulJasa">
        <h1>JASA TERSEDIA</h1>
    </div>
</div>
<div class="containerJasa">
    <div class="kiriJasa"></div>
    <div class="tengahJasa">

        <div class="containerJasaKiri">
            <a href="/coding"></a>
            <div class="containerJasaKiriLingkaran">
                <a href="/coding"> <i id="code" class="fas fa-code"></i></a>
            </div>
            <p> <a id="coding" href="/coding">CODING</a> </p>
        </div>

        <div class="containerJasaTengah">
            <a href="/vektor"></a>
            <div class="containerJasaTengahLingkaran">
                <a href="/vektor"><i id="vektor" class="fas fa-paint-brush"></i></a>
            </div>
            <p> <a id="vektoring" href="/vektor/">VEKTOR</a> </p>
        </div>

        <div class="containerJasaKanan">
            <a href="/music"></a>
            <div class="containerJasaKananLingkaran">
                <a href="/music"><i id="music" class="fas fa-music"></i></a>
            </div>
            <p> <a id="musician" href="/music">MUSIC</a> </p>
        </div>
    </div>
    <div class="kananJasa"></div>

</div>
<div class="bawahjasa"></div>


<!-- IKLAN 1 -->
<section id="part1">
    <div class="iklan1">
        <div class="gambarIklan1">
            <div class="darkpart1">

                <h2>DISINI ADALAH SOLUSI ANDA</h2>


            </div>
            <div class="tambahan1">
                <i id="iconDown" class="fas fa-long-arrow-alt-down"></i>
                <div class="below">
                    <h5>Scroll below</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- IKLAN 2-->
<section id="part2">
    <div class="tes1"></div>
    <div class="iklan2">
        <div class="gambarIklan2">
            <h2>SYSTEM DI WIDDU SERVICE</h2>
        </div>
    </div>
</section>

<!-- Iklan 3 Job atas -->
<section id=jobA>
    <div class="iklanA">
        <div class="kiriJobA"></div>

        <div class="tengahJobA">
            <div class="container-kiri-jobA">
                <div class="logo1">
                    <img id="logo1" src="img/home/komunikasi.jpg" alt="" style="
                            max-width: 85%;
                            height: 85%;
                            width: 100;
                            height: 100;
                            ">
                </div>

                <div class="container-judulA">
                    <div class="judulA">
                        <h3>KOMUNIKASI</h3>
                    </div>
                </div>
            </div>

            <div class="container-tengah-jobB1">
                <div class="logo2">
                    <img id="logo2" src="img/home/respon.jpg" alt="" style="
                            max-width: 85%;
                            height: 85%;
                            width: 100;
                            height: 100;
                            ">
                </div>

                <div class="container-judulB1">
                    <div class="judulB1">
                        <h3>RESPONS</h3>
                    </div>
                </div>
            </div>

            <div class="container-kanan-jobC1">
                <div class="logo3">
                    <img id="logo3" src="img/home/design.jpg" alt="" style="
                            max-width: 85%;
                            height: 85%;
                            width: 100;
                            height: 100;
                            ">
                </div>

                <div class="container-judulC1">
                    <div class="judulC1">
                        <h3>RESPONS</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="kananJobA"></div>
    </div>
</section>

<!-- Iklan 4 Job Bawah -->
<section id=jobB>
    <div class="iklanB">
        <div class="kiriJobB"></div>

        <div class="tengahJobB">
            <div class="container-kiri-jobB">
                <div class="logo4">
                    <img id="logo4" src="img/home/shop.jpg" alt="" style="
                            max-width: 85%;
                            height: 85%;
                            width: 100;
                            height: 100;
                            ">
                </div>

                <div class="container-judulB">
                    <div class="judulB">
                        <h3>SHOP</h3>
                    </div>
                </div>
            </div>

            <div class="container-tengah-jobC1">
                <div class="logo5">
                    <img id="logo5" src="img/home/terstruktur.jpg" alt="" style="
                            max-width: 85%;
                            height: 85%;
                            width: 100;
                            height: 100;
                            ">
                </div>

                <div class="container-judulC1">
                    <div class="judulC1">
                        <h3>TERSTRUKTUR</h3>
                    </div>
                </div>
            </div>

            <div class="container-kanan-jobD1">
                <div class="logo6">
                    <img id="logo6" src="img/home/aman.jpg" alt="" style="
                            max-width: 85%;
                            height: 85%;
                            width: 100;
                            height: 100;
                            ">
                </div>

                <div class="container-judulD1">
                    <div class="judulD1">
                        <h3>SCURE</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="kananJobB"></div>
    </div>
</section>

<section id="partner">
    <div class="containerpartner">
        <div class="kiri-partner"></div>

        <div class="tengah-partner">
            <div class="con-judul-partner">
                <div class="partnerjudul">
                    <h3>WE WORKED WITH</h3>
                </div>
            </div>

            <div class="container-gambar-partner1">
                <div class="gambar-partner1">
                    <img id="fluid" src="img/home/fluidcode.jpg" alt="" style="
                            max-width: 75%;
                            height: 75%;
                            width: 100;
                            height: 100;
                            ">
                </div>
            </div>

            <div class="container-gambar-partner2">
                <div class="gambar-partner2">
                    <img id="ruang-beban" src="img/home/ruang-beban.jpg" alt="" style="
                            max-width: 126%;
                            height: 40%;
                            width: 100;
                            height: 100;
                            ">
                </div>
            </div>

            <div class="container-gambar-partner3">
                <div class="gambar-partner3">
                    <img id="matture" src="img/home/martture.jpg" alt="" style="
                            max-width: 75%;
                            height: 75%;
                            width: 100;
                            height: 100;
                            ">
                </div>
            </div>
        </div>

        <div class="kanan-partner"></div>
    </div>
</section>

<section id="maps">
    <div class="last-baner">
        <div class="dark-mode">
            <div class="containermaps">
                <div class="maps1">
                    <iframe id="maps2"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3947.766079402872!2d114.31974321102459!3d-8.326027341277594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd1576807def9cf%3A0xfa53aa7f1ee5c9a3!2sDusun%20Gepuro%2C%20Gepuro%2C%20Watukebo%2C%20Kec.%20Rogojampi%2C%20Kabupaten%20Banyuwangi%2C%20Jawa%20Timur%2068462!5e0!3m2!1sid!2sid!4v1616974113380!5m2!1sid!2sid"
                        width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection