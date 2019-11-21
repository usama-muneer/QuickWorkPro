<div class="container padding10">
    <h2>Freelancer Earnings</h2> <hr/>

    <div class="col-lg-12 col-md-12 padding15">
        <div class="table-responsive w-100 d-block d-md-table">
            <table class="table table-striped">
                <thead class="thead-inverse">
                    <tr>
                        <th>ID</th>
                        <th>Completion Date</th>
                        <th>Order ID</th>
                        <th>Freelancer ID</th>
                        <th>Order Amount</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                    if(isset($fearning_data)){
                      foreach ($fearning_data as $fearning_row) {
                  ?>
                    <tr>
                        <td><?php echo $fearning_row['payment_id']; ?></td>
                        <td><?php echo $fearning_row['complete_date']; ?></td>
                        <td><?php echo $fearning_row['order_id']; ?></td>
                        <td><?php echo $fearning_row['freelancer_id']; ?></td>
                        <td>$<?php echo $fearning_row['earn_amount']; ?></td>
                    </tr>
                    <?php
                  }
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
