<?php
// by: @aisaka_chan
if ($_GET['update'] == 'app_config') {
    echo (file_get_contents('app_config.json'));
} elseif ($_GET['update'] == 'app_layout') {
    echo (file_get_contents('app_layout.json'));
} elseif ($_GET['update'] == 'app_text') {
    echo (file_get_contents('app_text.json'));
}
// @ConfigMods
?>