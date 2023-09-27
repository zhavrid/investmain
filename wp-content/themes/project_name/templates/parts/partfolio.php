<?php 
$title = get_field('title');
$blocks = get_field('blocks');
?>


<section class="partfolio">
    <div class="container">
        <div class="partfolio_title">
            <?php if($title):  ?>
                <h1 class="partfolio titile"><?php echo $title?></h1>
            <?php endif ?> 
        </div>
        <div class="partfolio_blocks">
        <?php if('blocks'):
            foreach(get_field('blocks') as $line ) :
                $img_vis = $line['img_vis'];
                $img_invis = $line['img_invis'];
                $description = $line['description'];
                $link = $line['link'];?>
                <?php if($link):  ?>
                  <a class="partfolio_blocks_block" href="<?php echo $link?>">
                  <div class="block_img">
                    <?php if($img_vis):  ?>
                        <img class="vis" src = "<?php echo $img_vis?>">
                    <?php endif ?>
                  </div>
                <div class="invis">
                    <div class="block_img">
                        <?php if($img_invis):  ?>
                            <img class="img_invis" src = "<?php echo $img_invis?>">
                        <?php endif ?>
                    </div>
                    <?php if($description):  ?>
                        <p class="description_blocks"><?php echo $description?></p>
                    <?php endif ?>
                </div>
                </a>
                <?php endif ?>
            <?php
                endforeach;
            endif;?>
        </div>
    </div>
</section>