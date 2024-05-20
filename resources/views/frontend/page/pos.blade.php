@extends('frontend.layouts.master')

@section('content')
          <!-- Page Header Start -->
          <div class="container-fluid page-header py-5" data-wow-delay="0.1s">
            <div class="container text-center py-5">
                <h1 class="text-white">POS Portfilio Details</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('portfolio') }}">Portfolio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">POS</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->

   <!-- Page Header End -->
   <div class="container top-bottom mb-5 wow fadeIn" data-wow-delay="0.1s">
    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-Summary-tab" data-bs-toggle="pill" data-bs-target="#pills-Summary" type="button" role="tab" aria-controls="pills-Summary" aria-selected="true">Summary</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-details-tab" data-bs-toggle="pill" data-bs-target="#pills-details" type="button" role="tab" aria-controls="pills-details" aria-selected="false">Details</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-video-tab" data-bs-toggle="pill" data-bs-target="#pills-video" type="button" role="tab" aria-controls="pills-video" aria-selected="false">Video</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-link-tab" data-bs-toggle="pill" data-bs-target="#pills-link" type="button" role="tab" aria-controls="pills-link" aria-selected="false">Link</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-aeon-tab" data-bs-toggle="pill" data-bs-target="#pills-aeon" type="button" role="tab" aria-controls="pills-aeon" aria-selected="false">Review</button>
        </li>

    </ul>
    <hr>
    <div class="tab-content slide-section" id="pills-tabContent">
        <div class="tab-pane fade slide-section show active" id="pills-Summary" role="tabpanel" aria-labelledby="pills-Summary-tab" tabindex="0">
            <p>A point of sale (POS) is a place where a customer executes the payment for goods or services and where sales taxes may become payable. A POS transaction may occur in person or online, with receipts generated either in print or electronically. Cloud-based POS systems are becoming increasingly popular among merchants.
                <br><br>
            Absolutely! A point of sale (POS) system is essentially the central hub where a customer finalizes their purchase transaction for goods or services. Whether it's a traditional brick-and-mortar store or an online shop, the POS is where the exchange of money for products or services happens. Here are some key points:
                <br><br>
            In-person and Online Transactions: POS transactions can occur both in physical stores and online platforms. In physical stores, it's the checkout counter where customers pay for their items. In online transactions, it's the virtual equivalent where customers finalize their purchases through a website or app.
                <br><br>
            Payment Execution: At the POS, various payment methods are accepted, including cash, credit/debit cards, mobile payments, and increasingly, cryptocurrencies. The POS system facilitates the processing of these payments securely and efficiently.
                <br><br>
            Sales Tax Calculation: Depending on the jurisdiction, sales taxes may be applicable to the purchased goods or services. The POS system typically automates the calculation of these taxes, ensuring compliance with local tax regulations.
                <br><br>
            Receipt Generation: After a transaction is completed, the POS system generates a receipt for the customer. This receipt serves as proof of purchase and includes details such as the items bought, their prices, applicable taxes, payment method, and the total amount paid.
                <br><br>
            Cloud-based POS Systems: Traditional POS systems were often hardware-based and installed locally on a merchant's premises. However, with advancements in technology, cloud-based POS systems are gaining popularity. These systems operate on remote servers accessed via the internet, offering benefits such as scalability, accessibility from anywhere with an internet connection, and automatic software updates.
                <br><br>
            Inventory Management and Analytics: Many modern POS systems also integrate features for inventory management and sales analytics. This helps merchants track their stock levels, understand sales trends, and make informed business decisions.
                <br><br>
            Overall, POS systems play a crucial role in streamlining the checkout process, managing transactions, and providing valuable insights for businesses to improve their operations and customer experiences.
            </p>
        </div>
        <div class="tab-pane fade slide-section" id="pills-details" role="tabpanel" aria-labelledby="pills-details-tab" tabindex="0">
            <p>
                Feature of POS System
                <br><br>

                A Point of Sale (POS) system is a critical component of modern businesses, particularly in retail and hospitality industries. Here are some key features typically found in POS systems:
                <br><br>
                Sales Processing: The primary function of a POS system is to process transactions. It allows businesses to ring up sales, accept various forms of payment (cash, credit/debit cards, mobile payments), and generate receipts for customers.
                <br><br>
                Inventory Management: POS systems help businesses track their inventory in real-time. This includes tracking stock levels, automatically updating inventory when sales are made, and generating alerts for low stock levels.
                <br><br>
                Reporting and Analytics: Advanced POS systems offer reporting and analytics features. These tools provide insights into sales trends, best-selling products, peak sales times, and other key metrics that help businesses make informed decisions.
                <br><br>
                Employee Management: POS systems often include features for employee management, such as clocking in and out, tracking sales performance, and managing access levels for different employees.
                <br><br>
                Customer Relationship Management (CRM): Some POS systems integrate CRM functionalities, allowing businesses to capture customer information, track purchase history, and implement loyalty programs.
                <br><br>
                Integration with Other Systems: POS systems can integrate with various other business systems, such as accounting software, e-commerce platforms, and customer management tools, streamlining operations and data management.
                <br><br>
                Customization and Scalability: POS systems should be customizable to meet the specific needs of different businesses. They should also be scalable, capable of growing with the business and accommodating additional features or locations as needed.
                <br><br>
                Security Features: Given the sensitive nature of transaction data, POS systems incorporate robust security features to protect against fraud and data breaches. This includes encryption of payment information, user authentication, and compliance with industry standards such as PCI DSS.
                <br><br>
                Ease of Use: A good POS system is user-friendly, with an intuitive interface that minimizes training time for staff and reduces the likelihood of errors during transactions.
                <br><br>
                Mobility: With the rise of mobile technology, many POS systems now offer mobile functionality. This allows businesses to process transactions from anywhere within their premises, offer tableside ordering in restaurants, or even conduct sales at off-site events.
                <br><br>
                These features collectively make POS systems indispensable tools for businesses, helping them streamline operations, improve efficiency, and provide better service to customers.
                    <br><br>
                Sales Processing: support for the quick and accurate input of product information via barcode scanners.
                <br><br>
                Inventory Management: Inventory levels should be constantly monitored to avoid stockouts and overstock problems.
                <br><br>
                Payment Processing: Accept a range of payment options, such as cash, debit/credit cards, mobile payments, and digital wallets.
                <br><br>
                Customer Management: Creating and managing customer profiles with purchase history.
                <br><br>
                E-commerce Integration: inventory management and seamless connection with e-commerce systems for online sales
            </p>

        </div>
        <div class="tab-pane fade slide-section" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab" tabindex="0">
           <p class="text-head">
                Video
           </p>
           <center>
            <video class="video" controls>
                <source src="mov_bbb.mp4" type="video/mp4">
                <source src="mov_bbb.ogg" type="video/ogg">
                Your browser does not support HTML video.
            </video>
            <p>
                Video courtesy of
                <a href="https://www.dreamdiver.nl/" target="_blank">Dream Diver</a>.

            </p>
            </center>

            </div>
            <div class="tab-pane fade slide-section" id="pills-link" role="tabpanel" aria-labelledby="pills-link-tab"
                tabindex="0">
                <center>
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card">
                            <img src="{{ asset('frontend/img/pos.png') }}" class="card-img-top" alt="pos">
                            <div class="card-body">
                              <h5 class="card-title">POS</h5>
                              <p class="card-text">A point of sale (POS) is a place where a customer executes the payment for goods or services and where sales taxes may become payable.</p>
                              <a href="https://dreamdiver.nl/test2/login" target="_blank" class="custom-btn">Pos Link</a>
                            </div>
                          </div>
                    </div>
                </center>
            </div>
            <div class="tab-pane fade" id="pills-aeon" role="tabpanel" aria-labelledby="pills-aeon-tab" tabindex="0">
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="row g-5">
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="slide-form">
                                    <p class="text-head text-center">Text Review</p>
                                    <p class="about-us">Your POS System project offers a seamless and efficient solution for businesses. Its intuitive interface simplifies transactions while advanced features enhance productivity. The system's reliability ensures uninterrupted service, instilling confidence in operations. Highly recommend for businesses seeking a streamlined and dependable POS solution.</p>
                                              </p>
                                    <br>

                                </div>
                            </div>
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">

                                        <p class="text-head text-center">Video Review</p>
                                        <center>
                                            <video class="video-review" controls>
                                                <source src="mov_bbb.mp4" type="video/mp4">
                                                <source src="mov_bbb.ogg" type="video/ogg">
                                                Your browser does not support HTML video.
                                            </video>
                                            <p>
                                                Video courtesy of
                                                <a href="https://www.dreamdiver.nl/" target="_blank">Dream Diver</a>.
                                            </p>
                                        </center>

                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
