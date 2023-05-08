<!DOCTYPE html>
<html>

<head>
    <title>Index</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="indexer_style.css">
</head>

<body>
    <div class="content">
        <h1 class="head1">🗃️ Index of /<?php echo basename(__DIR__); ?>/</h1>
        <div class="index">
            <div>
                <ul>
                    <?php
                    $scan = array_diff(scandir('./'), array('.', '..'));
                    foreach ($scan as $file) {
                        if (is_dir($file)) {
                            echo "<li><span id='dir'>➥</span><a class='folder' href='./$file'> " . $file . "</a></li>";
                        } else {
                            if (strtolower(end(explode(".", $file))) == "mp4") {
                                echo "<li><span id='dir'>➥</span><a class='videomp4' href='./$file'> " . $file . " </a></li>";
                            }
                            /*
                            $extensions = array('image/jpeg', 'image/png', 'image/gif', 'jpg');
                            if (in_array($file, $extensions)) {
                                echo "<li><span id='dir'>➥</span><a class='image' href='./$file'> " . $file . " </a></li>";
                            }
                            */
                            //echo "<li>~<a href='./$file'>📄 " . $file . "/</a></li>";
                        }
                    }
                    ?>

                </ul>

            </div>
        </div>
        <span class='cred'>[<a href='#'>rindexer</a>] - Minified PHP Indexer</span>

    </div>
</body>

</html>