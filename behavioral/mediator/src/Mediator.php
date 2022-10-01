<?php

namespace Behavioral\Mediator;

class Mediator implements MediatorInterface
{
    private ClientColleague $client;
    private ServerColleague $server;
    private DatabaseColleague $database;

    public function __construct(ClientColleague $client, ServerColleague $server, DatabaseColleague $database)
    {
        $this->client = $client->setMediator($this);
        $this->server = $server->setMediator($this);
        $this->database = $database->setMediator($this);
    }

    public function sendResult($content)
    {
        $this->client->output($content);
    }

    public function makeRequest()
    {
        $this->server->process();
    }

    public function queryDb(): string
    {
        return $this->database->findData();
    }
}
