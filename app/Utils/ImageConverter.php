<?php

namespace App\Utils;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Log;

class ImageConverter
{
    private ImageManager $imageManager;
    private string $imagePath;
    private string $imagePathWebp;
    private int $quality;

    public function __construct(string $imagePath, string $imagePathWebp, int $quality = 100)
    {
        $this->imageManager = new ImageManager(new Driver());
        $this->imagePath = $imagePath;
        $this->imagePathWebp = $imagePathWebp;
        $this->quality = $quality;
    }

    public function convertToWebp()
    {
        if (!extension_loaded('gd')) {
            throw new \Exception('GD extension is not enabled. Please enable it.');
        }


        if (!file_exists($this->imagePath)) {
            throw new \Exception('Image not found');
        }

        if (file_exists($this->imagePathWebp)) {
            unlink($this->imagePathWebp);
        }

        if($this->quality < 0 || $this->quality > 100) {
            throw new \Exception('Quality must be between 0 and 100');
        }

        try {
            $image = $this->imageManager->read($this->imagePath);
            $image->toWebp($this->quality)->save($this->imagePathWebp);
            

            unlink($this->imagePath);
        } catch (\Exception $e) {
            throw new \Exception('Error converting image to webp');
        }
    }


}
