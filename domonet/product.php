<?php
if($_GET["key"] !== "adam")
	die;

$dir = __DIR__ . '/';
$baseURL = 'https://' . $_SERVER['HTTP_HOST'] . '/';
$excludePath = '/app/public/';

// Обработка удаления файла
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_file'])) {
    $fileToDelete = $dir . $_POST['delete_file'];
    if (file_exists($fileToDelete)) {
        unlink($fileToDelete);
        echo "<p style='color:green;'>Файл успешно удален.</p>";
    } else {
        echo "<p style='color:red;'>Ошибка при удалении файла.</p>";
    }
}

// Обработка загрузки файла
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {
    $uploadFile = $dir . basename($_FILES['image']['name']);
    if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
        echo "<p style='color:green;'>Файл успешно загружен.</p>";
    } else {
        echo "<p style='color:red;'>Ошибка при загрузке файла.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Загрузка и отображение изображений</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        .image-wrapper {
            display: inline-block;
            width: 200px;
            margin: 10px;
            cursor: pointer;
        }

        .image-container {
            width: 100%;
            height: 200px;
            border: 1px solid #ccc;
            overflow: hidden;
            position: relative;
        }

        .image-container img {
            object-fit: contain;
            max-width: 100%;
            max-height: 100%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        form {
            margin-bottom: 20px;
        }

        .dropzone {
            border: 2px dashed #ccc;
            padding: 20px;
            text-align: center;
            cursor: pointer;
            margin-bottom: 20px;
        }

        .dropzone.dragover {
            background-color: #f7f7f7;
        }
    </style>
</head>

<body>
    <!-- Зона для перетаскивания и выбора файла -->
    <div class="dropzone" id="dropzone">
        Перетащите сюда изображение или <br> кликните для выбора
        <form action="" method="post" enctype="multipart/form-data" id="uploadForm">
            <input type="file" name="image" id="image" style="display: none;">
            <input type="submit" value="Загрузить изображение" name="submit" style="display: none;">
        </form>
    </div>

    <!-- Текстовое поле для отображения URL изображения -->
    <div>
        <input type="text" id="imageUrlField" style="width: 100%">
    </div>

    <!-- Отображение изображений и кнопки удаления -->
    <?php
    $files = scandir($dir);

    foreach ($files as $file) {
        $file_info = pathinfo($file);

        // Проверяем, является ли файл изображением на основе его расширения
        if (isset($file_info['extension']) && in_array(strtolower($file_info['extension']), ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
            // Преобразуем локальный путь в URL
            $imageURL = str_replace($excludePath, $baseURL, $dir) . $file;
            echo "<div class='image-wrapper' onclick=\"updateImageUrlField('{$imageURL}')\">
                    <div class='image-container'>
                        <img src='{$imageURL}' alt='{$file_info['filename']}'>
                    </div>
                    <form action='' method='post' style='text-align: center;'>
                        <input type='hidden' name='delete_file' value='{$file}'>
                        <input type='submit' value='Удалить'>
                    </form>
                  </div>";
        }
    }
    ?>

    <script>
        function updateImageUrlField(url) {
			let template = '{offer_url}?sub2={clickid}&sub4=#product_name#&sub5='+url;
			//let template = '{offer}&shop_name={shop_name}&logo='+url+'&title={title}&button_color={color}';
            document.getElementById('imageUrlField').value = template;
        }

        document.addEventListener('DOMContentLoaded', function() {
            const dropzone = document.getElementById('dropzone');

            dropzone.ondragover = function() {
                this.className = 'dropzone dragover';
                return false;
            };

            dropzone.ondragleave = function() {
                this.className = 'dropzone';
                return false;
            };

            dropzone.ondrop = function(event) {
                event.preventDefault();
                this.className = 'dropzone';

                // Получаем перетаскиваемый файл
                const file = event.dataTransfer.files[0];
                handleFileUpload(file);
            };
        });

        function handleFileUpload(file) {
            const form = new FormData();
            form.append('image', file);

            // Здесь мы отправляем файл на сервер с помощью XMLHttpRequest
            const xhr = new XMLHttpRequest();
            xhr.open('POST', '', true);
            xhr.onload = function() {
                if (this.status == 200) {
                    // Перезагружаем страницу, чтобы увидеть новое изображение
                    location.reload();
                }
            };
            xhr.send(form);
        }
		
		// Добавляем обработчик клика для dropzone
        document.getElementById('dropzone').addEventListener('click', function() {
            document.getElementById('image').click();
        });

        // Добавляем обработчик изменения для инпута файлов
        document.getElementById('image').addEventListener('change', function() {
            if (this.files && this.files[0]) {
                handleFileUpload(this.files[0]);
            }
        });
    </script>
</body>

</html>
