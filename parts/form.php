<div class="rpv-form-container">
    <form method="POST" enctype="multipart/form-data">

        <div class="rpv-row">
            <label for="rpv-title"> <?php _e( 'Title:', 'restric-p-v' );?></label>
            <input type="text" placeholder="Mr, Ms, Mrs, Dr" name="rpv-title" id="rpv-title">
        </div>

        <div class="rpv-row rpv-mult-cols">

            <div class="rpv-single-row">
                <label for="rpv-name"> <?php _e( 'Name: <span class="rpv-req">*</span>', 'restric-p-v' );?></label>
                <input type="text" name="rpv-name" id="rpv-name" required>
            </div>
            <div class="rpv-single-row">
                <label for="rpv-company"> <?php _e( 'Company: <span class="rpv-req">*</span>', 'restric-p-v' );?></label>
                <input type="text" name="rpv-company" id="rpv-company" required>
            </div>

        </div>

        <div class="rpv-row rpv-mult-cols-3">

            <div class="rpv-single-row">
                <label for="rpv-addr"> <?php _e( 'Address - street:', 'restric-p-v' );?></label>
                <input type="text" name="rpv-addr" id="rpv-addr">
            </div>
            <div class="rpv-single-row">
                <label for="rpv-city"> <?php _e( 'City:', 'restric-p-v' );?></label>
                <input type="text" name="rpv-city" id="rpv-city">
            </div>
            <div class="rpv-single-row">
                <label for="rpv-country"> <?php _e( 'Country:', 'restric-p-v' );?></label>
                <input type="text" name="rpv-country" id="rpv-country">
            </div>

        </div>

        <div class="rpv-row">
            <label for="rpv-job-title"> <?php _e( 'Job Title:', 'restric-p-v' );?></label>
            <input type="text" name="rpv-job-title" id="rpv-job-title">
        </div>

        <div class="rpv-row">
            <label for="rpv-email"> <?php _e( 'Email Address:  <span class="rpv-req">*</span>', 'restric-p-v' );?></label>
            <input type="email" name="rpv-email" id="rpv-email" required>
        </div>
                
        <?php
            if( ! is_user_logged_in() ) {
                ?>
                    <div class="rpv-row">
                        <label for="rpv-password"> <?php _e( 'Password:  <span class="rpv-req">*</span>', 'restric-p-v' );?></label>
                        <input type="password" name="rpv-password" id="rpv-password" placeholder="It will be your Login Password">
                    </div>
                <?php 
            }
        ?>

        <div class="rpv-row rpv-mult-cols">

            <div class="rpv-single-row">
                <label for="rpv-telicom"> <?php _e( 'Telicom:', 'restric-p-v' );?></label>
                <input type="text" name="rpv-telicom" id="rpv-telicom">
            </div>
            <div class="rpv-single-row">
                <label for="rpv-mobile"> <?php _e( 'Mobile Number:', 'restric-p-v' );?></label>
                <input type="text" name="rpv-mobile" id="rpv-mobile">
            </div>

        </div>

        <div class="rpv-row">
            <label for="rpv-company-profile"> <?php _e( 'Company Profile:  <span class="rpv-req">*</span>', 'restric-p-v' );?></label>
            <textarea type="text" name="rpv-company-profile" id="rpv-company-profile" required></textarea>
        </div>

        <div class="rpv-row">
            <label for="rpv-key-com"> <?php _e( 'Key Competitors in Africa:  ', 'restric-p-v' );?></label>
            <input type="text" name="rpv-key-com" id="rpv-key-com">
        </div>

        <div class="rpv-row">
            <label for="rpv-business-partner"> <?php _e( 'Business Partnerships Sought:  ', 'restric-p-v' );?></label>
            <input type="text" name="rpv-business-partner" id="rpv-business-partner">
        </div>

        <div class="rpv-row">
            <label for="rpv-project-tar"> <?php _e( 'Projects Targeted for Investments:  ', 'restric-p-v' );?></label>
            <input type="text" name="rpv-project-tar" id="rpv-project-tar">
        </div>

        <div class="rpv-row">
            <label for="rpv-countries-tar"> <?php _e( 'Countries Targeted:  ', 'restric-p-v' );?></label>
            <input type="text" name="rpv-countries-tar" id="rpv-countries-tar">
        </div>

        <div class="rpv-row">
            <label for="rpv-industriy-sector"> <?php _e( 'Industry Sectors:  ', 'restric-p-v' );?></label>
            <input type="text" name="rpv-industriy-sector" id="rpv-industriy-sector">
        </div>

        <div class="rpv-row">
            <label for="rpv-network-event"> <?php _e( 'Networking Events Planned to Attend:  ', 'restric-p-v' );?></label>
            <input type="text" name="rpv-network-event" id="rpv-network-event">
        </div>

        <div class="rpv-row rpv-mult-cols">

            <div class="rpv-single-row">
                <label for="rpv-logo"> <?php _e( 'Upload Logo:', 'restric-p-v' );?></label>
                <input type="file" name="rpv-logo" id="rpv-logo">
            </div>
            <div class="rpv-single-row">
                <label for="rpv-profile-pic"> <?php _e( 'Upload Profile Pic:', 'restric-p-v' );?></label>
                <input type="file" name="rpv-profile-pic" id="rpv-profile-pic">
            </div>

        </div>

        <?php wp_nonce_field( 'rpv_nonce', '_wpnonce' ); ?>

        <!--submit button  -->
        <button type="submit" class="rpv-submit-btn" name="rpv-form-submit" id="rpv-form-submit"><?php _e( 'submit', 'restric-p-v' );?></button>

    </form >
</div>