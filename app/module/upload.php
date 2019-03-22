<?php
class upload
{
    //定义一个私有的属性存放url
    private $url;
    private $size;
    private $type;

    function __construct()
    {
//        初始化
        $this->url = '';
        $this->size = 1024;
        $this->type = ['image/png','image/jpg','image/gif','image/jpeg','image/webp'];
        $this->errorarr = [
            0=>'文件上传成功',
            1=>'上传的文件超过了 php.ini 中 upload_max_filesize选项限制的值',
            2=>'上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值',
            3=>'文件只有部分被上传',
            4=>'没有文件被上传',
            6=>'找不到临时文件夹',
            7=>'文件写入失败',
            8=>'文件超过20kb',
            9=>'文件格式错误'

        ];

    }
    function init(){
        $file=$_FILES['file'];
        $result=$this->upload($file);
       echo json_encode($result);
    }
    function upload($file)
    {

        if ($file['error'] > 0) {
            $code= $file['error'];
            return ['code'=>$code,'msg'=>$this->errorarr[$code]];
        }
        if (is_uploaded_file($file['tmp_name'])) {
//            文件大小   类型
            if (!$this->isSize($file['size'])) {
                return ['code'=>8,'msg'=>$this->errorarr[8]];
            }
            if (!$this->isType($file['type'])) {
                return ['code'=>9,'msg'=>$this->errorarr[9]];
            }
            /*
             *     array
                    name  size  type  tmp_name临时文件夹  error状态码

                    1 上传目录  用is_uploaded_file()判断
                    2 目录 uploadimg/日期/文件
                        uploadimg文件夹是否存在  否则重建  用file_exists（）判断  用mkdir创建
                        日期文件夹是否存在   否则重建   用date（）格式化时间戳
                        设置文件名字 防止冲突  时间戳+文件后缀名   用time（）拿到时间戳   用explode（）拆分type或者name
                    3 移动   tmp_name移动到指定目录，并返回其路径    用move_upload_file()移动
             *
             * */

//    判断上传的文件是否为一个上传文件
            if (is_uploaded_file($file['tmp_name'])) {
                if (!file_exists('./uploadimg/')) {
                    mkdir('./uploadimg');
                }
                $date = date('y-m-d');
                if (!file_exists('./uploadimg/' . $date)) {
                    mkdir('./uploadimg/' . $date);
                }

                $ext = explode('.', $file['name'])[1];
                $filename = time() .rand(0,1000). '.' . $ext;
                //要移动的位置   名字
                $path = './uploadimg/' . $date . '/' . $filename;
                move_uploaded_file($file['tmp_name'], $path);
                return  ['code'=>10,'msg'=>'/sdk/uploadimg/' . $date . '/' . $filename];

            }
        }
    }

    function isSize($size)
    {
        return $size/1024 > $this->size ? false : true;
    }
    function isType($type)
    {
        for ($i = 0; $i < count($this->type); $i++) {
            if ($this->type[$i] == $type) {
                return true;
            }
        }
        return false;
    }
}


