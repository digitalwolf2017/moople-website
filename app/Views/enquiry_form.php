<?php include('header.php'); ?>

<main id="reserve2" class="mt-[10rem] lg:mt-[8.3rem] text-white">
   <section class="pt-[30px] pb-[60px]">
      <div class="container mx-auto px-4">
         <form id="frm_contact" name="frm_contact" method="post" enctype="multipart/form-data"
            action="<?php echo base_url('payments/home/request'); ?>">
            <div>
               <h1 class="cds text-center font-bold text-[20px] lg:text-[30px]">
                  Please submit the below form to make the online payment
               </h1>
               <h2 class="text-[25px] py-3">Personal Details</h2>
               <div class="flex flex-wrap gap-y-3">
                  <div class="w-full lg:w-[33.33%] px-2">
                     <label for="focusedinput">Course Pursuing<span style="color:red;">*</span></label>
                     <select onchange="select_city(this.value)" name="course" id="course"
                        class="block w-full rounded border-0 p-3 bg-[#FFF] text-[#000] shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        required="">
                        <option value="">Select Course</option>
                        <option value="BSc in Animation Film Making">BSc in Animation Film Making</option>
                        <option value="Advanced 3D Animation & AI">Advanced 3D Animation & AI</option>
                        <option value="2D Animation & AI">2D Animation & AI</option>
                        <option value="3D Modelling & AI">3D Modelling & AI</option>
                        <option value="BSc in VFX Film Making">BSc in VFX Film Making</option>
                        <option value="Visual Effects & AI">Visual Effects & AI</option>
                        <option value="Motion Graphics, Video Editing & AI">Motion Graphics, Video Editing & AI
                        </option>
                        <option value="Advanced Graphic Design & AI">Advanced Graphic Design & AI</option>
                        <option value="Graphic Design & AI">Graphic Design & AI</option>
                        <option value="Web Design & AI">Web Design & AI</option>
                        <option value="UI/UX Design & AI">UI/UX Design & AI</option>
                        <option value="Digital Marketing & AI">Digital Marketing & AI</option>
                        <option value="Others">Others</option>
                     </select>
                  </div>
                  <div class="w-full lg:w-[33.33%] px-2">
                     <label for="focusedinput">Select Your Branch<span style="color:red;">*</span></label>
                     <select name="location" onchange="locationss()" id="location"
                        class="block w-full rounded border-0 p-3 bg-[#FFF] text-[#000] shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        required="">
                        <option selected="selected" value="">Select Location</option>
                        <option value="Barrackpore">Barrackpore</option>
                        <option value="Barasat">Barasat</option>
                        <option value="Berhampore">Berhampore</option>
                        <option value="Baguiati">Baguiati</option>
                        <option value="Bardhaman">Bardhaman</option>
                        <option value="Chandannagar">Chandannagar</option>
                        <option value="Chowringhee">Chowringhee</option>
                        <option value="Dunlop">Dunlop</option>
                        <!--<option value="Elgin">Elgin</option>-->
                        <option value="Guwahati">Guwahati</option>
                        <!--<option value="Howrah">Howrah</option>-->
                        <option value="Jodhpur park">Jodhpur park</option>
                        <!--<option value="Kudghat">Kudghat</option>-->
                        <!--<option value="Lajpat Nagar Delhi">Lajpat Nagar Delhi</option>-->
                        <option value="Mecheda">Mecheda</option>
                        <option value="Midnapore">Midnapore</option>
                        <option value="New Alipore">New Alipore</option>
                        <!--<option value="Nirman Vihar Delhi">Nirman Vihar Delhi</option>-->
                        <option value="Sealdah">Sealdah</option>
                        <option value="Serampore">Serampore</option>
                        <option value="Siliguri">Siliguri</option>
                        <option value="Shyambazar">Shyambazar</option>
                        <option value="Sonarpur">Sonarpur</option>
                        <option value="Topsia">Topsia</option>
                        <!--<option value="Thane">Thane</option>-->
                        <!--<option value="Durgapur">Durgapur</option>-->
                         <option value="Online">Online</option> 
                     </select>
                  </div>
                  <div class="w-full lg:w-[33.33%] px-2">
                     <label for="focusedinput"> Candidate Name<span style="color:red;">*</span></label>
                     <div class="col-sm-8">
                        <input type="text" name="name"
                           class="block w-full rounded border-0 p-3 bg-[#FFF] text-[#000] shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                     </div>
                  </div>
                  <div class="w-full lg:w-[33.33%] px-2">
                     <label for="focusedinput"> Upload Your Photo<span style="color:red;">*</span></label>
                     <div class="col-sm-8">
                        <input type="file" name="img"
                           class="block w-full rounded border-0 p-3 bg-[#FFF] text-[#000] shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                           accept="image/*">
                        <small>max 1mb*</small>
                     </div>
                  </div>
                  <div class="w-full lg:w-[33.33%] px-2">
                     <label for="focusedinput">Date of Birth<span style="color:red;">*</span></label>
                     <div class="col-sm-8">
                        <input type="date" name="dob"
                           class="block w-full rounded border-0 p-3 bg-[#FFF] text-[#000] shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                     </div>
                  </div>
                  <div class="w-full lg:w-[33.33%] px-2">
                     <label for="focusedinput">Email<span style="color:red;">*</span></label>
                     <div class="col-sm-8">
                        <input type="email" name="email"
                           class="block w-full rounded border-0 p-3 bg-[#FFF] text-[#000] shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                     </div>
                  </div>
                  <div class="w-full lg:w-[33.33%] px-2">
                     <label for="focusedinput">Mobile Number<span style="color:red;">*</span></label>
                     <div class="col-sm-8">
                        <input type="text" name="mobile"
                           class="block w-full rounded border-0 p-3 bg-[#FFF] text-[#000] shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                     </div>
                  </div>
                  <div class="w-full lg:w-[33.33%] px-2">
                     <label for="focusedinput">Alternate Number</label>
                     <div class="col-sm-8">
                        <input type="text" name="altmobile"
                           class="block w-full rounded border-0 p-3 bg-[#FFF] text-[#000] shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                     </div>
                  </div>
                  <div class="w-full lg:w-[33.33%] px-2">
                     <label for="focusedinput">Gender<span style="color:red;">*</span></label>
                     <div class="col-sm-8">
                        <input type="text" name="gender"
                           class="block w-full rounded border-0 p-3 bg-[#FFF] text-[#000] shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                     </div>
                  </div>
                  <div class="w-full lg:w-[33.33%] px-2">
                     <label for="focusedinput">Enter Amount<span style="color:red;">*</span></label>
                     <div class="col-sm-8">
                        <input type="text" name="amount"
                           class="block w-full rounded border-0 p-3 bg-[#FFF] text-[#000] shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                     </div>
                  </div>
                  <div class="w-full lg:w-[33.33%] px-2">
                     <label for="focusedinput">Message</label>
                     <div class="col-sm-8">
                        <textarea rows="1" type="text" name="message"
                           class="block w-full rounded border-0 p-3 bg-[#FFF] text-[#000] shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                     </div>
                  </div>
                  <div class="w-full px-2">
                     <p class="text-[20px]">Declaration - I hereby declare that the information provided by me is true
                        and subject to verification
                        by Moople Institute of Animation and Design</p>
                     <div class="flex items-baseline gap-x-3">
                        <input type="checkbox" name="agree" id="chktc" value="1" required="">
                        <p>I accept the <a class="text-[#F08A31]" target="_blank"
                              href="<?php echo base_url('assets/pdf/payment-portal.pdf'); ?>"><strong> Regulation &
                                 Disclaimer</strong></a> of Moople Institute of Animation and Design</p>
                     </div>
                  </div>
                  <div class="w-full px-2 my-3">
                     <button
                        class="w-[200px] px-5 py-2 bg-gradient-to-r from-[#F08A31] to-[#B5341D] rounded-lg text-white hover:bg-gradient-to-r hover:from-[#B5341D] hover:to-[#F08A31] transition duration-500 ease flex justify-center gap-x-2"
                        name="submit" type="submit">Submit Now <img src="./assets/icons/send.png" alt="" width="18"
                           height="18"></button>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </section>

</main>





<script>
   function select_city(course) {

      //if(course=='B.sc')
      if (course == 'BSc in Animation' || course == 'BSc in VFX') {

         //$("#location option[value='Topsia']").prop('selected',true);
         //$("#locationd").show();
         //$("#location").hide();

         $("#locationd").removeAttr("required");
         $("#location").removeAttr("required");

         $("#locationlabel").hide();
         $("#locationd").hide();
         $("#location").hide();



      }
      else {
         $("#locationlabel").show();
         $("#location").show();
         $("#locationd").hide();
      }

   }
   function locationss() {
      var c = $("#course").val();
      //if(c=='B.sc')
      if (c == 'BSc in Animation' || c == 'BSc in VFX') {

         //$("#location option[value='Topsia']").prop('selected',true);
         $("#course").change();

      }

   }

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
<?php include('footer.php'); ?>