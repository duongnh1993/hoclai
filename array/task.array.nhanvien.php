<?php
//4 phong và 3 nhan vien
$staffs = [
  [
      'id_staff' => 121,
      'name' => 'nguyen van phuoc',
      'address' => 'hanoi',
      'age' => 25,
      'email' => 'phuong@yahoo.com',
      'id_room' =>007,
      'luong' => 300000
  ],
  [
      'id_staff' => 131,
      'name' => 'nguyen van hai',
      'address' => 'saigon',
      'age' => 18,
      'email' => 'hai@yahoo.com',
      'id_room' =>005,
      'luong' => 200000
  ],
  [
      'id_staff' => 191,
      'name' => 'nguyen van duong',
      'address' => 'haiduong',
      'age' => 16,
      'email' => 'duong@yahoo.com',
      'id_room' =>002,
      'luong' => 100000
  ]
];

$rooms = [
    [
        'id' => 002,
        'date' => 2022,
        'room_name' => 'hanhchinh',
        'manager' => 'hi'
    ],
    [
        'id' => 007,
        'date' => 2021,
        'room_name' => 'giamdoc',
        'manager' => 'linh'
    ],
    [
        'id' => 005,
        'date' => 2021,
        'room_name' => 'nhan su',
        'manager' => 'hao'
    ],
    [
        'id' => 007,
        'date' => 2021,
        'room_name' => 'nhan su',
        'manager' => 'hao'
    ],
    [
        'id' => 010,
        'date' => 2021,
        'room_name' => 'ky thuat',
        'manager' => 'dung'
]
];
print_r($staffs);
print_r($rooms);
// hiển thiij thông tin của nhân viên và có phòng nào sếp nào
foreach ($staffs as $index => $value){
    foreach ($rooms as $key => $item){
        if ($value['id_room']==$item['id']){
            $staffs[$index]['room_name'] = $item['room_name'];
            $staffs[$index]['manager'] = $item['manager'];
        }
    }
}
echo "<pre>";
print_r($staffs);
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
<body>

    <table style="border: 1px solid black; width: 800px; margin: 0 auto; text-align: center;">
        <thead style="height: 30px; font-weight: bold; font-size: 20px;" >
            <tr>
                <th>id_staff</th>
                <th>name</th>
                <th>address</th>
                <th>age</th>
                <th>email</th>
                <th>id_room</th>
                <th>room_name</th>
                <th>manager</th>
                <th>Lương</th>
            </tr>
        </thead>
        <tbody>
            <?php $tongLuong = 0; ?>
            <?php foreach ($staffs as $key):?>
            <?php $tongLuong +=is_numeric($key['luong']) ? $key['luong'] : 0 ; ?>
            <tr>
                <td><?php echo $key['id_staff']?></td>
                <td><?php echo $key['name']?></td>
                <td><?php echo $key['address']?></td>
                <td><?php echo $key['age']?></td>
                <td><?php echo $key['email']?></td>
                <td><?php echo $key['id_room']?></td>
                <td><?php echo $key['room_name']?></td>
                <td><?php echo $key['manager']?></td>
                <td><?php echo $key['luong']?></td>
            </tr>
            <?php endforeach;?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="8">tổng lương</td>
                <td><?php echo $tongLuong; ?></td>
            </tr>

        </tfoot>

    </table>
</body>
</html>
