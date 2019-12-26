'use strict';

var Storage = {
    getQtyOfStorage: function(id) {
        $.get(CNV.baseUrl + '/storage/ajax?action=count_qty_of_storage&id=' + id, function (data) {
            if (data) {
                $('.count-storage').html(data.count);
                Storage.dataOfStorage(data.storages);
            }
        })
    },
    dataOfStorage: function(data) {
        var html = '';
        Object.entries(data).forEach(([key, val]) => {
            html += `<button type="button" class="btn btn-default choose-storage" data-total="`+val.total+`" data-storage="`+val.storage+`">`+val.storage+`GB</button>`;
        })
        $('ul.fs-tspris').html(html);
        $('button.choose-storage').on('click', function() {
            $('button.choose-storage').removeClass('active')
            $(this).addClass('active');
            $('.count-storage').html($(this).data('total'));
        })
    }
}
$(document).ready(function() {
    $('span.choose-color').on('click', function() {
        $('span.choose-color').removeClass('active')
        $(this).addClass('active');
        Storage.getQtyOfStorage($(this).data('id'))
    })
})
