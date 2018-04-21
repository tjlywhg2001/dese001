<?php
	namespace app\admin\validate;

	use think\Validate;


	class Brand extends Validate
	{

	protected $rule = [
        'brand_name'  =>  'require|unique:brand',
        'brand_url' =>  'require|url',
        'brand_description' =>  'min:6',
    ];
    
    protected $message = [
        'brand_name.require'  =>  '睁眼好好看文字',
        'brand_url.require'  =>  '阿萨德发射点发好看文字',
        'brand_name.unique' =>  '品牌和爱情不能一起重温',
        'brand_url.url' =>  'url格式不对',
        'brand_description.min' =>  '不要偷懒，多吐6次血',
    ];
    


	}