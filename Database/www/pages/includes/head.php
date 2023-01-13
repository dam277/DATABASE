<?php 
include_once __DIR__."/../../core/languages/Lang.php"; 
?>
<!DOCTYPE html>
<html lang="<?= $_SESSION["lang"] ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- NATIVE CSS -->
    <!-- <link rel="stylesheet" href="<?=Request::$cssLinkReturn ?>/resources/css/main.css"> -->

    <!-- TAILWIND -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
      theme: {
        extend: {
        }
      }
    }
  </script>
    <style type="text/tailwindcss">
    @layer utilities {
      .navSpacing::after {
        content: " ";
        position: absolute;
        top: 0.4px;
        bottom: 0.5px;
        margin-left: 10px;
        width: 2px;
        background: linear-gradient(to bottom, rgba(54, 72, 98, 0) 0%, #364862 25%, #364862 75%, rgba(54, 72, 98, 0) 100%);
      }
    }
  </style>
  <title>Site web</title>
</head>
<body>