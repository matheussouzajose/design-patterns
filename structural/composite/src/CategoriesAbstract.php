<?php

namespace Structural\Composite;

abstract class CategoriesAbstract
{
    protected array $categories = [];

    public abstract function getName(): string;

    public function addCategory(CategoriesAbstract $category)
    {
        $this->categories[] = $category;
    }

    public function removeCategory(CategoriesAbstract $category)
    {
        $this->categories = array_filter($this->categories, function ($cat) use ($category) {
            return $cat === $category;
        });
    }

    public function getCategory(int $key)
    {
        return $this->categories[$key] ?? null;
    }
}
