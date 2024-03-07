<?php
$data = [
    [
        'nama' => 'Andi',
        'tahun' => 2008,
    ],
    [
        'nama' => 'Beni',
        'tahun' => 2001,
    ],
    [
        'nama' => 'Dani',
        'tahun' => 2004,
    ],
    [
        'nama' => 'Eko',
        'tahun' => 2006,
    ]
];
foreach ($data as $key => $value) {
    if ($value['tahun'] % 4 == 0) {
        echo "{$value['nama']} : lahir di tahun kabisat ({$value['tahun']})<br>";
    } else {
        echo "{$value['nama']} : lahir bukan di tahun kabisat ({$value['tahun']})<br>";
    }
}