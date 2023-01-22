const container = document.getElementById("data_container");
const ids = ["bitcoin", "ethereum", "tether", "binancecoin", "solana", "ripple", "cardano", "avalanche-2", "dogecoin", "polkadot", "uniswap", "monero", "stellar", "shiba-inu"]

function pr(buyOrSell,coinName) {
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

function updateData(coins) {
    container.innerHTML = "";
    let i = 1;
    coins.forEach(coin => {
        appendRow(coin, i);
        i++;
    })

    buttons = document.getElementsByClassName("promptBtn");
    for (let i = 0; i < buttons.length; i++) {
        buttons[i].addEventListener("click", function () {
            pr('buy',coins[i].name);
        })
    }
}

function appendRow(coin, i) {
    let color = coin.daily_change < 0 ? "red" : "green";
    container.innerHTML = container.innerHTML + `
    <tr class="table-row">

        <td class="table-data">
        </td>

        <th class="table-data rank" scope="row">${i}</th>

        <td class="table-data">
        <div class="wrapper">
            <img src="./assets/images/${coin.name}.svg" onerror="this.src = './assets/images/ethereum.svg'" width="20" height="20" alt="Ethereum logo" class="img">

            <h3>
            <a href="#" class="coin-name">${coin.name}</a>
            </h3>
        </div>
        </td>

        <td class="table-data last-price">$${Number(coin.price).toLocaleString()}</td>

        <td class="table-data last-update ${color}">${Number(coin.daily_change).toFixed(2)}%</td>

        <td class="table-data market-cap">$${Math.floor(Number(coin.market_cap)).toLocaleString()}</td>

        <td class="table-data">
        <button class="btn btn-outline promptBtn">Buy</button>
        </td>

    </tr>
    `
}

function fetchData() {
    let baseUrl = "https://api.coingecko.com/api/v3/simple/price?ids="

    ids.forEach(id => {
        baseUrl = baseUrl + id + ","
    });

    baseUrl = baseUrl + "&vs_currencies=usd&include_market_cap=true&include_24hr_change=true";

    fetch(baseUrl)
        .then(function (response) {
            return response.json();
        }).then(function (coins) {
            var ajaxUrl = 'data_insert.php',
                data = { coins: coins };
            $.post(ajaxUrl, data, function (response) {
                ajaxUrl = 'get_data.php',
                    data = {};
                $.post(ajaxUrl, data, function (response) {
                    var data = JSON.parse(response);
                    updateData(data);
                });
            });
        }).catch(function (err) {
            console.log('Fetch Error :-S', err);
            ajaxUrl = 'get_data.php',
                data = {};
            $.post(ajaxUrl, data, function (response) {
                var data = JSON.parse(response);
                updateData(data);
            });
        });
}

window.onload = () => fetchData();

setInterval(() => {
    fetchData();
}, 60000)
