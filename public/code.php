<?php
//输出一张图
//验证码 尺寸和干扰性元素
/*width宽
 * height高
 * line干扰线个数
 * point点数
 * num  字符数（验证码多长）
 * chars  字符（有哪些字符）
 * result（最终的验证码）
 *
 * createimg 创建一张图片
 * getbgcolor填充背景颜色
 * drawline画线的方法
 * drawpoint画点的方法
 * getchar得到验证码
 * drawtext，获取文字
 * output输出
 * */

class code{
    public $width;//更改
    public $height;
    public $chars;//显示的字符
    public $result;
    public $img;
    private $line;//不能改
    private $pointer;
    private $number;    //n位字符
    private $fontpath;
    function __construct($w=100,$h=50)
    {
        $this->height=$h;
        $this->width=$w;
        $this->num=4;
        $this->line=6;
        $this->pointer=40;
        $this->chars='123456789abcdefghjklmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ';
        $this->fontpath=FONT_PATH;

    }
    //创建图片
    function createimg(){
        $this->img=imagecreatetruecolor($this->width,$this->height);
        $arr=$this->createbgcolor();
        $color= imagecolorallocate($this->img,$arr[0],$arr[1],$arr[2]);
       imagefill($this->img,0,0,$color);
    }
    //画干扰线
    function drawline()
    {
        for ($i = 0; $i<$this->line; $i++) {
            if ($i%2==0) {
                //            左上往右下的线x:0->width一半,   y:0->height一半
                $x1 = mt_rand(0, $this->width/2);//左
                $y1 = mt_rand(0, $this->height/2);//上
                $x2 = mt_rand($this->width/2, $this->width);//右
                $y2 = mt_rand($this->height/2, $this->height);//下

            } else {
                //            右上往左下的线x:width一半,   y:0->height一半
                $x1 = mt_rand($this->width/3, $this->width);//右
                $y1 = mt_rand(0, $this->height/2);//上
                $x2 = mt_rand(0, $this->width/2);//左
                $y2 = mt_rand($this->height/2, $this->height);//下
            }
            $arr=$this->createbgcolor();
            $color=imagecolorallocate($this->img,$arr[0],$arr[1],$arr[2]);
            imageline($this->img,$x1,$y1,$x2,$y2,$color);
        }
    }
    //画点
    function drawpointer(){

        for ($i = 0; $i < $this->pointer; $i++) {
            $arr=$this->createlinecolor();
            $color=imagecolorallocate($this->img,$arr[0],$arr[1],$arr[2]);
            $x = mt_rand(0,$this->width);
            $y = mt_rand(0,$this->height);
            imagesetpixel($this->img,$x,$y,$color);
        }
    }
    function drawtext(){
        $str=$this->getchar();
        $w=$this->width / $this->num;
        for ($i = 0; $i < $this->num; $i++) {
            $arr=$this->createlinecolor();
            $color=imagecolorallocate($this->img,$arr[0],$arr[1],$arr[2]);
            $x = mt_rand($w*$i+4,$w*($i+1)-12);
            $y = mt_rand($this->height/2+4,$this->height/2+9);
            imagettftext($this->img, mt_rand(20,30),mt_rand(-15,15),$x,$y,$color,$this->fontpath,$str[$i]);
        }
    }
    //创建字符，放到图片上
    function getchar(){
        $str='';
        for ($i = 0; $i < $this->num; $i++) {
            $index = mt_rand(0,strlen($this->chars)-1);
            $str .= substr($this->chars,$index,1);
        }
//       不区分大小写
        $this->result = strtolower($str);
        return $str;
    }
    //创建颜色
    function createbgcolor(){
        $arr=[];
        for ($i=0;$i<3;$i++){
//            mt_rand()产生随机数
            $arr[$i]=mt_rand(0,107);//浅色
        }
        return $arr;
    }
    function createlinecolor(){
        $arr=[];
        for ($i=0;$i<3;$i++){
//            mt_rand()产生随机数
            $arr[$i]=mt_rand(108,255);//色
        }
        return $arr;
    }
    function output(){
        header('Content-type:image/png');//头信息
        $this->createimg();//调用方法输出图片
        $this->drawpointer();
        $this->drawline();
        $this->drawtext();
        imagepng($this->img);//输出
    }

}
//输出
//        $code=new code();
//        $code->output();

