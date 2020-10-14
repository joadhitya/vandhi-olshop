

const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 1000,
    timerProgressBar: true,
    onOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
})

function manage_cart(pid, type) {
    if (type == 'update') {
        var qty = $("#" + pid + "qty").val();
    } else {
        var qty = 1;
    }
    let _token   = $('meta[name="csrf-token"]').attr('content');

    $.ajax({
        url: '/transaction/manage_cart',
        method: 'post',
        data: {
            pid : pid,
            qty : qty,
            type : type,
            _token: _token
          },
        success: function (result) {          
            if (type == 'update' || type == 'remove') {
                window.location.href = window.location.href;
            }
            if (result == 'not_avaliable') {
                Swal.fire({
                    position: 'top-end',
                    icon: 'info',
                    title: 'Items not Available',
                    showConfirmButton: false,
                    timer: 1500
                })
            } else {
                $('.itemCount').html(result);
                if (type == 'remove') {
                    Toast.fire({
                        icon: 'success',
                        title: 'Product Successfully Deleted'
                    })
                } else {
                    Toast.fire({
                        icon: 'success',
                        title: 'Product Successfully Added'
                    })
                }

            }
        },
        error: function (err) {
            console.log(err)
            let err_log = err.responseJSON.errors;
            console.log(err_log)
        }
    });
}