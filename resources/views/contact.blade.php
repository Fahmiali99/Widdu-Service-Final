@extends('layouts.master-contact')
@section('title', 'contact')
@section('content')

<section id="pengaduan">
    <div class="container-baner">
        <div class="dark-mode">

            <div class="kiriA"></div>
            <div class="tengahA">
                <div class="container-judulA">
                    <div class="judulA">
                        <h1>PENGADUAN LAYANAN</h1>
                    </div>
                </div>
            </div>
            <div class="kananA"></div>

        </div>
    </div>

    <div class="spase"></div>

    <!-- FORM PENGADUAN -->
    <div class="container-form-pengaduan">
        <div class="kiriB"></div>
        <div class="tengahB">
            <div class="contact-form">
                <!-- Nama -->
                <div class="container-nama">
                    <div class="nama">
                        <h4>Nama</h4>
                        <p id=bintang>*</p>
                    </div>

                    <input type="text1">
                </div>

                <!-- Whatsapp -->
                <div class="container-nomer-wa">
                    <div class="wa">
                        <h4>WhatsApp / Telp</h4>
                        <p id=bintang>*</p>
                    </div>

                    <input type="text2">
                </div>
                <!-- Email -->
                <div class="container-email">
                    <div class="email">
                        <h4>Email</h4>
                        <p id=bintang>*</p>
                    </div>

                    <input type="text3">
                </div>
                <!-- Problem -->
                <div class="container-probelm">
                    <div class="problem">
                        <h4>Masalah</h4>
                        <p id=bintang>*</p>
                    </div>

                    <input type="text4">
                </div>
                <!-- Submit -->
                <div class="container-submit">
                    <div class="buttonSubmit">
                        <button id=submit>Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="kananB"></div>
    </div>
</section>
@endsection