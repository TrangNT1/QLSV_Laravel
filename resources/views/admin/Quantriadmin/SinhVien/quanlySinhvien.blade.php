<form>
    
    <table style="background-color: rgb(242, 234, 234); border-spacing: 20px;">
        <th style="border: none;">
            <a class="btn btn-success" style="width: 100%;color: rgb(194, 47, 47);font-size: 15px;" href="create">THÊM MỚI</a>
        </th>
        <tr>
            <td>STT</td>
            <td>Họ và tên</td>
            <td>Địa chỉ</td>
            <td>Gioi tính</td>
            <td>Gmail</td>
            <td>Số điện thoại</td>
            <td>Số điện thoại gia đình</td>
            <td>Ghi chú</td>
    
        </tr>
        @php
        $i=1
        @endphp
        @foreach($qlsv_sinhvien as $m)
        <tr>
            <td>{{$i++}}</td>
            <td>{{$m->hovaten}}</td>
            <td>{{$m->diachi}}</td>
            <td>
                @if( $m->gioitinh == 1)
                    nam
                @elseif($m->gioitinh == 2)
                    nữ
                @elseif($m->gioitinh == 0)
                    Giới tính khác
                @endif
            </td>
            <td>{{$m->gmail}}</td>
            <td>{{$m->sodienthoaisinhvien}}</td>
            <td>{{$m->sodienthoaigiadinh}}</td>
            <td>{{$m->ghichu}}</td>
            <td>
                <a class="dropdown-item" href="edit/{{$m->id}}" Style="color: green"><i class="fa fa-edit"></i>Update</a>
                <a class="dropdown-item" href="del/{{$m->id}}" Style="color: red"><i class="fa fa-times"></i>Delete</a>
              
            </td>
        </tr>
        @endforeach
        
    </table>
</form>