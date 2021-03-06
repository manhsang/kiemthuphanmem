<div class="container">
  <div class="table-wrapper">
    <div class="table-title">
      <div class="row">
        <div class="col-sm-6">
            <h2>Quản lý <b>người dùng</b></h2>
        </div>
      </div>
    </div>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>
            <span class="custom-checkbox">
                <input type="checkbox" id="selectAll">
                <label for="selectAll"></label>
            </span>
          </th>
          <th>Số TT</th>
          <th>Họ tên</th>
          <th>Tên</th>
          <th>Mật khẩu</th>
          <th><a href="{{ route('nguoidung.create') }}" class="btn btn-success"><i class="material-icons">&#xE147;</i></a></th>
        </tr>
      </thead>
      <tbody>
      @if (!empty($data))
        @foreach($data as $val)
        <tr>
          <td>
            <span class="custom-checkbox">
                <input type="checkbox" id="checkbox1" name="options[]" value="1">
                <label for="checkbox1"></label>
            </span>
          </td>
          <td><a href="{{ route('nguoidung.show', ['id' => $val['id']]) }}">{{ $val['id'] }}</a></td>
          <td>{{ $val['HoTen'] }}</td>
          <td>{{ $val['UserName'] }}</td>
          <td>{{ $val['PassWord'] }}</td>
          <td>
            <a href="{{ route('nguoidung.edit', ['id' => $val['id']]) }}" class="edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
            <a href="call ajax" class="delete"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
          </td>
        </tr>
        @endforeach
      @endif
      </tbody>
    </table>
    <div class="clearfix">
      <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
      <ul class="pagination">
          <li class="page-item disabled"><a href="#">Previous</a></li>
          <li class="page-item"><a href="#" class="page-link">1</a></li>
          <li class="page-item"><a href="#" class="page-link">2</a></li>
          <li class="page-item active"><a href="#" class="page-link">3</a></li>
          <li class="page-item"><a href="#" class="page-link">4</a></li>
          <li class="page-item"><a href="#" class="page-link">5</a></li>
          <li class="page-item"><a href="#" class="page-link">Next</a></li>
      </ul>
    </div>
  </div>
</div>