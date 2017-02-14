<?php

include_once('plugin/comments.php');
include_once('plugin/comment.php');
include_once('plugin/comments-email.php');
include_once('plugin/comments-status.php');

/**
 * The Kirby extension registry
 */
$kirby->set('blueprint', 'comments', __DIR__ . '/blueprints/comments.php');
$kirby->set('blueprint', 'comment',  __DIR__ . '/blueprints/comment.php');
$kirby->set('snippet',   'comments', __DIR__ . '/snippets/comments.php');
