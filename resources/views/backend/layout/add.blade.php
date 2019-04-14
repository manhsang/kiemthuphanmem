<div class="container">
  <div class="table-wrapper">
    <!-- Edit Modal HTML -->
      <div id="addEmployeeModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <form method="post" action="{{ route('nguoidung.store') }}">
              @csrf
              <div class="modal-header">                      
                <h4 class="modal-title">Thêm người dùng</h4>
              </div>
              <div class="modal-body">                    
                <div class="form-group">
                  <label>Họ tên</label>
                  <input type="text" class="form-control" name="hoten" required>
                </div>
                <div class="form-group">
                  <label>Tên</label>
                  <input type="text" class="form-control" name="ten" required>
                </div>
                <div class="form-group">
                  <label>Mật khẩu</label>
                  <input type="password" class="form-control" name="matkhau" required>
                </div>                  
              </div>
              <div class="modal-footer">
                <input type="submit" class="btn btn-default" value="Quay lại">
                <input type="submit" class="btn btn-success" value="Thêm">
              </div>
            </form>
          </div>
        </div>
      </div>
  </div>
</div>