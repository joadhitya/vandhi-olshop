$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$("#save-data-product").on('click', async (e) => {
  e.preventDefault();
    $("#save-data-product").attr('disabled', 'true')
    formData = $("#form-add-product").serialize();
    try {
        await $.ajax({
            url: '/admin/master-data/product',
            method: 'post',
            data: formData,
            success: function (response) {                
                success('add', response)
                displayData();
            },
            error: function (err) {
                $("#save-data-product").removeAttr('disabled')
                let err_log = err.responseJSON.errors;
                if (err.status == 422) {
                    if (typeof (err_log.product_code) !== 'undefined') {
                        Toast.fire({
                            icon: 'error',
                            title: err_log.product_code[0]
                        })
                    }
                    if (typeof (err_log.product_name) !== 'undefined') {
                        Toast.fire({
                            icon: 'error',
                            title: err_log.product_name[0]
                        })
                    }
                }
            }
        })
    } catch (error) {
        console.log(error)
    }
})
  
function editData(id) {
    $.ajax({
        url: `/admin/master-data/product/${id}`,
        method: 'get',
        dataType: 'json',
        success: function (data) {
            console.log(data);
            $("#edit-product").modal('show');
            $("#product_code").val(data[0].product_code);
            $("#product_name").val(data[0].product_name);
            $("#product_slug").val(data[0].product_slug);
            $("#product_description").val(data[0].product_description);
            $("#id_product").val(data[0].id_product);
        },
        error: function (err) {
            let err_log = err.responseJSON.errors;
            console.log(err_log)
        }
    })
}
$("#update-data-product").on('click', function (e) {
    e.preventDefault();
    id = $("#id_product").val();
    alert(id)
    formData = $("#form-edit-product").serialize();
    $.ajax({
        url: `/admin/master-data/product/${id}`,
        method: 'patch',
        data: formData,
        success: function (response) {
            success('edit', response)
            displayData();
        },
        error: function (err) {
            let err_log = err.responseJSON.errors;
            console.log(err_log)
        }
    })
})

function getSubcategory(){
    var id = $("#id_category").val();
    $.ajax({
        url: `/admin/master-data/product/getSubcategory/${id}`,
        method: 'get',
        dataType: 'json',
        success: function (data) {
            var html = '';
            for (var count = 0; count < data.length; count++) {
                html += '<option value="' + data[count].id + '">' + data[count].subcategory_name +
                    '</option>';
            }

            $("#id_subcategory").html(html);

        },
        error: function (err) {
            var html = '<option value="">Select Sub Category</option>';
            $("#id_subcategory").html(html);
            let err_log = err.responseJSON.errors;
            console.log(err_log)
        }
    })
}