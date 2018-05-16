<?php

// add by zth
// 这个文件是用来定义一些全局会用的辅助函数。
function route_class() {
    return str_replace('.', '-', Route::currentRouteName());
}

