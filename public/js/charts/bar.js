var my_date1 = document.getElementById('fromdate').value;
var res = {
    'labels':['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
    'data':[12, 19, 3, 5, 2, 3],
    'color':[                'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)']
} ;
var label =  '# of Items';

function httpGet(theUrl,my_date, clas )
{
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", theUrl + my_date + '/' + clas, false ); // false for synchronous request
    xmlHttp.send( null );
    return xmlHttp.responseText;
}


switch(my_viz) {
    case 1:
        res = JSON.parse(httpGet('/bar_chart/', my_date1,'item'));
        var label =  '# of Items';
        break;
    case 2:
        res = JSON.parse(httpGet('/bar_chart/', my_date1,'channel'));
        var label =  '# of Orders/Channels';

        break;
    case 3:
        res = JSON.parse(httpGet('/bar_chart/', my_date1,'country'));
        var label =  '# of Orders/Country';
        break;
    default:
    // code block*/
}
var ctx = document.getElementById('chartbar'+ my_viz).getContext('2d');
var barChart= new Chart(ctx, {
    type: 'bar',
    data: {
        labels: res.labels,
        datasets: [{
            label: label,
            data: res.data,
            backgroundColor: res.color,
            borderColor: res.color,
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});