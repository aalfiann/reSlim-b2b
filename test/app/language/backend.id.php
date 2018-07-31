<?php
require_once realpath(__DIR__ . '/..').'/config.php';
$vocabularies[] = [
    //core
    'core_register_success' => 'Proses Pendaftaran Berhasil!',
    'core_register_failed' => 'Proses Pendaftaran Gagal!',
    'core_update_success' => 'Proses Pembaharuan Berhasil!',
    'core_update_failed' => 'Proses Pembaharuan Gagal!',
    'core_delete_success' => 'Proses Hapus Berhasil!',
    'core_delete_failed' => 'Proses Hapus Gagal!',
    'core_upload_success' => 'Proses Unggah Berhasil!',
    'core_upload_failed' => 'Proses Unggah Gagal!',
    'core_login_failed' => 'Proses Masuk Gagal!',
    'core_not_connected' => 'Tidak dapat tersambung ke server!',
    'core_api_add_success' => 'Proses Menambahkan API Keys Berhasil!',
    'core_api_add_failed' => 'Proses Menambahkan API Keys Gagal!',
    'core_mail_reset_password1' => 'Permintaan reset kata sandi',
    'core_mail_reset_password2' => 'Anda telah membuat permintaan untuk reset kata sandi.',
    'core_mail_reset_password3' => 'Ini adalah link untuk reset:',
    'core_mail_reset_password4' => 'Hiraukan email ini jika Anda tidak ingin mereset kata sandi. Link akan kadaluarsa secara otomatis dalam waktu 3 hari dari sekarang.',
    'core_mail_reset_password5' => 'Terima Kasih',
    'core_reset_password_success1' => 'Permintaan reset kata sandi telah terkirim ke email Anda!',
    'core_reset_password_success2' => 'Jika tidak ada, cobalah untuk periksa folder spam atau mengulang lagi nanti.',
    'core_reset_password_failed' => 'Proses Lupa Kata Sandi Gagal!',
    'core_change_password_success' => 'Proses Ubah Kata Sandi Berhasil!',
    'core_change_password_failed' => 'Proses Ubah Kata Sandi Gagal!',
    'core_mail_send_success' => 'Pesan telah berhasil terkirim!',
    'core_mail_send_failed' => 'Pesan gagal terkirim!',
    'core_try_again' => 'Silahkan coba lagi nanti!',
    'core_settings_changed' => 'Pengaturan telah berubah!',
    'core_auto_refresh' => 'Halaman ini akan disegarkan secara otomatis dalam 2 detik...',
    'core_clear_log_success' => 'Proses Hapus Log Berhasil!',
    'core_clear_log_failed' => 'Proses Hapus Log Gagal!',
    'core_process_add' => 'Proses Menambahkan',
    'core_process_update' => 'Proses Pembaharuan',
    'core_process_delete' => 'Proses Hapus',
    //development
    'app' => 'Aplikasi',
    'system' => 'Sistem',
    'master' => 'Master',
    'maintenance' => 'Perawatan',
    'extension' => 'Extension',
    'develop_process_title' => 'Proses Pembangunan',
    'develop_process_info' => 'Maaf, halaman ini masih dalam proses pembangunan.',
    'maintenance_process_title' => 'Proses Perawatan',
    'maintenance_process_info' => 'Maaf, halaman ini masih dalam proses perawatan.',
    //http message
    'http_title_400' => 'Koneksi Anda tidak valid !',
    'http_title_401' => 'Error akses tidak Sah !',
    'http_title_403' => 'Halaman ini dilarang !',
    'http_title_404' => 'Halaman tidak ditemukan !',
    'http_title_429' => 'Terlalu banyak permintaan !',
    'http_title_451' => 'Tidak tersedia karena alasan hukum !',
    'http_message_400' => 'Silahkan periksa koneksi internet Anda, mungkin telah korup atau sebagainya.',
    'http_message_401' => 'Maaf, Anda harus membuat otorisasi untuk mengakses halaman ini.',
    'http_message_403' => 'Maaf, halaman ini dilarang untuk Anda.',
    'http_message_404' => 'Kami gagal menemukan dokumen apa pun, mungkin telah pindah alamat atau dihapus.',
    'http_message_429' => 'Maaf, koneksi Anda dibatasi untuk mengakses halaman ini.',
    'http_message_451' => 'Maaf, Halaman ini tidak tersedia karena alasan hukum !',
    'http_back_home' => 'Kembali ke Beranda',
    //theme
    'theme_panel' => 'Panel Tema',
    'theme_light' => 'Tema Cerah',
    'theme_dark' => 'Tema Gelap',
    'fullscreen' => 'Layar Penuh',
    //login
    'login' => 'Masuk',
    'form_login' => 'Form Masuk',
    //validation
    'val_numeric_html' => 'Input menggunakan karakter angka saja!',
    'val_decimal_html' => 'Input menggunakan karakter desimal! Angka dan titik saja!',
    'val_double_html' => 'Input menggunakan karakter numerik!',
    'val_alphanumeric_html' => 'Input menggunakan karakter huruf dan angka!',
    'val_email_html' => 'Input sesuai dengan format alamat email!',
    'val_asterisk_required' => 'Kolom yang diberi tanda bintang harus diisi!',
    'val_wrong_format' => 'Format Salah!',
    //register
    'register' => 'Pendaftaran',
    'form_register' => 'Form Pendaftaran',
    'have_account' => 'Sudah punya akun?',
    'username_check_format' => 'Username hanya angka dan huruf 3-20 karakter!',
    'username_check_ok' => 'Username OK!',
    'username_check_found' => 'Username telah terdaftar!',
    'username_check_not_found' => 'Username tidak tersedia!',
    'email_check_ok' => 'Alamat email OK!',
    'email_check_no' => 'Alamat email tidak tersedia!',
    'email_check_invalid' => 'Format alamat email salah!',
    'pass_check_ok' => 'Password OK!',
    'pass_check_match' => 'Password cocok!',
    'pass_check_no' => 'Password tidak cocok!',
    //contact
    'contact_us' => 'Hubungi Kami',
    'form_contact_us' => 'Form Hubungi Kami',
    'send_message_failed' => 'Proses Kirim Pesan Gagal,',
    'wrong_security_key' => 'Kode Keamanan Salah!',
    'send_message' => 'Kirim Pesan',
    //forgot password
    'reset_password' => 'Permintaan Reset Kata Sandi',
    'form_reset_password' => 'Form Permintaan Reset Kata Sandi',
    'submit_reset_password' => 'Reset Kata Sandi',
    //verify password
    'verify_password' => 'Verifikasi Kata Sandi Baru',
    'form_verify_password' => 'Form Verifikasi Kata Sandi Baru',
    //dashboard
    'dashboard' => 'Dashboard',
    //api key
    'api_key' => 'API Key',
    'api_keys' => 'API Keys',
    //data user, edit, view profile
    'edit_user_profile' => 'Ubah Profil Pengguna',
    'user_profile' => 'Profil Pengguna',
    'my_profile' => 'Profilku',
    'view_profile' => 'Lihat Profil',
    'no_description_profile' => 'Tidak ada deskripsi apapun pada profil ini...',
    //explore file
    'explore_file' => 'Jelajah File',
    'file_cloud' => 'File Cloud',
    'upload_file' => 'Unggah File ke Server',
    'upload_now' => 'Unggah Sekarang',
    'detail_file' => 'Detil File',
    'upload_here' => 'Unggah file disini...',
    'file' => 'File',
    //data page
    'page' => 'Halaman',
    'page_id' => 'Halaman ID',
    'image' => 'Gambar',
    'tags' => 'Tags',
    'description' => 'Deskripsi',
    'content' => 'Konten',
    'data_page' => 'Data Halaman',
    'create_page' => 'Buat Halaman Baru',
    'update_page' => 'Perbaharui Halaman',
    'save_page' => 'Publikasikan Halaman',
    'form_editor' => 'Form Editor',
    //data branch
    'branch' => 'Cabang',
    'branchid' => 'Cabang ID',
    //helper page
    'helper_page_image' => 'Url gambar akan digunakan untuk tujuan SEO Opengraph.',
    'helper_page_tags' => 'Tags berguna untuk memudahkan pembaca dalam membaca konten terkait.',
    'helper_page_title' => 'Judul ini akan digunakan sebagai tag <b>&#x3C;H1&#x3E;</b>.',
    'helper_page_description' => 'Deskripsi ini adalah ringkasan dari konten Anda.',
    //user access
    'my_access' => 'Aksesku',
    'user_access' => 'Akses Pengguna',
    'title_access' => 'Akses Token Data',
    'info_access' => 'Token Anda akan otomatis dihapus saat Anda logout atau mencapai tanggal kedaluwarsa.',
    'notice_access' => 'Anda bisa segera mencabut token tersebut jika Anda merasa seseorang telah mencurinya.',
    'revoke_access' => 'Cabut',
    'revoke_access_all' => 'Cabut Semua Token',
    'active_access' => 'Token sedang dipakai sekarang',
    'token' => 'Token',
    'date_login' => 'Tanggal Login',
    'expired' => 'Kedaluwarsa',
    //settings
    'tools' => 'Perkakas',
    'settings' => 'Pengaturan',
    'no_have_api' => 'Tidak punya API Keys? Anda dapat membuatnya',
    //label settings
    'label_settings_keyword' => 'Kata Kunci',
    'label_settings_description' => 'Deskripsi',
    'label_settings_seopage' => 'Kata Kunci Halaman Dinamis',
    'label_settings_seosite' => 'Kata Kunci Web Kompetitor',
    'label_settings_homepath' => 'Frontend Path',
    'label_settings_disqus' => 'Disqus Username',
    'label_settings_sharethis' => 'Sharethis Key',
    'label_settings_facebook' => 'Facebook',
    'label_settings_twitter' => 'Twitter',
    'label_settings_gplus' => 'Google Plus',
    'label_settings_gpub' => 'Google Publisher',
    'label_settings_googleanalytics' => 'Google Analytics',
    'label_settings_googlewebmaster' => 'Google Webmaster',
    'label_settings_bingwebmaster' => 'Bing Webmaster',
    'label_settings_yandexwebmaster' => 'Yandex Webmaster',
    //helper settings
    'helper_settings_title' => 'Ini adalah default judul website Anda.',
    'helper_settings_keyword' => 'Ini adalah default kata kunci tag website Anda.',
    'helper_settings_description' => 'Ini adalah default deskripsi website Anda.',
    'helper_settings_seopage' => 'Ini untuk membuat mirror link secara otomatis untuk tujuan SEO.',
    'helper_settings_seosite' => 'Ini untuk membuat mirror link secara otomatis menggunakan nama kompetitor untuk tujuan SEO.',
    'helper_settings_email' => 'Ini digunakan agar sistem email bekerja.',
    'helper_settings_homepath' => 'Path harus lengkap menggunakan http: atau https:',
    'helper_settings_api' => 'INi digunakan agar sistem website dapat bekerja dengan api server.',
    'helper_settings_basepath' => 'Path harus lengkap menggunakan http: atau https:',
    'helper_settings_assetspath' => 'Path harus lengkap menggunakan http: atau https:',
    'helper_settings_disqus' => 'Ini adalah untuk menggunakan sistem komentar disqus di website Anda.',
    'helper_settings_sharethis' => 'Ini adalah untuk menggunakan sistem sharing di website Anda.',
    'helper_settings_facebook' => 'Link harus lengkap menggunakan http: atau https:',
    'helper_settings_twitter' => 'Link harus lengkap menggunakan http: atau https:',
    'helper_settings_gplus' => 'Link harus lengkap menggunakan http: atau https:',
    'helper_settings_gpub' => 'Link harus lengkap menggunakan http: atau https:',
    'helper_settings_googleanalytics' => 'Ini untuk melacak pengunjung website Anda.',
    'helper_settings_googlewebmaster' => 'Ini adalah untuk SEO di Google Search Engine.',
    'helper_settings_bingwebmaster' => 'Ini adalah untuk SEO di Bing Search Engine.',
    'helper_settings_yandexwebmaster' => 'Ini adalah untuk SEO di Yandex Search Engine...',
    //input settings
    'input_settings_keyword' => 'Input dengan kata kunci dan pisahkan dengan koma...',
    'input_settings_description' => 'Input deskripsi website...',
    'input_settings_seopage' => 'Input kata kunci halaman dan pisahkan dengan koma...',
    'input_settings_seosite' => 'Input kata kunci kompetitor dan pisahkan dengan koma...',
    'input_settings_homepath' => 'Input url frontend folder website Anda...',
    'input_settings_disqus' => 'Input username Disqus Anda disini...',
    'input_settings_sharethis' => 'Input Sharethis Key Anda disini...',
    'input_settings_facebook' => 'Input Facebook page Anda disini...',
    'input_settings_twitter' => 'Input Twitter page Anda disini...',
    'input_settings_gplus' => 'Input Google Plus page Anda disini...',
    'input_settings_gpub' => 'Input Google Publisher page Anda disini...',
    'input_settings_googleanalytics' => 'Input ID Google Analytics Anda disini...',
    'input_settings_googlewebmaster' => 'Input ID Google Webmaster Anda disini...',
    'input_settings_bingwebmaster' => 'Input ID Bing Webmaster Anda disini...',
    'input_settings_yandexwebmaster' => 'Input ID Yandex Webmaster Anda disini...',
    //error log
    'error_log' => 'Error Log',
    'error_log_title' => 'Error Log di API Server',
    'error_log_description' => 'Ini adalah data log yang terekam di API Server Anda',
    'clear_log' => 'Hapus Log',
    //terminal
    'terminal' => 'Terminal',
    'terminal_notice' => 'Fitur ini terbatas!',
    'terminal_notice_message' => '<br>Anda tidak dapat menggunakan perintah seperti <span class="badge badge-inverse">vi / vim</span>, <span class="badge badge-inverse">nano</span>, <span class="badge badge-inverse">top</span> atau <span class="badge badge-inverse">ping</span>.<br>Informasi lebih detail tentang command dan cara penggunaan, silahkan baca <a href="http://web-console.org" target="_blank">disini <i class="fa fa-external-link"></i></a>.',
    //cache
    'cache' => 'Cache',
    'cache_title' => 'Cache secara default berbasis file dan disimpan dalam HDD',
    'cache_description' => 'Untuk menonaktifkan sistem cache, Anda harus mengatur <span class="badge badge-inverse">$runcache = false</span> yang di-hardcod pada kelas <span class="badge badge-inverse">Auth</span> dan <span class="badge badge-inverse">SimpleCache</span>.',
    'cache_clear' => 'Hapus Cache',
    'cache_files' => 'File Cache',
    'cache_used' => 'Ruang Terpakai',
    'cache_free' => 'Ruang Tersedia',
    'cache_size' => 'Ukuran Cache',
    'cache_status' => 'Status Cache',
    'cache_status_delete_total'=>'Total Dihapus',
    'cache_status_delete_success' => 'Proses hapus cache berhasil!',
    'cache_status_delete_failed' => 'Proses hapus cache gagal!',
    'cache_status_delete_msg_1' => 'Hanya file cache yang telah berumur diatas',
    'cache_status_delete_msg_2' => 'detik, akan terhapus.',
    'cache_status_delete_process' => 'Waktu yang dibutuhkan untuk menghapus file cache',
    'folder' => 'Folder',
    'notice_cache_onehour' => 'Data akan di refresh secara otomatis per 1 jam.',
    'notice_cache_clear' => 'Hapus cache browser Anda agar mendapatkan data terbaru.',
    //hdd
    'hdd_total_size' => 'Total Ruang',
    'hdd_used_size' => 'Ruang Terpakai',
    'hdd_free_size' => 'Ruang Tersedia',
    'hdd_use_status' => 'Status Pemakaian HDD',
    //backup-db
    'backup' => 'Backup',
    'backup_db' => 'Backup DB',
    'backup_now' => 'Backup Sekarang',
    'backup_info' => 'Jika Database berukuran besar diatas 1juta row, maka sebaiknya backup menggunakan command line.',
    'backup_success' => 'Backup DB Berhasil!',
    'backup_failed' => 'Backup DB Gagal!',
    //packager
    'packager' => 'Packager',
    'packager_detail' => 'Info Detil',
    'packager_install' => 'Pasang Modul',
    'packager_install_success' => 'Berhasil Memasang Modul',
    'packager_install_failed' => 'Gagal Memasang Modul',
    'packager_install_date' => 'Tanggal Pasang',
    'packager_zip_source' => 'Source Zip Archive',
    'packager_uninstall' => 'Lepas Modul',
    'packager_uninstall_desc' => '* Melepas modul hanya akan menghapus script di server saja.',
    'packager_uninstall_warning' => 'Melepas Modul mengakibatkan kerusakan pada aplikasi!\nPastikan Anda telah mengetahui resiko ini.',
    'packager_uninstall_success' => 'Berhasil Melepas Modul',
    'packager_uninstall_failed' => 'Gagal Melepas Modul',
    'packager_uninstall_ok' => 'OK, Lepas Sekarang!',
    'packager_desc' => 'Packager adalah sebuah modul untuk membantu mengelola aplikasi pihak ketiga.',
    'packager_dev_1' => 'Bagaimana cara membuat package modul baru milikku?',
    'packager_dev_2' => 'Anda dapat memulai belajar dari dokumentasi <a href="https://github.com/aalfiann/reslim/wiki" target="_blank">disini</a> atau dari kode sumber paling sederhana <a href="https://github.com/aalfiann/reSlim-modules-first_mod" target="_blank">disini</a>.',
    'packager_help_1' => 'Namespace harus diinput dengan benar.',
    'packager_help_2' => 'Source zip archive harus direct link.',
    'packager_running' => 'Digunakan untuk halaman ini!',
    'packager_get_started' => 'Get Started',
    'packager_list_modules' => 'reslim modules',
    //package
    'package' => 'Package',
    'package_version' => 'Versi',
    'package_size' => 'Ukuran',
    'package_link' => 'Kunjungi Proyek',
    'package_link_fork' => 'Fork Project',
    'package_compatible' => 'Kompatibel',
    'package_dependency' => 'Dependency',
    'package_author' => 'Author',
    'package_license' => 'Lisensi',
    'package_readme' => 'README.md',
    'module' => 'Modul',
    'namespace' => 'Namespace',
    //pages
    'pages_latest' => 'Terbaru',
    'pages_readmore' => 'Baca selengkapnya...',
    'pages_search_label' => 'Cari label',
    'pages_not_found' => '<p><b>404 - Tidak Ditemukan!</b><br>Maaf, Halaman yang Anda cari tidak ada, telah dihapus atau mungkin telah di pindahkan.</p>',
    'pages_not_available' => '<p><b>Data tidak tersedia!</b><br>Silahkan coba gunakan kata kunci pencarian lainnya.</p>',
    'pages_show_comments' => 'Tampilkan Komentar',
    'pages_placeholder_search' => 'Pencarian kata kunci...',
    //pages meta
    'pages_meta_desc_latest' => 'Informasi terbaru dari',
    'pages_meta_search' => 'Hasil pencarian kata kunci:',
    'pages_meta_search_keyword' => 'Hasil, Pencarian, Kata Kunci',
    'pages_meta_desc_search_not_found' => 'Data tidak tersedia! Silahkan coba gunakan kata kunci pencarian lainnya.',
    'pages_meta_desc_page_not_found' => '404 - Tidak ditemukan! Maaf, Halaman yang Anda cari tidak ada, telah dihapus atau mungkin telah di pindahkan.',
    //pages widget
    'pages_widget_trendingposts' => 'Trending Posts',
    'pages_widget_trendingtags' => 'Trending Tags',
    'pages_widget_sharethis' => 'Share This',
    //general
    'placeholder_global_search' => 'Cari & Enter',
    'loadmore' => 'Loadmore',
    'post' => 'Post',
    'blog' => 'Blog',
    'deleted' => 'Terhapus!',
    'delete_yes' => 'Iya, Hapus Saja!',
    'delete_ok' => 'Ok, Hapus Saja!',
    'are_u_sure' => 'Apakah Anda Yakin?',
    'deleted_file_warning' => 'Data yang terhapus tidak dapat dikembalikan.',
    'all' => 'Semua',
    'upload' => 'Unggah',
    'download' => 'Unduh',
    'home' => 'Beranda',
    'username' => 'Nama Pengguna (Username)',
    'password' => 'Kata Sandi (Password)',
    'confirm_password' => 'Konfirmasi Kata Sandi',
    'new_password' => 'Kata Sandi Baru',
    'notice_change_password' => 'Untuk alasan keamanan, Anda akan otomatis keluar jika salah input kata sandi lama.',
    'confirm_new_password' => 'Konfirmasi Kata Sandi Baru',
    'change_password' => 'Ubah Kata Sandi',
    'not_match_password' => 'Kata sandi Anda tidak cocok!',
    'fullname' => 'Nama Lengkap',
    'address' => 'Alamat',
    'phone' => 'Telepon',
    'fax' => 'Fax',
    'email' => 'Email',
    'owner' => 'Owner',
    'pic' => 'PIC',
    'tin' => 'TIN',
    'about_me' => 'Tentang Saya',
    'avatar' => 'Avatar',
    'security_key' => 'Kode Keamanan:',
    'name' => 'Nama',
    'email_address' => 'Alamat Email',
    'subject' => 'Judul',
    'message' => 'Pesan',
    'remember_me' => 'Ingat Saya',
    'forgot_password' => 'Lupa Kata Sandi?',
    'terms' => 'Persyaratan Layanan',
    'i_agree' => 'Saya setuju dengan',
    'not_agree' => 'Anda tidak menyetujui Persyaratan Layanan kami!',
    'close' => 'Tutup',
    'submit' => 'Submit',
    'search' => 'Cari',
    'add' => 'Tambah',
    'cancel' => 'Batal',
    'edit' => 'Edit',
    'manage' => 'Kelola',
    'delete' => 'Hapus',
    'domain' => 'Domain',
    'data' => 'Data',
    'total' => 'Total',
    'percentage' => 'Persentase',
    'chart' => 'Grafik',
    'shows_no' => 'Menampilkan no:',
    'from_total_data' => 'dari total data:',
    'export' => 'Ekspor',
    'status' => 'Status',
    'update' => 'Perbaharui',
    'user' => 'Pengguna',
    'profile' => 'Profil',
    'registered' => 'Terdaftar',
    'last_updated' => 'Terakhir Diperbaharui',
    'title' => 'Judul',
    'alternate' => 'Alternatif Judul',
    'external_link' => 'Eksternal Link',
    'browse_file' => 'Cari File',
    'show_detail' => 'Lihat Detil',
    'base_path' => 'Base Path',
    'assets_path' => 'Assets Path',
    'url_api' => 'Url API',
    'save' => 'Simpan',
    'info' => 'Info',
    'not_found' => 'Tidak Ditemukan',
    'logout' => 'Keluar',
    'explore' => 'Jelajah',
    'here' => 'disini',
    'status_success' => 'Berhasil!',
    'status_failed' => 'Gagal!',
    //general table
    'tb_no' => 'No',
    'tb_item_id' => 'Item ID',
    'tb_role' => 'Sebagai',
    'tb_username' => 'Username',
    'tb_created_at' => 'Dibuat',
    'tb_created_by' => 'Dibuat oleh',
    'tb_updated_at' => 'Diperbaharui saat',
    'tb_updated_by' => 'Diperbaharui oleh',
    'tb_date_upload' => 'Tanggal Unggah',
    'tb_upload_by' => 'Diunggah oleh',
    'tb_file_type' => 'Tipe File',
    'tb_file_size' => 'Ukuran File',
    'tb_direct_link' => 'Direct Link',
    //datatables default
    'dt_not_found' => 'Maaf, Data tidak ditemukan',
    'dt_display' => 'Tampilkan _MENU_ data per halaman',
    'dt_info' => 'Halaman _PAGE_ dari _PAGES_',
    'dt_info_empty' => 'Menampilkan 0 - 0 dari 0 data',
    'dt_filtered' => '(memfilter dari _MAX_ total data)',
    'dt_table_empty' => 'Data tidak ditemukan',
    'dt_loading' => '<i class=\"fa fa-circle-o-notch fa-spin\"></i> Memuat data...',
    'dt_process' => '<i class=\"fa fa-cog fa-spin\"></i> Mengambil data...',
    'dt_search' => 'Filter:',
    'dt_thousands' => '.',
    'dt_first' => '<i class="mdi mdi-skip-backward"></i>',
    'dt_last' => '<i class="mdi mdi-skip-forward"></i>',
    'dt_next' => '<i class="mdi mdi-skip-next"></i>',
    'dt_prev' => '<i class="mdi mdi-skip-previous"></i>',
    'dt_sort_asc' => ': aktifkan kolom urut ascending',
    'dt_sort_desc' => ': aktifkan kolom urut descending',
    //datatables custom
    'dt_shows_page' => 'Halaman',
    'dt_of' => 'dari',
    //general input form
    'input_username' => 'Nama Pengguna Anda',
    'input_password' => 'Kata Sandi Anda',
    'input_name' => 'Nama Anda disini...',
    'input_email' => 'Alamat Email Anda disini...',
    'input_subject' => 'Tulis judul disini...',
    'input_message' => 'Isi pesan Anda disini...',
    'input_security_key' => 'Jawab pertanyaan disini...',
    'input_confirm_password' => 'Ulangi Kata Sandi Anda',
    'input_fullname' => 'Nama Lengkap Anda disini...',
    'input_address' => 'Alamat Anda disini...',
    'input_phone' => 'Telepon Anda disini...',
    'input_about_me' => 'Deskripsi mengenai Anda...',
    'input_avatar' => 'Harap input url gambar untuk avatar Anda.',
    'input_search' => 'Cari disini...',
    'input_domain' => 'Domain Anda disini...',
    'input_api_key' => 'API Key Anda disini...',
    'input_image_page' => 'Input url gambar untuk halaman Anda disini...',
    'input_title_page' => 'Input judul halaman Anda disini...',
    'input_tags_page' => 'Input Tags halaman Anda pisahkan dengan koma disini...',
    'input_description_page' => 'Input deskripsi halaman Anda disini...',
    'input_content_page' => 'Input konten halaman Anda disini...',
    'input_title_file' => 'Nama judul dari file Anda...',
    'input_title_website' => 'Judul website Anda...',
    'input_alternate_file' => 'Nama judul alternatif dari file Anda...',
    'input_external_link' => 'Url ke link eksternal...',
    'input_choose_file' => 'Pilih File',
    'input_item_id' => 'Item ID dari file Anda...',
    'input_date_upload' => 'Tanggal Unggah dari file Anda...',
    'input_upload_by' => 'Nama penggugah file Anda...',
    'input_file_type' => 'Tipe dari file Anda...',
    'input_direct_link' => 'Url direct link dari file Anda...',
    'input_base_path' => 'Input url folder website Anda...',
    'input_assets_path' => 'Input url folder assets website Anda...',
    'input_url_api' => 'Input url folder Rest API Anda...',
    'input_required' => 'Kolom ini wajib diisi!',
    'input_required_not_zero' => 'Tidak dapat diisi angka nol!',
    //general modal
    'modal_terms' => '<p>Anda setuju, melalui penggunaan layanan ini, Anda tidak akan menggunakan 
    aplikasi ini untuk mengirim materi yang secara sengaja salah dan / atau memfitnah, 
    Tidak akurat, kasar, vulgar, penuh kebencian, melecehkan, cabul, kotor, Orientasi seksual, 
    mengancam, menyerang privasi seseorang, atau sebaliknya dari hukum apapun Anda setuju untuk 
    tidak mengirimkan materi yang dilindungi hak cipta kecuali jika 
    hak cipta memang dimiliki oleh Anda.</p>
    
    <p>Kami sebagai pemilik aplikasi ini juga berhak mengungkapkan identitas Anda (atau 
    apapun informasi yang kami ketahui tentang anda) jika terjadi keluhan atau tindakan legal 
    yang timbul dari pesan yang diposkan oleh Anda. Kami mencatat semua alamat protokol internet 
    yang mengakses situs ini.</p>
    
    <p>Harap dicatat bahwa iklan, surat berantai, skema piramida, dan 
    permohonan adalah tidak sesuai dengan aplikasi ini.</p>
    
    <p>Kami berhak menghapus konten apapun dengan alasan atau tanpa alasan apapun.
    Kami berhak menghentikan keanggotaan apapun dengan alasan atau tanpa 
    alasan sama sekali.</p>
    
    <p>Anda harus berusia minimal 13 tahun untuk menggunakan layanan ini.</p>'
];