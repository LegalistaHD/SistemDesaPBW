@extends('panel.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Pelaporan Statistik</h1>

            <div class="card">
                <div class="card-header">Statistik Surat</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <canvas id="chart1"></canvas>
                        </div>
                        <div class="col-md-6">
                            <canvas id="chart2"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header">Durasi Rata-rata Validasi Surat hingga TTD Kades</div>
                <div class="card-body">
                
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header">Kategori Surat yang Sering Diminta</div>
                <div class="card-body">
                    <canvas id="chart3"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx1 = document.getElementById('chart1').getContext('2d');
    var chart1 = new Chart(ctx1, {
        type: 'bar', // jenis chart
        data: {
            labels: ['Januari', 'Februari', 'Maret', 'April'],
            datasets: [{
                label: 'Statistik Surat Masuk',
                data: [30, 40, 45, 50],
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    var ctx2 = document.getElementById('chart2').getContext('2d');
    var chart2 = new Chart(ctx2, {
        type: 'bar', // jenis chart
        data: {
            labels: ['Januari', 'Februari', 'Maret', 'April'],
            datasets: [{
                label: 'Statistik Surat Keluar',
                data: [25, 35, 30, 40],
                backgroundColor: 'rgba(153, 102, 255, 0.2)',
                borderColor: 'rgba(153, 102, 255, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    var ctx3 = document.getElementById('chart3').getContext('2d');
    var chart3 = new Chart(ctx3, {
        type: 'pie', // jenis chart
        data: {
            labels: {!! json_encode($categories) !!},
            datasets: [{
                label: 'Kategori Surat yang Sering Diminta',
                data: {!! json_encode($counts) !!},
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255, 205, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            var label = context.label || '';
                            if (label) {
                                label += ': ';
                            }
                            if (context.raw !== null) {
                                label += context.raw + ' permintaan';
                            }
                            return label;
                        }
                    }
                }
            }
        }
    });
</script>
@endsection
