<?php
    $icon_styles = array();
    if(!empty($instance['keyFeatureIconSection']['keyFeatureIconSize'])) $icon_styles[] = 'font-size: '.intval($instance['keyFeatureIconSection']['keyFeatureIconSize']).'px';
    if(!empty($instance['keyFeatureIconSection']['keyFeatureIconColor'])) $icon_styles[] = 'color: '.$instance['keyFeatureIconSection']['keyFeatureIconColor'];
?>
<?php if(!empty($instance['keyFeatureIconSection']['keyFeatureIcon']) || !empty($instance['keyFeatureTitle']) || !empty($instance['keyFeatureDescription'])) : ?>
<div class="knowledge-box">
	<?php if(!empty($instance['keyFeatureIcon'])) : ?>
    	<?php echo siteorigin_widget_get_icon( $instance['keyFeatureIcon'], $icon_styles); ?>
    <?php endif; ?>
    <?php if (!empty($instance['keyFeatureTitle'])) : ?>
    	<h6 class="keyFeatureTitle"><?php echo wp_kses_post($instance['keyFeatureTitle']) ?></h6>
    <?php endif; ?>
    <?php if (!empty($instance['keyFeatureDescription'])) : ?>
    	<p class="keyFeatureDescription"><?php echo wp_kses_post($instance['keyFeatureDescription']); ?></p>
    <?php endif; ?>
    <?php if(!empty($instance['keyFeatureLinktext']) && !empty($instance['keyFeatureLink'])) : ?>
        <a href="<?php echo esc_url($instance['keyFeatureLink']); ?>" class="btn-light"><?php echo $instance['keyFeatureLinktext']; ?></a>
    <?php endif; ?>
</div>
<?php endif; ?>