<form action="{{ route('qlsv_sinhvien.add') }}" method="POST">

    <table style="background-color: rgb(242, 234, 234); border-spacing: 5px;">
        <input type=hidden value="{{ csrf_token() }}" name="_token">
        <tr>
            <th>Họ và tên</th>
        </tr>
        <tr>
            <td>
                <input type="text" class="is-valid form-control-success form-control" value="" name=hovaten>
            </td>
        </tr>
        <tr>
            <th>Địa chỉ</th>
        </tr>
        <tr>
            <td>
                <input type="text" class="is-valid form-control-success form-control" value="" name=diachi>
            </td>
        </tr>
        <tr>
            <th>Gioi tính</th>
        </tr>
        <tr>
            <td>
                <label class="checkbox-inline"> <input type="radio" name="gioitinh" value="0" id="gioitinh1" />Nam
                </label> <label class="checkbox-inline"> <input type="radio" name="gioitinh" checked="checked" value="1"
                        id="gioitinh2" /> Nữ
                </label>
                </label> <label class="checkbox-inline"> <input type="radio" name="gioitinh" checked="checked" value="2"
                        id="gioitinh3" /> Khác
                </label>
            </td>
        </tr>
        <tr>
            <th>Gmail</th>
        </tr>
        <tr>
            <td>
                <input type="text" class="is-valid form-control-success form-control" value="" name=gmail>
            </td>
        </tr>
        <tr>
            <th>Số điện thoại</th>
        </tr>
        <tr>
            <td>
                <input type="text" class="is-valid form-control-success form-control" value="" name=sodienthoaisinhvien>
            </td>
        </tr>
        <tr>
            <th>Số điện thoại gia đình</th>
        </tr>
        <tr>
            <td>
                <input type="text" class="is-valid form-control-success form-control" value="" name=sodienthoaigiadinh>
            </td>
        </tr>
        <tr>
            <th>Ghi chú</th>
        </tr>
        <tr>
            <td>
                <input type="text" class="is-valid form-control-success form-control" value="" name=ghichu>
            </td>
        </tr>
        <tr>
            <th>Name</th>
        </tr>
        <tr>
            <td>
                <input type="text" class="is-valid form-control-success form-control" value="" name=name>
            </td>
        </tr>
        <tr>
            <th>Gmail</th>
        </tr>
        <tr>
            <td>
                <input type="text" class="is-valid form-control-success form-control" value="" name=email>
            </td>
        </tr>
        <tr>
            <th>Password</th>
        </tr>
        <tr>
            <td>
                <input type="password" class="is-valid form-control-success form-control" value="" name=password>
            </td>
        </tr>
    </table>

    <button type="submit" class="btn btn-success btn-lg btn-block">
        Save
    </button>
    <a href="/sinhvien/index">Danh sách sinh viên</a>
</form>
