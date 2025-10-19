<?php
/**
 * Local variables.
 *
 * @var string $company_name
 */
?>

<div id="header">
    <div id="company-name">
        <a href="https://veterinairesaintdrezery.fr" style="cursor: pointer;">
            <img src="<?= vars('company_logo') ?: base_url('assets/img/logo.png') ?>" alt="logo" id="company-logo">
        </a>

        <a href="https://veterinairesaintdrezery.fr"
            style="cursor: pointer; font-size:24px; font-weight: lighter; color: #fff; text-decoration: none;">
            <?= e($company_name) ?>
        </a>

        <div class="d-flex justify-content-center justify-content-md-start">
            <span class="display-booking-selection">
                <?= lang('service') ?> │ <?= lang('provider') ?>
            </span>
        </div>
    </div>

    <div id="steps">
        <div id="step-1" class="book-step active-step" data-tippy-content="<?= lang('service_and_provider') ?>">
            <strong>1</strong>
        </div>

        <div id="step-2" class="book-step" data-bs-toggle="tooltip"
            data-tippy-content="<?= lang('appointment_date_and_time') ?>">
            <strong>2</strong>
        </div>
        <div id="step-3" class="book-step" data-bs-toggle="tooltip"
            data-tippy-content="<?= lang('customer_information') ?>">
            <strong>3</strong>
        </div>
        <div id="step-4" class="book-step" data-bs-toggle="tooltip"
            data-tippy-content="<?= lang('appointment_confirmation') ?>">
            <strong>4</strong>
        </div>
    </div>
</div>