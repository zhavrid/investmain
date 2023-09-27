<?php wp_footer(); 

use App\Base\Bootstrap;

$fields = get_field('footer', 'options');
$copyright = get_field('footer', 'options');
$contact_form_text = get_field('footer', 'options');
$general = get_field('general', 'options');
$menu_links_contact = $general['menu_links_contact'];
?>
<section class="contact_form">
    <div class="container">
        <div class="contact_form_contents">
            <div class="contact_form_contents_left">
                <h1 class="contact_form_text"><?php echo $fields['contact_form_text']?></h1>
                <div class="contact_form_links">
                    <?php
                    if (is_array($menu_links_contact)) {
                        foreach ($menu_links_contact as $row) :
                            $link = $row['link'];
                            $icon = $row['icon'];
                            if ($link) : ?>
                                <a class="link" href="<?php echo esc_url($link); ?>">
                            <?php endif;
                            if ($icon) : ?>
                                <img class="icon" src="<?php echo esc_url($icon); ?>">
                            <?php endif;
                            if ($link) : ?>
                                </a>
                            <?php endif;
                        endforeach;
                    }
                    ?>
                </div>
            </div>
            <?php echo apply_shortcodes( '[contact-form-7 id="41" title="Контактная форма 1"]' ); ?> 
        </div>
    </div>
</section>



<footer class="footer">
    <div class="container">
        <div class="navbar__wrap">
            <?php echo wp_get_attachment_image($fields['logo'],'full'); ?>
            <ul class="footer_menu">
                <p><?php echo $fields['copyright']?></p> 
                <?php Bootstrap::bootstrap_footer_menu(); ?>
            </ul>
        </div>
    </div>
</footer>
	</body>
</html>


<script>
      $(document).ready(function() {
    $('.js-example-basic-single').select2();
});

$(".js-example-responsive").select2({
    width: 'resolve',
    height: '50px' // need to override the changed default
});
</script>


    