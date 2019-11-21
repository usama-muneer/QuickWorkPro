<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <a href="<?php echo base_url(); ?>adminc/index"><h3>QWP Admin Dashboard</h3></a>
        </div>

        <ul class="list-unstyled components">

            <li>
                <a href="#sCategoriesSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Service Categories</a>
                <ul class="collapse list-unstyled" id="sCategoriesSubmenu">
                    <li>
                        <a href="<?php echo base_url(); ?>categories">View All</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#servicesSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Services</a>
                <ul class="collapse list-unstyled" id="servicesSubmenu">
                    <li>
                        <a href="<?php echo base_url(); ?>services">View All</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#freelacersSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Freelancers</a>
                <ul class="collapse list-unstyled" id="freelacersSubmenu">
                    <li>
                        <a href="<?php echo base_url(); ?>freelancers">View All</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#buyersSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Buyers</a>
                <ul class="collapse list-unstyled" id="buyersSubmenu">
                    <li>
                        <a href="<?php echo base_url(); ?>buyers">View All</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#gigsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Gigs</a>
                <ul class="collapse list-unstyled" id="gigsSubmenu">
                   <li>
                        <a href="<?php echo base_url(); ?>active_gigs">Active</a>
                    </li>
                     <li>
                        <a href="<?php echo base_url(); ?>pending_gigs">Pending</a>
                    </li>
                     <li>
                        <a href="<?php echo base_url(); ?>deleted_gigs">Deleted</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>deactivated_gigs">Deactivated</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>view_gigs">View All</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#ordersSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Orders</a>
                <ul class="collapse list-unstyled" id="ordersSubmenu">
                   <li>
                        <a href="<?php echo base_url(); ?>active_orders">Active</a>
                    </li>
                     <li>
                        <a href="<?php echo base_url(); ?>completed_orders">Completed</a>
                    </li>
                     <li>
                        <a href="<?php echo base_url(); ?>cancelled_orders">Cancelled</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>disputed_orders">Disputed</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>view_orders">View All</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#bRequestsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Buyer Requests</a>
                <ul class="collapse list-unstyled" id="bRequestsSubmenu">
                   <li>
                        <a href="<?php echo base_url(); ?>active_requests">Active</a>
                    </li>
                     <li>
                        <a href="<?php echo base_url(); ?>pending_requests">Pending</a>
                    </li>
                     <li>
                        <a href="<?php echo base_url(); ?>deleted_requests">Deleted</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>view_requests">View All</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#earningsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Earnings</a>
                <ul class="collapse list-unstyled" id="earningsSubmenu">
                    <li>
                        <a href="<?php echo base_url(); ?>view_flearnings">Freelancers</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>view_qwpearnings">QWP</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
  <!-- jQuery CDN - Slim version (=without AJAX) -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <!-- Popper.JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

  <script type="text/javascript">
      $(document).ready(function () {
          $('#sidebarCollapse').on('click', function () {
              $('#sidebar').toggleClass('active');
          });
      });
  </script>
