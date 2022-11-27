@extends('layouts.master-about')
@section('title', 'about')
@section('content')

<section id=about>
    <div class="contain-atas-kiri"></div>

    <div class="container-atas-tengah">
        <div class="container-top">
            <div class="atas1">
                <div class="kata12">
                    <h4>DON'T THINK, JUST DO!</h4>
                </div>
            </div>

            <div class="atas2">
                <div class="kata13">
                    <h4>WE THE TEAM!</h4>
                </div>
            </div>

            <div class="atas3">
                <div class="kata14">
                    <p>Our greatest weakness lies in giving up. The most certain way to succeed is always to try
                        just one more time.</p>
                </div>
            </div>
        </div>

        <!-- Anggota -->
        <section id="sosmed-anggota">



            <!-- FAHMI -->
            <div class="container-kiri-anggota2">
                <div class="container-atas-anggota2">
                    <div class="gambar-fahmi">
                        <img id="fahmi" src="img/about/fahmi.jpg" alt="" style="
                            max-width: 45%;
                            height: 45%;
                            width: 100;
                            height: 100;
                            ">
                    </div>

                    <div class="container-nama2">
                        <div class="nama2">
                            <h4>FAHMI ALI HUSNI</h4>
                        </div>
                    </div>

                    <div class="container-sosmed2">
                        <div class="sosmed-fahmi">
                            <a href="https://www.instagram.com/fahmi_ali13/"><i id="icon1"
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>


        </section>
    </div>

    <div class="container-atas-kanan"></div>
</section>
@endsection