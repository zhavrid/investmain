<?php 
$title_team = get_field('title_team');
$team_blocks = get_field('team_blocks');
$title_second = get_field('title_second');
$desc_second = get_field('desc_second');
$line_blocks = get_field('line_blocks');?>

<section class="our_team">
    <div class="container">
        <div class="our_team_title">
        <?php if($title_team):  ?>
            <h1 class="title_team"><?php echo $title_team?></h1>
        <?php endif ?> 
        </div>
        <div class="our_team_blocks">
            <?php if('team_blocks'):
            foreach(get_field('team_blocks') as $rows ) :?>
            <div class="our_team_blocks_block">
                <?php 
                $avatar = $rows['avatar'];
                $name = $rows['name'];
                $icon = $rows['icon'];
                $icon_hover = $rows['icon_hover'];
                $description = $rows['description'];?>
                <?php if($avatar):  ?>
                    <img class="avatar" src = "<?php echo $avatar?>">
                <?php endif ?>
                <div class="block_title">
                    <?php if($name):  ?>
                        <p class="name"><?php echo $name?></p>
                    <?php endif ?>
                    <?php if($icon):  ?>
                        <div class="hover_img">
                            <img class="icon" src = "<?php echo $icon?>">
                        </div>
                    <?php endif ?>
                    <?php if($icon_hover):  ?>
                        <div class="hover">
                            <img class="icon_hover" src = "<?php echo $icon_hover?>">
                        </div>
                    <?php endif ?>
                </div> 
                <?php if($description):  ?>
                    <p class="description"><?php echo $description?></p>
                <?php endif ?>     
            </div>
            <?php
            endforeach;
            endif;?>
        </div>
        <div class="our_team_title_two">
            <?php if($title_second):  ?>
                <h1 class="title_second"><?php echo $title_second?></h1>
            <?php endif ?>    
            <?php if($desc_second):  ?>
               <?php echo $desc_second?>
            <?php endif ?>   
        </div>
    </div>
    <div class="our_team_line">
        <?php if('line_blocks'):
        foreach(get_field('line_blocks') as $row ) :?>
        <div class="our_team_line_block"><?php 
            $line_avatar = $row['line_avatar'];
            $title_hover = $row['title_hover'];
            $desc_hover = $row['desc_hover'];
            $line_logo = $row['line_logo'];?>
                <div class="hover_img">
                <?php if($line_avatar):  ?>
                    <img class="line_avatar" src = "<?php echo $line_avatar?>">
                <?php endif ?>
                </div>
                <div class="hover">
                    <img src = "http://bootstrap-wp-theme-investmain/wp-content/uploads/2023/09/Vector-4.svg">
                <?php if($title_hover):  ?>
                    <p class="title"><?php echo $title_hover?></p>
                <?php endif ?> 
                <?php if($desc_hover):  ?>
                    <p class="description"><?php echo $desc_hover?></p>
                <?php endif ?> 
                </div>
                <div class="logo">
                <?php if($line_logo):  ?>
                    <img class="icon" src = "<?php echo $line_logo?>">
                <?php endif ?>
                </div>
            </div>
            <?php
            endforeach;
            endif;?>
        </div>
    </div>
</section>
