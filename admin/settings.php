<div class="wrap">
    <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
    <form action="options.php" method="post">
        <?php settings_fields('simply-bootstrap'); ?>
        <table class="form-table">
            <tbody>
                <tr>
                    <th scope="row">
                        CSS
                    </th>
                    <td>
                        <fieldset>
                            <label for="simply-bootstrap-css">
                                <input type="checkbox" name="simply-bootstrap-css" value="1" <?php checked(get_option('simply-bootstrap-css'), 1) ?> />
                                Load CSS
                            </label>
                        </fieldset>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        JS
                    </th>
                    <td>
                        <fieldset>
                            <label for="simply-bootstrap-js">
                                <input type="checkbox" name="simply-bootstrap-js" value="1" <?php checked(get_option('simply-bootstrap-js'), 1) ?> />
                                Load JS
                            </label>
                        </fieldset>
                    </td>
                </tr>
            </tbody>
        </table>
        <?php submit_button(); ?>
    </form>
</div>