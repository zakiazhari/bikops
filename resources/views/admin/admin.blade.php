@extends('admin/adminlayout')

@section('content')
<div class="m-5" style="min-height: 100vh">
    <div class="d-flex flex-column">
        <div class="d-flex flex-row">
            <div class="uk-card uk-card-default col-lg-6 p-3 me-3">
                <h3 class="fw-bold">Penjualan</h3>
                <canvas id="myChart"></canvas>
            </div>
            <div class="uk-card uk-card-default col-lg-6 p-3 me-3">
                <div class="d-flex flex-row">
                    <h3 class="fw-bold">Stok bahan baku</h3>
                    <a class="ms-auto" href="{{ url('/manage') }}">
                        <button class="uk-button uk-button-primary" style="background-color: #85603f !important">+ Tambah</button>

                    </a>
                </div>
                <div style="height: 300px; overflow-y: scroll">
                    <table class="uk-table uk-table-justify uk-table-divider">
                        <thead style="position: sticky; top: 0px; background-color: white">
                            <tr>
                                <th>Jenis</th>
                                <th>Stok</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Produk Robusta #1</td>
                                <td>50</td>
                            </tr>
                            <tr>
                                <td>Produk Arabika #1</td>
                                <td>50</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var ctx = document.getElementById('myChart');
    var myChart = new Chart(ctx, {
        type: 'bar'
        , data: {
            labels: ['Januari-Februari', 'Maret-April', 'Mei-Juni', 'Juli-Agustus', 'September-Oktober', 'November-Desember']
            , datasets: [{
                label: 'Penjualan'
                , data: [12, 19, 3, 5, 2, 3]
                , backgroundColor: [
                    'rgba(255, 99, 132, 0.2)'
                    , 'rgba(54, 162, 235, 0.2)'
                    , 'rgba(255, 206, 86, 0.2)'
                    , 'rgba(75, 192, 192, 0.2)'
                    , 'rgba(153, 102, 255, 0.2)'
                    , 'rgba(255, 159, 64, 0.2)'
                ]
                , borderColor: [
                    'rgba(255, 99, 132, 1)'
                    , 'rgba(54, 162, 235, 1)'
                    , 'rgba(255, 206, 86, 1)'
                    , 'rgba(75, 192, 192, 1)'
                    , 'rgba(153, 102, 255, 1)'
                    , 'rgba(255, 159, 64, 1)'
                ]
                , borderWidth: 1
            }]
        }
        , options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

</script>
@endsection
