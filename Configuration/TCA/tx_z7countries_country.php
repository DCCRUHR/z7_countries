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
                    ['----', ''], ['AD', 'AD'], ['AE', 'AE'], ['AF', 'AF'], ['AG', 'AG'], ['AI', 'AI'], ['AL', 'AL'], ['AM', 'AM'], ['AO', 'AO'], ['AQ', 'AQ'],
                    ['AR', 'AR'], ['AS', 'AS'], ['AT', 'AT'], ['AU', 'AU'], ['AW', 'AW'], ['AX', 'AX'], ['AZ', 'AZ'], ['BA', 'BA'], ['BB', 'BB'], ['BD', 'BD'],
                    ['BE', 'BE'], ['BF', 'BF'], ['BG', 'BG'], ['BH', 'BH'], ['BI', 'BI'], ['BJ', 'BJ'], ['BL', 'BL'], ['BM', 'BM'], ['BN', 'BN'], ['BO', 'BO'],
                    ['BQ', 'BQ'], ['BR', 'BR'], ['BS', 'BS'], ['BT', 'BT'], ['BV', 'BV'], ['BW', 'BW'], ['BY', 'BY'], ['BZ', 'BZ'], ['CA', 'CA'], ['CC', 'CC'],
                    ['CD', 'CD'], ['CF', 'CF'], ['CG', 'CG'], ['CH', 'CH'], ['CI', 'CI'], ['CK', 'CK'], ['CL', 'CL'], ['CM', 'CM'], ['CN', 'CN'], ['CO', 'CO'],
                    ['CR', 'CR'], ['CU', 'CU'], ['CV', 'CV'], ['CW', 'CW'], ['CX', 'CX'], ['CY', 'CY'], ['CZ', 'CZ'], ['DE', 'DE'], ['DJ', 'DJ'], ['DK', 'DK'],
                    ['DM', 'DM'], ['DO', 'DO'], ['DZ', 'DZ'], ['EC', 'EC'], ['EE', 'EE'], ['EG', 'EG'], ['EH', 'EH'], ['ER', 'ER'], ['ES', 'ES'], ['ET', 'ET'],
                    ['FI', 'FI'], ['FJ', 'FJ'], ['FK', 'FK'], ['FM', 'FM'], ['FO', 'FO'], ['FR', 'FR'], ['GA', 'GA'], ['GB', 'GB'], ['GD', 'GD'], ['GE', 'GE'],
                    ['GF', 'GF'], ['GG', 'GG'], ['GH', 'GH'], ['GI', 'GI'], ['GL', 'GL'], ['GM', 'GM'], ['GN', 'GN'], ['GP', 'GP'], ['GQ', 'GQ'], ['GR', 'GR'],
                    ['GS', 'GS'], ['GT', 'GT'], ['GU', 'GU'], ['GW', 'GW'], ['GY', 'GY'], ['HK', 'HK'], ['HM', 'HM'], ['HN', 'HN'], ['HR', 'HR'], ['HT', 'HT'],
                    ['HU', 'HU'], ['ID', 'ID'], ['IE', 'IE'], ['IL', 'IL'], ['IM', 'IM'], ['IN', 'IN'], ['IO', 'IO'], ['IQ', 'IQ'], ['IR', 'IR'], ['IS', 'IS'],
                    ['IT', 'IT'], ['JE', 'JE'], ['JM', 'JM'], ['JO', 'JO'], ['JP', 'JP'], ['KE', 'KE'], ['KG', 'KG'], ['KH', 'KH'], ['KI', 'KI'], ['KM', 'KM'],
                    ['KN', 'KN'], ['KP', 'KP'], ['KR', 'KR'], ['KW', 'KW'], ['KY', 'KY'], ['KZ', 'KZ'], ['LA', 'LA'], ['LB', 'LB'], ['LC', 'LC'], ['LI', 'LI'],
                    ['LK', 'LK'], ['LR', 'LR'], ['LS', 'LS'], ['LT', 'LT'], ['LU', 'LU'], ['LV', 'LV'], ['LY', 'LY'], ['MA', 'MA'], ['MC', 'MC'], ['MD', 'MD'],
                    ['ME', 'ME'], ['MF', 'MF'], ['MG', 'MG'], ['MH', 'MH'], ['MK', 'MK'], ['ML', 'ML'], ['MM', 'MM'], ['MN', 'MN'], ['MO', 'MO'], ['MP', 'MP'],
                    ['MQ', 'MQ'], ['MR', 'MR'], ['MS', 'MS'], ['MT', 'MT'], ['MU', 'MU'], ['MV', 'MV'], ['MW', 'MW'], ['MX', 'MX'], ['MY', 'MY'], ['MZ', 'MZ'],
                    ['NA', 'NA'], ['NC', 'NC'], ['NE', 'NE'], ['NF', 'NF'], ['NG', 'NG'], ['NI', 'NI'], ['NL', 'NL'], ['NO', 'NO'], ['NP', 'NP'], ['NR', 'NR'],
                    ['NU', 'NU'], ['NZ', 'NZ'], ['OM', 'OM'], ['PA', 'PA'], ['PE', 'PE'], ['PF', 'PF'], ['PG', 'PG'], ['PH', 'PH'], ['PK', 'PK'], ['PL', 'PL'],
                    ['PM', 'PM'], ['PN', 'PN'], ['PR', 'PR'], ['PS', 'PS'], ['PT', 'PT'], ['PW', 'PW'], ['PY', 'PY'], ['QA', 'QA'], ['RE', 'RE'], ['RO', 'RO'],
                    ['RS', 'RS'], ['RU', 'RU'], ['RW', 'RW'], ['SA', 'SA'], ['SB', 'SB'], ['SC', 'SC'], ['SD', 'SD'], ['SE', 'SE'], ['SG', 'SG'], ['SH', 'SH'],
                    ['SI', 'SI'], ['SJ', 'SJ'], ['SK', 'SK'], ['SL', 'SL'], ['SM', 'SM'], ['SN', 'SN'], ['SO', 'SO'], ['SR', 'SR'], ['SS', 'SS'], ['ST', 'ST'],
                    ['SV', 'SV'], ['SX', 'SX'], ['SY', 'SY'], ['SZ', 'SZ'], ['TC', 'TC'], ['TD', 'TD'], ['TF', 'TF'], ['TG', 'TG'], ['TH', 'TH'], ['TJ', 'TJ'],
                    ['TK', 'TK'], ['TL', 'TL'], ['TM', 'TM'], ['TN', 'TN'], ['TO', 'TO'], ['TR', 'TR'], ['TT', 'TT'], ['TV', 'TV'], ['TW', 'TW'], ['TZ', 'TZ'],
                    ['UA', 'UA'], ['UG', 'UG'], ['UM', 'UM'], ['US', 'US'], ['UY', 'UY'], ['UZ', 'UZ'], ['VA', 'VA'], ['VC', 'VC'], ['VE', 'VE'], ['VG', 'VG'],
                    ['VI', 'VI'], ['VN', 'VN'], ['VU', 'VU'], ['WF', 'WF'], ['WS', 'WS'], ['YE', 'YE'], ['YT', 'YT'], ['ZA', 'ZA'], ['ZM', 'ZM'], ['ZW', 'ZW']
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
        'flag' => [
            'exclude' => false,
            'label' => 'LLL:EXT:z7_countries/Resources/Private/Language/locallang_db.xlf:tx_z7countries_country.flag',
            'config' => $GLOBALS['TCA']['sys_language']['columns']['flag']['config']
        ]
    ]
];
