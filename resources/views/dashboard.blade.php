@if(!Auth::check())
    <script>window.location = "/login";</script>
@endif

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GEMPI Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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

        .main-content {
            width: 100%;
            padding: 20px;
            margin: 50px;
        }

        .map-section {
            width: 100%;
            height: 300px;
            background-color: #e0e0e0;
            border-radius: 15px;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .services-container {
            text-align: center;
            color: #333;
            border-radius: 15px;
            padding: 20px;
            background-color: #8BA893;
        }

        .services-container h2 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: white;
        }

        .service-card {
            background-color: #E5F0F3;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            min-height: 220px;
        }

        .service-card:hover {
            transform: translateY(-5px);
        }

        .service-icon img {
            width: 40px;
            height: auto;
            margin-bottom: 15px;
        }

        .service-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }

        .service-description {
            font-size: 14px;
            color: #666;
            margin-top: auto;
        }

        #map {
            width: 100%;
            height: 300px;
            border-radius: 15px;
            z-index: 1;
        }

        .news-section {
            width: 90%;
            max-width: 100%;
            margin: 40px auto;
            text-align: center;
            color: #333;
        }

        .news-section h2 {
            font-size: 24px;
            font-weight: bold;
            color: rgb(0, 0, 0);
            margin-bottom: 30px;
        }

        .news-card {
            display: flex;
            background-color: #FFFFFF;
            border-radius: 15px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            padding: 15px;
            align-items: center;
            transition: transform 0.3s;
        }

        .news-card:hover {
            transform: translateY(-5px);
        }

        .news-image {
            flex-shrink: 0;
            width: 100px;
            height: 100px;
            border-radius: 10px;
            margin-right: 15px;
            object-fit: cover;
        }

        .news-content {
            text-align: left;
            color: #333;
        }

        .news-content h4 {
            font-size: 18px;
            font-weight: bold;
            margin: 0;
            color: #333;
        }

        .news-content p {
            font-size: 14px;
            margin-top: 5px;
            color: #666;
        }

        .text-decoration-none {
            text-decoration: none;
        }

        .sidebar-transition {
            transition: transform 0.3s ease-in-out;
            z-index: 1000;
        }

        #hamburger-close {
            z-index: 2000 !important;
 position: relative;
        }

        @media (max-width: 768px) {
            .services-container h2 {
                font-size: 20px;
            }

            .service-card {
                min-height: auto;
                padding: 15px;
            }
        }

        .logout-btn {
            background-color: #dc3545;
            color: white;
            padding: 8px 16px;
            border-radius: 8px;
            border: none;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 10px;
            width: 100%;
        }

        .logout-btn:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>

    <button id="hamburger" class="absolute top-4 left-4 z-50 text-green-400 focus:outline-none">
        <svg id="hamburger-open" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
        <svg id="hamburger-close" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="position: absolute; top: 16px; right: 16px; z-index: 2000;">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>

    <div id="Main" class="sidebar-transition transform -translate-x-full fixed top-0 left-0 h-screen w-72 bg-white flex flex-col">
        <div class="mt-6 flex justify-start p-6 items-center space-x-3">
            <img src="img/logo.png" alt="Logo" class="w-12 h-12">
            <div>
                <p class="text-2xl text-black font-bold">Halo, {{ Auth::user()->name }}!</p>
                <p class="text-sm text-black mt-2">Yuk daur ulang sampahmu hari ini!</p>
            </div>
        </div>

        <div class="mt-6 flex flex-col justify-start items-start px-6 w-full space-y-3">
            <div class="bg-lime-500 border-lime-900 p-4 flex items-center rounded w-full">
                <img src="img/coin.png" alt="Coin Icon" class="h-12 w-12">
                <div class="ml-4">
                    <p class="text-lg text-black font-bold">{{ Auth::user()->dropoffs ? Auth::user()->dropoffs->sum('point') : 0 }} Points</p>
                    <button 
                        class="bg-green-700 text-white active:text-green-500 rounded-lg px-4 py-2 mt-2 font-bold"
                        onclick="window.location.href='{{ url('reedem') }}'">
                        Reedem
                    </button>
                </div>
            </div>
            <button class="flex items-center space-x-4 w-full text-black font-bold active:text-green-500 py-2 px-4 hover:bg-gray-100 rounded" onclick="window.location.href='{{ url('pickup') }}'">
                <img src="img/pickup.png" alt="Pick Up Icon" class="h-8 w-8">
                <span>Pick Up</span>
            </button>
            <button class="flex items-center space-x-4 w-full text-black font-bold active:text-green-500 py-2 px-4 hover:bg-gray-100 rounded" onclick="window.location.href='{{ url('dropoff') }}'">
                <img src="img/dropoff.png" alt="Drop Off Icon" class="h-8 w-8">
                <span>Drop Off</span>
            </button>
            <button class="flex items-center space-x-4 w-full text-black font-bold active:text-green-500 py-2 px-4 hover:bg-gray-100 rounded" onclick="window.location.href='{{ url('riwayat') }}'">
                <img src="img/riwayat.png" alt="Riwayat Icon" class="h-8 w-8">
                <span>Riwayat</span>
            </button>
        </div>

        <div class="mt-auto px-6 py-4 w-full">
            <div class="flex items-center space-x-4">
                <img src="img/user.png" alt="User   Icon" class="h-12 w-12">
                <div>
                    <p class="text-black font-bold">{{ Auth::user()->name }}</p>
                    
                </div>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="logout-btn">
                    Logout
                </button>
            </form>
        </div>
    </div>

    <div class="main-content">
        <div id="map"></div>

        <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
        <script>
            var map = L.map('map').setView([0, 0], 13);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '© OpenStreetMap'
            }).addTo(map);

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    function(position) {
                        const lat = position.coords.latitude;
                        const lon = position.coords.longitude;
                        map.setView([lat, lon], 15);
                        L.marker([lat, lon]).addTo(map)
                            .bindPopup("<b>Posisi Kamu!</b>")
                            .openPopup();
                    },
                    function(error) {
                        console.error("Error retrieving location:", error);
                    }
                );
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        </script>

        <div class="services-container">
            <h2>Layanan Kami</h2>
            <div class="row justify-content-center">
                <div class="col-md-4 col-sm-6 mb-4">
                    <a href="pickup" style="text-decoration: none; color: inherit;">
                        <div class="service-card">
                            <div class="service-icon">
                                <img src="img/pickup.png" alt="Pick Up Icon">
                            </div>
                            <h4 class="service-title">Pick Up</h4>
                            <p class="service-description">Foto sampah daur ulangmu, upload ke Aplikasi Mallsampah, kolektor Mallsampah terdekat akan menjemput, menimbang dan membayar sampahmu.</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6 mb-4">
                    <a href="dropoff" style="text-decoration: none; color: inherit;">
                        <div class="service-card">
                            <div class="service-icon">
                                <img src="img/drop.png" alt="Drop Off Icon">
                            </div>
                            <h4 class="service-title">Drop Off</h4>
                            <p class="service-description">Antar langsung sampahmu ke Recycling Centre terdekat, kamu bisa mendaur ulang dengan ukuran kecil seperti satu botol plastik.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="news-section">
            <h2>Berita Terkini</h2>
            <!-- News Cards will be dynamically added here -->
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

        <script>
            const apiKey = 'c557b1bd81074fecb9d76e4dfd384abb'; // Ganti dengan API key kamu
            const apiUrl = `https://newsapi.org/v2/everything?q=lingkungan&language=id&apiKey=${apiKey}`;

            fetch(apiUrl)
                .then(response => response.json())
                .then(data => {
                    const articles = data.articles;
                    const numberOfArticlesToShow = 5;
                    let newsHtml = '';
                    
                    for (let i = 0; i < numberOfArticlesToShow; i++) {
                        const article = articles[i];
                        newsHtml += `
                            <a href="${article.url}" class="text-decoration-none">
                                <div class="news-card">
                                    <img src="${article.urlToImage ? article.urlToImage : 'img/drop.png'}" alt="News Image" class="news-image">
                                    <div class="news-content">
                                        <h4>${article.title}</h4>
                                        <p>${article.description ? article.description : 'Deskripsi tidak tersedia'}</p>
                                    </div>
                                </div>
                            </a>
                        `;
                    }

                    document.querySelector('.news-section').innerHTML += newsHtml;
                })
                .catch(error => console.log('Error fetching news:', error));
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

            // Menutup sidebar ketika mengklik di luar area sidebar
            document.addEventListener('click', (event) => {
                const isClickInsideSidebar = sidebar.contains(event.target);
                const isClickOnHamburger = hamburger.contains(event.target);
                
                if (!isClickInsideSidebar && !isClickOnHamburger) {
                    if (!sidebar.classList.contains('-translate-x-full')) {
                        sidebar.classList.add('-translate-x-full');
                        openIcon.classList.remove('hidden');
                        closeIcon.classList.add('hidden');
                    }
                }
            });
        </script>
        <script>
            fetch('/api/user-info')
    .then(response => response.json())
    .then(data => {
        document.querySelector('.text-2xl').textContent = `Halo, ${data.namaUser}!`;
        document.querySelector('.text-lg').textContent = `${data.poinUser} Points`;
    })
    .catch(error => console.error('Error fetching user info:', error));

        </script>
    </div>
</body>
</html>