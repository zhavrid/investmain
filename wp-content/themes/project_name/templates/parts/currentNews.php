<?php 
$title_section_right = get_field('title_section_right');
$title_section_left = get_field('title_section_left');
$title_description = get_field('title_description');
$swiper = get_field('swiper');
?>


<section class="current_news">
    <div class="container">
        <div class="current_news_title">
            <div class="current_news_title_display">
                <div class="right">
                    <?php if($title_section_right):  ?>
                        <h1><?php echo $title_section_right?></h1>
                    <?php endif ?> 
                </div>
                <div class="left">
                    <?php if($title_section_left):  ?>
                        <h1><?php echo $title_section_left?></h1>
                    <?php endif ?> 
                </div>           
            </div>
            <?php if($title_description):  ?>
                <p><?php echo $title_description?></p>
            <?php endif ?> 
        </div>
       
        <div class="swiper mySwiper">
            <div class="swiper-wrapper current_wrapper">
            <?php if('swiper'):
                foreach(get_field('swiper') as $row ) :?>
                <div class="swiper-slide current_slide"><?php 
                    $icon = $row['icon'];
                    $description = $row['description'];
                    $sign_link = $row['sign_link'];?>
                    <div class="logo_desc">
                        <?php if($icon):  ?>
                            <img class="img" src = "<?php echo $icon?>">
                        <?php endif ?>
                        <?php if($description):  ?>
                            <p class="description"><?php echo $description?></p>
                        <?php endif ?> 
                    </div>

                    <button class="button">SEE ALL OFFERS
                        <?php if($sign_link):  ?>
                            <?php echo $sign_link?>
                        <?php endif ?>
                    </button>
                </div>
                <?php endforeach;
                endif;?>
            </div>
        </div>
        <div class="mySwiper-setting">
            <div class="mySwiper-arrows">
                <div class="mySwiper-button-left">
                    <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/Icons.svg">
                </div>
                <div class="mySwiper-button-right">
                    <img src="http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/Icons-1.svg">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>



<script>
document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper(".mySwiper", {
        navigation: {
            nextEl: ".mySwiper-button-right",
            prevEl: ".mySwiper-button-left",
        },
        pagination: {
            el: ".swiper-pagination",
        },
        slidesPerView: 3, // Устанавливаем начальное количество видимых слайдов
        slidesPerGroup: 3, // Устанавливаем количество слайдов, которое перелистывается при клике на кнопку
        spaceBetween: 20, // Опциональное расстояние между слайдами
        breakpoints: {
            0: {
                slidesPerView: 1, // Для ширины экрана менее 425px листаем по одному слайду
                slidesPerGroup: 1, // По одному слайду при ширине экрана менее 425px
            },
            650: {
                slidesPerView: 2, 
                slidesPerGroup: 2, 
            },
            930: {
                slidesPerView: 3, 
                slidesPerGroup: 3, 
            },
        },
    });
});
</script>