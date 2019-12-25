@extends('admin.app')

@section('content')
<div class="container">
    {{-- color --}}
    <div class="card border-light mb-3" style="max-width: 18rem;">
        <div class="card-header">Thông tin</div>
        <div class="card-body text-dark">
            <h5 class="card-title">{{ $product->name }}</h5>
        </div>
    </div>
    <button type="button" id="createNewRoom2" class="btn btn-success" data-toggle="modal" data-target="#ajaxModel2">
        Thêm màu
    </button>
    <table class="table table-bordered data-table2" width="50%">
        <thead>
            <tr>
                <th>Màu</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
    {{-- storage --}}
    <button type="button" id="createNewRoom" class="btn btn-success" data-toggle="modal" data-target="#ajaxModel">
        Thêm máy
    </button>
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>Màu</th>
                <th>Imei</th>
                <th>Dung lượng</th>
                <th>Giá</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
<!-- Button trigger modal -->
<div class="modal fade" id="ajaxModel2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading2"></h4>
            </div>
            <div class="modal-body">
                <form id="roomForm2" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" name="room_id" id="room_id2">
                    <div class="form-group">
                        <label for="color" class="col-sm-4 control-label">Tên màu</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="color" name="color" placeholder="Nhập tên màu" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group col-sm">
                        <label for="image" class="control-label">Ảnh</label>
                        <div class="col-sm-12">
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                    </div>
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary" id="saveBtn2" value="create">
                            Lưu
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ajaxModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="roomForm" class="form-horizontal">
                    <input type="hidden" name="room_id" id="room_id">
                    <div class="form-group">
                        <div class="col-sm-6">
                            <select id="color_id" class="form-control" name="color_id">
                                <option value=''>Chọn màu</option>
                                @foreach ($colors as $color)
                                    <option value="{{ $color->id }}">{{ $color->color }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="imei" class="col-sm-4 control-label">Imei</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="imei" name="imei" placeholder="Nhập imei" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="storage" class="col-sm-4 control-label">Dung lượng</label>
                        <div class="col-sm-12">
                            <input type="number" class="form-control" id="storage" name="storage" placeholder="Nhập dung lượng" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price" class="col-sm-4 control-label">Giá</label>
                        <div class="col-sm-12">
                            <input type="number" class="form-control" id="price" name="price" placeholder="Nhập giá" value="0" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary" id="saveBtn" value="create">
                            Lưu
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
@push('scripts')
<script type="text/javascript">
    $(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name = "csrf-token"]').attr('content')
            }
        });
    var table = $('.data-table').DataTable({
        ajax: "{{ route('mn-store.index') }}",
        columns: [
            {data: 'color.color', name: 'color'},
            {data: 'imei', name: 'imei'},
            {data: 'storage', name: 'storage'},
            {data: 'price', name: 'price'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    var table2 = $('.data-table2').DataTable({
        ajax: "{{ route('mn-color.index') }}",
        columns: [
            {data: 'color', name: 'color'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
/*-----------------------*/
    $('#createNewRoom').click(function () {
        $('#saveBtn').val("create-room");
        $('#room_id').val('');
        $('#roomForm').trigger("reset");
        $('#modelHeading').html("Thêm máy");
    });
    $('#createNewRoom2').click(function () {
        $('#saveBtn2').val("create-room");
        $('#room_id2').val('');
        $('#roomForm2').trigger("reset");
        $('#modelHeading2').html("Thêm màu");
    });
/*----------------------*/
    $('body').on('click', '.editRoom', function () {
        var id = $(this).data('id');
        $('#ajaxModel').modal('show');
        $('#modelHeading').html("Sửa thông tin sản phẩm");
        $('#saveBtn').val("edit-room");
        $.get("{{ route('mn-store.index') }}" +'/' + id + '/edit', function (data) {
            $('#room_id').val(data.id);
            $('#imei').val(data.imei);
            $('#storage').val(data.storage);
            $('#price').val(data.price);
            $('#color_id option')
                .removeAttr('selected')
                .filter('[value=' + data.color_id + ']')
                .attr('selected', true)
        })
    });
    $('body').on('click', '.editRoom2', function () {
        var id = $(this).data('id');
        $('#ajaxModel2').modal('show');
        $('#modelHeading2').html("Sửa thông tin màu");
        $('#saveBtn2').val("edit-room");
        $.get("{{ route('mn-color.index') }}" +'/' + id + '/edit', function (data) {
            $('#room_id2').val(data.id);
            $('#color').val(data.color);
        })
    });
/*----------------------*/
    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Đang lưu');
        $.ajax({
            data: $('#roomForm').serialize(),
            url: "{{ route('mn-store.store') }}",
            type: "POST",
            dataType: 'json',
            success: function (data) {
                $('#ajaxModel').modal('hide');
                table.ajax.reload();
                $('#roomForm').trigger("reset");
                toastr.success(data.success, 'Thành công');
                $('#saveBtn').html('Lưu');
            },
            error: function (data) {
                toastr.error('Có lỗi xảy ra vui lòng thử lại', 'Lỗi');
                $('#saveBtn').html('Lưu');
            }
        });
    });
    $('#saveBtn2').click(function (e) {
        e.preventDefault();
        $(this).html('Đang lưu');
        var mydata = new FormData($('#roomForm2')[0]);
        $.ajax({
            data: mydata,
            url: "{{ route('mn-color.store') }}",
            type: "POST",
            cache: false,
            dataType: 'json',
            processData: false,
            contentType: false,
            success: function (data) {
                $('#ajaxModel2').modal('hide');
                table2.ajax.reload();
                $('#roomForm2').trigger("reset");
                toastr.success(data.success, 'Thành công');
                $('#saveBtn2').html('Lưu');
            },
            error: function (data) {
                toastr.error('Có lỗi xảy ra vui lòng thử lại', 'Lỗi');
                $('#saveBtn2').html('Lưu');
            }
        });
    });
/*---------------------*/
    $('body').on('click', '.deleteRoom', function () {
        var room_id = $(this).data("id");
        if (confirm("Xác nhận xóa"))
        {
            $.ajax({
                type: "DELETE",
                url: "{{ route('mn-store.store') }}" + '/' + room_id,
                success: function (data) {
                    table.ajax.reload();
                    toastr.success(data.success, 'Thành công');
                },
                error: function (data) {
                    toastr.error('Có lỗi xảy ra vui lòng thử lại', 'Lỗi');
                }
            });
        }
    });
    $('body').on('click', '.deleteRoom2', function () {
        var room_id = $(this).data("id");
        if (confirm("Xác nhận xóa"))
        {
            $.ajax({
                type: "DELETE",
                url: "{{ route('mn-color.store') }}" + '/' + room_id,
                success: function (data) {
                    table2.ajax.reload();
                    toastr.success(data.success, 'Thành công');
                },
                error: function (data) {
                    toastr.error('Có lỗi xảy ra vui lòng thử lại', 'Lỗi');
                }
            });
        }
    });
});
</script>
@endpush
