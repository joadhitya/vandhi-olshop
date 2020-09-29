$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


function getUrl() {
    var url = window.location.href;
    var arr = url.split('/');
    var data = arr[5];
    return data;
}

function success(type, response) {
    var data = getUrl();
    Toast.fire({
        icon: 'success',
        title: response
    })
    if (type === 'add') {
        $(`#form-add-${data}`)[0].reset();
        $(`#add-${data}`).modal('hide');
        $(`#save-data-${data}`).removeAttr('disabled');
    } else if ('edit') {
        $(`#edit-${data}`).modal('hide');
    } else if ('delete') {
        return false;
    }
}

function displayData() {
    var data = getUrl();
    $.ajax({
        url: `/admin/master-data/${data}/displayData`,
        method: 'get',
        success: function (response) {
            $(`#data-${data}`).html(response)
        },
        error: function (err) {
            let err_log = err.responseJSON.errors;
            console.log(err_log)
        }
    })
}
function deleteData(id) {
    var data = getUrl();
    Swal.fire({
        title: 'Yakin akan menghapus data?',
        text: "Data yang di hapus tidak dapat dikembalikan",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, hapus!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: `/admin/master-data/${data}/${id}`,
                method: 'delete',
                success: function (response) {
                    success('delete', response)
                    displayData()
                },
                error: function (err) {
                    console.log(err)
                    let err_log = err.responseJSON.errors;
                    console.log(err_log)
                }
            })
        }
    })
}

$(document).ready(function () {
    displayData();
});
