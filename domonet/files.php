<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

$landPath = "./lp.php";

$html = file_get_contents($landPath, true);

$doc = new DOMDocument();
$doc->loadHTML($html);

//$imgsPath = [];
$images = $doc->getElementsByTagName("img");

foreach ($images as $image) {
    $imgPath = $image->getAttribute("src");
    $imgsPath[] = $imgPath;
}

$cssPaths = [];
$cssLinks = $doc->getElementsByTagName("link");

foreach ($cssLinks as $cssLink) {
    $cssLinkPath = $cssLink->getAttribute("href");
    $cssPaths[] = $cssLinkPath;
    print_r($cssLinkPath . PHP_EOL);
}

class Folder
{
    public $pathFolder;
    public function setFolder($pathFolder)
    {
        $this->pathFolder = $pathFolder;

        switch ($this->pathFolder) {
            case "./img/":
                mkdir("./image/");
                $this->pathFolder = "./image/";
                break;
            case "./image/":
                mkdir("./img/");
                $this->pathFolder = "./img/";
                break;
            case "./image/":
                mkdir("./img/");
                $this->pathFolder = "./img/";
                break;
            default:
                mkdir("./img/");
                $this->pathFolder = "./img/";
                break;
        }
    }
}

$folder = new Folder();
$folder->setFolder("./image/");

$destinationFolder = $folder->pathFolder; // Папка для сохранения картинок

if ($html !== false) {
    $stylesImgPath = [];

    $pattern = '/background-image:\s*url\s*\(\s*[\'"]?(.*?)["\']?\s*\)/i';

    // Выполняем поиск путей к картинкам с помощью регулярного выражения
    preg_match_all($pattern, $html, $matches);

    if (!empty($matches[1])) {
        // Добавляем найденные пути к картинкам в массив
        $stylesImgPath = $matches[1];

    }

    foreach ($stylesImgPath as $styleImgPath) {
        $filename = basename($styleImgPath);
        $destination = $destinationFolder . $filename;

        $styleImageData = file_get_contents($styleImgPath, FILE_USE_INCLUDE_PATH);
        file_put_contents($destination, $styleImageData);
    }

    $stylesPathFiles = array_map("basename", $stylesImgPath);
    $styleModifyPath = str_replace($stylesImgPath, $stylesPathFiles, $html);
    file_put_contents($landPath, $styleModifyPath);
    

    $imgsPath = [];
    $pattern2 = '/src=\s*[\'"]?(.*?)["\']?\s*\s*[\'"]/i';
    
    // Выполняем поиск путей к картинкам с помощью регулярного выражения
    preg_match_all($pattern2, $html, $matches2);

    if (!empty($matches2[1])) {
        // Добавляем найденные пути к картинкам в массив
        $imgsPath = $matches2[1];

    }

    foreach ($imgsPath as $imgPath) {
	$filename2 = basename($imgPath); // Имя файла из URL-адреса
	$destination2 = $destinationFolder . $filename2; // Полный путь для сохранения картинки

//        print_r($destination2 . PHP_EOL);

	$imgData = file_get_contents($imgPath, true); // Получаем данные картинки
	file_put_contents($destination2, $imgData); // Сохраняем картинку на сервере

//	$filesImages = array_map('basename', $imgsPath);

//        $modifyPath = str_replace($imgsPath, $filesImages, $html);
//        file_put_contents($landPath, $modifyPath);

    }

} else {
    print_r("Ошибка при чтении css в HTML-файле" . PHP_EOL);
}

foreach ($cssPaths as $cssPath) {
    $cssFilePath = $cssPath;
    $cssContent = file_get_contents($cssFilePath, true); // Читаем содержимое CSS-файла

    if ($cssContent !== false) {
        $imagesCssPath = []; // Массив для хранения путей к картинкам

        // Паттерн для поиска путей к картинкам в CSS
        $pattern = '/url\s*\(\s*[\'"]?(.*?)["\']?\s*\)/i';

        // Выполняем поиск путей к картинкам с помощью регулярного выражения
        preg_match_all($pattern, $cssContent, $matches);

        if (!empty($matches[1])) {
            // Добавляем найденные пути к картинкам в массив
            $imagesCssPath = $matches[1];
        }

        foreach ($imagesCssPath as $imageCssPath) {
            $imageCssPath = trim($imageCssPath, "'\"");

            if ($imageCssPath[0] == ".") {
                $imageCssPath = substr($imageCssPath, 1);
            }

            $filename = basename($imageCssPath);
            $destination = $destinationFolder . $filename;

            $imageData = file_get_contents($imageCssPath, FILE_USE_INCLUDE_PATH);
            file_put_contents($destination, $imageData);
        }

        $basenames = array_map("basename", $imagesCssPath);
        $modifyPath = str_replace($imagesCssPath, $basenames, $cssContent);
        file_put_contents($cssLinkPath, $modifyPath);
		
    } else {
        print_r("Ошибка при чтении CSS-файла" . PHP_EOL);
    }
}


echo "Все картинки успешно скачаны и сохранены!" . PHP_EOL;
