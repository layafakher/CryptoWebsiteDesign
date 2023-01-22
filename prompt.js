function pr(buyOrSell, coinName) {
    Swal.fire({
        title: 'Enter amount to ' + buyOrSell + ' ' + coinName,
        input: 'text',
        inputAttributes: {
            autocapitalize: 'off'
        },
        showCancelButton: true,
        confirmButtonText: 'Buy',
        showLoaderOnConfirm: true,

        preConfirm: (login) => {
            return fetch(`//api.github.com/users/${login}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error(response.statusText)
                    }
                    return response.json()
                })
                .catch(error => {
                    Swal.showValidationMessage(
                        `Request pending: ${error}`
                    )
                })
        },
        allowOutsideClick: () => !Swal.isLoading()
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: `${result.value.login}'s avatar`,
                imageUrl: result.value.avatar_url
            })
        }
    })
};

// window.onload = function(){
//     buttons = document.getElementsByClassName("promptBtn");
//     for (let i = 0; i < buttons.length; i++) {
//         buttons[i].addEventListener("click", function () {
//             pr('sell');
//         })
//     }
// }