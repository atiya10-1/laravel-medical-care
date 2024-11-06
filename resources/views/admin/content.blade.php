<!-- Main wrapper -->
<div class="body-wrapper" style="padding-top: 35px;">
    <div class="container-fluid">
        <!-- Row for layout alignment -->
        <div class="row justify-content-end">
            <div class="col-lg-10 ms-auto">
                <!-- Row 1 -->
                <div class="row justify-content-end">
                    <div class="col-lg-8 d-flex align-items-stretch ms-auto">
                        <div class="card w-100 bg-white"> <!-- Card background kept white -->
                            <div class="card-body">
                                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                                    <div class="mb-3 mb-sm-0">
                                        <h5 class="card-title fw-semibold">Sales Overview</h5>
                                    </div>
                                    <div>
                                        <select class="form-select">
                                            <option value="1">March 2023</option>
                                            <option value="2">April 2023</option>
                                            <option value="3">May 2023</option>
                                            <option value="4">June 2023</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Animated line in dark shade -->
                                <div id="chart" class="text-dark"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 ms-auto">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Yearly Breakup -->
                                <div class="card overflow-hidden bg-white"> <!-- Card background kept white -->
                                    <div class="card-body p-4">
                                        <h5 class="card-title mb-9 fw-semibold">Yearly Breakup</h5>
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                                <h4 class="fw-semibold mb-3">$36,358</h4>
                                                <div class="d-flex align-items-center mb-3">
                                                    <!-- Arrow icon in dark shade -->
                                                    <span class="me-1 rounded-circle bg-light round-20 d-flex align-items-center justify-content-center">
                                                        <i class="ti ti-arrow-up-left text-dark"></i>
                                                    </span>
                                                    <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                                                    <p class="fs-3 mb-0">last year</p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-4">
                                                        <span class="round-8 bg-dark rounded-circle me-2 d-inline-block"></span>
                                                        <span class="fs-2">2023</span>
                                                    </div>
                                                    <div>
                                                        <span class="round-8 bg-light rounded-circle me-2 d-inline-block"></span>
                                                        <span class="fs-2">2023</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="d-flex justify-content-center">
                                                    <div id="breakup" class="text-dark"></div> <!-- Animated line in dark shade -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <!-- Monthly Earnings -->
                                <div class="card bg-white"> <!-- Card background kept white -->
                                    <div class="card-body">
                                        <div class="row align-items-start">
                                            <div class="col-8">
                                                <h5 class="card-title mb-9 fw-semibold">Monthly Earnings</h5>
                                                <h4 class="fw-semibold mb-3">$6,820</h4>
                                                <div class="d-flex align-items-center pb-1">
                                                    <span class="me-2 rounded-circle bg-light round-20 d-flex align-items-center justify-content-center">
                                                        <i class="ti ti-arrow-down-right text-dark"></i> <!-- Arrow icon in dark shade -->
                                                    </span>
                                                    <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                                                    <p class="fs-3 mb-0">last year</p>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="d-flex justify-content-end">
                                                    <div class="bg-light text-dark rounded-circle p-6 d-flex align-items-center justify-content-center">
                                                        <i class="ti ti-currency-dollar fs-6"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="earning" class="text-dark"></div> <!-- Animated line in dark shade -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Row 1 -->
            </div>
        </div>
    </div>
</div>
