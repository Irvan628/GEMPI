<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #6A8E6D;
            color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #4A6B4D;
            padding-top: 20px;
        }
        
        .sidebar a {
            padding: 15px 25px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
            transition: 0.3s;
        }
        
        .sidebar a:hover {
            background-color: #5A7B5D;
        }
        
        .sidebar a.active {
            background-color: #C5DCA0;
            color: #333;
            font-weight: bold;
        }
        
        .main-content {
            margin-left: 250px;
            padding: 20px;
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
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h3 class="text-center text-white mb-4">Admin Panel</h3>
        <a href="{{ route('admin.dropoff') }}">Dropoff</a>
        <a href="{{ route('admin.pickup') }}" class="active">Pickup</a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="header-text">Riwayat Transaksi Pickup</div>
        
        <div class="table-container">
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
                            <form action="{{ route('pickup.updateStatus', $pickup->id) }}" method="POST" style="display:inline;">
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
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
