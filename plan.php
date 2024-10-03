<!-- plan.php -->
<?php 
include './include/header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $item = $_POST['item'];
    $amount = $_POST['amount'];

    try {
        // Prepare SQL query to insert data into the items table
        $sql = "INSERT INTO items (name, email, items, amount, date) VALUES (:name, :email, :items, :amount, NOW())";
        $stmt = $conn->prepare($sql);
        
        // Bind parameters and execute the statement
        $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':items' => $item,
            ':amount' => $amount
        ]);
        // echo "Record created successfully";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

// Fetch all records from the items table
$sql = 'SELECT * FROM items';
$stmt = $conn->prepare($sql);
$stmt->execute();

// Fetch all records into an associative array
$items = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

  <!-- Table to display submitted items -->
  <h2 class="text-center mb-4 pb-4">Submitted Items</h2>
        <div class="container gradient-card">
            <div class="row text-center" style="list-style-type: none;">
                <ul class="col-sm-2" style="list-style-type: none;">
                    <li><h5>Name</h5></li>
                </ul>
                <ul class="col-sm-3" style="list-style-type: none;">
                    <li><h5>Email</h5></li>
                </ul>
                <ul class="col-sm-2" style="list-style-type: none;">
                    <li><h5>Item</h5></li>
                </ul>
                <ul class="col-sm-2" style="list-style-type: none;">
                    <li><h5>Amount</h5></li>
                </ul>
                <ul class="col-sm-3" style="list-style-type: none;">
                    <li><h5>Date</h5></li>
                </ul>
            </div>
            <div class="List">
                <?php foreach ($items as $item): ?>
                <div class="row text-center">
                    <ul class="col-sm-2" style="list-style-type: none;">
                        <li><?php echo htmlspecialchars($item['name'] ?? 'No name'); ?></li>
                    </ul>
                    <ul class="col-sm-3" style="list-style-type: none;">
                        <li><?php echo htmlspecialchars($item['email'] ?? 'No email'); ?></li>
                    </ul>
                    <ul class="col-sm-2" style="list-style-type: none;">
                        <li><?php echo htmlspecialchars($item['items'] ?? 'No item'); ?></li>
                    </ul>
                    <ul class="col-sm-2" style="list-style-type: none;">
                        <li>₱<?php echo htmlspecialchars($item['amount'] ?? '0'); ?></li>
                    </ul>
                    <ul class="col-sm-3" style="list-style-type: none;">
                        <li>
                        <?php echo date_format(date_create($item['date']), 'd/m/Y'); ?>
                        </li>
                    </ul>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php include './include/footer.php'?>
