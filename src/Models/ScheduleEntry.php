<?php

namespace Emil\Basecamp\Models;

use Basecamp;
use Emil\Basecamp\Models\Traits\Commentable;

class ScheduleEntry extends Recording
{
    use Commentable;

    /**
     * Update the schedule entry.
     *
     * @param  string  $content
     * @return \Illuminate\Http\Collection
     */
    public function update($content)
    {
        $message = Basecamp::scheduleEntries($this->bucket->id)
                           ->update($this->id, $content);

        $this->setAttributes($message);

        return $message;
    }
}
