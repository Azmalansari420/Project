<?php

defined('ABSPATH') || exit;

$settings = \MetForm\Core\Admin\Base::instance()->get_settings_option();

include __DIR__ . "/icons.php";



if (!function_exists('mf_dummy_simple_input')) {
    /**
     * Renders a simple input field with a label, placeholder and description
     *
     * @param string $label The label for the input field
     * @param string $placeholder The placeholder text for the input field
     * @param string $description The description for the input field
     */
    function mf_dummy_simple_input($label = 'Label', $placeholder = 'Placeholder', $description = 'Description')
    {
    ?>
        <div class="mf-setting-input-group mf-pro-modal-trigger-input" style="padding: 0 12px">
            <label class="mf-setting-label"><?php echo esc_html($label); ?></label>
            <div class="mf-setting-disabled-input-wrapper">
                <input disabled type="text" class="mf-setting-input attr-form-control mf-setting-disabled-input" placeholder="<?php echo esc_attr($placeholder); ?>">
            </div>
            <p class="description">
                <?php echo esc_html($description); ?>

            </p>
        </div>
    <?php
    }
}

function mf_pro_freemium_badge($isPro = false){
    if($isPro){
        return '<svg width="34" height="18" viewBox="0 0 34 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 3a3 3 0 0 1 3-3h28a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3H3a3 3 0 0 1-3-3z" fill="#E81454"/><path fill-rule="evenodd" clip-rule="evenodd" d="M24.384 13q-.75 0-1.432-.22a3.2 3.2 0 0 1-1.202-.695 3.25 3.25 0 0 1-.815-1.223q-.297-.76-.297-1.807v-.22q0-1.014.297-1.741a3.2 3.2 0 0 1 .816-1.19 3.3 3.3 0 0 1 1.2-.684Q23.635 5 24.385 5q.77 0 1.444.22.672.22 1.19.684.518.462.815 1.19.298.728.298 1.74v.221q0 1.047-.298 1.807-.297.75-.815 1.223a3.2 3.2 0 0 1-1.19.695q-.672.22-1.444.22m-.01-1.653q.45 0 .837-.198.385-.21.617-.694.242-.497.242-1.4v-.22q0-.86-.242-1.334-.232-.474-.617-.66a1.9 1.9 0 0 0-.838-.188q-.43 0-.815.187-.387.187-.628.661-.243.473-.243 1.334v.22q0 .903.242 1.4.243.484.629.694.386.198.815.198m-11.123 1.51V5.143h3.361q.97 0 1.609.32.65.32.98.892.331.573.331 1.367 0 .826-.396 1.421-.387.585-1.168.86l1.785 2.854h-2.204l-1.499-2.645h-.815v2.645zm1.984-4.188h.936q.795 0 1.08-.231.297-.243.298-.716 0-.474-.298-.705-.285-.243-1.08-.243h-.936zM5.87 5.143v7.714h1.983V10.41H9.01q1.079 0 1.774-.31.694-.318 1.024-.914.342-.595.342-1.41 0-.827-.341-1.41-.33-.595-1.025-.904-.694-.32-1.774-.32zM8.79 8.78h-.937V6.774h.936q.76 0 1.07.254.308.253.308.749 0 .495-.309.75-.309.252-1.069.253" fill="#fff"/></svg>';
    }else{
        return '<svg width="74" height="18" viewBox="0 0 74 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 3a3 3 0 0 1 3-3h68a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3H3a3 3 0 0 1-3-3z" fill="#3970FF"/><path d="M5.5 4.722v8.4h2.16v-3.24h3.42v-1.56H7.66V6.378h3.78V4.722z" fill="#fff"/><path fill-rule="evenodd" clip-rule="evenodd" d="M12.637 13.122v-8.4h3.66q1.056 0 1.752.348.708.348 1.068.972t.36 1.488q0 .9-.432 1.548-.42.636-1.272.936l1.944 3.108h-2.4l-1.632-2.88h-.888v2.88zm2.16-4.56h1.02q.864 0 1.176-.252.324-.264.324-.78t-.324-.768q-.312-.264-1.176-.264h-1.02z" fill="#fff"/><path d="M20.98 4.722v8.4h6.12v-1.656h-3.96V9.582h3.6v-1.56h-3.6V6.378h3.96V4.722zm7.5 8.4v-8.4h6.12v1.656h-3.96v1.644h3.6v1.56h-3.6v1.884h3.96v1.656zm7.5-8.4v8.4h2.16V8.31l1.74 3.192h1.2l1.74-3.192v4.812h2.16v-8.4h-2.16l-2.303 4.26-2.329-4.26zm10.796 8.4v-8.4h2.16v8.4zm5.554-.228q.828.384 1.944.384 1.14 0 1.956-.384a2.85 2.85 0 0 0 1.26-1.176q.444-.792.444-1.956v-5.04h-2.16v4.8q0 .96-.324 1.464-.324.492-1.176.492-.828 0-1.164-.492-.336-.504-.336-1.476V4.722h-2.16v5.04q0 1.164.444 1.956.456.78 1.272 1.176m7.17-8.172v8.4h2.16V8.31l1.74 3.192h1.2l1.74-3.192v4.812h2.16v-8.4h-2.16l-2.304 4.26-2.328-4.26z" fill="#fff"/></svg>';
    }
}

