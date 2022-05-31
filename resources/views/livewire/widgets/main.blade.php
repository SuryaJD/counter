<div>
    {{-- <div class="section-block">
        <!-- metric row -->
        <div class="metric-row">
            <div class="col-lg-9">
                <div class="metric-row metric-flush">
                    <!-- metric column -->
                    <div class="col">
                        <!-- .metric -->
                        <a href="user-teams.html" class="metric metric-bordered align-items-center"
                            style="padding:0px!important;">
                            <h2 class="metric-label"> Pageviews </h2>
                            <p class="metric-value h1">
                                <span class="value" id="pageviewsCount">{{ $pageviewsCount }}</span>
                            </p>
                        </a> <!-- /.metric -->
                    </div><!-- /metric column -->
                    <!-- metric column -->
                    <div class="col">
                        <!-- .metric -->
                        <a href="user-projects.html" class="metric metric-bordered align-items-center">
                            <h2 class="metric-label"> Visitors </h2>
                            <p class="metric-value h1">
                                <sub><i class="oi oi-fork"></i></sub>
                                <span class="value" id="uniqueVisitorsCount">{{ $visitorsCount }}</span>
                            </p>
                        </a> <!-- /.metric -->
                    </div><!-- /metric column -->
                    <!-- metric column -->
                    <div class="col">
                        <!-- .metric -->
                        <a href="user-tasks.html" class="metric metric-bordered align-items-center">
                            <h2 class="metric-label"> Active Tasks </h2>
                            <p class="metric-value h1">
                                <sub><i class="fa fa-tasks"></i></sub> <span class="value">64</span>
                            </p>
                        </a> <!-- /.metric -->
                    </div><!-- /metric column -->
                </div>
            </div><!-- metric column -->
            <div class="col-lg-3">
                <!-- .metric -->
                <a href="user-tasks.html" class="metric metric-bordered">
                    <div class="metric-badge">
                        <span class="badge badge-lg badge-success"><span class="oi oi-media-record pulse mr-1"></span>
                            ONGOING TASKS</span>
                    </div>
                    <p class="metric-value h1">
                        <sub><i class="oi oi-timer"></i></sub> <span class="value">8</span>
                    </p>
                </a> <!-- /.metric -->
            </div><!-- /metric column -->
        </div><!-- /metric row -->

    </div> --}}
    <div class="card card-xl-stretch mb-5 mb-xl-8">
        <div id="main-chart" class="mx-5"></div>
    </div><!-- /.card -->
</div>


@push('chart')
    <script>
        var options = {
            annotations: {
                xaxis: [{
                        x: '12 Jan',
                        borderColor: '#FEB019',
                        label: {
                            borderColor: '#FEB019',
                            style: {
                                background: '#FEB019',
                                color: '#fff',
                                fontSize: '12px',
                                fontWeight: 400,
                            },
                            text: 'Facebook Ads Started',
                            position: 'top',
                            orientation: 'horizontal',
                        }
                    },
                    {
                        x: '24 Feb',
                        borderColor: '#FF4560',
                        label: {
                            borderColor: '#FF4560',
                            style: {
                                background: '#FF4560',
                                color: '#fff',
                                fontSize: '12px',
                                fontWeight: 400,
                            },
                            text: 'Bhai cha bday',
                            position: 'top',
                            orientation: 'horizontal',
                        }
                    },
                    {
                        x: '19 Jun',
                        borderColor: '#00E396',
                        label: {
                            borderColor: '#00E396',
                            style: {
                                background: '#00E396',
                                color: '#fff',
                                fontSize: '12px',
                                fontWeight: 400,
                            },
                            text: 'New champign',
                            position: 'top',
                            orientation: 'horizontal',
                        }
                    }
                ],
            },
            series: [{
                    name: 'Pageviews',
                    data: @json($pageviewsdata)
                },
                {
                    name: 'Unique Visitors',
                    data: @json($visitorsdata)
                },
            ],
            chart: {
                type: 'area',
                height: 350,
            },
            colors: [
                '#008FFB',
                '#00E396'
            ],
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth',
                width: 0.8
            },
            legend: {
                position: 'top',
                horizontalAlign: 'left'
            },
            xaxis: {
                categories: @json($labels),
                tickAmount: 10,
                tooltip: {
                    enabled: false
                }
            },
        };

        var chart = new ApexCharts(document.querySelector("#main-chart"), options);
        chart.render();

        document.addEventListener('livewire:load', function() {
            window.addEventListener('render-chart', event => {
                chart.updateOptions({
                    series: [{
                            name: 'Pageviews',
                            data: event.detail.pageviewsdata
                        },
                        {
                            name: 'Unique Visitors',
                            data: event.detail.visitorsdata
                        },
                    ],
                    xaxis: {
                        categories: event.detail.labels,
                    }
                })
            })

        })
    </script>
@endpush
