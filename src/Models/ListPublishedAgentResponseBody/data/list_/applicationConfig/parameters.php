<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\ListPublishedAgentResponseBody\data\list_\applicationConfig;

use AlibabaCloud\Dara\Model;

class parameters extends Model
{
    /**
     * @var int
     */
    public $dialogRound;

    /**
     * @var int
     */
    public $maxTokens;

    /**
     * @var float
     */
    public $temperature;
    protected $_name = [
        'dialogRound' => 'dialogRound',
        'maxTokens' => 'maxTokens',
        'temperature' => 'temperature',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dialogRound) {
            $res['dialogRound'] = $this->dialogRound;
        }

        if (null !== $this->maxTokens) {
            $res['maxTokens'] = $this->maxTokens;
        }

        if (null !== $this->temperature) {
            $res['temperature'] = $this->temperature;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dialogRound'])) {
            $model->dialogRound = $map['dialogRound'];
        }

        if (isset($map['maxTokens'])) {
            $model->maxTokens = $map['maxTokens'];
        }

        if (isset($map['temperature'])) {
            $model->temperature = $map['temperature'];
        }

        return $model;
    }
}
