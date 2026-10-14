<section class="bg-[#1C1C1C] pb-0 pt-12 lg:pb-12">
    <div class="container mx-auto px-4">
        <div>
            <div class="pb-5">
                <span
                    class="bg-gradient-to-r from-[#F08A31] to-[#B5341D] text-[#FFF] px-4 py-1.5 rounded">Admissions</span>
                <span class="text-white font-semibold">&nbsp; Open 2024</span>
            </div>
        </div>
        <div class="lg:py-5">
            <form id="frm_admission_open_animation1" name="frm_admission_open" method="post" enctype="multipart/form-data" action="<?php echo base_url('leads.php');?>">
                <div class="flex flex-wrap gap-y-5">
                    <div class="w-full lg:w-[20%] px-2 relative">
                    <input
                        placeholder="Full Name"
                        class="peer pt-7 pb-3 w-full px-3 text-sm tracking-[1px] text-white bg-[#141414] placeholder-transparent shw-sm rounded-lg focus:outline-none focus:border-purple-500 relative z-[1]"
                        required
                        id="name"
                        name="name"
                        type="text"
                        spellcheck="false"
                    />
                    <label
                        class="absolute left-5 top-2 text-gray-300 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-4 peer-focus:top-2 peer-focus:text-gray-300 peer-focus:text-sm z-[1]"
                        for="name"
                        >Full Name</label
                    >
                    </div>
                    <div class="w-full lg:w-[20%] px-2 relative">
                        <input
                            class="peer pt-7 pb-3 w-full px-3 text-sm tracking-[1px] text-white bg-[#141414] placeholder-transparent shw-sm rounded-lg focus:outline-none focus:border-purple-500 relative z-[1]"
                            type="text" 
                            placeholder="Phone" 
                            name="phone" 
                            required
                            id="phone"
                            pattern="[1-9]{1}[0-9]{9}" 
                            maxlength="10"
                            spellcheck="false"
                        >
                            <label
                                class="absolute left-5 top-2 text-gray-300 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-4 peer-focus:top-2 peer-focus:text-gray-300 peer-focus:text-sm z-[1]"
                                for="phone"
                                >Phone</label
                            >
                    </div>
                    <div class="w-full lg:w-[20%] px-2 relative">
                        <select id="qualification" name="educational_qualification" autocomplete="country-name" placeholder="Full Name" aria-label="qualification"
                            class="peer py-[1.125rem] w-full px-3 text-sm tracking-[1px] text-white bg-[#141414] placeholder-transparent shw-sm rounded-lg focus:outline-none focus:border-purple-500 relative z-[1]">
                            <option value="" selected disabled>Qualification</option>
                            <option value="10th">10th</option>
                            <option value="12th">12th</option>
                            <option value="graduation">Graduation</option>
                            <option value="post graduation">Post Graduation</option>    
                        </select>
                    </div>
                    <div class="w-full lg:w-[20%] px-2 relative">
                        <select id="course" name="course" autocomplete="country-name" aria-label="course"
                            class="peer py-[1.125rem] w-full px-3 text-sm tracking-[1px] text-white bg-[#141414] placeholder-transparent shw-sm rounded-lg focus:outline-none focus:border-purple-500 relative z-[1]">

                            <?php
                                if(isset($courses) && count($courses)>0){
                                    foreach($courses as $ck=>$cv){
                            ?>
                            <option value="<?php echo $cv;?>"><?php echo $cv;?></option>
                            <?php }}?>
                            
                        </select>
                    </div>

                    <div class="w-full lg:w-[20%] px-2 relative">
                        <select id="location" name="location" autocomplete="country-name" aria-label="city"
                            class="peer py-[1.125rem] w-full px-3 text-sm tracking-[1px] text-white bg-[#141414] placeholder-transparent shw-sm rounded-lg focus:outline-none focus:border-purple-500 relative z-[1]">
                            <option value="" selected disabled>Select Branch</option>
                            <option value="Baguiati">Baguiati</option>
                            <option value="Bardhaman">Bardhaman</option>
                            <option value="Barrackpore">Barrackpore</option>
                            <option value="Barasat">Barasat</option>
                            <option value="Chandannagar">Chandannagar</option>
                            <option value="Chowringhee">Chowringhee</option>
                            <option value="Dunlop">Dunlop</option>
                            <option value="Guwahati">Guwahati</option>
                            <option value="Jodhpur park">Jodhpur park</option>
                            <!--<option value="Kudghat">Kudghat</option>-->
                            <option value="Mecheda">Mecheda</option>
                            <option value="Midnapore">Midnapore</option>
                            <option value="New Alipore">New Alipore</option>
                            <!--<option value="Nirman Vihar Delhi">Nirman Vihar Delhi</option>-->
                            <option value="Sealdah">Sealdah</option>
                            <option value="Topsia">Topsia</option>
                            <option value="Serampore">Serampore</option>
                            <option value="Shyambazar">Shyambazar</option>
                            <option value="Sonarpur">Sonarpur</option>
                            <!--<option value="Thane">Thane</option>-->
                        </select>
                    </div>
                    <div class="w-full lg:w-[20%] px-2">
                        <input type="hidden" name="utm_source" value="<?php echo (isset($_GET['utm_source']) && $_GET['utm_source']!='') ? $_GET['utm_source'] : '';?>" />
                        <input type="hidden" name="utm_medium" value="<?php echo (isset($_GET['utm_medium']) && $_GET['utm_medium']!='') ? $_GET['utm_medium'] : '';?>" />
                        <input type="hidden" name="utm_campaign" value="<?php echo (isset($_GET['utm_campaign']) && $_GET['utm_campaign']!='') ? $_GET['utm_campaign'] : '';?>" />
                        <input type="hidden" name="email" value="NA">
                        <input type="hidden" name="redirect_from" value="<?php echo $page_name;?>">

                    </div>
                    <div class="w-full px-2 flex justify-center scale-[.9] pb-3">
                        <div class="g-recaptcha" data-sitekey="6Lf9ePspAAAAALVVScUj3pDoYvTqyvwPF9nX2Acz" data-callback="verifyCaptcha"></div>
                        <div id="captcha-error3214animation1" class="text-center fw-bold mt-3" style="color: red;"></div>
                    </div>
                    <button
                        class="w-[250px] px-5 py-2 bg-gradient-to-r from-[#F08A31] to-[#B5341D] rounded-lg text-white hover:bg-gradient-to-r hover:from-[#B5341D] hover:to-[#F08A31] transition duration-500 ease flex justify-center gap-x-2 mx-auto"
                        type="submit">Submit <img src="./assets/icons/send.png" alt="" width="18"
                            height="18">
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>