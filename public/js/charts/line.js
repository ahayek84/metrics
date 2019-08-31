var my_date1 = document.getElementById('fromdate').value;
var res = {
    'labels':['01-01-2019', '01-02-2019', '01-03-2019', '01-04-2019'],
    'label_data':'Glass',
    'data':[12, 19, 3, 5, 2, 3],
    'color':['rgba(255, 99, 132, 0.2)']
} ;


function httpGet(theUrl,my_date, clas )
{
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", theUrl + my_date + '/' + clas, false ); // false for synchronous request
    xmlHttp.send( null );
    return xmlHttp.responseText;
}
res = JSON.parse(httpGet('/line_chart/', my_date1,'item'));

var ctx = document.getElementById('chartline'+ my_viz2).getContext('2d');
var lineChart= new Chart(ctx, {
    type: 'line',
    data: {
        labels: res.labels,
        datasets: res.dataset
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
            display: true,
            position: 'bottom',
            labels: {
                fontColor: 'rgb(255, 99, 132)'
            }
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});