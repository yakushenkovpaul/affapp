
function make_chart(sales, commission)
{
    var dataset = [
        {
            label: "Number of sales",
            data: sales,
            color: "#e5e5e5",
            bars: {
                show: true,
                align: "center",
                barWidth: 24 * 60 * 60 * 600,
                lineWidth:0,
                fillColor: {
                    colors: [{
                        opacity: .5
                    }, {
                        opacity: 1
                    }]
                }
            }

        }, {
            label: "Payments",
            data: commission,
            yaxis: 2,
            color: "#2196f3",
            lines: {
                lineWidth:1,
                show: true,
                fill: true,
                fillColor: {
                    colors: [{
                        opacity: 0.2
                    }, {
                        opacity: 0.4
                    }]
                }
            },
            splines: {
                show: false,
                tension: 0.6,
                lineWidth: 1,
                fill: 0.1
            },
        }
    ];


    var options = {
        xaxis: {
            mode: "time",
            tickSize: [1, "day"],
            tickLength: 0,
            axisLabel: "Date",
            axisLabelUseCanvas: true,
            axisLabelFontSizePixels: 12,
            axisLabelFontFamily: 'Arial',
            axisLabelPadding: 10,
            color: "#d5d5d5"
        },
        yaxes: [{
            position: "left",
            max: 20,
            color: "#d5d5d5",
            axisLabelUseCanvas: true,
            axisLabelFontSizePixels: 12,
            axisLabelFontFamily: 'Arial',
            axisLabelPadding: 3
        }, {
            position: "right",
            clolor: "#d5d5d5",
            axisLabelUseCanvas: true,
            axisLabelFontSizePixels: 12,
            axisLabelFontFamily: ' Arial',
            axisLabelPadding: 67
        }
        ],
        legend: {
            noColumns: 1,
            labelBoxBorderColor: "#000000",
            position: "nw"
        },
        grid: {
            hoverable: false,
            borderWidth: 0
        }
    };

    $.plot($("#flot-dashboard-chart"), dataset, options);
}

make_chart(sales, commission);

