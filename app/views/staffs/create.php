<?php include PATH."staffp/staffh.php" ?>

<div class="container">

<form action="" method="POST" class="mt-5 w-50 mx-auto">
        <h2>Sales</h2>
<div class="mb-2">
<label for="">Medicine Name</label>
<select class="form-control" name="Medicine_Name" required>
        <option value="" selected disabled>Select Medicine</option>
                <?php
                    $conn = mysqli_connect("localhost", "root", "", "mvc_bsis3e");
                        if(!$conn){
                            die("Connection failed: " . mysqli_connect_error());
                        }

                        $sql = "SELECT * FROM stocks";
                        $result = mysqli_query($conn, $sql);

                        while ($row = mysqli_fetch_assoc($result)) {
                            $medicine_name = $row['Medicine_Name'];
                            $quantity = $row['Number_of_Stocks'];
                            echo "<option value='$medicine_name'>$medicine_name - ($quantity)</option>";
                        }
                ?>
</select>
</div>
<div class="mb-2">
<label for="">Quantity</label>
<input name="Quantity" type="number" class="form-control" required>
</div>
<div class="mb-2">
<label for="">Customer Name</label> 
<input name="Customer_Name" type="text" class="form-control" required>
</div>
<div class="mb-2">
<label for="">Total Price</label>
<input name="Total_Price"  type="text" class="form-control" required>
</div>
<button  type="submit" class="btn btn-primary">Purchase</button>

</div>

<?php include PATH."staffp/staffp.php" ?>