<div class="wrap">
    <h1>Open WP Core Optimizations</h1>
    <p>A lightweight plugin to disable unnecessary WordPress core features for better performance and security.</p>
    
    <form method="post">
        <?php wp_nonce_field('ocwp_save_options'); ?>
        <table class="form-table">
            <?php foreach ($all_options as $key => $option): ?>
                <tr>
                    <th scope="row">
                        <label for="<?php echo esc_attr($key); ?>"><?php echo esc_html($option['title']); ?></label>
                    </th>
                    <td>
                        <input type="checkbox" name="<?php echo esc_attr($key); ?>" id="<?php echo esc_attr($key); ?>" <?php checked(!empty($options[$key])); ?> />
                        <p class="description"><?php echo esc_html($option['description']); ?></p>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <p>
            <input type="submit" name="ocwp_save" class="button-primary" value="Save Changes" />
        </p>
    </form>
</div>