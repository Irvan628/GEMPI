<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rincian Sampah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
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

        .upload-container {
            background-color: #F5F5F5;
            text-align: center;
            padding: 15px;
            border-radius: 10px;
            font-size: 14px;
            color: #555;
            border: 2px dashed #8BA893;
            cursor: pointer;
            margin-bottom: 20px;
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
        .sidebar-transition {
            transition: transform 0.3s ease-in-out;
        }
    </style>
</head>
<body>

    
<!-- Hamburger Menu Button -->
<button id="hamburger" class="absolute top-4 left-4 z-50 text-green-400 focus:outline-none">
    <svg id="hamburger-open" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
    </svg>
    <svg id="hamburger-close" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
    </svg>
</button>

<!-- Sidebar -->
<div id="Main" class="sidebar-transition transform -translate-x-full fixed top-0 left-0 h-screen w-72 bg-white flex flex-col">
    <!-- Header -->
    <div class="mt-6 flex justify-start p-6 items-center space-x-3">
        <img src="img/logo.png" alt="Logo" class="w-12 h-12">
        <div>
            <p class="text-2xl text-black font-bold">Halo, Irvan!</p>
            <p class="text-sm text-black mt-2">Yuk daur ulang sampahmu hari ini!</p>
        </div>
    </div>

    <!-- Menu Items -->
    <div class="mt-6 flex flex-col justify-start items-start px-6 w-full space-y-3">
        <div class="bg-lime-500 border-lime-900 p-4 flex items-center rounded w-full">
            <img src="img/coin.png" alt="Coin Icon" class="h-12 w-12">
            <div class="ml-4">
                <p class="text-lg text-black font-bold">1500 Points</p>
                <button 
                    class="bg-green-700 text-white  active:text-green-500 rounded-lg px-4 py-2 mt-2 font-bold"
                    onclick="window.location.href='{{ url('reedem') }}'">
                    Reedem
                </button>
            </div>
        </div>
        <button class="flex items-center space-x-4 w-full text-black font-bold  active:text-green-500 py-2 px-4 hover:bg-gray-100 rounded" onclick="window.location.href='{{ url('pickup') }}'">
            <img src="img/pickup.png" alt="Pick Up Icon" class="h-8 w-8">
            <span>Pick Up</span>
        </button>
        <button class="flex items-center space-x-4 w-full text-black font-bold  active:text-green-500 py-2 px-4 hover:bg-gray-100 rounded" onclick="window.location.href='{{ url('dropoff') }}'">
            <img src="img/dropoff.png" alt="Drop Off Icon" class="h-8 w-8">
            <span>Drop Off</span>
        </button>
        <button class="flex items-center space-x-4 w-full text-black font-bold  active:text-green-500 py-2 px-4 hover:bg-gray-100 rounded" onclick="window.location.href='{{ url('riwayat') }}'">
            <img src="img/riwayat.png" alt="Riwayat Icon" class="h-8 w-8">
            <span>Riwayat</span>
        </button>
    </div>

    <!-- Footer -->
    <div class="mt-auto px-6 py-4 w-full">
        <div class="flex items-center space-x-4">
            <img src="img/user.png" alt="User Icon" class="h-12 w-12">
            <div>
                <p class="text-black font-bold">Irvan Nurfauzan</p>
                <button class="text-sm  text-black active:text-green-500 hover:underline" onclick="window.location.href='{{ url('akun-setting') }}'">Akun dan Setting</button>
            </div>
        </div>
    </div>
</div>

<div class="main-content">
    <div class="container">
        <div class="header-text">Rincian Sampah</div>
        <div class="instruction-text">Pilih jenis dan masukkan perkiraan berat sampah yang akan di drop off.</div>

        <hr>

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

        <div class="result">
            <p id="total-coins">Total Koin: 0</p>
        </div>

        <div class="upload-container" onclick="document.getElementById('myFile').click();">
            <div id="upload-text">+</div>
            <div id="upload-instruction">Upload foto sampahmu disini</div>
            <img id="preview" class="preview-image" alt="Pratinjau Gambar" style="display:none;">
        </div>

        <input type="file" id="myFile" name="filename" accept="image/*" onchange="handleFileUpload(event)" style="display:none;">

        <script>
            function handleFileUpload(event) {
                const file = event.target.files[0];
                const preview = document.getElementById('preview');
                const uploadText = document.getElementById('upload-text');
                const uploadInstruction = document.getElementById('upload-instruction');

                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        preview.src = e.target.result;
                        preview.style.display = "block";
                        uploadText.style.display = "none";
                        uploadInstruction.style.display = "none";
                    }
                    reader.readAsDataURL(file);
                }
            }
        </script>

        <div class="info-row">
            <div class="info-box">
                <div class="info-title">Alamat Penjemputan</div>
                <div class="info-details">Bryan Bagaskara</div>
                <div class="info-details">082209785456</div>
                <div class="info-details">Kencana Loka, Jl. Ahmad Yani, Blok A7 No. 10</div>
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
        }

        const inputs = document.querySelectorAll('.weight-input');
        inputs.forEach(input => {
            input.addEventListener('input', calculateTotalCoins);
        });

        calculateTotalCoins();
    </script>
    <script>
        const hamburger = document.getElementById('hamburger');
        const sidebar = document.getElementById('Main');
        const openIcon = document.getElementById('hamburger-open');
        const closeIcon = document.getElementById('hamburger-close');
    
        hamburger.addEventListener('click', () => {
            const isSidebarOpen = !sidebar.classList.contains('-translate-x-full');
            sidebar.classList.toggle('-translate-x-full', isSidebarOpen);
            openIcon.classList.toggle('hidden', !isSidebarOpen);
            closeIcon.classList.toggle('hidden', isSidebarOpen);
        });
    </script>
    <script src="sweetalert2.all.min.js"></script>
</body>
</html>