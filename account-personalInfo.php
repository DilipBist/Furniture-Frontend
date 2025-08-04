<?php 
$pageTitle = 'Account-Personalinfo';
include 'inc/header.php' 
?>
<!-- ACCOUNT PERSONAL INFO SECTION STARTS  -->
<section class="account_personal_info">
    <div class="container">
        <div class="bread_cumb">
            <a href="account.php">My Account</a>
            <span>/</span>
            <p>Edit Account Information</p>
        </div>

        <div class="account_personal_info_Detail mt-3 mt-lg-4">
            <h2>Account Information</h2>
            <p>You can make updates to your account information at any time by clicking “Edit” next to the information you'd like to review or change. Make sure to click “Save” after making an update!</p>

            <form action="" class="d-flex flex-column gap-3 mt-4 mt-lg-5">
                <div>
                    <div class="common_form_heading">
                        <h4>Account Name</h4>
                        <button id="editToggleBtn" type="button">
                            <img src="assets/images/icons/edit.svg" alt="edit icon">
                            <span id="editBtnText">Edit</span>
                        </button>
                    </div>

                    <input type="text" id="displayName" name="name" placeholder="John Doe">

                    <div class="edit_form d-none my-3 flex-column gap-3" id="editSection">
                        <div class="edit_input_form">
                            <input type="text" name="fname" value="John">
                            <p>First Name</p>
                        </div>
                        <div class="edit_input_form">
                            <input type="text" name="lname" value="Doe">
                            <p>Last Name</p>
                        </div>
                        <button>Save Account Name</button>
                    </div>
                </div>


                <div>
                    <div class="common_form_heading">
                        <h4>Email Address</h4>
                    </div>
                    <input type="email" name="email" placeholder="johndoe123@gmail.com">
                </div>
                <div>
                    <div class="common_form_heading">
                        <h4>Contact</h4>
                        <button type="button">
                            <img src="assets/images/icons/edit.svg" alt="edit icon">
                            <span> Edit</span>
                        </button>
                    </div>
                    <input type="number" name="phone" placeholder="+1 (555) 123-4567">
                </div>


                <div>
                    <div class="common_form_heading">
                        <h4>Password</h4>
                        <button id="passwordEdit" type="button">
                            <img src="assets/images/icons/edit.svg" alt="edit icon">
                            <span id="passwordEditText"> Edit</span>
                        </button>
                    </div>
                    <input type="password" id="displayPassword" name="password" placeholder="***********">

                    <div class="edit_form_password d-none flex-column gap-3">
                        <div class="position-relative">
                            <input type="password" class="password" name="current_password" placeholder="Current Password">
                            <div class="show_hide_password">Show</div>
                        </div>
                        <div class="position-relative">
                            <input type="password" class="password" name="new_password" placeholder="New Password">
                            <div class="show_hide_password">Show</div>
                        </div>
                        <div class="position-relative">
                            <input type="password" class="password" name="confirm_password" placeholder="Confirm Password">
                            <div class="show_hide_password">Show</div>
                        </div>
                        <button>Save Account Name</button>

                    </div>
                </div>


            </form>
        </div>
    </div>
</section>
<!-- ACCOUNT PERSONAL INFO SECTION ENDS -->

<?php include 'inc/footer.php'; ?>