<!DOCTYPE html>
<html>

<head>
    <title>Product Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <!-- Include Bootstrap JavaScript and jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <!-- Include Edit Product Modal -->
        <?= $this->include('adminSide/include/editmodal.php') ?>
        <?= $this->include('adminSide/include/addmodal.php') ?>

        <h2>Product Management</h2>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addProductModal">
            Add Product
        </button>

        <br>

        <a href="<?= base_url(''); ?>" class="nav-link text-body font-weight-bold px-0">
            <i class="fa fa-shopping-cart me-sm-1"></i>
            <span class="d-sm-inline d-none">Go to Shop</span>
        </a>

        <!-- List of Products -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Details</th>
                    <th>Price</th>
                    <th>Availability</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td>
                            <?= $product['id'] ?>
                        </td>
                        <td>
                            <?= $product['productname'] ?>
                        </td>
                        <td>
                            <?= $product['category'] ?>
                        </td>
                        <td>
                            <?= $product['details'] ?>
                        </td>
                        <td>
                            <?= $product['price'] ?>
                        </td>
                        <td>
                            <?= $product['availability'] ?>
                        </td>
                        <td><img src="<?= base_url($product['img']) ?>" width="100"></td>
                        <td>
                            <button type="button" class="btn btn-primary edit-product" data-toggle="modal"
                                data-target="#editProductModal" data-id="<?= $product['id']; ?> "
                                data-productname="<?= $product['productname']; ?> "
                                data-category="<?= $product['category']; ?>" data-details="<?= $product['details']; ?>"
                                data-price="<?= $product['price']; ?>" data-availability="<?= $product['availability']; ?>"
                                data-img="<?= base_url() . $product['img']; ?>">
                                Edit
                            </button>
                            <a href="<?= base_url() ?>delete/<?= $product['id'] ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


    <script>
        // Function to populate the edit modal
        function populateEditModal(id, productName, category, details, price, availability, img) {
            // Set values in the modal form fields
            $('#editId').val(id);
            $('#editProductName').val(productName);
            $('#editCategory').val(category);
            $('#editDetails').val(details);
            $('#editPrice').val(price);
            $('#editAvailability').val(availability);
            $('#editImg').val('');

            // Display the image
            $('#editImagePreview').attr('src', img);
        }

        // When the edit-product button is clicked, populate the modal with data
        $('.edit-product').on('click', function () {
            var id = $(this).data('id');
            var productName = $(this).data('productname');
            var category = $(this).data('category');
            var details = $(this).data('details');
            var price = $(this).data('price');
            var availability = $(this).data('availability');
            var img = $(this).data('img');

            // Call the function to populate the edit modal
            populateEditModal(id, productName, category, details, price, availability, img);
        });
    </script>

</body>

</html>