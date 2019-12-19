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
                        <label for="name" class="col-sm-4 control-label">Tên sản phẩm</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên sản phẩm" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Mô tả</label>
                        <div class="col-sm-12">
                            <textarea id="note" name="note" required="" placeholder="Nhập thông tin sản phẩm" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
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
                    </div>
                    <div class="form-group col-sm">
                        <label for="image" class="control-label">Ảnh</label>
                        <div class="col-sm-12">
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-4 control-label">Giá</label>
                        <div class="col-sm-12">
                            <input type="number" class="form-control" id="price" name="price" placeholder="Nhập giá sản phẩm" value="" maxlength="50" required="">
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
        // processing: true,
        // serverSide: true,
        ajax: "{{ route('product.index') }}",
        columns: [
            {data: 'id', name: 'id'},
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
        // $('#ajaxModel').modal('show');
    });
    $('body').on('click', '.editRoom', function () {
        var id = $(this).data('id');
        // $.get("{{ route('product.index') }}" +'/' + room_id + '/edit', function (data) {
            // $('#modelHeading').html("Sửa thông tin sản phẩm");
            // $('#saveBtn').val("edit-room");
            // $('#ajaxModel').modal('show');
            // $('#room_id').val(data.id);
            // $('#category_id').val(data.category_id);
            // $('#room_type_id').val(data.room_type_id);
            // $('#name').val(data.name);
            // $('#note').val(data.note);
        // })
    });
    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('{{ __('label.sending') }}');
        $.ajax({
            data: $('#roomForm').serialize(),
            url: "{{ route('product.store') }}",
            type: "POST",
            dataType: 'json',
            success: function (data) {
                $('#roomForm').trigger("reset");
                // $('#ajaxModel').modal('hide');
                table.draw();
                document.getElementById("mess").innerHTML = data.success;
            },
            error: function (data) {
                console.log('Error:', data);
                $('#saveBtn').html('{{ __('label.saveChange') }}');
            }
        });
    });
    $('body').on('click', '.deleteRoom', function () {
        var room_id = $(this).data("id");
        if (confirm("{{ __('label.confirmDelete') }}"))
        {
            $.ajax({
                type: "DELETE",
                url: "{{ route('product.store') }}" + '/' + room_id,
                success: function (data) {
                    table.draw();
                    document.getElementById("mess").innerHTML = data.success;
                },
                error: function (data) {
                    console.log('Error:', data);
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
