<!DOCTYPE html>
<html lang="en">

<title>Africa Grains Online | Apply Now</title>

<link rel="stylesheet" href="css/style2.css">
<link rel="stylesheet" href="css/style.css">

<body>
    <?php require_once "header.php"; ?>
    <div class="container">
        <!-- MultiStep Form -->
        <div class="container">
            <header>Application Form</header>
            <p style="color: #808080;">Fill all fields to proceed</p>
            <p style="color: red;"> All fields with  *  are required</p>

            <div class="form-outer">
                <form action="connect.php" method="POST" id="msform">
                    <div class="page slide-page">
                        <div class="title">Personal Details:</div>
                        <div class="field">
                            <div class="label">First Name :  <span style="color: red;"> * </span></div>
                            <input type="text" name="firstName" required maxlength="45"/>
                        </div>
                        <div class="field">
                            <div class="label">Last Name  :  <span style="color: red;"> * </span></div>
                            <input type="text" name="lastName" required maxlength="45"/>
                        </div>
                        <div class="field">
                            <div class="label">Email   :  <span style="color: red;"> * </span></div>
                            <input type="email" name="email" required />
                        </div>
                        <div class="field">
                            <div class="label">Phone Number   :  <span style="color: red;"> * </span></div>
                            <input type="phone" name="phone" name="phone" required minlength="10" maxlength="15">
                        </div>
                        <div class="field">
                            <div class="label">
                                Gender
                            </div>
                            <select name="gender" required>
                                <option value="none" selected>Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">other</option>
                            </select>
                        </div>
                        <div class="field">
                            <div class="label">Year of Birth</div>
                            <input type="number" name="dob" minlength="4" maxlength="4" max="2021" >
                        </div>

                        <div class="field">
                            <div class="label">City / Town  :  <span style="color: red;"> * </span></div>
                            <input type="text" name="city" required maxlength="20">
                        </div>
                        <div class="field">
                            <div class="label">Country   :  <span style="color: red;"> * </span></div>
                            <!-- Africa -->
                            <select id="country" name="country" >
                                <option>Select country</option>
                                <option value="Algeria">Algeria</option>
                                <option value="Angola">Angola</option>
                                <option value="Benin">Benin</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Congo, Democratic Republic of the Congo">Congo, Democratic Republic of the Congo</option>
                                <option value="Cote D'Ivoire">Cote D'Ivoire</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Egypt">Egypt</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Mali">Mali</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Helena">Saint Helena</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Sudan">South Sudan</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                <option value="Togo">Togo</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>

                        </div>
                        <div class="field">
                            <button class="firstNext next" >Next</button>
                        </div>
                    </div>
                    <div class="page">
                        <div class="title">Company Details :</div>
                        <div class="field">
                            <div class="label">Mill / Company Name   :  <span style="color: red;"> * </span></div>
                            <input type="text" name="millcompany" required maxlength="50">
                        </div>
                        <div class="field">
                            <div class="label">Role in Company  :  <span style="color: red;"> * </span></div>
                            <input type="text" name="role" required maxlength="30">
                        </div>
                        <div class="field">
                            <div class="label">Company Email  :  <span style="color: red;"> * </span></div>
                            <input type="text" name="compEmail" required>
                        </div>
                        <div class="field">
                            <div class="label">Mill Address  :  <span style="color: red;"> * </span></div>
                            <input type="text" name="address" required>
                        </div>
                        <div class="field">
                            <div class="label">No. of farmers contracting  :  <span style="color: red;"> * </span></div>
                            <input type="number" name="farmerNumber" required>
                        </div>
                        <div class="field">
                            <div class="label">Processing Capacity (in mt/hr)  :  <span style="color: red;"> * </span> </div>
                            <input type="number" name="capacity" required>
                        </div>

                        <div class="field btns">
                            <button class="prev-1 prev">Previous</button>
                            <button class="submit"> APPLY</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
    <?php require_once "footer.php"; ?>
</body>




</html>