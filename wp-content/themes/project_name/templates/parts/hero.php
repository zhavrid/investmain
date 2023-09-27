<?php 
$title_one = get_field('title_one');
$title_two = get_field('title_two');
$title_three = get_field('title_three');
$description = get_field('description');
$sign_link = $rows['sign_link'];
$img_fon = get_field('img_fon');?>
     
<section class="hero">
    <div class="container">
        <div class="hero_block">
            <div class="hero_block_left">
                <div class="hero_block_left_content">
                    <?php if($title_one):  ?>
                        <h1 class="h1_one"><?php echo $title_one?></h1>
                    <?php endif ?>
                    <?php if($title_two):  ?>
                        <h1 class="h1_two"><?php echo $title_two?></h1>
                    <?php endif ?>
                    <?php if($title_three):  ?>
                        <h1 class="h1_three"><?php echo $title_three?></h1>
                    <?php endif ?>
                </div>
                <?php if($description):  ?>
                    <p class="description"><?php echo $description?></p>
                <?php endif ?>
                <button class="button">GET IN TOUCH</button>
            </div>
            <?php if($img_fon):  ?>
                <div class="hero_block_img">
                    <img src="<?php echo $img_fon?>">
                </div>
            <?php endif ?>
        </div>
    </div>
</section>