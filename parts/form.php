<div class="rpv-form-container">
    <form>

        <div class="rpv-row">
            <label for="rpv-title"> <?php _e( 'Title :', 'restric-p-v' );?></label>
            <input type="text" placeholder="Mr, Ms, Mrs, Dr" id="rpv-title">
        </div>

        <div class="rpv-row">

            <div class="rpv-single-row">
                <label for="rpv-name"> <?php _e( 'Name: <span class="rpv-req">*</span>', 'restric-p-v' );?></label>
                <input type="text" id="rpv-name" required>
            </div>
            <div class="rpv-single-row">
                <label for="rpv-title"> <?php _e( 'Company: <span class="rpv-req">*</span>', 'restric-p-v' );?></label>
                <input type="text" id="rpv-company" required>
            </div>

        </div>

        <div class="rpv-row">

            <div class="rpv-single-row">
                <label for="rpv-addr"> <?php _e( 'Address - street:', 'restric-p-v' );?></label>
                <input type="text" id="rpv-addr">
            </div>
            <div class="rpv-single-row">
                <label for="rpv-city"> <?php _e( 'City:', 'restric-p-v' );?></label>
                <input type="text" id="rpv-city">
            </div>
            <div class="rpv-single-row">
                <label for="rpv-country"> <?php _e( 'Country:', 'restric-p-v' );?></label>
                <input type="text" id="rpv-country">
            </div>

        </div>

        <div class="rpv-row">
            <label for="rpv-job-title"> <?php _e( 'Job Title :', 'restric-p-v' );?></label>
            <input type="text" id="rpv-job-title">
        </div>

        <div class="rpv-row">
            <label for="rpv-email"> <?php _e( 'Email Address :  <span class="rpv-req">*</span>', 'restric-p-v' );?></label>
            <input type="text" id="rpv-email" required>
        </div>

        <div class="rpv-row">

            <div class="rpv-single-row">
                <label for="rpv-telicom"> <?php _e( 'Telicom:', 'restric-p-v' );?></label>
                <input type="text" id="rpv-telicom">
            </div>
            <div class="rpv-single-row">
                <label for="rpv-mobile"> <?php _e( 'Mobile Number:', 'restric-p-v' );?></label>
                <input type="text" id="rpv-mobile">
            </div>

        </div>

        <div class="rpv-row">
            <label for="rpv-company-profile"> <?php _e( 'Company Profile :  <span class="rpv-req">*</span>', 'restric-p-v' );?></label>
            <textarea type="text" id="rpv-company-profile" required></textarea>
        </div>

        <!--submit button  -->
        <button type="submit" id="rpv-form-submit">submit</button>

    </form>
</div>