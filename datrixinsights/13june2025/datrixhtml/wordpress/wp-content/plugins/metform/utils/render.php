<?php

namespace MetForm\Utils;
/**
 * Render html components
 */

 $plugin_instance = new \MetForm\Plugin();

class Render
{

    public static $content_data;
    public static function mf_crm_marketing_icon() {
        return '<svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.926 1.911 6.274 5.105a2.43 2.43 0 0 1-1.617.182 8 8 0 0 0-.695-.14C2.137 4.94 1 6.384 1 8.045v.912c0 1.66 1.137 3.105 2.962 2.896a7 7 0 0 0 .695-.139 2.43 2.43 0 0 1 1.617.183l6.652 3.193c1.527.733 2.291 1.1 3.142.814.852-.286 1.144-.899 1.728-2.125a12.17 12.17 0 0 0 0-10.556c-.584-1.226-.876-1.84-1.728-2.125-.851-.286-1.615.08-3.142.814" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M9.458 19.77 7.967 21c-3.362-2.666-2.951-3.937-2.951-9H6.15c.46 2.86 1.545 4.216 3.043 5.197.922.604 1.112 1.876.265 2.574M5.5 11.5v-6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>';
    }
    public static function mf_pro_freemium_badge($isPro = false){
        if($isPro){
            return '<svg width="34" height="18" viewBox="0 0 34 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 3a3 3 0 0 1 3-3h28a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3H3a3 3 0 0 1-3-3z" fill="#E81454"/><path fill-rule="evenodd" clip-rule="evenodd" d="M24.384 13q-.75 0-1.432-.22a3.2 3.2 0 0 1-1.202-.695 3.25 3.25 0 0 1-.815-1.223q-.297-.76-.297-1.807v-.22q0-1.014.297-1.741a3.2 3.2 0 0 1 .816-1.19 3.3 3.3 0 0 1 1.2-.684Q23.635 5 24.385 5q.77 0 1.444.22.672.22 1.19.684.518.462.815 1.19.298.728.298 1.74v.221q0 1.047-.298 1.807-.297.75-.815 1.223a3.2 3.2 0 0 1-1.19.695q-.672.22-1.444.22m-.01-1.653q.45 0 .837-.198.385-.21.617-.694.242-.497.242-1.4v-.22q0-.86-.242-1.334-.232-.474-.617-.66a1.9 1.9 0 0 0-.838-.188q-.43 0-.815.187-.387.187-.628.661-.243.473-.243 1.334v.22q0 .903.242 1.4.243.484.629.694.386.198.815.198m-11.123 1.51V5.143h3.361q.97 0 1.609.32.65.32.98.892.331.573.331 1.367 0 .826-.396 1.421-.387.585-1.168.86l1.785 2.854h-2.204l-1.499-2.645h-.815v2.645zm1.984-4.188h.936q.795 0 1.08-.231.297-.243.298-.716 0-.474-.298-.705-.285-.243-1.08-.243h-.936zM5.87 5.143v7.714h1.983V10.41H9.01q1.079 0 1.774-.31.694-.318 1.024-.914.342-.595.342-1.41 0-.827-.341-1.41-.33-.595-1.025-.904-.694-.32-1.774-.32zM8.79 8.78h-.937V6.774h.936q.76 0 1.07.254.308.253.308.749 0 .495-.309.75-.309.252-1.069.253" fill="#fff"/></svg>';
        }else{
            return '<svg width="74" height="18" viewBox="0 0 74 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 3a3 3 0 0 1 3-3h68a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3H3a3 3 0 0 1-3-3z" fill="#3970FF"/><path d="M5.5 4.722v8.4h2.16v-3.24h3.42v-1.56H7.66V6.378h3.78V4.722z" fill="#fff"/><path fill-rule="evenodd" clip-rule="evenodd" d="M12.637 13.122v-8.4h3.66q1.056 0 1.752.348.708.348 1.068.972t.36 1.488q0 .9-.432 1.548-.42.636-1.272.936l1.944 3.108h-2.4l-1.632-2.88h-.888v2.88zm2.16-4.56h1.02q.864 0 1.176-.252.324-.264.324-.78t-.324-.768q-.312-.264-1.176-.264h-1.02z" fill="#fff"/><path d="M20.98 4.722v8.4h6.12v-1.656h-3.96V9.582h3.6v-1.56h-3.6V6.378h3.96V4.722zm7.5 8.4v-8.4h6.12v1.656h-3.96v1.644h3.6v1.56h-3.6v1.884h3.96v1.656zm7.5-8.4v8.4h2.16V8.31l1.74 3.192h1.2l1.74-3.192v4.812h2.16v-8.4h-2.16l-2.303 4.26-2.329-4.26zm10.796 8.4v-8.4h2.16v8.4zm5.554-.228q.828.384 1.944.384 1.14 0 1.956-.384a2.85 2.85 0 0 0 1.26-1.176q.444-.792.444-1.956v-5.04h-2.16v4.8q0 .96-.324 1.464-.324.492-1.176.492-.828 0-1.164-.492-.336-.504-.336-1.476V4.722h-2.16v5.04q0 1.164.444 1.956.456.78 1.272 1.176m7.17-8.172v8.4h2.16V8.31l1.74 3.192h1.2l1.74-3.192v4.812h2.16v-8.4h-2.16l-2.304 4.26-2.328-4.26z" fill="#fff"/></svg>';
        }
    }

