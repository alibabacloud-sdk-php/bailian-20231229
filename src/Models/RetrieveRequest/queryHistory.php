<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\RetrieveRequest;

use AlibabaCloud\Tea\Model;

class queryHistory extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $role;
    protected $_name = [
        'content' => 'content',
        'role' => 'role',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->role) {
            $res['role'] = $this->role;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return queryHistory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['role'])) {
            $model->role = $map['role'];
        }

        return $model;
    }
}
