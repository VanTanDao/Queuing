<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Sai mật khẩu</title>
</head>
<body>

    <div class="dangnhap">
        <div class="dangnhap-1">
            <div class="dangnhap-1-logo">
                <img src="{{url('/img/Logo alta.png')}}" alt="Logo ALT media commpy"/>

            </div>
            <div class="dangnhap-1-from">
                    <form action="" class="dangnhap-1-from-login">

                                <label for="">Tên đăng nhập *</label>

                                <input type="text" class="form-input-name" >

                                <label for="">Mật khẩu *</label>
                                    <div class="container">
                                        <i class="fas fa-key"></i>
                                        <input type="password" class="form-input" placeholder="Nhập Mật Khẩu" required>
                                        <span class="show-btn"><i class="fas fa-eye"></i></span>
                                    </div>

                                <a href=""  class="form-a-forgot-passwd-1" >Sai mật khẩu hoặc tên đăng nhập</a>

                            <button type="submit" class="submit_dangnhap">Đăng nhập</button>
                            <a href=""  class="form-a-forgot-passwd-2" >Quên mật khẩu?</a>
                    </form>
            </div>
        </div>
        <div class="dangnhap-2">
            <img src="{{url('/img/Group 341.png')}}" alt="">
            <div class="dangnhap-2_meu-connter">
                <div class="dangnhap-2_connter">Hệ thống</div>
                <div class="dangnhap-2_connter_system" >Quản Lý xếp hàng</div>
            </div>
        </div>
    </div>

</body>
</html>
