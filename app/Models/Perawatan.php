<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perawatan extends Model
{
    use HasFactory;

    protected $fillable = ['nama_part', 'perawatan','gambar'];
    protected $table = 'perawatan';

    public function fillTable()
    {

        $perawatan = [
            [
                'nama_part' => 'Frame (rangka)',
                'perawatan' => 'Periksa frame secara berkala untuk memastikan tidak ada retakan atau kerusakan yang signifikan.
                                Bersihkan frame menggunakan air sabun lembut dan lap kain lembut untuk menghilangkan kotoran dan debu.
                                Hindari menggunakan bahan kimia yang keras atau abrasif yang dapat merusak lapisan pelindung frame.',
                'gambar' => 'assets/img/frame.jpg'
            ],
            [
                'nama_part' => 'Fork (garpu)',
                'perawatan' => 'Periksa garpu secara rutin untuk memastikan tidak ada kebocoran minyak atau kerusakan pada seal.
                                Periksa juga penyetelan dan penguncian garpu untuk memastikan kinerjanya optimal.
                                Lakukan servis rutin oleh mekanik jika diperlukan untuk menjaga performa garpu yang baik.',
                'gambar' => 'assets/img/fork.jpg'
            ],
            [
                'nama_part' => 'Shock Absorber (peredam kejut belakang)',
                'perawatan' => 'Periksa shock absorber secara rutin untuk memastikan tidak ada kebocoran minyak atau kerusakan pada seal.
                                Perhatikan juga tingkat tekanan udara dalam shock absorber untuk menjaga performa yang optimal.
                                Lakukan servis rutin oleh mekanik jika diperlukan untuk menjaga performa yang baik.',
                'gambar' => 'assets/img/shock.jpg'
            ],
            [
                'nama_part' => 'Wheels (roda)',
                'perawatan' => 'Periksa keausan dan kerusakan pada velg dan jari-jari secara rutin.
                                Pastikan roda tetap lurus dan tidak ada goresan yang signifikan pada velg.
                                Periksa tekanan udara dalam ban dan tambahkan atau kurangi sesuai rekomendasi produsen.',
                'gambar' => 'assets/img/wheel.jpg'
            ],
            [
                'nama_part' => 'Tires (ban)',
                'perawatan' => 'Periksa keausan, kerusakan, dan tanda-tanda kebocoran pada ban.
                                Pastikan ada cukup cengkeraman (grip) pada ban untuk menjaga traksi yang baik di medan yang berbeda.
                                Periksa tekanan udara dalam ban dan sesuaikan sesuai rekomendasi produsen.',
                'gambar' => 'assets/img/tires.jpg'
            ],
            [
                'nama_part' => 'Brakes (rem)',
                'perawatan' => 'Periksa kampas rem untuk memastikan masih ada ketebalan yang cukup dan tidak ada tanda-tanda aus yang berlebihan.
                                Periksa juga keausan pada cakram rem dan pastikan tidak ada goresan atau kerusakan yang signifikan.
                                Lakukan pemeriksaan dan penyetelan rutin pada sistem rem untuk memastikan performa pengereman yang baik.',
                'gambar' => 'assets/img/brake.jpg'
            ],
            [
                'nama_part' => 'Drivetrain (sistem penggerak)',
                'perawatan' => 'Bersihkan rantai secara teratur dan gunakan pelumas yang sesuai untuk mengurangi keausan dan mempertahankan performa penggerak.
                                Periksa keausan pada rantai, cassette, dan chainring, serta ganti jika diperlukan.
                                Pastikan pengoperasian gigi dan perpindahan rantai berjalan dengan mulus dan akurat.',
                'gambar' => 'assets/img/drive.jpg'
            ],
            [
                'nama_part' => 'Shifters (pengganti gigi)',
                'perawatan' => 'Periksa kabel pengganti gigi dan housing untuk memastikan tidak ada keausan, aus, atau kebocoran.
                                Lakukan penyetelan kabel pengganti gigi jika terjadi masalah dengan perpindahan gigi yang tidak akurat.
                                Bersihkan dan pelumasikan shifter secara berkala untuk mempertahankan kinerja yang baik.',
                'gambar' => 'assets/img/shifter.jpeg'
            ],
            [
                'nama_part' => 'Pedals (pedal)',
                'perawatan' => 'Periksa keausan dan kerusakan pada pedal.
                                Bersihkan pedal dari kotoran dan lumpur yang menempel untuk menjaga kinerja yang optimal.
                                Pastikan pedal tetap terpasang dengan kuat dan kencangkan baut jika diperlukan.',
                'gambar' => 'assets/img/pedal.jpg'
            ],
            [
                'nama_part' => 'Handlebars (stang sepeda)',
                'perawatan' => 'Periksa stang sepeda untuk memastikan tidak ada retakan atau kerusakan yang signifikan.
                                Pastikan pegangan (grips) tetap terpasang dengan kuat dan ganti jika sudah aus atau rusak.
                                Lakukan penyetelan pada posisi dan sudut stang sepeda sesuai dengan kenyamanan dan preferensi pengendara.',
                'gambar' => 'assets/img/handle.jpg'
            ],
            [
                'nama_part' => 'Stem (penjepit stang)',
                'perawatan' => 'Periksa penjepit stang (stem) untuk memastikan tidak ada keausan atau kerusakan pada baut dan clampnya.
                                Pastikan penjepit stang terpasang dengan kuat dan sesuai dengan posisi stang yang diinginkan.
                                Jaga agar stem tetap kencang dan sesuai dengan preferensi pengendara.',
                'gambar' => 'assets/img/stem.jpg'
            ],
            [
                'nama_part' => 'Saddle (sadel)',
                'perawatan' => 'Periksa kondisi dan keausan pada sadel.
                                Atur tinggi sadel sesuai dengan kenyamanan dan preferensi pengendara.
                                Pastikan sadel terpasang dengan kuat dan tidak goyang.',
                'gambar' => 'assets/img/sadel.jpg'
            ],
            [
                'nama_part' => 'Chain (rantai)',
                'perawatan' => 'Bersihkan dan pelumas rantai secara teratur untuk mengurangi keausan dan menjaga kinerja penggerak.
                                Periksa keausan dan regangkan atau ganti rantai jika diperlukan.
                                Pastikan rantai tetap bersih dan bebas dari kotoran atau lumpur yang dapat merusak komponen lainnya.',
                'gambar' => 'assets/img/chain.jpg'
            ],
            [
                'nama_part' => 'Bottom Bracket (bearings)',
                'perawatan' => 'Periksa bantalan (bearings) bottom bracket secara rutin untuk memastikan tidak ada keausan atau kebocoran.
                                Jaga agar bottom bracket tetap kencang dan sesuai dengan spesifikasi produsen.
                                Lakukan servis rutin oleh mekanik jika diperlukan untuk menjaga performa yang baik.',
                'gambar' => 'assets/img/bb.jpg'
            ],
            [
                'nama_part' => 'Headset (bantalan setang)',
                'perawatan' => 'Periksa bantalan (bearings) headset secara rutin untuk memastikan tidak ada keausan atau kerusakan.
                                Jaga agar headset tetap kencang dan tidak ada gerakan yang tidak diinginkan.
                                Lakukan servis rutin oleh mekanik jika diperlukan untuk menjaga performa yang baik.',
                'gambar' => 'assets/img/head.jpg'
            ],
            [
                'nama_part' => 'Cables and Housings (kabel dan housing)',
                'perawatan' => 'Periksa kabel dan housing secara berkala untuk memastikan tidak ada keausan, kebocoran, atau gesekan berlebih.
                Ganti kabel dan housing jika ada tanda-tanda kerusakan atau jika performanya menurun.
                Pastikan kabel terpasang dengan kuat dan sesuai dengan rute yang tepat untuk menghindari gesekan berlebih.',
                'gambar' => 'assets/img/kabel.jpg'
            ],
            [
                'nama_part' => 'Bolts and Nuts (baut dan mur)',
                'perawatan' => 'Periksa baut dan mur pada sepeda secara berkala untuk memastikan tidak ada kekendoran atau keausan.
                Periksa kencangkan baut dan mur yang longgar untuk menghindari kerusakan atau kehilangan komponen.',
                'gambar' => 'assets/img/bolt.jpg'
            ],
            [
                'nama_part' => 'Suspension Linkages (penghubung suspensi)',
                'perawatan' => 'Periksa penghubung suspensi secara rutin untuk memastikan tidak ada keausan, kebocoran, atau kerusakan yang signifikan.
                Jaga agar penghubung suspensi tetap kering dan bersih dari kotoran atau lumpur yang dapat merusak kinerja suspensi.',
                'gambar' => 'assets/img/link.jpg'
            ],
            [
                'nama_part' => 'Disc Brake Pads (kampas rem cakram)',
                'perawatan' => 'Periksa kampas rem cakram secara berkala untuk memastikan masih ada ketebalan yang cukup dan tidak ada tanda-tanda aus yang berlebihan.
                Ganti kampas rem cakram jika sudah terlalu aus untuk menjaga kinerja pengereman yang optimal.',
                'gambar' => 'assets/img/pad.jpg'
            ],
            [
                'nama_part' => 'Suspension Fluid (cairan suspensi)',
                'perawatan' => 'Periksa level dan kondisi cairan suspensi secara rutin.
                Ganti cairan suspensi sesuai dengan rekomendasi produsen untuk menjaga performa suspensi yang baik.
                Jaga agar cairan suspensi tetap bersih dan bebas dari kotoran atau lumpur yang dapat merusak sistem suspensi',
                'gambar' => 'assets/img/fluid.jpg'
            ],
        ];
        return $perawatan;
    }
    
}