    public static function tab($id, $lable, $caption)
    {
?>
        <li>
            <a href="#<?php echo esc_html($id); ?>" class="mf-setting-nav-link">
                <div class="mf-setting-tab-content">
                    <span class="mf-setting-title"><?php echo esc_html($lable); ?> <span class="mf-setting-title-freemium"><?php echo Render::mf_pro_freemium_badge(false); ?></span></span>
                    <span class="mf-setting-subtitle"><?php echo esc_html($caption); ?></span>
                </div>
                <div>
                    <span class="mf-setting-tab-icon"><?php echo Render::mf_crm_marketing_icon(); ?></span>
                </div>
            </a>
        </li>

    <?php
    }

    public static function tab_content($id, $title)
    {

    ?>

        <div class="mf-settings-section" id="<?php echo esc_html($id); ?>">
            <div class="mf-settings-single-section">
                <div class="mf-setting-header">
                    <h3 class="mf-settings-single-section--title"><?php echo esc_html($title); ?></h3>
                    <button type="submit" name="submit" id="submit" class="mf-admin-setting-btn button button-primary"><?php esc_attr_e('Save Changes', 'metform'); ?>
                    </button>
                </div>

                <div class="attr-form-group">
                    <div class="mf-setting-tab-nav">
                        <ul class="attr-nav attr-nav-tabs" id="nav-tab" role="attr-tablist">

                            <?php do_action('metform_settings_subtab_' . $id); ?>

                        </ul>
                    </div>


                </div>

                <div class="attr-form-group">
                    <div class="attr-tab-content" id="nav-tabContent">


                        <?php do_action('metform_settings_subtab_content_' . $id); ?>

                    </div>

                </div>

            </div>
        </div>
    <?php
    }

    public static function sub_tab($title, $target_id, $is_active = null)
    {
    ?>

        <li class="attr-<?php echo esc_html($is_active); ?> attr-in">
            <a class="attr-nav-item attr-nav-link" data-toggle="tab" href="#<?php echo esc_html($target_id); ?> " role="tab"><?php echo esc_attr($title); ?></a>
        </li>

    <?php
    }

    public static function sub_tab_content($sub_tab_id, $content, $active = '')
    {
    ?>

        <div class="attr-tab-pane attr-fade <?php if ($active == 'active') : ?> attr-active attr-in  <?php endif; ?>" id="<?php echo esc_html($sub_tab_id); ?>" role="tabpanel" aria-labelledby="nav-profile-tab">
            <div class="attr-row">
                <div class="attr-col-lg-6">

                    <?php call_user_func($content); ?>

                </div>
            </div>

        </div>

    <?php
    }

    public static function button($data)
    {
        $class = isset($data['class']) ? $data['class'] : 'mf-admin-setting-btn';
        $id    = isset($data['id']) ? $data['id'] : '';
        $text  = isset($data['text']) ? $data['text'] : '';
    ?>
        <div class="mf-setting-input-group">
            <button type="button" id="<?php echo esc_html($id) ?>" class="<?php echo esc_html($class) ?>"><?php echo esc_html($text) ?></button>
        </div>
    <?php
    }

    public static function textbox($data)
    {
        $settings = \MetForm\Core\Admin\Base::instance()->get_settings_option();

    ?>

        <div class="mf-setting-input-group">
            <label for="attr-input-label" class="mf-setting-label mf-setting-label attr-input-label"><?php echo esc_html($data['lable']); ?></label>
            <input type="text" name="<?php echo esc_attr($data['name']); ?>" value="<?php echo esc_attr((isset($settings[$data['name']])) ? $settings[$data['name']] : ''); ?>" class="mf-setting-input mf-mailchimp-api-key attr-form-control" placeholder="<?php echo esc_html($data['placeholder']); ?>">
            <p class="description">
                <?php echo esc_html($data['description']); ?>
            </p>
        </div>

    <?php
    }

    public static function checkbox($data)
    {

    ?>

        <div class="mf-input-group">
            <label class="attr-input-label">
                <input type="checkbox" value="1" name="<?php echo esc_html($data['name']); ?>" class="mf-admin-control-input <?php echo esc_html($data['class']); ?>">


                <span>
                    <?php echo esc_html($data['label']); ?>
                </span>

            </label>
            <?php if (isset($data['details'])) : ?>
                <span class='mf-input-help'>
                    <?php echo esc_html($data['details']); ?>

                </span>
            <?php endif; ?>

        </div>

    <?php
    }

    public static function form_tab($id, $lable)
    {
    ?>

        <li role="presentation">
            <a href="#<?php echo esc_attr($id); ?>" aria-controls="crm" role="tab" data-toggle="tab">
                <?php echo esc_html($lable); ?>
            </a>
        </li>

    <?php
    }

    public static function form_tab_content($parent_id)
    {

    ?>

        <div role="tabpanel" class="attr-tab-pane" id="<?php echo esc_html($parent_id); ?>">

            <div class="attr-modal-body" id="metform_form_modal_body">


                <?php do_action('mf_push_tab_content_' . $parent_id); ?>

            </div>

        </div>


    <?php
    }

    public static function div($id = '', $class = '', $content = '')
    {
    ?>

        <div id="<?php echo esc_html($id); ?>" class="<?php echo esc_html($class); ?>">

            <?php \MetForm\Utils\Util::metform_content_renderer($content); ?>

        </div>

    <?php
    }

    public static function seperator()
    {
    ?>

<?php
    }
}
