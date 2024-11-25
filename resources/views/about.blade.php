@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('About') }}</h1>

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card shadow mb-4">

                <div class="card-profile-image mt-4">
                    <img src="{{ asset('img/favicon.png') }}" class="rounded-circle" alt="user-image">
                </div>

                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="font-weight-bold">UPJA Information System for Agriculture Management</h5>
                            <p>Selamat datang di aplikasi Sistem Informasi UPJA yang dirancang untuk mempermudah manajemen dan analisis alat berat (alsintan) dalam pertanian.</p>
                            <p>Aplikasi ini bertujuan untuk membantu petani, operator, dan manajer dalam merencanakan, mengelola, dan melacak penggunaan alsintan dengan lebih efektif. Dengan fitur-fitur yang canggih, aplikasi ini mempermudah pengelolaan alat berat, pemeliharaan, penggunaan, dan pelaporan biaya operasional.</p>
                            <p>Jika Anda menemukan aplikasi ini bermanfaat, pertimbangkan untuk memberikan ⭐ kepada repositori ini.</p>
                            <a href="https://github.com/YourRepository/your-project" target="_blank" class="btn btn-github">
                                <i class="fab fa-github fa-fw"></i> Buka Repositori
                            </a>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="font-weight-bold">Fitur Utama Aplikasi</h5>
                            <ul>
                                <li><strong>Manajemen Alsintan:</strong> Admin dapat menambahkan, mengedit, dan menghapus data alat berat, serta melacak status alat dan riwayat pemeliharaan.</li>
                                <li><strong>Pemeliharaan Alat:</strong> Jadwalkan pemeliharaan rutin dan catat catatan perbaikan untuk setiap alat, dengan riwayat tindakan perbaikan yang terperinci.</li>
                                <li><strong>Manajemen Penggunaan Alat:</strong> Lacak reservasi alat, penggunaan, dan area yang dikerjakan oleh operator dan petani.</li>
                                <li><strong>Manajemen Biaya:</strong> Rekam biaya operasional dan perbaikan, serta hitung biaya penggunaan per hektar.</li>
                                <li><strong>Laporan dan Analisis:</strong> Buat laporan penggunaan, pemeliharaan, dan efisiensi, serta memungkinkan ekspor dalam format PDF atau Excel.</li>
                            </ul>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="font-weight-bold">Teknologi yang Digunakan</h5>
                            <p>Aplikasi ini dibangun dengan menggunakan teknologi-teknologi modern untuk memastikan performa yang optimal dan pengalaman pengguna yang baik.</p>
                            <ul>
                                <li><a href="https://laravel.com" target="_blank">Laravel</a> - Framework PHP modern untuk membangun aplikasi web.</li>
                                <li><a href="https://startbootstrap.com/themes/sb-admin-2" target="_blank">SB Admin 2</a> - Template admin yang responsif untuk Bootstrap, digunakan sebagai dasar antarmuka pengguna.</li>
                                <li><a href="https://www.chartjs.org/" target="_blank">Chart.js</a> - Untuk visualisasi data berbasis grafik.</li>
                                <li><a href="https://github.com/DevMarketer/LaravelEasyNav" target="_blank">LaravelEasyNav</a> - Membantu pengelolaan navigasi dalam aplikasi Laravel.</li>
                            </ul>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="font-weight-bold">Sumber Daya</h5>
                            <p>Aplikasi ini memanfaatkan beberapa perpustakaan/komponen open-source yang bermanfaat dari komunitas web. Terima kasih kepada semua kontributor dan pengguna yang membantu pengembangan aplikasi ini.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>

@endsection
