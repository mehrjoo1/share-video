<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug','url','length','description','thumbnail'];
    // ساخت یک اکسِسور برای تبدیل عدد به فرمت ساعت
    // نحوه استفاده بصورت زیر . نام گذاری تابع هم بعد از گت اسم ستون و بعدش کلمه اتریبیوت
    // این خودش میاد عنصرتون رو اول از همه به فرمت ساعت تغییر میده و موقع نمایش هم نیاز نیست کاری بکنید
    public function getLengthAttribute($value){
        return gmdate("H:i:s" , $value);
    }

    // اکسسور برای ایجاد تاریخ فارسی
    // ابتدا کتابخانه ورتا نصب شد بعد مثل حالت اکسسور ساعت استفاده شد
    public function getCreatedatAttribute($value){
        return verta($value)->formatDifference();
    }

    public function relatedVideos(int $count = 6){
        return video::all()->random($count);
    }
}
