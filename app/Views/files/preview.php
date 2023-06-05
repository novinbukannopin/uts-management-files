<?= $this->extend('layouts/default') ?>
<?= $this->section('title') ?>
<title>Files - MFUTS</title>
<?= $this->endSection() ?>



<?= $this->section('content') ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row invoice-preview">
        <!-- Invoice -->
        <div class="col-xl-9 col-md-8 col-12 mb-md-0 mb-4">
            <div class="card invoice-preview-card">
                <div class="card-body">
                    <div class="d-flex justify-content-between flex-xl-row flex-md-column flex-sm-row flex-column">
                        <div class="mb-xl-0 pb-3">
                            <div class="d-flex svg-illustration align-items-center gap-2 mb-4">
                                <span class="app-brand-logo demo">
                                    <span style="color: var(--bs-primary)">
                                        <svg width="268" height="150" viewBox="0 0 38 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M30.0944 2.22569C29.0511 0.444187 26.7508 -0.172113 24.9566 0.849138C23.1623 1.87039 22.5536 4.14247 23.5969 5.92397L30.5368 17.7743C31.5801 19.5558 33.8804 20.1721 35.6746 19.1509C37.4689 18.1296 38.0776 15.8575 37.0343 14.076L30.0944 2.22569Z" fill="currentColor"></path>
                                            <path d="M30.171 2.22569C29.1277 0.444187 26.8274 -0.172113 25.0332 0.849138C23.2389 1.87039 22.6302 4.14247 23.6735 5.92397L30.6134 17.7743C31.6567 19.5558 33.957 20.1721 35.7512 19.1509C37.5455 18.1296 38.1542 15.8575 37.1109 14.076L30.171 2.22569Z" fill="url(#paint0_linear_2989_100980)" fill-opacity="0.4"></path>
                                            <path d="M22.9676 2.22569C24.0109 0.444187 26.3112 -0.172113 28.1054 0.849138C29.8996 1.87039 30.5084 4.14247 29.4651 5.92397L22.5251 17.7743C21.4818 19.5558 19.1816 20.1721 17.3873 19.1509C15.5931 18.1296 14.9843 15.8575 16.0276 14.076L22.9676 2.22569Z" fill="currentColor"></path>
                                            <path d="M14.9558 2.22569C13.9125 0.444187 11.6122 -0.172113 9.818 0.849138C8.02377 1.87039 7.41502 4.14247 8.45833 5.92397L15.3983 17.7743C16.4416 19.5558 18.7418 20.1721 20.5361 19.1509C22.3303 18.1296 22.9391 15.8575 21.8958 14.076L14.9558 2.22569Z" fill="currentColor"></path>
                                            <path d="M14.9558 2.22569C13.9125 0.444187 11.6122 -0.172113 9.818 0.849138C8.02377 1.87039 7.41502 4.14247 8.45833 5.92397L15.3983 17.7743C16.4416 19.5558 18.7418 20.1721 20.5361 19.1509C22.3303 18.1296 22.9391 15.8575 21.8958 14.076L14.9558 2.22569Z" fill="url(#paint1_linear_2989_100980)" fill-opacity="0.4"></path>
                                            <path d="M7.82901 2.22569C8.87231 0.444187 11.1726 -0.172113 12.9668 0.849138C14.7611 1.87039 15.3698 4.14247 14.3265 5.92397L7.38656 17.7743C6.34325 19.5558 4.04298 20.1721 2.24875 19.1509C0.454514 18.1296 -0.154233 15.8575 0.88907 14.076L7.82901 2.22569Z" fill="currentColor"></path>
                                            <defs>
                                                <linearGradient id="paint0_linear_2989_100980" x1="5.36642" y1="0.849138" x2="10.532" y2="24.104" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-opacity="1"></stop>
                                                    <stop offset="1" stop-opacity="0"></stop>
                                                </linearGradient>
                                                <linearGradient id="paint1_linear_2989_100980" x1="5.19475" y1="0.849139" x2="10.3357" y2="24.1155" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-opacity="1"></stop>
                                                    <stop offset="1" stop-opacity="0"></stop>
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </span>
                                </span>
                                <span class="h4 mb-0 app-brand-text fw-bold">Materialize</span>
                            </div>
                            <p class="mb-1">Office 149, 450 South Brand Brooklyn</p>
                            <p class="mb-1">San Diego County, CA 91905, USA</p>
                            <p class="mb-0">+1 (123) 456 7891, +44 (876) 543 2198</p>
                        </div>
                        <div>
                            <h5>INVOICE #86423</h5>
                            <div class="mb-1">
                                <span>Date Issues:</span>
                                <span>April 25, 2021</span>
                            </div>
                            <div>
                                <span>Date Due:</span>
                                <span>May 25, 2021</span>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-0">

                <div class="table-responsive">
                    <table class="table m-0">
                        <thead class="table-light border-top">
                            <tr>
                                <th>No</th>
                                <th>Files</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $page = isset($_GET['page']) ? $_GET['page'] : 1;
                            $no = 1 + (5 * ($page - 1));
                            foreach ($files as $key => $value) : ?>
                                <?php if ($value) { ?>
                                    <tr>
                                        <td class="text-nowrap"><?= $no++ ?></td>
                                        <td class="text-nowrap"><?= $value['name_files'] ?></td>
                                        <td><?= $value['name_categories'] ?></td>
                                        <td><img src="<?= base_url() ?>uploads/files/<?= $value['file'] ?>" alt="No Image" width="150px"></td>
                                        <td><?= $value['detail_files'] ?></td>
                                    </tr>
                                <?php } ?>
                            <?php endforeach ?>


                        </tbody>
                    </table>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <span class="fw-bold">Note:</span>
                            <span>It was a pleasure working with you and your team. We hope you will keep us in mind for
                                future freelance projects. Thank You!</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Invoice -->

        <!-- Invoice Actions -->
        <div class="col-xl-3 col-md-4 col-12 invoice-actions">
            <div class="card">
                <div class="card-body">
                    <button class="btn btn-primary d-grid w-100 mb-3 waves-effect waves-light" data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
                        <span class="d-flex align-items-center justify-content-center text-nowrap"><i class="mdi mdi-send-outline scaleX-n1-rtl me-1"></i>Send Invoice</span>
                    </button>
                    <button class="btn btn-outline-secondary d-grid w-100 mb-3 waves-effect">Download</button>
                    <a class="btn btn-outline-secondary d-grid w-100 mb-3 waves-effect" href="<?= site_url('files/print') ?>" target="_blank">
                        Print
                    </a>
                    <a href="./app-invoice-edit.html" class="btn btn-outline-secondary d-grid w-100 mb-3 waves-effect">
                        Edit Invoice
                    </a>
                    <button class="btn btn-success d-grid w-100 waves-effect waves-light" data-bs-toggle="offcanvas" data-bs-target="#addPaymentOffcanvas">
                        <span class="d-flex align-items-center justify-content-center text-nowrap"><i class="mdi mdi-currency-usd me-1"></i>Add Payment</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- /Invoice Actions -->
    </div>

    <!-- Offcanvas -->
    <!-- Send Invoice Sidebar -->
    <div class="offcanvas offcanvas-end" id="sendInvoiceOffcanvas" aria-hidden="true">
        <div class="offcanvas-header mb-3">
            <h5 class="offcanvas-title">Send Invoice</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body flex-grow-1">
            <form>
                <div class="form-floating form-floating-outline mb-4">
                    <input type="text" class="form-control" id="invoice-from" value="shelbyComapny@email.com" placeholder="company@email.com">
                    <label for="invoice-from">From</label>
                </div>
                <div class="form-floating form-floating-outline mb-4">
                    <input type="text" class="form-control" id="invoice-to" value="qConsolidated@email.com" placeholder="company@email.com">
                    <label for="invoice-to">To</label>
                </div>
                <div class="form-floating form-floating-outline mb-4">
                    <input type="text" class="form-control" id="invoice-subject" value="Invoice of purchased Admin Templates" placeholder="Invoice regarding goods">
                    <label for="invoice-subject">Subject</label>
                </div>
                <div class="form-floating form-floating-outline mb-4">
                    <textarea class="form-control" name="invoice-message" id="invoice-message" style="height: 190px">Dear Queen Consolidated,
          Thank you for your business, always a pleasure to work with you!
          We have generated a new invoice in the amount of $95.59
          We would appreciate payment of this invoice by 05/11/2021</textarea>
                    <label for="invoice-message">Message</label>
                </div>
                <div class="mb-4">
                    <span class="badge bg-label-primary">
                        <i class="mdi mdi-link-variant mdi-14px me-1"></i>
                        <span class="align-middle">Invoice Attached</span>
                    </span>
                </div>
                <div class="mb-3 d-flex flex-wrap">
                    <button type="button" class="btn btn-primary me-3 waves-effect waves-light" data-bs-dismiss="offcanvas">Send</button>
                    <button type="button" class="btn btn-label-secondary waves-effect" data-bs-dismiss="offcanvas">Cancel</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /Send Invoice Sidebar -->

    <!-- Add Payment Sidebar -->
    <div class="offcanvas offcanvas-end" id="addPaymentOffcanvas" aria-hidden="true">
        <div class="offcanvas-header mb-3">
            <h5 class="offcanvas-title">Add Payment</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body flex-grow-1">
            <div class="d-flex justify-content-between bg-lighter p-2 mb-3">
                <p class="mb-0">Invoice Balance:</p>
                <p class="fw-bold mb-0">$5000.00</p>
            </div>
            <form>
                <div class="input-group input-group-merge mb-4">
                    <span class="input-group-text">$</span>
                    <div class="form-floating form-floating-outline">
                        <input type="text" id="invoiceAmount" name="invoiceAmount" class="form-control invoice-amount" placeholder="100">
                        <label for="invoiceAmount">Payment Amount</label>
                    </div>
                </div>
                <div class="form-floating form-floating-outline mb-4">
                    <input id="payment-date" class="form-control invoice-date flatpickr-input" type="text" readonly="readonly">
                    <label for="payment-date">Payment Date</label>
                </div>
                <div class="form-floating form-floating-outline mb-4">
                    <select class="form-select" id="payment-method">
                        <option value="" selected="" disabled="">Select payment method</option>
                        <option value="Cash">Cash</option>
                        <option value="Bank Transfer">Bank Transfer</option>
                        <option value="Debit Card">Debit Card</option>
                        <option value="Credit Card">Credit Card</option>
                        <option value="Paypal">Paypal</option>
                    </select>
                    <label for="payment-method">Payment Method</label>
                </div>
                <div class="form-floating form-floating-outline mb-4">
                    <textarea class="form-control" id="payment-note" style="height: 62px"></textarea>
                    <label for="payment-note">Internal Payment Note</label>
                </div>
                <div class="mb-3 d-flex flex-wrap">
                    <button type="button" class="btn btn-primary me-3 waves-effect waves-light" data-bs-dismiss="offcanvas">Send</button>
                    <button type="button" class="btn btn-label-secondary waves-effect" data-bs-dismiss="offcanvas">Cancel</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /Add Payment Sidebar -->

    <!-- /Offcanvas -->
