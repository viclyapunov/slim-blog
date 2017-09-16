<?php

namespace Blog\Models;


class Post
{
	public $title;
	public $body;
	public $is_published = false;
	public $created;
	public $updated;

	public function getTitle()
	{
		return $this->title;
	}
}
