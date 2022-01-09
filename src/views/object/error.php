<?php
    // include './views/template/header.php';
    include './src/views/template/header.php';
?>
<body>

    <div class="container">
        <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">            
                <div style="color: red">
                    <?php echo $error; ?>
                </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        
    </div>    
    </main>

</body>
<?php
    // include '.src/views/template/footer.php'
    include './src/views/template/footer.php';
?>
