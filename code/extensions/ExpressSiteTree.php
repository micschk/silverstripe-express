<?php

class ExpressSiteTree extends SiteTreeExtension {
	static $icon = 'themes/express/images/icons/sitetree_images/page.png';
	
	public function MenuChildren() {
		return $this->owner->Children()->filter('ShowInMenus', true);
	}
}