if (!function_exists('mf_dummy_checkbox_input')) {
/**
 * Renders a simple checkbox input field with a label and description
 *
 * @param string $label The label for the checkbox field
 * @param string $description The description for the checkbox field
 */
    function mf_dummy_checkbox_input($label = 'Label', $description = 'Description')
    {
    ?>
        <div class="attr-row" style="padding: 0 12px">
            <div class="attr-col-lg-6">
                <div class="mf-setting-input-group mf-pro-modal-trigger-input">
                    <label class="mf-setting-label mf-setting-switch">
                    <div class="mf-setting-disabled-input-wrapper">
                    <input disabled type="checkbox" class="attr-form-control" />
                    <span><?php echo esc_html($label); ?></span>
            </div>
                        
                    </label>
                </div>
            </div>
        </div>
        <p class="description" style="margin-bottom: 24px; padding: 0 12px">
            <?php echo esc_html($description); ?>
        </p>
    <?php
    }
}
?>
<div class="wrap mf-settings-dashboard">
    <div class="attr-row">
        <div class="attr-col-lg-3 attr-col-sm-4 mf-setting-sidebar-column">
            <div class="mf-setting-sidebar">
                <div class="mf_setting_logo">
                    <img src="<?php echo esc_url(plugin_dir_url(__FILE__) . '../images/metform_logo.png'); ?>">
                </div>
                <div class="mf-settings-tab">
                    <ul class="nav-tab-wrapper">
                        <li><a href="#" class="mf-setting-nav-link mf-setting-nav-hidden"></a></li>

                        <li>
                            <a href="#mf-dashboard_options" class="mf-setting-nav-link">
                                <div class="mf-setting-tab-content">
                                    <span class="mf-setting-title"><?php echo esc_html__('Dashboard', 'metform'); ?></span>
                                    <span class="mf-setting-subtitle"><?php echo esc_html__('All dashboard info here', 'metform'); ?></span>
                                </div>
                                <div>
                                    <span class="mf-setting-tab-icon"><?php echo $icons['dashboard'] ?></span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#mf-general_options" class="mf-setting-nav-link">
                                <div class="mf-setting-tab-content">
                                    <span class="mf-setting-title"><?php echo esc_html__('General', 'metform'); ?> <span class="mf-setting-title-freemium"><?php echo mf_pro_freemium_badge(false) ?></span></span> 
                                    <span class="mf-setting-subtitle"><?php echo esc_html__('All General info here', 'metform'); ?></span>
                                </div>
                                <div>
                                <span class="mf-setting-tab-icon"><?php echo $icons['general'] ?></span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#mf-payment_options" class="mf-setting-nav-link">
                                <div class="mf-setting-tab-content">
                                    <span class="mf-setting-title"><?php echo esc_html__('Payment', 'metform'); ?><span class="mf-setting-title-freemium"><?php echo mf_pro_freemium_badge(true) ?></span></span>
                                    <span class="mf-setting-subtitle"><?php echo esc_html__('All payment info here', 'metform'); ?></span>
                                </div>
                                <div>
                                <span class="mf-setting-tab-icon"><?php echo $icons['payment'] ?></span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#mf-newsletter_integration" class="mf-setting-nav-link">
                                <div class="mf-setting-tab-content">
                                    <span class="mf-setting-title"><?php echo esc_html__('Newsletter Integration', 'metform'); ?><span class="mf-setting-title-freemium"><?php echo mf_pro_freemium_badge() ?></span></span>
                                    <span class="mf-setting-subtitle"><?php echo esc_html__('All newsletter integration info here', 'metform'); ?></span>
                                </div>
                                <div>
                                <span class="mf-setting-tab-icon"><?php echo $icons['newsletter_integration'] ?></span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#mf-google_sheet_integration" class="mf-setting-nav-link">
                                <div class="mf-setting-tab-content">
                                    <span class="mf-setting-title"><span><?php echo esc_html__('Google Sheet Integration', 'metform'); ?></span><span class="mf-setting-title-freemium"><?php echo mf_pro_freemium_badge(true) ?></span></span>
                                    <span class="mf-setting-subtitle"><?php echo esc_html__('All sheets info here', 'metform'); ?></span>
                                </div>
                                <div>
                                <span class="mf-setting-tab-icon"><?php echo $icons['google_sheet_integration'] ?></span>
                                </div>
                            </a>
                        </li>
                        <?php do_action('metform_settings_tab'); ?>

                        <li><a href="#" class="mf-setting-nav-link mf-setting-nav-hidden"></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="attr-col-lg-9 attr-col-sm-8 mf-setting-main-content-column">
            <div class="metform-admin-container stuffbox">
                <div class="attr-card-body metform-admin-container--body">
                    <form action="" method="post" class="form-group mf-admin-input-text mf-admin-input-text--metform-license-key">

                        <!-- Dashboard Tab -->
                        <div class="mf-settings-section" id="mf-dashboard_options">
                            <div class="mf-settings-single-section">
                                <div class="mf-setting-header">
                                    <h3 class="mf-settings-single-section--title"><?php esc_html_e('Dashboard', 'metform'); ?></h3>
                                    <button type="submit" name="submit" id="submit" class="mf-admin-setting-btn active"><?php esc_attr_e('Save Changes', 'metform'); ?></button>
                                </div>

                                <div class="mf-setting-dashboard-banner">
                                    <img src="<?php echo esc_url(plugin_dir_url(__FILE__) . '../images/dashboard-banner.jpg'); ?>" class="mf-admin-dashboard-banner">
                                </div>

                                <div class="mf-set-dash-section">
                                    <div class="mf-setting-dash-section-heading">
                                        <h2 class="mf-setting-dash-section-heading--title">
                                            <?php esc_html_e('Top Notch', 'metform'); ?>
                                            <strong><?php esc_html_e('Features', 'metform'); ?></strong>
                                        </h2>
                                        <span class="mf-setting-dash-section-heading--subtitle"><?php esc_html_e('features', 'metform'); ?></span>
                                        <div class="mf-setting-dash-section-heading--content">
                                            <p><?php esc_html_e('Get started by spending some time with the documentation to get familiar with ElementsKit.', 'metform') ?>
                                            </p>
                                        </div>
                                    </div> <!-- ./End Section heading -->

                                    <div class="mf-set-dash-top-notch">
                                        <div class="mf-set-dash-top-notch--item" data-count="01">
                                            <h3 class="mf-set-dash-top-notch--item__title">
                                                <?php esc_html_e('Easy to use', 'metform'); ?></h3>
                                            <p class="mf-set-dash-top-notch--item__desc">
                                                <?php esc_html_e('Get started by spending some time with the documentation to get familiar with MetForm', 'metform'); ?>
                                            </p>
                                        </div>
                                        <div class="mf-set-dash-top-notch--item" data-count="02">
                                            <h3 class="mf-set-dash-top-notch--item__title">
                                                <?php esc_html_e('Moden Typography', 'metform'); ?></h3>
                                            <p class="mf-set-dash-top-notch--item__desc">
                                                <?php esc_html_e('Get started by spending some time with the documentation to get familiar with MetForm', 'metform'); ?>
                                            </p>
                                        </div>
                                        <div class="mf-set-dash-top-notch--item" data-count="03">
                                            <h3 class="mf-set-dash-top-notch--item__title">
                                                <?php esc_html_e('Perfectly Match', 'metform'); ?></h3>
                                            <p class="mf-set-dash-top-notch--item__desc">
                                                <?php esc_html_e('Get started by spending some time with the documentation to get familiar with MetForm', 'metform'); ?>
                                            </p>
                                        </div>
                                        <div class="mf-set-dash-top-notch--item" data-count="04">
                                            <h3 class="mf-set-dash-top-notch--item__title">
                                                <?php esc_html_e('Dynamic Forms', 'metform'); ?></h3>
                                            <p class="mf-set-dash-top-notch--item__desc">
                                                <?php esc_html_e('Get started by spending some time with the documentation to get familiar with MetForm', 'metform'); ?>
                                            </p>
                                        </div>
                                        <div class="mf-set-dash-top-notch--item" data-count="05">
                                            <h3 class="mf-set-dash-top-notch--item__title">
                                                <?php esc_html_e('Create Faster', 'metform'); ?></h3>
                                            <p class="mf-set-dash-top-notch--item__desc">
                                                <?php esc_html_e('Get started by spending some time with the documentation to get familiar with MetForm', 'metform'); ?>
                                            </p>
                                        </div>
                                        <div class="mf-set-dash-top-notch--item" data-count="06">
                                            <h3 class="mf-set-dash-top-notch--item__title">
                                                <?php esc_html_e('Awesome Layout', 'metform'); ?></h3>
                                            <p class="mf-set-dash-top-notch--item__desc">
                                                <?php esc_html_e('Get started by spending some time with the documentation to get familiar with MetForm', 'metform'); ?>
                                            </p>
                                        </div>
                                    </div> <!-- ./End Section heading -->
                                </div> <!-- setting top notch section -->

                                <!-- Dashboard setting free and pro -->
                                <div id="mf-set-dash-free-pro" class="mf-set-dash-section">
                                    <div class="mf-setting-dash-section-heading">
                                        <h2 class="mf-setting-dash-section-heading--title">
                                            <?php esc_html_e('What included with Free &', 'metform'); ?>
                                            <strong><?php esc_html_e('PRO', 'metform'); ?></strong>
                                        </h2>
                                        <span class="mf-setting-dash-section-heading--subtitle"><?php esc_html_e('features', 'metform'); ?></span>
                                        <div class="mf-setting-dash-section-heading--content">
                                            <p><?php esc_html_e('Get started by spending some time with the documentation to get familiar with ElementsKit.', 'metform') ?>
                                            </p>
                                        </div>
                                    </div> <!-- ./End Section heading -->

                                    <div class="mf-set-dash-free-pro-content">
                                        <ul class="attr-nav attr-nav-tabs" id="myTab" role="tablist">
                                            <li class="attr-nav-item attr-active">
                                                <a class="attr-nav-link" data-toggle="tab" href="#mf-set-feature-1"><span class="mf-icon mf mf-document"></span><?php esc_html_e('Easy to use', 'metform'); ?><span class="mf-set-dash-badge"><?php esc_html_e('Pro', 'metform'); ?></span></a>
                                            </li>
                                            <li class="attr-nav-item">
                                                <a class="attr-nav-link" data-toggle="tab" href="#mf-set-feature-2"><span class="mf-icon mf mf-document"></span><?php esc_html_e('Modern Typography', 'metform'); ?><span class="mf-set-dash-badge"><?php esc_html_e('Pro', 'metform'); ?></span></a>
                                            </li>
                                            <li class="attr-nav-item">
                                                <a class="attr-nav-link" id="contact-tab" data-toggle="tab" href="#mf-set-feature-3"><span class="mf-icon mf mf-document"></span><?php esc_html_e('Perfectly Match', 'metform'); ?><span class="mf-set-dash-badge"><?php esc_html_e('Pro', 'metform'); ?></span></a>
                                            </li>
                                        </ul>

                                        <div class="attr-tab-content" id="myTabContent">
                                            <div class="attr-tab-pane attr-fade attr-active attr-in" id="mf-set-feature-1">
                                                <div class="mf-set-dash-tab-img">
                                                    <img src="<?php echo esc_url(plugin_dir_url(__FILE__) . '../images/feature-preview.png'); ?>" class="">
                                                </div>
                                                <p><?php esc_html_e('Get started by spending some time with the documentation to get familiar with MetForm Get started by spending some time with the documentation to get notification in real time.', 'metform'); ?>
                                                </p>
                                                <ul>
                                                    <li><?php esc_html_e('Success Message', 'metform'); ?></li>
                                                    <li><?php esc_html_e('Required Login', 'metform'); ?></li>
                                                    <li><?php esc_html_e('Hide Form After Submission', 'metform'); ?>
                                                    </li>
                                                    <li><?php esc_html_e('Store Entries', 'metform'); ?></li>
                                                </ul>

                                                <a href="#" class="mf-admin-setting-btn medium"><span class="mf mf-icon-checked-fillpng"></span><?php esc_html_e('View Details', 'metform'); ?></a>
                                            </div>
                                            <div class="attr-tab-pane attr-fade" id="mf-set-feature-2">
                                                <div class="mf-set-dash-tab-img">
                                                    <img src="<?php echo esc_url(plugin_dir_url(__FILE__) . '../images/feature-preview.png'); ?>" class="">
                                                </div>
                                                <p><?php esc_html_e('Get started by spending some time with the documentation to get familiar with MetForm Get started by spending some time with the documentation to get notification in real time.', 'metform'); ?>
                                                </p>
                                                <ul>
                                                    <li><?php esc_html_e('Success Message', 'metform'); ?></li>
                                                    <li><?php esc_html_e('Required Login', 'metform'); ?></li>
                                                    <li><?php esc_html_e('Hide Form After Submission', 'metform'); ?>
                                                    </li>
                                                    <li><?php esc_html_e('Store Entries', 'metform'); ?></li>
                                                </ul>
                                            </div>
                                            <div class="attr-tab-pane attr-fade" id="mf-set-feature-3">
                                                <div class="mf-set-dash-tab-img">
                                                    <img src="<?php echo esc_url(plugin_dir_url(__FILE__) . '../images/feature-preview.png'); ?>" class="">
                                                </div>
                                                <p><?php esc_html_e('Get started by spending some time with the documentation to get familiar with MetForm Get started by spending some time with the documentation to get notification in real time.', 'metform'); ?>
                                                </p>
                                                <ul>
                                                    <li><?php esc_html_e('Success Message', 'metform'); ?></li>
                                                    <li><?php esc_html_e('Required Login', 'metform'); ?></li>
                                                    <li><?php esc_html_e('Hide Form After Submission', 'metform'); ?>
                                                    </li>
                                                    <li><?php esc_html_e('Store Entries', 'metform'); ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- Dashboard setting free and pro -->

                                <!-- Dashboard setting faq -->
                                <div id="mf-set-dash-faq" class="mf-set-dash-section">
                                    <div class="mf-setting-dash-section-heading">
                                        <h2 class="mf-setting-dash-section-heading--title">
                                            <?php esc_html_e('General Knowledge Base', 'metform'); ?></h2>
                                        <span class="mf-setting-dash-section-heading--subtitle"><?php esc_html_e('FAQ', 'metform'); ?></span>
                                        <div class="mf-setting-dash-section-heading--content">
                                            <p><?php esc_html_e('Get started by spending some time with the documentation to get familiar with ElementsKit.', 'metform') ?>
                                            </p>
                                        </div>
                                    </div> <!-- ./End Section heading -->

                                    <div class="mf-admin-accordion">
                                        <div class="mf-admin-single-accordion">
                                            <h2 class="mf-admin-single-accordion--heading">
                                                <?php esc_html_e('1. How to create a Invitation Form using MetForm?', 'metform'); ?>
                                            </h2>
                                            <div class="mf-admin-single-accordion--body">
                                                <div class="mf-admin-single-accordion--body__content">
                                                    <p><?php esc_html_e('You will get 20+ complete homepages and total 450+ blocks in our layout library and we’re continuously updating the numbers there.', 'metform') ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mf-admin-single-accordion">
                                            <h2 class="mf-admin-single-accordion--heading">
                                                <?php esc_html_e('2. How to translate language with WPML?', 'metform'); ?>
                                            </h2>
                                            <div class="mf-admin-single-accordion--body">
                                                <div class="mf-admin-single-accordion--body__content">
                                                    <p><?php esc_html_e('You will get 20+ complete homepages and total 450+ blocks in our layout library and we’re continuously updating the numbers there.', 'metform') ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mf-admin-single-accordion">
                                            <h2 class="mf-admin-single-accordion--heading">
                                                <?php esc_html_e('3. How to add custom css in specific section shortcode?', 'metform'); ?>
                                            </h2>
                                            <div class="mf-admin-single-accordion--body">
                                                <div class="mf-admin-single-accordion--body__content">
                                                    <p><?php esc_html_e('You will get 20+ complete homepages and total 450+ blocks in our layout library and we’re continuously updating the numbers there.', 'metform') ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <a href="#" class="mf-admin-setting-btn fatty active"><span class="mf mf-question"></span><?php esc_html_e('View all faq’s', 'metform'); ?></a>
                                </div> <!-- Dashboard setting faq -->

                                <!-- Dashboard setting rate now -->
                                <div class="mf-dash-content">
                                    <div class="ekit-admin-section ekit-admin-dual-layout ekit-admin-documentation-section">
                                        <div class="ekit-admin-left-thumb">
                                            <img src="<?php echo esc_url(plugin_dir_url(__FILE__) . '../images/documentation-thumb.png'); ?>" alt="<?php esc_attr_e('Documentation Thumb', 'metform'); ?>">
                                        </div>
                                        <div class="ekit-admin-right-content">
                                            <div class="ekit-admin-right-content--heading">
                                                <h2>Easy Documentation</h2>
                                                <span class="ekit-admin-right-content--heading__sub-title">Docs</span>
                                            </div>
                                            <p>Get started by spending some time with the documentation to get familiar with MetForm. Build awesome forms for you or your clients with ease.</p>
                                            <div class="ekit-admin-right-content--button">
                                                <a target="_blank" href="https://wpmet.com/doc/metform/" class="attr-btn attr-btn-primary ekit-admin-right-content--link"><span class="mf mf-document"></span>Get started</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Support  -->
                                    <div class="ekit-admin-section ekit-admin-dual-layout ekit-admin-support-section">
                                        <div class="ekit-admin-right-content">
                                            <div class="ekit-admin-right-content--heading">
                                                <h2>Top-notch &amp; Friendly Support</h2>
                                                <span class="ekit-admin-right-content--heading__sub-title">Support</span>
                                            </div>
                                            <p>Stuck somewhere? Feel free to open a ticket for getting Pro support.</p>
                                            <div class="ekit-admin-right-content--button">
                                                <a target="_blank" href="https://wpmet.com/support-ticket-form/" class="attr-btn attr-btn-primary ekit-admin-right-content--link"><span class="mf mf-question"></span>Join support forum</a>
                                            </div>
                                        </div>

                                        <div class="ekit-admin-left-thumb">
                                            <img src="<?php echo esc_url(plugin_dir_url(__FILE__) . '../images/suport-thumb.png'); ?>" alt="<?php esc_attr_e('Support Thumb', 'metform'); ?>">
                                        </div>

                                    </div>
                                    <!-- Support  -->
                                    <!-- Feature Request  -->
                                    <div class="ekit-admin-section ekit-admin-dual-layout ekit-admin-feature-request-section ekit-admin-except-title">
                                        <div class="ekit-admin-left-thumb">
                                            <img src="<?php echo esc_url(plugin_dir_url(__FILE__) . '../images/featured-request-thumb.png'); ?>" alt="<?php esc_attr_e('Feature Request Thumb', 'metform'); ?>">
                                        </div>
                                        <div class="ekit-admin-right-content">

                                            <p>Maybe we’re missing something you can’t live without.</p>
                                            <div class="ekit-admin-right-content--button">
                                                <a target="_blank" href="https://wpmet.com/plugin/metform/roadmaps/#ideas" class="attr-btn attr-btn-primary ekit-admin-right-content--link"><span class="mf mf-icon-checked-fillpng"></span>Request a Feature</a>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Feature Request  -->
                                    <div id="mf-set-dash-rate-now" class="mf-set-dash-section">
                                        <div class="mf-admin-right-content">

                                            <div class="mf-setting-dash-section-heading">
                                                <h2 class="mf-setting-dash-section-heading--title">
                                                    <strong><?php esc_html_e('Satisfied?', 'metform'); ?></strong><br><?php esc_html_e('Don\'t forget to rate MetForm!', 'metform'); ?>
                                                </h2>
                                                <span class="mf-setting-dash-section-heading--subtitle"><?php esc_html_e('review', 'metform'); ?></span>
                                                <div class="mf-setting-dash-section-heading--content">
                                                    <p></p>
                                                </div>
                                            </div> <!-- ./End Section heading -->
                                            <div class="mf-admin-right-content--button">
                                                <a target="_blank" href="https://wordpress.org/support/plugin/metform/reviews/?rate=5#new-post" class="mf-admin-setting-btn mf-admin-setting-rate fatty"><span class="mf mf-star-1"></span><?php esc_html_e('Rate it now', 'metform'); ?></a>
                                            </div>

                                        </div>

                                        <div class="mf-admin-left-thumb">
                                            <img src="<?php echo esc_url(plugin_dir_url(__FILE__) . '../images/rate-now-thumb.png'); ?>" alt="<?php esc_attr_e('Rate Now Thumb', 'metform'); ?>">
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>


                        <!-- General Tab -->
                        <div class="mf-settings-section" id="mf-general_options">
                            <div class="mf-settings-single-section">
                                <div class="mf-setting-header">
                                    <h3 class="mf-settings-single-section--title"><?php esc_html_e('General', 'metform'); ?></h3>
                                    <button type="submit" name="submit" id="submit" class="mf-admin-setting-btn active"><?php esc_attr_e('Save Changes', 'metform'); ?></button>
                                </div>
                                <div class="attr-form-group">
                                    <div class="mf-setting-tab-nav">
                                        <ul class="attr-nav attr-nav-tabs" id="nav-tab" role="attr-tablist">
                                            <li class="attr-active attr-in">
                                                <a class="attr-nav-item attr-nav-link" data-toggle="tab" href="#mf-recaptcha-tab" role="tab"><?php esc_attr_e('reCaptcha', 'metform'); ?></a>
                                            </li>
                                            <li>
                                                <a class="attr-nav-item attr-nav-link" data-toggle="tab" href="#mf-map-tab" role="tab" aria-controls="nav-profile" aria-selected="false"><?php esc_html_e('Map', 'metform'); ?></a>
                                            </li>

                                            <li>
                                                <a class="attr-nav-item attr-nav-link" data-toggle="tab" href="#mf-other-tab" role="tab" aria-controls="nav-profile" aria-selected="false"><?php esc_html_e('Others', 'metform'); ?></a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="attr-tab-content" id="nav-tabContent">
                                        <div class="attr-tab-pane attr-fade attr-active attr-in" id="mf-recaptcha-tab" role="tabpanel" aria-labelledby="nav-home-tab">
                                            <div class="attr-row">
                                                <div class="attr-col-lg-6">
                                                    <div class="mf-setting-input-group">
                                                        <label class="mf-setting-label" for="captcha-method"><?php esc_html_e('Select version:', 'metform'); ?></label>
                                                        <div class="mf-setting-select-container">
                                                            <select name="mf_recaptcha_version" class="mf-setting-input attr-form-control mf-recaptcha-version" id="captcha-method">
                                                                <option <?php echo esc_attr((isset($settings['mf_recaptcha_version']) && ($settings['mf_recaptcha_version'] == 'recaptcha-v2')) ? 'Selected' : ''); ?> value="recaptcha-v2">
                                                                    <?php esc_html_e('reCAPTCHA V2', 'metform'); ?>
                                                                </option>
                                                                <option <?php echo esc_attr((isset($settings['mf_recaptcha_version']) && ($settings['mf_recaptcha_version'] == 'recaptcha-v3')) ? 'Selected' : ''); ?> value="recaptcha-v3">
                                                                    <?php esc_html_e('reCAPTCHA V3', 'metform'); ?>
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <p class="description">
                                                            <?php esc_html_e('Select google reCaptcha version which one want to use.', 'metform'); ?>
                                                        </p>
                                                    </div>

                                                    <div class="mf-recaptcha-settings-wrapper">
                                                        <div class="mf-recaptcha-settings" id="mf-recaptcha-v2">
                                                            <div class="mf-setting-input-group">
                                                                <label class="mf-setting-label"><?php esc_html_e('Site key:', 'metform'); ?>
                                                                </label>
                                                                <input type="text" name="mf_recaptcha_site_key" value="<?php echo esc_attr((isset($settings['mf_recaptcha_site_key'])) ? $settings['mf_recaptcha_site_key'] : ''); ?>" class="mf-setting-input attr-form-control mf-recaptcha-site-key" placeholder="<?php esc_html_e('Insert site key', 'metform'); ?>">
                                                                <p class="description">
                                                                    <?php esc_html_e('Create google reCaptcha site key from reCaptcha admin panel. ', 'metform'); ?><a target="__blank" class="mf-setting-btn-link" href="<?php echo esc_url('https://www.google.com/recaptcha/admin/'); ?>"><?php esc_html_e('Create from here', 'metform'); ?></a>
                                                                </p>
                                                            </div>
                                                            <div class="mf-setting-input-group">
                                                                <label class="mf-setting-label"><?php esc_html_e('Secret key:', 'metform'); ?>
                                                                </label>
                                                                <input type="text" name="mf_recaptcha_secret_key" value="<?php echo esc_attr((isset($settings['mf_recaptcha_secret_key'])) ? $settings['mf_recaptcha_secret_key'] : ''); ?>" class="mf-setting-input attr-form-control mf-recaptcha-secret-key" placeholder="<?php esc_html_e('Insert secret key', 'metform'); ?>">
                                                                <p class="description">
                                                                    <?php esc_html_e('Create google reCaptcha secret key from reCaptcha admin panel. ', 'metform'); ?><a target="__blank" class="mf-setting-btn-link" href="<?php echo esc_url('https://www.google.com/recaptcha/admin/'); ?>"><?php esc_html_e('Create from here', 'metform'); ?></a>
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="mf-recaptcha-settings" id="mf-recaptcha-v3">
                                                            <div class="mf-setting-input-group">
                                                                <label class="mf-setting-label"><?php esc_html_e('Site key:', 'metform'); ?>
                                                                </label>
                                                                <input type="text" name="mf_recaptcha_site_key_v3" value="<?php echo esc_attr((isset($settings['mf_recaptcha_site_key_v3'])) ? $settings['mf_recaptcha_site_key_v3'] : ''); ?>" class="mf-setting-input attr-form-control mf-recaptcha-site-key" placeholder="<?php esc_html_e('Insert site key', 'metform'); ?>">
                                                                <p class="description">
                                                                    <?php esc_html_e('Create google reCaptcha site key from reCaptcha admin panel. ', 'metform'); ?><a target="__blank" class="mf-setting-btn-link" href="<?php echo esc_url('https://www.google.com/recaptcha/admin/'); ?>"><?php esc_html_e('Create from here', 'metform'); ?></a>
                                                                </p>
                                                            </div>
                                                            <div class="mf-setting-input-group">
                                                                <label class="mf-setting-label"><?php esc_html_e('Secret key:', 'metform'); ?>
                                                                </label>
                                                                <input type="text" name="mf_recaptcha_secret_key_v3" value="<?php echo esc_attr((isset($settings['mf_recaptcha_secret_key_v3'])) ? $settings['mf_recaptcha_secret_key_v3'] : ''); ?>" class="mf-setting-input attr-form-control mf-recaptcha-secret-key" placeholder="<?php esc_html_e('Insert secret key', 'metform'); ?>">
                                                                <p class="description">
                                                                    <?php esc_html_e('Create google reCaptcha secret key from reCaptcha admin panel. ', 'metform'); ?><a target="__blank" class="mf-setting-btn-link" href="<?php echo esc_url('https://www.google.com/recaptcha/admin/'); ?>"><?php esc_html_e('Create from here', 'metform'); ?></a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <?php if (class_exists('\MetForm_Pro\Base\Package')) : ?>
                                            <div class="attr-tab-pane attr-fade" id="mf-map-tab" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <div class="attr-row">
                                                    <div class="attr-col-lg-6">
                                                        <div class="mf-setting-input-group">
                                                            <label class="mf-setting-label"><?php esc_html_e('API:', 'metform'); ?>
                                                            </label>
                                                            <input type="text" name="mf_google_map_api_key" value="<?php echo esc_attr((isset($settings['mf_google_map_api_key'])) ? $settings['mf_google_map_api_key'] : ''); ?>" class="mf-setting-input attr-form-control mf-google-map-api-key" placeholder="<?php esc_html_e('Insert map API key', 'metform'); ?>">
                                                            <p class="description">
                                                                <?php esc_html_e('Create google map API key from google developer console. ', 'metform'); ?><a target="__blank" class="mf-setting-btn-link" href="<?php echo esc_url('https://console.cloud.google.com/google/maps-apis/'); ?>"><?php esc_html_e('Create from here', 'metform'); ?></a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php else : ?>
                                            <div class="mf-pro-missing-wrapper attr-tab-pane attr-fade mf-map-tab" id="mf-map-tab" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <div class="mf-pro-missing">
                                                    <div class="attr-row">
                                                        <div class="attr-col-lg-6">
                                                            <?php
                                                                mf_dummy_simple_input('API:', 'Insert map API key', 'Create google map API key from google developer console');
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <?php if (class_exists('\MetForm_Pro\Base\Package')) : ?>
                                            <div class="attr-tab-pane attr-fade mf-other-tab" id="mf-other-tab" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <div class="attr-row">
                                                    <div class="attr-col-lg-4">
                                                        <div class="mf-setting-input-group">
                                                            <label class="mf-setting-label mf-setting-switch">
                                                                <input type="checkbox" name="mf_save_progress" value="1" class="attr-form-control" <?php echo esc_attr((isset($settings['mf_save_progress'])) ? 'Checked' : ''); ?> />
                                                                <span><?php esc_html_e('Save Form Progress ?', 'metform'); ?></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="description">
                                                    <?php esc_html_e('Turn this feature on if you want partial submissions to be saved for a form so that the user can complete the form submission later. ', 'metform'); ?> <br>
                                                    <span class="description-highlight"><?php esc_html_e('Please note ', 'metform') ?></span><?php esc_html_e('that the submissions will be saved for 2 hours, after which the form submissions will be reset. ', 'metform'); ?>
                                                </p>
                                                <div class="attr-row" style="margin-top:18px">
                                                    <div class="attr-col-lg-7">
                                                        <div class="mf-setting-input-group">
                                                            <label class="mf-setting-label mf-setting-switch">
                                                                <input type="checkbox" name="mf_field_name_show" value="1" class="attr-form-control" <?php echo esc_attr((isset($settings['mf_field_name_show'])) ? 'Checked' : ''); ?> />
                                                                <span><?php esc_html_e('Display Input Field Name Alongside Value ', 'metform'); ?></span>

                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="description">
                                                    <?php esc_html_e('Turn this feature on if you want the input field title to be shown along with the value. By default, only the value is displayed. This feature works for widgets like radio buttons, multi-select, select, image select, toggle select, checkboxes, and simple repeater.', 'metform'); ?>
                                                </p>

                                            </div>
                                        <?php else : ?>
                                            <div class="mf-pro-missing-wrapper attr-tab-pane attr-fade mf-other-tab" id="mf-other-tab" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <div class="mf-pro-missing">
                                                    <?php 
                                                        mf_dummy_checkbox_input('Save Form Progress ?', 'Turn this feature on if you want partial submissions to be saved for a form so that the user can complete the form submission later. Please note that the submissions will be saved for 2 hours, after which the form submissions will be reset.');
                                                        mf_dummy_checkbox_input('Display Input Field Name Alongside Value', 'Turn this feature on if you want the input field title to be shown along with the value. By default, only the value is displayed. This feature works for widgets like radio buttons, multi-select, select, image select, toggle select, checkboxes, and simple repeater.');
                                                    ?>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- ./End General Tab -->

                        <!-- Payment Tab -->
                        <div class="mf-settings-section" id="mf-payment_options">
                            <div class="mf-settings-single-section">

                                <div class="mf-setting-header">
                                    <h3 class="mf-settings-single-section--title"><?php esc_html_e('Payment', 'metform'); ?></h3>
                                    <button type="submit" name="submit" id="submit" class="mf-admin-setting-btn active"><?php esc_attr_e('Save Changes', 'metform'); ?></button>
                                </div>

                                <div class="mf-setting-tab-nav">
                                    <ul class="attr-nav attr-nav-tabs" id="nav-tab" role="attr-tablist">
                                        <li class="attr-active attr-in">
                                            <a class="attr-nav-item attr-nav-link" id="mf-paypal-tab-label" data-toggle="tab" href="#mf-paypal-tab" role="tab"><?php esc_attr_e('Paypal', 'metform'); ?></a>
                                        </li>
                                        <li>
                                            <a class="attr-nav-item attr-nav-link" id="mf-stripe-tab-label" data-toggle="tab" href="#attr-stripe-tab" role="tab" aria-controls="nav-profile" aria-selected="false"><?php esc_html_e('Stripe', 'metform'); ?></a>
                                        </li>
                                        <li>
                                            <a class="attr-nav-item attr-nav-link" id="mf-thankyou-tab-label" data-toggle="tab" href="#mf-thankyou-tab" role="tab"><?php esc_attr_e('Thank You Page', 'metform'); ?></a>
                                        </li>
                                        <li>
                                            <a class="attr-nav-item attr-nav-link" id="mf-cancel-tab-label" data-toggle="tab" href="#mf-cancel-tab" role="tab"><?php esc_attr_e('Cancel Page', 'metform'); ?></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="attr-form-group">
                                    <div class="attr-tab-content" id="nav-tabContent">
                                        <?php if (class_exists('\MetForm_Pro\Core\Integrations\Payment\Paypal')) : ?>
                                            <div class="attr-tab-pane attr-fade attr-active attr-in" id="mf-paypal-tab" role="tabpanel" aria-labelledby="mf-paypal-tab-label">
                                                <div class="attr-row">
                                                    <div class="attr-col-lg-6">
                                                        <div class="mf-setting-input-group">
                                                            <label class="mf-setting-label"><?php esc_html_e('Paypal email:', 'metform'); ?></label>
                                                            <input type="email" name="mf_paypal_email" value="<?php echo esc_attr((isset($settings['mf_paypal_email'])) ? $settings['mf_paypal_email'] : ''); ?>" class="mf-setting-input mf-paypal-email attr-form-control" placeholder="<?php esc_html_e('Paypal email', 'metform'); ?>">
                                                            <p class="description">
                                                                <?php esc_html_e('Enter here your paypal email. ', 'metform'); ?><a class="mf-setting-btn-link" target="__blank" href="<?php echo esc_url('https://www.paypal.com/'); ?>"><?php esc_html_e('Create from here', 'metform'); ?></a>
                                                            </p>
                                                        </div>

                                                        <div class="mf-setting-input-group">
                                                            <label class="mf-setting-label"><?php esc_html_e('Paypal token:', 'metform'); ?></label>
                                                            <input type="text" name="mf_paypal_token" value="<?php echo esc_attr((isset($settings['mf_paypal_token'])) ? $settings['mf_paypal_token'] : ''); ?>" class="mf-setting-input mf-paypal-token attr-form-control" placeholder="<?php esc_html_e('Paypal token', 'metform'); ?>">
                                                            <p class="description">
                                                                <?php esc_html_e('Enter here your paypal token. This is optional. ', 'metform'); ?><a class="mf-setting-btn-link" target="__blank" href="<?php echo esc_url('https://www.paypal.com/'); ?>"><?php esc_html_e('Create from here', 'metform'); ?></a>
                                                            </p>
                                                        </div>

                                                        <div class="mf-setting-input-group">
                                                            <label class="mf-setting-label"><?php esc_html_e('Enable sandbox mode:', 'metform'); ?>
                                                                <input type="checkbox" value="1" name="mf_paypal_sandbox" <?php echo esc_attr((isset($settings['mf_paypal_sandbox'])) ? 'Checked' : ''); ?> class="mf-admin-control-input mf-form-modalinput-paypal_sandbox">
                                                                <p class="description">
                                                                    <?php esc_html_e('Enable this for testing payment method. ', 'metform'); ?>
                                                                </p>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php else : ?>
                                            <div class="mf-pro-missing-wrapper attr-tab-pane attr-fade attr-active attr-in" id="mf-paypal-tab" role="tabpanel" aria-labelledby="mf-paypal-tab-label">
                                                <div class="mf-pro-missing">
                                                    <div class="attr-row">
                                                        <div class="attr-col-lg-6">
                                                            <?php
                                                                mf_dummy_simple_input('Paypal email:', 'Paypal email', 'Enter here your paypal email.');
                                                                mf_dummy_simple_input('Paypal token:', 'Paypal token', 'Enter here your paypal token. This is optional.');
                                                                mf_dummy_checkbox_input('Enable sandbox mode:', 'Enable this for testing payment method.');
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <?php if (class_exists('\MetForm_Pro\Core\Integrations\Payment\Stripe')) : ?>
                                            <div class="attr-tab-pane attr-fade" id="attr-stripe-tab" role="tabpanel" aria-labelledby="mf-stripe-tab-label">
                                                <div class="attr-row">
                                                    <div class="attr-col-lg-6">
                                                        <div class="mf-setting-input-group">
                                                            <label for="attr-input-label" class="mf-setting-label attr-input-label"><?php esc_html_e('Image url:', 'metform'); ?></label>
                                                            <input type="text" name="mf_stripe_image_url" value="<?php echo esc_attr((isset($settings['mf_stripe_image_url'])) ? $settings['mf_stripe_image_url'] : ''); ?>" class="mf-setting-input mf-stripe-image-url attr-form-control" placeholder="<?php esc_html_e('Stripe image url', 'metform'); ?>">
                                                            <p class="description">
                                                                <?php esc_html_e('Enter here your stripe image url. This image will show on stripe payment pop up modal. ', 'metform'); ?>
                                                            </p>
                                                        </div>

                                                        <div class="mf-setting-input-group">
                                                            <label for="attr-input-label" class="mf-setting-label attr-input-label"><?php esc_html_e('Live publishiable key:', 'metform'); ?></label>
                                                            <input type="text" name="mf_stripe_live_publishiable_key" value="<?php echo esc_attr((isset($settings['mf_stripe_live_publishiable_key'])) ? $settings['mf_stripe_live_publishiable_key'] : ''); ?>" class="mf-setting-input mf-stripe-live-publishiable-key attr-form-control" placeholder="<?php esc_html_e('Stripe live publishiable key', 'metform'); ?>">
                                                            <p class="description">
                                                                <?php esc_html_e('Enter here your stripe live publishiable key. ', 'metform'); ?><a class="mf-setting-btn-link" target="__blank" href="<?php echo esc_url('https://stripe.com/'); ?>"><?php esc_html_e('Create from here', 'metform'); ?></a>
                                                            </p>
                                                        </div>

                                                        <div class="mf-setting-input-group">
                                                            <label for="attr-input-label" class="mf-setting-label attr-input-label"><?php esc_html_e('Live secret key:', 'metform'); ?></label>
                                                            <input type="text" name="mf_stripe_live_secret_key" value="<?php echo esc_attr((isset($settings['mf_stripe_live_secret_key'])) ? $settings['mf_stripe_live_secret_key'] : ''); ?>" class="mf-setting-input mf-stripe-live-secret-key attr-form-control" placeholder="<?php esc_html_e('Stripe live secret key', 'metform'); ?>">
                                                            <p class="description">
                                                                <?php esc_html_e('Enter here your stripe live secret key. ', 'metform'); ?><a target="__blank" class="mf-setting-btn-link" href="<?php echo esc_url('https://stripe.com/'); ?>"><?php esc_html_e('Create from here', 'metform'); ?></a>
                                                            </p>
                                                        </div>

                                                        <div class="mf-setting-input-group">
                                                            <label class="mf-setting-label attr-input-label">
                                                                <?php esc_html_e('Enable sandbox mode:', 'metform'); ?>
                                                                <input type="checkbox" value="1" name="mf_stripe_sandbox" <?php echo esc_attr((isset($settings['mf_stripe_sandbox'])) ? 'Checked' : ''); ?> class="mf-admin-control-input mf-form-modalinput-stripe_sandbox">
                                                                <p class="description">
                                                                    <?php esc_html_e('Enable this for testing your payment system. ', 'metform'); ?>
                                                                </p>
                                                            </label>
                                                        </div>

                                                        <div class="mf-form-modalinput-stripe_sandbox_keys">
                                                            <div class="mf-setting-input-group">
                                                                <label for="attr-input-label" class="mf-setting-label attr-input-label"><?php esc_html_e('Test publishiable key:', 'metform'); ?></label>
                                                                <input type="text" name="mf_stripe_test_publishiable_key" value="<?php echo esc_attr((isset($settings['mf_stripe_test_publishiable_key'])) ? $settings['mf_stripe_test_publishiable_key'] : ''); ?>" class="mf-setting-input mf-stripe-test-publishiable-key attr-form-control" placeholder="<?php esc_html_e('Stripe test publishiable key', 'metform'); ?>">
                                                                <p class="description">
                                                                    <?php esc_html_e('Enter here your test publishiable key. ', 'metform'); ?><a class="mf-setting-btn-link" target="__blank" href="<?php echo esc_url('https://stripe.com/'); ?>"><?php esc_html_e('Create from here', 'metform'); ?></a>
                                                                </p>
                                                            </div>
                                                            <div class="mf-setting-input-group">
                                                                <label for="attr-input-label" class="mf-setting-label attr-input-label"><?php esc_html_e('Test secret key:', 'metform'); ?></label>
                                                                <input type="text" name="mf_stripe_test_secret_key" value="<?php echo esc_attr((isset($settings['mf_stripe_test_secret_key'])) ? $settings['mf_stripe_test_secret_key'] : ''); ?>" class="mf-setting-input mf-stripe-test-secret-key attr-form-control" placeholder="<?php esc_html_e('Stripe test secret key', 'metform'); ?>">
                                                                <p class="description">
                                                                    <?php esc_html_e('Enter here your test secret key. ', 'metform'); ?><a target="__blank" class="mf-setting-btn-link" href="<?php echo esc_url('https://stripe.com/'); ?>"><?php esc_html_e('Create from here', 'metform'); ?></a>
                                                                </p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        <?php else : ?>
                                            <div class="mf-pro-missing-wrapper attr-tab-pane attr-fade" id="attr-stripe-tab" role="tabpanel" aria-labelledby="mf-stripe-tab-label">
                                                <div class="mf-pro-missing">
                                                    <div class="attr-row">
                                                        <div class="attr-col-lg-6">
                                                            <?php
                                                                mf_dummy_simple_input('Image url:', 'Stripe image url', 'Enter here your stripe image url. This image will show on stripe payment pop up modal.');
                                                                mf_dummy_simple_input('LIve publishable key:', 'Stripe test publishable key', 'Enter here your publishable key.');
                                                                mf_dummy_simple_input('Live secret key:', 'Stripe live secret key', 'Enter here your stripe live secret key.');
                                                                mf_dummy_checkbox_input('Enable sandbox mode:', 'Enable this for testing your payment system.');
                                                                mf_dummy_simple_input('Test publishable key:', 'Stripe test publishable key', 'Enter here your test publishable key.');
                                                                mf_dummy_simple_input('Test secret key:', 'Stripe test secret key', 'Enter here your test secret key.');
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <!-- Thank you page section -->
                                        <?php if (class_exists('\MetForm_Pro\Base\Package')) : ?>
                                            <div class="attr-tab-pane attr-fade" id="mf-thankyou-tab" role="tabpanel" aria-labelledby="mf-thankyou-tab-label">
                                                <div class="attr-row">
                                                    <div class="attr-col-lg-6">
                                                        <div class="mf-setting-input-group">
                                                            <h3><?php esc_html_e('Select Thank You Page :', 'metform'); ?></h3>
                                                            <?php $page_ids = get_all_page_ids(); ?>
                                                            <select name="mf_thank_you_page" class="mf-setting-input attr-form-control">
                                                                <option value=""><?php esc_html_e('Select a page', 'metform'); ?></option>
                                                                <?php foreach ($page_ids as $page) : ?>
                                                                    <option <?php
                                                                            if (isset($settings['mf_thank_you_page'])) {
                                                                                if ($settings['mf_thank_you_page'] == $page) {
                                                                                    echo esc_attr('selected');
                                                                                }
                                                                            }
                                                                            ?> value="<?php echo esc_attr($page); ?>"> <?php echo esc_html(get_the_title($page)); ?>
                                                                    <?php endforeach; ?>
                                                            </select>
                                                            <br><br>
                                                            <p><?php echo wp_kses_post(__('Handle successfull payment redirection page. Learn more about Thank you page', 'metform') . '<a href="https://help.wpmet.com/docs/thank-you-page/" target="_blank">' . __('Here', 'metform') . '</a>'); ?></p>
                                                            <a class="mf-setting-btn-link" href="<?php echo esc_url(get_admin_url() . 'post-new.php?post_type=page'); ?>"><?php esc_html_e('Create Thank You Page', 'metform'); ?></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php else : ?>
                                            <div class="mf-pro-missing-wrapper attr-tab-pane attr-fade" id="mf-thankyou-tab" role="tabpanel" aria-labelledby="mf-thankyou-tab-label">
                                                <div class="mf-pro-missing">
                                                    <div class="attr-row">
                                                        <div class="attr-col-lg-6">
                                                            <?php
                                                                mf_dummy_simple_input('Select Thank You Page :', 'Select a page', 'Handle successfull payment redirection page. Learn more about Thank you page.');
                                                            ?> 
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <!-- Cancel page section -->
                                        <?php if (class_exists('\MetForm_Pro\Base\Package')) : ?>
                                            <div class="attr-tab-pane attr-fade" id="mf-cancel-tab" role="tabpanel" aria-labelledby="mf-cancel-tab-label">
                                                <div class="attr-row">
                                                    <div class="attr-col-lg-6">
                                                        <div class="mf-setting-input-group">
                                                            <h3><?php esc_html_e('Select Cancel Page :', 'metform'); ?></h3>
                                                            <?php $page_ids = get_all_page_ids(); ?>
                                                            <select name="mf_cancel_page" class="mf-setting-input attr-form-control">
                                                                <option value=""><?php esc_html_e('Select a page', 'metform'); ?></option>
                                                                <?php foreach ($page_ids as $page) :
                                                                ?>
                                                                    <option <?php
                                                                            if (isset($settings['mf_cancel_page'])) {
                                                                                if ($settings['mf_cancel_page'] == $page) {
                                                                                    echo esc_attr('selected');
                                                                                }
                                                                            }
                                                                            ?> value="<?php echo esc_attr($page); ?>"> <?php echo esc_html(get_the_title($page)); ?>
                                                                    <?php endforeach; ?>
                                                            </select>
                                                            <br><br>
                                                            <p><?php esc_html_e('Handle canceled payment redirection page. Learn more about cancel page.', 'metform'); ?></p>
                                                            <a class="mf-setting-btn-link" href="<?php echo esc_url(get_admin_url() . 'post-new.php?post_type=page'); ?>"><?php esc_html_e('Create Cancel Page', 'metform'); ?></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php else : ?>
                                            <div class="mf-pro-missing-wrapper attr-tab-pane attr-fade" id="mf-cancel-tab" role="tabpanel" aria-labelledby="mf-cancel-tab-label">
                                                <div class="mf-pro-missing">
                                                    <div class="attr-row">
                                                        <div class="attr-col-lg-6">
                                                            <?php
                                                                mf_dummy_simple_input('Select Cancel Page :', 'Select a page', 'Handle canceled payment redirection page. Learn more about cancel page.');
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- ./End Payment Tab -->

                        <!-- newsletter Integration Tab -->
                        <div class="mf-settings-section" id="mf-newsletter_integration">
                            <div class="mf-settings-single-section">
                                <?php if (class_exists('\MetForm\Core\Integrations\Mail_Chimp')) : ?>
                                    <div class="mf-setting-header">
                                        <h3 class="mf-settings-single-section--title"><?php esc_html_e('Newsletter Integration', 'metform'); ?>
                                        </h3>
                                        <button type="submit" name="submit" id="submit" class="mf-admin-setting-btn active"><?php esc_attr_e('Save Changes', 'metform'); ?></button>
                                    </div>


                                    <div class="mf-setting-tab-nav">
                                        <ul class="attr-nav attr-nav-tabs" id="nav-tab" role="attr-tablist">
                                            <li class="attr-active attr-in">
                                                <a class="attr-nav-item attr-nav-link" data-toggle="tab" href="#mf-mailchimp-tab" role="tab"><?php esc_attr_e('Mailchimp', 'metform'); ?></a>
                                            </li>

                                            <li>
                                                <a class="attr-nav-item attr-nav-link" data-toggle="tab" href="#attr-aweber-tab" role="tab" aria-controls="nav-profile" aria-selected="false"><?php esc_html_e('AWeber', 'metform'); ?></a>
                                            </li>

                                            <li>
                                                <a class="attr-nav-item attr-nav-link" data-toggle="tab" href="#attr-activeCampaign-tab" role="tab" aria-controls="nav-contact" aria-selected="false"><?php esc_html_e('ActiveCampaign', 'metform'); ?></a>
                                            </li>

                                            <li>
                                                <a class="attr-nav-item attr-nav-link" data-toggle="tab" href="#attr-getresponse-tab" role="tab" aria-controls="nav-contact" aria-selected="false"><?php esc_html_e('Get Response', 'metform'); ?></a>
                                            </li>

                                            <li>
                                                <a class="attr-nav-item attr-nav-link" data-toggle="tab" href="#attr-ckit-tab" role="tab" aria-controls="nav-profile" aria-selected="false"><?php esc_html_e('ConvertKit', 'metform'); ?></a>
                                            </li>

                                            <?php if (did_action('xpd_metform_pro/plugin_loaded')) : ?>
                                                <?php do_action('get_pro_settings_tab_for_newsletter_integration'); ?>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                    <div class="attr-form-group">
                                        <div class="attr-tab-content" id="nav-tabContent">
                                            <div class="attr-tab-pane attr-fade attr-active attr-in" id="mf-mailchimp-tab" role="tabpanel" aria-labelledby="nav-home-tab">

                                                <div class="attr-row">
                                                    <div class="attr-col-lg-6">
                                                        <div class="mf-setting-input-group">
                                                            <label for="attr-input-label" class="mf-setting-label mf-setting-label attr-input-label"><?php esc_html_e('API Key:', 'metform'); ?></label>
                                                            <input type="text" name="mf_mailchimp_api_key" value="<?php echo esc_attr((isset($settings['mf_mailchimp_api_key'])) ? $settings['mf_mailchimp_api_key'] : ''); ?>" class="mf-setting-input mf-mailchimp-api-key attr-form-control" placeholder="<?php esc_html_e('Mailchimp API key', 'metform'); ?>">
                                                            <p class="description">
                                                                <?php esc_html_e('Enter here your Mailchimp API key. ', 'metform'); ?><a target="__blank" class="mf-setting-btn-link" href="<?php echo esc_url('https://admin.mailchimp.com/'); ?>"><?php esc_html_e('Get API.', 'metform'); ?></a>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="attr-col-lg-6">
                                                        <div class="mf-setting-input-desc">
                                                            <div class="mf-setting-input-desc-data">
                                                                <h2 class="mf-setting-input-desc--title">
                                                                    <?php esc_html_e('How To', 'metform') ?></h2>
                                                                <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.', 'metform') ?>
                                                                </p>
                                                                <ol>
                                                                    <li><?php esc_html_e('Item 1', 'metform') ?></li>
                                                                    <li><?php esc_html_e('Item 2', 'metform') ?></li>
                                                                    <li><?php esc_html_e('Item 3', 'metform') ?></li>
                                                                </ol>
                                                            </div>
                                                            <a href="https://help.wpmet.com/docs-cat/metform/" class="mf-setting-btn-link" target="_blank"><?php esc_html_e('View Documentation', 'metform'); ?></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php if (class_exists('\MetForm_Pro\Base\Package')) : ?>
                                                <div class="attr-tab-pane attr-fade" id="attr-aweber-tab" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                    <div class="attr-row">
                                                        <div class="attr-col-lg-6">



                                                            <div class="mf-setting-input-group">
                                                                <label for="attr-input-label" class="mf-setting-label mf-setting-label attr-input-label"><?php esc_html_e('Redirect url:', 'metform'); ?></label>
                                                                <p class="description">
                                                                    <?php echo esc_url(get_admin_url() . 'admin.php?page=metform-menu-settings'); ?>
                                                                </p>
                                                            </div>

                                                            <?php if (empty($code)) : ?>
                                                                <div class="mf-setting-input-group">
                                                                    <p class="description">
                                                                        <a href="https://api.wpmet.com/public/aweber-auth/auth.php?redirect_url=<?php echo esc_url(get_admin_url() . 'admin.php?page=metform-menu-settings' . "&state=" . wp_create_nonce() . "&section_id=mf-newsletter_integration"); ?>" class="button-primary mf-setting-btn"> <?php esc_html_e('Connect AWeber', 'metform'); ?> </a>
                                                                    </p>
                                                                </div>
                                                            <?php else : ?>
                                                                <div class="mf-setting-input-group">
                                                                    <p class="description">
                                                                        <a href="https://api.wpmet.com/public/aweber-auth/auth.php?redirect_url=<?php echo esc_url(get_admin_url() . 'admin.php?page=metform-menu-settings' . "&state=" . wp_create_nonce() . "&section_id=mf-newsletter_integration"); ?>" class="button-primary mf-setting-btn"> <?php esc_html_e('Reonnect AWeber', 'metform'); ?> </a>
                                                                    </p>
                                                                </div>

                                                            <?php endif; ?>

                                                        </div>
                                                        <div class="attr-col-lg-6">
                                                            <div class="mf-setting-input-desc">
                                                                <div class="mf-setting-input-desc-data">
                                                                    <h2 class="mf-setting-input-desc--title">
                                                                        <?php esc_html_e('How To', 'metform') ?></h2>
                                                                    <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.', 'metform') ?>
                                                                    </p>
                                                                    <ol>
                                                                        <li><?php esc_html_e('Item 1', 'metform') ?></li>
                                                                        <li><?php esc_html_e('Item 2', 'metform') ?></li>
                                                                        <li><?php esc_html_e('Item 3', 'metform') ?></li>
                                                                    </ol>
                                                                </div>
                                                                <a href="https://help.wpmet.com/docs-cat/metform/" class="mf-setting-btn-link" target="_blank"><?php esc_html_e('View Documentation', 'metform'); ?></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            <?php else : ?>
                                                <div class="mf-pro-missing-wrapper attr-tab-pane attr-fade" id="attr-aweber-tab" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                    <div class="mf-pro-missing">
                                                        <div class="attr-row">
                                                            <div class="attr-col-lg-6">
                                                                <div class="mf-setting-input-group">
                                                                    <label for="attr-input-label" class="mf-setting-label mf-setting-label attr-input-label"><?php esc_html_e('Redirect url:', 'metform'); ?></label>
                                                                    <p class="description">
                                                                        *************************
                                                                    </p>
                                                                </div>
                                                                <div class="mf-setting-input-group mf-pro-modal-trigger-input">
                                                                    <p class="description">
                                                                        <a href="#" class="button-primary mf-setting-btn"> <?php esc_html_e('Connect AWeber', 'metform'); ?> </a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>

                                            <?php if (class_exists('\MetForm_Pro\Base\Package')) : ?>
                                                <div class="attr-tab-pane attr-fade" id="attr-ckit-tab" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                    <div class="attr-row">
                                                        <div class="attr-col-lg-6">
                                                            <div class="mf-setting-input-group">
                                                                <label for="attr-input-label" class="mf-setting-label mf-setting-label attr-input-label"><?php esc_html_e('API Key:', 'metform'); ?></label>
                                                                <input type="text" name="mf_ckit_api_key" value="<?php echo esc_attr((isset($settings['mf_ckit_api_key'])) ? $settings['mf_ckit_api_key'] : ''); ?>" class="mf-setting-input mf-mailchimp-api-key attr-form-control" placeholder="<?php esc_html_e('ConvertKit API key', 'metform'); ?>">
                                                                <p class="description">
                                                                    <?php esc_html_e('Enter here your ConvertKit API key. ', 'metform'); ?><a target="__blank" class="mf-setting-btn-link" href="<?php echo esc_url('https://app.convertkit.com/users/login'); ?>"><?php esc_html_e('Get API.', 'metform'); ?></a>
                                                                </p>
                                                            </div>


                                                            <div class="mf-setting-input-group">
                                                                <label for="attr-input-label" class="mf-setting-label mf-setting-label attr-input-label"><?php esc_html_e('Secret Key:', 'metform'); ?></label>
                                                                <input type="text" name="mf_ckit_sec_key" value="<?php echo esc_attr((isset($settings['mf_ckit_sec_key'])) ? $settings['mf_ckit_sec_key'] : ''); ?>" class="mf-setting-input mf-mailchimp-api-key attr-form-control" placeholder="<?php esc_html_e('ConvertKit API key', 'metform'); ?>">
                                                                <p class="description">
                                                                    <?php esc_html_e('Enter here your ConvertKit API key. ', 'metform'); ?><a target="__blank" class="mf-setting-btn-link" href="<?php echo esc_url('https://app.convertkit.com/users/login'); ?>"><?php esc_html_e('Get API.', 'metform'); ?></a>
                                                                </p>
                                                            </div>


                                                        </div>
                                                        <div class="attr-col-lg-6">
                                                            <div class="mf-setting-input-desc">
                                                                <div class="mf-setting-input-desc-data">
                                                                    <h2 class="mf-setting-input-desc--title">
                                                                        <?php esc_html_e('How To', 'metform') ?></h2>
                                                                    <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.', 'metform') ?>
                                                                    </p>
                                                                    <ol>
                                                                        <li><?php esc_html_e('Item 1', 'metform') ?></li>
                                                                        <li><?php esc_html_e('Item 2', 'metform') ?></li>
                                                                        <li><?php esc_html_e('Item 3', 'metform') ?></li>
                                                                    </ol>
                                                                </div>
                                                                <a href="https://help.wpmet.com/docs-cat/metform/" class="mf-setting-btn-link" target="_blank"><?php esc_html_e('View Documentation', 'metform'); ?></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php do_action('get_pro_settings_tab_content_for_newsletter_integration', $settings); ?>

                                            <?php else : ?>
                                                <div class="mf-pro-missing-wrapper attr-tab-pane attr-fade" id="attr-ckit-tab" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                    <div class="mf-pro-missing">
                                                        <div class="attr-row">
                                                            <div class="attr-col-lg-6">
                                                                <?php 
                                                                    mf_dummy_simple_input('API Key:', 'ConvertKit API key', 'Enter here your ConvertKit API key.');
                                                                    mf_dummy_simple_input('Secret Key:', 'ConvertKit API key', 'Enter here your ConvertKit API key.');
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>

                                            <?php if (class_exists('\MetForm_Pro\Base\Package')) : ?>
                                                <div class="attr-tab-pane  attr-fade" id="attr-activeCampaign-tab" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                    <div class="attr-row">
                                                        <?php if (class_exists('\MetForm_Pro\Core\Integrations\Email\Activecampaign\Active_Campaign')) : ?>
                                                            <div class="attr-col-lg-6">
                                                                <div class="mf-setting-input-group">
                                                                    <label for="attr-input-label" class="mf-setting-label mf-setting-label attr-input-label"><?php esc_html_e('API URL:', 'metform'); ?></label>
                                                                    <input type="text" name="mf_active_campaign_url" value="<?php echo esc_attr((isset($settings['mf_active_campaign_url'])) ? $settings['mf_active_campaign_url'] : ''); ?>" class="mf-setting-input mf-mailchimp-api-key attr-form-control" placeholder="<?php esc_html_e('ActiveCampaign API URL', 'metform'); ?>">
                                                                    <p class="description">
                                                                        <?php esc_html_e('Enter here your ActiveCampaign API key. ', 'metform'); ?><a target="__blank" class="mf-setting-btn-link" href="<?php echo esc_url('https://www.activecampaign.com/'); ?>"><?php esc_html_e('Get API.', 'metform'); ?></a>
                                                                    </p>
                                                                </div>

                                                                <div class="mf-setting-input-group">
                                                                    <label for="attr-input-label" class="mf-setting-label mf-setting-label attr-input-label"><?php esc_html_e('API Key:', 'metform'); ?></label>
                                                                    <input type="text" name="mf_active_campaign_api_key" value="<?php echo esc_attr((isset($settings['mf_active_campaign_api_key'])) ? $settings['mf_active_campaign_api_key'] : ''); ?>" class="mf-setting-input mf-mailchimp-api-key attr-form-control" placeholder="<?php esc_html_e('ActiveCampaign API key', 'metform'); ?>">
                                                                    <p class="description">
                                                                        <?php esc_html_e('Enter here your ActiveCampaign API key. ', 'metform'); ?><a target="__blank" class="mf-setting-btn-link" href="<?php echo esc_url('https://www.activecampaign.com/'); ?>"><?php esc_html_e('Get API.', 'metform'); ?></a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="attr-col-lg-6">
                                                                <div class="mf-setting-input-desc">
                                                                    <div class="mf-setting-input-desc-data">
                                                                        <h2 class="mf-setting-input-desc--title">
                                                                            <?php esc_html_e('How To', 'metform') ?></h2>
                                                                        <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.', 'metform') ?>
                                                                        </p>
                                                                        <ol>
                                                                            <li><?php esc_html_e('Item 1', 'metform') ?></li>
                                                                            <li><?php esc_html_e('Item 2', 'metform') ?></li>
                                                                            <li><?php esc_html_e('Item 3', 'metform') ?></li>
                                                                        </ol>
                                                                    </div>
                                                                    <a href="https://help.wpmet.com/docs-cat/metform/" class="mf-setting-btn-link" target="_blank"><?php esc_html_e('View Documentation', 'metform'); ?></a>
                                                                </div>
                                                            </div>

                                                        <?php else : ?>
                                                            <div class="attr-col-lg-6">
                                                                <div class="mf-setting-input-group">
                                                                    <label for="attr-input-label" class="mf-setting-label mf-setting-label attr-input-label"><?php esc_html_e('API Key:', 'metform'); ?></label>
                                                                    <input type="text" disabled name="mf_activecampaign_api_key_field" value="" class="mf-setting-input mf-mailchimp-api-key attr-form-control" placeholder="<?php esc_html_e('ActiveCampaign API key', 'metform'); ?>">
                                                                    <p class="description">
                                                                        <?php esc_html_e('Enter here your ActiveCampaign API key. ', 'metform'); ?><a target="__blank" class="mf-setting-btn-link" href="<?php echo esc_url('https://admin.mailchimp.com/'); ?>"><?php esc_html_e('Get API.', 'metform'); ?></a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="attr-col-lg-6">
                                                                <div class="mf-setting-input-desc">
                                                                    <div class="mf-setting-input-desc-data">
                                                                        <h2 class="mf-setting-input-desc--title">
                                                                            <?php esc_html_e('How To', 'metform') ?></h2>
                                                                        <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.', 'metform') ?>
                                                                        </p>
                                                                        <ol>
                                                                            <li><?php esc_html_e('Item 1', 'metform') ?></li>
                                                                            <li><?php esc_html_e('Item 2', 'metform') ?></li>
                                                                            <li><?php esc_html_e('Item 3', 'metform') ?></li>
                                                                        </ol>
                                                                    </div>
                                                                    <a href="https://help.wpmet.com/docs-cat/metform/" class="mf-setting-btn-link" target="_blank"><?php esc_html_e('View Documentation', 'metform'); ?></a>
                                                                </div>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            <?php else : ?>
                                                <div class="mf-pro-missing-wrapper attr-tab-pane  attr-fade" id="attr-activeCampaign-tab" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                    <div class="mf-pro-missing">
                                                        <div class="attr-row">
                                                            <div class="attr-col-lg-6">
                                                                <?php
                                                                    mf_dummy_simple_input('API URL:', 'ActiveCampaign API URL', 'Enter here your ActiveCampaign API URL.');
                                                                    mf_dummy_simple_input('API Key:', 'ActiveCampaign API key', 'Enter here your ActiveCampaign API key.');
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <?php if (class_exists('\MetForm_Pro\Base\Package')) : ?>
                                                <div class="attr-tab-pane attr-fade" id="attr-getresponse-tab" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                    <div class="attr-row">

                                                        <?php if (class_exists('\MetForm_Pro\Core\Integrations\Email\Getresponse\Get_Response')) : ?>
                                                            <div class="attr-col-lg-6">
                                                                <div class="mf-setting-input-group">
                                                                    <div class="attr-form-group">
                                                                        <label for="attr-input-label" class="mf-setting-label mf-setting-label attr-input-label"><?php esc_html_e('GetResponse API Key:', 'metform'); ?></label>
                                                                        <input type="text" name="mf_get_reponse_api_key" value="<?php echo esc_attr((isset($settings['mf_get_reponse_api_key'])) ? $settings['mf_get_reponse_api_key'] : ''); ?>" class="mf-setting-input mf-mailchimp-api-key attr-form-control" placeholder="<?php esc_html_e('GetResponse API key', 'metform'); ?>">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="attr-col-lg-6">
                                                                <div class="mf-setting-input-desc">
                                                                    <div class="mf-setting-input-desc-data">
                                                                        <h2 class="mf-setting-input-desc--title">
                                                                            <?php esc_html_e('How To', 'metform') ?></h2>
                                                                        <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.', 'metform') ?>
                                                                        </p>
                                                                        <ol>
                                                                            <li><?php esc_html_e('Item 1', 'metform') ?></li>
                                                                            <li><?php esc_html_e('Item 2', 'metform') ?></li>
                                                                            <li><?php esc_html_e('Item 3', 'metform') ?></li>
                                                                        </ol>
                                                                    </div>
                                                                    <a href="https://help.wpmet.com/docs-cat/metform/" class="mf-setting-btn-link" target="_blank"><?php esc_html_e('View Documentation', 'metform'); ?></a>
                                                                </div>
                                                            </div>

                                                        <?php else : ?>
                                                            <div class="attr-col-lg-6">
                                                                <div class="mf-setting-input-group">
                                                                    <div class="attr-form-group">
                                                                        <label for="attr-input-label" class="mf-setting-label mf-setting-label attr-input-label"><?php esc_html_e('GetResponse API Key:', 'metform'); ?></label>
                                                                        <input type="text" name="mf_getreponse_api_key_field" value="" disabled class="mf-setting-input mf-mailchimp-api-key attr-form-control" placeholder="<?php esc_html_e('GetResponse API key', 'metform'); ?>">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="attr-col-lg-6">
                                                                <div class="mf-setting-input-desc">
                                                                    <div class="mf-setting-input-desc-data">
                                                                        <h2 class="mf-setting-input-desc--title">
                                                                            <?php esc_html_e('How To', 'metform') ?></h2>
                                                                        <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.', 'metform') ?>
                                                                        </p>
                                                                        <ol>
                                                                            <li><?php esc_html_e('Item 1', 'metform') ?></li>
                                                                            <li><?php esc_html_e('Item 2', 'metform') ?></li>
                                                                            <li><?php esc_html_e('Item 3', 'metform') ?></li>
                                                                        </ol>
                                                                    </div>
                                                                    <a href="https://help.wpmet.com/docs-cat/metform/" class="mf-setting-btn-link" target="_blank"><?php esc_html_e('View Documentation', 'metform'); ?></a>
                                                                </div>
                                                            </div>

                                                        <?php endif; ?>

                                                    </div>
                                                </div>
                                            <?php else : ?>
                                                <div class="mf-pro-missing-wrapper attr-tab-pane attr-fade" id="attr-getresponse-tab" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                    <div class="mf-pro-missing">
                                                        <div class="attr-row">
                                                            <div class="attr-col-lg-6">
                                                                <?php
                                                                    mf_dummy_simple_input('GetResponse API Key:', 'GetResponse API key', '');
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>


                                        </div>
                                    </div>
                                    <!-- <hr class="mf-setting-separator"> -->
                                <?php endif; ?>
                            </div>
                        </div>
                        <!-- ./End Mail Integration Tab -->
                        <!-- google sheet Integration Tab -->
                        <div class="mf-settings-section" id="mf-google_sheet_integration">
                            <div class="mf-settings-single-section">
                                <div class="mf-setting-header">
                                    <h3 class="mf-settings-single-section--title"><?php esc_html_e('Google Sheet Integration', 'metform'); ?>
                                    </h3>
                                    <button type="submit" name="submit" id="submit" class="mf-admin-setting-btn active"><?php esc_attr_e('Save Changes', 'metform'); ?></button>
                                </div>
                                <div class="mf-setting-tab-nav">
                                    <ul class="attr-nav attr-nav-tabs" id="nav-tab" role="attr-tablist">
                                        <li class="attr-active attr-in">
                                            <a class="attr-nav-item attr-nav-link" data-toggle="tab" href="#mf-google-sheet-tab" role="tab"><?php esc_attr_e('Google Sheet', 'metform'); ?></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="attr-form-group">
                                    <div class="attr-tab-content" id="nav-tabContent">
                                        <?php if (class_exists('\MetForm_Pro\Core\Integrations\Google_Sheet\WF_Google_Sheet')) : ?>
                                            <div class="attr-tab-pane attr-fade attr-active attr-in" id="mf-google-sheet-tab" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <div class="attr-row">

                                                    <div class="attr-col-lg-6">
                                                        <div class="mf-setting-input-group">
                                                            <label for="attr-input-label" class="mf-setting-label mf-setting-label attr-input-label"><?php esc_html_e('Google Client Id:', 'metform'); ?></label>
                                                            <input type="text" name="mf_google_sheet_client_id" value="<?php echo esc_attr(isset($settings['mf_google_sheet_client_id']) ? $settings['mf_google_sheet_client_id'] : ''); ?>" class="mf-setting-input mf-google-sheet-api-key attr-form-control" placeholder="<?php esc_html_e('Google OAuth Client Id', 'metform'); ?>">
                                                            <p class="description">
                                                                <?php esc_html_e('Enter here your google client id. ', 'metform'); ?><a class="mf-setting-btn-link" target="__blank" href="<?php echo esc_url('https://console.cloud.google.com'); ?>"><?php esc_html_e('Create from here', 'metform'); ?></a>
                                                            </p>
                                                        </div>
                                                        <div class="mf-setting-input-group">
                                                            <label for="attr-input-label" class="mf-setting-label mf-setting-label attr-input-label"><?php esc_html_e('Google Client Secret:', 'metform'); ?></label>
                                                            <input type="text" name="mf_google_sheet_client_secret" value="<?php echo esc_attr(isset($settings['mf_google_sheet_client_secret']) ? $settings['mf_google_sheet_client_secret'] : ''); ?>" class="mf-setting-input mf-google-sheet-api-key attr-form-control" placeholder="<?php esc_html_e('Google OAuth Client Secret', 'metform'); ?>">
                                                            <p class="description">
                                                                <?php esc_html_e('Enter here your google secret id. ', 'metform'); ?><a class="mf-setting-btn-link" target="__blank" href="<?php echo esc_url('https://console.cloud.google.com'); ?>"><?php esc_html_e('Create from here', 'metform'); ?></a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php $google = new \MetForm_Pro\Core\Integrations\Google_Sheet\Google_Access_Token; ?>
                                                <ol class="xs_social_ol">
                                                    <li><?php echo esc_html__('Check how to create App/Project On Google developer account', 'metform') ?> - <a href="https://help.wpmet.com/docs/google-sheet-integration" target="_blank">https://help.wpmet.com/docs/google-sheet-integration</a></li>
                                                    <li><?php echo esc_html__('Must add the following URL to the "Valid OAuth redirect URIs" field:', 'metform') ?> <strong style="font-weight:700;"><?php echo esc_url(admin_url('admin.php?page=metform-menu-settings')) ?></strong></li>
                                                    <li><?php echo esc_html__('After getting the App ID & App Secret, put those information', 'metform') ?></li>
                                                    <li><?php echo esc_html__('Click on "Save Changes"', 'metform') ?></li>
                                                    <li><?php echo esc_html__('Click on "Generate Access Token"', 'metform') ?></li>
                                                </ol>
                                                <a class="mf-setting-btn-link achor-style" href="<?php echo esc_url($google->get_code()); ?>"><?php esc_attr_e('Generate Access Token', 'metform'); ?></a>
                                            </div>
                                            <p class="mf-set-dash-top-notch--item__desc">
                                                <?php esc_html_e("Note:- After 200 days your token will be expired, before the expiration of your token, generate a new token.", 'metform'); ?>
                                            </p>
                                        <?php else : ?>
                                            <div class="mf-pro-missing-wrapper attr-tab-pane attr-fade attr-active attr-in" id="mf-google-sheet-tab" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <div class="mf-pro-missing">
                                                    <div class="attr-row">
                                                        <div class="attr-col-lg-6">
                                                            <?php
                                                                mf_dummy_simple_input('Google Client Id:', 'Google Client Id', 'Enter here your google client id.');
                                                                mf_dummy_simple_input('Google Client Secret:', 'Google Client Secret', 'Enter here your google client secret.');
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <ol class="xs_social_ol">
                                                        <li><?php echo esc_html__('Check how to create App/Project On Google developer account', 'metform') ?> - <a href="https://help.wpmet.com/docs/google-sheet-integration" target="_blank">https://help.wpmet.com/docs/google-sheet-integration</a></li>
                                                        <li><?php echo esc_html__('Must add the following URL to the "Valid OAuth redirect URIs" field:', 'metform') ?> <strong style="font-weight:700;"><?php echo esc_url(admin_url('admin.php?page=metform-menu-settings')) ?></strong></li>
                                                        <li><?php echo esc_html__('After getting the App ID & App Secret, put those information', 'metform') ?></li>
                                                        <li><?php echo esc_html__('Click on "Save Changes"', 'metform') ?></li>
                                                        <li><?php echo esc_html__('Click on "Generate Access Token"', 'metform') ?></li>
                                                    </ol>
                                                    <a class="mf-setting-btn-link achor-style" href="#"><?php esc_attr_e('Generate Access Token', 'metform'); ?></a>
                                                    <p class="mf-set-dash-top-notch--item__desc">
                                                        <?php esc_html_e("Note:- After 200 days your token will be expired, before the expiration of your token, generate a new token.", 'metform'); ?>
                                                    </p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Integrations settings action -->

                        <?php do_action('metform_settings_content'); ?>

                        <!-- Integrations settings action end -->

                        <input type="hidden" name="mf_settings_page_action" value="save">
                        <?php wp_nonce_field('metform-settings-page', 'metform-settings-page'); ?>
                        <input type="hidden" id="mf_wp_rest_nonce" value="<?php echo esc_attr(wp_create_nonce('wp_rest')); ?>">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- pro modal  -->

