@extends('admin.app')

@section('content')
<div class="container">
    <button type="button" id="createNewRoom" class="btn btn-success" data-toggle="modal" data-target="#ajaxModel">
        Thêm sản phẩm
    </button><a id="mess"></a>
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Loại</th>
                <th>Tên</th>
                <th>Ngày tạo</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
<!-- Button trigger modal -->

<div class="modal fade" id="ajaxModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="roomForm" name="roomForm" class="form-horizontal">
                    <input type="hidden" name="room_id" id="room_id">
                    <div class="form-group">
                        <div class="col-sm-6">
                            <select id="category_id" class="form-control" name="category_id">
                                <option value=''>Chọn danh mục</option>
                                @foreach ($categories as $data)
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <select id="category_child_id" class="form-control" name="category_child_id">
                                <option value=''>Chọn danh mục con</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <select id="category_type_id" class="form-control" name="category_type_id">
                                <option value=''>Chọn loại</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-6 control-label">Tên sản phẩm</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên sản phẩm" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sku" class="col-sm-4 control-label">Mã</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="sku" name="sku" placeholder="Nhập mã sản phẩm" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="des" class="col-sm-3 control-label">Mô tả</label>
                        <div class="col-sm-12">
                            <textarea id="des" name="des" required="" placeholder="Nhập mô tả sản phẩm" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price" class="col-sm-4 control-label">Giá</label>
                        <div class="col-sm-12">
                            <input type="number" class="form-control" id="price" name="price" placeholder="Nhập giá sản phẩm" value="" maxlength="50" required="">
                        </div>
                    </div>
{{--                     <div class="form-group">
                        <label for="name" class="col-sm-4 control-label">Màu sắc</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="color" name="color" placeholder="Nhập mùa sắc sản phẩm" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-4 control-label">Dung lượng</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="storage" name="storage" placeholder="Nhập dung lượng sản phẩm" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-4 control-label">Imei</label>
                        <div class="col-sm-12">
                            <input type="number" class="form-control" id="imei" name="imei" placeholder="Nhập imei sản phẩm" value="" maxlength="50" required="">
                        </div>
                    </div> --}}
                    <div class="form-group">
                        <label for="info" class="col-sm-4 control-label">Thông tin sản phẩm</label>
                        <div class="col-sm-12">
                            <textarea id="info" name="info" required="" placeholder="Nhập thông tin sản phẩm" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group col-sm">
                        <label for="image" class="control-label">Ảnh</label>
                        <div class="col-sm-12">
                            <input type="file" class="form-control" id="image" name="image">
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
        ajax: "{{ route('mn-product.index') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'category_detail.name', name: 'type'},
            {data: 'name', name: 'name'},
            {data: 'created_at', name: 'created_at'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    $('#createNewRoom').click(function () {
        $('#saveBtn').val("create-room");
        $('#room_id').val('');
        $('#roomForm').trigger("reset");
        $('#modelHeading').html("Thêm sản phẩm");
    });
    $('body').on('click', '.editRoom', function () {
        var id = $(this).data('id');
        $('#modelHeading').html("Sửa thông tin sản phẩm");
        $('#saveBtn').val("edit-room");
        $('#ajaxModel').modal('show');
        $.get("{{ route('mn-product.index') }}" +'/' + id, function (data) {
            $('#room_id').val(data.id);
            $('#name').val(data.name);
            $('#sku').val(data.sku);
            $('#des').val(data.des);
            $('#price').val(data.price);
            $('#info').val(data.info);
            $('#note').val(data.note);
            $('#category_id option')
                .removeAttr('selected')
                .filter('[value=' + data.category_detail.category.parent_category_id + ']')
                .attr('selected', true);
            $.get("{{ route('getCategoryChild') }}" +'?id=' + data.category_detail.category.parent_category_id, function (data2) {
                var html = `<option value=''>Chọn danh mục con</option>`;
                for (const value of data2) {
                    html += `<option value='`+value.id+`'>`+value.name+`</option>`
                }
                $('#category_child_id').html(html);
                $('#category_child_id option')
                    .removeAttr('selected')
                    .filter('[value=' + data.category_detail.category_id + ']')
                    .attr('selected', true);
                $.get("{{ route('getCategoryType') }}" +'?id=' + data.category_detail.category_id, function (data3) {
                    var html = `<option value=''>Chọn loại</option>`;
                    for (const value of data3) {
                        html += `<option value='`+value.id+`'>`+value.name+`</option>`
                    }
                    $('#category_type_id').html(html);
                    $('#category_type_id option')
                        .removeAttr('selected')
                        .filter('[value=' + data.category_detail_id + ']')
                        .attr('selected', true);
                })
            })
        })
    });
    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Đang lưu');
        $.ajax({
            data: $('#roomForm').serialize(),
            url: "{{ route('mn-product.store') }}",
            type: "POST",
            dataType: 'json',
            success: function (data) {
                $('#roomForm').trigger("reset");
                $('#ajaxModel').modal('hide');
                table.ajax.reload();
                toastr.success(data.success, 'Thành công');
                $('#saveBtn').html('Lưu');
            },
            error: function (data) {
                toastr.error('Có lỗi xảy ra vui lòng thử lại', 'Lỗi');
                $('#saveBtn').html('Lưu');
            }
        });
    });
    $('body').on('click', '.deleteRoom', function () {
        var room_id = $(this).data("id");
        if (confirm("{{ __('label.confirmDelete') }}"))
        {
            $.ajax({
                type: "DELETE",
                url: "{{ route('mn-product.store') }}" + '/' + room_id,
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
    $('select#category_id').on('change', function (e) {
        var optionSelected = $("option:selected", this);
        var id = this.value;
        $.get("{{ route('getCategoryChild') }}" +'?id=' + id, function (data) {
            var html = `<option value=''>Chọn danh mục con</option>`;
            for (const value of data) {
                html += `<option value='`+value.id+`'>`+value.name+`</option>`
            }
            $('#category_child_id').html(html);
        })
    });
    $('select#category_child_id').on('change', function (e) {
        var optionSelected = $("option:selected", this);
        var id = this.value;
        $.get("{{ route('getCategoryType') }}" +'?id=' + id, function (data) {
            var html = `<option value=''>Chọn loại</option>`;
            for (const value of data) {
                html += `<option value='`+value.id+`'>`+value.name+`</option>`
            }
            $('#category_type_id').html(html);
        })
    });
});
</script>
@endpush
