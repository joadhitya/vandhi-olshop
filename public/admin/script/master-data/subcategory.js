$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$("#save-data-subcategory").on('click', async (e) => {
  e.preventDefault();
    $("#save-data-subcategory").attr('disabled', 'true')
    formData = $("#form-add-subcategory").serialize();
    try {
        await $.ajax({
            url: '/admin/master-data/subcategory',
            method: 'post',
            data: formData,
            success: function (response) {                
                success('add', response)
                displayData();
            },
            error: function (err) {
                $("#save-data-subcategory").removeAttr('disabled')
                let err_log = err.responseJSON.errors;
                if (err.status == 422) {
                    if (typeof (err_log.id_category) !== 'undefined') {
                        Toast.fire({
                            icon: 'error',
                            title: err_log.id_category[0]
                        })
                    }
                    if (typeof (err_log.subcategory_name) !== 'undefined') {
                        Toast.fire({
                            icon: 'error',
                            title: err_log.subcategory_name[0]
                        })
                    }
                    
                    if (typeof (err_log.subcategory_code) !== 'undefined') {
                        Toast.fire({
                            icon: 'error',
                            title: err_log.subcategory_code[0]
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
        url: `/admin/master-data/subcategory/${id}`,
        method: 'get',
        dataType: 'json',
        success: function (data) {
            console.log(data);
            $("#subcategory_code").val(data[0].subcategory_code);
            $("#subcategory_name").val(data[0].subcategory_name);
            $("#subcategory_slug").val(data[0].subcategory_slug);
            $("#subcategory_description").val(data[0].subcategory_description);
            $("#id_category").val(data[0].id_category);
            $("#id_subcategory").val(data[0].id_subcategory);
            $("#edit-subcategory").modal('show');
        },
        error: function (err) {
            let err_log = err.responseJSON.errors;
            console.log(err_log)
        }
    })
}

$("#update-data-subcategory").on('click', function (e) {
    e.preventDefault();
    id = $("#id_subcategory").val();
    formData = $("#form-edit-subcategory").serialize();
    $.ajax({
        url: `/admin/master-data/subcategory/${id}`,
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