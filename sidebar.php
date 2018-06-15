<div class="four columns">
	<h4><?php _e('Categories'); ?></h4>
	<ul><?php wp_list_categories('sort_column=namonthly'); ?></ul>
	<h4><?php _e('Archives'); ?></h4>
	<ul> <?php wp_get_archives(array(
	        'show_post_count' => true,
        )); ?> </ul>
</div>