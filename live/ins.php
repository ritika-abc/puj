<?php
$conn = new mysqli("localhost", "root", "", "puja");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $slug = $_POST['slug'];

    // Image Upload
    $imageName = time().'-'. $_FILES['image']['name'];
    $tmpName = $_FILES['image']['tmp_name'];
    $uploadPath = "image/pro/" . $imageName;

    move_uploaded_file($tmpName, $uploadPath);

    // Prepared Statement
    $stmt = $conn->prepare("INSERT INTO pro (name, image, slug) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $imageName, $slug);

    if($stmt->execute()){
        echo "<div class='alert alert-success text-center'>Product Inserted Successfully</div>";
    } else {
        echo "<div class='alert alert-danger text-center'>Error: ".$stmt->error."</div>";
    }

    $stmt->close();
    $conn->close();
}
?>





<!DOCTYPE html>
<html>
<head>
    <title>Insert Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            Add Product
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                
                <div class="mb-3">
                    <label class="form-label">Product Name</label>
                    <input type="text" name="name" class="form-control"  >
                </div>

                <div class="mb-3">
                    <label class="form-label">Slug</label>
                    <input type="text" name="slug" class="form-control"  >
                </div>

                <div class="mb-3">
                    <label class="form-label">Product Image</label>
                    <input type="file" name="image" class="form-control"  >
                </div>

                <button type="submit" name="submit" class="btn btn-success">
                    Insert Product
                </button>

            </form>
        </div>
    </div>
</div>

</body>
</html>
