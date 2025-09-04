@extends('layout.master')
@section('content')

    <section class="contents" style="border:0px solid red;padding:70px 0 0px;">
        <div class="container" style="border-top:1px solid #eee;">

            <div class="col-md-12" style="padding:10px;">
                <h4 style="margin-top:10px;">Dashboard</h4>
                <div class="row">
                    <div class="col-md-2" style="border:0px solid red;margin-top:20px;">
                        <a href="">
                            <div class="inner-div"
                                 style="border:2px solid #eee;text-align:center;padding:20px 0px;border-radius:5px;">
                                <div class="icon"><i class="fa fa-user" style="font-size:50px;"></i></div>
                                <h1>{{ formatNumber($influencer->total_clicks) }}</h1>
                                <span><b>Clicks</b></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2" style="border:0px solid red;margin-top:20px;">
                        <a href="">
                            <div class="inner-div"
                                 style="border:2px solid #eee;text-align:center;padding:20px 0px;border-radius:5px;">
                                <div class="icon"><i class="fa fa-user" style="font-size:50px;"></i></div>
                                <h1>{{ formatNumber($influencer->total_views) }}</h1>
                                <span><b>Views</b></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-12" style="padding:10px;">
                <div class="row">
                    <div class="col-md-6" style="border:0px solid red;">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title">Favorites, Views & Clicks(Percentage wise)</h2>
                            </div>
                            <div class="card-content">
                                <div id="pieChart"></div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6" style="border:0px solid green;">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title">Favorites, Views & Clicks(Count wise)</h2>
                            </div>
                            <div class="card-content">
                                <div id="donutChart"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-12" style="padding:10px;">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Profile Visit (Month wise count)</h2>
                    </div>
                    <div class="card-content">
                        <div id="barChart"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('page_scripts')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <script>
        $(document).ready(function () {
            $.ajax({
                url: api_url + "get-data-for-dashboard",
                method: 'get',
                dataType: 'json',
                success: function (response) {
                    create_pie_chart(response.pie_chart);
                    create_donut_chart(response.pie_chart);
                    create_bar_chart(response.profile_visit_bar_chart);
                },
                error: function (response) {
                    console.log("You must have sufficient data to show the Bar Chart");
                }
            });
        });
        function create_pie_chart(response) {
            var options = {
                series: response.data,
                chart: {
                    width: '100%',
                    type: 'pie',
                },
                labels: response.label,
                theme: {
                    monochrome: {
                        enabled: true
                    }
                },
                plotOptions: {
                    pie: {
                        dataLabels: {
                            offset: -5
                        }
                    }
                },
                // title: {
                //     text: "Monochrome Pie"
                // },
                dataLabels: {
                    formatter(val, opts) {
                        const name = opts.w.globals.labels[opts.seriesIndex]
                        return [name, val.toFixed(1) + '%']
                    }
                },
                legend: {
                    show: false
                }
            };

            var chart = new ApexCharts(document.querySelector("#pieChart"), options);
            chart.render();
        }

        function create_donut_chart(response) {
            //DONUT Chart
            var options = {
                series: response.data,
                chart: {
                    width: '100%',
                    type: 'donut',
                },
                labels: response.label,
                plotOptions: {
                    pie: {
                        startAngle: -90,
                        endAngle: 270
                    }
                },
                dataLabels: {
                    enabled: false
                },
                fill: {
                    type: 'gradient',
                },
                legend: {
                    formatter: function (val, opts) {
                        return val + " - " + opts.w.globals.series[opts.seriesIndex]
                    }
                },
                // title: {
                //     text: 'Last 30 days Expense'
                // },
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 380
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }]
            };

            var chart = new ApexCharts(document.querySelector("#donutChart"), options);
            chart.render();
            //END OF DONUT CHART
        }


        function create_bar_chart(data) {
  var options = {
    series: [
      { name: 'Profile Views', data: data.profile_visit_count, color: '#32CD32' },
      { name: 'Favorites',     data: data.favourite_count,     color: '#0000ff' },
      { name: 'Chats',         data: data.chat_count,          color: '#DAA520' }
    ],
    chart: { type: 'bar', height: 350, background: 'transparent' },
    plotOptions: {
      bar: {
        horizontal: false,
        columnWidth: '30%',
        borderRadius: 8,
        borderRadiusApplication: 'end'
      }
    },
    legend: { markers: { shape: 'square' } },
    dataLabels: { enabled: false },
    stroke: { show: true, width: 2, colors: ['transparent'] },
    xaxis: { categories: data.months },
    fill: { opacity: 1 },
    tooltip: { y: { formatter: val => val } }
  };

  var chart = new ApexCharts(document.querySelector("#barChart"), options);
  chart.render();
}

    </script>
@endsection
