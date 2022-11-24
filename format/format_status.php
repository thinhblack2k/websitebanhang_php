<?php
  function format_status($value)
  {
    $text = '';
    if ($value == 0) {
        $text = 'Đang xử lý';
    }elseif ($value == 1) {
        $text = 'Đang chuyển bị';
    }elseif ($value == 2) {
        $text = 'Đang giao hàng';
    }else{
        $text = 'Đã hoàn thành';
    }
    echo $text;
  }
?>