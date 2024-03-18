<?php
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "Pantai",
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ]
];

function tampilkanMenuBertingkat(array $menu, $level = 0) {
    $indentation = str_repeat("  ", $level);
    echo "{$indentation}<ul>\n";
    foreach ($menu as $item) {
        echo "{$indentation}  <li>{$item['nama']}</li>\n";
        if (isset($item['subMenu'])) {
            tampilkanMenuBertingkat($item['subMenu'], $level + 1);
        }
    }
    echo "{$indentation}</ul>\n";
}

tampilkanMenuBertingkat($menu);
?>
