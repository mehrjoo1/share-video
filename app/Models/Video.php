<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug','url','length','description','thumbnail','category_id'];

     // gerRoutekeyName : این فانکشن کارش اینه که
    //  روت مدل بایندینگ را از آی دی (دیفالت) به چیزی که شما میخواهید تغییر دهد
    //  روت مدل بایندینگ همان نمایش یک محصول با آی دی هست
    public function getRoutekeyName(){
        return 'slug';
    }

    // ساخت یک اکسِسور برای تبدیل عدد به فرمت ساعت
    // نحوه استفاده بصورت زیر . نام گذاری تابع هم بعد از گت اسم ستون و بعدش کلمه اتریبیوت
    // این خودش میاد عنصرتون رو اول از همه به فرمت ساعت تغییر میده و موقع نمایش هم نیاز نیست کاری بکنید
    public function getLengthInHumenAttribute(){
        return gmdate("H:i:s" , $this->length);
    }

    // اکسسور برای ایجاد تاریخ فارسی
    // ابتدا کتابخانه ورتا نصب شد بعد مثل حالت اکسسور ساعت استفاده شد
    public function getCreatedatAttribute($value){
        return verta($value)->formatDifference();
    }

    public function relatedVideos(int $count = 6){
        return video::all()->random($count);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    // این تابع به خاطر این است که اگر نام ستون دسته بندی رو تغییر دادید به چیز دیگه ای
    // دیگه نیاید تو همه فایل هایی که برای نمایش دسته بندی گذاشتید تغییر ایجاد کنید
    // برای نمایش : $video->category_name
    public function getCategoryNameAttribute(){
        return $this->category?->name;
    }
   
}
