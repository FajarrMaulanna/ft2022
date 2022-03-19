<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\Event;
use App\Models\Linimasa;
use App\Models\Partner;
use App\Models\Sponsor;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'nama' => 'Panitia Firetech',
            'username' => 'firetech2022',
            'email' => 'neotelemetri@gmail.com',
            'password' => Hash::make('F1r3T3cH'),
        ]);

        $events = [
            [
                'nama' => 'National Network Competition',
                'slug' => 'nnc',
                'foto' => '`nnc.png',
                'cakupan' => 'Sumatera Barat, Riau, Jambi',
                'kategori' => 'SMA/SMK/Sederajat',
                'deskripsi' => 'National Network Competition adalah salah satu kegiatan FireTech 2022 yang merupakan kompetisi jaringan tingkat SMK/Sederajat nasional. Dalam kompetisi ini kemampuan siswa smk pada bidang jaringan akan diuji. Dengan adanya kompetisi ini diharapkan mampu mengasah kemampuan dari peserta terutama dibidang jaringan',
                'panduan' => 'https://drive.google.com/file/d/1w93wgfz_kOl0DbqWdr6buU8WTeO8ahR5/view?usp=sharing',
            ],
            [
                'nama' => 'E-Sport : Valorant Tournament',
                'slug' => 'valorant',
                'foto' => 'valorant.png',
                'cakupan' => 'National',
                'kategori' => 'Mahasiswa',
                'deskripsi' => 'Dengan mengangkat semangat kompetisi e-sport, Firetech 2022 kali ini akan mengadakan turnamen valorant. Jadilah yang terbaik',
                'panduan' => 'https://drive.google.com/file/d/1wTTsykrlOCfPifODy8reNeJFfUHRJOTd/view?usp=sharing',
            ],
            [
                'nama' => 'Ideathon',
                'slug' => 'ideathon',
                'foto' => 'ideathon.png',
                'cakupan' => 'National',
                'kategori' => 'SMA/SMK/Sederajat',
                'deskripsi' => 'Ideathon mengangkat tema "Return to Campus Along with IT". Pada lomba ini para peserta akan mengajukan inovasi yang bermanfaat dalam menghadapi permasalahan yang sesuai dengan tema. Peserta yang lolos ke babak final nantinya akan berkesempatan mempresentasikan inovasi yang sudah dirancang',
                'panduan' => 'https://drive.google.com/file/d/1RkRrLhoe9I0jOKg_b_x9wfVypI5-yxwe/view?usp=sharing',
            ],
            [
                'nama' => 'Workshop UI/UX',
                'slug' => 'uiux',
                'foto' => 'uiux.png',
                'cakupan' => 'National',
                'kategori' => 'Umum',
                'deskripsi' => 'Workshop UI/UX bertujuan untuk meningkatkan kemampuan dari peserta di bidang pengembangan User Interface/User Experience. Dalam kegiatan ini akan dilaksanakan pelatihan selama 3 hari untuk mengembangkan skill UI/UX dari peserta. Nantinya akan diadakan pula project yang mengimplementasikan ilmu yang didapatkan selama pelatihan',
                'panduan' => 'https://drive.google.com/file/d/1RkRrLhoe9I0jOKg_b_x9wfVypI5-yxwe/view?usp=sharing',
            ],
            [
                'nama' => 'Webinar IT',
                'slug' => 'it',
                'foto' => 'it.png',
                'cakupan' => 'National',
                'kategori' => 'Umum',
                'deskripsi' => 'Webinar IT bertujuan untuk meningkatkan wawasan masyarakat di bidang teknologi informasi. Kegiatan ini nantinya akan membahas seputar dunia IT dan karir di dalamnya',
                'panduan' => 'https://drive.google.com/file/d/1RkRrLhoe9I0jOKg_b_x9wfVypI5-yxwe/view?usp=sharing',
            ],
        ];
        foreach ($events as $event) {
            Event::create($event);
        }

        $partners = [
            [
                'nama' => 'Info Lomba dan Mahasiswa',
                'logo' => 'ilb.png',
            ],
            [
                'nama' => 'Info Lomba Nasional',
                'logo' => 'iln.jpg',
            ],
        ];
        foreach ($partners as $partner) {
            Partner::create($partner);
        }

        $sponsors = [
            [
                'nama' => 'PT. Semen Padang',
                'logo' => 'sp.png',
                'deskripsi' => 'PT Semen Padang adalah salah satu produsen semen tertua di Indonesia yang tergabung pada PT Semen Indonesia (Persero) Tbk',
                'status' => '4',
            ],
            [
                'nama' => 'PT. Carano Integrasi Teknologi',
                'logo' => 'cit.png',
                'deskripsi' => 'CIT (Carano Integrasi Teknologi) adalah perusahaan IT yang menyediakan berbagai layanan dan jasa seputar IT seperti pelatihan dan sertifikasi mikrotik, IT konsultan, pengembangan aplikasi, service jaringan, dan sebagainya',
                'status' => '4',
            ],
            [
                'nama' => 'English Training Center',
                'logo' => 'etc.jpg',
                'deskripsi' => '',
                'status' => '2',
            ],
            [
                'nama' => 'Nurul Fikri',
                'logo' => 'nf.png',
                'deskripsi' => '',
                'status' => '1',
            ],
        ];
        foreach ($sponsors as $sponsor) {
            Sponsor::create($sponsor);
        }

        $linimasas = [
            [
                'event_id' => '1',
                'nama' => 'Pendaftaran',
                'deskripsi' => 'Pendaftaran melalui website firetech.neotelemetri.com (online)',
                'tanggal_awal' => '2022-03-01',
                'tanggal_akhir' => '2022-03-27',
            ],
            [
                'event_id' => '1',
                'nama' => 'Babak Penyisihan',
                'deskripsi' => 'Babak penyisihan melalui website firetech.neotelemetri.com (online)',
                'tanggal_awal' => '2022-03-28',
                'tanggal_akhir' => '2022-03-28',
            ],
            [
                'event_id' => '1',
                'nama' => 'Pengumuman Semifinalis',
                'deskripsi' => 'Pengumuman peserta yang lolos ke babak semifinal',
                'tanggal_awal' => '2022-04-04',
                'tanggal_akhir' => '2022-04-04',
            ],
            [
                'event_id' => '1',
                'nama' => 'Babak Semifinal',
                'deskripsi' => 'Babak semifinal melalui website firetech.neotelemetri.com (online)',
                'tanggal_awal' => '2022-04-10',
                'tanggal_akhir' => '2022-04-10',
            ],
            [
                'event_id' => '1',
                'nama' => 'Pengumuman Finalis',
                'deskripsi' => 'Pengumuman peserta yang lolos ke babak final',
                'tanggal_awal' => '2022-04-17',
                'tanggal_akhir' => '2022-04-17',
            ],
            [
                'event_id' => '1',
                'nama' => 'Konfirmasi Kehadiran Finalis',
                'deskripsi' => 'Konfirmasi kehadiran peserta final',
                'tanggal_awal' => '2022-04-18',
                'tanggal_akhir' => '2022-04-20',
            ],
            [
                'event_id' => '1',
                'nama' => 'Technical Meeting Babak Final',
                'deskripsi' => 'Techinal meeting babak final bagi peserta final',
                'tanggal_awal' => '2022-05-13',
                'tanggal_akhir' => '2022-05-13',
            ],
        ];
        foreach ($linimasas as $linimasa) {
            Linimasa::create($linimasa);
        }
    }
}
