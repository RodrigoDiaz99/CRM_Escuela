// All javascript code in this project for now is just for demo DON'T RELY ON IT

const random = (max = 100) => {
    return Math.round(Math.random() * max) + 20
}

const randomData = () => {
    return [
        random(),
        random(),
        random(),
        random(),
        random(),
        random(),
        random(),
        random(),
        random(),
        random(),
        random(),
        random(),
    ]
}

const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']

const cssColors = (color) => {
    return getComputedStyle(document.documentElement).getPropertyValue(color)
}

const getColor = () => {
    return window.localStorage.getItem('color') ?? 'cyan'
}

const colors = {
    primary: cssColors(`--color-${getColor()}`),
    primaryLight: cssColors(`--color-${getColor()}-light`),
    primaryLighter: cssColors(`--color-${getColor()}-lighter`),
    primaryDark: cssColors(`--color-${getColor()}-dark`),
    primaryDarker: cssColors(`--color-${getColor()}-darker`),
}

/* function monthlySale(monthlyData){
 */    const barChart = new Chart(document.getElementById('barChart'), {
        type: 'bar',
        data: {
            labels: months,
            datasets: [{
                data: randomData(),
                backgroundColor: colors.primary,
                hoverBackgroundColor: colors.primaryDark,
            }, ],
        },
        options: {
            scales: {
                yAxes: [{
                    gridLines: false,
                    ticks: {
                        beginAtZero: true,
                        stepSize: 50,
                        fontSize: 12,
                        fontColor: '#97a4af',
                        fontFamily: 'Open Sans, sans-serif',
                        padding: 10,
                    },
                }, ],
                xAxes: [{
                    gridLines: false,
                    ticks: {
                        fontSize: 12,
                        fontColor: '#97a4af',
                        fontFamily: 'Open Sans, sans-serif',
                        padding: 5,
                    },
                    categoryPercentage: 0.5,
                    maxBarThickness: '10',
                }, ],
            },
            cornerRadius: 2,
            maintainAspectRatio: false,
            legend: {
                display: false,
            },
        },
    })

    
/* }
 */
const doughnutChart = new Chart(document.getElementById('doughnutChart'), {
    type: 'doughnut',
    data: {
        labels: ['Rodrigo', 'Kenn', 'Pedro'],
        datasets: [{
            data: [random(), random(), random()],
            backgroundColor: [colors.primary, colors.primaryLighter, colors.primaryLight],
            hoverBackgroundColor: colors.primaryDark,
            borderWidth: 0,
            weight: 0.5,
        }, ],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
            position: 'bottom',
        },

        title: {
            display: false,
        },
        animation: {
            animateScale: true,
            animateRotate: true,
        },
    },
})

const doughnutChart2 = new Chart(document.getElementById('doughnutChart2'), {
    type: 'doughnut',
    data: {
        labels: ['Tenis Nike azul', 'Audifonos Xiaomi Bluetooth', 'Mouse GamerPro'],
        datasets: [{
            data: [random(), random(), random()],
            backgroundColor: [colors.primary, colors.primaryLighter, colors.primaryLight],
            hoverBackgroundColor: colors.primaryDark,
            borderWidth: 0,
            weight: 0.5,
        }, ],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
            position: 'bottom',
        },

        title: {
            display: false,
        },
        animation: {
            animateScale: true,
            animateRotate: true,
        },
    },
})

const activeUsersChart = new Chart(document.getElementById('activeUsersChart'), {
    type: 'bar',
    data: {
        labels: [...randomData(), ...randomData()],
        datasets: [{
            data: [...randomData(), ...randomData()],
            backgroundColor: colors.primary,
            borderWidth: 0,
            categoryPercentage: 1,
        }, ],
    },
    options: {
        scales: {
            yAxes: [{
                display: false,
                gridLines: false,
            }, ],
            xAxes: [{
                display: false,
                gridLines: false,
            }, ],
            ticks: {
                padding: 10,
            },
        },
        cornerRadius: 2,
        maintainAspectRatio: false,
        legend: {
            display: false,
        },
        tooltips: {
            prefix: 'Users',
            bodySpacing: 4,
            footerSpacing: 4,
            hasIndicator: true,
            mode: 'index',
            intersect: true,
        },
        hover: {
            mode: 'nearest',
            intersect: true,
        },
    },
})

const lineChart = new Chart(document.getElementById('lineChart'), {
    type: 'line',
    data: {
        labels: months,
        datasets: [{
            data: randomData(),
            fill: false,
            borderColor: colors.primary,
            borderWidth: 2,
            pointRadius: 0,
            pointHoverRadius: 0,
        }, ],
    },
    options: {
        responsive: true,
        scales: {
            yAxes: [{
                gridLines: false,
                ticks: {
                    beginAtZero: false,
                    stepSize: 50,
                    fontSize: 12,
                    fontColor: '#97a4af',
                    fontFamily: 'Open Sans, sans-serif',
                    padding: 20,
                },
            }, ],
            xAxes: [{
                gridLines: false,
            }, ],
        },
        maintainAspectRatio: false,
        legend: {
            display: false,
        },
        tooltips: {
            hasIndicator: true,
            intersect: false,
        },
    },
})

let randomUserCount = 0

const usersCount = document.getElementById('usersCount')

const fakeUsersCount = () => {
    randomUserCount = random()
    activeUsersChart.data.datasets[0].data.push(randomUserCount)
    activeUsersChart.data.datasets[0].data.splice(0, 1)
    activeUsersChart.update()
    usersCount.innerText = randomUserCount
}

setInterval(() => {
    fakeUsersCount()
}, 1000)

//Usage in Inventory Module
function salePriceCalculator() {
    var percent = document.getElementById("percent_of_profit").value;
    var purchase_price = document.getElementById("purchase_price").value;
    var calculate = (purchase_price * percent) / 100;
    var final = Number(purchase_price) + Number(calculate);
    document.getElementById("sale_price").value = final;
}

function percentProfitCalculator() {
    var percent = document.getElementById("percent_of_profit").value;
    var purchase_price = document.getElementById("purchase_price").value;
    var sale_price = document.getElementById("sale_price").value;
    var calculate = Number(sale_price) - Number(purchase_price);
    var final = (Number(calculate) / Number(purchase_price)) * 100;
    document.getElementById("percent_of_profit").value = final;


}
