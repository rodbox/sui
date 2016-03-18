<?php
session_start();

function suiAttr()
{
    foreach ($_SESSION['sui'] ?? [] as $key => $value)
        echo 'data-sui-'.$key.' = "'.$value.'" ';
}

function suiBtn($sui, $value = 'false'){
    $active = ($_SESSION['sui'][$sui] == $value)?' active' : '';

    echo '<a href="#" data-k="' . $sui . '" data-value="' . $value . '" class="btn btn-default btn-sui ' . (($_SESSION['sui'][$sui] == "true")?' active' : '') . '">'.$sui.'</a>';
}


function lorem(){
    echo "Nulla vitae elit libero, a pharetra augue. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.

Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Sed posuere consectetur est at lobortis. Maecenas faucibus mollis interdum.";
}

?>