</div>
<!-- / Layout wrapper -->
<?= $this->endSection() ?>
<?= $this->section('script') ?>
<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="<?= base_url() ?>assets/vendor/libs/jquery/jquery.js"></script>
<script src="<?= base_url() ?>assets/vendor/libs/popper/popper.js"></script>
<script src="<?= base_url() ?>assets/vendor/js/bootstrap.js"></script>
<script src="<?= base_url() ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="<?= base_url() ?>assets/vendor/libs/node-waves/node-waves.js"></script>

<script src="<?= base_url() ?>assets/vendor/libs/hammer/hammer.js"></script>
<script src="<?= base_url() ?>assets/vendor/libs/i18n/i18n.js"></script>
<script src="<?= base_url() ?>assets/vendor/libs/typeahead-js/typeahead.js"></script>

<script src="<?= base_url() ?>assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="<?= base_url() ?>assets/vendor/libs/moment/moment.js"></script>
<script src="<?= base_url() ?>assets/vendor/libs/flatpickr/flatpickr.js"></script>
<script src="<?= base_url() ?>assets/vendor/libs/cleavejs/cleave.js"></script>
<script src="<?= base_url() ?>assets/vendor/libs/cleavejs/cleave-phone.js"></script>

<!-- Main JS -->
<script src="<?= base_url() ?>assets/js/main.js"></script>

<!-- Page JS -->
<script src="<?= base_url() ?>assets/js/offcanvas-add-payment.js"></script>
<script src="<?= base_url() ?>assets/js/offcanvas-send-invoice.js"></script>

<?= $this->endSection() ?>