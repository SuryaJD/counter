<div class="card card-fluid">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs d-flex justify-content-end">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#referer"><img class="rounded-sm" src="{{ asset('assets/images/flag/in.svg') }}" style="width: 24px;"> {{ __('Referer') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link show" data-toggle="tab" href="#source">{{ __('Source') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#medium">{{ __('Medium') }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#campaign">{{ __('Campaign') }}</a>
          </li>
        </ul>
    </div>
    <!-- .tab-content -->
    <div id="myTabCard" class="tab-content">
        <div class="tab-pane fade active show" id="referer">
            <div class="list-group list-group-flush">
                @foreach ($referers as $referer)
                <div class="d-flex align-items-sm-center mb-7">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-circle symbol-50px me-5">
                        <span class="symbol-label">
                            <img src="https://icons.duckduckgo.com/ip3/{{Spatie\Url\Url::fromString($referer->referer)->getPath()}}.ico" class="h-50 align-self-center" alt="">
                        </span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Section-->
                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                        <div class="flex-grow-1 me-2">
                            <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Top Authors</a>
                            <span class="text-muted fw-bold d-block fs-7">{{Spatie\Url\Url::fromString($referer->referer)->getPath()}}</span>
                        </div>
                        <span class="badge badge-light fw-bolder my-2">{{ $referer->views }}</span>
                    </div>
                    <!--end::Section-->
                </div>
                {{-- <a href="{{$referer->referer}}" target="_blank" class="list-group-item list-group-item-action">
                    <div class="list-group-item-figure">
                        <div class="user-avatar">
                            <img src="https://icons.duckduckgo.com/ip3/{{Spatie\Url\Url::fromString($referer->referer)->getPath()}}.ico"
                                alt="">
                        </div>
                    </div>
                    <div class="list-group-item-body">
                        <span class="text-mute">
                            {{Spatie\Url\Url::fromString($referer->referer)->getPath()}}
                        </span>
                        <div class="float-right">
                            {{ $referer->views }}
                        </div>
                        <div class="progress progress-sm">
                            <div class="progress-bar" role="progressbar"
                                style="width: {{ $referer->views/80 * 100 }}%; background-color:#008FFB;"
                                aria-valuenow="{{ $referer->views }}">
                            </div>
                        </div>
                    </div>
                </a> --}}
                @endforeach
            </div>
        </div>
        <div class="tab-pane fade overflow-auto source" id="source">
            <div class="list-group list-group-flush">
                @foreach ($sources as $source)
                <a href="" target="_blank" class="list-group-item list-group-item-action">
                    <div class="list-group-item-body">
                        <span class="text-mute">
                            {{ __($source->name) }}
                        </span>
                        <div class="float-right">
                            {{ $source->views }}
                        </div>
                        <div class="progress progress-sm">
                            <div class="progress-bar" role="progressbar"
                                style="width: {{ $source->views/800 * 100 }}%; background-color:#008FFB;"
                                aria-valuenow="{{ $source->views }}">
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
        <div class="tab-pane fade overflow-auto source" id="medium">
          <div class="list-group list-group-flush">
              @foreach ($mediums as $medium)
              <a href="" target="_blank" class="list-group-item list-group-item-action">
                  <div class="list-group-item-body">
                      <span class="text-mute">
                          {{ __($medium->name) }}
                      </span>
                      <div class="float-right">
                          {{ $medium->views }}
                      </div>
                      <div class="progress progress-sm">
                          <div class="progress-bar" role="progressbar"
                              style="width: {{ $medium->views/800 * 100 }}%; background-color:#008FFB;"
                              aria-valuenow="{{ $medium->views }}">
                          </div>
                      </div>
                  </div>
              </a>
              @endforeach
          </div>
        </div>
        <div class="tab-pane fade overflow-auto source" id="campaign">
          <div class="list-group list-group-flush">
              @foreach ($campaign as $campaign)
              <a href="" target="_blank" class="list-group-item list-group-item-action">
                  <div class="list-group-item-body">
                      <span class="text-mute">
                          {{ __($campaign->name) }}
                      </span>
                      <div class="float-right">
                          {{ $campaign->views }}
                      </div>
                      <div class="progress progress-sm">
                          <div class="progress-bar" role="progressbar"
                              style="width: {{ $campaign->views/800 * 100 }}%; background-color:#008FFB;"
                              aria-valuenow="{{ $campaign->views }}">
                          </div>
                      </div>
                  </div>
              </a>
              @endforeach
          </div>
        </div>
    </div><!-- /.tab-content -->

</div>
<style>
    .source::-webkit-scrollbar {
        width: 8px;
    }

    .source::-webkit-scrollbar-thumb {
        background: #008FFB;
        border-radius: 10px;
    }

    .source {
        max-height: 280px;
    }

</style>

@push('chart')
{{-- <script>
     var options = {
          series: [{
          name: 'PRODUCT A',
          data: [44, 55, 41, 67, 22, 43]
        }, {
          name: 'PRODUCT B',
          data: [13, 23, 20, 8, 13, 27]
        }, {
          name: 'PRODUCT C',
          data: [11, 17, 15, 15, 21, 14]
        }, {
          name: 'PRODUCT D',
          data: [21, 7, 25, 13, 22, 8]
        }],
          chart: {
          toolbar:{
            show:true,
            tools: {
              download: true,
              selection: false,
              zoom: false,
              zoomin: false,
              zoomout: false,
              pan: false,
              reset: false
            },
            export:{
              png: {
                filename: "utm" +new Date().toISOString().slice(0, 10),
              }
            }
          },
          type: 'bar',
          height: 300,
          stacked: true,
        },
        responsive: [{
          breakpoint: 480,
          options: {
            legend: {
              position: 'bottom',
              offsetX: -10,
              offsetY: 0
            }
          }
        }],
        plotOptions: {
          bar: {
            horizontal: false,
            borderRadius: 5
          },
        },
        xaxis: {
          type: 'datetime',
          categories: ['01/01/2011 GMT', '01/02/2011 GMT', '01/03/2011 GMT', '01/04/2011 GMT',
            '01/05/2011 GMT', '01/06/2011 GMT'
          ],
        },
        legend: {
          position: 'right',
          offsetY: 40
        },
        fill: {
          opacity: 1
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
  </script> --}}
@endpush
