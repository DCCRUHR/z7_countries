<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:z7_countries/Resources/Private/Language/locallang_db.xlf:tx_z7countries_country',
        'label' => 'title',
        'default_sortby' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'rootLevel' => 1,
        'adminOnly' => true,
        'enablecolumns' => [
            'disabled' => 'hidden'
        ],
        'searchFields' => 'title, iso_code',
        'typeicon_classes' => [
            'default' => 'flags-multiple',
            'mask' => 'flags-###TYPE###'
        ],
        'typeicon_column' => 'flag'
    ],
    'palettes' => [
        'visibility' => [
            'showitem' => 'hidden, enabled',
            'label' => 'LLL:EXT:z7_countries/Resources/Private/Language/locallang_db.xlf:tx_z7countries_country.palette.visibility'
        ]
    ],
    'types' => [
        '1' => [
            'showitem' => '--palette--;;visibility, title, iso_code, parameter, flag'
        ]
    ],
    'columns' => [
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:z7_countries/Resources/Private/Language/locallang_db.xlf:tx_z7countries_country.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    ['label' => '']
                ],
                'default' => 0
            ]
        ],
        'enabled' => [
            'exclude' => true,
            'label' => 'LLL:EXT:z7_countries/Resources/Private/Language/locallang_db.xlf:tx_z7countries_country.enabled',
            'config' => [
                'type' => 'check',
                'items' => [
                    ['label' => '']
                ],
                'default' => 1
            ]
        ],
        'title' => [
            'exclude' => false,
            'l10n_mode' => 'exclude',
            'label' => 'LLL:EXT:z7_countries/Resources/Private/Language/locallang_db.xlf:tx_z7countries_country.title',
            'config' => [
                'type' => 'input',
                'required' => true,
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'iso_code' => [
            'exclude' => false,
            'label' => 'LLL:EXT:z7_countries/Resources/Private/Language/locallang_db.xlf:tx_z7countries_country.iso_code',
            'description' => 'LLL:EXT:z7_countries/Resources/Private/Language/locallang_db.xlf:tx_z7countries_country.iso_code.description',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'required' => true,
                'eval' => 'trim,unique',
                'max' => 2,
                'items' => [
                    ['label' =>'----','value' => ''], ['label' =>'AD', 'value' => 'AD'], ['label' =>'AE', 'value' => 'AE'], ['label' =>'AF', 'value' => 'AF'], ['label' =>'AG', 'value' => 'AG'], ['label' =>'AI', 'value' => 'AI'], ['label' =>'AL', 'value' => 'AL'], ['label' =>'AM', 'value' => 'AM'], ['label' =>'AO', 'value' => 'AO'], ['label' =>'AQ', 'value' => 'AQ'],
                    ['label' =>'AR', 'value' => 'AR'], ['label' =>'AS', 'value' => 'AS'], ['label' =>'AT', 'value' => 'AT'], ['label' =>'AU', 'value' => 'AU'], ['label' =>'AW', 'value' => 'AW'], ['label' =>'AX', 'value' => 'AX'], ['label' =>'AZ', 'value' => 'AZ'], ['label' =>'BA', 'value' => 'BA'], ['label' =>'BB', 'value' => 'BB'], ['label' =>'BD', 'value' => 'BD'],
                    ['label' =>'BE', 'value' => 'BE'], ['label' =>'BF', 'value' => 'BF'], ['label' =>'BG', 'value' => 'BG'], ['label' =>'BH', 'value' => 'BH'], ['label' =>'BI', 'value' => 'BI'], ['label' =>'BJ', 'value' => 'BJ'], ['label' =>'BL', 'value' => 'BL'], ['label' =>'BM', 'value' => 'BM'], ['label' =>'BN', 'value' => 'BN'], ['label' =>'BO', 'value' => 'BO'],
                    ['label' =>'BQ', 'value' => 'BQ'], ['label' =>'BR', 'value' => 'BR'], ['label' =>'BS', 'value' => 'BS'], ['label' =>'BT', 'value' => 'BT'], ['label' =>'BV', 'value' => 'BV'], ['label' =>'BW', 'value' => 'BW'], ['label' =>'BY', 'value' => 'BY'], ['label' =>'BZ', 'value' => 'BZ'], ['label' =>'CA', 'value' => 'CA'], ['label' =>'CC', 'value' => 'CC'],
                    ['label' =>'CD', 'value' => 'CD'], ['label' =>'CF', 'value' => 'CF'], ['label' =>'CG', 'value' => 'CG'], ['label' =>'CH', 'value' => 'CH'], ['label' =>'CI', 'value' => 'CI'], ['label' =>'CK', 'value' => 'CK'], ['label' =>'CL', 'value' => 'CL'], ['label' =>'CM', 'value' => 'CM'], ['label' =>'CN', 'value' => 'CN'], ['label' =>'CO', 'value' => 'CO'],
                    ['label' =>'CR', 'value' => 'CR'], ['label' =>'CU', 'value' => 'CU'], ['label' =>'CV', 'value' => 'CV'], ['label' =>'CW', 'value' => 'CW'], ['label' =>'CX', 'value' => 'CX'], ['label' =>'CY', 'value' => 'CY'], ['label' =>'CZ', 'value' => 'CZ'], ['label' =>'DE', 'value' => 'DE'], ['label' =>'DJ', 'value' => 'DJ'], ['label' =>'DK', 'value' => 'DK'],
                    ['label' =>'DM', 'value' => 'DM'], ['label' =>'DO', 'value' => 'DO'], ['label' =>'DZ', 'value' => 'DZ'], ['label' =>'EC', 'value' => 'EC'], ['label' =>'EE', 'value' => 'EE'], ['label' =>'EG', 'value' => 'EG'], ['label' =>'EH', 'value' => 'EH'], ['label' =>'ER', 'value' => 'ER'], ['label' =>'ES', 'value' => 'ES'], ['label' =>'ET', 'value' => 'ET'],
                    ['label' =>'FI', 'value' => 'FI'], ['label' =>'FJ', 'value' => 'FJ'], ['label' =>'FK', 'value' => 'FK'], ['label' =>'FM', 'value' => 'FM'], ['label' =>'FO', 'value' => 'FO'], ['label' =>'FR', 'value' => 'FR'], ['label' =>'GA', 'value' => 'GA'], ['label' =>'GB', 'value' => 'GB'], ['label' =>'GD', 'value' => 'GD'], ['label' =>'GE', 'value' => 'GE'],
                    ['label' =>'GF', 'value' => 'GF'], ['label' =>'GG', 'value' => 'GG'], ['label' =>'GH', 'value' => 'GH'], ['label' =>'GI', 'value' => 'GI'], ['label' =>'GL', 'value' => 'GL'], ['label' =>'GM', 'value' => 'GM'], ['label' =>'GN', 'value' => 'GN'], ['label' =>'GP', 'value' => 'GP'], ['label' =>'GQ', 'value' => 'GQ'], ['label' =>'GR', 'value' => 'GR'],
                    ['label' =>'GS', 'value' => 'GS'], ['label' =>'GT', 'value' => 'GT'], ['label' =>'GU', 'value' => 'GU'], ['label' =>'GW', 'value' => 'GW'], ['label' =>'GY', 'value' => 'GY'], ['label' =>'HK', 'value' => 'HK'], ['label' =>'HM', 'value' => 'HM'], ['label' =>'HN', 'value' => 'HN'], ['label' =>'HR', 'value' => 'HR'], ['label' =>'HT', 'value' => 'HT'],
                    ['label' =>'HU', 'value' => 'HU'], ['label' =>'ID', 'value' => 'ID'], ['label' =>'IE', 'value' => 'IE'], ['label' =>'IL', 'value' => 'IL'], ['label' =>'IM', 'value' => 'IM'], ['label' =>'IN', 'value' => 'IN'], ['label' =>'IO', 'value' => 'IO'], ['label' =>'IQ', 'value' => 'IQ'], ['label' =>'IR', 'value' => 'IR'], ['label' =>'IS', 'value' => 'IS'],
                    ['label' =>'IT', 'value' => 'IT'], ['label' =>'JE', 'value' => 'JE'], ['label' =>'JM', 'value' => 'JM'], ['label' =>'JO', 'value' => 'JO'], ['label' =>'JP', 'value' => 'JP'], ['label' =>'KE', 'value' => 'KE'], ['label' =>'KG', 'value' => 'KG'], ['label' =>'KH', 'value' => 'KH'], ['label' =>'KI', 'value' => 'KI'], ['label' =>'KM', 'value' => 'KM'],
                    ['label' =>'KN', 'value' => 'KN'], ['label' =>'KP', 'value' => 'KP'], ['label' =>'KR', 'value' => 'KR'], ['label' =>'KW', 'value' => 'KW'], ['label' =>'KY', 'value' => 'KY'], ['label' =>'KZ', 'value' => 'KZ'], ['label' =>'LA', 'value' => 'LA'], ['label' =>'LB', 'value' => 'LB'], ['label' =>'LC', 'value' => 'LC'], ['label' =>'LI', 'value' => 'LI'],
                    ['label' =>'LK', 'value' => 'LK'], ['label' =>'LR', 'value' => 'LR'], ['label' =>'LS', 'value' => 'LS'], ['label' =>'LT', 'value' => 'LT'], ['label' =>'LU', 'value' => 'LU'], ['label' =>'LV', 'value' => 'LV'], ['label' =>'LY', 'value' => 'LY'], ['label' =>'MA', 'value' => 'MA'], ['label' =>'MC', 'value' => 'MC'], ['label' =>'MD', 'value' => 'MD'],
                    ['label' =>'ME', 'value' => 'ME'], ['label' =>'MF', 'value' => 'MF'], ['label' =>'MG', 'value' => 'MG'], ['label' =>'MH', 'value' => 'MH'], ['label' =>'MK', 'value' => 'MK'], ['label' =>'ML', 'value' => 'ML'], ['label' =>'MM', 'value' => 'MM'], ['label' =>'MN', 'value' => 'MN'], ['label' =>'MO', 'value' => 'MO'], ['label' =>'MP', 'value' => 'MP'],
                    ['label' =>'MQ', 'value' => 'MQ'], ['label' =>'MR', 'value' => 'MR'], ['label' =>'MS', 'value' => 'MS'], ['label' =>'MT', 'value' => 'MT'], ['label' =>'MU', 'value' => 'MU'], ['label' =>'MV', 'value' => 'MV'], ['label' =>'MW', 'value' => 'MW'], ['label' =>'MX', 'value' => 'MX'], ['label' =>'MY', 'value' => 'MY'], ['label' =>'MZ', 'value' => 'MZ'],
                    ['label' =>'NA', 'value' => 'NA'], ['label' =>'NC', 'value' => 'NC'], ['label' =>'NE', 'value' => 'NE'], ['label' =>'NF', 'value' => 'NF'], ['label' =>'NG', 'value' => 'NG'], ['label' =>'NI', 'value' => 'NI'], ['label' =>'NL', 'value' => 'NL'], ['label' =>'NO', 'value' => 'NO'], ['label' =>'NP', 'value' => 'NP'], ['label' =>'NR', 'value' => 'NR'],
                    ['label' =>'NU', 'value' => 'NU'], ['label' =>'NZ', 'value' => 'NZ'], ['label' =>'OM', 'value' => 'OM'], ['label' =>'PA', 'value' => 'PA'], ['label' =>'PE', 'value' => 'PE'], ['label' =>'PF', 'value' => 'PF'], ['label' =>'PG', 'value' => 'PG'], ['label' =>'PH', 'value' => 'PH'], ['label' =>'PK', 'value' => 'PK'], ['label' =>'PL', 'value' => 'PL'],
                    ['label' =>'PM', 'value' => 'PM'], ['label' =>'PN', 'value' => 'PN'], ['label' =>'PR', 'value' => 'PR'], ['label' =>'PS', 'value' => 'PS'], ['label' =>'PT', 'value' => 'PT'], ['label' =>'PW', 'value' => 'PW'], ['label' =>'PY', 'value' => 'PY'], ['label' =>'QA', 'value' => 'QA'], ['label' =>'RE', 'value' => 'RE'], ['label' =>'RO', 'value' => 'RO'],
                    ['label' =>'RS', 'value' => 'RS'], ['label' =>'RU', 'value' => 'RU'], ['label' =>'RW', 'value' => 'RW'], ['label' =>'SA', 'value' => 'SA'], ['label' =>'SB', 'value' => 'SB'], ['label' =>'SC', 'value' => 'SC'], ['label' =>'SD', 'value' => 'SD'], ['label' =>'SE', 'value' => 'SE'], ['label' =>'SG', 'value' => 'SG'], ['label' =>'SH', 'value' => 'SH'],
                    ['label' =>'SI', 'value' => 'SI'], ['label' =>'SJ', 'value' => 'SJ'], ['label' =>'SK', 'value' => 'SK'], ['label' =>'SL', 'value' => 'SL'], ['label' =>'SM', 'value' => 'SM'], ['label' =>'SN', 'value' => 'SN'], ['label' =>'SO', 'value' => 'SO'], ['label' =>'SR', 'value' => 'SR'], ['label' =>'SS', 'value' => 'SS'], ['label' =>'ST', 'value' => 'ST'],
                    ['label' =>'SV', 'value' => 'SV'], ['label' =>'SX', 'value' => 'SX'], ['label' =>'SY', 'value' => 'SY'], ['label' =>'SZ', 'value' => 'SZ'], ['label' =>'TC', 'value' => 'TC'], ['label' =>'TD', 'value' => 'TD'], ['label' =>'TF', 'value' => 'TF'], ['label' =>'TG', 'value' => 'TG'], ['label' =>'TH', 'value' => 'TH'], ['label' =>'TJ', 'value' => 'TJ'],
                    ['label' =>'TK', 'value' => 'TK'], ['label' =>'TL', 'value' => 'TL'], ['label' =>'TM', 'value' => 'TM'], ['label' =>'TN', 'value' => 'TN'], ['label' =>'TO', 'value' => 'TO'], ['label' =>'TR', 'value' => 'TR'], ['label' =>'TT', 'value' => 'TT'], ['label' =>'TV', 'value' => 'TV'], ['label' =>'TW', 'value' => 'TW'], ['label' =>'TZ', 'value' => 'TZ'],
                    ['label' =>'UA', 'value' => 'UA'], ['label' =>'UG', 'value' => 'UG'], ['label' =>'UM', 'value' => 'UM'], ['label' =>'US', 'value' => 'US'], ['label' =>'UY', 'value' => 'UY'], ['label' =>'UZ', 'value' => 'UZ'], ['label' =>'VA', 'value' => 'VA'], ['label' =>'VC', 'value' => 'VC'], ['label' =>'VE', 'value' => 'VE'], ['label' =>'VG', 'value' => 'VG'],
                    ['label' =>'VI', 'value' => 'VI'], ['label' =>'VN', 'value' => 'VN'], ['label' =>'VU', 'value' => 'VU'], ['label' =>'WF', 'value' => 'WF'], ['label' =>'WS', 'value' => 'WS'], ['label' =>'YE', 'value' => 'YE'], ['label' =>'YT', 'value' => 'YT'], ['label' =>'ZA', 'value' => 'ZA'], ['label' =>'ZM', 'value' => 'ZM'], ['label' =>'ZW', 'value' => 'ZW']
                ],
                'default' => ''
            ]
        ],
        'parameter' => [
            'exclude' => false,
            'label' => 'LLL:EXT:z7_countries/Resources/Private/Language/locallang_db.xlf:tx_z7countries_country.parameter',
            'description' => 'LLL:EXT:z7_countries/Resources/Private/Language/locallang_db.xlf:tx_z7countries_country.parameter.description',
            'config' => [
                'type' => 'input',
                'required' => true,
                'eval' => 'trim,alphanum_x,nospace,unique',
                'default' => ''
            ]
        ],
//        'flag' => [
//            'exclude' => false,
//            'label' => 'LLL:EXT:z7_countries/Resources/Private/Language/locallang_db.xlf:tx_z7countries_country.flag',
//            'config' => $GLOBALS['TCA']['sys_language']['columns']['flag']['config']
//        ]
    ]
];
