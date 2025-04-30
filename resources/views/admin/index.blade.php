<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="./node_modules/apexcharts/dist/apexcharts.css">
    <title>Admin Panel | PapaBibs Kitchen</title>
</head>
<body class="font-parkinsans bg-gray-100">

<x-admin-layout>
    <h1 class="text-2xl font-bold">Dashboard</h1>
    <!-- Card Section -->
    <div class="max-w-[85rem] px-8 py-5 sm:px-6  mx-auto">
        <!-- Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
            <!-- Card -->
            <div class="flex flex-col gap-y-3 lg:gap-y-5 p-4 md:p-5 bg-white border border-gray-200 shadow-2xs rounded-xl">
                <div class="inline-flex justify-center items-center">
                    <span class="text-xl font-semibold uppercase text-black">Products</span>
                </div>

                <div class="text-center">
                    <h3 class="text-7xl font-semibold text-green-700 confetti-run">
                        {{ count($product) }}
                    </h3>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex flex-col gap-y-3 lg:gap-y-5 p-4 md:p-5 bg-white border border-gray-200 shadow-2xs rounded-xl">
                <div class="inline-flex justify-center items-center">
                    <span class="text-xl font-semibold uppercase text-black">Users</span>
                </div>

                <div class="text-center">
                    <h3 class="text-7xl font-semibold text-green-700 confetti-run">
                        {{ count($users) }}
                    </h3>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex flex-col gap-y-3 lg:gap-y-5 p-4 md:p-5 bg-white border border-gray-200 shadow-2xs rounded-xl">
                <div class="inline-flex justify-center items-center">
                    <span class="text-xl font-semibold uppercase text-black">Total Earnings</span>
                </div>

                <div class="text-center">
                    <h3 class="text-7xl font-semibold text-green-700 confetti-run">
                        0
                    </h3>
                </div>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Card Section -->

    <h1 class="text-2xl font-bold">Reports</h1>
    <!-- Card Section -->
    <div class="max-w-[100rem] px-4 py-5 mx-auto">
        <!-- Grid -->
        <div class="grid sm:grid-cols-2 gap-4 sm:gap-6">
            <!-- Card -->
            <div class="flex flex-col gap-y-3 lg:gap-y-5 p-4 md:p-5 bg-white border border-gray-200 shadow-2xs rounded-xl">
                <div class="inline-flex justify-center items-center">
                    <span class="text-xl font-semibold uppercase text-black">Sales</span>
                </div>

                <div class="text-center">
                    <div id="hs-single-bar-chart" class="w-full h-64"></div>
                </div>
            </div>
            <!-- End Card -->
            <!-- Card -->
            <div class="flex flex-col gap-y-3 lg:gap-y-5 p-4 md:p-5 bg-white border border-gray-200 shadow-2xs rounded-xl">
                <div class="inline-flex justify-center items-center">
                    <span class="text-xl font-semibold uppercase text-black">No. of Users</span>
                </div>

                <div class="text-center">
                    <div id="hs-single-line-chart" class="w-full h-64"></div>
                </div>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Card Section -->

</x-admin-layout>


<!-- Confetti -->
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.3/dist/confetti.browser.min.js"></script>

<!-- Apex Charts -->
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://preline.co/assets/js/hs-apexcharts-helpers.js"></script>

