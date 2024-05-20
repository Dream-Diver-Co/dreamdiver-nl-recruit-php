@extends('frontend.layouts.master')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="text-white">MISI Portfilio Details</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('portfolio') }}">Portfolio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">MISI</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="container top-bottom mb-5 wow fadeIn" data-wow-delay="0.1s">
        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-Summary-tab" data-bs-toggle="pill" data-bs-target="#pills-Summary"
                    type="button" role="tab" aria-controls="pills-Summary" aria-selected="true">Summary</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-details-tab" data-bs-toggle="pill" data-bs-target="#pills-details"
                    type="button" role="tab" aria-controls="pills-details" aria-selected="false">Details</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-video-tab" data-bs-toggle="pill" data-bs-target="#pills-video"
                    type="button" role="tab" aria-controls="pills-video" aria-selected="false">Video</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-link-tab" data-bs-toggle="pill" data-bs-target="#pills-link"
                    type="button" role="tab" aria-controls="pills-link" aria-selected="false">Link</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-aeon-tab" data-bs-toggle="pill" data-bs-target="#pills-aeon"
                    type="button" role="tab" aria-controls="pills-aeon" aria-selected="false">Review</button>
            </li>

        </ul>
        <hr>
        <div class="tab-content slide-section" id="pills-tabContent">

            <div class="tab-pane fade slide-section show active" id="pills-Summary" role="tabpanel" aria-labelledby="pills-Summary-tab" tabindex="0">

                <p>
                    A hospital ticket system for sorting summaries typically involves organizing and managing various types of information related to patient care, administrative tasks, and communication within the hospital setting. Here's an overview of how such a system might work:
                    <br><br>
                    Patient Intake and Registration: When a patient arrives at the hospital, their information is collected and entered into the system. This includes personal details, medical history, insurance information, and the reason for their visit.
                    <br><br>
                    Ticket Generation: Once the patient is registered, a ticket is generated based on the reason for their visit. For example, if they are visiting the emergency room, a ticket is created for triage. If they have an appointment with a specific department, a ticket is generated for that department.
                    <br><br>
                    Triage and Priority: In the case of emergencies, the ticket system prioritizes patients based on the severity of their condition. Triage nurses assess patients and assign priority levels accordingly. The ticket system ensures that patients are seen in the order of urgency.
                    <br><br>
                    Routing and Assignment: Tickets are routed to the appropriate departments or healthcare providers based on the nature of the patient's condition. For instance, if a patient presents with cardiac symptoms, their ticket is routed to the cardiology department.
                    <br><br>
                    Medical Documentation and Summary: Healthcare providers document their interactions with patients using the ticket system. This includes diagnosis, treatment provided, medications prescribed, and any other relevant information. Summaries of patient encounters are generated and stored within the system for future reference.
                    <br><br>
                    Communication and Collaboration: The ticket system facilitates communication and collaboration among healthcare providers. They can exchange messages, share updates on patient status, and coordinate care plans using the system.
                    <br><br>
                    Follow-Up and Discharge Planning: After treatment, the ticket system assists with discharge planning and follow-up care. It generates discharge summaries outlining the patient's treatment, instructions for post-discharge care, and follow-up appointments.
                    <br><br>
                    Analytics and Reporting: The ticket system collects data on patient encounters, wait times, resource utilization, and other metrics. This data can be analyzed to identify trends, optimize workflows, and improve overall hospital operations.
                    <br><br>
                    Security and Compliance: The ticket system adheres to strict security protocols to protect patient confidentiality and comply with healthcare regulations such as HIPAA (Health Insurance Portability and Accountability Act).
                    <br><br>
                    Integration with Electronic Health Records (EHR): The ticket system may be integrated with the hospital's EHR system to ensure seamless sharing of patient information and continuity of care across different healthcare settings.
                </p>
            </div>
            <div class="tab-pane fade slide-section" id="pills-details" role="tabpanel" aria-labelledby="pills-details-tab"
                tabindex="0">
                <p>
                    A hospital ticket system, also known as a ticketing system or queuing system, is a software application or platform used by hospitals and healthcare facilities to manage patient flow and appointments efficiently. Here's an overview of how such a system typically works:
                    <br><br>
                    Appointment Scheduling: Patients can book appointments online, via phone, or in person. The system should allow for easy scheduling, taking into account the availability of healthcare providers and resources.
                    <br><br>
                    Check-in Process: Upon arrival at the hospital or clinic, patients check in using the ticket system. This could involve self-service kiosks, receptionists, or mobile check-in options.
                    <br><br>
                    Queue Management: The system assigns patients to specific queues based on factors such as appointment type, urgency, and specialty. Patients may receive a physical ticket or a digital queue number.
                    <br><br>
                    Notifications: Patients are kept informed about their status in the queue through notifications. This could include SMS alerts, mobile app notifications, or digital display screens in the waiting area.
                    <br><br>
                    Resource Allocation: The system helps hospital staff manage resources efficiently by allocating appointments based on the availability of doctors, nurses, examination rooms, and equipment.
                    <br><br>
                    Priority Handling: Patients with urgent medical needs or emergencies are prioritized within the system to ensure timely care.
                    <br><br>
                    Tracking and Reporting: The system collects data on patient flow, waiting times, appointment cancellations, and other relevant metrics. This information can be used to optimize scheduling and resource allocation.
                    <br><br>
                    Integration: Ideally, the ticket system integrates with other hospital software such as electronic health records (EHR), billing systems, and patient management platforms for seamless data exchange.
                    <br><br>
                    Feedback Collection: Some ticket systems allow patients to provide feedback on their experience, which can help hospitals identify areas for improvement.
                </p>

            </div>
            <div class="tab-pane fade slide-section" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab"
                tabindex="0">
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
                            <img src="{{ asset('frontend/img/misilogo2.png') }}" class="card-img-top" alt="misi">
                            <div class="card-body">
                              <h5 class="card-title">MISI</h5>
                              <p class="card-text">A hospital ticket system for sorting summaries typically involves organizing and managing various types of information related to patient care, administrative tasks, and communication within the hospital setting.</p>
                              <a href="https://misineuro.netlify.app/" target="_blank" class="custom-btn">Misi Link</a>
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
                                    <p class="about-us">Misi Hospital Project has truly exceeded expectations with its exceptional healthcare services. The state-of-the-art facilities, compassionate staff, and efficient management ensure top-notch patient care. Misi sets a new standard in the healthcare industry, providing a seamless and compassionate experience for all.
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
