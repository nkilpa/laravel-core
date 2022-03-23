<?php

namespace nikitakilpa\Core\Factories;

use Illuminate\Support\Facades\App;
use nikitakilpa\Core\Dto\BaseDto;

class DtoFactory
{
    public static function createArray(array $items, string $class): array
    {
        $array = [];

        foreach ($items as $key => $item)
        {
            $dto = DtoFactory::createDtoFromArray($item, $class);

            $array[$key] = $dto;
        }

        return $array;
    }

    public static function createDtoFromArray(array $items, string $class)
    {
        $dto = app()->make($class);
        foreach ($items as $key => $value)
        {
            if (property_exists($dto, $key))
            {
                $dto->$key = $value;
            }
            else
            {
                return false;
            }
        }

        return $dto;
    }


    /*public static function createArray(array $config, StorageDto $dto): StorageDto
    {
        $dto->class = $config['class'];
        $dto->disk = $config['disk'];
        $dto->local_path = $config['local_path'];
        $dto->export_path = $config['export_path'];
        $dto->import_path = $config['import_path'];
        return $dto;
    }*/
}