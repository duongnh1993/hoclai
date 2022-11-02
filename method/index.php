<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" >
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Tên ca sĩ" id="js-keyword">
                    <div class="input-group-append">
                        <button id="js-search" class="btn btn-primary">tìm</button>
                    </div>
                </div>
            </div>
        </div>
        <dic class="row mt-2">
            <div class="col-12">
                <div id="loading" style="display: none !important;" class="d-flex justify-content-center">
                    <div class="spinner-border" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </div>
        </dic>
    </div>

    <script type="text/javascript" src="js/jquery-3.6.1.min.js"></script>
    <script type="text/javascript">
        $(function (){
            $('#js-search').click(function (){
                let name = $('#js-keyword').val().trim();
                if (name.length > 0){
                    //goi ajax
                    $.ajax({
                        url: "server/ajax.php", //đường dẫn gửi dữ liệu lên server
                        type: "post", //kiểu dữ liệu gửi lên
                        data: {nameSingle: name}, // dữ liệu mà mình gửi lên
                        beforeSend:function (){
                            //trước khi nhận được dữ liệu về thì chúng ta làm gì đó
                            //báo hiệu người dùng vui lòng đợi kết quả trả về
                            $('#loading').show(); //hiển thị show loading
                        }
                        success: function (result){
                            //cho đợi kết quả trả về từ server
                            //dữ liệu trả về thông qua tham số trong function (result)
                        }
                    });
                }else {
                    alert('vui long nhap du lieu')
                }
            });
        });
    </script>
</body>
</html>