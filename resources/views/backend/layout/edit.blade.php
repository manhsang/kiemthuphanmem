<div class="container">
  <div class="table-wrapper">
    <!-- Edit Modal HTML -->
      <div id="addEmployeeModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <form method="PATCH" action="{{ route('nguoidung.update', ['id' => $data['id']]) }}">
              @csrf
              <div class="modal-header">                      
                <h4 class="modal-title">sửa người dùng</h4>
              </div>
              <div class="modal-body">                    
                <div class="form-group">
                  <label>Họ tên</label>
                  <input type="text" class="form-control" name="hoten" value="{{ $data['arrData']['HoTen'] }}" required>
                </div>
                <div class="form-group">
                  <label>Tên</label>
                  <input type="text" class="form-control" name="ten" value="{{ $data['arrData']['UserName'] }}" required>
                </div>
                <div class="form-group">
                  <label>Mật khẩu</label>
                  <input type="password" class="form-control" name="matkhau" value="{{ $data['arrData']['PassWord'] }}" required>
                </div>                  
              </div>
              <div class="modal-footer">
                <input type="submit" class="btn btn-default" value="Quay lại">
                <input type="submit" class="btn btn-success" value="Sửa">
              </div>
            </form>
          </div>
        </div>
      </div>
  </div>
</div>