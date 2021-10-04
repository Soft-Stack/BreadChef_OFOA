$(function () {
    "use strict";

    //
    // Helper function
    //
    function sparkify(data) {
        var spark = [];
        for (var key in data) {
            if (key != 'total') {
                spark.push(data[key]);
            }
        }
        return spark;
    }

    // ============================================================== 
    // Revenue
    // ============================================================== 
    
    $.getJSON('http://localhost:8000/api/revenue', function(data) {

        var thisWeek = sparkify(data['this-week']);
        var lastWeek = sparkify(data['last-week']);
        console.log(thisWeek);
        console.log(lastWeek);

        var ctx = document.getElementById('revenue').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',

            data: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                datasets: [{
                        label: 'Current Week',
                        data: thisWeek,
                        backgroundColor: "rgba(89, 105, 255,0.5)",
                        borderColor: "rgba(89, 105, 255,0.7)",
                        borderWidth: 2
                    },
                    {
                        label: 'Previous Week',
                        data: lastWeek,
                        backgroundColor: "rgba(255, 64, 123,0.5)",
                        borderColor: "rgba(255, 64, 123,0.7)",
                        borderWidth: 2
                    }
                ]
            },
            options: {

                legend: {
                    display: true,
                    position: 'bottom',

                    labels: {
                        fontColor: '#71748d',
                        fontFamily: 'Circular Std Book',
                        fontSize: 14,
                    }
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            // Include a dollar sign in the ticks
                            callback: function (value, index, values) {
                                return 'Rs.' + value;
                            }
                        }
                    }]
                },
            }
        });
    });


    // ============================================================== 
    // Revenue Cards
    // ============================================================== 

    //
    // For Unique Customer card
    //
    $.getJSON('http://localhost:8000/api/customer', function (data) {
        console.log(data);
        var customerspark = sparkify(data);

        console.log('cust :', customerspark);
        $('#unique-customers-value')[0].innerText = data['total'];
        // [5, 5, 7, 7, 9, 5, 3, 5, 2, 4, 6, 7]
        $("#customer-sparkline").sparkline(customerspark, {
            type: 'line',
            width: '99.5%',
            height: '100',
            lineColor: '#5969ff',
            fillColor: '#dbdeff',
            lineWidth: 2,
            spotColor: undefined,
            minSpotColor: undefined,
            maxSpotColor: undefined,
            highlightSpotColor: undefined,
            highlightLineColor: undefined,
            resize: true
        });
    });



    //
    // For Weekly Order and Monthly card
    //
    $.getJSON('http://localhost:8000/api/orders', function (data) {
        console.log(data);

        var weekspark = sparkify(data['current-week']);
        var monthspark = sparkify(data['this-month']);
        var totalspark = sparkify(data['total-orders']);

        $('#orders-this-week-value')[0].innerText = data['current-week']['total'];
        $('#orders-this-month-value')[0].innerText = data['this-month']['total'];
        $('#total-orders')[0].innerText = data['total-orders']['total'];


        $("#week-order-sparkline").sparkline(weekspark, {
            type: 'line',
            width: '99.5%',
            height: '100',
            lineColor: '#ff407b',
            fillColor: '#ffdbe6',
            lineWidth: 2,
            spotColor: undefined,
            minSpotColor: undefined,
            maxSpotColor: undefined,
            highlightSpotColor: undefined,
            highlightLineColor: undefined,
            resize: true
        });

        $("#month-order-sparkline").sparkline(monthspark, {
            type: 'line',
            width: '99.5%',
            height: '100',
            lineColor: '#25d5f2',
            fillColor: '#dffaff',
            lineWidth: 2,
            spotColor: undefined,
            minSpotColor: undefined,
            maxSpotColor: undefined,
            highlightSpotColor: undefined,
            highlightLineColor: undefined,
            resize: true
        });

        $("#total-orders-sparkline").sparkline(totalspark, {
            type: 'line',
            width: '99.5%',
            height: '100',
            lineColor: '#fec957',
            fillColor: '#fff2d5',
            lineWidth: 2,
            spotColor: undefined,
            minSpotColor: undefined,
            maxSpotColor: undefined,
            highlightSpotColor: undefined,
            highlightLineColor: undefined,
            resize: true,
        });
    });
});
