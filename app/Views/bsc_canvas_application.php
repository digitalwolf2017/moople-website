<?php include('header.php');?>

 
 <section class="main-header inner-header">
    <div class="container">
       <div class="inner-top-heading-wrap"></div>
    </div>
 </section>
 
 <section class="py-10 px-5 bg-[#000] mt-20">
     <section class="bg-[#000] pt-6 lg:pt-12">
        <div class="container mx-auto px-4">
        <h1 class="text-center text-2xl font-bold mb-8 text-white">Canvas <script>document.write(new Date().getFullYear())</script> - Entries for BSC</h1>
            <div class="flex flex-wrap gap-y-5">
                <div class="w-full md:w-[70%] px-2">
                    <div class="flex flex-wrap gap-y-5 border-b border-[#656565]">
                      <a href="/bsc-canvas-application" class="bg-gradient-to-r from-[#F08A31] to-[#B5341D] px-10 lg:px-20 py-3 text-[#FFF] rounded-lg lg:rounded-sm lg:rounded-t-lg lg:me-5 me-0 w-full lg:w-auto text-center">For Degree Course Student</a>
                        <a href="/canvas-application" class="bg-[#2D2C2C] px-10 lg:px-20 py-3 text-[#FFF] rounded-t-lg w-full lg:w-auto text-center">For Certificate Course Student
                        </a>
                    </div>
                  </div>
               </div>
            </div>
         </div>
</section>
  <div class="container mx-auto px-4 bg-[#000] p-8 shadow-lg rounded-lg">
    <!--<h1 class="text-center text-2xl font-bold mb-8 text-white">Canvas 2025 - Entries for BSC</h1>-->
    
    <form id="frm_contact" name="frm_contact" method="post" enctype="multipart/form-data"
      action="<?php echo base_url('payments/home/request');?>">
      <input type="hidden" name="student_type" value="Moople Applicants" />
      <input type="hidden" name="canvas_payment_type" value="BSC" />
      
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <!-- Select Branch -->
        <div>
          <label class="block font-medium text-white">Select your College Instead of Branch <span class="text-red-500">*</span></label>
          <select name="location" id="location" class="w-full p-3 border border-gray-300 rounded-lg" placeholder=" " required>
            <option selected disabled value="">Select</option>
            <option value="IMS">IMS</option>
            <option value="BC Roy APC">BC Roy APC</option>
          </select>
        </div>

        <!-- Candidate Name -->
        <div>
          <label class="block font-medium text-white">Candidate Name <span class="text-red-500">*</span></label>
          <input name="name" type="text" id="name" class="w-full p-3 border border-gray-300 rounded-lg" required />
        </div>

        <!-- Select Course -->
        <!--<div>-->
        <!--  <label class="block font-medium text-white">Course<span class="text-red-500">*</span></label>-->
        <!--  <select name="reg_no" id="reg_no" class="w-full p-3 border border-gray-300 rounded-lg" placeholder=" " required>-->
        <!--    <option selected disabled value="">Select Course</option>-->
        <!--    <option value="BAFM">BAFM</option>-->
        <!--    <option value="BVFM">BVFM</option>-->
        <!--  </select>-->
        <!--</div>-->
        
        <div>
          <label class="block font-medium text-white">Student Batch<span class="text-red-500">*</span></label>
          <input name="reg_no" type="text" id="reg_no" class="w-full p-3 border border-gray-300 rounded-lg" required />
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
        <!-- Category Head -->
        <div>
           <label class="block font-semibold text-[#FFF]">Category Head<span class="text-red-500">*</span></label>
           <select name="head_category" id="headcategory" class="w-full p-2 border rounded" placeholder=" " required>
              <option selected disabled value="">Select Category Head</option>
              <option value="Graphic Design">Graphic Design</option>
              <option value="Web Design">Web Design</option>
              <option value="3D Generalist">3D Generalist</option>
              <option value="3D Animation">3D Animation</option>
              <option value="VFX">VFX</option>
           </select>
        </div>
        
        <div>
           <label class="block font-semibold text-[#FFF]">Category<span class="text-red-500">*</span></label>
           <select name="category" id="category" class="w-full p-2 border rounded" placeholder=" " required>
              <option selected disabled value="">Select Category</option>
           </select>
        </div>

        <!-- Email -->
        <div>
          <label class="block font-medium text-white">Email</label>
          <input name="email" type="email" id="email" class="w-full p-3 border border-gray-300 rounded-lg" />
        </div>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
        <!-- Mobile Number -->
        <div>
          <label class="block font-medium text-white">Mobile Number <span class="text-red-500">*</span></label>
          <input name="mobile" type="text" id="mobile" class="w-full p-3 border border-gray-300 rounded-lg" onkeypress="return isNumberKey()" pattern="[0-9]{10}" maxlength="10" required />
        </div>

        <!-- Amount -->
        <div>
          <label class="block font-medium text-white">Amount:</label>
          <input name="amount" type="text" id="amount" value="800" class="w-full p-3 border border-gray-300 rounded-lg bg-gray-200" readonly required />
        </div>
      </div>
      
      <!-- Declaration -->
      <div class="text-left mt-4 text-white">
        <p class="text-sm">Declaration - I hereby declare that the information provided by me is true and subject to verification by Moople Institute of Animation and Design</p>
        <div class="mt-2">
          <input type="checkbox" name="agree" id="chktc" value="1" required>
          <label for="chktc" class="text-sm">I accept the 
            <a target="_blank" href="<?php echo base_url('./assets/pdf/payment-portal.pdf'); ?>" class="text-blue-500 underline">
              Regulation & Disclaimer
            </a> of Moople Institute of Animation and Design
          </label>
        </div>
      </div>
      
      <!-- Submit Button -->
      <div class="text-left mt-4">

        <input type="hidden" name="student_type" value="Moople Applicants 2026" />
        <input type="hidden" name="canvas_payment_type" value="BSC" />


        <button type="submit" name="submit" class="w-[250px] px-5 py-2 bg-gradient-to-r from-[#F08A31] to-[#B5341D] rounded-lg text-white hover:bg-gradient-to-r hover:from-[#B5341D] hover:to-[#F08A31] transition duration-500 ease flex justify-center items-center gap-x-2 mx-auto">
          Submit Now
          <img src="./assets/icons/send.png" alt="" width="18" height="18">
        </button>
      </div>
    </form>
  </div>
