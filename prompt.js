function pr(coinName) {
    Swal.fire({
        title: 'Enter amount to sell ' + coinName,
        input: 'text',
        inputAttributes: {
            autocapitalize: 'off'
        },
        showCancelButton: true,
        confirmButtonText: 'Sell',
        allowOutsideClick: () => !Swal.isLoading()
    }).then((result) => {
        if (result.isConfirmed) {
            var form = document.createElement("form");
            var element1 = document.createElement("input"); 
            var element2 = document.createElement("input");  

            form.method = "POST";
            form.action = "sell_coin.php";   

            element1.value=coinName;
            element1.name="coin_name";
            form.appendChild(element1);  

            element2.value=result.value;
            element2.name="amount";
            form.appendChild(element2);

            document.body.appendChild(form);

            form.submit();
        }
    })
};

function chargeAccount(){
    Swal.fire({
        title: 'Enter amount to charge',
        input: 'text',
        inputAttributes: {
            autocapitalize: 'off'
        },
        showCancelButton: true,
        confirmButtonText: 'Submit',
        allowOutsideClick: () => !Swal.isLoading()
    }).then((result) => {
        if (result.isConfirmed) {

            var form = document.createElement("form");
            var element1 = document.createElement("input"); 

            form.method = "POST";
            form.action = "charge_account.php";   

            element1.value=result.value;
            element1.name="amount";
            form.appendChild(element1);

            document.body.appendChild(form);

            form.submit();
        }
    })
}