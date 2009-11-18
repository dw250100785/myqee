<?php defined('MYQEEPATH') or die('No direct script access.');
//2009-10-20 16:57:21
//it is saved by myqee system,please don't edit it.

$config = array (
  'dbname' => 'default/news',
  'database' => 'default',
  'tablename' => 'news',
  'sys_field' => 
  array (
    'id' => 'id',
    'title' => 'title',
    'imagenews' => 'image',
    'isshow' => 'isshow',
    'abstract' => 'abstract',
    'contentdb_page' => 'content',
    'class_id' => 'class_id',
    'class_name' => 'class_name',
    'filepath' => 'filepath',
    'filename' => 'filename',
    'iscommend' => 'iscommend',
    'writer' => 'sssf',
  ),
  'is_member_db' => '0',
  'list' => 
  array (
    'id' => 
    array (
      'title' => 'ID',
      'width' => 60,
      'align' => 'center',
    ),
    'title' => 
    array (
      'title' => '标题',
      'titlelink' => true,
    ),
    'isshow' => 
    array (
      'title' => '是否发布',
      'width' => 55,
      'align' => 'center',
      'boolean' => 
      array (
        1 => '是
        0 => '<font color="red">否</font>',
      ),
    ),
  ),
  'edit' => 
  array (
    'id' => 
    array (
      'type' => 'hidden',
      'title' => 'ID',
      'description' => '',
      'set' => 
      array (
        'class' => 'input',
      ),
      'adv' => 
      array (
        '_g' => 
        array (
          'flag' => NULL,
          'name' => NULL,
          'type' => 'input',
          'num' => '0',
          'editwidth' => NULL,
          'isadd' => 1,
          'isdel' => 1,
          'isorder' => 1,
        ),
      ),
    ),
    'title' => 
    array (
      'title' => '标题',
      'description' => '',
      'type' => 'input',
      'set' => 
      array (
        'size' => 45,
        'class' => 'input',
      ),
      'value' => '',
      'notempty' => true,
      'format' => 'string',
      'adv' => 
      array (
        '_g' => 
        array (
          'flag' => NULL,
          'name' => NULL,
          'type' => 'input',
          'num' => '0',
          'editwidth' => NULL,
          'isadd' => 1,
          'isdel' => 1,
          'isorder' => 1,
        ),
      ),
    ),
    'image' => 
    array (
      'title' => '标题图片',
      'type' => 'imginput',
      'set' => 
      array (
        'size' => 30,
        'class' => 'input',
      ),
      'description' => '',
      'adv' => 
      array (
        '_g' => 
        array (
          'flag' => NULL,
          'name' => NULL,
          'type' => 'input',
          'num' => '0',
          'editwidth' => NULL,
          'isadd' => 1,
          'isdel' => 1,
          'isorder' => 1,
        ),
      ),
    ),
    'isshow' => 
    array (
      'title' => '是否发布',
      'type' => 'radio',
      'set' => 
      array (
        'size' => 1,
      ),
      'candidate' => 
      array (
        0 => '未审核
        1 => '发布
        -1 => '不发布',
      ),
      'default' => '1',
      'format' => 'int',
      'description' => '',
      'adv' => 
      array (
        '_g' => 
        array (
          'flag' => NULL,
          'name' => NULL,
          'type' => 'input',
          'num' => '0',
          'editwidth' => NULL,
          'isadd' => 1,
          'isdel' => 1,
          'isorder' => 1,
        ),
      ),
    ),
    'abstract' => 
    array (
      'title' => '摘要',
      'type' => 'textarea',
      'set' => 
      array (
        'cols' => 80,
        'rows' => 8,
        'class' => 'input',
        'size' => 80,
        'other' => '',
      ),
      'format' => 'html',
      'description' => '',
      'adv' => 
      array (
        '_g' => 
        array (
          'flag' => NULL,
          'name' => NULL,
          'type' => 'input',
          'num' => '0',
          'editwidth' => NULL,
          'isadd' => 1,
          'isdel' => 1,
          'isorder' => 1,
        ),
      ),
    ),
    'content' => 
    array (
      'title' => '正文',
      'type' => 'pagehtmlarea',
      'set' => 
      array (
        'rows' => 22,
        'class' => 'input',
        'other' => '',
      ),
      'format' => 'html',
      'description' => '',
      'adv' => 
      array (
        '_g' => 
        array (
          'flag' => NULL,
          'name' => NULL,
          'type' => 'input',
          'num' => '0',
          'editwidth' => NULL,
          'isadd' => 1,
          'isdel' => 1,
          'isorder' => 1,
        ),
      ),
    ),
    'class_id' => 
    array (
      'title' => '栏目ID',
      'description' => '',
      'type' => 'select',
      'set' => 
      array (
        'class' => 'input',
      ),
      'adv' => 
      array (
        '_g' => 
        array (
          'flag' => NULL,
          'name' => NULL,
          'type' => 'input',
          'num' => '0',
          'editwidth' => NULL,
          'isadd' => 1,
          'isdel' => 1,
          'isorder' => 1,
        ),
      ),
    ),
    'class_name' => 
    array (
      'type' => 'hidden',
      'title' => '栏目名称',
      'description' => '',
      'set' => 
      array (
        'class' => 'input',
      ),
      'adv' => 
      array (
        '_g' => 
        array (
          'flag' => NULL,
          'name' => NULL,
          'type' => 'input',
          'num' => '0',
          'editwidth' => NULL,
          'isadd' => 1,
          'isdel' => 1,
          'isorder' => 1,
        ),
      ),
    ),
    'filepath' => 
    array (
      'title' => '文件存放路径',
      'type' => 'input',
      'set' => 
      array (
        'size' => 30,
        'class' => 'input',
      ),
      'format' => 'filepath',
      'description' => '',
      'adv' => 
      array (
        '_g' => 
        array (
          'flag' => NULL,
          'name' => NULL,
          'type' => 'input',
          'num' => '0',
          'editwidth' => NULL,
          'isadd' => 1,
          'isdel' => 1,
          'isorder' => 1,
        ),
      ),
    ),
    'filename' => 
    array (
      'title' => '文件名',
      'type' => 'input',
      'set' => 
      array (
        'size' => 16,
        'class' => 'input',
      ),
      'format' => 'filename',
      'description' => '',
      'adv' => 
      array (
        '_g' => 
        array (
          'flag' => NULL,
          'name' => NULL,
          'type' => 'input',
          'num' => '0',
          'editwidth' => NULL,
          'isadd' => 1,
          'isdel' => 1,
          'isorder' => 1,
        ),
      ),
    ),
    'iscommend' => 
    array (
      'title' => '是否推荐',
      'type' => 'select',
      'set' => 
      array (
        'size' => 1,
        'class' => 'input',
      ),
      'candidate' => 
      array (
        0 => '不推荐
        1 => '1级推荐
        2 => '2级推荐
        3 => '3级推荐
        4 => '4级推荐
        5 => '5级推荐
        6 => '6级推荐
        7 => '7级推荐
        8 => '8级推荐
        9 => '9级推荐',
      ),
      'default' => '0',
      'format' => 'int',
      'description' => '',
      'adv' => 
      array (
        '_g' => 
        array (
          'flag' => NULL,
          'name' => NULL,
          'type' => 'input',
          'num' => '0',
          'editwidth' => NULL,
          'isadd' => 1,
          'isdel' => 1,
          'isorder' => 1,
        ),
      ),
    ),
    'sssf' => 
    array (
      'title' => '撒旦法撒旦法',
      'type' => 'input',
      'set' => 
      array (
        'class' => 'input',
        'size' => 20,
      ),
      'format' => 'string',
      'description' => '',
      'adv' => 
      array (
        '_g' => 
        array (
          'flag' => NULL,
          'name' => NULL,
          'type' => 'input',
          'num' => '0',
          'editwidth' => NULL,
          'isadd' => 1,
          'isdel' => 1,
          'isorder' => 1,
        ),
      ),
    ),
  ),
  'readbydbname' => '0',
  'usedbmodel' => '0',
  'model' => false,
);