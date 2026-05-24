<x-app-layout>
    <x-slot name='title'>Contacts - Brand</x-slot>
    <x-slot name='darklight'><x-js.darklight/></x-slot>
    <x-nav/>
    <section class="py-5">
        <div class="container px-md-5">
            <div class="row mb-4">
                <div class="col-md-10 text-center mx-auto"><span class="badge bg-light rounded-pill p-2 mb-3 px-3">Contact us</span>
                    <h1 class="display-5 fw-bold">Get in touch</h1>
                    <p class="fs-5 mx-auto">Fill out the form below and we'll get back to you shortly</p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-auto col-md-4 col-xl-3">
                    <div class="d-flex flex-row justify-content-start align-items-center flex-wrap">
                        <div class="d-flex align-items-center p-3">
                            <div class="fs-4 lh-1 text-white bg-primary rounded-circle p-3"><svg class="bi bi-telephone" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"></path>
                                </svg></div>
                            <div class="ps-3">
                                <h6 class="mb-0">Phone</h6>
                                <p class="mb-0">+123456789</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center p-3">
                            <div class="fs-4 lh-1 text-white bg-primary rounded-circle p-3"><svg class="bi bi-envelope" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"></path>
                                </svg></div>
                            <div class="ps-3">
                                <h6 class="mb-0">Email</h6>
                                <p class="mb-0">info@example.com</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center p-3">
                            <div class="fs-4 lh-1 text-white bg-primary rounded-circle p-3"><svg class="bi bi-pin" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M4.146.146A.5.5 0 0 1 4.5 0h7a.5.5 0 0 1 .5.5c0 .68-.342 1.174-.646 1.479-.126.125-.25.224-.354.298v4.431l.078.048c.203.127.476.314.751.555C12.36 7.775 13 8.527 13 9.5a.5.5 0 0 1-.5.5h-4v4.5c0 .276-.224 1.5-.5 1.5s-.5-1.224-.5-1.5V10h-4a.5.5 0 0 1-.5-.5c0-.973.64-1.725 1.17-2.189A6 6 0 0 1 5 6.708V2.277a3 3 0 0 1-.354-.298C4.342 1.674 4 1.179 4 .5a.5.5 0 0 1 .146-.354m1.58 1.408-.002-.001zm-.002-.001.002.001A.5.5 0 0 1 6 2v5a.5.5 0 0 1-.276.447h-.002l-.012.007-.054.03a5 5 0 0 0-.827.58c-.318.278-.585.596-.725.936h7.792c-.14-.34-.407-.658-.725-.936a5 5 0 0 0-.881-.61l-.012-.006h-.002A.5.5 0 0 1 10 7V2a.5.5 0 0 1 .295-.458 1.8 1.8 0 0 0 .351-.271c.08-.08.155-.17.214-.271H5.14q.091.15.214.271a1.8 1.8 0 0 0 .37.282"></path>
                                </svg></div>
                            <div class="ps-3">
                                <h6 class="mb-0">Location</h6>
                                <p class="mb-0">12 Example Street</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-5 col-xxl-4">
                    <div>
                        <form class="p-3 p-xl-4" method="post">
                            <div class="mb-3"><input class="form-control" type="text" id="name-1" name="name" placeholder="Name" required=""></div>
                            <div class="mb-3"><input class="form-control" type="email" id="email-1" name="email" placeholder="Email" required=""></div>
                            <div class="mb-3"><textarea class="form-control" id="message-1" name="message" rows="6" placeholder="Message" required=""></textarea></div>
                            <div><button class="btn btn-primary w-100 d-block" type="submit">Send </button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container px-md-5">
            <div class="row mb-4 mb-lg-5">
                <div class="col-md-8 text-center mb-4 mx-auto">
                    <h2 class="display-6 fw-bold">FAQ</h2>
                    <p class="fs-5 mx-auto">Answers to some commonly asked questions</p>
                </div>
                <div class="col-md-8 mx-auto">
                    <div class="accordion accordion-flush mx-auto" role="tablist">
                        <div class="accordion-item">
                            <h2 class="accordion-header" role="tab"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#" aria-expanded="true"> What is Brand? </button></h2>
                            <div class="accordion-collapse collapse show item-1" role="tabpanel">
                                <div class="accordion-body">
                                    <p class="mb-0">Lorem ipsum placerat sed phasellus suspendisse, phasellus ultrices aliquam scelerisque. Proin vestibulum dui vehicula consectetur.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#" aria-expanded="false"> Do you offer a free trial? </button></h2>
                            <div class="accordion-collapse collapse item-2" role="tabpanel">
                                <div class="accordion-body">
                                    <p class="mb-0">Lorem ipsum placerat sed phasellus suspendisse, phasellus ultrices aliquam scelerisque. Proin vestibulum dui vehicula consectetur.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#" aria-expanded="false"> Can I cancel my subscription at any time? </button></h2>
                            <div class="accordion-collapse collapse item-3" role="tabpanel">
                                <div class="accordion-body">
                                    <p class="mb-0">Lorem ipsum placerat sed phasellus suspendisse, phasellus ultrices aliquam scelerisque. Proin vestibulum dui vehicula consectetur.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-footer/>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
</x-app-layout>
