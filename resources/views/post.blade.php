<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    body
{
margin: 0;
padding: 0;
font-family: sans-serif;
background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url({{asset('data/images/image7.jpg')}});
background-size: cover;
background-position: center;
}
.Login-form
{
width: 300px;
box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0);
background: #fff;
padding: 20px;
margin: 8% auto 0;
text-align: center;
}

.Login-form h1
{
color: #1c8adb;
margin-bottom: 30px;

}

.Register-form
{
width: 500px;
box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0);
background: #fff;
padding: 20px;
margin: 8% auto 0;
text-align: center;
}

.Register-form h1
{
color: #1c8adb;
margin-bottom: 30px;

}

.Post-form
{
width: 500px;
box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0);
background: #fff;
padding: 20px;
margin: 8% auto 0;
text-align: left;
}

.Post-form h1
{
color: #1c8adb;
margin-bottom: 30px;

}


.input-box
{
    border-radius: 20px;
    padding: 10px;
    margin: 10px 0;
    width: 90%;
    border: 1px solid #999;
    outline: none;
}

.input-box2
{
    border-radius: 20px;
    padding: 10px;
    margin: 10px 0;
    width: 50%;
    border: 1px solid #999;
    outline: none;
}

.input-box3
{
    border-radius: 20px;
    padding: 10px;
    margin: 10px 0;
    width: 97%;
    border: 1px solid #999;
    outline: none;
}



.input-box4
{
    border-radius: 20px;
    padding: 10px;
    margin: 10px 0;
    width: 43%;
    border: 1px solid #999;
    outline: none;
}






button
{
    color:#fff;
    width: 100%;
    padding: 10px;
    border-radius: 20px;
    font-size: 15px;
    margin: 10px 0;
    border: none;
    outline: none;
    cursor: pointer;

}
.signup-btn
{
    background-color: #1c8adb;
}
.gmail-btn
{
    background-color: #ff1717;
}

.Next-btn
{
    background-color:  #1c8adb;
}

a
{
    text-decoration: none;
}
hr{
    margin-top: 20px;
    width: 80%;
}
.or
{
    background: #fff;
    width: 30px;
    margin: -19px auto 10px;
}
img
{

    width: 70px;
    margin-top: -50px;
}



#regForm {
    background-color: #ffffff;
    margin: 100px auto;
    font-family: Raleway;
    padding: 40px;
    width: 70%;
    min-width: 300px;
  }
  
  h1 {
    text-align: center; 
    color: #1c8adb; 
  }
  .tab {
    display: none;
  }

  #prevBtn {
    background-color: #bbbbbb;
  }
  
  /* Make circles that indicate the steps of the form: */
  .step {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbbbbb;
    border: none;  
    border-radius: 50%;
    display: inline-block;
    opacity: 0.5;
  }
  
  .step.active {
    opacity: 1;
  }
  
  /* Mark the steps that are finished and valid: */
  .step.finish {
    background-color: #4CAF50;
  }





  </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post a Task</title>
    <link rel="icon" href="labour.ico" sizes="16x16" type="image/png">
  
