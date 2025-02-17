<?php

declare(strict_types=1);

namespace EventSauce\EventSourcing;

use EventSauce\Clock\Clock;
use EventSauce\Clock\SystemClock;

class DefaultHeadersDecorator implements MessageDecorator
{
    private ClassNameInflector $inflector;
    private Clock $clock;
    private string $timeOfRecordingFormat;

    public function __construct(
        ClassNameInflector $inflector = null,
        Clock $clock = null,
        string $timeOfRecordingFormat = Message::TIME_OF_RECORDING_FORMAT,
    )
    {
        $this->inflector = $inflector ?: new DotSeparatedSnakeCaseInflector();
        $this->clock = $clock ?: new SystemClock();
        $this->timeOfRecordingFormat = $timeOfRecordingFormat;
    }

    public function decorate(Message $message): Message
    {
        return $message->withHeader(
            Header::EVENT_TYPE,
            $this->inflector->instanceToType($message->payload())
        )->withTimeOfRecording($this->clock->now(), $this->timeOfRecordingFormat);
    }
}
