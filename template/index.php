<?php require_once('include/dashboard.php'); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                    <!-- TASK SAMMARY -->
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="statistics-details d-flex align-items-center justify-content-between">
                          <div>
                            <p class="statistics-title">Round seat booked</p>
                            <h3 class="rate-percentage">32.53%</h3>
                          </div>
                          <div>
                            <p class="statistics-title">Vip seat booked</p>
                            <h3 class="rate-percentage">7,682</h3>
                          </div>
                          <div>
                            <p class="statistics-title">customers</p>
                            <h3 class="rate-percentage">68.8</h3>
                          </div>
                        </div>
                      </div>
                    </div> 
                    <!-- END OF TASK SAMMARY -->

                    <!-- USER TABLE -->
                    <div class="row">
                        <?php require_once('include/userTable.php'); ?>
                    </div>
                    <!-- END OF USER TABLE -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
 <?php require_once('include/footer.php'); ?>