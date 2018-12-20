<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $data['title']; ?></title>
    <?php include "parts/header.php"; ?>
</head>
<body>
     <?php include "parts/nav.php"; ?>

    <div class="layout">
        <?php include "parts/sidebar.php"; ?>

        <div class="contents">
            <div class="content">
                <?php $this->view($data['layout']); ?>
            </div><!-- close content -->
        </div><!-- close contents -->
    </div><!-- close layout -->

    <?php include "parts/footer.php"; ?>
</body>
</html>