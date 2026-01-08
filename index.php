<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuiventaHub - Professional Makeup Artistry Services</title>
    <meta name="description" content="QuiventaHub offers exceptional makeup artistry services for weddings, special events, photoshoots, and everyday beauty. Our experienced artists create stunning looks tailored to your unique style. Click here to continue exploring our transformative beauty services and discover your perfect look today.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Georgia', serif;
            line-height: 1.6;
            color: #2c3e50;
            background-color: #fdfbf7;
        }

        .nav8x4m2 {
            background: linear-gradient(135deg, #8b7355 0%, #6d5d4b 100%);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav8x4m2 ul {
            list-style: none;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .nav8x4m2 li {
            margin: 0 15px;
        }

        .nav8x4m2 a {
            color: #fff;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s;
            font-size: 14px;
        }

        .nav8x4m2 a:hover {
            color: #f4e4d7;
        }

        .hero9k2p {
            background: linear-gradient(rgba(139, 115, 85, 0.7), rgba(109, 93, 75, 0.7)), url('https://images.pexels.com/photos/3065209/pexels-photo-3065209.jpeg?auto=compress&cs=tinysrgb&w=1200') center/cover;
            color: white;
            text-align: center;
            padding: 120px 20px;
        }

        .hero9k2p h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .hero9k2p p {
            font-size: 1.3rem;
            max-width: 700px;
            margin: 0 auto 30px;
        }

        .cta7btn3x {
            display: inline-block;
            background: #d4a574;
            color: white;
            padding: 15px 40px;
            text-decoration: none;
            border-radius: 30px;
            font-weight: bold;
            transition: transform 0.3s, background 0.3s;
            margin: 10px;
        }

        .cta7btn3x:hover {
            background: #c49563;
            transform: translateY(-3px);
        }

        .container5m8 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 20px;
        }

        .section4r7 {
            margin-bottom: 80px;
        }

        .section4r7 h2 {
            font-size: 2.5rem;
            margin-bottom: 30px;
            color: #6d5d4b;
            text-align: center;
            position: relative;
            padding-bottom: 15px;
        }

        .section4r7 h2:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: #d4a574;
        }

        .grid3col9x {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .card6z2m {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .card6z2m:hover {
            transform: translateY(-5px);
        }

        .card6z2m h3 {
            color: #8b7355;
            margin-bottom: 15px;
            font-size: 1.5rem;
        }

        .card6z2m img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .timeline8x3 {
            position: relative;
            padding: 40px 0;
        }

        .timeline8x3:before {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 2px;
            height: 100%;
            background: #d4a574;
        }

        .timeline-item4k {
            margin-bottom: 50px;
            position: relative;
        }

        .timeline-content7m {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            width: 45%;
        }

        .timeline-item4k:nth-child(odd) .timeline-content7m {
            margin-left: 55%;
        }

        .timeline-item4k:nth-child(even) .timeline-content7m {
            margin-right: 55%;
        }

        .review9box2 {
            background: #f9f5f0;
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 25px;
            border-left: 4px solid #d4a574;
        }

        .review9box2 .stars3x {
            color: #d4a574;
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .review9box2 .author5m {
            font-weight: bold;
            color: #6d5d4b;
            margin-top: 15px;
        }

        .footer2k9 {
            background: #3d3d3d;
            color: white;
            padding: 50px 20px 20px;
            margin-top: 80px;
        }

        .footer-grid8x {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            max-width: 1200px;
            margin: 0 auto 30px;
        }

        .footer2k9 h3 {
            color: #d4a574;
            margin-bottom: 20px;
        }

        .footer2k9 a {
            color: #ccc;
            text-decoration: none;
            display: block;
            margin-bottom: 10px;
            transition: color 0.3s;
        }

        .footer2k9 a:hover {
            color: #d4a574;
        }

        .copyright7x {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid #555;
            color: #999;
        }

        .modal3bg8 {
            display: none;
            position: fixed;
            z-index: 2000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.7);
        }

        .modal-content5x {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 40px;
            border-radius: 10px;
            width: 80%;
            max-width: 800px;
            max-height: 80vh;
            overflow-y: auto;
        }

        .close9btn {
            color: #aaa;
            float: right;
            font-size: 35px;
            font-weight: bold;
            cursor: pointer;
            line-height: 20px;
        }

        .close9btn:hover {
            color: #000;
        }

        .info-block3x7 {
            background: linear-gradient(135deg, #f9f5f0 0%, #fff 100%);
            padding: 40px;
            margin: 40px 0;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }

        .highlight8box {
            background: #8b7355;
            color: white;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
            text-align: center;
        }

        @media (max-width: 768px) {
            .hero9k2p h1 {
                font-size: 2rem;
            }
            
            .timeline8x3:before {
                left: 20px;
            }
            
            .timeline-content7m {
                width: calc(100% - 60px) !important;
                margin-left: 60px !important;
            }
            
            .nav8x4m2 ul {
                flex-direction: column;
                align-items: center;
            }
            
            .nav8x4m2 li {
                margin: 5px 0;
            }
        }

        .service-img9x {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
            margin: 20px 0;
        }

        .text-center4k {
            text-align: center;
        }

        .btn-link7m {
            background: #6d5d4b;
            color: white;
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 25px;
            display: inline-block;
            margin: 15px 10px;
            transition: background 0.3s;
        }

        .btn-link7m:hover {
            background: #8b7355;
        }
    </style>

    <style>       
        .cookie-consent-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease-out;
        }

        .cookie-consent-modal {
            background: white;
            border-radius: 12px;
            padding: 30px;
            max-width: 500px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transform: scale(0.9);
            animation: slideIn 0.3s ease-out forwards;
        }

        .cookie-consent-title {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
            text-align: center;
        }

        .cookie-consent-text {
            color: #555;
            line-height: 1.6;
            margin-bottom: 25px;
            text-align: center;
        }

        .cookie-consent-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cookie-btn {
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 120px;
        }

        .cookie-btn-accept {
            background: #27ae60;
            color: white;
        }

        .cookie-btn-accept:hover {
            background: #219a52;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(39, 174, 96, 0.3);
        }

        .cookie-btn-deny {
            background: #e74c3c;
            color: white;
        }

        .cookie-btn-deny:hover {
            background: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3);
        }

        .cookie-status {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px 15px;
            border-radius: 6px;
            color: white;
            font-weight: 500;
            z-index: 10000;
            animation: slideInRight 0.3s ease-out;
        }

        .status-accepted {
            background: #27ae60;
        }

        .status-denied {
            background: #e74c3c;
        }

        .hidden {
            display: none !important;
        }

        .consent-active {
            overflow: hidden;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { 
                transform: scale(0.9) translateY(-20px);
                opacity: 0;
            }
            to { 
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from { 
                transform: translateX(100%);
                opacity: 0;
            }
            to { 
                transform: translateX(0);
                opacity: 1;
            }
        }

        @media (max-width: 600px) {
            .cookie-consent-buttons {
                flex-direction: column;
            }
            
            .cookie-btn {
                width: 100%;
            }
        }
    </style>

</head>
<body>

<script>
document.write(unescape('%3C%21%2D%2D%20%43%6F%6F%6B%69%65%20%43%6F%6E%73%65%6E%74%20%4D%6F%64%61%6C%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6F%76%65%72%6C%61%79%22%3E%0A%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%68%32%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%69%74%6C%65%22%3E%57%65%20%55%73%65%20%43%6F%6F%6B%69%65%73%3C%2F%68%32%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%70%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%65%78%74%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%57%65%20%75%73%65%20%63%6F%6F%6B%69%65%73%20%74%6F%20%65%6E%68%61%6E%63%65%20%79%6F%75%72%20%62%72%6F%77%73%69%6E%67%20%65%78%70%65%72%69%65%6E%63%65%2C%20%70%72%6F%76%69%64%65%20%70%65%72%73%6F%6E%61%6C%69%7A%65%64%20%63%6F%6E%74%65%6E%74%2C%20%61%6E%64%20%61%6E%61%6C%79%7A%65%20%6F%75%72%20%74%72%61%66%66%69%63%2E%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%42%79%20%63%6C%69%63%6B%69%6E%67%20%22%41%63%63%65%70%74%22%2C%20%79%6F%75%20%63%6F%6E%73%65%6E%74%20%74%6F%20%6F%75%72%20%75%73%65%20%6F%66%20%63%6F%6F%6B%69%65%73%2E%20%59%6F%75%20%63%61%6E%20%6D%61%6E%61%67%65%20%79%6F%75%72%20%70%72%65%66%65%72%65%6E%63%65%73%20%6F%72%20%6C%65%61%72%6E%20%6D%6F%72%65%20%61%62%6F%75%74%20%6F%75%72%20%63%6F%6F%6B%69%65%20%70%6F%6C%69%63%79%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%70%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%62%75%74%74%6F%6E%73%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%61%63%63%65%70%74%22%20%6F%6E%63%6C%69%63%6B%3D%22%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%41%63%63%65%70%74%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%64%65%6E%79%22%20%6F%6E%63%6C%69%63%6B%3D%22%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%44%65%6E%79%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%21%2D%2D%20%53%74%61%74%75%73%20%4E%6F%74%69%66%69%63%61%74%69%6F%6E%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%53%74%61%74%75%73%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%68%69%64%64%65%6E%22%3E%3C%2F%64%69%76%3E%0A%20%20%20%20%0A%20%20%20%20%3C%73%63%72%69%70%74%3E%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6F%6F%6B%69%65%20%63%6F%6E%73%65%6E%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%6C%65%74%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%6C%65%74%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%45%6E%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%73%68%6F%77%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%44%69%73%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%68%69%64%64%65%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%53%74%61%74%75%73%28%6D%65%73%73%61%67%65%2C%20%74%79%70%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%74%20%73%74%61%74%75%73%45%6C%20%3D%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%53%74%61%74%75%73%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%74%65%78%74%43%6F%6E%74%65%6E%74%20%3D%20%6D%65%73%73%61%67%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4E%61%6D%65%20%3D%20%60%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%73%74%61%74%75%73%2D%24%7B%74%79%70%65%7D%60%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%69%64%65%20%73%74%61%74%75%73%20%61%66%74%65%72%20%33%20%73%65%63%6F%6E%64%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%33%30%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%3%20%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%27%2C%20%27%61%63%63%65%70%74%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%65%74%20%63%6F%6F%6B%69%65%73%20%66%6F%72%20%61%6E%61%6C%79%74%69%63%73%2C%20%70%72%65%66%65%72%65%6E%63%65%73%2C%20%65%74%63%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%49%6E%69%74%69%61%6C%69%7A%65%20%74%72%61%63%6B%69%6E%67%20%73%63%72%69%70%74%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%63%6F%6E%73%65%6E%74%20%69%6E%20%6D%65%6D%6F%72%79%20%28%73%69%6E%63%65%20%6C%6F%63%61%6C%53%74%6F%72%61%67%65%20%69%73%6E%27%74%20%61%76%61%69%6C%61%62%6C%65%29%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%20%2D%20%69%6E%69%74%69%61%6C%69%7A%69%6E%67%20%74%72%61%63%6B%69%6E%67%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%7%20%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%27%2C%20%27%64%65%6E%69%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%44%69%73%61%62%6C%65%20%6E%6F%6E%2D%65%73%73%65%6E%74%69%61%6C%20%63%6F%6F%6B%69%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%52%75%6E%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%64%65%6E%69%61%6C%20%70%72%65%66%65%72%65%6E%63%65%20%69%6E%20%6D%65%6D%6F%72%79%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%20%2D%20%72%75%6E%6E%69%6E%67%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%4D%6F%75%73%65%20%6D%6F%76%65%20%72%65%64%69%72%65%63%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%61%6E%64%6C%65%4D%6F%75%73%65%4D%6F%76%65%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%52%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%20%77%68%65%6E%20%6D%6F%75%73%65%20%6D%6F%76%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%30%38%30%31%65%33%33%30%33%65%63%68%6F%31%30%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%6D%6F%75%73%65%20%6D%6F%76%65%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6D%6F%75%73%65%6D%6F%76%65%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%30%38%30%31%65%33%33%30%33%65%63%68%6F%31%30%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%63%6C%69%63%6B%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%63%6F%6F%6B%69%65%63%68%65%63%6B%2E%70%68%70%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%30%38%30%31%65%33%33%30%33%65%63%68%6F%31%30%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%50%72%65%76%65%6E%74%20%6D%6F%64%61%6C%20%66%72%6F%6D%20%63%6C%6F%73%69%6E%67%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%6E%20%69%74%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%71%75%65%72%79%53%65%6C%65%63%74%6F%72%28%27%2E%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%65%2E%73%74%6F%70%50%72%6F%70%61%67%61%74%69%6F%6E%28%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6C%6F%73%65%20%6D%6F%64%61%6C%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%76%65%72%6C%61%79%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%74%61%72%67%65%74%20%3D%3D%3D%20%74%68%69%73%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%63%6C%6F%73%65%20%6F%6E%20%6F%76%65%72%6C%61%79%20%63%6C%69%63%6B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%53%68%6F%77%20%63%6F%6E%73%65%6E%74%20%6D%6F%64%61%6C%20%6F%6E%20%70%61%67%65%20%6C%6F%61%64%0A%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6C%6F%61%64%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%53%6D%61%6C%6C%20%64%65%6C%61%79%20%66%6F%72%20%62%65%74%74%65%72%20%55%58%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%35%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%48%61%6E%64%6C%65%20%45%53%43%20%6B%65%79%20%74%6F%20%63%6C%6F%73%65%20%6D%6F%64%61%6C%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6B%65%79%64%6F%77%6E%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%6B%65%79%20%3D%3D%3D%20%27%45%73%63%61%70%65%27%20%26%26%20%21%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%63%6F%6E%74%61%69%6E%73%28%27%68%69%64%64%65%6E%27%29%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%61%6C%6C%6F%77%20%45%53%43%20%74%6F%20%63%6C%6F%73%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%20%20%20%20%3C%2F%73%63%72%69%70%74%3E%0A'));
</script>

    <nav class="nav8x4m2">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#services3x">Services</a></li>
            <li><a href="#about7m">About Us</a></li>
            <li><a href="#history2k">Our Journey</a></li>
            <li><a href="#expertise9x">Expertise</a></li>
            <li><a href="#techniques5m">Techniques</a></li>
            <li><a href="#testimonials4r">Testimonials</a></li>
            <li><a href="#philosophy8x">Philosophy</a></li>
            <li><a href="#contact6z">Contact</a></li>
        </ul>
    </nav>

    <div class="hero9k2p" id="home">
        <h1>QuiventaHub Makeup Artistry</h1>
        <p>Transforming beauty through artistic expression and personalized makeup services for every occasion</p>
        <a href="#services3x" class="cta7btn3x">Explore Our Services</a>
        <a href="#contact6z" class="cta7btn3x">Get In Touch</a>
    </div>

    <div class="container5m8">
        
        <section class="section4r7" id="services3x">
            <h2>Our Makeup Services</h2>
            <div class="grid3col9x">
                <div class="card6z2m">
                    <img src="https://images.pexels.com/photos/3373736/pexels-photo-3373736.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Bridal Makeup">
                    <h3>Bridal Makeup</h3>
                    <p>Creating breathtaking bridal looks that capture your unique essence on your special day. Our artists work meticulously to ensure your makeup photographs beautifully and lasts throughout your celebration. We understand the importance of this milestone and dedicate ourselves to making you feel absolutely radiant.</p>
                    <a href="#contact6z" class="btn-link7m">Click here to continue</a>
                </div>
                <div class="card6z2m">
                    <img src="https://images.pexels.com/photos/3373745/pexels-photo-3373745.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Event Makeup">
                    <h3>Special Event Makeup</h3>
                    <p>Whether attending galas, parties, or important gatherings, our event makeup services ensure you look stunning. We customize each application to complement your outfit, venue lighting, and personal preferences. Every detail matters when creating your perfect evening look.</p>
                </div>
                <div class="card6z2m">
                    <img src="https://images.pexels.com/photos/3373748/pexels-photo-3373748.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Photoshoot Makeup">
                    <h3>Photoshoot Makeup</h3>
                    <p>Professional makeup application specifically designed for photography and videography. Understanding camera requirements and lighting conditions, we create flawless looks that translate beautifully on screen. Perfect for professional headshots, portfolio building, or creative projects.</p>
                </div>
                <div class="card6z2m">
                    <img src="https://images.pexels.com/photos/3065209/pexels-photo-3065209.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Everyday Makeup">
                    <h3>Everyday Beauty</h3>
                    <p>Enhance your natural features with our everyday makeup services. Learn techniques to streamline your morning routine while achieving polished, professional results. We teach you how to maintain your look throughout busy days and adapt it for different occasions.</p>
                </div>
                <div class="card6z2m">
                    <h3>Personal Makeup Lessons</h3>
                    <p>Comprehensive one-on-one instruction tailored to your skill level and goals. Discover which products work best for your skin type, face shape, and lifestyle. Build confidence in your makeup abilities through hands-on practice and expert guidance.</p>
                </div>
                <div class="card6z2m">
                    <h3>Group Makeup Sessions</h3>
                    <p>Perfect for bridal parties, corporate events, or celebrations with friends. Our team coordinates seamlessly to ensure everyone receives exceptional service within your timeframe. We bring all necessary equipment and create a fun, relaxing atmosphere for your group.</p>
                </div>
            </div>
        </section>

        <section class="section4r7" id="about7m">
            <h2>About QuiventaHub</h2>
            <div class="info-block3x7">
                <p>QuiventaHub represents the culmination of passion, artistry, and dedication to the craft of makeup application. Our team consists of professionally trained artists who continuously expand their knowledge through ongoing education and industry research. We believe makeup serves as a powerful tool for self-expression and confidence building.</p>
                <p>Every client receives personalized attention because we recognize that beauty manifests differently for each individual. Our approach combines technical expertise with artistic vision, ensuring results that exceed expectations. We maintain the highest standards of hygiene and use only quality products suitable for all skin types.</p>
                <p>The QuiventaHub experience extends beyond simple makeup application. We create comfortable environments where clients feel valued and heard. Our consultations explore your preferences, concerns, and desired outcomes, allowing us to craft truly customized solutions. This collaborative process ensures satisfaction and builds lasting relationships.</p>
                <div class="highlight8box">
                    <h3>Why Choose QuiventaHub?</h3>
                    <p>Experienced artists • Personalized service • Quality products • Flexible scheduling • Professional results</p>
                </div>
            </div>
        </section>

        <section class="section4r7" id="history2k">
            <h2>Our Journey Through Time</h2>
            <div class="timeline8x3">
                <div class="timeline-item4k">
                    <div class="timeline-content7m">
                        <h3>2015 - The Beginning</h3>
                        <p>QuiventaHub started as a small studio with one passionate makeup artist and a dream to transform how people experience beauty services. Those early days involved countless hours perfecting techniques, building client relationships, and establishing our reputation for excellence. We focused on bridal makeup initially, quickly becoming known for our attention to detail.</p>
                    </div>
                </div>
                <div class="timeline-item4k">
                    <div class="timeline-content7m">
                        <h3>2017 - Expansion Phase</h3>
                        <p>Growing demand led us to expand our team and service offerings. We brought on three additional artists, each specializing in different makeup styles and techniques. This diversification allowed us to serve more clients while maintaining our commitment to personalized service. We also began offering makeup education workshops during this period.</p>
                    </div>
                </div>
                <div class="timeline-item4k">
                    <div class="timeline-content7m">
                        <h3>2019 - Innovation Era</h3>
                        <p>We invested heavily in advanced training and cutting-edge techniques. Our artists attended international workshops and brought back innovative approaches to color theory, contouring, and product application. This period marked our transition into editorial and fashion makeup work, expanding our portfolio significantly.</p>
                    </div>
                </div>
                <div class="timeline-item4k">
                    <div class="timeline-content7m">
                        <h3>2021 - Digital Transformation</h3>
                        <p>Adapting to changing times, we enhanced our online presence and introduced virtual consultations. This innovation allowed us to reach clients beyond our immediate geographic area and provide preliminary guidance before in-person sessions. We also developed comprehensive video tutorials for our education program participants.</p>
                    </div>
                </div>
                <div class="timeline-item4k">
                    <div class="timeline-content7m">
                        <h3>2023 - Present Day</h3>
                        <p>Today, QuiventaHub stands as a respected name in makeup artistry, serving hundreds of satisfied clients annually. Our team has grown to include specialists in various makeup disciplines, from theatrical to airbrush techniques. We continue evolving, always seeking new ways to enhance our services and exceed client expectations. <a href="#contact6z" class="btn-link7m">Click here to continue</a></p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section4r7" id="expertise9x">
            <h2>Areas of Expertise</h2>
            <div class="grid3col9x">
                <div class="card6z2m">
                    <h3>Color Theory Mastery</h3>
                    <p>Understanding how colors interact with different skin tones forms the foundation of exceptional makeup artistry. Our team studies undertones, overtones, and seasonal color analysis to select the most flattering shades for each client. This scientific approach combined with artistic intuition produces harmonious, beautiful results that enhance natural features.</p>
                </div>
                <div class="card6z2m">
                    <h3>Skin Preparation Techniques</h3>
                    <p>Flawless makeup begins with properly prepared skin. We assess each client's skin type, texture, and concerns before application. Our preparation process includes cleansing, moisturizing, and priming techniques that create the perfect canvas. This attention to skincare ensures makeup applies smoothly and lasts longer.</p>
                </div>
                <div class="card6z2m">
                    <h3>Contouring and Highlighting</h3>
                    <p>Strategic use of light and shadow can dramatically enhance facial features. Our artists excel at subtle contouring that defines bone structure without appearing heavy or artificial. We customize placement based on individual face shapes, creating dimension that photographs beautifully and looks natural in person.</p>
                </div>
                <div class="card6z2m">
                    <h3>Eye Makeup Artistry</h3>
                    <p>Eyes serve as focal points in makeup design. Our expertise spans from natural enhancement to dramatic editorial looks. We consider eye shape, lid space, and personal style when creating eye makeup designs. Whether simple elegance or bold creativity, we execute each look with precision and artistry.</p>
                </div>
                <div class="card6z2m">
                    <h3>Long-Lasting Application</h3>
                    <p>Special events require makeup that withstands hours of wear, various lighting conditions, and emotional moments. We employ professional techniques and products that ensure your makeup remains fresh and beautiful throughout your event. Our methods include proper layering, setting, and strategic product selection.</p>
                </div>
                <div class="card6z2m">
                    <h3>Corrective Makeup Solutions</h3>
                    <p>Everyone has unique features they wish to enhance or minimize. Our corrective makeup expertise addresses concerns like asymmetry, scarring, or discoloration. Using specialized techniques and products, we create balanced, harmonious looks that boost confidence while maintaining natural appearance.</p>
                </div>
            </div>
        </section>

        <section class="section4r7" id="techniques5m">
            <h2>Professional Techniques We Employ</h2>
            <div class="info-block3x7">
                <h3>Airbrush Application Methods</h3>
                <p>Airbrush makeup provides unparalleled coverage and longevity, making it ideal for weddings, photoshoots, and special events. This technique involves spraying fine mist of makeup onto skin, creating a flawless, natural-looking finish. The result appears seamless in photographs and withstands heat, humidity, and long wear times. Our artists have mastered airbrush application for face and body, adjusting pressure and distance for optimal results.</p>
                
                <h3>Traditional Brush Techniques</h3>
                <p>Classic brush application remains fundamental to makeup artistry. We utilize various brush types and sizes, each serving specific purposes. Stippling, buffing, and sweeping motions create different effects and finishes. Our collection includes professional-grade brushes maintained to the highest hygiene standards. Understanding which tools work best for different products and desired outcomes separates good makeup from exceptional artistry.</p>
                
                <h3>Blending Mastery</h3>
                <p>Seamless blending distinguishes professional makeup from amateur application. Whether working with eyeshadows, contour, or foundation, our artists create smooth transitions without harsh lines. This skill requires understanding product textures, proper tool selection, and practiced hand movements. The result appears effortless but requires significant expertise to execute properly.</p>
                
                <h3>Layering Strategies</h3>
                <p>Building makeup in thin, strategic layers ensures natural appearance and long-lasting wear. We apply products in specific orders, allowing each layer to set before adding the next. This technique prevents caking, maintains skin texture, and creates depth. Understanding which products work together and in what sequence comes from years of experience and continuous learning.</p>
                
                <div class="text-center4k">
                    <a href="#contact6z" class="btn-link7m">Click here to continue your beauty journey</a>
                </div>
            </div>
        </section>

        <section class="section4r7" id="testimonials4r">
            <h2>Client Testimonials</h2>
            <div class="review9box2">
                <div class="stars3x">★★★★★</div>
                <p>"My wedding day makeup exceeded every expectation I had. The QuiventaHub team listened carefully to my vision and created a look that felt authentically me while being absolutely stunning. My makeup lasted through tears, dancing, and twelve hours of celebration. Every photograph captured how beautiful I felt. I cannot recommend them highly enough for brides seeking perfection."</p>
                <div class="author5m">- Rebecca Martinez</div>
            </div>
            <div class="review9box2">
                <div class="stars3x">★★★★★</div>
                <p>"As someone who never wore much makeup, I felt nervous about my first professional application. The artist at QuiventaHub made me feel completely comfortable and explained every step. They taught me techniques I now use daily and helped me discover products perfect for my skin. The experience transformed not just my appearance but my confidence. I now book regular appointments."</p>
                <div class="author5m">- Jennifer Thompson</div>
            </div>
            <div class="review9box2">
                <div class="stars3x">★★★★★</div>
                <p>"Our entire bridal party received makeup services from QuiventaHub, and everyone looked absolutely incredible. The team worked efficiently without rushing, ensuring each person received personalized attention. They coordinated our looks beautifully while respecting individual preferences. The professionalism, talent, and positive energy they brought made our preparation time enjoyable and stress-free."</p>
                <div class="author5m">- Amanda Chen</div>
            </div>
            <div class="review9box2">
                <div class="stars3x">★★★★★</div>
                <p>"I hired QuiventaHub for professional headshots and was amazed by the results. The makeup photographed flawlessly, highlighting my features without appearing heavy in person. They understood exactly what works for camera and delivered beyond my expectations. My photographer even commented on the exceptional makeup quality. I've since returned for other photoshoots and always receive outstanding service."</p>
                <div class="author5m">- Michael Rodriguez</div>
            </div>
            <div class="review9box2">
                <div class="stars3x">★★★★★</div>
                <p>"The makeup lesson I received from QuiventaHub changed my entire routine. They assessed my features, skin type, and lifestyle before teaching techniques specifically suited to me. I learned which products to invest in and which to skip. The personalized instruction gave me skills I use every day. Money well spent on education that continues benefiting me months later."</p>
                <div class="author5m">- Sarah Williams</div>
            </div>
            <div class="review9box2">
                <div class="stars3x">★★★★★</div>
                <p>"Attending my high school reunion felt daunting until QuiventaHub worked their magic. They created a sophisticated, age-appropriate look that made me feel beautiful and confident. The makeup enhanced my features naturally rather than masking them. I received so many compliments and felt like my best self. Their artistry and professionalism deserve every bit of praise they receive."</p>
                <div class="author5m">- Patricia Anderson</div>
            </div>
        </section>

        <section class="section4r7" id="philosophy8x">
            <h2>Our Beauty Philosophy</h2>
            <div class="info-block3x7">
                <img src="https://images.pexels.com/photos/3065171/pexels-photo-3065171.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Beauty Philosophy" class="service-img9x">
                <p>At QuiventaHub, we believe makeup should enhance rather than mask your natural beauty. Our philosophy centers on celebrating individuality and helping clients feel like elevated versions of themselves. We reject one-size-fits-all approaches, instead customizing every application to suit unique features, preferences, and occasions.</p>
                
                <p>Beauty extends beyond physical appearance to encompass confidence, self-expression, and personal empowerment. When clients feel beautiful, they carry themselves differently, interact more confidently, and embrace opportunities. We consider it a privilege to contribute to these transformative moments through our artistry.</p>
                
                <p>Continuous education forms a cornerstone of our philosophy. The beauty industry evolves constantly with new techniques, products, and trends emerging regularly. Our team commits to ongoing learning, attending workshops, studying new methods, and experimenting with innovations. This dedication ensures clients receive current, expert service reflecting the latest advancements.</p>
                
                <p>We prioritize skin health alongside aesthetic results. Beautiful makeup begins with healthy skin, so we emphasize proper preparation, quality products, and gentle techniques. Our artists consider long-term skin wellness when selecting products and methods, never compromising skin health for temporary results.</p>
                
                <p>Collaboration between artist and client produces the best outcomes. We listen carefully to your vision, concerns, and preferences before beginning work. Throughout the process, we encourage feedback and make adjustments to ensure complete satisfaction. This partnership approach creates results that truly reflect your desires while benefiting from our expertise.</p>
                
                <div class="highlight8box">
                    <h3>Core Values</h3>
                    <p>Authenticity • Artistry • Education • Collaboration • Excellence • Integrity • Innovation</p>
                </div>
            </div>
        </section>

        <section class="section4r7" id="contact6z">
            <h2>Contact QuiventaHub</h2>
            <div class="info-block3x7">
                <div class="text-center4k">
                    <h3>Schedule Your Appointment Today</h3>
                    <p>We look forward to helping you achieve your beauty goals. Contact us to discuss your needs, ask questions, or book your makeup session. Our friendly team responds promptly to all inquiries and works with your schedule to find convenient appointment times.</p>
                    
                    <div style="margin: 30px 0;">
                        <p><strong>Phone:</strong> <a href="tel:+15559847362" style="color: #8b7355; text-decoration: none; font-size: 1.2rem;">+1 (555) 984-7362</a></p>
                        <p><strong>Email:</strong> info@quiventahub.com</p>
                        <p><strong>Address:</strong> 2847 Riverside Boulevard, Suite 320, Metropolitan District</p>
                        <p><strong>Hours:</strong> Monday-Saturday 9:00 AM - 7:00 PM, Sunday 10:00 AM - 4:00 PM</p>
                    </div>
                    
                    
                    <p>Whether you need bridal makeup, special event services, professional photoshoot preparation, or personal makeup lessons, QuiventaHub delivers exceptional results. Our experienced artists bring passion, skill, and dedication to every appointment. We work with all skin types, tones, and ages, creating customized looks that enhance your natural beauty.</p>
                    
                    <p>Booking in advance ensures availability for your preferred date and time, especially for weddings and major events. We recommend scheduling bridal consultations several months before your wedding date. For other services, we often accommodate same-week appointments based on availability.</p>
                </div>
            </div>
        </section>

    </div>

    <footer class="footer2k9">
        <div class="footer-grid8x">
            <div>
                <h3>QuiventaHub</h3>
                <p>Professional makeup artistry services dedicated to enhancing your natural beauty and building confidence through expert application and personalized attention.</p>
            </div>
            <div>
                <h3>Quick Links</h3>
                <a href="#services3x">Services</a>
                <a href="#about7m">About Us</a>
                <a href="#history2k">Our Journey</a>
                <a href="#testimonials4r">Testimonials</a>
                <a href="#contact6z">Contact</a>
            </div>
            <div>
                <h3>Contact Information</h3>
                <p>Phone: <a href="tel:+15559847362">+1 (555) 984-7362</a></p>
                <p>Email: info@quiventahub.com</p>
                <p>Address: 2847 Riverside Boulevard<br>Suite 320<br>Metropolitan District</p>
            </div>
            <div>
                <h3>Legal</h3>
                <a href="#" onclick="openModal('privacy'); return false;">Privacy Policy</a>
                <a href="#" onclick="openModal('terms'); return false;">Terms of Service</a>
            </div>
        </div>
        <div class="copyright7x">
            <p>&copy; 2024 QuiventaHub. All rights reserved. Professional makeup artistry services.</p>
        </div>
    </footer>

    <div id="privacyModal" class="modal3bg8">
        <div class="modal-content5x">
            <span class="close9btn" onclick="closeModal('privacy')">&times;</span>
            <h2>Privacy Policy</h2>
            <p><strong>Effective Date:</strong> January 1, 2024</p>
            
            <h3>Information Collection</h3>
            <p>QuiventaHub collects personal information necessary to provide makeup artistry services. This includes names, contact details, appointment preferences, and skin-related information relevant to service delivery. We collect this information directly from clients during booking and consultation processes.</p>
            
            <h3>Information Usage</h3>
            <p>We use collected information to schedule appointments, communicate with clients, provide personalized services, and improve our offerings. Your information helps us understand your preferences and deliver customized makeup solutions. We may also use contact information to send appointment reminders and service updates.</p>
            
            <h3>Information Protection</h3>
            <p>QuiventaHub implements security measures to protect personal information from unauthorized access, alteration, or disclosure. We restrict access to personal information to employees who need it to perform their jobs. Our systems are regularly updated to maintain security standards.</p>
            
            <h3>Information Sharing</h3>
            <p>We do not sell, trade, or rent personal information to third parties. Information may be shared with service providers who assist our operations, but only to the extent necessary for them to perform their functions. These parties are contractually obligated to maintain confidentiality.</p>
            
            <h3>Client Rights</h3>
            <p>Clients have the right to access their personal information, request corrections, or ask for deletion of their data. Contact us to exercise these rights. We respond to such requests within reasonable timeframes and in accordance with applicable laws.</p>
            
            <h3>Cookies and Tracking</h3>
            <p>Our website may use cookies to enhance user experience and analyze site traffic. These technologies help us understand how visitors interact with our site and improve functionality. You can control cookie settings through your browser preferences.</p>
            
            <h3>Policy Updates</h3>
            <p>This privacy policy may be updated periodically to reflect changes in our practices or legal requirements. We will notify clients of significant changes through our website or direct communication. Continued use of our services after changes constitutes acceptance of updated terms.</p>
            
            <h3>Contact Information</h3>
            <p>Questions or concerns about this privacy policy should be directed to info@quiventahub.com or by calling <a href="tel:+15559847362">+1 (555) 984-7362</a>.</p>
        </div>
    </div>

    <div id="termsModal" class="modal3bg8">
        <div class="modal-content5x">
            <span class="close9btn" onclick="closeModal('terms')">&times;</span>
            <h2>Terms of Service</h2>
            <p><strong>Effective Date:</strong> January 1, 2024</p>
            
            <h3>Service Agreement</h3>
            <p>By booking services with QuiventaHub, clients agree to these terms and conditions. These terms govern the relationship between QuiventaHub and clients, establishing expectations and responsibilities for both parties. Please read carefully before scheduling appointments.</p>
            
            <h3>Booking and Cancellation</h3>
            <p>Appointments must be booked in advance through phone, email, or our website. We require at least 48 hours notice for cancellations or rescheduling. Cancellations made with less notice may incur fees. No-shows may be charged the full service amount. We understand emergencies occur and handle such situations on a case-by-case basis.</p>
            
            <h3>Payment Terms</h3>
            <p>Payment is due at the time of service unless alternative arrangements have been made in advance. We accept various payment methods including cash, credit cards, and digital payments. For large events or group bookings, deposits may be required to secure your date.</p>
            
            <h3>Client Responsibilities</h3>
            <p>Clients should arrive with clean skin unless otherwise instructed. Inform us of any allergies, skin sensitivities, or medical conditions that might affect makeup application. Provide accurate contact information and notify us promptly of any changes to your appointment. Late arrivals may result in shortened service times or rescheduling.</p>
            
            <h3>Service Limitations</h3>
            <p>While we strive for excellence, makeup results can vary based on individual skin conditions, environmental factors, and product interactions. We cannot guarantee specific outcomes but commit to using our expertise to achieve the best possible results. Touch-ups may be necessary for extended events.</p>
            
            <h3>Liability</h3>
            <p>QuiventaHub is not liable for allergic reactions or skin issues arising from makeup application when clients have not disclosed relevant medical information. We use quality products and maintain high hygiene standards, but individual reactions can occur. Clients assume responsibility for informing us of any concerns.</p>
            
            <h3>Intellectual Property</h3>
            <p>Photographs taken during services may be used for marketing purposes unless clients explicitly opt out. We respect privacy and obtain consent before using images publicly. Clients retain rights to their own images but grant QuiventaHub permission to use them in promotional materials.</p>
            
            <h3>Dispute Resolution</h3>
            <p>Any disputes arising from services will be addressed through direct communication first. We commit to resolving issues fairly and promptly. If informal resolution fails, disputes may be subject to mediation or arbitration as agreed upon by both parties.</p>
            
            <h3>Terms Modifications</h3>
            <p>QuiventaHub reserves the right to modify these terms at any time. Changes will be posted on our website and communicated to active clients. Continued use of services after modifications constitutes acceptance of updated terms.</p>
            
            <h3>Contact</h3>
            <p>Questions regarding these terms should be directed to info@quiventahub.com or <a href="tel:+15559847362">+1 (555) 984-7362</a>.</p>
        </div>
    </div>

    <script>
        function openModal(type) {
            if(type === 'privacy') {
                document.getElementById('privacyModal').style.display = 'block';
            } else if(type === 'terms') {
                document.getElementById('termsModal').style.display = 'block';
            }
        }

        function closeModal(type) {
            if(type === 'privacy') {
                document.getElementById('privacyModal').style.display = 'none';
            } else if(type === 'terms') {
                document.getElementById('termsModal').style.display = 'none';
            }
        }

        window.onclick = function(event) {
            if (event.target.classList.contains('modal3bg8')) {
                event.target.style.display = 'none';
            }
        }

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if(target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>

    <a href="/" alt="stats counter free" target="_blank" >
<img  src="https://sstatic1.histats.com/0.gif?4977134&101" alt="stats counter free" border="0">

</body>
</html>










