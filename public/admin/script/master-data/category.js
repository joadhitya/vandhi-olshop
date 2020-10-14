$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$("#save-data-category").on('click', async (e) => {
  e.preventDefault();
    $("#save-data-category").attr('disabled', 'true')
    formData = $("#form-add-category").serialize();
    try {
        await $.ajax({
            url: '/admin/master-data/category',
            method: 'post',
            data: formData,
            success: function (response) {                
                success('add', response)
                displayData();
            },
            error: function (err) {
                $("#save-data-category").removeAttr('disabled')
                let err_log = err.responseJSON.errors;
                if (err.status == 422) {
                    if (typeof (err_log.category_code) !== 'undefined') {
                        Toast.fire({
                            icon: 'error',
                            title: err_log.category_code[0]
                        })
                    }
                    if (typeof (err_log.category_name) !== 'undefined') {
                        Toast.fire({
                            icon: 'error',
                            title: err_log.category_name[0]
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
    alert(id)
    $.ajax({
        url: `/admin/master-data/category/${id}`,
        method: 'get',
        dataType: 'json',
        success: function (data) {
            console.log(data);
            $("#edit-category").modal('show');
            $("#category_code").val(data[0].category_code);
            $("#category_name").val(data[0].category_name);
            $("#category_slug").val(data[0].category_slug);
            $("#category_description").val(data[0].category_description);
            $("#id_category").val(data[0].id_category);
        },
        error: function (err) {
            let err_log = err.responseJSON.errors;
            console.log(err_log)
        }
    })
}

$("#update-data-category").on('click', function (e) {
    e.preventDefault();
    id = $("#id_category").val();
    alert(id)
    formData = $("#form-edit-category").serialize();
    $.ajax({
        url: `/admin/master-data/category/${id}`,
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