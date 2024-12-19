<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thirsty - Minuman dan Camilan Segar</title>
    <meta name="description" content="Nikmati minuman segar dan camilan lezat di Kedai Teras Rasuni, tempat yang nyaman untuk bersantai.">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <style>

        * {
       
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        html, body {
          height: 100%;
      padding-top: 30px;
      background-color:rgb(202, 202, 156); 
            
}

        :root {
            --primary: #ff4d4d;
            --secondary: #ffd700;
            --dark: #333;
            --light: #fff;
        }
      

        .navbar {
            background: #003055;
            padding: 1.0rem;
            position: fixed;
            width: 100%;
            height: 11%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-brand {
            color: var(--light);
    font-size: 1.5rem;
    font-weight: bold;
    text-decoration: none;
    display: flex;
    align-items: center;  /* Menjaga agar logo dan teks berada dalam satu baris */
        }
        .navbar-brand .logo {
    width: 50px;  /* Sesuaikan ukuran logo */
    height: auto;
    margin-right: 10px;  /* Memberikan jarak antara logo dan teks */
    border-radius: 25px;
}

        .navbar-menu {
            display:none;
            gap: 2rem;
        }

        .navbar-menu a {
            color: var(--light);
            text-decoration: none;
            font-size: 1rem;
        }

        .navbar-menu a:hover {
            color: var(--primary);
        }
        

        .hamburger {
            display: block;
            flex-direction: column;
            gap: 5px;
            cursor: pointer;
           
        }

        .hamburger div {
            width: 25px;
            height: 3px;
            background-color: var(--light);
            
        }

        .hero {
    background-color: #003055;
    height: 100vh;
    background-size: cover;
    background-position: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: var(--light);
    padding: 2rem;
    position: relative;
           
        }

        .hero-content h1 {
            font-size: 3.5rem;
    margin-bottom: 1rem;
    font-weight: bold;
    padding-top: 180px;
        }

        .hero-content p {
            font-size: 1.2rem;
    margin-bottom: 2rem;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
    line-height: 1.6;
        }
        .hero-image {
    width: 250px;
    height: auto;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    margin-top: 2rem;
    transition: transform 0.3s ease;
  
    
}
.hero-image:hover {
    transform: scale(1.05);
}

        .btn {
            padding: 0.8rem 2rem;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .btn-primary {
            padding: 1rem 2rem;
    font-size: 1.2rem;
    border-radius: 30px;
    background-color: #003055;
    color: white;
    text-decoration: none;
    cursor: pointer;
    display: inline-block;
    transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color:rgb(247, 220, 19);
        }

        .section {
            padding: 3rem 1rem;
    background-color:rgb(147, 147, 114);
    text-align: center;

        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
           
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: var(--dark);
        }

        .menu-grid {
            display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
    margin-top: 2rem;
        }

        .menu-item {
            background: none; /* Menghapus latar belakang */
    border: none; /* Menghapus border */
    box-shadow: none; /* Menghapus shadow */
    transition: transform 0.3s ease;
    display: flex;
    flex-direction: column;
    align-items: center; /* Menyusun elemen di tengah */
    text-align: center; /* Agar teks berada di tengah */
        }
        .menu-item:hover img {
    transform: scale(1.1); /* Memperbesar gambar sedikit */
    opacity: 0.8; /* Efek transparansi sedikit */
}

        .menu-item:hover {
            transform: translateY(-5px);
            
        }

        .menu-item img {
            width: 70%;
            height: auto;
            object-fit: cover;
            border-radius: 10px;
            transition: transform 0.3s ease, opacity 0.3s ease;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
        }

        .menu-item-content {
            padding: 1.5rem;
            display: block;
            margin-top: 1rem;
        }

        .menu-item-title {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
            color: var(--dark);
            font-weight: bold;
        }
        /* Tombol Lihat Menu */
.see-menu-btn {
    margin-top: 2rem;
}

        .menu-item-price {
            font-weight: bold;
            font-size: 1.1rem;
            font-size: 1.2rem;
            color:rgb(22, 13, 84); /* Warna harga */
        }
        /* Styling Section Contact */
.section.contact {
    text-align: center;
    padding: 50px 20px;
    background: linear-gradient(to right, #f8f9fa, #ececec);
}
/* Title Styling */
.section.contact .section-title h2 {
    font-size: 2.5rem;
    margin-bottom: 30px;
    color: #333;
    text-transform: uppercase;
    letter-spacing: 2px;
}
/* Contact Icons Container */
.contact-icons {
    display: flex;
    justify-content: center;
    gap: 30px;
    flex-wrap: wrap;
}

/* Contact Links */
.contact-link {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-decoration: none;
    color: #333;
    transition: all 0.3s ease-in-out;
    border-radius: 8px;
    padding: 15px;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 120px;
    text-align: center;
}

/* Hover Effect */
.contact-link:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
    background-color:rgb(154, 25, 25);
}

.btn-hm {
    display: none;
}

/* Icon Styling */
.contact-link i {
    font-size: 2.5rem;
    margin-bottom: 10px;
    color: #003055;
}

/* Icon Hover Effect */
.contact-link:hover i {
    color: #003055;
}

/* Text Below Icon */
.contact-link span {
    font-size: 1rem;
    font-weight: 600;
    color: #555;
}

        .contact {
            background: #f9f9f9;
        }

        .contact-info {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .contact-item {
            margin-bottom: 1.5rem;
        }

        .contact-item i {
            color: var(--primary);
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .map {
            width: 100%;
            height: 400px;
            border:#ff4d4d;
            border-radius: 10px;
            margin-top: 2rem;
            padding-bottom: 7%;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-top: 2rem;
        }

        .social-links a {
            color: var(--dark);
            font-size: 1.5rem;
            transition: color 0.3s ease;
        }

        .social-links a:hover {
            color: var(--primary);
        }

        footer {
            background-color: #003055;
            color: var(--light);
            text-align: center;
            padding: 1rem;
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 10%;
            z-index: 1000;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .popup-container {
    width: 300px; /* Lebar maksimal kotak popup */
    padding: 10px;
    font-family: Arial, sans-serif;
}

.popup-image {
    width: 100%; /* Gambar memenuhi lebar kotak */
    height: auto; /* Proporsi gambar tetap */
    border-radius: 5px; /* Opsional: memberikan efek sudut membulat */
    margin-bottom: 10px; /* Jarak antara gambar dan konten lainnya */
}


        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.5rem;
            }
            .section {
                padding: 3rem 1rem;
            }

            .navbar-menu {
                display: none;
                position: absolute;
                top: 60px;
                right: 0;
                background: #003055;
                padding: 1rem;
                width: 200px;
                text-align: right;
                border-radius: 10px;
            }

            .navbar-menu a {
                display: block;
                padding: 0.5rem;
                font-size: 1.2rem;
            }

            .hamburger {
                display: flex
            
            }

            .btn-hm {
                margin-left: 250px;
            }

            .navbar.open .navbar-menu {
                display: block;
            }
            .navbar-menu.open {
    display: flex;
}
            
        }
    </style>
</head>
<body>
    <nav class="navbar">
    <a href="#" class="navbar-brand">
        <img src="logo.jpg" alt="" class="logo">
        thirsty. 
        <div class="hamburger"  onclick="toggleMenu()">
            <div class="btn-hm"></div>
            <div class="btn-hm"></div>
            <div class="btn-hm"></div>
        </div>
        <div class="navbar-menu">
            <a href="#home">Home</a>
            <a href="#menu">Menu</a>
            <a href="#contact">Contact</a>
            <a href="#map">Maps</a>
        </div>
    </nav>

    <section id="home" class="hero">
    <div class="hero-content" data-aos="fade-up">
        <h1>Selamat Datang di Thirsty</h1>
        <p>Minuman segar dan camilan lezat yang siap menyegarkan harimu. Cobalah berbagai varian minuman terbaik kami!</p>
        <img src="orange.jpg" alt="Minuman Terbaik" class="hero-image">
        <br><br><br><br><br><br><br><br><br>
    </div>
</section>

    <section id="menu" class="section">
        <div class="section-title" data-aos="fade-up">
            <h2>Menu Kami</h2>
        </div>
        <div class="menu-grid">
            <div class="menu-item" data-aos="fade-up">
                <img src="mocktail.jpg" alt="Varian Kopi">
                <div class="menu-item-content">
                    <h3 class="menu-item-title">Virgin Mocktail</h3>
                    <p class="menu-item-price">Rp 15.000</p>
                </div>
            </div>
            <div class="menu-item" data-aos="fade-up">
                <img src="dalgona.jpg" alt="Varian Kopi">
                <div class="menu-item-content">
                    <h3 class="menu-item-title">Dalgona Coffee</h3>
                    <p class="menu-item-price">Rp 15.000</p>
                </div>
            </div>
            <div class="menu-item" data-aos="fade-up">
                <img src="strawberry.jpg" alt="Varian Kopi">
                <div class="menu-item-content">
                    <h3 class="menu-item-title">Strawberry Lychee</h3>
                    <p class="menu-item-price">Rp 15.000</p>
                </div>
            </div>
        </div>
         <!-- Tombol Lihat Menu -->
    <div class="see-menu-btn">
        <a href="menu.html" class="btn btn-primary">Lihat Menu</a>
    </div>
    </section>

    <section id="contact" class="section contact">
    <div class="section-title" data-aos="fade-up">
        <h2>Hubungi Kami</h2>
    </div>
    <div class="contact-icons" data-aos="fade-up">
        <a href="https://www.instagram.com/thirstyselayar/?igsh=ajd2ZGhhYTRsNXlh" target="_blank" class="contact-link">
            <i class="fab fa-instagram"></i>
            <span>Instagram</span>
        </a>
        <a href="https://wa.me/6281527609020?text=Halo%2C%20saya%20ingin%20memesan%20minuman" target="_blank" class="contact-link">
            <i class="fab fa-whatsapp"></i>
            <span>WhatsApp</span>
        </a>
        <a href="mailto:khaerulall27@gmail.com" target="_blank" class="contact-link">
            <i class="fas fa-envelope"></i>
            <span>Email</span>
        </a>
    </div>
</section>



    <section id="map" class="section">
        <div class="map" id="map" data-aos="fade-up"></div>
    </section>

    <footer>
        <p>&copy; 2024 Thirsty. All Rights Reserved.</p>
        <div class="social-links">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
    </footer>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
    function toggleMenu() {
        document.querySelector('.navbar-menu').classList.toggle('open');
    }

    var map = L.map('map', {
        center: [-6.119561, 120.467964],  // Set initial coordinates
        zoom: 15,                         // Set initial zoom level
        minZoom: 5,                       // Prevent zooming out
        maxZoom: 20,                      // Max zoom level
        scrollWheelZoom: false            // Disable zooming via mouse scroll
    });

    // Layer for OpenStreetMap
    const osmLayer = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Layer for Google Satellite
    const satelliteLayer = L.tileLayer('https://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
        maxZoom: 19,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
        attribution: '&copy; <a href="https://www.google.com/maps">Google Maps</a>'
    });

    // Adding layer control
    const baseMaps = {
        "OSM": osmLayer,
        "Satelit": satelliteLayer
    };
    L.control.layers(baseMaps).addTo(map);

    // Icons for markers
    const mesjidIcon = L.icon({
        iconUrl: 'mosque.png',  // Replace with actual path
        iconSize: [25, 25],
        iconAnchor: [15, 30],
        popupAnchor: [0, -30]
    });

    const sekolahIcon = L.icon({
        iconUrl: 'school.png',  // Replace with actual path
        iconSize: [25, 25],
        iconAnchor: [15, 30],
        popupAnchor: [0, -30]
    });

    // Define colors for different GeoJSON layers
    const geojsonColors = {
        "BentengPusat.geojson": "green",  // Example color
        "bentengselatan.geojson": "blue",
        "bentengutara.geojson": "red",
        "road.geojson": "#FF33A1"
    };

    // Load GeoJSON files with specific icons and colors
    loadGeoJSON("./BentengPusat.geojson", null, geojsonColors["BentengPusat.geojson"]);
    loadGeoJSON("./bentengselatan.geojson", sekolahIcon, geojsonColors["bentengselatan.geojson"]);
    loadGeoJSON("./bentengutara.geojson", sekolahIcon, geojsonColors["bentengutara.geojson"]);
    loadGeoJSON("./road.geojson", null, geojsonColors["road.geojson"]);
    loadGeoJSON("./Mesjid.geojson", mesjidIcon, null);
    loadGeoJSON("./sekolah.geojson", sekolahIcon, null);

    // UMKM Marker with Popup
    const umkmData = {
        name: "Thirsty",
        rating: "4.2",
        reviews: [
            { name: "Khaerul", stars: 5, date: "2024-12-19", text: "segerrr!" },
            { name: "Indri", stars: 4, date: "2024-12-18", text: "menyegarkan." }
            
        ],
        category: "Cafe",
        buka: "08:00 am - 10:00 pm",
        alamat: "Jl. AP. Pettarani No.12 , Benteng",
        coords: [-6.127266, 120.459069],
        imageUrl: "./thirsty1.jpg"
    };

    const marker = L.marker(umkmData.coords).addTo(map);

    marker.bindPopup(`
        <div class="popup-container">
            <div class="popup-header">${umkmData.name}</div>
            <div class="popup-rating">⭐ ${umkmData.rating} (${umkmData.reviews.length} reviews)</div>
            <div class="popup-category">${umkmData.category}</div>
            <img src="${umkmData.imageUrl}" alt="${umkmData.name}" class="popup-image" />
            <div class="popup-address"><i class="fas fa-map-marker-alt"></i> ${umkmData.alamat}</div>
            <div class="popup-hours"><i class="fas fa-clock"></i> ${umkmData.buka}</div>
            <br>
            <h1>Ulasan Pengguna</h1>
            <div>
                ${umkmData.reviews.map(review => `
                    <div class="review">
                        <h3>${review.name}</h3>
                        <span class="stars">${review.stars}</span>
                        <p class="review-date">${review.date}</p>
                        <p>${review.text}</p>
                    </div>
                `).join('')}
            </div>
        </div>
    `);

    // Function to load GeoJSON with color and icon
    function loadGeoJSON(url, icon, color) {
        fetch(url)
            .then(response => {
                if (!response.ok) throw new Error(`HTTP error! Status: ${response.status}`);
                return response.json();
            })
            .then(geojsonData => {
                L.geoJSON(geojsonData, {
                    pointToLayer: function (feature, latlng) {
                        return icon ? L.marker(latlng, { icon: icon }) : L.circleMarker(latlng, {
                            radius: 8,
                            fillColor: color || "#3388FF",
                            color: color || "#3388FF",
                            weight: 1,
                            opacity: 5,
                            fillOpacity: 2
                        });
                    },
                    style: function (feature) {
                        return {
                            color: color || "#3388FF",
                            weight: 2,
                            opacity: 5
                        };
                    },
                    onEachFeature: function (feature, layer) {
                        if (feature.properties && feature.properties.nama) {
                            layer.bindPopup(`${feature.properties.nama}`);
                        }
                    }
                }).addTo(map);
            })
            .catch(error => console.error(`Error loading ${url} GeoJSON:`, error));
    }

    // AOS initialization for animations
    AOS.init();
});

    </script>
</body>
</html>
