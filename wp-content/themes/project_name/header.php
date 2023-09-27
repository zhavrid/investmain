<?php 
  use App\Base\Bootstrap;

  $fields = get_field('header', 'options');
  $general = get_field('general', 'options');
  $button_form = $general['login_button_text'];
  $menu_links = $general['menu_links'];
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php wp_title();?></title>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
</head>

<body <?php body_class(); ?>>

<header>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <?php echo wp_get_attachment_image($fields['header_logo'],'full'); ?>
            </div>
            <div class="menu-btn" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    <div class="block_menu">
        <div class="header_menu">
            <div class="header_menu_list">
                <?php Bootstrap::bootstrap_main_menu(); ?>

                <?php if($button_form):  ?>
                    <a href="<?php echo esc_url($button_form['url']); ?>" class="button"
                       target="<?php echo esc_attr($button_form['target'] ? $button_form['target'] : '_self'); ?>"
                       title="<?php echo esc_html($button_form['title']); ?>">
                        <span><?php echo esc_html($button_form['title']); ?></span>
                    </a>
                <?php endif ?>
                <div class="links">
                    <?php
                    if (is_array($menu_links)) {
                        foreach ($menu_links as $row) :
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
        </div>
    </div>


    <div class="overlay" id="overlay" onclick="closeMenu()"></div>
</header>


<!-- <section class="hero">
    <div class="container">
        <div class="hero_block">
            <div class="hero_block_left">
                <div class="hero_block_left_content">
                    <h1 class="hero_block_left_one">A new approach</h1>
                    <h1 class="hero_block_left_two">to impact</h1>
                    <h1 class="hero_block_left_three">investing</h1>
                </div>
        
                <p>Investing in fundamental scientific breakthroughs 
                    by leading innovators to solve industry’s hardest 
                    problems in critical impact sectors</p>
                <button class="hero_block_left_button">Get in touch<svg xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.348 2.26771C11.1453 1.82332 11.0208 1.37792 11.0208 1H11.5182C11.5182 1.27111 11.6112 1.637 11.7971 2.04447C11.9811 2.44783 12.248 2.87402 12.5754 3.26236C13.2369 4.04709 14.1072 4.63459 15.0001 4.63459V5.15381C13.9033 5.15381 12.9083 4.44326 12.2019 3.60538C11.8454 3.18243 11.5526 2.7162 11.348 2.26771Z" fill="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.348 7.7323C11.1453 8.17668 11.0208 8.62207 11.0208 9H11.5182C11.5182 8.72889 11.6112 8.36301 11.7971 7.95552C11.9811 7.55217 12.248 7.12597 12.5754 6.73764C13.2369 5.95294 14.1072 5.36541 15.0001 5.36541V4.84619C13.9033 4.84619 12.9083 5.55674 12.2019 6.39462C11.8454 6.81758 11.5526 7.28379 11.348 7.7323Z" fill="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3 4.69214H14.9999V5.30751H3V4.69214Z" fill="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.348 2.26771C11.1453 1.82332 11.0208 1.37792 11.0208 1H11.5182C11.5182 1.27111 11.6112 1.637 11.7971 2.04447C11.9811 2.44783 12.248 2.87402 12.5754 3.26236C13.2369 4.04709 14.1072 4.63459 15.0001 4.63459V5.15381C13.9033 5.15381 12.9083 4.44326 12.2019 3.60538C11.8454 3.18243 11.5526 2.7162 11.348 2.26771Z" stroke="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.348 7.7323C11.1453 8.17668 11.0208 8.62207 11.0208 9H11.5182C11.5182 8.72889 11.6112 8.36301 11.7971 7.95552C11.9811 7.55217 12.248 7.12597 12.5754 6.73764C13.2369 5.95294 14.1072 5.36541 15.0001 5.36541V4.84619C13.9033 4.84619 12.9083 5.55674 12.2019 6.39462C11.8454 6.81758 11.5526 7.28379 11.348 7.7323Z" stroke="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1 4.69214H14.9999V5.30751H1V4.69214Z" stroke="white"/>
                    </svg>
                </button>
            </div>
            <div class="hero_block_img">
                <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/jason-blackeye-kufsOr1-F-s-unsplash-1.png">
            </div>
        </div>
    </div>
</section> -->
<!-- <section class="impact_potential">
    <div class="container">
        <div class="impact_potential_block">
            <h1>We invest in companies with massive impact potential</h1>
            <p>We work with our portfolio founders to chart the path from scientific breakthrough to commercial success: accelerate technology de-risking, verify product market fit, and reduce time/resource to market. Scaled successfully, these companies will enable us to meet critical climate goals, feed a growing world sustainably, and improve human health globally.</p>
        </div>
    </div>
</section> -->
<!-- <section class="our_focus">
    <div class="container">
        <div class="our_focus_title">
            <h1>Our <b>focus</b></h1>
            <p>We believe the hardest problems of today will be solved with scientific breakthroughs</p>
        </div>
        <div class="our_focus_blocks">
            <div class="our_focus_blocks_block">
                <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/Energy.svg">
                <p class="title">ENERGY</p>
                <p class="description">From generation to storage, increasing access to affordable, reliable and renewable energy</p>
            </div>
            <div class="our_focus_blocks_block">
                <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/Energy.svg">
                <p class="title">ENERGY</p>
                <p class="description">From generation to storage, increasing access to affordable, reliable and renewable energy</p>
            </div>
            <div class="our_focus_blocks_block">
                <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/Energy.svg">
                <p class="title">ENERGY</p>
                <p class="description">From generation to storage, increasing access to affordable, reliable and renewable energy</p>
            </div>
            <div class="our_focus_blocks_block">
                <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/Energy.svg">
                <p class="title">ENERGY</p>
                <p class="description">From generation to storage, increasing access to affordable, reliable and renewable energy</p>
            </div>
            <div class="our_focus_blocks_block">
                <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/Energy.svg">
                <p class="title">ENERGY</p>
                <p class="description">From generation to storage, increasing access to affordable, reliable and renewable energy</p>
            </div>
            <div class="our_focus_blocks_block">
                <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/Energy.svg">
                <p class="title">ENERGY</p>
                <p class="description">From generation to storage, increasing access to affordable, reliable and renewable energy</p>
            </div>
        </div>
    </div>
</section> -->
<!-- <section class="what_we">
    <div class="containers">
        <div class="what_we_block">
            <div class="what_we_block_left">
                <h1>What We Look For</h1>
                <p>As an early-stage investor, we seek out leading innovators 
                    with game changing technologies, who are on a mission to use 
                    entrepreneurship for the greater good. The ideal founding teams 
                    are often multi-disciplinary, recognize what they do not know, and 
                    exhibit the leadership potential to close the knowledge gap.</p>
                <button class="what_we_block_left_button">Get in touch<svg xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.348 2.26771C11.1453 1.82332 11.0208 1.37792 11.0208 1H11.5182C11.5182 1.27111 11.6112 1.637 11.7971 2.04447C11.9811 2.44783 12.248 2.87402 12.5754 3.26236C13.2369 4.04709 14.1072 4.63459 15.0001 4.63459V5.15381C13.9033 5.15381 12.9083 4.44326 12.2019 3.60538C11.8454 3.18243 11.5526 2.7162 11.348 2.26771Z" fill="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.348 7.7323C11.1453 8.17668 11.0208 8.62207 11.0208 9H11.5182C11.5182 8.72889 11.6112 8.36301 11.7971 7.95552C11.9811 7.55217 12.248 7.12597 12.5754 6.73764C13.2369 5.95294 14.1072 5.36541 15.0001 5.36541V4.84619C13.9033 4.84619 12.9083 5.55674 12.2019 6.39462C11.8454 6.81758 11.5526 7.28379 11.348 7.7323Z" fill="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3 4.69214H14.9999V5.30751H3V4.69214Z" fill="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.348 2.26771C11.1453 1.82332 11.0208 1.37792 11.0208 1H11.5182C11.5182 1.27111 11.6112 1.637 11.7971 2.04447C11.9811 2.44783 12.248 2.87402 12.5754 3.26236C13.2369 4.04709 14.1072 4.63459 15.0001 4.63459V5.15381C13.9033 5.15381 12.9083 4.44326 12.2019 3.60538C11.8454 3.18243 11.5526 2.7162 11.348 2.26771Z" stroke="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.348 7.7323C11.1453 8.17668 11.0208 8.62207 11.0208 9H11.5182C11.5182 8.72889 11.6112 8.36301 11.7971 7.95552C11.9811 7.55217 12.248 7.12597 12.5754 6.73764C13.2369 5.95294 14.1072 5.36541 15.0001 5.36541V4.84619C13.9033 4.84619 12.9083 5.55674 12.2019 6.39462C11.8454 6.81758 11.5526 7.28379 11.348 7.7323Z" stroke="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1 4.69214H14.9999V5.30751H1V4.69214Z" stroke="white"/>
                    </svg>
                </button>
            </div>
            <div class="what_we_block_img">
                <img class="" src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/Group-9.svg">
            </div>
        </div>
    </div>
</section> -->
<!-- <section class="partfolio">
    <div class="container">
        <div class="partfolio_title">
            <h1><b>PORTFOLIO</b> COMPANIES</h1>
        </div>
        <div class="partfolio_blocks">
            <div class="partfolio_blocks_block">
                <a href=""> 
                    <img class="vis" src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/airmyne-logo-inverted-rgb-1059px@72ppi-1.svg">
                    <div class="invis">
                        <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/airmyne-logo-inverted-rgb-1059px@72ppi-1-1.svg">
                        <p>Cost-effective CO2 removal from air at scale</p>
                    </div>
                </a>
            </div>
            <div class="partfolio_blocks_block">
            <a href=""> 
                    <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/airmyne-logo-inverted-rgb-1059px@72ppi-1.svg">
                    <p class="description">Cost-effective CO2 removal from air at scale</p>
                </a>
            </div>
            <div class="partfolio_blocks_block">
                <a href=""> 
                    <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/airmyne-logo-inverted-rgb-1059px@72ppi-1.svg">
                    <p class="description">Cost-effective CO2 removal from air at scale</p>
                </a>
            </div>
            <div class="partfolio_blocks_block">
                <a href=""> 
                    <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/airmyne-logo-inverted-rgb-1059px@72ppi-1.svg">
                    <p class="description">Cost-effective CO2 removal from air at scale</p>
                </a>
            </div>
            <div class="partfolio_blocks_block">
                <a href=""> 
                    <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/airmyne-logo-inverted-rgb-1059px@72ppi-1.svg">
                    <p class="description">Cost-effective CO2 removal from air at scale</p>
                </a>
            </div>
        </div>
    </div>
</section> -->
<!-- <section class="our_team">
    <div class="container">
        <div class="our_team_title">
            <h1><b>OUR</b> TEAM</h1>
        </div>
        <div class="our_team_blocks">
            <div class="our_team_blocks_block">
                <img class="avatar" src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/Alain_Head_Shot_June_2020_-_1-1.png">
                <div class="block_title">
                    <p>Alain Harrus</p>
                    <div class="hover_img">
                        <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/Vector-3.svg">
                    </div>
                    <div class="hover">
                        <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/Vector-4.svg">
                    </div>
                </div> 
                <p class="description">Managing Partner, Co-Founder</p>
            </div>
            <div class="our_team_blocks_block">
                <img class="avatar" src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/Alain_Head_Shot_June_2020_-_1-1.png">
                <div class="block_title">
                    <p>Alain Harrus</p>
                    <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/Vector-3.svg">
                </div> 
                <p class="description">Managing Partner, Co-Founder</p>
            </div>
            <div class="our_team_blocks_block">
                <img class="avatar" src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/Alain_Head_Shot_June_2020_-_1-1.png">
                <div class="block_title">
                    <p>Alain Harrus</p>
                    <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/Vector-3.svg">
                </div> 
                <p class="description">Managing Partner, Co-Founder</p>
            </div>
        </div>
        <div class="our_team_title">
            <p class="import">Advisors</p>
            <p class="descript">With deep connections to an expansive network of high-tech focused visionary leaders across academia, corporations and venture ecosystems who are committed to supporting scientific entrepreneurs and innovations, we partner with our advisors to source, diligence, mentor and connect ISV portfolio companies with the resources needed for their future success.</p>
        </div>
    </div>
    <div class="our_team_line">
        <div class="our_team_line_block">
            <div class="hover_img">
                <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/image-1-1.png">
            </div>
            <div class="hover">
                <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/Vector-4.svg">
                <p class="title">Martin Eberhard</p>
                <p class="description">Co-founder</p>
            </div>
            <img class="icon" src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/airmyne-logo-inverted-rgb-1059px@72ppi-1.svg">

        </div>
        <div class="our_team_line_block">
            <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/image-1-1.png">
            <img class="icon" src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/airmyne-logo-inverted-rgb-1059px@72ppi-1.svg">
        </div>
        <div class="our_team_line_block">
            <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/image-1-1.png">
            <img class="icon" src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/airmyne-logo-inverted-rgb-1059px@72ppi-1.svg">
        </div>
        <div class="our_team_line_block">
            <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/image-1-1.png">
            <img class="icon" src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/airmyne-logo-inverted-rgb-1059px@72ppi-1.svg">
        </div>
        <div class="our_team_line_block">
            <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/image-1-1.png">
            <img class="icon" src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/airmyne-logo-inverted-rgb-1059px@72ppi-1.svg">
        </div>
        <div class="our_team_line_block">
            <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/image-1-1.png">
            <img class="icon" src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/airmyne-logo-inverted-rgb-1059px@72ppi-1.svg">
        </div>
        <div class="our_team_line_block">
            <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/image-1-1.png">
            <img class="icon" src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/airmyne-logo-inverted-rgb-1059px@72ppi-1.svg">
        </div>
        <div class="our_team_line_block">
            <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/image-1-1.png">
            <img class="icon" src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/airmyne-logo-inverted-rgb-1059px@72ppi-1.svg">
        </div>
    </div>
</section> -->
<!-- <section class="recent_news">
    <div class="container">
        <div class="recent_news_title">
            <h1>RECENT <b>NEWS</b></h1>
            <p>Latest news about our portfolio companies</p>
        </div>
        <div class="recent_news_blocks">
            <div class="recent_news_blocks_block">
                <div class="logo">
                    <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/bwlogo_extreme-3.svg">
                    <span class="line"></span>
                    <img class="assets" src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/foundation-lockup-smallmark-Traced-1.svg">
                </div>
                <div class="description">
                    <p class="title">Brimstone to Produce the World’s First Carbon-Negative Portland Cement</p>
                    <p class="date">April 28, 2022</p>
                </div>
            </div>
            <div class="recent_news_blocks_block">
                <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/bwlogo_extreme-3.svg">
                <img class="assets" src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/foundation-lockup-smallmark-Traced-1.svg">
                <div class="description">
                    <p class="title">Brimstone to Produce the World’s First Carbon-Negative Portland Cement</p>
                    <p class="date">April 28, 2022</p>
                </div>
            </div>
            <div class="recent_news_blocks_block">
                <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/bwlogo_extreme-3.svg">
                <img class="assets" src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/foundation-lockup-smallmark-Traced-1.svg">
                <div class="description">
                    <p class="title">Brimstone to Produce the World’s First Carbon-Negative Portland Cement</p>
                    <p class="date">April 28, 2022</p>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- <section class="current_news">
    <div class="container">
        <div class="current_news_title">
            <h1>Current <b>JOBS</b></h1>
            <p>Join companies with massive impact potential</p>
        </div>

        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="current_news_blocks">
                        <div class="current_news_blocks_block">
                            <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/foundation-lockup-smallmark-Traced.svg">
                            <p class="title">Making cement carbon-negative without changing the product or price</p>
                            <button class="current_news_blocks_block_button">SEE ALL OFFERS<svg xmlns="http://www.w3.org/2000/svg" width="15" height="10" viewBox="0 0 15 10" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.848 2.26771C10.6453 1.82332 10.5208 1.37792 10.5208 1H11.0182C11.0182 1.27111 11.1112 1.637 11.2971 2.04447C11.4811 2.44783 11.748 2.87402 12.0754 3.26236C12.7369 4.04709 13.6072 4.63459 14.5001 4.63459V5.15381C13.4033 5.15381 12.4083 4.44326 11.7019 3.60538C11.3454 3.18243 11.0526 2.7162 10.848 2.26771Z" fill="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.848 7.7323C10.6453 8.17668 10.5208 8.62207 10.5208 9H11.0182C11.0182 8.72889 11.1112 8.36301 11.2971 7.95552C11.4811 7.55217 11.748 7.12597 12.0754 6.73764C12.7369 5.95294 13.6072 5.36541 14.5001 5.36541V4.84619C13.4033 4.84619 12.4083 5.55674 11.7019 6.39462C11.3454 6.81758 11.0526 7.28379 10.848 7.7323Z" fill="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.5 4.69214H14.4999V5.30751H2.5V4.69214Z" fill="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.848 2.26771C10.6453 1.82332 10.5208 1.37792 10.5208 1H11.0182C11.0182 1.27111 11.1112 1.637 11.2971 2.04447C11.4811 2.44783 11.748 2.87402 12.0754 3.26236C12.7369 4.04709 13.6072 4.63459 14.5001 4.63459V5.15381C13.4033 5.15381 12.4083 4.44326 11.7019 3.60538C11.3454 3.18243 11.0526 2.7162 10.848 2.26771Z" stroke="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.848 7.7323C10.6453 8.17668 10.5208 8.62207 10.5208 9H11.0182C11.0182 8.72889 11.1112 8.36301 11.2971 7.95552C11.4811 7.55217 11.748 7.12597 12.0754 6.73764C12.7369 5.95294 13.6072 5.36541 14.5001 5.36541V4.84619C13.4033 4.84619 12.4083 5.55674 11.7019 6.39462C11.3454 6.81758 11.0526 7.28379 10.848 7.7323Z" stroke="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 4.69214H14.4999V5.30751H0.5V4.69214Z" stroke="#F05454"/>
                                </svg>
                            </button>
                        </div>
                        <div class="current_news_blocks_block">
                            <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/foundation-lockup-smallmark-Traced.svg">
                            <p class="title">Making cement carbon-negative without changing the product or price</p>
                            <button class="current_news_blocks_block_button">SEE ALL OFFERS<svg xmlns="http://www.w3.org/2000/svg" width="15" height="10" viewBox="0 0 15 10" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.848 2.26771C10.6453 1.82332 10.5208 1.37792 10.5208 1H11.0182C11.0182 1.27111 11.1112 1.637 11.2971 2.04447C11.4811 2.44783 11.748 2.87402 12.0754 3.26236C12.7369 4.04709 13.6072 4.63459 14.5001 4.63459V5.15381C13.4033 5.15381 12.4083 4.44326 11.7019 3.60538C11.3454 3.18243 11.0526 2.7162 10.848 2.26771Z" fill="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.848 7.7323C10.6453 8.17668 10.5208 8.62207 10.5208 9H11.0182C11.0182 8.72889 11.1112 8.36301 11.2971 7.95552C11.4811 7.55217 11.748 7.12597 12.0754 6.73764C12.7369 5.95294 13.6072 5.36541 14.5001 5.36541V4.84619C13.4033 4.84619 12.4083 5.55674 11.7019 6.39462C11.3454 6.81758 11.0526 7.28379 10.848 7.7323Z" fill="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.5 4.69214H14.4999V5.30751H2.5V4.69214Z" fill="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.848 2.26771C10.6453 1.82332 10.5208 1.37792 10.5208 1H11.0182C11.0182 1.27111 11.1112 1.637 11.2971 2.04447C11.4811 2.44783 11.748 2.87402 12.0754 3.26236C12.7369 4.04709 13.6072 4.63459 14.5001 4.63459V5.15381C13.4033 5.15381 12.4083 4.44326 11.7019 3.60538C11.3454 3.18243 11.0526 2.7162 10.848 2.26771Z" stroke="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.848 7.7323C10.6453 8.17668 10.5208 8.62207 10.5208 9H11.0182C11.0182 8.72889 11.1112 8.36301 11.2971 7.95552C11.4811 7.55217 11.748 7.12597 12.0754 6.73764C12.7369 5.95294 13.6072 5.36541 14.5001 5.36541V4.84619C13.4033 4.84619 12.4083 5.55674 11.7019 6.39462C11.3454 6.81758 11.0526 7.28379 10.848 7.7323Z" stroke="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 4.69214H14.4999V5.30751H0.5V4.69214Z" stroke="#F05454"/>
                                </svg>
                            </button>
                        </div>
                        <div class="current_news_blocks_block">
                            <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/foundation-lockup-smallmark-Traced.svg">
                            <p class="title">3Making cement carbon-negative without changing the product or price</p>
                            <button class="current_news_blocks_block_button">SEE ALL OFFERS<svg xmlns="http://www.w3.org/2000/svg" width="15" height="10" viewBox="0 0 15 10" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.848 2.26771C10.6453 1.82332 10.5208 1.37792 10.5208 1H11.0182C11.0182 1.27111 11.1112 1.637 11.2971 2.04447C11.4811 2.44783 11.748 2.87402 12.0754 3.26236C12.7369 4.04709 13.6072 4.63459 14.5001 4.63459V5.15381C13.4033 5.15381 12.4083 4.44326 11.7019 3.60538C11.3454 3.18243 11.0526 2.7162 10.848 2.26771Z" fill="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.848 7.7323C10.6453 8.17668 10.5208 8.62207 10.5208 9H11.0182C11.0182 8.72889 11.1112 8.36301 11.2971 7.95552C11.4811 7.55217 11.748 7.12597 12.0754 6.73764C12.7369 5.95294 13.6072 5.36541 14.5001 5.36541V4.84619C13.4033 4.84619 12.4083 5.55674 11.7019 6.39462C11.3454 6.81758 11.0526 7.28379 10.848 7.7323Z" fill="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.5 4.69214H14.4999V5.30751H2.5V4.69214Z" fill="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.848 2.26771C10.6453 1.82332 10.5208 1.37792 10.5208 1H11.0182C11.0182 1.27111 11.1112 1.637 11.2971 2.04447C11.4811 2.44783 11.748 2.87402 12.0754 3.26236C12.7369 4.04709 13.6072 4.63459 14.5001 4.63459V5.15381C13.4033 5.15381 12.4083 4.44326 11.7019 3.60538C11.3454 3.18243 11.0526 2.7162 10.848 2.26771Z" stroke="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.848 7.7323C10.6453 8.17668 10.5208 8.62207 10.5208 9H11.0182C11.0182 8.72889 11.1112 8.36301 11.2971 7.95552C11.4811 7.55217 11.748 7.12597 12.0754 6.73764C12.7369 5.95294 13.6072 5.36541 14.5001 5.36541V4.84619C13.4033 4.84619 12.4083 5.55674 11.7019 6.39462C11.3454 6.81758 11.0526 7.28379 10.848 7.7323Z" stroke="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 4.69214H14.4999V5.30751H0.5V4.69214Z" stroke="#F05454"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="current_news_blocks">
                        <div class="current_news_blocks_block">
                            <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/foundation-lockup-smallmark-Traced.svg">
                            <p class="title">Making cement carbon-negative without changing the product or price</p>
                            <button class="current_news_blocks_block_button">SEE ALL OFFERS<svg xmlns="http://www.w3.org/2000/svg" width="15" height="10" viewBox="0 0 15 10" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.848 2.26771C10.6453 1.82332 10.5208 1.37792 10.5208 1H11.0182C11.0182 1.27111 11.1112 1.637 11.2971 2.04447C11.4811 2.44783 11.748 2.87402 12.0754 3.26236C12.7369 4.04709 13.6072 4.63459 14.5001 4.63459V5.15381C13.4033 5.15381 12.4083 4.44326 11.7019 3.60538C11.3454 3.18243 11.0526 2.7162 10.848 2.26771Z" fill="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.848 7.7323C10.6453 8.17668 10.5208 8.62207 10.5208 9H11.0182C11.0182 8.72889 11.1112 8.36301 11.2971 7.95552C11.4811 7.55217 11.748 7.12597 12.0754 6.73764C12.7369 5.95294 13.6072 5.36541 14.5001 5.36541V4.84619C13.4033 4.84619 12.4083 5.55674 11.7019 6.39462C11.3454 6.81758 11.0526 7.28379 10.848 7.7323Z" fill="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.5 4.69214H14.4999V5.30751H2.5V4.69214Z" fill="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.848 2.26771C10.6453 1.82332 10.5208 1.37792 10.5208 1H11.0182C11.0182 1.27111 11.1112 1.637 11.2971 2.04447C11.4811 2.44783 11.748 2.87402 12.0754 3.26236C12.7369 4.04709 13.6072 4.63459 14.5001 4.63459V5.15381C13.4033 5.15381 12.4083 4.44326 11.7019 3.60538C11.3454 3.18243 11.0526 2.7162 10.848 2.26771Z" stroke="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.848 7.7323C10.6453 8.17668 10.5208 8.62207 10.5208 9H11.0182C11.0182 8.72889 11.1112 8.36301 11.2971 7.95552C11.4811 7.55217 11.748 7.12597 12.0754 6.73764C12.7369 5.95294 13.6072 5.36541 14.5001 5.36541V4.84619C13.4033 4.84619 12.4083 5.55674 11.7019 6.39462C11.3454 6.81758 11.0526 7.28379 10.848 7.7323Z" stroke="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 4.69214H14.4999V5.30751H0.5V4.69214Z" stroke="#F05454"/>
                                </svg>
                            </button>
                        </div>
                        <div class="current_news_blocks_block">
                            <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/foundation-lockup-smallmark-Traced.svg">
                            <p class="title">Making cement carbon-negative without changing the product or price</p>
                            <button class="current_news_blocks_block_button">SEE ALL OFFERS<svg xmlns="http://www.w3.org/2000/svg" width="15" height="10" viewBox="0 0 15 10" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.848 2.26771C10.6453 1.82332 10.5208 1.37792 10.5208 1H11.0182C11.0182 1.27111 11.1112 1.637 11.2971 2.04447C11.4811 2.44783 11.748 2.87402 12.0754 3.26236C12.7369 4.04709 13.6072 4.63459 14.5001 4.63459V5.15381C13.4033 5.15381 12.4083 4.44326 11.7019 3.60538C11.3454 3.18243 11.0526 2.7162 10.848 2.26771Z" fill="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.848 7.7323C10.6453 8.17668 10.5208 8.62207 10.5208 9H11.0182C11.0182 8.72889 11.1112 8.36301 11.2971 7.95552C11.4811 7.55217 11.748 7.12597 12.0754 6.73764C12.7369 5.95294 13.6072 5.36541 14.5001 5.36541V4.84619C13.4033 4.84619 12.4083 5.55674 11.7019 6.39462C11.3454 6.81758 11.0526 7.28379 10.848 7.7323Z" fill="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.5 4.69214H14.4999V5.30751H2.5V4.69214Z" fill="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.848 2.26771C10.6453 1.82332 10.5208 1.37792 10.5208 1H11.0182C11.0182 1.27111 11.1112 1.637 11.2971 2.04447C11.4811 2.44783 11.748 2.87402 12.0754 3.26236C12.7369 4.04709 13.6072 4.63459 14.5001 4.63459V5.15381C13.4033 5.15381 12.4083 4.44326 11.7019 3.60538C11.3454 3.18243 11.0526 2.7162 10.848 2.26771Z" stroke="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.848 7.7323C10.6453 8.17668 10.5208 8.62207 10.5208 9H11.0182C11.0182 8.72889 11.1112 8.36301 11.2971 7.95552C11.4811 7.55217 11.748 7.12597 12.0754 6.73764C12.7369 5.95294 13.6072 5.36541 14.5001 5.36541V4.84619C13.4033 4.84619 12.4083 5.55674 11.7019 6.39462C11.3454 6.81758 11.0526 7.28379 10.848 7.7323Z" stroke="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 4.69214H14.4999V5.30751H0.5V4.69214Z" stroke="#F05454"/>
                                </svg>
                            </button>
                        </div>
                        <div class="current_news_blocks_block">
                            <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/foundation-lockup-smallmark-Traced.svg">
                            <p class="title">Making cement carbon-negative without changing the product or price</p>
                            <button class="current_news_blocks_block_button">SEE ALL OFFERS<svg xmlns="http://www.w3.org/2000/svg" width="15" height="10" viewBox="0 0 15 10" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.848 2.26771C10.6453 1.82332 10.5208 1.37792 10.5208 1H11.0182C11.0182 1.27111 11.1112 1.637 11.2971 2.04447C11.4811 2.44783 11.748 2.87402 12.0754 3.26236C12.7369 4.04709 13.6072 4.63459 14.5001 4.63459V5.15381C13.4033 5.15381 12.4083 4.44326 11.7019 3.60538C11.3454 3.18243 11.0526 2.7162 10.848 2.26771Z" fill="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.848 7.7323C10.6453 8.17668 10.5208 8.62207 10.5208 9H11.0182C11.0182 8.72889 11.1112 8.36301 11.2971 7.95552C11.4811 7.55217 11.748 7.12597 12.0754 6.73764C12.7369 5.95294 13.6072 5.36541 14.5001 5.36541V4.84619C13.4033 4.84619 12.4083 5.55674 11.7019 6.39462C11.3454 6.81758 11.0526 7.28379 10.848 7.7323Z" fill="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.5 4.69214H14.4999V5.30751H2.5V4.69214Z" fill="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.848 2.26771C10.6453 1.82332 10.5208 1.37792 10.5208 1H11.0182C11.0182 1.27111 11.1112 1.637 11.2971 2.04447C11.4811 2.44783 11.748 2.87402 12.0754 3.26236C12.7369 4.04709 13.6072 4.63459 14.5001 4.63459V5.15381C13.4033 5.15381 12.4083 4.44326 11.7019 3.60538C11.3454 3.18243 11.0526 2.7162 10.848 2.26771Z" stroke="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.848 7.7323C10.6453 8.17668 10.5208 8.62207 10.5208 9H11.0182C11.0182 8.72889 11.1112 8.36301 11.2971 7.95552C11.4811 7.55217 11.748 7.12597 12.0754 6.73764C12.7369 5.95294 13.6072 5.36541 14.5001 5.36541V4.84619C13.4033 4.84619 12.4083 5.55674 11.7019 6.39462C11.3454 6.81758 11.0526 7.28379 10.848 7.7323Z" stroke="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 4.69214H14.4999V5.30751H0.5V4.69214Z" stroke="#F05454"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="current_news_blocks">
                        <div class="current_news_blocks_block">
                            <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/foundation-lockup-smallmark-Traced.svg">
                            <p class="title">Making cement carbon-negative without changing the product or price</p>
                            <button class="current_news_blocks_block_button">SEE ALL OFFERS<svg xmlns="http://www.w3.org/2000/svg" width="15" height="10" viewBox="0 0 15 10" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.848 2.26771C10.6453 1.82332 10.5208 1.37792 10.5208 1H11.0182C11.0182 1.27111 11.1112 1.637 11.2971 2.04447C11.4811 2.44783 11.748 2.87402 12.0754 3.26236C12.7369 4.04709 13.6072 4.63459 14.5001 4.63459V5.15381C13.4033 5.15381 12.4083 4.44326 11.7019 3.60538C11.3454 3.18243 11.0526 2.7162 10.848 2.26771Z" fill="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.848 7.7323C10.6453 8.17668 10.5208 8.62207 10.5208 9H11.0182C11.0182 8.72889 11.1112 8.36301 11.2971 7.95552C11.4811 7.55217 11.748 7.12597 12.0754 6.73764C12.7369 5.95294 13.6072 5.36541 14.5001 5.36541V4.84619C13.4033 4.84619 12.4083 5.55674 11.7019 6.39462C11.3454 6.81758 11.0526 7.28379 10.848 7.7323Z" fill="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.5 4.69214H14.4999V5.30751H2.5V4.69214Z" fill="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.848 2.26771C10.6453 1.82332 10.5208 1.37792 10.5208 1H11.0182C11.0182 1.27111 11.1112 1.637 11.2971 2.04447C11.4811 2.44783 11.748 2.87402 12.0754 3.26236C12.7369 4.04709 13.6072 4.63459 14.5001 4.63459V5.15381C13.4033 5.15381 12.4083 4.44326 11.7019 3.60538C11.3454 3.18243 11.0526 2.7162 10.848 2.26771Z" stroke="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.848 7.7323C10.6453 8.17668 10.5208 8.62207 10.5208 9H11.0182C11.0182 8.72889 11.1112 8.36301 11.2971 7.95552C11.4811 7.55217 11.748 7.12597 12.0754 6.73764C12.7369 5.95294 13.6072 5.36541 14.5001 5.36541V4.84619C13.4033 4.84619 12.4083 5.55674 11.7019 6.39462C11.3454 6.81758 11.0526 7.28379 10.848 7.7323Z" stroke="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 4.69214H14.4999V5.30751H0.5V4.69214Z" stroke="#F05454"/>
                                </svg>
                            </button>
                        </div>
                        <div class="current_news_blocks_block">
                            <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/foundation-lockup-smallmark-Traced.svg">
                            <p class="title">Making cement carbon-negative without changing the product or price</p>
                            <button class="current_news_blocks_block_button">SEE ALL OFFERS<svg xmlns="http://www.w3.org/2000/svg" width="15" height="10" viewBox="0 0 15 10" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.848 2.26771C10.6453 1.82332 10.5208 1.37792 10.5208 1H11.0182C11.0182 1.27111 11.1112 1.637 11.2971 2.04447C11.4811 2.44783 11.748 2.87402 12.0754 3.26236C12.7369 4.04709 13.6072 4.63459 14.5001 4.63459V5.15381C13.4033 5.15381 12.4083 4.44326 11.7019 3.60538C11.3454 3.18243 11.0526 2.7162 10.848 2.26771Z" fill="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.848 7.7323C10.6453 8.17668 10.5208 8.62207 10.5208 9H11.0182C11.0182 8.72889 11.1112 8.36301 11.2971 7.95552C11.4811 7.55217 11.748 7.12597 12.0754 6.73764C12.7369 5.95294 13.6072 5.36541 14.5001 5.36541V4.84619C13.4033 4.84619 12.4083 5.55674 11.7019 6.39462C11.3454 6.81758 11.0526 7.28379 10.848 7.7323Z" fill="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.5 4.69214H14.4999V5.30751H2.5V4.69214Z" fill="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.848 2.26771C10.6453 1.82332 10.5208 1.37792 10.5208 1H11.0182C11.0182 1.27111 11.1112 1.637 11.2971 2.04447C11.4811 2.44783 11.748 2.87402 12.0754 3.26236C12.7369 4.04709 13.6072 4.63459 14.5001 4.63459V5.15381C13.4033 5.15381 12.4083 4.44326 11.7019 3.60538C11.3454 3.18243 11.0526 2.7162 10.848 2.26771Z" stroke="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.848 7.7323C10.6453 8.17668 10.5208 8.62207 10.5208 9H11.0182C11.0182 8.72889 11.1112 8.36301 11.2971 7.95552C11.4811 7.55217 11.748 7.12597 12.0754 6.73764C12.7369 5.95294 13.6072 5.36541 14.5001 5.36541V4.84619C13.4033 4.84619 12.4083 5.55674 11.7019 6.39462C11.3454 6.81758 11.0526 7.28379 10.848 7.7323Z" stroke="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 4.69214H14.4999V5.30751H0.5V4.69214Z" stroke="#F05454"/>
                                </svg>
                            </button>
                        </div>
                        <div class="current_news_blocks_block">
                            <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/foundation-lockup-smallmark-Traced.svg">
                            <p class="title">Making cement carbon-negative without changing the product or price</p>
                            <button class="current_news_blocks_block_button">SEE ALL OFFERS<svg xmlns="http://www.w3.org/2000/svg" width="15" height="10" viewBox="0 0 15 10" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.848 2.26771C10.6453 1.82332 10.5208 1.37792 10.5208 1H11.0182C11.0182 1.27111 11.1112 1.637 11.2971 2.04447C11.4811 2.44783 11.748 2.87402 12.0754 3.26236C12.7369 4.04709 13.6072 4.63459 14.5001 4.63459V5.15381C13.4033 5.15381 12.4083 4.44326 11.7019 3.60538C11.3454 3.18243 11.0526 2.7162 10.848 2.26771Z" fill="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.848 7.7323C10.6453 8.17668 10.5208 8.62207 10.5208 9H11.0182C11.0182 8.72889 11.1112 8.36301 11.2971 7.95552C11.4811 7.55217 11.748 7.12597 12.0754 6.73764C12.7369 5.95294 13.6072 5.36541 14.5001 5.36541V4.84619C13.4033 4.84619 12.4083 5.55674 11.7019 6.39462C11.3454 6.81758 11.0526 7.28379 10.848 7.7323Z" fill="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.5 4.69214H14.4999V5.30751H2.5V4.69214Z" fill="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.848 2.26771C10.6453 1.82332 10.5208 1.37792 10.5208 1H11.0182C11.0182 1.27111 11.1112 1.637 11.2971 2.04447C11.4811 2.44783 11.748 2.87402 12.0754 3.26236C12.7369 4.04709 13.6072 4.63459 14.5001 4.63459V5.15381C13.4033 5.15381 12.4083 4.44326 11.7019 3.60538C11.3454 3.18243 11.0526 2.7162 10.848 2.26771Z" stroke="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.848 7.7323C10.6453 8.17668 10.5208 8.62207 10.5208 9H11.0182C11.0182 8.72889 11.1112 8.36301 11.2971 7.95552C11.4811 7.55217 11.748 7.12597 12.0754 6.73764C12.7369 5.95294 13.6072 5.36541 14.5001 5.36541V4.84619C13.4033 4.84619 12.4083 5.55674 11.7019 6.39462C11.3454 6.81758 11.0526 7.28379 10.848 7.7323Z" stroke="#F05454"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 4.69214H14.4999V5.30751H0.5V4.69214Z" stroke="#F05454"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            
            <div class="swiper-button-prev">
                <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/Icons.svg">
            </div>
            <div class="swiper-button-next">
                <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/Icons-1.svg">
            </div>
        </div>
    </div>
</section> -->
<!-- <section class="what_our">
    <div class="container">
        <div class="what_our_blocks">
            <div class="what_our_blocks_block">
                <p class="title">What our portfolio founder says</p>
                <div class="dispalay_profile">
                    <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/1_OHwlLnm0UPhkKqB_h7nXBw-1.svg">
                    <div class="display_name">
                        <p class="name">Andrew Hsieh</p>
                        <p class="profile">CEO and Co-Founder</p>
                        <img class="logo" src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/Union-1.svg">
                    </div>
                </div>
                <p class="description">As an investor, Michelle brings her experience as an entrepreneur but also as someone who has worked in large corporations. She was already a trusted advisor for more than a year before ISV formed and invested in Liminal. ISV, and all of our investors, believe in our mission and product, and they’re proven themselves to be real partners.</p>
            </div>
            <div class="what_our_blocks_block">
                <p class="title">What our portfolio founder says</p>
                <div class="dispalay_profile">
                    <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/1_OHwlLnm0UPhkKqB_h7nXBw-1.svg">
                    <div class="display_name">
                        <p class="name">Andrew Hsieh</p>
                        <p class="profile">CEO and Co-Founder</p>
                        <img class="logo" src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/Union-1.svg">
                    </div>
                </div>
                <p class="description">As an investor, Michelle brings her experience as an entrepreneur but also as someone who has worked in large corporations. She was already a trusted advisor for more than a year before ISV formed and invested in Liminal. ISV, and all of our investors, believe in our mission and product, and they’re proven themselves to be real partners.</p>
            </div>
            <swiper-container class="mySwiper" pagination="true">
            <swiper-slide>
                <div class="what_our_blocks_swiper">
                    <p class="title">What our portfolio founder says</p>
                    <div class="dispalay_profile">
                        <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/1_OHwlLnm0UPhkKqB_h7nXBw-1.svg">
                        <div class="display_name">
                            <p class="name">Andrew Hsieh</p>
                            <p class="profile">CEO and Co-Founder</p>
                            <img class="logo" src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/Union-1.svg">
                        </div>
                    </div>
                    <p class="description">As an investor, Michelle brings her experience as an entrepreneur but also as someone who has worked in large corporations. She was already a trusted advisor for more than a year before ISV formed and invested in Liminal. ISV, and all of our investors, believe in our mission and product, and they’re proven themselves to be real partners.</p>
                </div>
            </swiper-slide>
            <swiper-slide>
                <div class="what_our_blocks_swiper">
                    <p class="title">What our portfolio founder says</p>
                    <div class="dispalay_profile">
                        <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/1_OHwlLnm0UPhkKqB_h7nXBw-1.svg">
                        <div class="display_name">
                            <p class="name">Andrew Hsieh</p>
                            <p class="profile">CEO and Co-Founder</p>
                            <img class="logo" src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/Union-1.svg">
                        </div>
                    </div>
                    <p class="description">As an investor, Michelle brings her experience as an entrepreneur but also as someone who has worked in large corporations. She was already a trusted advisor for more than a year before ISV formed and invested in Liminal. ISV, and all of our investors, believe in our mission and product, and they’re proven themselves to be real partners.</p>
                </div>
            </swiper-slide>
        </swiper-container>
        </div>
    </div>
</section> -->
<!-- <section class="contact_form">
    <div class="container">
        <div class="contact_form_content">
            <div class="contact_form_content_left">
                <h1>Reach out for <span>more information</span></h1>
                <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/Group-7.svg">
            </div>
            <div class="contact_form_content_right">
                <div class="display_input">
                    <input value="First Name *">
                    <input value="Last Name *">
                </div>
                <input type="email" value="Email *">
                <div class="display_input">
                    <input value="Affiliation *">
                    <input value="Subject *">
                </div>
                <input type="text" value="Message">
                <button class="button">Get in touch<svg xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.348 2.26771C11.1453 1.82332 11.0208 1.37792 11.0208 1H11.5182C11.5182 1.27111 11.6112 1.637 11.7971 2.04447C11.9811 2.44783 12.248 2.87402 12.5754 3.26236C13.2369 4.04709 14.1072 4.63459 15.0001 4.63459V5.15381C13.9033 5.15381 12.9083 4.44326 12.2019 3.60538C11.8454 3.18243 11.5526 2.7162 11.348 2.26771Z" fill="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.348 7.7323C11.1453 8.17668 11.0208 8.62207 11.0208 9H11.5182C11.5182 8.72889 11.6112 8.36301 11.7971 7.95552C11.9811 7.55217 12.248 7.12597 12.5754 6.73764C13.2369 5.95294 14.1072 5.36541 15.0001 5.36541V4.84619C13.9033 4.84619 12.9083 5.55674 12.2019 6.39462C11.8454 6.81758 11.5526 7.28379 11.348 7.7323Z" fill="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3 4.69214H14.9999V5.30751H3V4.69214Z" fill="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.348 2.26771C11.1453 1.82332 11.0208 1.37792 11.0208 1H11.5182C11.5182 1.27111 11.6112 1.637 11.7971 2.04447C11.9811 2.44783 12.248 2.87402 12.5754 3.26236C13.2369 4.04709 14.1072 4.63459 15.0001 4.63459V5.15381C13.9033 5.15381 12.9083 4.44326 12.2019 3.60538C11.8454 3.18243 11.5526 2.7162 11.348 2.26771Z" stroke="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.348 7.7323C11.1453 8.17668 11.0208 8.62207 11.0208 9H11.5182C11.5182 8.72889 11.6112 8.36301 11.7971 7.95552C11.9811 7.55217 12.248 7.12597 12.5754 6.73764C13.2369 5.95294 14.1072 5.36541 15.0001 5.36541V4.84619C13.9033 4.84619 12.9083 5.55674 12.2019 6.39462C11.8454 6.81758 11.5526 7.28379 11.348 7.7323Z" stroke="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1 4.69214H14.9999V5.30751H1V4.69214Z" stroke="white"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section> -->
<!-- <footer class="footer">
    <div class="container">
        <div class="navbar__wrap">
           <a href="#" class="navbar__logo" id="logo"></a> -->
            <!-- <img class="navbar__logo" id="logo" src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/Logo-1.svg">
            <ul class="footer_menu">
                <li><a href="#">©2022 Impact Science Ventures. All Rights Reserved.</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Privacy</a></li>
            </ul>
        </div>
    </div>
</footer> --> 




<script>
function toggleMenu() {
    var menuList = document.querySelector('.header_menu_list');
    var overlay = document.getElementById('overlay');
    var body = document.body;

    if (menuList.style.display === 'block') {
        menuList.style.display = 'none';
        overlay.style.display = 'none';
        body.classList.remove('locked');
    } else {
        menuList.style.display = 'block';
        overlay.style.display = 'block';
        body.classList.add('locked');
    }
}

function closeMenu() {
    var menuList = document.querySelector('.header_menu_list');
    var overlay = document.getElementById('overlay');
    var body = document.body;

    menuList.style.display = 'none';
    overlay.style.display = 'none';
    body.classList.remove('locked');
}



function toggleMenu() {
    var menuBtn = document.querySelector('.menu-btn');
    var menuList = document.querySelector('.header_menu_list');
    var overlay = document.getElementById('overlay');
    var body = document.body;

    if (menuBtn.classList.contains('active')) {
        menuBtn.classList.remove('active');
        menuList.style.display = 'none';
        overlay.style.display = 'none';
        body.classList.remove('locked');
    } else {
        menuBtn.classList.add('active');
        menuList.style.display = 'block';
        overlay.style.display = 'block';
        body.classList.add('locked');
    }
}




var logo = document.querySelector(".attachment-full");
var header = document.querySelector("header");

function updateLogoSize() {
  if (window.innerWidth <= 425) {
    if (window.scrollY > 0) {
      logo.style.width = "56px";
      logo.style.height = "56px";
      header.style.borderBottom = "2px solid #E5E5E5";
      header.style.background = "#FFF";
    } else {
      logo.style.width = "86px";
      logo.style.height = "86px";
    }
  } else {
    if (window.scrollY > 0) {
      logo.style.width = "72px";
      logo.style.height = "74px";
      header.style.borderBottom = "2px solid #E5E5E5";
      header.style.background = "#FFF";
    } else {
      logo.style.width = "104px";
      logo.style.height = "104px";
    }
  }
}

window.addEventListener("load", updateLogoSize);
window.addEventListener("scroll", updateLogoSize);
window.addEventListener("resize", updateLogoSize);


</script>