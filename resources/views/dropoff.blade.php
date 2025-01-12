@if(!Auth::check())
    <script>window.location = "{{ route('login') }}";</script>
@endif

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rincian Sampah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            background-color: #8BA893;
            overflow-x: hidden;
        }

        /* Main content styling */
        .main-content {
            padding: 20px;
            width: 100%;
        }

        /* Rincian Sampah Styling */
        .container {
            background-color: #D9EAD3;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .header-text {
            font-size: 20px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .instruction-text {
            font-size: 14px;
            text-align: center;
            color: #555;
            margin-bottom: 20px;
        }

        .item-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: #F5F5F5;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .item-title {
            display: flex;
            align-items: center;
            font-size: 16px;
            color: #333;
        }

        .weight-input-group {
            display: flex;
            align-items: center;
        }

        .weight-input {
            background-color: #D9EAD3;
            border: none;
            text-align: center;
            width: 50px;
            padding: 5px;
            border-radius: 5px;
            margin-right: 5px;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .info-box {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 15px;
            width: 48%;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            font-size: 14px;
            color: #333;
        }

        .info-title {
            font-weight: bold;
            color: #555;
        }

        .info-details {
            margin-top: 5px;
            color: #666;
        }

        .result {
            margin-top: 20px;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="main-content">
    <div class="container">
        <div class="header-text">Rincian Sampah</div>
        <div class="instruction-text">Pilih jenis dan masukkan perkiraan berat sampah yang akan di drop off.</div>

        <hr>

        <form id="dropoffForm" action="{{ route('dropoff.submit') }}" method="POST">
            @csrf
            <!-- Waste Items -->
            <div class="item-row">
                <div class="item-title">
                    <img src="img/plastik.png" alt="Plastic Icon">
                    Plastik
                </div>
                <div class="weight-input-group">
                    <input type="number" class="weight-input" value="0" min="0" data-type="plastik">
                    <span>kg</span>
                </div>
            </div>

            <div class="item-row">
                <div class="item-title">
                    <img src="img/kertas.png" alt="kertas Icon">
                    Kertas
                </div>
                <div class="weight-input-group">
                    <input type="number" class="weight-input" value ="0" min="0" data-type="kertas">
                    <span>kg</span>
                </div>
            </div>

            <div class="item-row">
                <div class="item-title">
                    <img src="img/alumunium.png" alt="Alumunium Icon">
                    Alumunium
                </div>
                <div class="weight-input-group">
                    <input type="number" class="weight-input" value="0" min="0" data-type="alumunium">
                    <span>kg</span>
                </div>
            </div>

            <div class="item-row">
                <div class="item-title">
                    <img src="img/besi.png" alt="Besi Icon">
                    Besi
                </div>
                <div class="weight-input-group">
                    <input type="number" class="weight-input" value="0" min="0" data-type="besi">
                    <span>kg</span>
                </div>
            </div>

            <div class="item-row">
                <div class="item-title">
                    <img src="img/botol.png" alt="Botol Icon">
                    Botol Plastik
                </div>
                <div class="weight-input-group">
                    <input type="number" class="weight-input" value="0" min="0" data-type="botol">
                    <span>kg</span>
                </div>
            </div>

            <input type="hidden" name="point" id="point" value="0">

            <div class="result">
                <p id="total-coins">Total Koin: 0</p>
            </div>

            <div class="info-row">
                <div class="info-box">
                    <div class="info-title">Alamat Penjemputan</div>
                    <div class="info-details">{{ Auth::user()->name }}</div>
                    <div class="info-details">{{ Auth::user()->phone }}</div>
                    <div class="info-details">{{ Auth::user()->address }}</div>
                </div>

                <div class="info-box">
                    <div class="info-title">Tanggal Penjemputan</div>
                    <div class="info-details">
                        <input type="date" id="tanggal-penjemputan" name="tanggal-penjemputan" class="form-control">
                    </div>
                    <div class="info-title mt-3">Waktu Penjemputan</div>
                    <div class="info-details">
                        <input type="time" id="waktu-penjemputan" name="waktu-penjemputan" class="form-control">
                    </div>
                </div>
            </div>

            <hr>

            <button type="button" class="btn confirm" data-bs-toggle="modal" data-bs-target="#confirmationModal">
                Lanjutkan Transaksi
            </button>
        </form>

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif

        <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="border-radius: 12px;">
                    <div class="modal-body text-center">
                        <p class="fw-bold">Apakah anda yakin untuk melanjutkan transaksi?</p>
                        <div class="d-flex justify-content-center gap-3 mt-3">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" style="border-radius:  8px; width: 100px;">Tidak</button>
                            <button type="button" class="btn btn-success" style="border-radius: 8px; width: 100px;">Ya</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const conversionRates = {
            plastik: 2000,
            kertas: 3000,
            alumunium: 7000,
            besi: 5000,
            botol: 3000,
        };

        function calculateTotalCoins() {
            let totalCoins = 0;
            const inputs = document.querySelectorAll('.weight-input');
            inputs.forEach(input => {
                const type = input.getAttribute('data-type');
                const weight = parseFloat(input.value) || 0;
                totalCoins += weight * (conversionRates[type] || 0);
            });
            document.getElementById('total-coins').innerText = `Total Koin: ${totalCoins.toLocaleString()} koin`;
            
            // Simpan total koin ke input hidden untuk dikirim ke controller
            document.getElementById('point').value = totalCoins;
        }

        const inputs = document.querySelectorAll('.weight-input');
        inputs.forEach(input => {
            input.addEventListener('input', calculateTotalCoins);
        });

        // Ketika tombol Ya di modal diklik
        document.querySelector('.btn-success').addEventListener('click', function() {
            // Submit form ke controller
            document.getElementById('dropoffForm').submit();
        });

        calculateTotalCoins();
    </script>
    <script src="sweetalert2.all.min.js"></script>
</body>
</html>