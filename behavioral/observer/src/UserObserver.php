<?php

namespace Behavioral\Observer;

use Exception;

class UserObserver implements \SplObserver
{
    private array $changedUsers = [];
    private array $emails = [];

    /**
     * @throws Exception
     */
    public function update(\SplSubject $subject)
    {
        $this->changedUsers[] = clone $subject;

        if (in_array($subject->getEmail(), $this->emails))
        {
            throw new Exception("Duplicated value {$subject->getEmail()}");
        }
        $this->emails[] = $subject->getEmail();
    }

    public function getChangedUsers(): array
    {
        return $this->changedUsers;
    }
}
