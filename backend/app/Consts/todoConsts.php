<?php

namespace App\Consts;

// 定数定義
class todoConsts
{
  public const SECOND_UNIQUE = ['id'];
  public const SECOND_UPDATE = ['text','memo','term_start','term_end'];
  public const TASK_UNIQUE = ['id'];
  public const TASK_UPDATE = ['text','memo','day','work_time','state'];
  public const WEEK_UNIQUE = ['id'];
  public const WEEK_UPDATE = ['text','memo','week','work_time','state'];

}

?>