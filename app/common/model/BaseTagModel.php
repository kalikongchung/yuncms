<?php
// +----------------------------------------------------------------------
// | YunCMS
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://www.yunalading.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: jabber <2898117012@qq.com>
// +----------------------------------------------------------------------
namespace app\common\model;
/**
 * 标签
 * Class BaseTagModel
 * @package app\common\model
 */
abstract class BaseTagModel extends BaseModel {
    protected $name = 'tags';
    protected $autoWriteTimestamp = false;
}
