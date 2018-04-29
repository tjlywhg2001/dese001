<?php
	namespace app\admin\validate;

	use think\Validate;


	class Arti extends Validate
	{

	protected $rule = [
        'ar_title'  =>  'require|min:6',
        'ar_linkurl' =>  'url',
        'ar_email' =>  'email',
    ];
    
    protected $message = [
        'ar_title.require'  =>  '睁眼好好看文字',
        'ar_title.min'  =>  '多吐6次',
        'ar_linkurl.url' =>  'url格式不对',
        'ar_email.email' =>  '电子邮件格式不对',
    ];
    


	}