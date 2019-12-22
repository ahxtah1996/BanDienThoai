@extends('admin.app')

@section('content')
<div class="container">
    <button type="button" id="createNewRoom" class="btn btn-success" data-toggle="modal" data-target="#ajaxModel">
        Thêm danh mục
    </button><a id="mess"></a>
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Tên danh mục</th>
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
                        <label for="name" class="col-sm-4 control-label">Tên danh mục</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên danh mục" value="" maxlength="50" required="">
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
        ajax: "{{ route('mn-category.index') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    $('#createNewRoom').click(function () {
        $('#saveBtn').val("create-room");
        $('#room_id').val('');
        $('#roomForm').trigger("reset");
        $('#modelHeading').html("Thêm danh mục");
    });
    $('body').on('click', '.editRoom', function () {
        var id = $(this).data('id');
        $('#ajaxModel').modal('show');
        $('#modelHeading').html("Sửa thông tin sản phẩm");
        $('#saveBtn').val("edit-room");
        $.get("{{ route('mn-category.index') }}" +'/' + id + '/edit', function (data) {
            $('#room_id').val(data.id);
            $('#name').val(data.name);
        })
    });
    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Đang lưu');
        $.ajax({
            data: $('#roomForm').serialize(),
            url: "{{ route('mn-category.store') }}",
            type: "POST",
            dataType: 'json',
            success: function (data) {
                $('#ajaxModel').modal('hide');
                table.ajax.reload();
                $('#roomForm').trigger("reset");
                document.getElementById("mess").innerHTML = data.success;
            },
            error: function (data) {
                console.log('Error:', data);
                $('#saveBtn').html('Lưu');
            }
        });
    });
    $('body').on('click', '.deleteRoom', function () {
        var room_id = $(this).data("id");
        if (confirm("Xác nhận xóa"))
        {
            $.ajax({
                type: "DELETE",
                url: "{{ route('mn-category.store') }}" + '/' + room_id,
                success: function (data) {
                    table.ajax.reload();
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
