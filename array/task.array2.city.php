<?php
$citis = [
  [
      'id' => 123,
      'name_citi' => 'hai duong',
      'region'=> 'northeast'
  ],
  [
      'id' => 234,
      'name_citi' => 'da nang',
      'region'=> 'middle'
  ],
  [
      'id' => 345,
      'name_citi' => 'Lao Cai',
      'region'=> 'northwest'
  ],
  [
      'id' => 456,
      'name_citi' => 'Sai Gon',
      'region'=> 'South'
  ],
  [
      'id' => 678,
      'name_citi' => 'ha noi',
      'region'=> 'nort'
  ],
];
$districts = [
    [
        'district_id' => 11,
        'name_district' => 'chí linh',
        'region'=> 'north',
        'citi_id'=>123
    ],
    [
        'district_id' => 22,
        'name_district' => 'hai ba trung',
        'region'=> 'north',
        'citi_id'=>678
    ],
    [
        'district_id' => 33,
        'name_district' => 'binh thanh',
        'region'=> 'north',
        'citi_id'=>456
    ],
    [
        'district_id' => 44,
        'name_district' => 'son tra',
        'region'=> 'north',
        'citi_id'=>234
    ],
    [
        'district_id' => 66,
        'name_district' => 'sa pa',
        'region'=> 'north',
        'citi_id'=>345
    ],
    [
        'district_id' => 55,
        'name_district' => 'nam sach',
        'region'=> 'north',
        'citi_id'=>123
    ],
    [
        'district_id' => 77,
        'name_district' => 'ba dinh',
        'region'=> 'north',
        'citi_id'=>678
    ],
    [
        'district_id' => 88,
        'name_district' => 'quan 1',
        'region'=> 'north',
        'citi_id'=>456
    ],
    [
        'district_id' => 01,
        'name_district' => 'ban ban',
        'region'=> 'north',
        'citi_id'=>345
    ],
    [
        'district_id' => 02,
        'name_district' => 'hai chau',
        'region'=> 'north',
        'citi_id'=>234
    ],
    [
        'district_id' => 03,
        'name_district' => 'kinh mon',
        'region'=> 'north',
        'citi_id'=>123
    ]
];
foreach ($citis as $index => $value){
    foreach ($districts as $key => $item){
        if ($value['id']==$item['citi_id']){
            $districts[$key]['citi_id'] = $value['id'];
            $districts[$key]['name_citi'] = $value['name_citi'];
            $districts[$key]['region'] = $value['region'];
        }
    }
}
//echo "<pre>";
//print_r($districts);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="padding: 50px; margin: 0 auto;">
    <table style="width: 800px; border: 1px solid black;">
        <thead>
            <tr>
                <td>MA HUYEN</td>
                <td>TEN HUYEN</td>
                <td>KHU VUC</td>
                <td>MA TINH</td>
                <td>TEN TINH</td>
            </tr>
        </thead>
        <?php foreach ($districts as $value): ?>
        <tr>
            <td><?php echo $value['district_id']?></td>
            <td><?php echo $value['name_district']?></td>
            <td><?php echo $value['region']?></td>
            <td><?php echo $value['citi_id']?></td>
            <td><?php echo $value['name_citi']?></td>
        </tr>
        <?php endforeach;?>
    </table>
</body>
</html>
