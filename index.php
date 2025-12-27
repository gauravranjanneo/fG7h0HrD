<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Strong | Complete E-commerce Demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #4361ee;
            --primary-dark: #3a56d4;
            --secondary: #7209b7;
            --accent: #f72585;
            --light: #f8f9fa;
            --dark: #212529;
            --gray: #6c757d;
            --light-gray: #e9ecef;
            --success: #4cc9f0;
            --warning: #f8961e;
            --danger: #f94144;
            --border-radius: 8px;
            --box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: var(--dark);
            background-color: #f9f9f9;
        }

        h1, h2, h3, h4, h5 {
            font-family: 'Roboto', sans-serif;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header & Navigation */
        header {
            background-color: white;
            box-shadow: var(--box-shadow);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .logo i {
            color: var(--accent);
        }

        .nav-links {
            display: flex;
            gap: 1.5rem;
            list-style: none;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--dark);
            font-weight: 500;
            padding: 0.5rem 0;
            position: relative;
            transition: var(--transition);
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .nav-links a.active {
            color: var(--primary);
        }

        .nav-links a.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: var(--primary);
        }

        .mobile-toggle {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--primary);
        }

        /* Main Content Area */
        main {
            padding: 2rem 0;
        }

        .page-section {
            display: none;
            animation: fadeIn 0.5s ease;
        }

        .page-section.active {
            display: block;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .section-header {
            text-align: center;
            margin-bottom: 2.5rem;
        }

        .section-header h2 {
            font-size: 2.2rem;
            color: var(--dark);
            margin-bottom: 0.5rem;
        }

        .section-header p {
            color: var(--gray);
            max-width: 600px;
            margin: 0 auto;
        }

        /* Home/Landing Page */
        .hero {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            padding: 4rem 2rem;
            border-radius: var(--border-radius);
            text-align: center;
            margin-bottom: 3rem;
        }

        .hero h1 {
            font-size: 2.8rem;
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto 2rem;
            opacity: 0.9;
        }

        .btn {
            display: inline-block;
            padding: 0.8rem 1.8rem;
            background-color: var(--accent);
            color: white;
            border: none;
            border-radius: var(--border-radius);
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            transition: var(--transition);
        }

        .btn:hover {
            background-color: #e11575;
            transform: translateY(-3px);
            box-shadow: 0 7px 15px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: var(--primary);
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
        }

        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .feature-card {
            background-color: white;
            padding: 2rem;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            text-align: center;
            transition: var(--transition);
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .feature-card i {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 1rem;
        }

        /* Products Section */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .product-card {
            background-color: white;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--box-shadow);
            transition: var(--transition);
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-img {
            height: 200px;
            background-color: var(--light-gray);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
            color: var(--primary);
        }

        .product-info {
            padding: 1.5rem;
        }

        .product-title {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }

        .product-price {
            font-size: 1.4rem;
            color: var(--primary);
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .product-actions {
            display: flex;
            gap: 0.5rem;
        }

        .btn-cart {
            background-color: var(--light-gray);
            color: var(--dark);
            padding: 0.5rem;
            border-radius: var(--border-radius);
            border: none;
            cursor: pointer;
            flex-grow: 1;
            transition: var(--transition);
        }

        .btn-cart:hover {
            background-color: var(--primary);
            color: white;
        }

        /* Cart Page */
        .cart-container {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 2rem;
        }

        .cart-items {
            background-color: white;
            border-radius: var(--border-radius);
            padding: 1.5rem;
            box-shadow: var(--box-shadow);
        }

        .cart-item {
            display: grid;
            grid-template-columns: 80px 1fr auto;
            gap: 1rem;
            padding: 1rem 0;
            border-bottom: 1px solid var(--light-gray);
        }

        .cart-item:last-child {
            border-bottom: none;
        }

        .cart-item-img {
            width: 80px;
            height: 80px;
            background-color: var(--light-gray);
            border-radius: var(--border-radius);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: var(--primary);
        }

        .cart-summary {
            background-color: white;
            border-radius: var(--border-radius);
            padding: 1.5rem;
            box-shadow: var(--box-shadow);
            height: fit-content;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid var(--light-gray);
        }

        .summary-total {
            font-weight: 700;
            font-size: 1.3rem;
            color: var(--primary);
        }

        /* Admin Dashboard */
        .dashboard-container {
            display: grid;
            grid-template-columns: 250px 1fr;
            gap: 2rem;
        }

        .dashboard-sidebar {
            background-color: white;
            border-radius: var(--border-radius);
            padding: 1.5rem;
            box-shadow: var(--box-shadow);
        }

        .dashboard-nav {
            list-style: none;
        }

        .dashboard-nav li {
            margin-bottom: 0.5rem;
        }

        .dashboard-nav a {
            display: block;
            padding: 0.8rem 1rem;
            text-decoration: none;
            color: var(--dark);
            border-radius: var(--border-radius);
            transition: var(--transition);
        }

        .dashboard-nav a:hover, .dashboard-nav a.active {
            background-color: var(--primary);
            color: white;
        }

        .dashboard-content {
            background-color: white;
            border-radius: var(--border-radius);
            padding: 1.5rem;
            box-shadow: var(--box-shadow);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background-color: var(--light);
            padding: 1.5rem;
            border-radius: var(--border-radius);
            text-align: center;
        }

        .stat-value {
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--primary);
        }

        /* Blog/CMS */
        .blog-container {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 2rem;
        }

        .blog-posts {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .blog-post {
            background-color: white;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--box-shadow);
        }

        .blog-post-img {
            height: 200px;
            background-color: var(--light-gray);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: var(--primary);
        }

        .blog-post-content {
            padding: 1.5rem;
        }

        .blog-sidebar {
            background-color: white;
            border-radius: var(--border-radius);
            padding: 1.5rem;
            box-shadow: var(--box-shadow);
            height: fit-content;
        }

        /* Login/Register */
        .auth-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 60vh;
        }

        .auth-card {
            background-color: white;
            border-radius: var(--border-radius);
            padding: 2.5rem;
            box-shadow: var(--box-shadow);
            width: 100%;
            max-width: 450px;
        }

        .auth-tabs {
            display: flex;
            margin-bottom: 2rem;
            border-bottom: 1px solid var(--light-gray);
        }

        .auth-tab {
            padding: 0.8rem 1.5rem;
            background: none;
            border: none;
            font-weight: 600;
            color: var(--gray);
            cursor: pointer;
            position: relative;
        }

        .auth-tab.active {
            color: var(--primary);
        }

        .auth-tab.active::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: var(--primary);
        }

        .auth-form {
            display: none;
        }

        .auth-form.active {
            display: block;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 0.8rem 1rem;
            border: 1px solid var(--light-gray);
            border-radius: var(--border-radius);
            font-family: 'Poppins', sans-serif;
        }

        /* Footer */
        footer {
            background-color: var(--dark);
            color: white;
            padding: 3rem 0 1.5rem;
            margin-top: 3rem;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-column h3 {
            color: white;
            margin-bottom: 1.5rem;
            font-size: 1.3rem;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 0.8rem;
        }

        .footer-links a {
            color: #adb5bd;
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: white;
        }

        .copyright {
            text-align: center;
            padding-top: 1.5rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #adb5bd;
            font-size: 0.9rem;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .cart-container, .dashboard-container, .blog-container {
                grid-template-columns: 1fr;
            }
            
            .hero h1 {
                font-size: 2.2rem;
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background-color: white;
                flex-direction: column;
                padding: 1rem;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            }
            
            .nav-links.active {
                display: flex;
            }
            
            .mobile-toggle {
                display: block;
            }
            
            .hero {
                padding: 3rem 1rem;
            }
            
            .hero h1 {
                font-size: 1.8rem;
            }
            
            .section-header h2 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header & Navigation -->
    <header>
        <div class="container">
            <nav class="navbar">
                <a href="#" class="logo">
                    <i class="fas fa-shopping-bag"></i>
                    Shopping Strong
                </a>
                
                <ul class="nav-links">
                    <li><a href="#home" class="nav-link active" data-page="home">Home</a></li>
                    <li><a href="#shop" class="nav-link" data-page="shop">Shop</a></li>
                    <li><a href="#cart" class="nav-link" data-page="cart">Cart <span id="cart-count">(3)</span></a></li>
                    <li><a href="#admin" class="nav-link" data-page="admin">Admin Dashboard</a></li>
                    <li><a href="#blog" class="nav-link" data-page="blog">Blog</a></li>
                    <li><a href="#login" class="nav-link" data-page="login">Login</a></li>
                </ul>
                
                <div class="mobile-toggle">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- Main Content Area -->
    <main>
        <div class="container">
            <!-- Home/Landing Page -->
            <section id="home" class="page-section active">
                <div class="hero">
                    <h1>Welcome to Shopping Strong</h1>
                    <p>Your one-stop destination for premium products, seamless shopping experience, and powerful business tools. We combine e-commerce excellence with enterprise solutions.</p>
                    <a href="#shop" class="btn" data-page="shop">Start Shopping</a>
                </div>
                
                <div class="section-header">
                    <h2>Why Choose Shopping Strong?</h2>
                    <p>Our platform offers everything you need for modern business and shopping</p>
                </div>
                
                <div class="features">
                    <div class="feature-card">
                        <i class="fas fa-store"></i>
                        <h3>E-commerce Store</h3>
                        <p>Beautifully designed online store with product listings, cart, and secure checkout process.</p>
                    </div>
                    
                    <div class="feature-card">
                        <i class="fas fa-chart-line"></i>
                        <h3>Admin Dashboard</h3>
                        <p>Powerful CRM and analytics dashboard to manage products, orders, customers, and sales.</p>
                    </div>
                    
                    <div class="feature-card">
                        <i class="fas fa-blog"></i>
                        <h3>Blog & CMS</h3>
                        <p>Integrated content management system to publish articles, news, and updates for your audience.</p>
                    </div>
                </div>
            </section>
            
            <!-- Shop Page -->
            <section id="shop" class="page-section">
                <div class="section-header">
                    <h2>Our Products</h2>
                    <p>Discover our curated collection of premium products</p>
                </div>
                
                <div class="products-grid">
                    <!-- Products will be dynamically added by JavaScript -->
                </div>
            </section>
            
            <!-- Cart Page -->
            <section id="cart" class="page-section">
                <div class="section-header">
                    <h2>Your Shopping Cart</h2>
                    <p>Review your items before checkout</p>
                </div>
                
                <div class="cart-container">
                    <div class="cart-items">
                        <!-- Cart items will be dynamically added by JavaScript -->
                    </div>
                    
                    <div class="cart-summary">
                        <h3>Order Summary</h3>
                        <div class="summary-row">
                            <span>Subtotal</span>
                            <span id="subtotal">$0.00</span>
                        </div>
                        <div class="summary-row">
                            <span>Shipping</span>
                            <span>$5.99</span>
                        </div>
                        <div class="summary-row">
                            <span>Tax</span>
                            <span id="tax">$0.00</span>
                        </div>
                        <div class="summary-row summary-total">
                            <span>Total</span>
                            <span id="total">$0.00</span>
                        </div>
                        <a href="#checkout" class="btn btn-primary" data-page="checkout" style="width: 100%; text-align: center; margin-top: 1rem;">Proceed to Checkout</a>
                    </div>
                </div>
            </section>
            
            <!-- Checkout Demo Page -->
            <section id="checkout" class="page-section">
                <div class="section-header">
                    <h2>Checkout Demo</h2>
                    <p>This is a demonstration of a payment gateway integration</p>
                </div>
                
                <div class="auth-card">
                    <h3>Payment Information</h3>
                    <p style="margin-bottom: 1.5rem; color: var(--gray);">This is a demo page showing how payment integration would appear. In a real application, this would connect to Stripe, PayPal, or another payment processor.</p>
                    
                    <div class="form-group">
                        <label>Card Number</label>
                        <input type="text" class="form-control" placeholder="1234 5678 9012 3456" value="4242 4242 4242 4242">
                    </div>
                    
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                        <div class="form-group">
                            <label>Expiry Date</label>
                            <input type="text" class="form-control" placeholder="MM/YY" value="12/25">
                        </div>
                        <div class="form-group">
                            <label>CVV</label>
                            <input type="text" class="form-control" placeholder="123" value="123">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Name on Card</label>
                        <input type="text" class="form-control" placeholder="John Doe" value="Demo User">
                    </div>
                    
                    <div class="summary-row summary-total" style="margin-top: 1.5rem;">
                        <span>Total to Pay</span>
                        <span id="payment-total">$0.00</span>
                    </div>
                    
                    <button class="btn btn-primary" style="width: 100%; margin-top: 1.5rem;" id="pay-now">
                        <i class="fas fa-lock"></i> Pay Now
                    </button>
                    
                    <p style="text-align: center; margin-top: 1rem; color: var(--gray); font-size: 0.9rem;">
                        <i class="fas fa-info-circle"></i> This is a demo. No real payment will be processed.
                    </p>
                </div>
            </section>
            
            <!-- Admin Dashboard -->
            <section id="admin" class="page-section">
                <div class="section-header">
                    <h2>Admin Dashboard</h2>
                    <p>Manage your e-commerce store, customers, and orders</p>
                </div>
                
                <div class="dashboard-container">
                    <div class="dashboard-sidebar">
                        <ul class="dashboard-nav">
                            <li><a href="#" class="active"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                            <li><a href="#"><i class="fas fa-box"></i> Products</a></li>
                            <li><a href="#"><i class="fas fa-shopping-cart"></i> Orders</a></li>
                            <li><a href="#"><i class="fas fa-users"></i> Customers</a></li>
                            <li><a href="#"><i class="fas fa-chart-bar"></i> Analytics</a></li>
                            <li><a href="#"><i class="fas fa-cog"></i> Settings</a></li>
                        </ul>
                    </div>
                    
                    <div class="dashboard-content">
                        <h3>Business Overview</h3>
                        <p style="margin-bottom: 1.5rem; color: var(--gray);">Welcome back, Admin! Here's what's happening with your store today.</p>
                        
                        <div class="stats-grid">
                            <div class="stat-card">
                                <div class="stat-value">$4,256</div>
                                <p>Today's Revenue</p>
                            </div>
                            <div class="stat-card">
                                <div class="stat-value">124</div>
                                <p>New Orders</p>
                            </div>
                            <div class="stat-card">
                                <div class="stat-value">89</div>
                                <p>New Customers</p>
                            </div>
                            <div class="stat-card">
                                <div class="stat-value">96%</div>
                                <p>Satisfaction Rate</p>
                            </div>
                        </div>
                        
                        <h3>Recent Orders</h3>
                        <div style="overflow-x: auto;">
                            <table style="width: 100%; border-collapse: collapse; margin-top: 1rem;">
                                <thead>
                                    <tr style="background-color: var(--light);">
                                        <th style="padding: 1rem; text-align: left;">Order ID</th>
                                        <th style="padding: 1rem; text-align: left;">Customer</th>
                                        <th style="padding: 1rem; text-align: left;">Date</th>
                                        <th style="padding: 1rem; text-align: left;">Amount</th>
                                        <th style="padding: 1rem; text-align: left;">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="border-bottom: 1px solid var(--light-gray);">
                                        <td style="padding: 1rem;">#ORD-7842</td>
                                        <td style="padding: 1rem;">John Smith</td>
                                        <td style="padding: 1rem;">Jun 12, 2023</td>
                                        <td style="padding: 1rem;">$245.99</td>
                                        <td style="padding: 1rem;"><span style="background-color: #d4edda; color: #155724; padding: 0.3rem 0.6rem; border-radius: 20px; font-size: 0.85rem;">Delivered</span></td>
                                    </tr>
                                    <tr style="border-bottom: 1px solid var(--light-gray);">
                                        <td style="padding: 1rem;">#ORD-7841</td>
                                        <td style="padding: 1rem;">Emma Johnson</td>
                                        <td style="padding: 1rem;">Jun 11, 2023</td>
                                        <td style="padding: 1rem;">$129.50</td>
                                        <td style="padding: 1rem;"><span style="background-color: #fff3cd; color: #856404; padding: 0.3rem 0.6rem; border-radius: 20px; font-size: 0.85rem;">Processing</span></td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 1rem;">#ORD-7840</td>
                                        <td style="padding: 1rem;">Michael Brown</td>
                                        <td style="padding: 1rem;">Jun 10, 2023</td>
                                        <td style="padding: 1rem;">$78.99</td>
                                        <td style="padding: 1rem;"><span style="background-color: #cce5ff; color: #004085; padding: 0.3rem 0.6rem; border-radius: 20px; font-size: 0.85rem;">Shipped</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Blog/CMS -->
            <section id="blog" class="page-section">
                <div class="section-header">
                    <h2>Our Blog</h2>
                    <p>Latest news, tips, and updates from Shopping Strong</p>
                </div>
                
                <div class="blog-container">
                    <div class="blog-posts">
                        <div class="blog-post">
                            <div class="blog-post-img">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="blog-post-content">
                                <h3>The Future of E-commerce: Mobile Shopping Trends</h3>
                                <p style="color: var(--gray); margin-bottom: 1rem;">Published on June 10, 2023 by Admin</p>
                                <p>Mobile commerce continues to grow at an unprecedented rate. With more than 70% of e-commerce traffic coming from mobile devices, businesses must optimize their shopping experience for smartphones and tablets.</p>
                                <a href="#" class="btn" style="margin-top: 1rem;">Read More</a>
                            </div>
                        </div>
                        
                        <div class="blog-post">
                            <div class="blog-post-img">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div class="blog-post-content">
                                <h3>Ensuring Security in Online Transactions</h3>
                                <p style="color: var(--gray); margin-bottom: 1rem;">Published on May 28, 2023 by Admin</p>
                                <p>Security is paramount in e-commerce. Learn about the latest encryption technologies, fraud detection systems, and best practices to protect your customers' data and build trust in your online store.</p>
                                <a href="#" class="btn" style="margin-top: 1rem;">Read More</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="blog-sidebar">
                        <h3>Categories</h3>
                        <ul class="footer-links">
                            <li><a href="#">E-commerce Trends</a></li>
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">Business Tips</a></li>
                            <li><a href="#">Customer Experience</a></li>
                            <li><a href="#">Marketing</a></li>
                        </ul>
                        
                        <h3 style="margin-top: 2rem;">Popular Posts</h3>
                        <ul class="footer-links">
                            <li><a href="#">How to Increase Your Online Sales</a></li>
                            <li><a href="#">The Power of Personalization</a></li>
                            <li><a href="#">Building Customer Loyalty</a></li>
                            <li><a href="#">SEO for E-commerce Stores</a></li>
                        </ul>
                        
                        <div style="margin-top: 2rem; padding: 1.5rem; background-color: var(--light); border-radius: var(--border-radius);">
                            <h3>Subscribe</h3>
                            <p style="margin-bottom: 1rem; font-size: 0.95rem;">Get the latest posts delivered right to your inbox.</p>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your email address">
                            </div>
                            <button class="btn btn-primary" style="width: 100%;">Subscribe</button>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Login/Register System -->
            <section id="login" class="page-section">
                <div class="auth-container">
                    <div class="auth-card">
                        <div class="auth-tabs">
                            <button class="auth-tab active" data-tab="login">Login</button>
                            <button class="auth-tab" data-tab="register">Register</button>
                        </div>
                        
                        <div id="login-form" class="auth-form active">
                            <h3>Welcome Back</h3>
                            <p style="margin-bottom: 1.5rem; color: var(--gray);">Login to your account to access the dashboard and manage your store.</p>
                            
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="you@example.com" id="login-email">
                            </div>
                            
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Your password" id="login-password">
                            </div>
                            
                            <button class="btn btn-primary" style="width: 100%;" id="login-btn">Login</button>
                            
                            <p style="text-align: center; margin-top: 1rem; color: var(--gray); font-size: 0.9rem;">
                                <a href="#" style="color: var(--primary);">Forgot your password?</a>
                            </p>
                        </div>
                        
                        <div id="register-form" class="auth-form">
                            <h3>Create Account</h3>
                            <p style="margin-bottom: 1.5rem; color: var(--gray);">Register for a new account to access all features of Shopping Strong.</p>
                            
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control" placeholder="John Doe" id="register-name">
                            </div>
                            
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="you@example.com" id="register-email">
                            </div>
                            
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Create a password" id="register-password">
                            </div>
                            
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" placeholder="Confirm your password" id="register-confirm">
                            </div>
                            
                            <button class="btn btn-primary" style="width: 100%;" id="register-btn">Create Account</button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>Shopping Strong</h3>
                    <p style="color: #adb5bd; margin-bottom: 1rem;">A complete e-commerce demo project with business website, admin dashboard, blog, and payment integration.</p>
                    <p style="color: #adb5bd;">Perfect for showcasing full-stack development skills on your resume.</p>
                </div>
                
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#home" data-page="home">Home</a></li>
                        <li><a href="#shop" data-page="shop">Shop</a></li>
                        <li><a href="#cart" data-page="cart">Cart</a></li>
                        <li><a href="#admin" data-page="admin">Admin Dashboard</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Resources</h3>
                    <ul class="footer-links">
                        <li><a href="#blog" data-page="blog">Blog</a></li>
                        <li><a href="#">Documentation</a></li>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">API Reference</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Contact Us</h3>
                    <ul class="footer-links">
                        <li><i class="fas fa-map-marker-alt" style="margin-right: 0.5rem;"></i> 123 Business Ave, Suite 100</li>
                        <li><i class="fas fa-phone" style="margin-right: 0.5rem;"></i> (555) 123-4567</li>
                        <li><i class="fas fa-envelope" style="margin-right: 0.5rem;"></i> info@shoppingstrong.demo</li>
                    </ul>
                </div>
            </div>
            
            <div class="copyright">
                <p>&copy; 2023 Shopping Strong Demo Project. Built with HTML, CSS, and JavaScript for portfolio showcase.</p>
            </div>
        </div>
    </footer>

    <script>
        // DOM Elements
        const navLinks = document.querySelectorAll('.nav-link');
        const pageSections = document.querySelectorAll('.page-section');
        const mobileToggle = document.querySelector('.mobile-toggle');
        const navMenu = document.querySelector('.nav-links');
        const authTabs = document.querySelectorAll('.auth-tab');
        const authForms = document.querySelectorAll('.auth-form');
        const cartCount = document.getElementById('cart-count');
        const productsGrid = document.querySelector('.products-grid');
        const cartItems = document.querySelector('.cart-items');
        const subtotalEl = document.getElementById('subtotal');
        const taxEl = document.getElementById('tax');
        const totalEl = document.getElementById('total');
        const paymentTotalEl = document.getElementById('payment-total');
        const payNowBtn = document.getElementById('pay-now');
        
        // Sample product data
        const products = [
            { id: 1, name: "Wireless Headphones", price: 89.99, icon: "fas fa-headphones", category: "electronics" },
            { id: 2, name: "Smart Watch", price: 249.99, icon: "fas fa-clock", category: "electronics" },
            { id: 3, name: "Laptop Backpack", price: 49.99, icon: "fas fa-briefcase", category: "accessories" },
            { id: 4, name: "Bluetooth Speaker", price: 79.99, icon: "fas fa-volume-up", category: "electronics" },
            { id: 5, name: "Fitness Tracker", price: 129.99, icon: "fas fa-running", category: "fitness" },
            { id: 6, name: "Coffee Maker", price: 149.99, icon: "fas fa-coffee", category: "home" },
            { id: 7, name: "Desk Lamp", price: 34.99, icon: "fas fa-lightbulb", category: "home" },
            { id: 8, name: "Yoga Mat", price: 29.99, icon: "fas fa-spa", category: "fitness" }
        ];
        
        // Sample cart data
        let cart = [
            { id: 1, name: "Wireless Headphones", price: 89.99, icon: "fas fa-headphones", quantity: 1 },
            { id: 2, name: "Smart Watch", price: 249.99, icon: "fas fa-clock", quantity: 1 },
            { id: 3, name: "Laptop Backpack", price: 49.99, icon: "fas fa-briefcase", quantity: 2 }
        ];
        
        // Initialize the application
        function init() {
            // Set up navigation
            setupNavigation();
            
            // Load products
            loadProducts();
            
            // Load cart
            loadCart();
            
            // Update cart count
            updateCartCount();
            
            // Calculate cart totals
            calculateCartTotals();
            
            // Set up auth tabs
            setupAuthTabs();
            
            // Set up event listeners
            setupEventListeners();
        }
        
        // Set up navigation between pages
        function setupNavigation() {
            navLinks.forEach(link => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    
                    // Get target page from data attribute
                    const targetPage = link.getAttribute('data-page');
                    
                    // Update active nav link
                    navLinks.forEach(navLink => navLink.classList.remove('active'));
                    link.classList.add('active');
                    
                    // Show target page
                    pageSections.forEach(section => {
                        section.classList.remove('active');
                        if (section.id === targetPage) {
                            section.classList.add('active');
                        }
                    });
                    
                    // Close mobile menu if open
                    if (navMenu.classList.contains('active')) {
                        navMenu.classList.remove('active');
                    }
                    
                    // Update cart count in nav for cart page
                    if (targetPage === 'cart') {
                        updateCartCount();
                        calculateCartTotals();
                    }
                    
                    // Update payment total for checkout page
                    if (targetPage === 'checkout') {
                        calculateCartTotals();
                    }
                });
            });
            
            // Mobile menu toggle
            mobileToggle.addEventListener('click', () => {
                navMenu.classList.toggle('active');
            });
            
            // Footer links navigation
            const footerLinks = document.querySelectorAll('.footer-links a');
            footerLinks.forEach(link => {
                if (link.hasAttribute('data-page')) {
                    link.addEventListener('click', (e) => {
                        e.preventDefault();
                        const targetPage = link.getAttribute('data-page');
                        
                        // Update active nav link
                        navLinks.forEach(navLink => navLink.classList.remove('active'));
                        document.querySelector(`.nav-link[data-page="${targetPage}"]`).classList.add('active');
                        
                        // Show target page
                        pageSections.forEach(section => {
                            section.classList.remove('active');
                            if (section.id === targetPage) {
                                section.classList.add('active');
                            }
                        });
                    });
                }
            });
        }
        
        // Load products into the shop page
        function loadProducts() {
            productsGrid.innerHTML = '';
            
            products.forEach(product => {
                const productCard = document.createElement('div');
                productCard.className = 'product-card';
                productCard.innerHTML = `
                    <div class="product-img">
                        <i class="${product.icon}"></i>
                    </div>
                    <div class="product-info">
                        <h4 class="product-title">${product.name}</h4>
                        <div class="product-price">$${product.price.toFixed(2)}</div>
                        <div class="product-actions">
                            <button class="btn-cart" data-id="${product.id}">
                                <i class="fas fa-cart-plus"></i> Add to Cart
                            </button>
                            <button class="btn-cart" style="flex-grow: 0; width: 40px;">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                `;
                
                productsGrid.appendChild(productCard);
            });
            
            // Add event listeners to "Add to Cart" buttons
            document.querySelectorAll('.btn-cart[data-id]').forEach(button => {
                button.addEventListener('click', (e) => {
                    const productId = parseInt(e.target.closest('.btn-cart').getAttribute('data-id'));
                    addToCart(productId);
                });
            });
        }
        
        // Load cart items into the cart page
        function loadCart() {
            cartItems.innerHTML = '';
            
            if (cart.length === 0) {
                cartItems.innerHTML = '<p style="text-align: center; padding: 2rem;">Your cart is empty. <a href="#shop" data-page="shop" style="color: var(--primary);">Start shopping</a></p>';
                return;
            }
            
            cart.forEach(item => {
                const cartItem = document.createElement('div');
                cartItem.className = 'cart-item';
                cartItem.innerHTML = `
                    <div class="cart-item-img">
                        <i class="${item.icon}"></i>
                    </div>
                    <div>
                        <h4>${item.name}</h4>
                        <p>$${item.price.toFixed(2)} each</p>
                        <div style="display: flex; align-items: center; margin-top: 0.5rem;">
                            <button class="btn-cart" data-id="${item.id}" data-action="decrease" style="width: 30px; height: 30px; padding: 0;">
                                <i class="fas fa-minus"></i>
                            </button>
                            <span style="margin: 0 1rem; font-weight: 600;">${item.quantity}</span>
                            <button class="btn-cart" data-id="${item.id}" data-action="increase" style="width: 30px; height: 30px; padding: 0;">
                                <i class="fas fa-plus"></i>
                            </button>
                            <button class="btn-cart" data-id="${item.id}" data-action="remove" style="margin-left: 1rem; background-color: transparent; color: var(--danger);">
                                <i class="fas fa-trash"></i> Remove
                            </button>
                        </div>
                    </div>
                    <div style="text-align: right;">
                        <h4>$${(item.price * item.quantity).toFixed(2)}</h4>
                    </div>
                `;
                
                cartItems.appendChild(cartItem);
            });
            
            // Add event listeners to cart buttons
            document.querySelectorAll('.cart-item .btn-cart').forEach(button => {
                button.addEventListener('click', (e) => {
                    const productId = parseInt(button.getAttribute('data-id'));
                    const action = button.getAttribute('data-action');
                    
                    if (action === 'increase') {
                        increaseQuantity(productId);
                    } else if (action === 'decrease') {
                        decreaseQuantity(productId);
                    } else if (action === 'remove') {
                        removeFromCart(productId);
                    }
                });
            });
        }
        
        // Add product to cart
        function addToCart(productId) {
            const product = products.find(p => p.id === productId);
            const existingItem = cart.find(item => item.id === productId);
            
            if (existingItem) {
                existingItem.quantity++;
            } else {
                cart.push({
                    id: product.id,
                    name: product.name,
                    price: product.price,
                    icon: product.icon,
                    quantity: 1
                });
            }
            
            updateCartCount();
            showNotification(`${product.name} added to cart!`);
        }
        
        // Increase item quantity in cart
        function increaseQuantity(productId) {
            const item = cart.find(item => item.id === productId);
            if (item) {
                item.quantity++;
                updateCart();
            }
        }
        
        // Decrease item quantity in cart
        function decreaseQuantity(productId) {
            const item = cart.find(item => item.id === productId);
            if (item) {
                if (item.quantity > 1) {
                    item.quantity--;
                } else {
                    removeFromCart(productId);
                    return;
                }
                updateCart();
            }
        }
        
        // Remove item from cart
        function removeFromCart(productId) {
            cart = cart.filter(item => item.id !== productId);
            updateCart();
            showNotification('Item removed from cart');
        }
        
        // Update cart display and totals
        function updateCart() {
            loadCart();
            updateCartCount();
            calculateCartTotals();
        }
        
        // Update cart count in navigation
        function updateCartCount() {
            const totalItems = cart.reduce((total, item) => total + item.quantity, 0);
            cartCount.textContent = `(${totalItems})`;
        }
        
        // Calculate cart totals
        function calculateCartTotals() {
            const subtotal = cart.reduce((total, item) => total + (item.price * item.quantity), 0);
            const tax = subtotal * 0.08; // 8% tax
            const shipping = 5.99;
            const total = subtotal + tax + shipping;
            
            subtotalEl.textContent = `$${subtotal.toFixed(2)}`;
            taxEl.textContent = `$${tax.toFixed(2)}`;
            totalEl.textContent = `$${total.toFixed(2)}`;
            paymentTotalEl.textContent = `$${total.toFixed(2)}`;
        }
        
        // Set up authentication tabs
        function setupAuthTabs() {
            authTabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    const tabName = tab.getAttribute('data-tab');
                    
                    // Update active tab
                    authTabs.forEach(t => t.classList.remove('active'));
                    tab.classList.add('active');
                    
                    // Show active form
                    authForms.forEach(form => {
                        form.classList.remove('active');
                        if (form.id === `${tabName}-form`) {
                            form.classList.add('active');
                        }
                    });
                });
            });
        }
        
        // Set up event listeners
        function setupEventListeners() {
            // Login button
            document.getElementById('login-btn').addEventListener('click', () => {
                const email = document.getElementById('login-email').value;
                const password = document.getElementById('login-password').value;
                
                if (email && password) {
                    showNotification('Login successful! Redirecting to dashboard...');
                    setTimeout(() => {
                        // Simulate redirect to admin dashboard
                        document.querySelector('.nav-link[data-page="admin"]').click();
                    }, 1500);
                } else {
                    showNotification('Please fill in all fields', 'error');
                }
            });
            
            // Register button
            document.getElementById('register-btn').addEventListener('click', () => {
                const name = document.getElementById('register-name').value;
                const email = document.getElementById('register-email').value;
                const password = document.getElementById('register-password').value;
                const confirm = document.getElementById('register-confirm').value;
                
                if (name && email && password && confirm) {
                    if (password === confirm) {
                        showNotification('Account created successfully! You can now login.');
                        // Switch to login tab
                        document.querySelector('.auth-tab[data-tab="login"]').click();
                    } else {
                        showNotification('Passwords do not match', 'error');
                    }
                } else {
                    showNotification('Please fill in all fields', 'error');
                }
            });
            
            // Pay now button
            payNowBtn.addEventListener('click', () => {
                showNotification('Payment processed successfully! This is a demo - no real transaction occurred.');
                
                // Clear cart after successful payment
                setTimeout(() => {
                    cart = [];
                    updateCart();
                    document.querySelector('.nav-link[data-page="home"]').click();
                }, 2000);
            });
        }
        
        // Show notification
        function showNotification(message, type = 'success') {
            // Remove existing notification
            const existingNotification = document.querySelector('.notification');
            if (existingNotification) {
                existingNotification.remove();
            }
            
            // Create notification element
            const notification = document.createElement('div');
            notification.className = `notification ${type}`;
            notification.innerHTML = `
                <div style="position: fixed; top: 100px; right: 20px; background-color: ${type === 'error' ? '#f8d7da' : '#d4edda'}; 
                            color: ${type === 'error' ? '#721c24' : '#155724'}; padding: 1rem 1.5rem; border-radius: var(--border-radius); 
                            box-shadow: var(--box-shadow); z-index: 10000; display: flex; align-items: center; gap: 0.5rem;">
                    <i class="fas fa-${type === 'error' ? 'exclamation-circle' : 'check-circle'}"></i>
                    <span>${message}</span>
                </div>
            `;
            
            document.body.appendChild(notification);
            
            // Remove notification after 3 seconds
            setTimeout(() => {
                notification.remove();
            }, 3000);
        }
        
        // Initialize the application
        document.addEventListener('DOMContentLoaded', init);
    </script>
</body>
</html>
