<?php

namespace App\Helpers;

use Intervention\Image\Facades\Image;

class ImageUploadHelper
{
    public static function store($image, $path='', $name=null, $type='webp'): array
    {
        try {
            if ($image == null) {
                throw new \Exception('Empty Image!');
            }

            // Get the image extension and handle SVG separately
            $extension = $image->getClientOriginalExtension();

            if ($extension === 'svg' || $extension === 'svg+xml') {
                return self::storeSVG($image, $path, $name);
            }

            if (!self::validateType($extension)) {
                throw new \Exception("Invalid Type!");
            }

            if ($name === null) {
                $name = time() . rand(1000, 9999) . '.' . $extension;
            }

            $full_path = storage_path() . '/app/public/' . $path;
            $save_path = $full_path . '/' . $name;
            if (!file_exists($full_path)) {
                mkdir($full_path, 0777, true);
            }
            $iImage = Image::make($image);
            $iImage->encode($extension, 70)->save($save_path);

            $return_path = 'storage/' . $path . '/' . $name;

        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }

        return [
            'name' => $name,
            'path' => $return_path
        ];
    }

    public static function storeBase64Image($base64Image, $path='', $name=null, $type='webp'): array
    {
        try {
            if ($base64Image == null) {
                throw new \Exception('Empty Image!');
            }

            // Decode base64 image
            $imageData = explode(',', $base64Image);
            $imageType = explode(';', explode(':', $imageData[0])[1])[0];
            $extension = explode('/', $imageType)[1];

            if ($extension === 'svg+xml') {
                return self::storeSVG(base64_decode($imageData[1]), $path, $name, $extension);
            }

            if (!self::validateType($extension)) {
                throw new \Exception("Invalid Type!");
            }

            if ($name === null) {
                $name = time() . rand(1000, 9999) . '.' . $extension;
            }

            $full_path = storage_path() . '/app/public/' . $path;
            $save_path = $full_path . '/' . $name;
            if (!file_exists($full_path)) {
                mkdir($full_path, 0777, true);
            }
            $iImage = Image::make(base64_decode($imageData[1]));
            $iImage->encode($extension, 70)->save($save_path);

            $return_path = 'storage/' . $path . '/' . $name;

        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }

        return [
            'name' => $name,
            'path' => $return_path
        ];
    }

    private static function storeSVG($image, $path, $name, $extension = 'svg'): array
    {
        if ($name === null) {
            $name = time() . rand(1000, 9999) . '.' . $extension;
        }

        $full_path = storage_path() . '/app/public/' . $path;
        $save_path = $full_path . '/' . $name;
        if (!file_exists($full_path)) {
            mkdir($full_path, 0777, true);
        }

        // Save SVG directly
        if (is_string($image)) { // base64 string
            file_put_contents($save_path, $image);
        } else { // Uploaded file
            $image->move($full_path, $name);
        }

        $return_path = 'storage/' . $path . '/' . $name;

        return [
            'name' => $name,
            'path' => $return_path
        ];
    }
    
    private static function validateType(string $type)
    {
        $availableTypes = [
            "jpg",
            "jpeg",
            "png",
            "gif",
            "tif",
            "bmp",
            "ico",
            "psd",
            "webp"
        ];

        return in_array($type, $availableTypes);
    }
}
