@extends('layout.master')
<style>
     .ui-state-default  {
        border: 0px !important;
    background-color: white !important; /* Change this to the desired color */
  }
  #ui-datepicker-div{
width: 212px !important;
  }
  .from_date:focus, .to_date:focus {
    border: 1px solid blue !important;
}

.apexcharts-legend {
    margin-right: 6pc !important;
}
.apexcharts-toolbar{
    display: none !important;
}
.fa-user{
margin-bottom: 13px;
}
.apexcharts-legend-text{
    margin-bottom: -1px;
    color: blue !important;
}
.apexcharts-legend-text:hover{
    color: goldenrod !important;
}
[seriesname="Favourites"] {
    margin: 4px 10px !important;
}


.inner-div{
    border-radius: 0.4rem !important;

}



.apexcharts-tooltip {
  background: transparent !important;
  border: none !important;
  box-shadow: none !important;
}
#barChart .apexcharts-legend .apexcharts-legend-marker {
  border-radius: 6px !important;   /* 50% for a perfect circle */
  /* optional: tweak size for pill look */
  /* width: 14px !important; height: 8px !important; border-radius: 999px !important; */
}

.shaking, .apexcharts-legend-series {
    
    display: inline-block;
    transition: transform 0.2s ease-in-out;
   }
      .shaking:hover, .apexcharts-legend-series:hover {
    animation: shake 2s linear infinite;
   }

  @keyframes shake {
    0% { transform: translateX(0); }
    25% { transform: translateX(-10px); }
    50% { transform: translateX(10px); }
    75% { transform: translateX(-10px); }
    100% { transform: translateX(0); }
  }

</style>
@section('content')

    <section class="contents" style="border:0px solid red;padding:70px 0 0px;">
        <div class="container" style="border-top:1px solid #eee;">

            <div class="col-md-12" style="padding:10px;margin-top:30px;">
                <div class="row">
                    <div class="col-lg-2 col-md-6">
                        <input type="text" id="from_datepicker" class="form-control from_date" name="from_date" placeholder="Date" >
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <input type="text"  id="to_datepicker" class="form-control to_date" name="to_date" placeholder="Date" >
                    </div>
                    <div class="col-lg-2 col-md-6" style="margin-top:5px;">
                        <button class="btn btn-primary filter">Filter</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 shaking" style="border:0px solid red;margin-top:20px;">
                        <a href="" >
                            <div class="inner-div"
                                 style="border:2px solid #eee;text-align:center;padding:20px 0px;border-radius:5px;">
                                <div class="icon iconx3"><i class="fa fa-user" style="font-size:50px;"></i></div>
                                <!-- <h1 class="total_click">{{ formatNumber($influencer->total_clicks) }}</h1> -->
                                <h5 class="total_click bilal-worki">{{ formatNumber($influencer->total_views) }}</h5>
                                <!-- <span><b>Clicks</b></span> -->
                                <span><b style="font-size: 14px">Profile Views</b></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2 shaking" style="border:0px solid red;margin-top:20px;">
                        <a href="">
                            <div class="inner-div "
                                 style="border:2px solid #eee;text-align:center;padding:20px 0px;border-radius:5px;">
                                <div class="icon iconx2"><i class="fa fa-user" style="font-size:50px;"></i></div>
                                <h5 class="favourite_count">{{ formatNumber($influencer->favourites_count) }}</h5>
                                <!-- <span><b>Views</b></span> -->
                                <span><b style="font-size: 14px">Favorites</b></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2 shaking" style="border:0px solid red;margin-top:20px;">
                        <a href="">
                            <div class="inner-div"
                                 style="border:2px solid #eee;text-align:center;padding:20px 0px;border-radius:5px;">
                                <div class="icon iconx"><i class="fa fa-user" style="font-size:50px;"></i></div>
                                <h5 class="chat_count">-----</h5>
                                <span><b style="font-size: 14px">Chats</b></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-12" style="padding:10px;">
                <div class="row">
                    <div class="col-md-6" style="border:0px solid red;">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title">Favorites, Views & Clicks(Percentage wise)g</h2>
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
            </div> -->
            <div class="col-md-12" style="padding:10px;">
                <div class="card">
                    <div class="card-header" style="padding: 20px 17px;">
                        <h2 class="card-title">Profile Analytics</h2>
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
   
    <script>

$(function() {
    $('#from_datepicker, #to_datepicker').datepicker({
        dateFormat: 'dd-M-yy',
         changeMonth: true,
          changeYear: true,
          
             yearRange: "2024:+0",


        beforeShow: function(input, inst) {
        inst.dpDiv.addClass('custom-datepicker');
      }
       
    });
});
    $(document).ready(function () {
        renderDashboard();
        });

        $('.filter').click(function () {
            renderDashboard();
        });

        function renderDashboard() {
            $.ajax({
                url: api_url + "get-data-for-dashboard",
                method: 'get',
                dataType: 'json',
                data: {from_date: $('.from_date').val(), to_date: $('.to_date').val()},
                success: function (response) {
                    create_pie_chart(response.pie_chart);
                    create_donut_chart(response.pie_chart);
                    create_bar_chart(response.profile_visit_bar_chart);

                    $('.total_view').html(response.profile_visit_count);
                    $('.total_click').html(response.profile_visit_count);
                    $('.favourite_count').html(response.favorite_count);
                    $('.chat_count').html(response.chat_count);
                },
                error: function (response) {
                    console.log("You must have sufficient data to show the Bar Chart");
                }
            });
        }

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
