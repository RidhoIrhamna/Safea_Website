<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safea - Cold Pressed Juice</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', Arial, sans-serif;
            background: #fff;
            color: #222;
        }
        a {
            color: inherit;
            text-decoration: none;
        }
        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 30px 5vw 20px 5vw;
            background: #fff;
            border-bottom: 1px solid #f4f4f4;
        }
        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .logo img {
            height: 40px;
        }
        nav {
            display: flex;
            align-items: center;
            gap: 30px;
            font-size: 16px;
            font-weight: 500;
        }
        .nav-icons {
            display: flex;
            align-items: center;
            gap: 18px;
            font-size: 18px;
        }

        /* Hero Section */
        .hero-wrap {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 50px 5vw 30px 5vw;
            gap: 40px;
            flex-wrap: wrap;
        }
        .hero-logo {
            flex: 1;
            min-width: 180px;
            display: flex;
            justify-content: center;
        }
        .hero-logo img {
            height: 160px;
            opacity: 0.85;
        }
        .hero-desc {
            background: #fcf7e9;
            border-radius: 16px;
            padding: 36px 38px;
            max-width: 400px;
            min-width: 280px;
            flex: 1;
            box-shadow: 0 2px 12px 0 rgba(235, 192, 82, 0.08);
        }
        .hero-desc small {
            letter-spacing: 2px;
            color: #8c8c8c;
            font-weight: 600;
        }
        .hero-desc h2 {
            font-size: 2.2rem;
            margin: 10px 0 10px 0;
            color: #FEC661;
            font-weight: 700;
            line-height: 1.1;
        }
        .hero-desc p {
            color: #444;
            font-size: 1rem;
            margin-bottom: 26px;
        }
        .hero-desc .btn {
            background: #FEC661;
            border: none;
            padding: 13px 32px;
            border-radius: 6px;
            color: #fff;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.2s;
        }
        .hero-desc .btn:hover {
            background: #e9b14d;
        }

        /* Products Section */
        .products {
            display: flex;
            justify-content: center;
            align-items: flex-end;
            gap: 40px;
            padding: 40px 5vw 30px 5vw;
            flex-wrap: wrap;
        }
        .product-card {
            position: relative;
            width: 260px;
            min-width: 210px;
            height: 410px;
            background: #f6f8f6;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 2px 14px 0 rgba(82, 146, 118, 0.08);
            display: flex;
            align-items: flex-end;
            transition: transform 0.18s;
        }
        .product-card:hover {
            transform: translateY(-7px) scale(1.025);
            box-shadow: 0 6px 32px 0 rgba(82, 146, 118, 0.18);
        }
        .product-card img {
            width: 100%;
            height: 88%;
            object-fit: cover;
            display: block;
        }
        .product-label {
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            pointer-events: none;
            display: flex;
            align-items: flex-end;
            font-size: 2rem;
            font-weight: 700;
            color: #fff;
            text-shadow: 0 2px 14px rgba(0,0,0,0.25);
            padding: 0 0 18px 20px;
        }
        .label-green { color: #21644C; text-shadow: 0 2px 18px #b6f3c1; }
        .label-orange { color: #C4700F; text-shadow: 0 2px 18px #f6cd8a; }
        .label-red { color: #a63848; text-shadow: 0 2px 18px #f6cd8a; }

        /* Gallery Section */
        .gallery-section {
            margin: 60px 0 0 0;
            padding: 0 5vw;
        }
        .gallery-title {
            text-align: center;
            font-weight: 600;
            font-size: 1.3rem;
            margin-bottom: 6px;
            color: #444;
        }
        .gallery-hashtag {
            text-align: center;
            font-weight: 700;
            font-size: 1.7rem;
            letter-spacing: 1px;
            color: #6e8b72;
            margin-bottom: 30px;
        }
        .gallery-images {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            max-width: 1120px;
            margin: 0 auto 40px auto;
        }
        .gallery-img-box {
            border-radius: 16px;
            overflow: hidden;
            background: #f3f3f3;
            box-shadow: 0 2px 12px 0 rgba(180, 200, 170, 0.12);
        }
        .gallery-img-box img {
            width: 100%;
            height: 190px;
            object-fit: cover;
            display: block;
            transition: transform 0.2s;
        }
        .gallery-img-box img:hover {
            transform: scale(1.07);
        }

        /* Footer */
        footer {
            background: #fcf7e9;
            margin-top: 50px;
            padding: 44px 5vw 18px 5vw;
            color: #222;
            font-size: 15px;
        }
        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1.3fr 2fr;
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto 32px auto;
            align-items: flex-start;
        }
        .footer-brand {
            font-weight: 700;
            font-size: 1.2rem;
        }
        .footer-address {
            color: #888;
            font-size: 0.92rem;
            margin: 14px 0 0 0;
        }
        .footer-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .footer-list li {
            margin-bottom: 12px;
        }
        .footer-list li a {
            color: #555;
            font-size: 1rem;
            transition: color 0.18s;
        }
        .footer-list li a:hover {
            color: #FEC661;
        }
        .footer-newsletter label {
            font-weight: 500;
            margin-bottom: 6px;
            display: block;
        }
        .footer-newsletter input[type="email"] {
            padding: 10px 12px;
            border-radius: 7px;
            border: 1px solid #ddd;
            width: 160px;
            margin-right: 8px;
            outline: none;
        }
        .footer-newsletter button {
            background: #FEC661;
            border: none;
            padding: 10px 18px;
            border-radius: 7px;
            color: #fff;
            font-weight: 600;
            font-size: 0.98rem;
            cursor: pointer;
            transition: background 0.18s;
        }
        .footer-newsletter button:hover {
            background: #e9b14d;
        }
        .footer-bottom {
            text-align: left;
            font-size: 0.93rem;
            color: #aaa;
            margin-top: 18px;
        }

        @media (max-width: 1024px) {
            .products {
                gap: 18px;
            }
            .hero-wrap, .products {
                flex-direction: column;
                align-items: center;
                padding-left: 2vw;
                padding-right: 2vw;
            }
            .footer-grid {
                grid-template-columns: 1fr 1fr;
                gap: 24px;
            }
        }
        @media (max-width: 700px) {
            header {
                flex-direction: column;
                gap: 15px;
                padding: 20px 2vw;
            }
            .hero-wrap, .products {
                flex-direction: column;
                align-items: center;
                gap: 28px;
                padding: 25px 2vw;
            }
            .hero-logo img {
                height: 95px;
            }
            .hero-desc {
                padding: 22px 16px;
                min-width: 0;
            }
            .products {
                gap: 14px;
            }
            .product-card {
                width: 94vw;
                max-width: 290px;
                height: 320px;
            }
            .gallery-images {
                grid-template-columns: 1fr 1fr;
            }
            .gallery-img-box img {
                height: 110px;
            }
            .footer-grid {
                grid-template-columns: 1fr;
                gap: 16px;
            }
            footer {
                padding: 28px 2vw 12px 2vw;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">
            <img src="{{ asset('images/logo-safea.png') }}" alt="Safea Logo">
            <span style="font-size:1.5rem;font-weight:700;">Safea</span>
        </div>
        <nav>
            <a href="#">Home</a>
            <a href="#">Shop</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </nav>
        <div class="nav-icons">
            <a href="#"><i class="fa-regular fa-user"></i></a>
            <a href="#"><i class="fa-regular fa-heart"></i></a>
            <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
    </header>

    <!-- Hero -->
    <section class="hero-wrap">
        <div class="hero-logo">
            <!-- Gunakan logo Safea untuk ilustrasi smiley -->
            <img src="{{ asset('images/logo-safea.png') }}" alt="Safea Smiley Logo">
        </div>
        <div class="hero-desc">
            <small>New Arrival</small>
            <h2>
                Discover Our <br> New Products
            </h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.
            </p>
            <button class="btn">LEARN MORE</button>
        </div>
    </section>

    <!-- Products -->
    <section class="products">
        <div class="product-card">
            <img src="{{ asset('images/clean-and-cleanse.jpg') }}" alt="Clean & Cleanse">
            <div class="product-label label-green" style="writing-mode: vertical-rl; transform: rotate(180deg);">
                Clean & Cleanse
            </div>
        </div>
        <div class="product-card">
            <img src="{{ asset('images/glow-and-go.jpg') }}" alt="Glow & Go">
            <div class="product-label label-orange" style="writing-mode: vertical-rl; transform: rotate(180deg);">
                Glow & Go
            </div>
        </div>
        <div class="product-card">
            <img src="{{ asset('images/smooth-and-stable.jpg') }}" alt="Smooth & Stable">
            <div class="product-label label-red" style="writing-mode: vertical-rl; transform: rotate(180deg);">
                Smooth & Stable
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery-section">
        <div class="gallery-title">Share your setup with</div>
        <div class="gallery-hashtag">#SafeaJuice</div>
        <div class="gallery-images">
            <div class="gallery-img-box">
                <img src="{{ asset('images/clean-and-cleanse.jpg') }}" alt="Clean & Cleanse Gallery">
            </div>
            <div class="gallery-img-box">
                <img src="{{ asset('images/glow-and-go.jpg') }}" alt="Glow & Go Gallery">
            </div>
            <div class="gallery-img-box">
                <img src="{{ asset('images/smooth-and-stable.jpg') }}" alt="Smooth & Stable Gallery">
            </div>
            <div class="gallery-img-box">
                <img src="{{ asset('images/clean-and-cleanse.jpg') }}" alt="Gallery">
            </div>
            <div class="gallery-img-box">
                <img src="{{ asset('images/glow-and-go.jpg') }}" alt="Gallery">
            </div>
            <div class="gallery-img-box">
                <img src="{{ asset('images/smooth-and-stable.jpg') }}" alt="Gallery">
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-grid">
            <div>
                <div class="footer-brand">Safea</div>
                <div class="footer-address">Bojong santos<br>no 9999h</div>
            </div>
            <div>
                <div style="font-weight:600; margin-bottom:10px;">Links</div>
                <ul class="footer-list">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div>
                <div style="font-weight:600; margin-bottom:10px;">Help</div>
                <ul class="footer-list">
                    <li><a href="#">Payment Options</a></li>
                    <li><a href="#">Returns</a></li>
                    <li><a href="#">Privacy Policies</a></li>
                </ul>
            </div>
            <div class="footer-newsletter">
                <label for="newsletter">Newsletter</label>
                <form>
                    <input type="email" id="newsletter" name="newsletter" placeholder="Enter Your Email Address">
                    <button type="submit">SUBSCRIBE</button>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            © 2025 Safea
        </div>
    </footer>
</body>
</html>
