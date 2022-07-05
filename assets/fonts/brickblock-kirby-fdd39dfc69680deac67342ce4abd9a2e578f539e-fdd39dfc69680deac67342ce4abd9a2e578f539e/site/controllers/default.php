<?php

return function($site, $pages, $page) {
	// fetch tags for work position
	$tags = explode(',', $page->introsubtitle());

	// fetch social icons
	$icons = array_slice($page->icons()->yaml(),0);

	// fetch personal info
	$infos = array_slice($page->aboutinfo()->yaml(),0);

	// fetch skills
	$skills = array_slice($page->aboutskills()->yaml(),0);

 	// pass all variables to template
  	return compact('tags', 'icons', 'infos', 'skills');
};