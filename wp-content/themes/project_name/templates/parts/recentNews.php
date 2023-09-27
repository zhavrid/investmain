<?php 
$title = get_field('title');
$description = get_field('description');
$blocks = get_field('blocks');
?>



<section class="recent_news">
    <div class="container">
        <div class="recent_news_title">
        <?php if($title):  ?>
            <h1 class="title_h1"><?php echo $title?></h1>
        <?php endif ?> 
        <?php if($description):  ?>
            <p class="title_p"><?php echo $description?></p>
        <?php endif ?> 
        </div>
        <div class="recent_news_blocks">
        <?php if('blocks'):
            foreach(get_field('blocks') as $rows ) :?>
            <div class="recent_news_blocks_block">
            <?php 
                $double_logo = $rows['double_logo'];
                $title_blocks = $rows['title_blocks'];
                $text_date = $rows['text_date'];?>
                <div class="logo">
                <?php if($double_logo):  ?>
                    <img class="logo_left" src = "<?php echo $double_logo?>">
                <?php endif ?>
                </div>
                <div class="description">
                <?php if($title_blocks):  ?>
                    <p class="title"><?php echo $title_blocks?></p>
                <?php endif ?>
                <?php if($text_date):  ?>
                    <p class="date"><?php echo $text_date?></p>
                <?php endif ?>
                </div>             
            </div>
            <?php endforeach;
        endif;?>
        </div>
    </div>
</section>
