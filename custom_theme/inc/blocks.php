<?php

function hpp_register_acf_blocks(){

    $blocks = glob(
        get_template_directory() . '/blocks/*/block.json'
    );

    if(!$blocks){
        return;
    }

    foreach($blocks as $block){

        register_block_type(
            dirname($block)
        );

    }

}

add_action('init', 'hpp_register_acf_blocks');