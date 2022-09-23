<?php

namespace Creation\AbstractFactory\Products;

/**
 *
 */
interface AbstractPublishingCompanyB
{
    /**
     * @return string
     */
    public function getTitle(): string;

    /**
     * @return string
     */
    public function getAuthor(): string;

    /**
     * @return string
     */
    public function getPages(): string;
}
