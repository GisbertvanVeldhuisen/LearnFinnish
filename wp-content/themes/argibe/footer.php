<section class="section section-contact">
    <div class="container">
        <div class="row">
            <div class="one-half">
                <h3>Stuur mij mijn website offerte</h3>
                <ul class="checkmark">
                    <li>Geheel vrijblijvend</li>
                    <li>Snelle reactie</li>
                    <li>Uitgebreide informatie</li>
                </ul>
            </div>
            <div class="one-half">
                <?php gravity_form( 1, false, false, false, '', true); ?>
            </div>
        </div>
    </div>
</section>
<section class="section section-footer">
    <div class="container">
        <div class="row">
            <div class="one-third">
                <h3>Navigeer</h3>
                <?php wp_nav_menu('Primary'); ?>
            </div>
            <div class="one-third">
                <h3>Contact</h3>
                <ul class="contact">
                    <li><a href="tel:0619222249">0619222249</a></li>
                    <li><a href="mailto:arno@argibe.nl">arno@argibe.nl</a></li>
                    <li><a href="mailto:gisbert@argibe.nl">gisbert@argibe.nl</a></li>
                </ul>
            </div>
            <div class="one-third">
                <h3>Volg ons</h3>
                <ul class="social">
                    <li><a href="https://www.instagram.com/argibe.nl/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/insta.svg" alt="instagram"></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="section section-subfooter">
    <div class="container">
        <div class="row">
            <div class="full">
                <p>Copyright Argibe</p>
            </div>
        </div>
    </div>
</section>

<?php wp_footer(); ?>

</body>

</html>
