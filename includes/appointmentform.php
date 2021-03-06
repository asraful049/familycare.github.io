<?php
    include_once('includes/header.php');
  ?>

<!-- Appointment Form -->
<div class="appointmentform" id="appointmentform">
    <div class="container">
        <div class="register-full">
            <div class="register-right">
                <div class="register-in">

                    <h3>APPOINTMENT FORM</h3>
                    <div class=" w3_abp">
                        <div class="registerimg">
                            <img src="images/app.jpg" class="img-responsive" alt="" />
                        </div>
                    </div>
                    <div class=" register-form">
                        <form action="#" method="post">
                            <div class="fields-grid">
                                <div class="styled-input">
                                    <input type="text" name="Your name" required="">
                                    <label>Patients Name</label>
                                    <span></span>
                                </div>
                                <div class="styled-input">
                                    <input type="email" name="Email" required="">
                                    <label>Email</label>
                                    <span></span>
                                </div>
                                <div class="styled-input">
                                    <input type="text" name="Phone" required="">
                                    <label>Phone Number</label>
                                    <span></span>
                                </div>
                                <div class="styled-input">
                                    <h2>Gender :</h2>
                                    <input type="radio" name="gender" value="male"> Male
                                    <input type="radio" name="gender" value="female"> Female
                                </div>
                                <div class="styled-input">
                                    <select id="category1" required="">
                                        <option value="">Specialization*</option>
                                        <option value="">Cardiology</option>
                                        <option value="">Heart Surgery</option>
                                        <option value="">Skin Care</option>
                                        <option value="">Body Check-up</option>
                                        <option value="">Numerology</option>
                                        <option value="">Diagnosis</option>
                                        <option value="">Others</option>
                                    </select>
                                    <span></span>
                                </div>
                                <div class="styled-input">
                                    <select id="category2" required="">
                                        <option value="">Choose Hospital*</option>
                                        <option value="">Hospital 1</option>
                                        <option value="">Hospital 2</option>
                                        <option value="">Hospital 3</option>
                                        <option value="">Hospital 4</option>
                                        <option value="">Hospital 5</option>
                                    </select>
                                    <span></span>
                                </div>
                                <div class="styled-input">
                                    <input class="date" id="datepicker" name="Text" type="text" value="MM/DD/YYYY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'MM/DD/YYYY';}" required="">
                                </div>
                                <div class="content-wthree2">
                                    <div class="grid-w3layouts1">
                                        <div class="w3-agile1">
                                            <label class="rating">Taking any medications currently?<span>*</span></label>
                                            <ul>
                                                <li>
                                                    <input type="radio" id="a-option" name="selector1">
                                                    <label for="a-option">Yes </label>
                                                    <div class="check"></div>
                                                </li>
                                                <li>
                                                    <input type="radio" id="b-option" name="selector1">
                                                    <label for="b-option">No</label>
                                                    <div class="check">
                                                        <div class="inside"></div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="styled-input">
                                    <label class="list">If yes,Please list it<span></span></label>
                                    <textarea></textarea>
                                    <span></span>
                                </div>
                                <input type="submit" name="submit" value="Book Appointment">

                            </div>

                        </form>

                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- //Appointment Form -->