<div class="attr-modal mf-pro-modal mf-pro-modal-animate" id="metform_pro_modal" tabindex="-1" role="dialog" aria-labelledby="metform_pro_modalLabel" style="display:none;">
    <div class="attr-modal-dialog mf-pro-modal-dialog" role="document">
        <div class="attr-modal-content">
            <div class="mf-pro-modal-close-btn" data-dismiss="modal" aria-label="Close Modal">
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13 1 1 13M1 1l12 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <div class="mf-pro-icon">
            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M41.292 50H8.258a3.215 3.215 0 0 1-3.211-3.212v-3.67a1.377 1.377 0 0 1 1.376-1.376h36.704a1.377 1.377 0 0 1 1.377 1.376v3.67A3.216 3.216 0 0 1 41.292 50M7.8 44.495v2.294a.46.46 0 0 0 .458.458h33.034a.46.46 0 0 0 .459-.459v-2.293z" fill="#0D1427"/><path d="M43.127 44.495H6.423a1.377 1.377 0 0 1-1.373-1.271L3.34 20.992a2.294 2.294 0 0 1 3.314-2.228l8.383 4.19 7.734-13.92a2.295 2.295 0 0 1 4.01-.002l7.734 13.922 8.384-4.19a2.294 2.294 0 0 1 3.313 2.226L44.5 43.224a1.38 1.38 0 0 1-1.373 1.27m-35.43-2.753h34.156l1.552-20.153-8.054 4.025a2.29 2.29 0 0 1-3.029-.937l-7.547-13.585-7.547 13.585a2.29 2.29 0 0 1-3.027.937l-8.056-4.025z" fill="#0D1427"/><path d="M2.753 17.434a2.753 2.753 0 1 0 0-5.505 2.753 2.753 0 0 0 0 5.505m44.045 0a2.753 2.753 0 1 0 0-5.505 2.753 2.753 0 0 0 0 5.505M24.775 5.506a2.753 2.753 0 1 0 0-5.506 2.753 2.753 0 0 0 0 5.506M11.011 40.365a1.835 1.835 0 1 0 0-3.67 1.835 1.835 0 0 0 0 3.67m5.506 0a1.835 1.835 0 1 0 0-3.67 1.835 1.835 0 0 0 0 3.67m5.506 0a1.835 1.835 0 1 0 0-3.67 1.835 1.835 0 0 0 0 3.67m5.505 0a1.835 1.835 0 1 0 0-3.67 1.835 1.835 0 0 0 0 3.67m5.505 0a1.835 1.835 0 1 0 0-3.67 1.835 1.835 0 0 0 0 3.67m5.507 0a1.835 1.835 0 1 0 0-3.67 1.835 1.835 0 0 0 0 3.67" fill="#54ACE8"/></svg>
            </div>
            <div class="mf-pro-content">
                <h1 class="mf-pro-heading"><?php esc_html_e('Go Premium', 'metform'); ?></h1>
                <div class="mf-pro-purchase">
                    <p class="mf-pro-purchase-desc">Purchase the <a href="https://wpmet.com/plugin/metform/pricing/" target="_blank" class="mf-pro-purchase-desc-link"><?php esc_html_e('Pro Version', 'metform'); ?></a> to unlock Advanced features!</p>

                    <a href="https://wpmet.com/plugin/metform/pricing/" target="_blank" class="mf-pro-purchase-btn">Upgrade to Pro</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- pro modal  -->