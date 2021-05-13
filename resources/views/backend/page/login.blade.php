<!DOCTYPE html>
<html lang="en">
<head>
  @include('backend.includes.head')
</head>
<body class="bg-gradient-primary">
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      @if(session()->has('message'))
          <div class="alert alert-success">
              {{ session()->get('message') }}
          </div>
      @endif
      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image" id="image-banner"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Vui lòng đăng nhập nhé!</h1>
                  </div>
                  <form class="user" method="post" action="{{ route('handersLogin') }}">
                    @csrf
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="username" aria-describedby="nameHelp" name="username" placeholder="Xin vui lòng nhập họ tên..." required>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Xin vui lòng nhập mật khẩu..." required>
                    </div>
                    <!-- Group of default radios - option 1 -->
                    <div class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" id="giamdoc" name="phanquyen" checked>
                      <label class="custom-control-label" for="giamdoc">Giám đốc</label>
                    </div>

                    <!-- Group of default radios - option 2 -->
                    <div class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" id="phogiamdoc" name="phanquyen">
                      <label class="custom-control-label" for="phogiamdoc">Phó giám đốc</label>
                    </div>

                    <!-- Group of default radios - option 3 -->
                    <div class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" id="nhanvien" name="phanquyen">
                      <label class="custom-control-label" for="nhanvien">Nhân Viên</label>
                    </div><br/>
                    <button type="submit" class="btn btn-primary btn-user btn-block"> Đăng nhập </button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Quên mật khẩu?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.html">Đăng ký!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  <!-- Core plugin JavaScript-->
  <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
  <!-- Custom scripts for all pages-->
  <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
</body>
</html>