<script>
    (function() {
        const runConfettiElements = document.querySelectorAll('.confetti-run');
        runConfettiElements.forEach(element => {
            element.addEventListener('click', () => {
                realistic();
            });
        });
    })();

    function realistic(){
        var count = 200;
        var defaults = {
            origin: { y: 0.7 }
        };

        function fire(particleRatio, opts) {
            confetti({
                ...defaults,
                ...opts,
                particleCount: Math.floor(count * particleRatio)
            });
        }

        fire(0.25, {
            spread: 26,
            startVelocity: 55,
        });
        fire(0.2, {
            spread: 60,
        });
        fire(0.35, {
            spread: 100,
            decay: 0.91,
            scalar: 0.8
        });
        fire(0.1, {
            spread: 120,
            startVelocity: 25,
            decay: 0.92,
            scalar: 1.2
        });
        fire(0.1, {
            spread: 120,
            startVelocity: 45,
        });
    }

    function randomInRange(min, max) {
        return Math.random() * (max - min) + min;
    }

    window.addEventListener('load', () => {
        (function () {
            buildChart('#hs-single-line-chart', (mode) => ({
                chart: {
                    height: 250,
                    type: 'line',
                    toolbar: {
                        show: false
                    },
                    zoom: {
                        enabled: false
                    }
                },
                series: [
                    {
                        name: 'Sales',
                        data: [0, 27000, 25000, 27000, 40000]
                    }
                ],
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'straight',
                    width: [4, 4, 4],
                    dashArray: [0, 0, 4]
                },
                title: {
                    show: false
                },
                legend: {
                    show: false
                },
                grid: {
                    strokeDashArray: 0,
                    borderColor: '#e5e7eb',
                    padding: {
                        top: -20,
                        right: 0
                    }
                },
                xaxis: {
                    type: 'category',
                    categories: [
                        '25 January 2023',
                        '28 January 2023',
                        '31 January 2023',
                        '1 February 2023',
                        '3 February 2023'
                    ],
                    axisBorder: {
                        show: false
                    },
                    axisTicks: {
                        show: false
                    },
                    tooltip: {
                        enabled: false
                    },
                    labels: {
                        offsetY: 5,
                        style: {
                            colors: '#9ca3af',
                            fontSize: '13px',
                            fontFamily: 'Parkinsans, ui-sans-serif',
                            fontWeight: 400
                        },
                        formatter: (title) => {
                            let t = title;

                            if (t) {
                                const newT = t.split(' ');
                                t = `${newT[0]} ${newT[1].slice(0, 3)}`;
                            }

                            return t;
                        }
                    }
                },
                yaxis: {
                    min: 0,
                    max: 40000,
                    tickAmount: 4,
                    labels: {
                        align: 'left',
                        minWidth: 0,
                        maxWidth: 140,
                        style: {
                            colors: '#9ca3af',
                            fontSize: '12px',
                            fontFamily: 'Parkinsans, ui-sans-serif',
                            fontWeight: 400
                        },
                        formatter: (value) => value >= 1000 ? `${value / 1000}k` : value
                    }
                },
                tooltip: {
                    custom: function (props) {
                        const { categories } = props.ctx.opts.xaxis;
                        const { dataPointIndex } = props;
                        const title = categories[dataPointIndex].split(' ');
                        const newTitle = `${title[0]} ${title[1]}`;

                        return buildTooltip(props, {
                            title: newTitle,
                            mode,
                            hasTextLabel: true,
                            wrapperExtClasses: 'min-w-28',
                            labelDivider: ':',
                            labelExtClasses: 'ms-2'
                        });
                    }
                }
            }), {
                colors: ['#2563EB', '#22d3ee', '#d1d5db'],
                xaxis: {
                    labels: {
                        style: {
                            colors: '#9ca3af',
                        }
                    }
                },
                yaxis: {
                    labels: {
                        style: {
                            colors: '#9ca3af'
                        }
                    }
                },
                grid: {
                    borderColor: '#e5e7eb'
                }
            }, {
                colors: ['#3b82f6', '#22d3ee', '#737373'],
                xaxis: {
                    labels: {
                        style: {
                            colors: '#a3a3a3',
                        }
                    }
                },
                yaxis: {
                    labels: {
                        style: {
                            colors: '#a3a3a3'
                        }
                    }
                },
                grid: {
                    borderColor: '#404040'
                }
            });
        })();
        // Apex Single Bar Charts
        (function () {
            buildChart('#hs-single-bar-chart', (mode) => ({
                chart: {
                    type: 'bar',
                    height: 300,
                    toolbar: {
                        show: false
                    },
                    zoom: {
                        enabled: false
                    }
                },
                series: [
                    {
                        name: 'Sales',
                        data: [23000, 44000, 55000, 57000, 56000, 61000, 58000, 63000, 60000, 66000, 34000, 78000]
                    }
                ],
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '16px',
                        borderRadius: 0
                    }
                },
                legend: {
                    show: false
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    show: true,
                    width: 8,
                    colors: ['transparent']
                },
                xaxis: {
                    categories: [
                        'January',
                        'February',
                        'March',
                        'April',
                        'May',
                        'June',
                        'July',
                        'August',
                        'September',
                        'October',
                        'November',
                        'December'
                    ],
                    axisBorder: {
                        show: false
                    },
                    axisTicks: {
                        show: false
                    },
                    crosshairs: {
                        show: false
                    },
                    labels: {
                        style: {
                            colors: '#9ca3af',
                            fontSize: '13px',
                            fontFamily: 'Parkinsans, ui-sans-serif',
                            fontWeight: 400
                        },
                        offsetX: -2,
                        formatter: (title) => title.slice(0, 3)
                    }
                },
                yaxis: {
                    labels: {
                        align: 'left',
                        minWidth: 0,
                        maxWidth: 140,
                        style: {
                            colors: '#9ca3af',
                            fontSize: '13px',
                            fontFamily: 'Parkinsans, ui-sans-serif',
                            fontWeight: 400
                        },
                        formatter: (value) => value >= 1000 ? `${value / 1000}k` : value
                    }
                },
                states: {
                    hover: {
                        filter: {
                            type: 'darken',
                            value: 0.9
                        }
                    }
                },
                tooltip: {
                    y: {
                        formatter: (value) => `$${value >= 1000 ? `${value / 1000}k` : value}`
                    },
                    custom: function (props) {
                        const { categories } = props.ctx.opts.xaxis;
                        const { dataPointIndex } = props;
                        const title = categories[dataPointIndex];
                        const newTitle = `${title}`;

                        return buildTooltip(props, {
                            title: newTitle,
                            mode,
                            hasTextLabel: true,
                            wrapperExtClasses: 'min-w-28',
                            labelDivider: ':',
                            labelExtClasses: 'ms-2'
                        });
                    }
                },
                responsive: [{
                    breakpoint: 568,
                    options: {
                        chart: {
                            height: 300
                        },
                        plotOptions: {
                            bar: {
                                columnWidth: '14px'
                            }
                        },
                        stroke: {
                            width: 8
                        },
                        labels: {
                            style: {
                                colors: '#9ca3af',
                                fontSize: '11px',
                                fontFamily: 'Parkinsans, ui-sans-serif',
                                fontWeight: 400
                            },
                            offsetX: -2,
                            formatter: (title) => title.slice(0, 3)
                        },
                        yaxis: {
                            labels: {
                                align: 'left',
                                minWidth: 0,
                                maxWidth: 140,
                                style: {
                                    colors: '#9ca3af',
                                    fontSize: '11px',
                                    fontFamily: 'Parkinsans, ui-sans-serif',
                                    fontWeight: 400
                                },
                                formatter: (value) => value >= 1000 ? `${value / 1000}k` : value
                            }
                        },
                    },
                }]
            }), {
                colors: ['#2563eb', '#d1d5db'],
                xaxis: {
                    labels: {
                        style: {
                            colors: '#9ca3af',
                        }
                    }
                },
                yaxis: {
                    labels: {
                        style: {
                            colors: '#9ca3af'
                        }
                    }
                },
                grid: {
                    borderColor: '#e5e7eb'
                }
            }, {
                colors: ['#3b82f6', '#2563eb'],
                xaxis: {
                    labels: {
                        style: {
                            colors: '#a3a3a3',
                        }
                    }
                },
                yaxis: {
                    labels: {
                        style: {
                            colors: '#a3a3a3'
                        }
                    }
                },
                grid: {
                    borderColor: '#404040'
                }
            });
        })();
    });
</script>


</body>
</html>
