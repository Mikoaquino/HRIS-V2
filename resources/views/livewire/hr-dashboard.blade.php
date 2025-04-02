@extends('layouts.app')

@section('styles')
    <!-- INTERNAL Select2 css -->
    <link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />

    <!-- INTERNAL Data table css -->
    <link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap5.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/datatable/css/buttons.bootstrap5.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/datatable/responsive.bootstrap5.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="left-content">
            <span class="main-content-title mg-b-0 mg-b-lg-1">Hi, ADMIN</span>
        </div>
        <div class="justify-content-center mt-2">

        </div>
    </div>
    <!-- /breadcrumb -->

    <!-- row -->
    <div class="row">
        <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 px-0">
                <div class="card px-3">
                    <div class="row index1">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                            <div class="row border-end bd-xs-e-0 p-3">
                                <div class="col-3 d-flex align-items-center justify-content-center">
                                    <div
                                        class="circle-icon bg-primary text-center align-self-center overflow-hidden shadow">
                                        <i class="fe fe-shopping-bag tx-15 text-white"></i>
                                    </div>
                                </div>
                                <div class="col-9 py-0">
                                    <div class="pt-4 pb-3">
                                        <div class="d-flex">
                                            <h6 class="mb-2 tx-14 font-weight-semibold mb-0">Applicants</h6>
                                        </div>
                                        <div class="pb-0 mt-0">
                                            <div class="d-flex">
                                                <h4 class="tx-12 font-weight-semibold mb-0">Review and verify candidates,
                                                    resumes and documents.</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                            <div class="row border-end bd-md-e-0 bd-xs-e-0 bd-lg-e-0 bd-xl-e-0  p-3">
                                <div class="col-3 d-flex align-items-center justify-content-center">
                                    <div
                                        class="circle-icon bg-warning text-center align-self-center overflow-hidden shadow">
                                        <i class="fe fe-dollar-sign tx-15 text-white"></i>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="pt-4 pb-3">
                                        <div class="d-flex">
                                            <h6 class="mb-2 tx-14 font-weight-semibold">Leaves</h6>
                                        </div>
                                        <div class="pb-0 mt-0">
                                            <div class="d-flex">
                                                <h4 class="tx-12  mb-0">Track pending leaves request, its leave type and
                                                    approval</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                            <div class="row border-end bd-xs-e-0  p-3">
                                <div class="col-3 d-flex align-items-center justify-content-center">
                                    <div
                                        class="circle-icon bg-secondary text-center align-self-center overflow-hidden shadow">
                                        <i class="fe fe-external-link tx-15 text-white"></i>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="pt-4 pb-3">
                                        <div class="d-flex">
                                            <h6 class="mb-2 tx-14  font-weight-semibold">Attendance</h6>
                                        </div>
                                        <div class="pb-0 mt-0">
                                            <div class="d-flex">
                                                <h4 class="tx-12 mb-0">Monitor employee's attendance,
                                                    absences, and work day hours</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 px-0">
                <div class="row">
                    <div class="col-sm-12 col-lg-12 10">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header border-bottom-0 d-flex">
                                <h3 class="card-title mb-2 ">KEY METRICS</h3>
                                <div class="card-options ms-auto">
                                    <div class="btn-group p-0">
                                        <button class="btn btn-outline-light btn-sm" type="button">Week</button>
                                        <button class="btn btn-light btn-sm" type="button">Month</button>
                                        <button class="btn btn-outline-light btn-sm" type="button">Year</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-tabs border-0">
                                    <li class="nav-item">
                                        <button class="border-0 text-black bg-transparent" data-bs-toggle="tab"
                                            data-bs-target="#satisfaction">
                                            Employee Satisfaction
                                        </button>
                                    </li>
                                    <li class="nav-item">
                                        <button
                                            class="border-end-0 border-start-0 border-top-0   border-bottom-4 bg-transparent text-primary bd-primary fw-bold"
                                            data-bs-toggle="tab" data-bs-target="#absence">
                                            Absence Rate
                                        </button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="border-0 text-black bg-transparent" data-bs-toggle="tab"
                                            data-bs-target="#training">
                                            Training Completion
                                        </button>
                                    </li>
                                </ul>


                                <div class="m-5">
                                    <canvas id="absenceRateChart"></canvas>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 px-0 align-items-center">
                <div class="row">
                    <div class="col-sm-12 col-lg-12 col-xl-5">
                        @livewire('employee-statistics-card')
                    </div>

                    <div class="col-xl-5 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header pb-3">
                                <h3 class="card-title mb-2">REMINDERS</h3>
                            </div>
                            <div class="card-body p-0 customers mt-1">
                                <div class="">
                                    <label class="p-2 d-flex">
                                        <span class="check-box mb-0 ms-2">
                                            <span class="ckbox"><input type="checkbox"><span></span></span>
                                        </span>
                                        <span class="ms-3 me-5 my-auto tx-14">
                                            Next Payslips
                                            <br>
                                            <span class="tx-12"> Distribute upcoming payslips </span>
                                        </span>
                                        <span class="ms-auto"><span
                                                class="badge badge-primary font-weight-semibold px-2 py-1 tx-11 me-2">Today</span></span>
                                    </label>
                                    <label class="p-2 mt-2 d-flex">
                                        <span class="check-box mb-0 ms-2">
                                            <span class="ckbox"><input type="checkbox"><span></span></span>
                                        </span>
                                        <span class="ms-3 me-5 my-auto">
                                            sharing the information with clients or stakeholders.
                                        </span>
                                        <span class="ms-auto"><span
                                                class="badge badge-primary font-weight-semibold px-2 py-1 tx-11 me-2">Today</span></span>
                                    </label>
                                    <label class="p-2 mt-2 d-flex">
                                        <span class="check-box mb-0 ms-2">
                                            <span class="ckbox"><input type="checkbox"><span></span></span>
                                        </span>
                                        <span class="ms-3 me-5 my-auto">
                                            Hearing the information and responding .
                                        </span>
                                        <span class="ms-auto"><span
                                                class="badge badge-primary font-weight-semibold px-2 py-1 tx-11 me-2 float-end">22
                                                hrs</span></span>
                                    </label>
                                    <label class="p-2 mt-2 d-flex">
                                        <span class="check-box mb-0 ms-2">
                                            <span class="ckbox"><input type="checkbox"><span></span></span>
                                        </span>
                                        <span class="ms-3 me-5 my-auto">
                                            Setting up and customizing your own sales.
                                        </span>
                                        <span class="ms-auto"> <span
                                                class="badge badge-light-transparent font-weight-semibold px-2 py-1 tx-11 me-2">1
                                                Day</span></span>
                                    </label>
                                    <label class="p-2 mt-2 d-flex">
                                        <span class="check-box mb-0 ms-2">
                                            <span class="ckbox"><input checked=""
                                                    type="checkbox"><span></span></span>
                                        </span>
                                        <span class="ms-3 me-5 my-auto">
                                            To have a complete 360° overview of sales information, having.
                                        </span>
                                        <span class="ms-auto"> <span
                                                class="badge badge-light-transparent font-weight-semibold px-2 py-1 tx-11 me-2">2
                                                Days</span></span>
                                    </label>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-12 col-md-12 col-xs-12">

            @livewire('calendar-card')

            @livewire('attendance-summary-card')
            <div class="card overflow-hidden">

                <div class="container-fluid">
                    <div class="row">

                        {{-- Livewire Daily Time Record Component --}}
                        @livewire('daily-time-record-card')

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Internal Chart.Bundle js-->
    <script src="{{ asset('assets/plugins/chartjs/Chart.bundle.min.js') }}"></script>

    <!-- Moment js -->
    <script src="{{ asset('assets/plugins/raphael/raphael.min.js') }}"></script>

    <!-- INTERNAL Apexchart js -->
    <script src="{{ asset('assets/js/apexcharts.js') }}"></script>

    <!--Internal Sparkline js -->
    <script src="{{ asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Rating js-->
    <script src="{{ asset('assets/plugins/rating/jquery.rating-stars.js') }}"></script>
    <script src="{{ asset('assets/plugins/rating/jquery.barrating.js') }}"></script>

    <!--Internal  index js -->
    <script src="{{ asset('assets/js/index1.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Chart-circle js -->
    <script src="{{ asset('assets/js/chart-circle.js') }}"></script>
    <script>
        Chart.register({
            id: 'roundedBars',
            beforeDraw: (chart) => {
                const {
                    ctx,
                    chartArea,
                    scales
                } = chart;
                const {
                    bottom
                } = chartArea;

                chart.data.datasets.forEach((dataset, datasetIndex) => {
                    const meta = chart.getDatasetMeta(datasetIndex);
                    meta.data.forEach((bar, index) => {
                        const x = bar.x;
                        const y = bar.y;
                        const width = bar.width;
                        const height = bar.height;

                        ctx.save();
                        ctx.beginPath();


                        const radius = 8;

                        if (datasetIndex === 0) {
                            ctx.moveTo(x - width / 2, y);
                            ctx.lineTo(x + width / 2, y);
                            ctx.lineTo(x + width / 2, bottom - radius);
                            ctx.arcTo(x + width / 2, bottom, x + width / 2 - radius, bottom,
                                radius);
                            ctx.lineTo(x - width / 2 + radius, bottom);
                            ctx.arcTo(x - width / 2, bottom, x - width / 2, bottom - radius,
                                radius);
                            ctx.lineTo(x - width / 2, y);
                        } else {
                            ctx.moveTo(x - width / 2, bottom);
                            ctx.lineTo(x - width / 2, y + radius);
                            ctx.arcTo(x - width / 2, y, x - width / 2 + radius, y, radius);
                            ctx.lineTo(x + width / 2 - radius, y);
                            ctx.arcTo(x + width / 2, y, x + width / 2, y + radius, radius);
                            ctx.lineTo(x + width / 2, bottom);
                            ctx.lineTo(x - width / 2, bottom);
                        }

                        ctx.closePath();

                        ctx.fillStyle = dataset.backgroundColor[index] || dataset
                            .backgroundColor;
                        ctx.fill();

                        ctx.restore();
                    });
                });
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            var ctx = document.getElementById('absenceRateChart').getContext('2d');

            const totalEmployees = [16, 18, 18, 14, 12, 14, 16, 20, 14, 16, 14, 16];
            const presentEmployees = [10, 12, 14, 12, 8, 11, 12, 14, 13, 11, 10, 14];
            const absentEmployees = totalEmployees.map((total, index) => total - presentEmployees[index]);

            const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

            const barColors = [
                'rgba(78, 198, 176, 1)',
                'rgba(255, 110, 110, 1)',
                'rgba(255, 204, 51, 1)',
                'rgba(46, 213, 152, 1)',
                'rgba(34, 124, 157, 1)',
                'rgba(238, 82, 107, 1)',
                'rgba(248, 148, 114, 1)',
                'rgba(102, 204, 170, 1)',
                'rgba(138, 140, 236, 1)',
                'rgba(249, 161, 58, 1)',
                'rgba(232, 193, 210, 1)',
                'rgba(128, 140, 153, 1)'
            ];

            // Create chart
            var chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: months,
                    datasets: [{
                            label: 'Present Employees',
                            data: presentEmployees,
                            backgroundColor: barColors,
                            borderWidth: 0,
                            borderRadius: {
                                topLeft: 8,
                                topRight: 8,
                                bottomLeft: 0,
                                bottomRight: 0
                            },
                            borderSkipped: false
                        },
                        {
                            label: 'Absent Employees',
                            data: absentEmployees,
                            backgroundColor: 'rgba(0, 0, 0, 1)',
                            borderWidth: 0,
                            borderRadius: {
                                topLeft: 8,
                                topRight: 8,
                                bottomLeft: 0,
                                bottomRight: 0
                            },
                            borderSkipped: false
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            enabled: true,
                            mode: 'index',
                            intersect: false,
                            backgroundColor: 'rgba(25, 25, 65, 0.9)',
                            titleColor: 'white',
                            bodyColor: 'white',
                            cornerRadius: 8,
                            padding: 10,
                            callbacks: {
                                label: function(context) {
                                    const datasetIndex = context.datasetIndex;
                                    const dataIndex = context.dataIndex;
                                    let value = context.raw;

                                    if (datasetIndex === 0) {
                                        return `Present: ${value}`;
                                    } else {
                                        return `Absent: ${value}`;
                                    }
                                },
                                afterBody: function(tooltipItems) {
                                    const index = tooltipItems[0].dataIndex;
                                    return `Total: ${totalEmployees[index]}`;
                                }
                            }
                        }
                    },
                    scales: {
                        x: {
                            stacked: true,
                            grid: {
                                display: false
                            },
                            border: {
                                display: false
                            },
                            ticks: {
                                color: 'rgba(150, 150, 150, 0.8)',
                                font: {
                                    family: "'Helvetica', 'Arial', sans-serif",
                                    size: 12
                                }
                            }
                        },
                        y: {
                            stacked: true,
                            beginAtZero: true,
                            max: 20,
                            grid: {
                                display: true,
                                drawBorder: false
                            },
                            border: {
                                display: false
                            },
                            ticks: {
                                stepSize: 4,
                                color: 'rgba(150, 150, 150, 0.8)',
                                font: {
                                    family: "'Helvetica', 'Arial', sans-serif",
                                    size: 12
                                },
                                padding: 10,
                                callback: function(value) {
                                    return value.toString().padStart(2, '0');
                                }
                            }
                        }
                    },
                    layout: {
                        padding: {
                            top: 20,
                            right: 20,
                            bottom: 10,
                            left: 10
                        }
                    },
                    barPercentage: 0.8,
                    categoryPercentage: 0.9
                }
            });


            const addHighlightLabel = function() {
                const meta = chart.getDatasetMeta(1);
                const rect = meta.data[7];

                const x = rect.x;
                const y = rect.y - 30;


                const ctx = chart.ctx;
                ctx.save();

                ctx.beginPath();
                ctx.fillStyle = 'rgba(25, 25, 65, 0.9)';
                ctx.roundRect(x - 15, y - 15, 30, 30, 5);
                ctx.fill();

                ctx.fillStyle = 'white';
                ctx.font = 'bold 14px Arial';
                ctx.textAlign = 'center';
                ctx.textBaseline = 'middle';
                ctx.fillText('77', x, y);

                ctx.beginPath();
                ctx.fillStyle = 'rgba(25, 25, 65, 0.9)';
                ctx.moveTo(x, y + 15);
                ctx.lineTo(x - 8, y + 25);
                ctx.lineTo(x + 8, y + 25);
                ctx.closePath();
                ctx.fill();

                ctx.restore();
            };

            chart.options.plugins.afterDraw = addHighlightLabel;
        });
    </script>

    <!-- Internal Data tables -->
    <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const calendarContainer = document.getElementById('calendar-container');

            // Get current date
            const currentDate = new Date();

            // Create calendar elements
            const calendarHTML = `
				<div class="text-center p-3">
					<h2 class="font-weight-bold mb-2">${currentDate.toLocaleDateString('en-US', { weekday: 'long' })}</h2>
					<div class="display-4 font-weight-bold text-primary">${currentDate.getDate()}</div>
					<h3 class="mb-2">${currentDate.toLocaleDateString('en-US', { month: 'long', year: 'numeric' })}</h3>
				</div>
			`;

            calendarContainer.innerHTML = calendarHTML;
        });
    </script>
    <!-- INTERNAL Select2 js -->
    <script src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.js') }}"></script>
@endsection