</section>


 <script>
   function isNumberKey(evt) {

      var charCode = (evt.which) ? evt.which : event.keyCode



      if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode != 46) {

         return false;

      }

      else {

         return true;

      }

   }

</script>

<script type="text/javascript">
   document.addEventListener("DOMContentLoaded", function () {
      var amountInput = document.getElementById("amount");

      amountInput.addEventListener("keydown", function (e) {
         if (e.key === "Backspace" || e.key === "Delete") {
            e.preventDefault(); // Prevent deletion
         }
      });
   });
</script>
<script type="text/javascript">
   document.addEventListener("DOMContentLoaded", function () {
      // Get the category head dropdown
      var headCategoryDropdown = document.getElementById("headcategory");
      var categoryDropdown = document.getElementById("category");

      // Listen for changes in the Category Head dropdown
      headCategoryDropdown.addEventListener("change", function () {
         updateCategoryOptions();
      });

      function updateCategoryOptions() {
         var headCategory = headCategoryDropdown.value;
         categoryDropdown.innerHTML = '<option selected disabled value="">Select Category</option>'; // Reset options

         var categories = {
            "Graphic Design": ["Minimalist Movie Poster","Magazine Cover Design"],
            "Web Design": ["Web Template Design", "Responsive Web Design"],
            "3D Generalist": ["3D Environment Walkthrough","3D Product advertisement for Reels","3D Concept Character Design"],
            "3D Animation": ["Acting for Animation","Animatics to Animation","Animated Dance Reel","Animated Short Film"],
            "VFX": ["Rotoscoping Trailer","Digital Matte Painting","Explainer Video","VFX Short Film"]
         };

         // Check if the selected headCategory exists in categories
         if (categories[headCategory]) {
            categories[headCategory].forEach(function (item) {
               var option = document.createElement("option");
               option.value = item;
               option.textContent = item;
               categoryDropdown.appendChild(option);
            });
         }
      }
   });
</script>
<script>
  const amountField = document.getElementById('amount');
  const today = new Date();
  const marchEnd = new Date('2026-04-16');
  const augustEnd = new Date('2026-08-16');

  if (today < marchEnd) {
    amountField.value = '400';
  } else if (today < augustEnd) {
    amountField.value = '800';
  } else {
    amountField.value = '800'; // Default value if outside the date range
  }
</script>
<?php include('footer.php');?>