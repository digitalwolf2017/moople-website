<?php include('header.php'); ?>
    <main id="reserve2" class="mt-[10rem] lg:mt-[8.3rem]">
        <section class="banner relative w-[95%] block ms-auto">
            <img class="block ms-auto rounded-s-lg" src="./assets/img/contact/contact-banner.webp" alt="" width="100%" height="100%">
            <h1 class="text-white text-[25px] lg:text-[50px] font-semibold absolute top-[50%] left-4 lg:left-16" style="transform: translate(0,-50%);">Contact us</h1>
        </section>
        <section class="pt-14">
            <div class="container mx-auto px-4">
                <div class="pb-5">
                    <span class="bg-gradient-to-r from-[#F08A31] to-[#B5341D] text-[#FFF] px-4 py-1.5 rounded">Contact Us</span>
                    <h2 class="text-[#FFF] text-[35px] font-semibold mt-3">Get in Touch</h2>
                    <p class="text-white">Contact us to schedule your free counselling session or for any other support.<br/> We're here to assist you!</p>
                </div>
                <div>
                    <div class="flex flex-wrap gap-y-5">
                        <div class="w-full lg:w-[40%] bg-[#343434] px-6 py-4 rounded-lg flex flex-col justify-center">
                            <div>
                                <p class="text-white text-[25px] font-semibold">Corporate & Registered Office</p>
                            </div>
                            <div>
                                <p class="text-white">PS Srijan Maestro,<br> 113G, Matheswartala Road<br> 4th Floor Topsia, Kolkata: 700046</p>
                            </div>
                            <div class="py-5">
                                <div class="flex flex-wrap items-center gap-x-3 mb-3">
                                    <img src="./assets/icons/phone.svg" alt="">
                                    <a class="text-white" href="tel:+918336901401">+91 83369 01401</a>
                                </div>
                                <div class="flex flex-wrap items-center gap-x-3">
                                    <img src="./assets/icons/mail.svg" alt="">
                                    <a class="text-white" href="mailto:info@moople.in">info@moople.in</a>
                                </div>
                            </div>
                            <hr class="opacity-25 ">
                            <div class="pt-5">
                                <p class="text-white text-[25px] font-semibold">Production Studio - Kolkata </p>
                            </div>
                            <div>
                                <p class="text-white">113A, Matheswartala Road<br> Topsia (Near Axis Bank) 
                                   <br> Kolkata: 700046</p>
                            </div>
                        </div>
                        <div class="w-full lg:w-[60%] px-2 lg:px-10">
                            <form id="frm_admission_open_animation1" name="frm_admission_open" method="post" enctype="multipart/form-data" action="<?php echo base_url('lead_contact.php');?>">
                                <div class="flex flex-wrap gap-y-5">
                                    <div class="w-full lg:w-[100%] px-3">
                                        <p class="text-[25px] font-semibold text-white">Send a Message</p>
                                    </div>
                                    <div class="w-full lg:w-[50%] px-3 relative">
                                        <input
                                            class="peer pt-7 pb-3 w-full px-3 text-sm tracking-[1px] text-white bg-[transparent] border border-gray-300 placeholder-transparent shw-sm rounded-lg focus:outline-none focus:border-[#F08A31] relative z-[2]"
                                            id="fname"
                                            name="fname" 
                                            type="text" 
                                            placeholder="First Name*" 
                                            spellcheck="false"
                                            required
                                        >
                                        <label
                                            class="absolute left-6 top-2 text-gray-300 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-4 peer-focus:top-2 peer-focus:text-gray-300 peer-focus:text-sm z-[1]"
                                            for="name"
                                            >First Name</label
                                        >
                                    </div>
                                    <div class="w-full lg:w-[50%] px-3 relative">
                                        <input
                                            class="peer pt-7 pb-3 w-full px-3 text-sm tracking-[1px] text-white bg-[transparent] border border-gray-300 placeholder-transparent shw-sm rounded-lg focus:outline-none focus:border-[#F08A31] relative z-[2]"
                                            id="lname"
                                            name="lname" 
                                            type="text" 
                                            placeholder="Last Name" 
                                            spellcheck="false"
                                            required
                                        >
                                        <label
                                            class="absolute left-6 top-2 text-gray-300 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-4 peer-focus:top-2 peer-focus:text-gray-300 peer-focus:text-sm z-[1]"
                                            for="name"
                                            >Last Name</label
                                        >
                                    </div>
                                    <div class="w-full lg:w-[50%] px-3 relative">
                                        <input
                                            class="peer pt-7 pb-3 w-full px-3 text-sm tracking-[1px] text-white bg-[transparent] border border-gray-300 placeholder-transparent shw-sm rounded-lg focus:outline-none focus:border-[#F08A31] relative z-[2]"
                                            id="email"
                                            name="email" 
                                            type="email" 
                                            placeholder="Email*" 
                                            spellcheck="false"
                                            required
                                        >
                                        <label
                                            class="absolute left-6 top-2 text-gray-300 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-4 peer-focus:top-2 peer-focus:text-gray-300 peer-focus:text-sm z-[1]"
                                            for="name"
                                            >Email</label
                                        >
                                    </div>
                                    <div class="w-full lg:w-[50%] px-3 relative">
                                        <input
                                            class="peer pt-7 pb-3 w-full px-3 text-sm tracking-[1px] text-white bg-[transparent] border border-gray-300 placeholder-transparent shw-sm rounded-lg focus:outline-none focus:border-[#F08A31] relative z-[2]"
                                            type="text" 
                                            placeholder="Mobile*" 
                                            name="phone" 
                                            required
                                            pattern="[1-9]{1}[0-9]{9}" maxlength="10"
                                        >
                                        <label
                                            class="absolute left-6 top-2 text-gray-300 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-4 peer-focus:top-2 peer-focus:text-gray-300 peer-focus:text-sm z-[1]"
                                            for="name"
                                            >Phone</label
                                        >
                                    </div>
                                    <div class="w-full lg:w-[100%] px-3">
                                        <select 
                                            id="purpose" 
                                            name="purpose" 
                                            autocomplete="none"
                                            class="block w-full rounded-lg border-0 px-2 py-4 bg-[#000] text-[#FFF] shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-[#F08A31] sm:text-sm sm:leading-6" required
                                        >
                                            <option value="">Purpose of Contact</option>
                                            <option value="Admission">Admission</option>
                                            <option value="Franchise Enquiry">Franchise Enquiry</option>
                                            <option value="College Partnership Enquiry">College Partnership Enquiry</option>
                                            <option value="Suggestion and Feedback">Suggestion and Feedback</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                    <div class="w-full lg:w-[100%] px-3">
                                        <textarea id="about" name="message" placeholder="Message..." rows="3" class="block w-full rounded-lg border-0 p-2 bg-[#000] text-[#FFF] shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-[#F08A31] sm:text-sm sm:leading-6" required></textarea>
                                    </div>
                                    <div class="w-full px-2 flex justify-center scale-[.9]">
                                        <div class="g-recaptcha" data-sitekey="6Lf9ePspAAAAALVVScUj3pDoYvTqyvwPF9nX2Acz" data-callback="verifyCaptcha"></div>
                                              <div id="captcha-error3214animation1" class="text-center fw-bold mt-3" style="color: red;"></div>
                                    </div>
                                    <div class="w-full lg:w-[100%] flex justify-center px-3">
                                        <input type="hidden" name="utm_source" value="<?php echo (isset($_GET['utm_source']) && $_GET['utm_source']!='') ? $_GET['utm_source'] : '';?>" />
                                        <input type="hidden" name="utm_medium" value="<?php echo (isset($_GET['utm_medium']) && $_GET['utm_medium']!='') ? $_GET['utm_medium'] : '';?>" />
                                        <input type="hidden" name="utm_campaign" value="<?php echo (isset($_GET['utm_campaign']) && $_GET['utm_campaign']!='') ? $_GET['utm_campaign'] : '';?>" />
                                        <input type="hidden" name="redirect_from" value="contact">

                                        <button class="text-white bg-gradient-to-r from-[#F08A31] to-[#B5341D] px-5 py-2 rounded">Send message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="py-12">
                    <iframe class="rounded-lg" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29478.678923019823!2d88.38517324066638!3d22.547857897751594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02769651c3aff5%3A0x3ec4b6000567f833!2sMoople%20-%20Institute%20of%20Animation%20and%20Design%20(Corporate%20Office)!5e0!3m2!1sen!2sin!4v1726658439638!5m2!1sen!2sin" width="100%" height="450" style="border:2px solid gainsboro; box-shadow: 0px 0px 10px #87a3ad; " allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
    </main>
<?php include('footer.php'); ?>