@extends('frontend.layouts.master')

@section('content')

     <!-- Page Header Start -->
     <div class="container-fluid page-header py-5" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            {{-- <p class="display-4 text-white animated slideInDown mb-4">AEON</p> --}}
            <h1 class="text-white">AEON</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('portfolio') }}">Portfolio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Aeon</li>
                </ol>
            </nav>
        </div>
    </div>
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
                Garment order process system.
                <br><br>
                1. Place order by uploading pdf.<br><br>
                2. Follow different process of completing a order  <br><br>

                The garment order process system is a crucial part of the apparel industry, ensuring smooth operations from the initial order placement to the final delivery of garments. Here's an overview of the typical steps involved:
                <br><br>
                Order Placement: The process begins when a customer places an order with a garment manufacturer or supplier. This order includes specifications such as garment type, quantity, sizes, colors, and any customization requirements.
                <br><br>
                Order Confirmation: Once the order is received, the manufacturer verifies the details and confirms the order with the customer. This step ensures that both parties are aligned on the order requirements and terms.
                <br><br>
                Production Planning: With the order confirmed, the production planning phase begins. This involves scheduling production timelines, allocating resources (such as materials, manpower, and machinery), and coordinating with various departments to ensure a smooth workflow.
                <br><br>
                Material Procurement: The manufacturer procures the necessary materials based on the order requirements. This may involve sourcing fabrics, trims, buttons, zippers, etc., from suppliers either domestically or internationally.
                <br><br>
                Pattern Making and Sampling: Before mass production begins, patterns are created based on the garment specifications. Samples are then produced to validate the design, fit, and quality. These samples may undergo several iterations based on feedback from the customer.
                <br><br>
                Mass Production: Once the samples are approved, mass production commences. This involves cutting the fabric based on the patterns, assembling the garments, and performing quality checks at various stages of production to ensure consistency and compliance with quality standards.
                <br><br>
                Quality Control: Quality control is an integral part of the garment order process. Inspectors closely monitor the production process, examining raw materials, semi-finished products, and final products to identify and rectify any defects or deviations from the specified standards.
                <br><br>
                Packaging and Labeling: Once the garments pass quality control, they are packaged according to the customer's specifications. This may involve labeling each garment with size, color, style, and other relevant information, as well as adding any branding or packaging materials requested by the customer.
                <br><br>
                Shipping and Logistics: The finished garments are then prepared for shipping. This involves coordinating with logistics partners to arrange transportation, prepare shipping documents, and ensure timely delivery to the customer's designated location.
                <br><br>
                Order Fulfillment and Customer Satisfaction: Upon delivery, the customer receives the ordered garments. The manufacturer may follow up to ensure customer satisfaction and address any concerns or issues that may arise during or after the delivery process.
                    <br><br>
                Throughout this entire process, effective communication, coordination, and collaboration among all stakeholders—customers, suppliers, manufacturers, and logistics partners—are essential to ensure a seamless garment order process and ultimately meet the needs and expectations of the customers.

                </div>
            <div class="tab-pane fade slide-section" id="pills-details" role="tabpanel" aria-labelledby="pills-details-tab" tabindex="0">
                From sourcing to shipment.
                <br><br>
                1. Read pdf and place order from that data<br><br>


                "From sourcing to shipment" is a phrase often used in the context of supply chain management. It encapsulates the entire process of acquiring materials or products from suppliers and delivering them to customers or end-users.
                <br><br>
                Sourcing: This is the initial stage where companies identify and select suppliers who can provide the necessary materials, components, or products. This involves considerations such as cost, quality, reliability, and often involves negotiations to secure favorable terms.
                <br><br>
                Procurement: Once suppliers are identified, the procurement process involves making agreements, issuing purchase orders, and managing contracts to formalize the relationship and ensure a steady supply of goods or services.
                <br><br>
                Production Planning: For companies involved in manufacturing, this stage involves planning production schedules based on the availability of materials and resources. It aims to optimize production efficiency while meeting demand forecasts.
                <br><br>
                Manufacturing/Assembly: This is where the actual production or assembly of products takes place. It involves transforming raw materials or components into finished goods according to specifications and quality standards.
                <br><br>
                Quality Control: Throughout the production process, quality control measures are implemented to ensure that products meet the required standards. This may involve inspections, testing, and continuous improvement initiatives.
                <br><br>
                Warehousing and Inventory Management: Finished goods are stored in warehouses until they are ready to be shipped to customers. Effective inventory management practices are essential to ensure that stock levels are optimized to meet demand without excessive holding costs.
                <br><br>
                Order Fulfillment: When customer orders are received, the products are picked from inventory, packaged, and prepared for shipment. This stage involves coordinating logistics to ensure timely delivery to the customer.
                <br><br>
                Shipping and Logistics: The final stage involves transporting the products from the warehouse to the customer's location. This may involve various transportation modes such as trucks, ships, or planes, depending on the distance and urgency of delivery.
                <br><br>
                Customer Satisfaction: Throughout the entire process, customer satisfaction is paramount. Companies strive to meet or exceed customer expectations by delivering products on time, in good condition, and with excellent customer service.
                    <br><br>
                Effective management of the sourcing-to-shipment process is crucial for businesses to remain competitive, minimize costs, and deliver value to customers. It requires coordination across multiple functions within the organization as well as with external suppliers and logistics partners.

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
            <div class="tab-pane fade slide-section" id="pills-link" role="tabpanel" aria-labelledby="pills-link-tab" tabindex="0">
                <center>
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card">
                            <img src="{{ asset('frontend/img/aeon.png') }}" class="card-img-top" alt="aeon">
                            <div class="card-body">
                              <h5 class="card-title">AEON</h5>
                              <p class="card-text"> Garment order process system.<br>
                                1. Place order by uploading pdf.<br>
                                2. Follow different process of completing a order  <br></p>
                              <a href="http://erpaeon.dreamdiver.nl/login" target="_blank" class="custom-btn">Aeon Link</a>
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
                                    <p class="about-us">HI Rumio,

                                        Thanks so much for a great meeting today. The aeon system is looking great and we are
                                        very happy with the work put in so far!<br>

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
