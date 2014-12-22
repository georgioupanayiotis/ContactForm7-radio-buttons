function custom_cf7_required_radio_filter($result, $tag) {
    $name = $tag['name'];
    if (
        $tag['type'] == 'radio'
        //&& substr($name, -9) == '-required'
        && empty($_POST[$name])
    ) {
        $result['valid'] = false;
        $result['reason'][$name] = 'Please fill in this required field';
    }
    return $result;
}
add_filter('wpcf7_validate_radio', 'custom_cf7_required_radio_filter', 10, 2);