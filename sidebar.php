<script src="https://kit.fontawesome.com/438020997e.js" crossorigin="anonymous"></script>

<div class="sidebar-wrapper" style="height: 100vh;">
      <div>
            <div class="logo-wrapper">
                  <a data-bs-original-title="" title="">
                        <div class="logodiv">
                        </div>
                  </a>
                  <div class="toggle-sidebar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-left status_toggle middle sidebar-toggle">
                              <line x1="17" y1="10" x2="3" y2="10"></line>
                              <line x1="21" y1="6" x2="3" y2="6"></line>
                              <line x1="21" y1="14" x2="3" y2="14"></line>
                              <line x1="17" y1="18" x2="3" y2="18"></line>
                        </svg>
                  </div>
            </div>
            <div class="logo-icon-wrapper">
                  <a href="index.html" data-bs-original-title="" title="">
                        <img class="img-fluid for-light" style="opacity: 0; height:30px;width:30px" alt="">
                        <img class="img-fluid for-dark" style="opacity: 0; height:30px;width:30px" alt="">
                  </a>
            </div>
            <nav class="sidebar-main">
                  <div id="sidebar-menu">
                        <ul class="sidebar-links" id="simple-bar" data-simplebar="init" style="display: block;">
                              <div class="simplebar-wrapper" style="margin: 0px 0px -30px;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                          <div class="simplebar-height-auto-observer"></div>
                                    </div>
                                    <div class="simplebar-mask">
                                          <div class="simplebar-offset" style="height: 90vh;">
                                                <div class="simplebar-content-wrapper" style="height: 90vh;">
                                                      <div class="simplebar-content" style="padding: 0px 0px 30px;">

                                                            <li class="back-btn">
                                                                  <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                                                            </li>
                                                            <br>
                                                            <li class="sidebar-list">
                                                                  <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                                                        <i class="fa-solid fa-house"></i>
                                                                        <span> &nbsp;Home</span>
                                                                  </a>
                                                                  <ul class="sidebar-submenu">
                                                                        <li><a href="dashboard.php">Dashboard</a></li>
                                                                  </ul>
                                                            </li>

                                                            <li class="sidebar-list">
                                                                  <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                                                        <i class="fa-solid fa-chart-line"></i>
                                                                        <span> &nbsp;Leads Management</span>
                                                                  </a>
                                                                  <ul class="sidebar-submenu">
                                                                        <li><a href="lead_creation.php">Lead Creation</a></li>
                                                                        <li><a href="list_lead.php">Leads List</a></li>
                                                                        <li><a href="today_follow_up.php">Today's FollowUp</a></li>
                                                                  </ul>
                                                            </li>

                                                            <li class="sidebar-list">
                                                                  <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                                                        <i class="fa-solid fa-indian-rupee-sign"></i>
                                                                        <span> &nbsp;Transactions</span>
                                                                  </a>
                                                                  <ul class="sidebar-submenu">
                                                                        <li><a href="closed_lead.php">Pending Payments</a></li>
                                                                        <li><a href="compled_payments.php">Payments Cleared</a></li>
                                                                        <li><a href="transaction_report.php">Transaction Reports</a></li>
                                                                  </ul>
                                                            </li>

                                                            <li class="sidebar-list">
                                                                  <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                                                        <i class="fa-solid fa-database"></i>
                                                                        <span> &nbsp;Master Data</span>
                                                                  </a>
                                                                  <ul class="sidebar-submenu">
                                                                        <li><a href="source.php">Source</a></li>
                                                                        <li><a href="service_category.php">Service Category</a></li>
                                                                        <li><a href="service.php">Service</a></li>
                                                                        <li><a href="additional_service.php">Additional Service</a></li>
                                                                        <li><a href="branch.php">Branch</a></li>
                                                                        <li><a href="users.php">Users</a></li>
                                                                        <!-- <li><a href="followup.php">Follow Up Category</a></li> -->
                                                                        <li><a href="blog_creation.php">Blogs</a></li>
                                                                        <li><a href="day_creation.php">Days Creation</a></li>
                                                                        <li><a href="blog_days_data.php">Blog Days</a></li>
                                                                        <li><a href="general_settings.php">General Settings</a></li>
                                                                  </ul>
                                                            </li>

                                                      </div>
                                                </div>

                                          </div>
                                    </div>
                                    <div class="simplebar-placeholder hid-mob" style="width: auto; height: 2653px;"></div>
                              </div>
                        </ul>
                  </div>
            </nav>
      </div>
</div>

<style>
      .table-responsive::-webkit-scrollbar{
            display: none;
      }
      .logodiv {
            background-image: url('wedart.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: fixed;
            height: 50px;
            width: 130px;
      }
      @media only screen and (max-width: 991px){
            .hid-mob{
                  height: 0 !important;
                  display: none !important;
            }
      }
</style>
