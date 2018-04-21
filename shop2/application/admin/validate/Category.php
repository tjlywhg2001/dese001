<?php
	namespace app\admin\validate;

	use think\Validate;


	class Category extends Validate
	{

	protected $rule = [
        'cate_name'  =>  'require|unique:category',
        'cate_description' =>  'min:6',
    ];
    
    protected $message = [
        'cate_name.require'  =>  '睁眼好好看文字',
        'cate_name.unique' =>  '品牌和爱情不能一起重温',
        'cate_description.min' =>  '不要偷懒，多吐6次血',
    ];
    


	}