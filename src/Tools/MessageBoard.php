<?php

namespace Emil\Basecamp\Tools;

class MessageBoard
{
    public function __construct($projectId, $messageBoardId)
    {
        $this->projectId = $projectId;
        $this->messageBoardId = $messageBoardId;
    }
}
