<?php
// includes/data.php

$islands = [
    [
        'name' => 'Karimunjawa',
        'province' => 'Jawa Tengah',
        'desc' => '27 pulau kecil dengan terumbu karang perawan, pasir putih & air toska jernih.',
        'tag' => 'Island'
    ],
    [
        'name' => 'Menjangan Kecil',
        'province' => 'Jawa Tengah',
        'desc' => 'Snorkeling & diving dengan visibilitas hingga 20 meter di laut biru.',
        'tag' => 'Island'
    ],
    [
        'name' => 'Pulau Sempu',
        'province' => 'Jawa Timur',
        'desc' => 'Laguna tersembunyi Segara Anakan — permata alam yang terlindungi hutan tropis.',
        'tag' => 'Island'
    ],
    [
        'name' => 'Pulau Bawean',
        'province' => 'Jawa Timur',
        'desc' => 'Rusa Bawean endemik, pantai tak berpenghuni & keasrian alam terjaga.',
        'tag' => 'Island'
    ],
    [
        'name' => 'Pulau Panjang',
        'province' => 'Jawa Tengah',
        'desc' => 'Pulau kecil berselimut hutan cemara dengan pantai berpasir putih halus.',
        'tag' => 'Island'
    ],
    [
        'name' => 'Pulau Merah',
        'province' => 'Jawa Timur',
        'desc' => 'Bukit merah ikonik di tengah laut — lokasi surfing terbaik Banyuwangi.',
        'tag' => 'Island'
    ],
];

$mountains = [
    [
        'name' => 'Gunung Semeru',
        'province' => 'Jawa Timur',
        'desc' => 'Atap Pulau Jawa — Mahameru yang sakral dan legendaris.',
        'elev' => '3.676m'
    ],
    [
        'name' => 'Gunung Slamet',
        'province' => 'Jawa Tengah',
        'desc' => 'Gunung berapi aktif tertinggi kedua di Jawa — kawah yang memesona.',
        'elev' => '3.428m'
    ],
    [
        'name' => 'Gunung Raung',
        'province' => 'Jawa Timur',
        'desc' => 'Kaldera aktif terbesar di Jawa — tantangan sejati bagi pendaki sejati.',
        'elev' => '3.332m'
    ],
    [
        'name' => 'Gunung Merapi',
        'province' => 'DI Yogyakarta',
        'desc' => 'Paling aktif di Indonesia — pemandangan yang tak terlupakan dari Kaliurang.',
        'elev' => '2.930m'
    ],
    [
        'name' => 'Kawah Ijen',
        'province' => 'Jawa Timur',
        'desc' => 'Api biru mistis — fenomena alam langka yang hanya ada dua di dunia.',
        'elev' => '2.386m'
    ],
    [
        'name' => 'Gunung Bromo',
        'province' => 'Jawa Timur',
        'desc' => 'Lautan pasir & kawah aktif yang menjadi ikon Jawa Timur sejagat raya.',
        'elev' => '2.329m'
    ],
];

$beaches_featured = [
    [
        'name' => 'Pantai Plengkung (G-Land)',
        'province' => 'Jawa Timur',
        'location' => 'Banyuwangi',
        'desc' => 'Salah satu ombak terbaik di dunia untuk surfing — surga para peselancar profesional di ujung Jawa.',
        'rating' => '5.0',
        'prov_slug' => 'jawatimur'
    ],
    [
        'name' => 'Pantai Nirwana Karimunjawa',
        'province' => 'Jawa Tengah',
        'location' => 'Karimunjawa',
        'desc' => 'Pantai berpasir putih bersih dengan air sebening kristal dan terumbu karang yang menakjubkan.',
        'rating' => '4.8',
        'prov_slug' => 'jawatengah'
    ]
];

