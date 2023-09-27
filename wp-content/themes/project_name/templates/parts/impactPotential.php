<?php 
$title_white = get_field('title_white');
$title_red = get_field('title_red');
$impact_description = get_field('impact_description');
?>

<section class="impact_potential">
    <div class="container">
        <div class="impact_potential_block">
            <?php if($title_white):  ?>
                <h1 class="title_white"><?php echo $title_white?></h1>
                <?php if($title_red):  ?>
                <h1 class="title_red"><?php echo $title_red?></h1>
            <?php endif ?> 
            <?php endif ?> 
         
            <?php if($impact_description):  ?>
                <p class="impact_description"><?php echo $impact_description?></p>
            <?php endif ?> 
        </div>
    </div>
</section>