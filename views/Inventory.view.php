<?php require "views/partials/header.php" ;
require "views/partials/Main.php" ; ?>
<link rel="stylesheet" href="/css/inventory.css">
<h2>Inventory</h2>
<div class="inventory-header">
<button type="button" data-bs-toggle="modal" data-bs-target="#addProductModal">
  Add Product
</button>
</div>




<!-- Add Product Modal -->
<div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title" id="addProductModalLabel">Add Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <form method="POST" action="add_product.php">
        <div class="modal-body">
          
          <div class="mb-3">
            <label for="productName" class="form-label">Product Name</label>
            <input type="text" name="product_name" class="form-control" id="productName" required>
          </div>

          <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" name="quantity" class="form-control" id="quantity" required>
          </div>

          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="description"></textarea>
          </div>

          <div class="mb-9">
            <label for="date" class="form-label">Date</label>
            <input type="text" name="date" class="form-control" id="date" value="<?php echo date('d/m/Y'); ?>" readonly>
          </div>

        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Save Product</button>
        </div>
      </form>
      
    </div>
  </div>
</div>


















<?php
require "views/partials/footer.php" ?>