$beaches_small = [
    [
        'name' => 'Pantai Palabuhanratu',
        'province' => 'Jawa Barat',
        'location' => 'Sukabumi',
        'desc' => 'Pantai misterius Nyi Roro Kidul dengan deburan ombak Samudra Hindia yang dramatis.',
        'rating' => '4.5',
        'prov_slug' => 'jawabarat'
    ],
    [
        'name' => 'Pantai Parangtritis',
        'province' => 'DI Yogyakarta',
        'location' => 'Bantul',
        'desc' => 'Gumuk pasir unik satu-satunya di Asia Tenggara — surga paralayang dan fotografi dramatis.',
        'rating' => '4.6',
        'prov_slug' => 'yogya'
    ],
    [
        'name' => 'Pantai Teluk Hijau',
        'province' => 'Jawa Timur',
        'location' => 'Banyuwangi',
        'desc' => 'Air laut berwarna hijau toska dalam pelukan tebing hijau — keajaiban tersembunyi Banyuwangi.',
        'rating' => '4.7',
        'prov_slug' => 'jawatimur'
    ],
    [
        'name' => 'Pantai Anyer',
        'province' => 'Banten',
        'location' => 'Serang',
        'desc' => 'Pantai populer dekat Jakarta dengan sunset memukau dan pemandangan Gunung Krakatau.',
        'rating' => '4.3',
        'prov_slug' => 'banten'
    ],
    [
        'name' => 'Pantai Papuma',
        'province' => 'Jawa Timur',
        'location' => 'Jember',
        'desc' => 'Batu karang ikonik berdiri gagah di tepi pantai pasir putih — spot foto paling keren Jawa Timur.',
        'rating' => '4.7',
        'prov_slug' => 'jawatimur'
    ],
    [
        'name' => 'Pantai Sawarna',
        'province' => 'Banten',
        'location' => 'Lebak',
        'desc' => 'Ombak besar liar untuk surfing, gua-gua karang dan laguna eksotis di tepi hutan.',
        'rating' => '4.6',
        'prov_slug' => 'banten'
    ]
];

$pantai_lengkap = [
    ['Anyer', 'Serang', 'Banten', 'Sunset, Snorkeling, Krakatau View', '4.3', 'banten'],
    ['Carita', 'Pandeglang', 'Banten', 'Keluarga, Resort, Snorkeling', '4.2', 'banten'],
    ['Sawarna', 'Lebak', 'Banten', 'Surfing, Gua Karang, Laguna', '4.6', 'banten'],
    ['Tanjung Lesung', 'Pandeglang', 'Banten', 'Resort Mewah, Pasir Putih', '4.4', 'banten'],
    ['Palabuhanratu', 'Sukabumi', 'Jawa Barat', 'Ombak Besar, Budaya, Seafood', '4.5', 'jawabarat'],
    ['Ujung Genteng', 'Sukabumi', 'Jawa Barat', 'Penyu Hijau, Surfing, Alam Liar', '4.7', 'jawabarat'],
    ['Pangandaran', 'Ciamis', 'Jawa Barat', 'Snorkeling, Cagar Alam, Green Canyon', '4.8', 'jawabarat'],
    ['Batu Karas', 'Ciamis', 'Jawa Barat', 'Surfing Pemula, Tenang, Estetik', '4.5', 'jawabarat'],
    ['Sindangkerta', 'Tasikmalaya', 'Jawa Barat', 'Penyu, Pasir Putih, Tenang', '4.3', 'jawabarat'],
    ['Karang Bolong', 'Kebumen', 'Jawa Tengah', 'Terowongan Karang Alami, Dramatis', '4.4', 'jawatengah'],
    ['Suwuk', 'Kebumen', 'Jawa Tengah', 'Muara Sungai, Ombak Besar', '4.2', 'jawatengah'],
    ['Karimunjawa', 'Jepara', 'Jawa Tengah', 'Snorkeling, Diving, Pasir Putih', '4.9', 'jawatengah'],
    ['Tirto Samudro', 'Jepara', 'Jawa Tengah', 'Batu Karang, Sunset, Sepi', '4.3', 'jawatengah'],
    ['Trianggulasi', 'Banyuwangi', 'Jawa Timur', 'Baluran NP, Penyu, Alam Liar', '4.5', 'jawatimur'],
    ['Parangtritis', 'Bantul', 'DI Yogyakarta', 'Gumuk Pasir, Paralayang, Sunrise', '4.6', 'yogya'],
    ['Indrayanti', 'Gunungkidul', 'DI Yogyakarta', 'Pasir Putih, Cafe Tepi Pantai', '4.7', 'yogya'],
    ['Baron', 'Gunungkidul', 'DI Yogyakarta', 'Nelayan, Sumber Air Tawar, Seafood', '4.4', 'yogya'],
    ['Siung', 'Gunungkidul', 'DI Yogyakarta', 'Panjat Tebing, Batu Karang Dramatis', '4.8', 'yogya'],
    ['Wediombo', 'Gunungkidul', 'DI Yogyakarta', 'Laguna Alami, Sepi, Snorkeling', '4.7', 'yogya'],
    ['Plengkung (G-Land)', 'Banyuwangi', 'Jawa Timur', 'Surfing World Class, Ombak 6 Meter', '5.0', 'jawatimur'],
    ['Teluk Hijau', 'Banyuwangi', 'Jawa Timur', 'Air Hijau Toska, Tebing, Perawan', '4.8', 'jawatimur'],
    ['Papuma', 'Jember', 'Jawa Timur', 'Batu Karang Ikonik, Foto, Sunset', '4.7', 'jawatimur'],
    ['Watu Dodol', 'Banyuwangi', 'Jawa Timur', 'Batu Raksasa, Batas Selat Bali', '4.3', 'jawatimur'],
    ['Balekambang', 'Malang', 'Jawa Timur', 'Pura di Laut, Dramatis, Budaya', '4.8', 'jawatimur'],
    ['Goa Cina', 'Malang', 'Jawa Timur', 'Tiga Pulau, Sunset Indah, Sepi', '4.7', 'jawatimur'],
    ['Klayar', 'Pacitan', 'Jawa Timur', 'Seruling Samudra, Sphinx Rock', '4.9', 'jawatimur'],
    ['Srau', 'Pacitan', 'Jawa Timur', 'Surfing, Alam Liar, Sepi', '4.5', 'jawatimur'],
    ['Kenjeran', 'Surabaya', 'Jawa Timur', 'Pura Ganggang, Kuliner, Kota', '3.8', 'jawatimur'],
];

