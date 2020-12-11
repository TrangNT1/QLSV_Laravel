<form action="/sinhvien/update/{{$qlsv_sinhvien->id}}" method="POST">

    <table style="background-color: rgb(242, 234, 234); border-spacing: 5px;margin-left: 10%; margin-top: 50px;">
        <input type=hidden value="{{ csrf_token() }}" name="_token">
        <tr>
            <th>Họ và tên</th>
        </tr>
        <tr>
            <td>
                <input type="text" class="is-valid form-control-success form-control" value="{{$qlsv_sinhvien->hovaten}}" name=hovaten>
            </td>
        </tr>
        <tr>
            <th>Địa chỉ</th>
        </tr>
        <tr>
            <td>
                <input type="text" class="is-valid form-control-success form-control"  value="{{$qlsv_sinhvien->diachi}}" name=diachi>
            </td>
        </tr>
        <tr>
            <th>Gioi tính</th>
        </tr>
        <tr>
            <td>
                <label class="checkbox-inline"> <input type="radio" name="gioitinh" value="0" id="gioitinh1" />Male
                </label> <label class="checkbox-inline"> <input type="radio" name="gioitinh" checked="checked" value="1"
                        id="gioitinh2" />Female
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
                <input type="text" class="is-valid form-control-success form-control"  value="{{$qlsv_sinhvien->gmail}}" name=gmail>
            </td>
        </tr>
        <tr>
            <th>Số điện thoại</th>
        </tr>
        <tr>
            <td>
                <input type="text" class="is-valid form-control-success form-control"  value="{{$qlsv_sinhvien->sodienthoaisinhvien}}" name=sodienthoaisinhvien>
            </td>
        </tr>
        <tr>
            <th>Số điện thoại gia đình</th>
        </tr>
        <tr>
            <td>
                <input type="text" class="is-valid form-control-success form-control"  value="{{$qlsv_sinhvien->sodienthoaigiadinh}}" name=sodienthoaigiadinh>
            </td>
        </tr>
        <tr>
            <th>Ghi chú</th>
        </tr>
        <tr>
            <td>
                <input type="text" class="is-valid form-control-success form-control"  value="{{$qlsv_sinhvien->ghichu}}" name=ghichu>
            </td>
        </tr>

    </table>

    <button style="margin-left: 10%; margin-top: 5px; background-color: rgb(119, 119, 182)"  type="submit" class="btn btn-success btn-lg btn-block">
        Save
    </button>

</form>
