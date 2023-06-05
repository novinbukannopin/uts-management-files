<?= $this->extend('layouts/default') ?>
<?= $this->section('title') ?>
<title>Print Files - MFUTS</title>
<?= $this->endSection() ?>
<?= $this->section('style') ?>
<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/css/pages/app-invoice-print.css" />
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="invoice-print p-4">
        <div class="d-flex justify-content-between flex-row">
            <div class="mb-4">
                <div class="d-flex svg-illustration align-items-center gap-2 mb-4">
                    <span class="app-brand-logo demo">
                        <span style="color: var(--bs-primary)">
                            <svg width="268" height="150" viewBox="0 0 38 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M30.0944 2.22569C29.0511 0.444187 26.7508 -0.172113 24.9566 0.849138C23.1623 1.87039 22.5536 4.14247 23.5969 5.92397L30.5368 17.7743C31.5801 19.5558 33.8804 20.1721 35.6746 19.1509C37.4689 18.1296 38.0776 15.8575 37.0343 14.076L30.0944 2.22569Z" fill="currentColor" />
                                <path d="M30.171 2.22569C29.1277 0.444187 26.8274 -0.172113 25.0332 0.849138C23.2389 1.87039 22.6302 4.14247 23.6735 5.92397L30.6134 17.7743C31.6567 19.5558 33.957 20.1721 35.7512 19.1509C37.5455 18.1296 38.1542 15.8575 37.1109 14.076L30.171 2.22569Z" fill="url(#paint0_linear_2989_100980)" fill-opacity="0.4" />
                                <path d="M22.9676 2.22569C24.0109 0.444187 26.3112 -0.172113 28.1054 0.849138C29.8996 1.87039 30.5084 4.14247 29.4651 5.92397L22.5251 17.7743C21.4818 19.5558 19.1816 20.1721 17.3873 19.1509C15.5931 18.1296 14.9843 15.8575 16.0276 14.076L22.9676 2.22569Z" fill="currentColor" />
                                <path d="M14.9558 2.22569C13.9125 0.444187 11.6122 -0.172113 9.818 0.849138C8.02377 1.87039 7.41502 4.14247 8.45833 5.92397L15.3983 17.7743C16.4416 19.5558 18.7418 20.1721 20.5361 19.1509C22.3303 18.1296 22.9391 15.8575 21.8958 14.076L14.9558 2.22569Z" fill="currentColor" />
                                <path d="M14.9558 2.22569C13.9125 0.444187 11.6122 -0.172113 9.818 0.849138C8.02377 1.87039 7.41502 4.14247 8.45833 5.92397L15.3983 17.7743C16.4416 19.5558 18.7418 20.1721 20.5361 19.1509C22.3303 18.1296 22.9391 15.8575 21.8958 14.076L14.9558 2.22569Z" fill="url(#paint1_linear_2989_100980)" fill-opacity="0.4" />
                                <path d="M7.82901 2.22569C8.87231 0.444187 11.1726 -0.172113 12.9668 0.849138C14.7611 1.87039 15.3698 4.14247 14.3265 5.92397L7.38656 17.7743C6.34325 19.5558 4.04298 20.1721 2.24875 19.1509C0.454514 18.1296 -0.154233 15.8575 0.88907 14.076L7.82901 2.22569Z" fill="currentColor" />
                                <defs>
                                    <linearGradient id="paint0_linear_2989_100980" x1="5.36642" y1="0.849138" x2="10.532" y2="24.104" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-opacity="1" />
                                        <stop offset="1" stop-opacity="0" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_2989_100980" x1="5.19475" y1="0.849139" x2="10.3357" y2="24.1155" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-opacity="1" />
                                        <stop offset="1" stop-opacity="0" />
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
                <h4 class="fw-semibold">INVOICE #86423</h4>
                <div class="mb-2">
                    <span>Date Issues:</span>
                    <span>April 25, 2021</span>
                </div>
                <div>
                    <span>Date Due:</span>
                    <span>May 25, 2021</span>
                </div>
            </div>
        </div>

        <hr />

        <div class="d-flex justify-content-between mb-4">
            <div class="my-2">
                <h6>Invoice To:</h6>
                <p class="mb-1">Thomas shelby</p>
                <p class="mb-1">Shelby Company Limited</p>
                <p class="mb-1">Small Heath, B10 0HF, UK</p>
                <p class="mb-1">718-986-6062</p>
                <p class="mb-0">peakyFBlinders@gmail.com</p>
            </div>
            <div class="my-2">
                <h6>Bill To:</h6>
                <table>
                    <tbody>
                        <tr>
                            <td class="pe-3">Total Due:</td>
                            <td><strong>$12,110.55</strong></td>
                        </tr>
                        <tr>
                            <td class="pe-3">Bank name:</td>
                            <td>American Bank</td>
                        </tr>
                        <tr>
                            <td class="pe-3">Country:</td>
                            <td>United States</td>
                        </tr>
                        <tr>
                            <td class="pe-3">IBAN:</td>
                            <td>ETD95476213874685</td>
                        </tr>
                        <tr>
                            <td class="pe-3">SWIFT code:</td>
                            <td>BR91905</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table m-0">
                <thead class="table-light border-top">
                    <tr>
                        <th>Item</th>
                        <th>Description</th>
                        <th>Cost</th>
                        <th>Qty</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Vuexy Admin Template</td>
                        <td>HTML Admin Template</td>
                        <td>$32</td>
                        <td>1</td>
                        <td>$32.00</td>
                    </tr>
                    <tr>
                        <td>Frest Admin Template</td>
                        <td>Angular Admin Template</td>
                        <td>$22</td>
                        <td>1</td>
                        <td>$22.00</td>
                    </tr>
                    <tr>
                        <td>Apex Admin Template</td>
                        <td>HTML Admin Template</td>
                        <td>$17</td>
                        <td>2</td>
                        <td>$34.00</td>
                    </tr>
                    <tr>
                        <td>Robust Admin Template</td>
                        <td>React Admin Template</td>
                        <td>$66</td>
                        <td>1</td>
                        <td>$66.00</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="align-top px-4 py-3">
                            <p class="mb-2">
                                <span class="me-1 fw-semibold">Salesperson:</span>
                                <span>Alfie Solomons</span>
                            </p>
                            <span>Thanks for your business</span>
                        </td>
                        <td class="text-end px-4 py-3">
                            <p class="mb-2">Subtotal:</p>
                            <p class="mb-2">Discount:</p>
                            <p class="mb-2">Tax:</p>
                            <p class="mb-0">Total:</p>
                        </td>
                        <td class="px-4 py-3">
                            <p class="fw-semibold mb-2">$154.25</p>
                            <p class="fw-semibold mb-2">$00.00</p>
                            <p class="fw-semibold mb-2">$50.00</p>
                            <p class="fw-semibold mb-0">$204.25</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="row">
            <div class="col-12">
                <span class="fw-bold">Note:</span>
                <span>It was a pleasure working with you and your team. We hope you will keep us in mind for future freelance
                    projects. Thank You!</span>
            </div>
        </div>
    </div>

    <!-- Offcanvas -->
    <!-- Send Invoice Sidebar -->

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



<!-- Main JS -->
<script src="<?= base_url() ?>assets/js/main.js"></script>

<!-- Page JS -->
<script src="<?= base_url() ?>assets/js/app-invoice-print.js"></script>

<?= $this->endSection() ?>