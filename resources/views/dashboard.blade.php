@include('template.navbar')

@section('content')
    <div class = "page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Halo, Selamat Datang!</h3>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Dashboard</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="card-group">
                <div class="card border-right">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="text-dark mb-1 font-weight-medium">{{ $count }}</h2>
                                </div>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Peserta Terdaftar</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted">
                                    <i data-feather="user-plus"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Rangking Peserta</h4>
                            <div id="myChart" class="net-income mt-4 position-relative" style="height:294px;"></div>
                            <ul class="list-inline text-center mt-5 mb-2">
                                <li class="list-inline-item text-muted font-italic">Nilai tertinggi peserta</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="div row">
                <div class="col-lg-4 col-md-12">
                    <div class="div card">
                        <div class="card-body">
                            <h4 class="card-title">Persentase Penghasilan</h4>
                            <div id="penghasilan-chart" class="mt-2" style="height:283px; width:100%;"></div>
                            <ul class="list-style-none mb-0">
                                <li class="mt-3">
                                    <i class="fas fa-circle text-success font-10 mr-2"></i>
                                    <span class="text-muted">
                                        <= Rp 1.000.000</span>
                                            <span
                                                class="text-dark float-right font-weight-medium">{{ $penghasilanCounts[5] }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-primary font-10 mr-2"></i>
                                    <span class="text-muted">Rp 1.000.000 - Rp 1.999.999</span>
                                    <span
                                        class="text-dark float-right font-weight-medium">{{ $penghasilanCounts[4] }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-danger font-10 mr-2"></i>
                                    <span class="text-muted">Rp 2.000.000 - Rp 2.999.999</span>
                                    <span
                                        class="text-dark float-right font-weight-medium">{{ $penghasilanCounts[3] }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-cyan font-10 mr-2"></i>
                                    <span class="text-muted">Rp 3.000.000 - Rp 3.999.999</span>
                                    <span
                                        class="text-dark float-right font-weight-medium">{{ $penghasilanCounts[2] }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-warning font-10 mr-2"></i>
                                    <span class="text-muted">>= Rp 4.000.000</span>
                                    <span
                                        class="text-dark float-right font-weight-medium">{{ $penghasilanCounts[1] }}</span>
                                </li>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="div card">
                        <div class="card-body">
                            <h4 class="card-title">Persentase Usia</h4>
                            <div id="usia-chart" class="mt-2" style="height:283px; width:100%;"></div>
                            <ul class="list-style-none mb-0">
                                <ul>
                                    <li class="mt-3">
                                        <i class="fas fa-circle text-success font-10 mr-2"></i>
                                        <span class="text-muted">Usia 23</span>
                                        <span class="text-dark float-right font-weight-medium">{{ $usiaCounts['1'] }}</span>
                                    </li>
                                    <li class="mt-3">
                                        <i class="fas fa-circle text-primary font-10 mr-2"></i>
                                        <span class="text-muted">Usia 22</span>
                                        <span class="text-dark float-right font-weight-medium">{{ $usiaCounts['2'] }}</span>
                                    </li>
                                    <li class="mt-3">
                                        <i class="fas fa-circle text-danger font-10 mr-2"></i>
                                        <span class="text-muted">Usia 21</span>
                                        <span class="text-dark float-right font-weight-medium">{{ $usiaCounts['3'] }}</span>
                                    </li>
                                    <li class="mt-3">
                                        <i class="fas fa-circle text-cyan font-10 mr-2"></i>
                                        <span class="text-muted">Usia 20</span>
                                        <span class="text-dark float-right font-weight-medium">{{ $usiaCounts['4'] }}</span>
                                    </li>
                                    <li class="mt-3">
                                        <i class="fas fa-circle text-warning font-10 mr-2"></i>
                                        <span class="text-muted">Usia 19</span>
                                        <span
                                            class="text-dark float-right font-weight-medium">{{ $usiaCounts['5'] }}</span>
                                    </li>
                                </ul>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="div card">
                        <div class="card-body">
                            <h4 class="card-title">Persentase Tanggungan</h4>
                            <div id="tanggungan-chart" class="mt-2" style="height:283px; width:100%;"></div>
                            <ul class="list-style-none mb-0">
                                <ul>
                                    <li class="mt-3">
                                        <i class="fas fa-circle text-success font-10 mr-2"></i>
                                        <span class="text-muted">Tanggungan 1</span>
                                        <span
                                            class="text-dark float-right font-weight-medium">{{ $tanggunganCounts['1'] }}</span>
                                    </li>
                                    <li class="mt-3">
                                        <i class="fas fa-circle text-primary font-10 mr-2"></i>
                                        <span class="text-muted">Tanggungan 2</span>
                                        <span
                                            class="text-dark float-right font-weight-medium">{{ $tanggunganCounts['2'] }}</span>
                                    </li>
                                    <li class="mt-3">
                                        <i class="fas fa-circle text-danger font-10 mr-2"></i>
                                        <span class="text-muted">Tanggungan 3</span>
                                        <span
                                            class="text-dark float-right font-weight-medium">{{ $tanggunganCounts['3'] }}</span>
                                    </li>
                                    <li class="mt-3">
                                        <i class="fas fa-circle text-cyan font-10 mr-2"></i>
                                        <span class="text-muted">Tanggungan 4</span>
                                        <span
                                            class="text-dark float-right font-weight-medium">{{ $tanggunganCounts['4'] }}</span>
                                    </li>
                                    <li class="mt-3">
                                        <i class="fas fa-circle text-warning font-10 mr-2"></i>
                                        <span class="text-muted">Tanggungan 5 atau lebih</span>
                                        <span
                                            class="text-dark float-right font-weight-medium">{{ $tanggunganCounts['5'] }}</span>
                                    </li>
                                </ul>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="div card">
                        <div class="card-body">
                            <h4 class="card-title">Persentase Semester</h4>
                            <div id="semester-chart" class="mt-2" style="height:283px; width:100%;"></div>
                            <ul class="list-style-none mb-0">
                                <li class="mt-3">
                                    <i class="fas fa-circle text-success font-10 mr-2"></i>
                                    <span class="text-muted">Semester 1-2</span>
                                    <span
                                        class="text-dark float-right font-weight-medium">{{ $semesterCounts['1'] }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-primary font-10 mr-2"></i>
                                    <span class="text-muted">Semester 3-4</span>
                                    <span
                                        class="text-dark float-right font-weight-medium">{{ $semesterCounts['2'] }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-danger font-10 mr-2"></i>
                                    <span class="text-muted">Semester 5-6</span>
                                    <span
                                        class="text-dark float-right font-weight-medium">{{ $semesterCounts['3'] }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-cyan font-10 mr-2"></i>
                                    <span class="text-muted">Semester 7</span>
                                    <span
                                        class="text-dark float-right font-weight-medium">{{ $semesterCounts['4'] }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-warning font-10 mr-2"></i>
                                    <span class="text-muted">Semester 8 atau lebih</span>
                                    <span
                                        class="text-dark float-right font-weight-medium">{{ $semesterCounts['5'] }}</span>
                                </li>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="div card">
                        <div class="card-body">
                            <h4 class="card-title">Persentase IPK</h4>
                            <div id="ipk-chart" class="mt-2" style="height:283px; width:100%;"></div>
                            <ul class="list-style-none mb-0">
                                <li class="mt-3">
                                    <i class="fas fa-circle text-success font-10 mr-2"></i>
                                    <span class="text-muted">IPK 3.00-3.09</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $ipkCounts['1'] }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-primary font-10 mr-2"></i>
                                    <span class="text-muted">IPK 3.10-3.19</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $ipkCounts['2'] }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-danger font-10 mr-2"></i>
                                    <span class="text-muted">IPK 3.20-3.39</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $ipkCounts['3'] }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-cyan font-10 mr-2"></i>
                                    <span class="text-muted">IPK 3.40-3.59</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $ipkCounts['4'] }}</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-warning font-10 mr-2"></i>
                                    <span class="text-muted">IPK 3.60-4.00</span>
                                    <span class="text-dark float-right font-weight-medium">{{ $ipkCounts['5'] }}</span>
                                </li>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('js')
        <script>
            $(function() {

                // ==============================================================
                // Campaign
                // ==============================================================

                var penghasilanData = [
                    ['<= Rp 1.000.000', {{ $penghasilanCounts['5'] }}],
                    ['Rp 1.000.000 - Rp 1.999.999', {{ $penghasilanCounts['4'] }}],
                    ['Rp 2.000.000 - Rp 2.999.999', {{ $penghasilanCounts['3'] }}],
                    ['Rp 3.000.000 - Rp 3.999.999', {{ $penghasilanCounts['2'] }}],
                    ['>= Rp 4.000.000', {{ $penghasilanCounts['1'] }}]
                ];

                var chart1 = c3.generate({
                    bindto: '#penghasilan-chart',
                    data: {
                        columns: penghasilanData,
                        type: 'donut',
                        tooltip: {
                            show: true
                        }
                    },
                    donut: {
                        label: {
                            show: false
                        },
                        title: 'Persentase Penghasilan',
                        width: 18
                    },

                    legend: {
                        hide: true
                    },
                    color: {
                        pattern: [
                            '#22ca80',
                            '#5f76e8',
                            '#ff4f70',
                            '#01caf1',
                            '#fdc16a',
                        ]
                    }
                });

                d3.select('#penghasilan-chart .c3-chart-arcs-title').style('font-family', 'Rubik');

                var usiaData = [
                    ['Usia 23', {{ $usiaCounts['1'] }}],
                    ['Usia 22', {{ $usiaCounts['2'] }}],
                    ['Usia 21', {{ $usiaCounts['3'] }}],
                    ['Usia 20', {{ $usiaCounts['4'] }}],
                    ['Usia 19', {{ $usiaCounts['5'] }}]
                ];

                var chart = c3.generate({
                    bindto: '#usia-chart',
                    data: {
                        columns: usiaData,
                        type: 'donut',
                        tooltip: {
                            show: true
                        }
                    },
                    donut: {
                        label: {
                            show: true, // Menampilkan nilai di dalam chart
                            format: function(value, ratio, id) {
                                return value;
                            }
                        },
                        title: 'Presentase Usia',
                        width: 18
                    },
                    legend: {
                        hide: true
                    },
                    color: {
                        pattern: [
                            '#22ca80',
                            '#5f76e8',
                            '#ff4f70',
                            '#01caf1',
                            '#fdc16a',
                        ]
                    }
                });

                d3.select('#usia-chart .c3-chart-arcs-title').style('font-family', 'Rubik');

                var tanggunganData = [
                    ['Tanggungan 1', {{ $tanggunganCounts['1'] }}],
                    ['Tanggungan 2', {{ $tanggunganCounts['2'] }}],
                    ['Tanggungan 3', {{ $tanggunganCounts['3'] }}],
                    ['Tanggungan 4', {{ $tanggunganCounts['4'] }}],
                    ['Tanggungan 5 atau lebih', {{ $tanggunganCounts['5'] }}]
                ];

                var chart = c3.generate({
                    bindto: '#tanggungan-chart',
                    data: {
                        columns: tanggunganData,
                        type: 'donut',
                        tooltip: {
                            show: true
                        }
                    },
                    donut: {
                        label: {
                            show: true, // Menampilkan nilai di dalam chart
                            format: function(value, ratio, id) {
                                return value;
                            }
                        },
                        title: 'Presentase Tanggungan',
                        width: 18
                    },
                    legend: {
                        hide: true
                    },
                    color: {
                        pattern: [
                            '#22ca80',
                            '#5f76e8',
                            '#ff4f70',
                            '#01caf1',
                            '#fdc16a',
                        ]
                    }
                });

                d3.select('#tanggungan-chart .c3-chart-arcs-title').style('font-family', 'Rubik');

                var semesterData = [
                    ['Semester 1-2', {{ $semesterCounts['1'] }}],
                    ['Semester 3-4', {{ $semesterCounts['2'] }}],
                    ['Semester 5-6', {{ $semesterCounts['3'] }}],
                    ['Semester 7', {{ $semesterCounts['4'] }}],
                    ['Semester 8 atau lebih', {{ $semesterCounts['5'] }}]
                ];

                var chart = c3.generate({
                    bindto: '#semester-chart',
                    data: {
                        columns: semesterData,
                        type: 'donut',
                        tooltip: {
                            show: true
                        }
                    },
                    donut: {
                        label: {
                            show: true, // Menampilkan nilai di dalam chart
                            format: function(value, ratio, id) {
                                return value;
                            }
                        },
                        title: 'Presentase Semester',
                        width: 18
                    },
                    legend: {
                        hide: true
                    },
                    color: {
                        pattern: [
                            '#22ca80',
                            '#5f76e8',
                            '#ff4f70',
                            '#01caf1',
                            '#fdc16a',
                        ]
                    }
                });

                d3.select('#semester-chart .c3-chart-arcs-title').style('font-family', 'Rubik');

                var ipkData = [
                    ['IPK 3.00-3.09', {{ $ipkCounts['1'] }}],
                    ['IPK 3.10-3.19', {{ $ipkCounts['2'] }}],
                    ['IPK 3.20-3.39', {{ $ipkCounts['3'] }}],
                    ['IPK 3.40-3.59', {{ $ipkCounts['4'] }}],
                    ['IPK 3.60-4.00', {{ $ipkCounts['5'] }}]
                ];

                var chart = c3.generate({
                    bindto: '#ipk-chart',
                    data: {
                        columns: ipkData,
                        type: 'donut',
                        tooltip: {
                            show: true
                        }
                    },
                    donut: {
                        label: {
                            show: true, // Menampilkan nilai di dalam chart
                            format: function(value, ratio, id) {
                                return value;
                            }
                        },
                        title: 'Presentase IPK',
                        width: 18
                    },
                    legend: {
                        hide: true
                    },
                    color: {
                        pattern: [
                            '#22ca80', // text-success
                            '#5f76e8', // text-primary
                            '#ff4f70', // text-danger
                            '#01caf1', // text-cyan
                            '#fdc16a' // text-warning
                        ]
                    }
                });

                d3.select('#ipk-chart .c3-chart-arcs-title').style('font-family', 'Rubik');


                // ==============================================================
                // income
                // ==============================================================
                var data = {
                    labels: {{ Illuminate\Support\Js::from(array_slice($calculated['nama'], 0, 10)) }},
                    series: [
                        {{ Illuminate\Support\Js::from(array_slice($calculated['total'], 0, 10)) }}
                    ]
                };

                var options = {
                    axisX: {
                        showGrid: false
                    },
                    seriesBarDistance: 1,
                    chartPadding: {
                        top: 15,
                        right: 15,
                        bottom: 5,
                        left: 0
                    },
                    plugins: [
                        Chartist.plugins.tooltip()
                    ],
                    width: '100%'
                };

                var responsiveOptions = [
                    ['screen and (max-width: 640px)', {
                        seriesBarDistance: 5,
                        axisX: {
                            labelInterpolationFnc: function(value) {
                                return value[0];
                            }
                        }
                    }]
                ];
                new Chartist.Bar('.net-income', data, options, responsiveOptions);

                // ==============================================================
                // Visit By Location
                // ==============================================================
                jQuery('#visitbylocate').vectorMap({
                    map: 'world_mill_en',
                    backgroundColor: 'transparent',
                    borderColor: '#000',
                    borderOpacity: 0,
                    borderWidth: 0,
                    zoomOnScroll: false,
                    color: '#d5dce5',
                    regionStyle: {
                        initial: {
                            fill: '#d5dce5',
                            'stroke-width': 1,
                            'stroke': 'rgba(255, 255, 255, 0.5)'
                        }
                    },
                    enableZoom: true,
                    hoverColor: '#bdc9d7',
                    hoverOpacity: null,
                    normalizeFunction: 'linear',
                    scaleColors: ['#d5dce5', '#d5dce5'],
                    selectedColor: '#bdc9d7',
                    selectedRegions: [],
                    showTooltip: true,
                    onRegionClick: function(element, code, region) {
                        var message = 'You clicked "' + region + '" which has the code: ' + code
                            .toUpperCase();
                        alert(message);
                    }
                });

                // ==============================================================
                // Earning Stastics Chart
                // ==============================================================
                var chart = new Chartist.Line('.stats', {
                    labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                    series: [
                        [11, 10, 15, 21, 14, 23, 12]
                    ]
                }, {
                    low: 0,
                    high: 28,
                    showArea: true,
                    fullWidth: true,
                    plugins: [
                        Chartist.plugins.tooltip()
                    ],
                    axisY: {
                        onlyInteger: true,
                        scaleMinSpace: 40,
                        offset: 20,
                        labelInterpolationFnc: function(value) {
                            return (value / 1) + 'k';
                        }
                    },
                });

                // Offset x1 a tiny amount so that the straight stroke gets a bounding box
                chart.on('draw', function(ctx) {
                    if (ctx.type === 'area') {
                        ctx.element.attr({
                            x1: ctx.x1 + 0.001
                        });
                    }
                });

                // Create the gradient definition on created event (always after chart re-render)
                chart.on('created', function(ctx) {
                    var defs = ctx.svg.elem('defs');
                    defs.elem('linearGradient', {
                        id: 'gradient',
                        x1: 0,
                        y1: 1,
                        x2: 0,
                        y2: 0
                    }).elem('stop', {
                        offset: 0,
                        'stop-color': 'rgba(255, 255, 255, 1)'
                    }).parent().elem('stop', {
                        offset: 1,
                        'stop-color': 'rgba(80, 153, 255, 1)'
                    });
                });

                $(window).on('resize', function() {
                    chart.update();
                });
            })
        </script>
    @endpush


    @include('template.footer')
