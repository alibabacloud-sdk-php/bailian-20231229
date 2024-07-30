<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\AddCategoryResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example cate_cdd11b1b79a74e8bbd675c356a91ee3XXXXXXXX
     *
     * @var string
     */
    public $categoryId;

    /**
     * @var string
     */
    public $categoryName;
    protected $_name = [
        'categoryId'   => 'CategoryId',
        'categoryName' => 'CategoryName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }

        return $model;
    }
}
