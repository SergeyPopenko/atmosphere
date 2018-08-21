<?php

class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {

	public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
		//$output .= "Link - ".$depth;


		$html = "";
		if($depth == 0) {
			$html .= "\n<li";

			if($args->walker->has_children) {
				$html .= ' class="menu-item"';
			}

			if(!$args->walker->has_children) {
				$html .= ' class="menu-item"';
			}

			$html .= "><a ";

			if($args->walker->has_children) {
				$item->url = preg_replace('/##/', '', $item->url);
				$html .= ' href="#' . $item->url . '" class="menu__link" data-submenu-link ';
			}
			if(!$args->walker->has_children) {
				$html .= ' href="' . $item->url . '"  class="menu__link" ';
			}
			$html .= '>%s ';

      if($args->walker->has_children) {
        $html .= '<svg class="menu__link-cross" width="16" height="16" fill="#333333">
                    <use xlink:href="#icon-cross" />
                  </svg>';
      }

			$html .= '</a>';

			if($args->walker->has_children) {
				$html .= '<div class="menu__sub-wrap" id="' . $item->url . '" data-submenu-wrap>
				              <div class="menu__sub-inner">
				                <button type="button" class="menu__sub-close" data-submenu-close>
				                  Close
				                  <svg width="46" height="46">
				                    <use xlink:href="#icon-cross" />
				                  </svg>
				                </button>';
			}

			$output .= sprintf($html,$item->title);

		}
		elseif($depth == 1) {
			$output .= '<li><a href="'.$item->url.'">'.$item->title.'</a></li>';
		}
	}

	public function end_el(&$output, $item, $depth = 0, $args = array()) {

		if($depth == 0) {
//			$output .= "</div>
//		            </div>
//	            </li>";
		}
		elseif($depth == 1) {
			$output .= '</li>';
		}
	}

	public function start_lvl(&$output, $depth = 0, $args = array()) {
		if($depth == 0) {
			$output .= '<ul class="menu__sub-list">';
		}
	}

	public function end_lvl(&$output, $depth = 0, $args = array()) {
		if($depth == 0) {
			$output .= '</ul>';
		}
	}

}

?>
