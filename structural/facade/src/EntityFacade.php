<?php

namespace Structural\Facade;

use Structural\Decorator\IEntityInterface;
use Structural\Decorator\User;

class EntityFacade
{
    private static $entity;

    public function setEntity(IEntityInterface $entity)
    {
        self::$entity = $entity;
    }

    public static function resolve(string $name)
    {
        if (self::$entity == null) {
            self::$entity = new User();
        }

        self::$entity->setName($name);

        $reflector = new \ReflectionClass(get_class(self::$entity));
        $comments = $reflector->getDocComment();

        preg_match('/\@decorator\ ([0-9a-zA-Z]+)/', $comments, $matches);
        if ($matches[1]) {
            $class = '\Structural\Decorator\\' . $matches[1] . 'Decorator';
        }

        $decorator = new $class;
        $decorator->setEntity(self::$entity);
        return $decorator->operation();
    }
}
