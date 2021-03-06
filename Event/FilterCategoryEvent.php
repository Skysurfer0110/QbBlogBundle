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

use Qb\Bundle\BlogBundle\Model\CategoryInterface;
use Symfony\Component\EventDispatcher\Event;

/**
 * Filter Category Event.
 *
 * @author Quentin Berlemont <quentinberlemont@gmail.com>
 */
class FilterCategoryEvent extends Event
{
    /**
     * @var CategoryInterface
     */
    protected $category;

    /**
     * Constructor.
     *
     * @param CategoryInterface $category
     */
    public function __construct(CategoryInterface $category)
    {
        $this->category = $category;
    }

    /**
     * Get category.
     *
     * @return CategoryInterface
     */
    public function getCategory()
    {
        return $this->category;
    }
}