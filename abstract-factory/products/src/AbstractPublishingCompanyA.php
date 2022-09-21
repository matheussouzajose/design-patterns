<?php

namespace AbstractFactory\Products;

/**
 *
 */
interface AbstractPublishingCompanyA
{
    /**
     * @return string
     */
    public function getTitle(): string;

    /**
     * @return string
     */
    public function getAuthor(): string;
}
