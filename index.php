<?php 
include "./include/header.php";
// try {
//     // Prepare the SQL query
//     $sql = "INSERT INTO items(name, email, items, amount) 
//             VALUES ('cristian1', 'codiong@gmail.com', 'tanduay', '50')";
    
//     // Execute the query
//     if ($conn->exec($sql)) {
//         // echo "New record created successfully";
//     }
// } catch (PDOException $e) {
//     // Use errorInfo() or catch exception to display error
//     echo "Error: " . $e->getMessage();
// }
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize user inputs
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $item = filter_input(INPUT_POST, 'item', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $amount = filter_input(INPUT_POST, 'amount', FILTER_VALIDATE_INT);
}
?>

<div class="d-flex flex-column min-vh-100">
    <div class="container flex-grow-1">
        <div class="gradient-card mx-auto mb-5" style="max-width: 600px;">
            <h2 class="text-center">Shopping List</h2>
            <form method="POST" action="plan.php">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <label for="itemName" class="form-label">Item Name</label>
                    <input type="text" class="form-control" id="itemName" name="item" placeholder="Enter item name" required>
                </div>
                <div class="mb-3">
                    <label for="itemAmount" class="form-label">Item Amount</label>
                    <input type="number" class="form-control" id="itemAmount" name="amount" placeholder="Enter item amount" required>
                </div>
                <button type="submit" class="btn btn-light w-100">Submit</button>
            </form>
        </div>
    <footer class="bg-light text-center text-lg-start mt-auto">
        <div class="container p-4">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="text-uppercase">Follow Us</h5>
                    <div class="footer-icons">
                        <a href="mailto:example@gmail.com" target="_blank" title="Gmail">
                            <i class="bi bi-envelope-fill"></i>
                        </a>
                        <a href="https://www.facebook.com" target="_blank" title="Meta (Facebook)">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="https://www.instagram.com" target="_blank" title="Instagram">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://www.github.com" target="_blank" title="GitHub">
                            <i class="bi bi-github"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2024 Your Website Name. All rights reserved.
        </div>
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
