<?php

/*
 * This file is part of the QbBlogBundle package.
 *
 * (c) Quentin Berlemont <quentinberlemont@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Qb\Bundle\BlogBundle\Event;

use Qb\Bundle\BlogBundle\Model\CommentInterface;
use Symfony\Component\EventDispatcher\Event;

/**
 * Filter Comment Event.
 *
 * @author Quentin Berlemont <quentinberlemont@gmail.com>
 */
class FilterCommentEvent extends Event
{
    /**
     * @var CommentInterface
     */
    protected $comment;

    /**
     * Constructor.
     *
     * @param CommentInterface $comment
     */
    public function __construct(CommentInterface $comment)
    {
        $this->comment = $comment;
    }

    /**
     * Get comment.
     *
     * @return CommentInterface
     */
    public function getComment()
    {
        return $this->comment;
    }
}