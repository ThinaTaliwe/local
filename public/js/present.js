// Functionality of the first present
function present1Clicked() {
    Swal.fire({
        title: 'Hooray!!',
        html: '<img src="img/gift1.jpg" alt="Present 1" style="max-width: 100%;">' +
            '<h3>Christmas came early this year.</h3>' +
            '<p>You have been gifted a horse.</p>',
        icon: 'success',
        confirmButtonText: 'OK'
    });
}

function present2Clicked() {
    Swal.fire({
        title: 'Are you sure?',
        text: 'Once you open this gift now you will not recieve any next year!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, open it!',
        cancelButtonText: 'No, save it!',
        reverseButtons: true
    }).then((result) => {
        if (result.value) {
            Swal.fire(
                'Empty Box!',
                'Opps, You should have waited for next year.',
                'error'
            )
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            Swal.fire(
                'Gift Stored',
                'Your gift is safely kept for next year :)',
                'success'
            )
        }
    })
}