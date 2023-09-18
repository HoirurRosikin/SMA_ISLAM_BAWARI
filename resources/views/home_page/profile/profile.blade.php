@extends('home_page.app2')
@section('head')
    <title>Profile</title>
@endsection

@section('isi')
    <br>

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="row">

                    <div class="widget HTML" data-version="1" id="HTML3">
                        <h2 class="title">Sambutan Kepala Sekolah</h2>
                        <div class="widget-content">
                            <style>
                                body {
                                    margin: 0;
                                    padding: 0;
                                    box-sizing: border-box;
                                    font-family: sans-serif;
                                }

                                .gambar {
                                    display: flex;
                                    flex-direction: column;
                                    justify-content: center;
                                    align-items: center;
                                }

                                .gambar img {
                                    width: 50vh;
                                    margin-bottom: -99px;
                                }

                                .gambar .bold {
                                    font-size: 16px;
                                    font-weight: bold;
                                }
                            </style>





                            <div class="gambar">
                                <div class="separator" style="clear: both;"><a
                                        href="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjDymXtMKedzeQe8xwDHm3NG7p9_hvZTynaGT2mAMrczeqlW0kyaLUFZTuBn5MsquVC8mIdF8ZNMg0jNcYwXWmcp_rFKzSoHkXo6_jz1T8HxfrQjaUEnKGkl1wO0YCaMbamcw-pS7vS9--jYF9V9zfalJ1b87ggV6AeAYP6qYd07KOzJlh-zCx_CzFe/s1600/Asset%202ok.png"
                                        style="display: block; padding: 1em 0; text-align: center; margin-bottom: -10px;"><img
                                            alt="" border="0" data-original-height="694"
                                            data-original-width="519" src="{{ asset('Sma/Kepala Sekolah.png') }}"></a>
                                </div>

                                <span class="bold">Muhamad Sukri, S. Pd</span>
                                <span>Kepala SMA ISLAM BAWARI PONTIANAK</span>
                            </div>
                            <br>

                            <p>
                                Puji syukur kita panjatkan kehadirat Allah swt. Atas berkat rahmat yang telah diberikan
                                kepada kita, sehingga web sekolah SMA Islam Bawari Pontianak dapat terselesaikan. Sholawat
                                serta salam semoga tetap tercurahkan kepada jujungan kita Nabi Muhammad SAW, beserta para
                                keluarga, sahabat dan Insya Allah kita semua menjadi Umat Rasullah sampai hari kiamat kelak.
                                <br>
                                <br>
                                Website Sekolah SMA Islam Bawari ini dibuat sabagai sarana edukasi dan sarana publikasi
                                semua kegiatan yang dilakukan di SMA Islam Bawari. Baik itu berhubungan dengan kegitan
                                akademik, administrasi, informasi Pendidik dan Tenaga Kepandidikan, dan acara-acara non
                                akademik lainya.
                                Kami menyadari bahwa web sekolah ini tidak luput dari kesalahan-kesalahan dan
                                kekurangan-kekurangan. Oleh karena itu, dengan segala kerendahan hati, kami sangat
                                mengharapkan saran dan kritik yang bersifat membangun.
                            </p>

                            <!--!doctype-->
                        </div>
                        <div class="clear"></div>
                    </div>
                    <br>

                </div>
            </div>
            <div class="col-md-auto">
                @include('home_page.section.saran_masukan')
            </div>

        </div>

    </div>
@endsection


@section('script')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        @if (session()->has('success'))
            swal("Success!", "Terima kasih atas saran dan masukannya", "success");
            {{ session()->forget('success') }}
        @endif
    </script>
@endsection
