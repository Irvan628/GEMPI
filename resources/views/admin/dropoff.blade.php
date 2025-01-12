<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #6A8E6D;
            color: white;
            font-family: Arial, sans-serif;
        }
        .card {
            background-color: #C5DCA0;
            color: #DDE6C7;
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .nav-tabs {
            border: none;
            margin-bottom: 20px;
        }
        .nav-tabs .nav-link {
            color: white;
            background-color: #8A9B68;
            border: none;
            margin-right: 10px;
            border-radius: 10px;
        }
        .nav-tabs .nav-link.active {
            background-color: #C5DCA0;
            color: #333;
            font-weight: bold;
        }
        .table-container {
            background-color: white;
            color: black;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }
        .table th {
            font-weight: bold;
            background-color: #C5DCA0;
        }
        .table th, .table td {
            text-align: center;
            vertical-align: middle;
        }
        .header-text {
            font-weight: bold;
            font-size: 24px;
            margin-top: 20px;
            text-align: center;
            color: white;
            margin-bottom: 30px;
        }
        .btn-accept {
            background-color: #28a745;
            color: white;
        }
        .btn-reject {
            background-color: #dc3545;
            color: white;
        }
        .tab-content {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="header-text">Riwayat Transaksi Gempi</div>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="dropoff-tab" data-bs-toggle="tab" data-bs-target="#dropoff" type="button" role="tab">Dropoff</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pickup-tab" data-bs-toggle="tab" data-bs-target="#pickup" type="button" role="tab">Pickup</button>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="dropoff" role="tabpanel">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nomor Telepon</th>
                            <th>Alamat</th>
                            <th>Nominal</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dropoffs as $index => $dropoff)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $dropoff->name }}</td>
                            <td>{{ $dropoff->phone_number }}</td>
                            <td>{{ $dropoff->address }}</td>
                            <td>{{ $dropoff->point }}</td>
                            <td>{{ $dropoff->status }}</td>
                            <td>
                                @if($dropoff->status == 'pending')
                                <form action="{{ route('dropoff.updateStatus', $dropoff->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" name="status" value="success" class="btn btn-accept btn-sm">Terima</button>
                                    <button type="submit" name="status" value="failed" class="btn btn-reject btn-sm">Tolak</button>
                                </form>
                                @else
                                    {{ $dropoff->status }}
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="pickup" role="tabpanel">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nomor Telepon</th>
                            <th>Alamat</th>
                            <th>Tanggal Penjemputan</th>
                            <th>Waktu Penjemputan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($pickups))
                            @foreach($pickups as $index => $pickup)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $pickup->name }}</td>
                                <td>{{ $pickup->phone_number }}</td>
                                <td>{{ $pickup->address }}</td>
                                <td>{{ $pickup->pickup_date }}</td>
                                <td>{{ $pickup->pickup_time }}</td>
                                <td>{{ $pickup->status }}</td>
                                <td>
                                    @if($pickup->status == 'pending')
                                    <form action="{{ route('pickup.update', $pickup->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" name="status" value="success" class="btn btn-accept btn-sm">Terima</button>
                                        <button type="submit" name="status" value="failed" class="btn btn-reject btn-sm">Tolak</button>
                                    </form>
                                    @else
                                        {{ $pickup->status }}
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>