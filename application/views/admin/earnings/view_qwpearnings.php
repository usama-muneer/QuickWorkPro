<div class="container padding10">
    <h2>QWP Earnings</h2> <hr/>

    <div class="col-lg-12 col-md-12 padding15">
        <div class="table-responsive w-100 d-block d-md-table">
            <table class="table table-striped">
                <thead class="thead-inverse">
                    <tr>
                        <th>ID</th>
                        <th>Completion Date</th>
                        <th>Order ID</th>
                        <th>Order Amount</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                    if(isset($qwpearning_data)){
                      foreach ($qwpearning_data as $qwpearning_row) {
                  ?>
                    <tr>
                        <td><?php echo $qwpearning_row['earning_id']; ?></td>
                        <td><?php echo $qwpearning_row['time']; ?></td>
                        <td><?php echo $qwpearning_row['order_id']; ?></td>
                        <td>$<?php echo $qwpearning_row['earn_amount']; ?></td>
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
