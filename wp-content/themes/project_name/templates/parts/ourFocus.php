<?php 
$title = get_field('title');
$description = get_field('description');
$blocks = get_field('blocks');
?>
<section class="our_focus">
    <div class="container">
        <div class="our_focus_title">
        <?php if($title):  ?>
            <h1 class="title_our"><?php echo $title?></h1>
        <?php endif ?> 
        <?php if($description):  ?>
            <p class="desc_our"><?php echo $description?></>
        <?php endif ?> 
        </div>
        <div class="our_focus_blocks">
        <?php if('blocks'):
            foreach(get_field('blocks') as $rows ) :?>
            <div class="our_focus_blocks_block">
            <?php 
            $icon = $rows['icon'];
            $block_title = $rows['block_title'];
            $block_description = $rows['block_description'];
            if($icon):  ?>
                <img src="<?php echo $icon?>">
            <?php endif ?>
            <?if($block_title):  ?>
                <p class="title"><?php echo $block_title?></p>
            <?php endif ?>
            <?if($block_description):  ?>
                <p class="description"><?php echo $block_description?></p>
            <?php endif ?>
            </div>
            <?php
            endforeach;
        endif;?>
        </div>
    </div>
</section>