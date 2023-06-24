<?php 
    include "navbar.php";
?>
                    <!-- seo fact area start -->
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-12 mt-5 mb-3">
                                <div class="card">
                                    <div class="seo-fact sbg1">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"></i> Halo, ... Mau belajar apa hari ini?</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <!-- seo fact area end -->
                    </div>
                    <!-- sales report area start -->
                    <div class="main-content-inner">
                    <div class="sales-report-area sales-style-two">
                        <div class="row">
                            <div class="col-xl-3 col-ml-3 col-md-6 mt-5">
                                <div class="single-report">
                                    <div class="s-sale-inner pt--30 mb-3">
                                        <div class="s-report-title d-flex justify-content-between">
                                            <h4 class="header-title mb-0">Product Sold</h4>
                                            <select class="custome-select border-0 pr-3">
                                                <option selected="">Last 7 Days</option>
                                                <option value="0">Last 7 Days</option>
                                            </select>
                                        </div>
                                    </div>
                                    <canvas id="coin_sales4" height="100"></canvas>
                                </div>
                            </div>
                            <div class="col-xl-3 col-ml-3 col-md-6 mt-5">
                                <div class="single-report">
                                    <div class="s-sale-inner pt--30 mb-3">
                                        <div class="s-report-title d-flex justify-content-between">
                                            <h4 class="header-title mb-0">Gross Profit</h4>
                                            <select class="custome-select border-0 pr-3">
                                                <option selected="">Last 7 Days</option>
                                                <option value="0">Last 7 Days</option>
                                            </select>
                                        </div>
                                    </div>
                                    <canvas id="coin_sales5" height="100"></canvas>
                                </div>
                            </div>
                            <div class="col-xl-3 col-ml-3 col-md-6  mt-5">
                                <div class="single-report">
                                    <div class="s-sale-inner pt--30 mb-3">
                                        <div class="s-report-title d-flex justify-content-between">
                                            <h4 class="header-title mb-0">Orders</h4>
                                            <select class="custome-select border-0 pr-3">
                                                <option selected="">Last 7 Days</option>
                                                <option value="0">Last 7 Days</option>
                                            </select>
                                        </div>
                                    </div>
                                    <canvas id="coin_sales6" height="100"></canvas>
                                </div>
                            </div>
                            <div class="col-xl-3 col-ml-3 col-md-6 mt-5">
                                <div class="single-report">
                                    <div class="s-sale-inner pt--30 mb-3">
                                        <div class="s-report-title d-flex justify-content-between">
                                            <h4 class="header-title mb-0">New Coustomers</h4>
                                            <select class="custome-select border-0 pr-3">
                                                <option selected="">Last 7 Days</option>
                                                <option value="0">Last 7 Days</option>
                                            </select>
                                        </div>
                                    </div>
                                    <canvas id="coin_sales7" height="100"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- sales report area end -->
                    <!-- order list area start -->
                <div class="card col-md-12">
                    <div class="card-body">
                        <h4 class="header-title">Catatan Kamu</h4>
                        <div class="table-basic">
                            <table class="dbkit-table">
                                <tbody>
                                    <tr class="heading-td">
                                        <td>Product Name</td>
                                        <td>Product Code</td>
                                        <td>Order Status</td>
                                        <td>Client Number</td>
                                        <td>Zip Code</td>
                                        <td>View Order</td>
                                    </tr>
                                    <tr>
                                        <td>Ladis Sunglass</td>
                                        <td>#894750374</td>
                                        <td><span class="pending_dot">Pending</span></td>
                                        <td>01976 74 92 00</td>
                                        <td>9241</td>
                                        <td>View Order</td>
                                    </tr>
                                    <tr>
                                        <td>Ladis Sunglass</td>
                                        <td>#894750374</td>
                                        <td><span class="shipment_dot">Shipment</span></td>
                                        <td>01976 74 92 00</td>
                                        <td>9241</td>
                                        <td>View Order</td>
                                    </tr>
                                    <tr>
                                        <td>Ladis Sunglass</td>
                                        <td>#894750374</td>
                                        <td><span class="pending_dot">Pending</span></td>
                                        <td>01976 74 92 00</td>
                                        <td>9241</td>
                                        <td>View Order</td>
                                    </tr>
                                    <tr>
                                        <td>Ladis Sunglass</td>
                                        <td>#894750374</td>
                                        <td><span class="confirmed _dot">Confirmed </span></td>
                                        <td>01976 74 92 00</td>
                                        <td>9241</td>
                                        <td>View Order</td>
                                    </tr>
                                    <tr>
                                        <td>Ladis Sunglass</td>
                                        <td>#894750374</td>
                                        <td><span class="pending_dot">Pending</span></td>
                                        <td>01976 74 92 00</td>
                                        <td>9241</td>
                                        <td>View Order</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="pagination_area pull-right mt-5">
                            <ul>
                                <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- order list area end -->

<?php
include "footer.php";
?>