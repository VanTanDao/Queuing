<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Đổi Mật Khẩu</title>
</head>
<body>

    <div class="dangnhap">
        <div class="dangnhap-1">
            <div class="dangnhap-1-logo">
                <img src="{{url('/img/Logo alta.png')}}" alt="Logo ALT media commpy"/>

            </div>
            <div class="dangnhap-1-from">
                <p>Đặt Lại Mật Khẩu Mói</p>
                    <form action="" class="dangnhap-1-from-login">

                        <label for="">Mật khẩu *</label>
                        <div class="col-md-6">
                            <input id="password-field" type="password" class="form-control" name="password" value="secret">
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                          </div>
                        <label for="">Nhập Lại Mật khẩu *</label>
                        <div class="col-md-6">
                            <input id="password-field" type="password" class="form-control" name="password" value="secret">
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                          </div>

              <button type="submit" class="submit_dangnhap">Xác Nhận</button>

                    </form>
            </div>
        </div>

        <div class="dangnhap-2">
            <img src="{{url('/img/Frame.png')}}" alt="">
            <div class="dangnhap-2_meu-connter">

        </div>
    </div>

</body>
</html>
