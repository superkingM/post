<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function store(Request $request){
        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $allow_types = ['image/png', 'image/jpeg', 'image/gif'];
            if (!in_array($request->image->getMimeType(), $allow_types)) {
                return ['status' => 0, 'info' => '图片类型不正确！'];
            }

            if ($request->image->getClientSize() > 1024 * 1024 * 3) {
                return ['status' => 0, 'info' => '图片大小不能超过 3M！'];
            }

            $path = $request->image->store('public/images');

            //上传到本地
            return ['status' => 1, 'info' => '上传成功', 'image_url' => '/storage' . str_replace('public', '', $path)];

            //上传到七牛
//            $file_path = storage_path('app/') . $path;//完整路径
//            qiniu_upload($file_path);
//            return ['status' => 1, 'info' => '上传成功', 'image_url' => 'http://image.s3sy.com/' . basename($file_path)];
        }
    }
}