$wisata_lain = [
    [
        'name' => 'Candi Borobudur',
        'province' => 'Jawa Tengah',
        'location' => 'Magelang',
        'desc' => 'Candi Buddha terbesar di dunia, Warisan UNESCO abad ke-8 yang megah dan mistis.',
        'tag' => 'Culture',
        'rating' => '5.0'
    ],
    [
        'name' => 'Candi Prambanan',
        'province' => 'DI Yogyakarta',
        'location' => 'Sleman',
        'desc' => 'Kompleks candi Hindu paling megah di Asia Tenggara — persembahan agung untuk Siwa.',
        'tag' => 'Culture',
        'rating' => '4.9'
    ],
    [
        'name' => 'Kawah Putih Ciwidey',
        'province' => 'Jawa Barat',
        'location' => 'Bandung',
        'desc' => 'Danau vulkanik berwarna hijau kebiruan di ketinggian 2.190 mdpl — pemandangan negeri dongeng.',
        'tag' => 'Nature',
        'rating' => '4.7'
    ],
    [
        'name' => 'Taman Nasional Baluran',
        'province' => 'Jawa Timur',
        'location' => 'Situbondo',
        'desc' => '"Afrika van Java" — sabana luas, banteng liar, rusa dan ribuan burung di ujung timur Jawa.',
        'tag' => 'Nature',
        'rating' => '4.8'
    ],
    [
        'name' => 'Dieng Plateau',
        'province' => 'Jawa Tengah',
        'location' => 'Wonosobo',
        'desc' => 'Dataran tinggi mistis dengan kawah warna-warni, candi kuno dan golden sunrise telaga warna.',
        'tag' => 'Mountain',
        'rating' => '4.8'
    ],
    [
        'name' => 'Kraton Yogyakarta',
        'province' => 'DI Yogyakarta',
        'location' => 'Kota Yogyakarta',
        'desc' => 'Jantung Kesultanan Ngayogyakarta — pusat seni batik, wayang, dan gamelan yang masih hidup.',
        'tag' => 'Culture',
        'rating' => '4.7'
    ]
];

$culinary = [
    ['Gudeg Yogyakarta', 'Sayur nangka muda dimasak santan berjam-jam — manis legit khas Kota Pelajar.'],
    ['Rawon Surabaya', 'Sup daging hitam berkuah kluwek — rasa umami yang kaya dan aroma rempah yang khas.'],
    ['Soto Lamongan', 'Kuah kuning segar dengan koya, ayam kampung dan telur — sarapan paling nikmat di Jawa.'],
    ['Nasi Liwet Solo', 'Nasi gurih santan dengan ayam suwir, telur rebus dan kuah areh — kelezatan dari Kota Batik.'],
    ['Pecel Madiun', 'Sayuran segar disiram bumbu kacang pedas — makanan sehat penuh vitamin dari Jawa Timur.'],
    ['Empal Gentong Cirebon', 'Gulai daging sapi khas Cirebon dimasak di gentong tanah liat — kuah santan kuning yang gurih.'],
    ['Bebek Goreng H. Slamet', 'Bebek goreng legendaris dari Surabaya — renyah di luar, juicy di dalam, sambal bawang mantap.'],
];
