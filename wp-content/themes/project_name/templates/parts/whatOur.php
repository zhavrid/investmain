<?php 
$blocks = get_field('blocks');
?>


<section class="what_our">
    <div class="container">
        <div class="swiper what">
            <div class="swiper-wrapper what-wrapper">
            <?php if('blocks'):
                foreach(get_field('blocks') as $row ) :?>
                  <div class="swiper-slide what-slide"><?php 
                    $transp_text = $row['transp_text'];
                    $avatar = $row['avatar'];
                    $name = $row['name'];
                    $profesion = $row['profesion'];
                    $logo = $row['logo'];
                    $description = $row['description'];?>
                        <?php if($transp_text):  ?>
                            <p class="opasity_text"><?php echo $transp_text?></p>
                        <?php endif ?>
                        <div class="slide_display">
                            <?php if($avatar):  ?>
                                <img class="avatar" src="<?php echo $avatar?>">
                            <?php endif ?> 
                            <div class="slide_display_name">
                                <?php if($name):  ?>
                                    <p class="name"><?php echo $name?></p>
                                <?php endif ?>
                                <?php if($profesion):  ?>
                                    <p class="profile"><?php echo $profesion?></p>
                                <?php endif ?>
                                <?php if($logo):  ?>
                                    <img class="logo" src="<?php echo $logo?>">
                                <?php endif ?> 
                            </div>
                        </div>
                        <?php if($description):  ?>
                            <p class="description"><?php echo $description?></p>
                        <?php endif ?>
                

                </div>
                <?php endforeach;
                endif;?>
            </div>
            <div class="swipers-pagination what-pagination"></div>
        </div>
    </div>
</section>

<script>

document.addEventListener("DOMContentLoaded", function () {
    var swiper2 = new Swiper(".what", {
        pagination: {
            el: ".swipers-pagination", 
        },
        slidesPerView: 1, // Устанавливаем начальное количество видимых слайдов
        slidesPerGroup: 1, // Устанавливаем количество слайдов, которое перелистывается при клике на кнопку
        spaceBetween: 0, // Опциональное расстояние между слайдами
        breakpoints: {
            650: {
                slidesPerView: 2,
                slidesPerGroup: 2,
            },
        },
    });
});

</script>





