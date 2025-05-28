<?php

namespace App\Helper;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
// use Intervention\Image\Facades\Image;

class ImageManager
{
    public static function upload(string $dir, string $format, $image = null)
    {
        $format = $image->getClientOriginalExtension();
        $imPath = Carbon::now()->toDateString() . "-" . uniqid();
        $imageNameWebp = $imPath.".webp" ;
        if ($image != null) {
            $imageName = $imPath.".".$format;
            if (!Storage::disk('public')->exists($dir)) {
                Storage::disk('public')->makeDirectory($dir);
            }
            Storage::disk('public')->put($dir . $imageName, file_get_contents($image));
        } else {
            $imageName = 'default.jpg';
        }

        if($imageName!='default.jpg' && $imageName!='user.png')
        {
            $imagePath = storage_path('app/public/'.$dir).$imageName;
            $rvalue = ImageManager::convertToWebPImagick($imagePath, $imageNameWebp);
            if($rvalue)
            {
                unlink($imagePath);
                $imageName = $imageNameWebp;
            }
        }
        return $imageName;
    }

    public static function update(string $dir, $old_image, string $format, $image = null)
    {
        $format = $image->getClientOriginalExtension();
        if($old_image!='default.jpg' && $old_image!='user.png')
        {
            if (Storage::disk('public')->exists($dir . $old_image)) {
                Storage::disk('public')->delete($dir . $old_image);
            }
        }
        $imageName = ImageManager::upload($dir, $format, $image);
        return $imageName;
    }

    public static function delete($full_path)
    {
        if (Storage::disk('public')->exists($full_path)) {
            Storage::disk('public')->delete($full_path);
        }
        return [
            'success' => 1,
            'message' => 'Removed successfully !'
        ];
    }


    public static function convertToWebPImagick($source, $destination) {
        $info = getimagesize($source);
        
        if(!empty($info[2]))
        {
            $imageType = $info[2];
            if ($imageType == IMAGETYPE_JPEG) {
                $pngimg = imagecreatefromjpeg($source);
            } elseif ($imageType == IMAGETYPE_PNG) {
                $pngimg = \imagecreatefrompng($source);
            } 
        }
        
        
        if(!empty($pngimg))
        {
            $file = $source;
            $w = imagesx($pngimg);
            $h = imagesy($pngimg);;
            $im = imagecreatetruecolor ($w, $h);
            imageAlphaBlending($im, false);
            imageSaveAlpha($im, true);
            $trans = imagecolorallocatealpha($im, 0, 0, 0, 127);
            imagefilledrectangle($im, 0, 0, $w - 1, $h - 1, $trans);
            imagecopy($im, $pngimg, 0, 0, 0, 0, $w, $h);
            imagewebp($im, str_replace('png', 'webp', $file));
            imagedestroy($im);  
            return true;
        }
        else return false;
    }


    public static function profile_image_upload(string $dir, string $format, $image = null)
    {
        $imPath = Carbon::now()->toDateString() . "-" . uniqid();
        $imageNameWebp = $imPath.".webp" ;
        if ($image != null) {
            $imageName = $imPath.".".$format;
            if (!Storage::disk('public')->exists($dir)) {
                Storage::disk('public')->makeDirectory($dir);
            }
            Storage::disk('public')->put($dir . $imageName, file_get_contents($image));
        } else {
            $imageName = 'default.jpg';
        }
        return $imageName;
    }



    public static function video_upload(string $dir, string $format, $image = null)
    {
        if ($image != null) {
            $video = $image;
            $extension = $video->extension();
            $format = $extension;
            $videoName = Carbon::now()->toDateString() . "-" . uniqid() . "." . $format;
            $destinationPath = base_path($dir);
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
            $video->move($destinationPath, $videoName);
            // return $videoName;
        } else {
            $videoName = 'default.jpg';
        }
        return $videoName;
    }

    public static function video_update(string $dir, $old_image, string $format, $image = null)
    {
        $extension = $image->extension();
        $format = $extension;
        if($old_image!='default.jpg')
        {
            if (Storage::disk('public')->exists($dir . $old_image)) {
                Storage::disk('public')->delete($dir . $old_image);
            }
        }
        $imageName = ImageManager::video_upload($dir, $format, $image);
        return $imageName;
    }

    public static function video_delete($full_path)
    {
        if (Storage::disk('public')->exists($full_path)) {
            Storage::disk('public')->delete($full_path);
        }

        return [
            'success' => 1,
            'message' => 'Removed successfully !'
        ];

    }







    public static function zip_upload(string $dir, string $format, $image = null)
    {
        if ($image != null) {
            $video = $image;
            $extension = $video->extension();
            $format = $extension;
            $videoName = Carbon::now()->toDateString() . "-" . uniqid() . "." . $format;
            $destinationPath = base_path($dir);
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
            $video->move($destinationPath, $videoName);
            // return $videoName;
        } else {
            $videoName = 'zip.jpg';
        }
        return $videoName;
    }

    public static function zip_update(string $dir, $old_image, string $format, $image = null)
    {
        $extension = $image->extension();
        $format = $extension;
        if($old_image!='zip.jpg')
        {
            if (Storage::disk('public')->exists($dir . $old_image)) {
                Storage::disk('public')->delete($dir . $old_image);
            }
        }
        $imageName = ImageManager::zip_upload($dir, $format, $image);
        return $imageName;
    }

    public static function zip_delete($full_path)
    {
        if (Storage::disk('public')->exists($full_path)) {
            Storage::disk('public')->delete($full_path);
        }

        return [
            'success' => 1,
            'message' => 'Removed successfully !'
        ];

    }
    
    public static function uploadAPiImage(string $dir, string $format, $image = null)
    {
        $imPath = Carbon::now()->toDateString() . "-" . uniqid();
        $imageNameWebp = $imPath.".webp" ;
        if ($image != null) {
            $imageName = $imPath.".".$format;
            if(isset(explode(",", $image)[1]))
            {
                $image_content = base64_decode(explode(",", $image)[1]);
                file_put_contents(storage_path().'/app/public/'.$dir.'/'.$imageName,$image_content);                
            }
        } else {
            $imageName = 'default.jpg';
        }

        // if($imageName!='default.jpg' && $imageName!='user.png')
        // {
        //     $imagePath = storage_path('app/public/'.$dir).$imageName;
        //     $rvalue = ImageManager::convertToWebPImagick($imagePath, $imageNameWebp);
        //     if($rvalue)
        //     {
        //         unlink($imagePath);
        //         $imageName = $imageNameWebp;
        //     }
        // }
        return $imageName;
    }

    
    
    
    







}