</head>
<body>
    
    <form id="regForm" action="/store_post" method="POST">
        @csrf
        <h1>Kia Kaam Krwana Chaty Hain?</h1>
        <hr>
        <!-- One "tab" for each step in the form: -->
        <div class="tab">
         <h1>DETAILS</h1>
          <p>Task title<br>
          <input type="text" name="title" class="input-box3" placeholder="e.g clean my car"></p>
          <p>Describe your task in more detail<br>
          <input type="text" name="description" class="input-box3" placeholder="e.g clean my car in my house"></p>
        </div> 
        <div class="tab">
            <h1>LOCATION</h1>
            <p>City<br>
              <select name="city" id="Location" class="input-box3" required>
                <option value="" disabled selected>Select The City</option>
                <option value="Islamabad">Islamabad</option>
                <option value="" disabled>Punjab Cities</option>
                <option value="Ahmed Nager Chatha">Ahmed Nager Chatha</option>
                <option value="Ahmadpur East">Ahmadpur East</option>
                <option value="Ali Khan Abad">Ali Khan Abad</option>
                <option value="Alipur">Alipur</option>
                <option value="Arifwala">Arifwala</option>
                <option value="Attock">Attock</option>
                <option value="Bhera">Bhera</option>
                <option value="Bhalwal">Bhalwal</option>
                <option value="Bahawalnagar">Bahawalnagar</option>
                <option value="Bahawalpur">Bahawalpur</option>
                <option value="Bhakkar">Bhakkar</option>
                <option value="Burewala">Burewala</option>
                <option value="Chillianwala">Chillianwala</option>
                <option value="Chakwal">Chakwal</option>
                <option value="Chichawatni">Chichawatni</option>
                <option value="Chiniot">Chiniot</option>
                <option value="Chishtian">Chishtian</option>
                <option value="Daska">Daska</option>
                <option value="Darya Khan">Darya Khan</option>
                <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                <option value="Dhaular">Dhaular</option>
                <option value="Dina">Dina</option>
                <option value="Dinga">Dinga</option>
                <option value="Dipalpur">Dipalpur</option>
                <option value="Faisalabad">Faisalabad</option>
                <option value="Ferozewala">Ferozewala</option>
                <option value="Fateh Jhang">Fateh Jang</option>
                <option value="Ghakhar Mandi">Ghakhar Mandi</option>
                <option value="Gojra">Gojra</option>
                <option value="Gujranwala">Gujranwala</option>
                <option value="Gujrat">Gujrat</option>
                <option value="Gujar Khan">Gujar Khan</option>
                <option value="Hafizabad">Hafizabad</option>
                <option value="Haroonabad">Haroonabad</option>
                <option value="Hasilpur">Hasilpur</option>
                <option value="Haveli Lakha">Haveli Lakha</option>
                <option value="Jatoi">Jatoi</option>
                <option value="Jalalpur">Jalalpur</option>
                <option value="Jattan">Jattan</option>
                <option value="Jampur">Jampur</option>
                <option value="Jaranwala">Jaranwala</option>
                <option value="Jhang">Jhang</option>
                <option value="Jhelum">Jhelum</option>
                <option value="Kalabagh">Kalabagh</option>
                <option value="Karor Lal Esan">Karor Lal Esan</option>
                <option value="Kasur">Kasur</option>
                <option value="Kamalia">Kamalia</option>
                <option value="Kamoke">Kamoke</option>
                <option value="Khanewal">Khanewal</option>
                <option value="Khanpur">Khanpur</option>
                <option value="Kharian">Kharian</option>
                <option value="Khushab">Khushab</option>
                <option value="Kot Addu">Kot Addu</option>
                <option value="Jauharabad">Jauharabad</option>
                <option value="Lahore">Lahore</option>
                <option value="Lalamusa">Lalamusa</option>
                <option value="Layyah">Layyah</option>
                <option value="Liaquat Pur">Liaquat Pur</option>
                <option value="Lodhran">Lodhran</option>
                <option value="Malakwal">Malakwal</option>
                <option value="Mamoori">Mamoori</option>
                <option value="Mailsi">Mailsi</option>
                <option value="Mandi Bahauddin">Mandi Bahauddin</option>
                <option value="Mian Channu">Mian Channu</option>
                <option value="Mianwali">Mianwali</option>
                <option value="Multan">Multan</option>
                <option value="Murree">Murree</option>
                <option value="Muridke">Muridke</option>
                <option value="Mianwali Bangla">Mianwali Bangla</option>
                <option value="Muzaffargarh">Muzaffargarh</option>
                <option value="Narowal">Narowal</option>
                <option value="Nankana Sahib">Nankana Sahib</option>
                <option value="Okara">Okara</option>
                <option value="Renala Khurd">Renala Khurd</option>
                <option value="Pakpattan">Pakpattan</option>
                <option value="Pattoki">Pattoki</option>
                <option value="Pir Mahal">Pir Mahal</option>
                <option value="Qaimpur">Qaimpur</option>
                <option value="Qila Didar Singh">Qila Didar Singh</option>
                <option value="Rabwah">Rabwah</option>
                <option value="Raiwind">Raiwind</option>
                <option value="Rajanpur">Rajanpur</option>
                <option value="Rahim Yar Khan">Rahim Yar Khan</option>
                <option value="Rawalpindi">Rawalpindi</option>
                <option value="Sadiqabad">Sadiqabad</option>
                <option value="Safdarabad">Safdarabad</option>
                <option value="Sahiwal">Sahiwal</option>
                <option value="Sangla Hill">Sangla Hill</option>
                <option value="Sarai Alamgir">Sarai Alamgir</option>
                <option value="Sargodha">Sargodha</option>
                <option value="Shakargarh">Shakargarh</option>
                <option value="Sheikhupura">Sheikhupura</option>
                <option value="Sialkot">Sialkot</option>
                <option value="Sohawa">Sohawa</option>
                <option value="Soianwala">Soianwala</option>
                <option value="Siranwali">Siranwali</option>
                <option value="Talagang">Talagang</option>
                <option value="Taxila">Taxila</option>
                <option value="Toba Tek Singh">Toba Tek Singh</option>
                <option value="Vehari">Vehari</option>
                <option value="Wah Cantonment">Wah Cantonment</option>
                <option value="Wazirabad">Wazirabad</option>
                <option value="" disabled>Sindh Cities</option>
                <option value="Badin">Badin</option>
                <option value="Bhirkan">Bhirkan</option>
                <option value="Rajo Khanani">Rajo Khanani</option>
                <option value="Chak">Chak</option>
                <option value="Dadu">Dadu</option>
                <option value="Digri">Digri</option>
                <option value="Diplo">Diplo</option>
                <option value="Dokri">Dokri</option>
                <option value="Ghotki">Ghotki</option>
                <option value="Haala">Haala</option>
                <option value="Hyderabad">Hyderabad</option>
                <option value="Islamkot">Islamkot</option>
                <option value="Jacobabad">Jacobabad</option>
                <option value="Jamshoro">Jamshoro</option>
                <option value="Jungshahi">Jungshahi</option>
                <option value="Kandhkot">Kandhkot</option>
                <option value="Kandiaro">Kandiaro</option>
                <option value="Karachi">Karachi</option>
                <option value="Kashmore">Kashmore</option>
                <option value="Keti Bandar">Keti Bandar</option>
                <option value="Khairpur">Khairpur</option>
                <option value="Kotri">Kotri</option>
                <option value="Larkana">Larkana</option>
                <option value="Matiari">Matiari</option>
                <option value="Mehar">Mehar</option>
                <option value="Mirpur Khas">Mirpur Khas</option>
                <option value="Mithani">Mithani</option>
                <option value="Mithi">Mithi</option>
                <option value="Mehrabpur">Mehrabpur</option>
                <option value="Moro">Moro</option>
                <option value="Nagarparkar">Nagarparkar</option>
                <option value="Naudero">Naudero</option>
                <option value="Naushahro Feroze">Naushahro Feroze</option>
                <option value="Naushara">Naushara</option>
                <option value="Nawabshah">Nawabshah</option>
                <option value="Nazimabad">Nazimabad</option>
                <option value="Qambar">Qambar</option>
                <option value="Qasimabad">Qasimabad</option>
                <option value="Ranipur">Ranipur</option>
                <option value="Ratodero">Ratodero</option>
                <option value="Rohri">Rohri</option>
                <option value="Sakrand">Sakrand</option>
                <option value="Sanghar">Sanghar</option>
                <option value="Shahbandar">Shahbandar</option>
                <option value="Shahdadkot">Shahdadkot</option>
                <option value="Shahdadpur">Shahdadpur</option>
                <option value="Shahpur Chakar">Shahpur Chakar</option>
                <option value="Shikarpaur">Shikarpaur</option>
                <option value="Sukkur">Sukkur</option>
                <option value="Tangwani">Tangwani</option>
                <option value="Tando Adam Khan">Tando Adam Khan</option>
                <option value="Tando Allahyar">Tando Allahyar</option>
                <option value="Tando Muhammad Khan">Tando Muhammad Khan</option>
                <option value="Thatta">Thatta</option>
                <option value="Umerkot">Umerkot</option>
                <option value="Warah">Warah</option>
                <option value="" disabled>Khyber Cities</option>
                <option value="Abbottabad">Abbottabad</option>
                <option value="Adezai">Adezai</option>
                <option value="Alpuri">Alpuri</option>
                <option value="Akora Khattak">Akora Khattak</option>
                <option value="Ayubia">Ayubia</option>
                <option value="Banda Daud Shah">Banda Daud Shah</option>
                <option value="Bannu">Bannu</option>
                <option value="Batkhela">Batkhela</option>
                <option value="Battagram">Battagram</option>
                <option value="Birote">Birote</option>
                <option value="Chakdara">Chakdara</option>
                <option value="Charsadda">Charsadda</option>
                <option value="Chitral">Chitral</option>
                <option value="Daggar">Daggar</option>
                <option value="Dargai">Dargai</option>
                <option value="Darya Khan">Darya Khan</option>
                <option value="Dera Ismail Khan">Dera Ismail Khan</option>
                <option value="Doaba">Doaba</option>
                <option value="Dir">Dir</option>
                <option value="Drosh">Drosh</option>
                <option value="Hangu">Hangu</option>
                <option value="Haripur">Haripur</option>
                <option value="Karak">Karak</option>
                <option value="Kohat">Kohat</option>
                <option value="Kulachi">Kulachi</option>
                <option value="Lakki Marwat">Lakki Marwat</option>
                <option value="Latamber">Latamber</option>
                <option value="Madyan">Madyan</option>
                <option value="Mansehra">Mansehra</option>
                <option value="Mardan">Mardan</option>
                <option value="Mastuj">Mastuj</option>
                <option value="Mingora">Mingora</option>
                <option value="Nowshera">Nowshera</option>
                <option value="Paharpur">Paharpur</option>
                <option value="Pabbi">Pabbi</option>
                <option value="Peshawar">Peshawar</option>
                <option value="Saidu Sharif">Saidu Sharif</option>
                <option value="Shorkot">Shorkot</option>
                <option value="Shewa Adda">Shewa Adda</option>
                <option value="Swabi">Swabi</option>
                <option value="Swat">Swat</option>
                <option value="Tangi">Tangi</option>
                <option value="Tank">Tank</option>
                <option value="Thall">Thall</option>
                <option value="Timergara">Timergara</option>
                <option value="Tordher">Tordher</option>
                <option value="" disabled>Balochistan Cities</option>
                <option value="Awaran">Awaran</option>
                <option value="Barkhan">Barkhan</option>
                <option value="Chagai">Chagai</option>
                <option value="Dera Bugti">Dera Bugti</option>
                <option value="Gwadar">Gwadar</option>
                <option value="Harnai">Harnai</option>
                <option value="Jafarabad">Jafarabad</option>
                <option value="Jhal Magsi">Jhal Magsi</option>
                <option value="Kacchi">Kacchi</option>
                <option value="Kalat">Kalat</option>
                <option value="Kech">Kech</option>
                <option value="Kharan">Kharan</option>
                <option value="Khuzdar">Khuzdar</option>
                <option value="Killa Abdullah">Killa Abdullah</option>
                <option value="Killa Saifullah">Killa Saifullah</option>
                <option value="Kohlu">Kohlu</option>
                <option value="Lasbela">Lasbela</option>
                <option value="Lehri">Lehri</option>
                <option value="Loralai">Loralai</option>
                <option value="Mastung">Mastung</option>
                <option value="Musakhel">Musakhel</option>
                <option value="Nasirabad">Nasirabad</option>
                <option value="Nushki">Nushki</option>
                <option value="Panjgur">Panjgur</option>
                <option value="Pishin Valley">Pishin Valley</option>
                <option value="Quetta">Quetta</option>
                <option value="Sherani">Sherani</option>
                <option value="Sibi">Sibi</option>
                <option value="Sohbatpur">Sohbatpur</option>
                <option value="Washuk">Washuk</option>
                <option value="Zhob">Zhob</option>
                <option value="Ziarat">Ziarat</option>
            </select>
              Address<br>
            <input type="Address" name="address" class="input-box3" placeholder="House Address">
        </div>
        <div class="tab">
            <h1>BUDGET & TIME</h1>
            <p>Price<br>
            <input type="text" name="price" class="input-box3" id="ccc" onchange="numberValidation(this.value)" placeholder="Price"></p>
            <p>Date
            <input type="Date" name="date" class="input-box4" placeholder="date for booking">
           <br> Time
            <input type="time" name="time" class="input-box4" placeholder="time for booking"></p>
        </div>
        <div style="overflow:auto;"></div>
          <div style="float:center;";>
            <button type="button" class="signup-btn" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            <button type="button" class="signup-btn" id="nextBtn" onclick="nextPrev(1)">Next</button>
          </div>
        </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
        </div>
      </form>

