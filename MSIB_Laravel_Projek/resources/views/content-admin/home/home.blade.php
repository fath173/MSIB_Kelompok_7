@extends('content-admin.index')
@push('style-custom')
    <script src="{{ asset('assets/admin/js/chart.js') }}"></script>
@endpush
@section('isi-contentAdmin')
    @include('content-admin.home.content')
    {{-- {{ $data }} --}}
@endsection
@push('script-custom')
    <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Teknik", "Fisip", "Ekonomi", "Pertanian"],
                datasets: [{
                    label: '',
                    data: [
                        35,
                        55,
                        23,
                        50
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
@endpush
