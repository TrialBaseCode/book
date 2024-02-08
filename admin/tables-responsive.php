<?php 
  require_once "./template/admin_header.php"; 
?>

        <!-- Begin page -->
        <div id="wrapper">


        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

        <?php 
            require_once "./template/admin_sidebar.php"; 
        ?>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="responsive-table-plugin">
                                            <div class="table-rep-plugin">
                                                <div class="table-responsive" data-pattern="priority-columns">
                                                    <table id="tech-companies-1" class="table table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>Company</th>
                                                            <th data-priority="1">Last Trade</th>
                                                            <th data-priority="3">Trade Time</th>
                                                            <th data-priority="1">Change</th>
                                                            <th data-priority="3">Prev Close</th>
                                                            <th data-priority="3">Open</th>
                                                            <th data-priority="6">Bid</th>
                                                            <th data-priority="6">Ask</th>
                                                            <th data-priority="6">1y Target Est</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <th>GOOG <span class="co-name">Google Inc.</span></th>
                                                            <td>597.74</td>
                                                            <td>12:12PM</td>
                                                            <td>14.81 (2.54%)</td>
                                                            <td>582.93</td>
                                                            <td>597.95</td>
                                                            <td>597.73 x 100</td>
                                                            <td>597.91 x 300</td>
                                                            <td>731.10</td>
                                                        </tr>
                                                        <tr>
                                                            <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                                            <td>378.94</td>
                                                            <td>12:22PM</td>
                                                            <td>5.74 (1.54%)</td>
                                                            <td>373.20</td>
                                                            <td>381.02</td>
                                                            <td>378.92 x 300</td>
                                                            <td>378.99 x 100</td>
                                                            <td>505.94</td>
                                                        </tr>
                                                        <tr>
                                                            <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                                            <td>191.55</td>
                                                            <td>12:23PM</td>
                                                            <td>3.16 (1.68%)</td>
                                                            <td>188.39</td>
                                                            <td>194.99</td>
                                                            <td>191.52 x 300</td>
                                                            <td>191.58 x 100</td>
                                                            <td>240.32</td>
                                                        </tr>
                                                        <tr>
                                                            <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                                                            <td>31.15</td>
                                                            <td>12:44PM</td>
                                                            <td>1.41 (4.72%)</td>
                                                            <td>29.74</td>
                                                            <td>30.67</td>
                                                            <td>31.14 x 6500</td>
                                                            <td>31.15 x 3200</td>
                                                            <td>36.11</td>
                                                        </tr>
                                                        <tr>
                                                            <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                                            <td>25.50</td>
                                                            <td>12:27PM</td>
                                                            <td>0.66 (2.67%)</td>
                                                            <td>24.84</td>
                                                            <td>25.37</td>
                                                            <td>25.50 x 71100</td>
                                                            <td>25.51 x 17800</td>
                                                            <td>31.50</td>
                                                        </tr>
                                                        <tr>
                                                            <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                                            <td>18.65</td>
                                                            <td>12:45PM</td>
                                                            <td>0.97 (5.49%)</td>
                                                            <td>17.68</td>
                                                            <td>18.23</td>
                                                            <td>18.65 x 10300</td>
                                                            <td>18.66 x 24000</td>
                                                            <td>21.12</td>
                                                        </tr>
                                                        <tr>
                                                            <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                                            <td>15.81</td>
                                                            <td>12:25PM</td>
                                                            <td>0.11 (0.67%)</td>
                                                            <td>15.70</td>
                                                            <td>15.94</td>
                                                            <td>15.79 x 6100</td>
                                                            <td>15.80 x 17000</td>
                                                            <td>18.16</td>
                                                        </tr>
                                                        <!-- Repeat -->
                                                        <tr>
                                                            <th>GOOG <span class="co-name">Google Inc.</span></th>
                                                            <td>597.74</td>
                                                            <td>12:12PM</td>
                                                            <td>14.81 (2.54%)</td>
                                                            <td>582.93</td>
                                                            <td>597.95</td>
                                                            <td>597.73 x 100</td>
                                                            <td>597.91 x 300</td>
                                                            <td>731.10</td>
                                                        </tr>
                                                        <tr>
                                                            <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                                            <td>378.94</td>
                                                            <td>12:22PM</td>
                                                            <td>5.74 (1.54%)</td>
                                                            <td>373.20</td>
                                                            <td>381.02</td>
                                                            <td>378.92 x 300</td>
                                                            <td>378.99 x 100</td>
                                                            <td>505.94</td>
                                                        </tr>
                                                        <tr>
                                                            <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                                            <td>191.55</td>
                                                            <td>12:23PM</td>
                                                            <td>3.16 (1.68%)</td>
                                                            <td>188.39</td>
                                                            <td>194.99</td>
                                                            <td>191.52 x 300</td>
                                                            <td>191.58 x 100</td>
                                                            <td>240.32</td>
                                                        </tr>
                                                        <tr>
                                                            <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                                                            <td>31.15</td>
                                                            <td>12:44PM</td>
                                                            <td>1.41 (4.72%)</td>
                                                            <td>29.74</td>
                                                            <td>30.67</td>
                                                            <td>31.14 x 6500</td>
                                                            <td>31.15 x 3200</td>
                                                            <td>36.11</td>
                                                        </tr>
                                                        <tr>
                                                            <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                                            <td>25.50</td>
                                                            <td>12:27PM</td>
                                                            <td>0.66 (2.67%)</td>
                                                            <td>24.84</td>
                                                            <td>25.37</td>
                                                            <td>25.50 x 71100</td>
                                                            <td>25.51 x 17800</td>
                                                            <td>31.50</td>
                                                        </tr>
                                                        <tr>
                                                            <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                                            <td>18.65</td>
                                                            <td>12:45PM</td>
                                                            <td>0.97 (5.49%)</td>
                                                            <td>17.68</td>
                                                            <td>18.23</td>
                                                            <td>18.65 x 10300</td>
                                                            <td>18.66 x 24000</td>
                                                            <td>21.12</td>
                                                        </tr>
                                                        <tr>
                                                            <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                                            <td>15.81</td>
                                                            <td>12:25PM</td>
                                                            <td>0.11 (0.67%)</td>
                                                            <td>15.70</td>
                                                            <td>15.94</td>
                                                            <td>15.79 x 6100</td>
                                                            <td>15.80 x 17000</td>
                                                            <td>18.16</td>
                                                        </tr>
                                                        <!-- Repeat -->
                                                        <tr>
                                                            <th>GOOG <span class="co-name">Google Inc.</span></th>
                                                            <td>597.74</td>
                                                            <td>12:12PM</td>
                                                            <td>14.81 (2.54%)</td>
                                                            <td>582.93</td>
                                                            <td>597.95</td>
                                                            <td>597.73 x 100</td>
                                                            <td>597.91 x 300</td>
                                                            <td>731.10</td>
                                                        </tr>
                                                        <tr>
                                                            <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                                            <td>378.94</td>
                                                            <td>12:22PM</td>
                                                            <td>5.74 (1.54%)</td>
                                                            <td>373.20</td>
                                                            <td>381.02</td>
                                                            <td>378.92 x 300</td>
                                                            <td>378.99 x 100</td>
                                                            <td>505.94</td>
                                                        </tr>
                                                        <tr>
                                                            <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                                            <td>191.55</td>
                                                            <td>12:23PM</td>
                                                            <td>3.16 (1.68%)</td>
                                                            <td>188.39</td>
                                                            <td>194.99</td>
                                                            <td>191.52 x 300</td>
                                                            <td>191.58 x 100</td>
                                                            <td>240.32</td>
                                                        </tr>
                                                        <tr>
                                                            <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                                                            <td>31.15</td>
                                                            <td>12:44PM</td>
                                                            <td>1.41 (4.72%)</td>
                                                            <td>29.74</td>
                                                            <td>30.67</td>
                                                            <td>31.14 x 6500</td>
                                                            <td>31.15 x 3200</td>
                                                            <td>36.11</td>
                                                        </tr>
                                                        <tr>
                                                            <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                                            <td>25.50</td>
                                                            <td>12:27PM</td>
                                                            <td>0.66 (2.67%)</td>
                                                            <td>24.84</td>
                                                            <td>25.37</td>
                                                            <td>25.50 x 71100</td>
                                                            <td>25.51 x 17800</td>
                                                            <td>31.50</td>
                                                        </tr>
                                                        <tr>
                                                            <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                                            <td>18.65</td>
                                                            <td>12:45PM</td>
                                                            <td>0.97 (5.49%)</td>
                                                            <td>17.68</td>
                                                            <td>18.23</td>
                                                            <td>18.65 x 10300</td>
                                                            <td>18.66 x 24000</td>
                                                            <td>21.12</td>
                                                        </tr>
                                                        <tr>
                                                            <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                                            <td>15.81</td>
                                                            <td>12:25PM</td>
                                                            <td>0.11 (0.67%)</td>
                                                            <td>15.70</td>
                                                            <td>15.94</td>
                                                            <td>15.79 x 6100</td>
                                                            <td>15.80 x 17000</td>
                                                            <td>18.16</td>
                                                        </tr>
                                                        <!-- Repeat -->
                                                        <tr>
                                                            <th>GOOG <span class="co-name">Google Inc.</span></th>
                                                            <td>597.74</td>
                                                            <td>12:12PM</td>
                                                            <td>14.81 (2.54%)</td>
                                                            <td>582.93</td>
                                                            <td>597.95</td>
                                                            <td>597.73 x 100</td>
                                                            <td>597.91 x 300</td>
                                                            <td>731.10</td>
                                                        </tr>
                                                        <tr>
                                                            <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                                            <td>378.94</td>
                                                            <td>12:22PM</td>
                                                            <td>5.74 (1.54%)</td>
                                                            <td>373.20</td>
                                                            <td>381.02</td>
                                                            <td>378.92 x 300</td>
                                                            <td>378.99 x 100</td>
                                                            <td>505.94</td>
                                                        </tr>
                                                        <tr>
                                                            <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                                            <td>191.55</td>
                                                            <td>12:23PM</td>
                                                            <td>3.16 (1.68%)</td>
                                                            <td>188.39</td>
                                                            <td>194.99</td>
                                                            <td>191.52 x 300</td>
                                                            <td>191.58 x 100</td>
                                                            <td>240.32</td>
                                                        </tr>
                                                        <tr>
                                                            <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                                                            <td>31.15</td>
                                                            <td>12:44PM</td>
                                                            <td>1.41 (4.72%)</td>
                                                            <td>29.74</td>
                                                            <td>30.67</td>
                                                            <td>31.14 x 6500</td>
                                                            <td>31.15 x 3200</td>
                                                            <td>36.11</td>
                                                        </tr>
                                                        <tr>
                                                            <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                                            <td>25.50</td>
                                                            <td>12:27PM</td>
                                                            <td>0.66 (2.67%)</td>
                                                            <td>24.84</td>
                                                            <td>25.37</td>
                                                            <td>25.50 x 71100</td>
                                                            <td>25.51 x 17800</td>
                                                            <td>31.50</td>
                                                        </tr>
                                                        <tr>
                                                            <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                                            <td>18.65</td>
                                                            <td>12:45PM</td>
                                                            <td>0.97 (5.49%)</td>
                                                            <td>17.68</td>
                                                            <td>18.23</td>
                                                            <td>18.65 x 10300</td>
                                                            <td>18.66 x 24000</td>
                                                            <td>21.12</td>
                                                        </tr>
                                                        <tr>
                                                            <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                                            <td>15.81</td>
                                                            <td>12:25PM</td>
                                                            <td>0.11 (0.67%)</td>
                                                            <td>15.70</td>
                                                            <td>15.94</td>
                                                            <td>15.79 x 6100</td>
                                                            <td>15.80 x 17000</td>
                                                            <td>18.16</td>
                                                        </tr>
                                                        <!-- Repeat -->
                                                        <tr>
                                                            <th>GOOG <span class="co-name">Google Inc.</span></th>
                                                            <td>597.74</td>
                                                            <td>12:12PM</td>
                                                            <td>14.81 (2.54%)</td>
                                                            <td>582.93</td>
                                                            <td>597.95</td>
                                                            <td>597.73 x 100</td>
                                                            <td>597.91 x 300</td>
                                                            <td>731.10</td>
                                                        </tr>
                                                        <tr>
                                                            <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                                            <td>378.94</td>
                                                            <td>12:22PM</td>
                                                            <td>5.74 (1.54%)</td>
                                                            <td>373.20</td>
                                                            <td>381.02</td>
                                                            <td>378.92 x 300</td>
                                                            <td>378.99 x 100</td>
                                                            <td>505.94</td>
                                                        </tr>
                                                        <tr>
                                                            <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                                            <td>191.55</td>
                                                            <td>12:23PM</td>
                                                            <td>3.16 (1.68%)</td>
                                                            <td>188.39</td>
                                                            <td>194.99</td>
                                                            <td>191.52 x 300</td>
                                                            <td>191.58 x 100</td>
                                                            <td>240.32</td>
                                                        </tr>
                                                        <tr>
                                                            <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                                                            <td>31.15</td>
                                                            <td>12:44PM</td>
                                                            <td>1.41 (4.72%)</td>
                                                            <td>29.74</td>
                                                            <td>30.67</td>
                                                            <td>31.14 x 6500</td>
                                                            <td>31.15 x 3200</td>
                                                            <td>36.11</td>
                                                        </tr>
                                                        <tr>
                                                            <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                                            <td>25.50</td>
                                                            <td>12:27PM</td>
                                                            <td>0.66 (2.67%)</td>
                                                            <td>24.84</td>
                                                            <td>25.37</td>
                                                            <td>25.50 x 71100</td>
                                                            <td>25.51 x 17800</td>
                                                            <td>31.50</td>
                                                        </tr>
                                                        <tr>
                                                            <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                                            <td>18.65</td>
                                                            <td>12:45PM</td>
                                                            <td>0.97 (5.49%)</td>
                                                            <td>17.68</td>
                                                            <td>18.23</td>
                                                            <td>18.65 x 10300</td>
                                                            <td>18.66 x 24000</td>
                                                            <td>21.12</td>
                                                        </tr>
                                                        <tr>
                                                            <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                                            <td>15.81</td>
                                                            <td>12:25PM</td>
                                                            <td>0.11 (0.67%)</td>
                                                            <td>15.70</td>
                                                            <td>15.94</td>
                                                            <td>15.79 x 6100</td>
                                                            <td>15.80 x 17000</td>
                                                            <td>18.16</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end .table-responsive -->
        
                                            </div> <!-- end .table-rep-plugin-->
                                        </div> <!-- end .responsive-table-plugin-->
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> &copy; Adminto theme by <a href="">Coderthemes</a> 
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">About Us</a>
                                    <a href="javascript:void(0);">Help</a>
                                    <a href="javascript:void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">

            <div data-simplebar class="h-100">

                <div class="rightbar-title">
                    <a href="javascript:void(0);" class="right-bar-toggle float-end">
                        <i class="mdi mdi-close"></i>
                    </a>
                    <h4 class="font-16 m-0 text-white">Theme Customizer</h4>
                </div>
        
                <!-- Tab panes -->
                <div class="tab-content pt-0">  

                    <div class="tab-pane active" id="settings-tab" role="tabpanel">

                        <div class="p-3">
                            <div class="alert alert-warning" role="alert">
                                <strong>Customize </strong> the overall color scheme, Layout, etc.
                            </div>

                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Color Scheme</h6>
                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="layout-color" value="light"
                                    id="light-mode-check" checked />
                                <label class="form-check-label" for="light-mode-check">Light Mode</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="layout-color" value="dark"
                                    id="dark-mode-check" />
                                <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                            </div>

                            <!-- Width -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Width</h6>
                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="layout-size" value="fluid" id="fluid" checked />
                                <label class="form-check-label" for="fluid-check">Fluid</label>
                            </div>
                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="layout-size" value="boxed" id="boxed" />
                                <label class="form-check-label" for="boxed-check">Boxed</label>
                            </div>

                            <!-- Menu positions -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Menus (Leftsidebar and Topbar) Positon</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-position" value="fixed" id="fixed-check"
                                    checked />
                                <label class="form-check-label" for="fixed-check">Fixed</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-position" value="scrollable"
                                    id="scrollable-check" />
                                <label class="form-check-label" for="scrollable-check">Scrollable</label>
                            </div>

                            <!-- Left Sidebar-->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Color</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-color" value="light" id="light" />
                                <label class="form-check-label" for="light-check">Light</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-color" value="dark" id="dark" checked/>
                                <label class="form-check-label" for="dark-check">Dark</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-color" value="brand" id="brand" />
                                <label class="form-check-label" for="brand-check">Brand</label>
                            </div>

                            <div class="form-check form-switch mb-3">
                                <input type="checkbox" class="form-check-input" name="leftbar-color" value="gradient" id="gradient" />
                                <label class="form-check-label" for="gradient-check">Gradient</label>
                            </div>

                            <!-- size -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Size</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-size" value="default"
                                    id="default-size-check" checked />
                                <label class="form-check-label" for="default-size-check">Default</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-size" value="condensed"
                                    id="condensed-check" />
                                <label class="form-check-label" for="condensed-check">Condensed <small>(Extra Small size)</small></label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-size" value="compact"
                                    id="compact-check" />
                                <label class="form-check-label" for="compact-check">Compact <small>(Small size)</small></label>
                            </div>

                            <!-- User info -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Sidebar User Info</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="sidebar-user" value="true" id="sidebaruser-check" />
                                <label class="form-check-label" for="sidebaruser-check">Enable</label>
                            </div>


                            <!-- Topbar -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Topbar</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="topbar-color" value="dark" id="darktopbar-check"
                                    checked />
                                <label class="form-check-label" for="darktopbar-check">Dark</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="topbar-color" value="light" id="lighttopbar-check" />
                                <label class="form-check-label" for="lighttopbar-check">Light</label>
                            </div>

                            <div class="d-grid mt-4">
                                <button class="btn btn-primary" id="resetBtn">Reset to Default</button>
                                <a href="https://1.envato.market/admintoadmin" class="btn btn-danger mt-3" target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase Now</a>
                            </div>

                        </div>

                    </div>
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

<?php 
  require_once "./template/admin_footer.php"; 
?>