<div class="px-5 pt-1 pb-6 shadow-[0px_0px_3px] shadow-white rounded bg-gradient-to-b from-[#21346d] to-[#11193e] rounded border-2 border-[#2b4490]">
    <form id="frm_admission_open_animation1" name="frm_admission_open" method="post" enctype="multipart/form-data"
        action="<?php echo base_url('leads.php'); ?>">
        <div>
            <p class="text-[#FFF] text-[25px] text-center py-3 font-semibold">Connect with our <span
                    class="text-[#F08A31]">Counselor</span></p>
        </div>
        <div class="mb-5">
            <input
                class="block w-full rounded border-0 p-2 bg-[#c4cdff] text-[#000] placeholder:text-slate-600 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                type="text" placeholder="Name" name="name" required>
        </div>
        <div class="mb-5">
            <input
                class="block w-full rounded border-0 p-2 bg-[#c4cdff] text-[#000] placeholder:text-slate-600 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                type="text" placeholder="Phone" name="phone" required pattern="[1-9]{1}[0-9]{9}" maxlength="10">
        </div>
        <div class="mb-5">
            <select id="qualification" name="educational_qualification" autocomplete="none"
                class="block w-full rounded border-0 p-2 bg-[#c4cdff] text-[#000] shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <option value="" selected disabled>Qualification</option>
               <option value="">Qualification</option>
                  <option value="Completed Class 10">Completed Class 10</option>
                  <option value="Completing HS in 2026">Completing HS in 2026</option>
                  <option value="Pursuing Graduation / Graduate">Pursuing Graduation / Graduate</option>
                  <option value="Others">Others</option>
            </select>
        </div>
        <div class="mb-5">
            <select id="course" name="course" autocomplete="country-name"
                class="block w-full rounded border-0 p-2 bg-[#c4cdff] text-[#000] shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <!--<option value="" selected disabled>Select Course</option>-->

                <?php
                if (isset($courses) && count($courses) > 0) {
                    foreach ($courses as $ck => $cv) {
                        ?>
                        <option value="<?php echo $cv; ?>"><?php echo $cv; ?></option>
                    <?php }
                } ?>

            </select>
        </div>
        <div class="mb-5">
            <select id="location" name="location" autocomplete="country-name"
                class="block w-full rounded border-0 p-2 bg-[#c4cdff] text-[#000] shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <option value="" selected disabled>Select Branch</option>
                <option value="Baguiati">Baguiati</option>
<option value="Barasat">Barasat</option>
<option value="Bardhaman">Bardhaman</option>
<option value="Berhampore">Berhampore</option>
<option value="Barrackpore">Barrackpore</option>
<option value="Chandannagar">Chandannagar</option>
<option value="Chowringhee">Chowringhee</option>
<option value="Dunlop">Dunlop</option>
<option value="Guwahati">Guwahati</option>
<option value="Jodhpur Park">Jodhpur Park</option>
<option value="Mecheda">Mecheda</option>
<option value="Midnapore">Midnapore</option>
<option value="New Alipore">New Alipore</option>
<option value="Sealdah">Sealdah</option>
<option value="Serampore">Serampore</option>
<!--<option value="Siliguri">Siliguri</option>-->
<option value="Sonarpur">Sonarpur</option>
<option value="Topsia">Topsia</option>
            </select>
        </div>
        <div class="w-full px-2 pb-3 flex justify-center scale-[.9]">
            <div class="g-recaptcha" data-sitekey="6Lf9ePspAAAAALVVScUj3pDoYvTqyvwPF9nX2Acz"
                data-callback="verifyCaptcha"></div>
            <div id="captcha-error3214animation1" class="text-center fw-bold mt-3" style="color: red;"></div>
        </div>
        <div>
            <input type="hidden" name="utm_source"
                value="<?php echo (isset($_GET['utm_source']) && $_GET['utm_source'] != '') ? $_GET['utm_source'] : ''; ?>" />
            <input type="hidden" name="utm_medium"
                value="<?php echo (isset($_GET['utm_medium']) && $_GET['utm_medium'] != '') ? $_GET['utm_medium'] : ''; ?>" />
            <input type="hidden" name="utm_campaign"
                value="<?php echo (isset($_GET['utm_campaign']) && $_GET['utm_campaign'] != '') ? $_GET['utm_campaign'] : ''; ?>" />
            <input type="hidden" name="email" value="NA">
            <input type="hidden" name="redirect_from" value="<?php echo $page_name; ?>">

            <button type="submit"
                class="text-[#FFF] w-full px-5 py-2 rounded flex justify-center items-center gap-x-2 bg-gradient-to-r from-[#F08A31] to-[#B5341D]">Submit
                <img src="./assets/icons/send.png" alt=""></button>
        </div>
    </form>
</div>