<script>
  
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab
    
    function numberValidation(Text){
      if(Text<300){
        alert("Value must be greater than 300");
        var x = document.getElementById("ccc");
        x.value = ""; 
      }
    }


    function showTab(n) {
      // This function will display the specified tab of the form...
      var x = document.getElementsByClassName("tab");
      x[n].style.display = "block";
      //... and fix the Previous/Next buttons:
      if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
      } else {
        document.getElementById("prevBtn").style.display = "inline";
      }
      if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
        
      } else {
        document.getElementById("nextBtn").innerHTML = "Next";
      }
      //... and run a function that will display the correct step indicator:
      fixStepIndicator(n)
    }
    
    function nextPrev(n) {
      // This function will figure out which tab to display
      var x = document.getElementsByClassName("tab");
      // Exit the function if any field in the current tab is invalid:
      if (n == 1 && !validateForm()) return false;
      // Hide the current tab:
      x[currentTab].style.display = "none";
      // Increase or decrease the current tab by 1:
      currentTab = currentTab + n;
      // if you have reached the end of the form...
      if (currentTab >= x.length) {
        // ... the form gets submitted:
        document.getElementById('nextBtn').type = 'submit';
        document.getElementById("regForm").submit();
        return false;
      }
      // Otherwise, display the correct tab:
      showTab(currentTab);
    }
    
    function validateForm() {
      // This function deals with validation of the form fields
      var x, y, i, valid = true;
      x = document.getElementsByClassName("tab");
      y = x[currentTab].getElementsByTagName("input");
      // A loop that checks every input field in the current tab:
      for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
          // add an "invalid" class to the field:
          y[i].className += " invalid";
          // and set the current valid status to false
          valid = false;
        }
      }
      // If the valid status is true, mark the step as finished and valid:
      if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
      }
      return valid; // return the valid status
    }
    
    function fixStepIndicator(n) {
      // This function removes the "active" class of all steps...
      var i, x = document.getElementsByClassName("step");
      for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
      }
      //... and adds the "active" class on the current step:
      x[n].className += " active";
    }




    </script>
    

</body>
</html>

