<?php 

namespace Modules\Carousel;

class Carousel{

	public function render(){

		if ( have_rows('carousel_items') ): 

			$otpt = '<div class="featured-carousel carousel cf">';

			while ( have_rows('carousel_items') ): the_row(); 

				$item_image = get_sub_field('item_image');
				$description = get_sub_field('above_line');
				$link_to = get_sub_field('link_to');
				$button_text = get_sub_field('below_line');

				$otpt .= '<div class="carousel-item">';

				$otpt .= '<div class="carousel-image"><img src="' . $item_image['url'] . '"/></div>';

				$otpt .= '<div class="carousel-text">';

					$otpt .= '<div class="carousel-description">' . $description . '</div>';
					$otpt .= '<a class="block " href="' . $link_to . '"><div class="carousel-button">' . $button_text . '</div></a>';

				$otpt .= '</div>';

				$otpt .='</div>';

			endwhile; 

			$otpt .= '</div>';

		else: 

			$otpt = 'repeat has no rows'; 

		endif;

		return $otpt;

	}

	public static function czo(){
		echo 'carousel czo static func call';
	}

}

?>