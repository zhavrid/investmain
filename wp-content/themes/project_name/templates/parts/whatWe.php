<?php 
$title = get_field('title');
$description = get_field('description');
$sign_text = get_field('sign_text');
$sign_img = get_field('sign_img');
$sign_link = get_field('sign_link');
$img = get_field('img');
?>

<section class="what_we">
    <div class="containers">
        <div class="what_we_block">
            <div class="what_we_block_left">
            <?php if($title):  ?>
                <h1 class="what_titile"><?php echo $title?></h1>
            <?php endif ?> 
            <?php if($description):  ?>
                <p class="what_desc"><?php echo $description?></>
            <?php endif ?> 
            <?php if($sign_text):  ?>
            <button class="what_we_block_left_button"><?php echo $sign_text?>
                <?php endif ?>
                <?php if($sign_icon):  ?>
                    <img class="arrow" src="<?php echo $sign_icon?>">
                <?php endif ?>
                <?php if($sign_link):  ?>
                    <?php echo $sign_link?>
                <?php endif ?>
            </button>
            </div>
            <?php if($img):  ?>
            <div class="what_we_block_img">
                <img class="img" src=" <?php echo $img?>">
            </div>
            <?php endif ?>
        </div>
    </div>
</section>