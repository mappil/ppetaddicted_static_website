<?php
$type = $_GET['type']; // 0 CANE 1 GATTO

if (isset($_GET['rz'])) {
    $razza = $_GET['rz'];
}else {
    $razza = 0;  
}

//$weight = $_GET['wg'];
$language = $_GET['lng'];

$imageDefault = "https://www.piggypet.it/wp-content/uploads/2023/08/Banner-PPET-ADDICTED.jpg";
$linkDefault = "https://www.piggypet.it/collezioni/lux-leopard/";


if(isset($type)) {
    // CANE
    if($type == 0) {
        
        if ($razza == 14 ||$razza == 35 || $razza == 40 || $razza == 106) {
            // BASSOTTO
            if(rand(0,1) == 0) {
                pettorine_per_bassotti($language);
            }else {
                abbiglamento_bassotti($language);
            }
            
        }else if ($razza == 32 ||$razza == 58 || $razza == 74 || $razza == 84 || $razza == 85 || $razza == 94 || $razza == 100 || $razza == 101) {
            // BARBONI
            if(rand(0,1) == 0) {
                pettorine_barboncino($language);
            }else {
                abbigliamento_barboncino($language);
            }
        }
        else if ($razza == 22  ||$razza == 33) {
            // CAVALIER KING
            if(rand(0,1) == 0) {
                pettorine_cavalier_king($language);
            }else {
                abbigliamento_cavalier_king($language);
            }
        }
        else if ($razza == 21) {
            // BULLDOG FRANCESE
            if(rand(0,1) == 0) {
                pettorina_bulldog_francese($language);
            }else {
                abbigliamento_bulldog_francese($language);
            }
        }
        else if ($razza == 44) {
            // CARLINO
            if(rand(0,1) == 0) {
                pettorine_carlino($language);
            }else {
                abbigliamento_carlino($language);
            }
        }
        else {
            if(rand(0,1) == 0) {
                nuova_collezione($language);
            }else {
                nuova_collezione_due($language);
                //echo banner($imageDefault, $linkDefault );
            }
            
        }
        // GATTO
    }else if($type == 1) {
        guinzagli_in_corda_personalizzati($language);
        
    }else {
        guinzagli_in_corda_personalizzati($language);
    }
    
}else {
    guinzagli_in_corda_personalizzati($language);
    //echo banner($imageDefault, $linkDefault );
}

function guinzagli_in_corda_personalizzati($language) {
    if(isset($language) && $language != "it") {
        
        native("https://www.piggypet.it/wp-content/uploads/2022/08/IMG_9514-1.jpg",
               "https://www.piggypet.it/product-category/pettorine-guinzagli-e-collari-per-cani/guinzagli-in-corda/",
               "CUSTOMIZABLE ROPE LEASHES",
               "Add a pop of color to your dog's wardrobe", "Shop now");
        
    }else {
        
        native("https://www.piggypet.it/wp-content/uploads/2022/08/IMG_9514-1.jpg",
               "https://www.piggypet.it/product-category/pettorine-guinzagli-e-collari-per-cani/guinzagli-in-corda/",
               "GUINZAGLI IN CORDA PERSONALIZZABILI",
               "Dai un tocco di colore al guardaroba del tuo cane", "Acquista ora" );
        
    }
}

function pettorine_per_bassotti($language) {
    if(isset($language) && $language != "it") {
        
        native("https://www.piggypet.it/wp-content/uploads/2023/09/C84DF2FB-A8C9-4F9B-A436-56D88B3F14C4.jpg",
               "https://www.piggypet.it/product-category/pettorina-per-cani/",
               "Harnesses and collars for dachshunds",
               "Style, comfort and safety", "Shop now" );
        
    }else {
        
        native("https://www.piggypet.it/wp-content/uploads/2023/09/C84DF2FB-A8C9-4F9B-A436-56D88B3F14C4.jpg",
               "https://www.piggypet.it/product-category/pettorina-per-cani/",
               "Pettorine e collari per bassotti",
               "Stile, comfort e sicurezza", "Acquista ora");
        
    }
}

function abbiglamento_bassotti($language) {
    if(isset($language) && $language != "it") {
        
        native("https://www.piggypet.it/wp-content/uploads/2023/09/image3-4.jpg",
               "https://www.piggypet.it/product-tag/bassotto/",
               "Discover the clothing line dedicated to dachshunds",
               "Down jackets, raincoats, fleeces and much more", "Shop now");
        
    }else {
        
        native("https://www.piggypet.it/wp-content/uploads/2023/09/image3-4.jpg",
               "https://www.piggypet.it/product-tag/bassotto/",
               "Scopri la linea abbigliamento dedicata ai bassotti",
               "Piumini, impermeabili, pile e tanto altro", "Acquista ora" );
    }
}


function pettorine_barboncino($language) {
    if(isset($language) && $language != "it") {
        
        native("https://www.piggypet.it/wp-content/uploads/2023/09/IMG_3924-1-2.jpeg",
               "https://www.piggypet.it/product-category/pettorina-per-cani/",
               "Comfortable and fashionable poodle harnesses",
               "Style, comfort and safety", "Shop now");
        
    }else {
        
        native("https://www.piggypet.it/wp-content/uploads/2023/09/IMG_3924-1-2.jpeg",
               "https://www.piggypet.it/product-category/pettorina-per-cani/",
               "Pettorine per barboncino comode e alla moda",
               "Stile, comfort e sicurezza", "Acquista ora" );
    }
}


function abbigliamento_barboncino($language) {
    if(isset($language) && $language != "it") {
        
        native("https://www.piggypet.it/wp-content/uploads/2023/09/2830E16F-0BA1-47C2-B828-F1945C61AA2C.jpg",
               "https://www.piggypet.it/product-category/abbigliamento-per-cani/",
               "Clothing for poodles",
               "Down jackets, raincoats, fleeces and much more", "Shop now");
        
    }else {
        
        native("https://www.piggypet.it/wp-content/uploads/2023/09/2830E16F-0BA1-47C2-B828-F1945C61AA2C.jpg",
               "https://www.piggypet.it/product-category/abbigliamento-per-cani/",
               "Abbigliamento per barboncini",
               "Piumini, impermeabili, pile e tanto altro", "Acquista ora" );
    }
}
function abbigliamento_cavalier_king($language) {
    if(isset($language) && $language != "it") {
        
        native("https://www.piggypet.it/wp-content/uploads/2023/03/image_6483441-2.jpg",
               "https://www.piggypet.it/product-category/abbigliamento-per-cani/",
               "Comfortable and fashionable clothes for Cavalier King",
               "Style, comfort and safety", "Shop now");
        
    }else {
        
        native("https://www.piggypet.it/wp-content/uploads/2023/03/image_6483441-2.jpg",
               "https://www.piggypet.it/product-category/abbigliamento-per-cani/",
               "Abbigliamento per Cavalier King",
               "Stile, comfort e sicurezza", "Acquista ora" );
    }
}


function pettorine_cavalier_king($language) {
    if(isset($language) && $language != "it") {
        
        native("https://www.piggypet.it/wp-content/uploads/2023/03/image_6483441-1-1.jpg",
               "https://www.piggypet.it/product-category/pettorine-guinzagli-e-collari-per-cani/",
               "Harnesses for Cavalier King",
               "Down jackets, raincoats, fleeces and much more", "Shop now");
        
    }else {
        
        native("https://www.piggypet.it/wp-content/uploads/2023/03/image_6483441-1-1.jpg",
               "https://www.piggypet.it/product-category/pettorine-guinzagli-e-collari-per-cani/",
               "Pettorine per Cavalier King",
               "Piumini, impermeabili, pile e tanto altro", "Acquista ora" );
    }
}
function nuova_collezione($language) {
    if(isset($language) && $language != "it") {
        
        native("https://www.piggypet.it/wp-content/uploads/2023/09/IMG_9964-1.jpg",
               "https://www.piggypet.it/negozio/",
               "Discover our F/W 23/23 Collection",
               "Down jackets, raincoats, fleeces and much more", "Shop now");
        
    }else {
        
        native("https://www.piggypet.it/wp-content/uploads/2023/09/IMG_9964-1.jpg",
               "https://www.piggypet.it/negozio/",
               "Scopri la collezione A/W 23/24",
               "Piumini, impermeabili, pile e tanto altro", "Acquista ora" );
    }
}
function nuova_collezione_due($language) {
    if(isset($language) && $language != "it") {
        
        native("https://www.piggypet.it/wp-content/uploads/2023/09/2FC2AD70-1E31-40F1-A9B5-D68D657881F9-1.jpg",
               "https://www.piggypet.it/negozio/",
               "Discover our F/W 23/23 Collection",
               "Down jackets, raincoats, fleeces and much more", "Shop now");
        
    }else {
        
        native("https://www.piggypet.it/wp-content/uploads/2023/09/2FC2AD70-1E31-40F1-A9B5-D68D657881F9-1.jpg",
               "https://www.piggypet.it/negozio/",
               "Scopri la collezione A/W 23/24",
               "Piumini, impermeabili, pile e tanto altro", "Acquista ora" );
    }
}

function pettorina_bulldog_francese($language) {
    if(isset($language) && $language != "it") {
        
        native("https://www.piggypet.it/wp-content/uploads/2022/05/pettorina-per-cani-grandi-blue-camo-3.jpg",
               "https://www.piggypet.it/product-category/pettorine-guinzagli-e-collari-per-cani/",
               "Harnesses for French Bulldog",
               "Down jackets, raincoats, fleeces and much more", "Shop now");
        
    }else {
        
        native("https://www.piggypet.it/wp-content/uploads/2022/05/pettorina-per-cani-grandi-blue-camo-3.jpg",
               "https://www.piggypet.it/product-category/pettorine-guinzagli-e-collari-per-cani/",
               "Pettorine per Bulldog Francese",
               "Piumini, impermeabili, pile e tanto altro", "Acquista ora" );
    }
}
function abbigliamento_bulldog_francese($language) {
    if(isset($language) && $language != "it") {
        
        native("https://www.piggypet.it/wp-content/uploads/2023/09/IMG_9993.jpg",
               "https://www.piggypet.it/product-category/abbigliamento-per-cani/",
               "Clothing for French Bulldog",
               "Down jackets, raincoats, fleeces and much more", "Shop now");
        
    }else {
        
        native("https://www.piggypet.it/wp-content/uploads/2023/09/IMG_9993.jpg",
               "https://www.piggypet.it/product-category/abbigliamento-per-cani/",
               "Abbigliamento per Bulldog Francese",
               "Piumini, impermeabili, pile e tanto altro", "Acquista ora" );
    }
}
function abbigliamento_carlino($language) {
    if(isset($language) && $language != "it") {
        
        native("https://www.piggypet.it/wp-content/uploads/2022/02/impermeabile-per-cani-Lux-Leopard-4-1.jpg",
               "https://www.piggypet.it/product-category/abbigliamento-per-cani/",
               "Clothing for Pugs",
               "Down jackets, raincoats, fleeces and much more", "Shop now");
        
    }else {
        
        native("https://www.piggypet.it/wp-content/uploads/2022/02/impermeabile-per-cani-Lux-Leopard-4-1.jpg",
               "https://www.piggypet.it/product-category/abbigliamento-per-cani/",
               "Abbigliamento per Carlino",
               "Piumini, impermeabili, pile e tanto altro", "Acquista ora" );
    }
}
function pettorine_carlino($language) {
    if(isset($language) && $language != "it") {
        
        native("https://www.piggypet.it/wp-content/uploads/2023/09/6FF71113-2FFB-446E-A80C-7007F4DEE313-2-1.jpg",
               "https://www.piggypet.it/product-category/pettorine-guinzagli-e-collari-per-cani/",
               "Harnesses for Pugs",
               "Down jackets, raincoats, fleeces and much more", "Shop now");
        
    }else {
        
        native("https://www.piggypet.it/wp-content/uploads/2023/09/6FF71113-2FFB-446E-A80C-7007F4DEE313-2-1.jpg",
               "https://www.piggypet.it/product-category/pettorine-guinzagli-e-collari-per-cani/",
               "Pettorine per Carlino",
               "Piumini, impermeabili, pile e tanto altro", "Acquista ora" );
    }
}
function banner($mage, $link) {
    jsonObject($mage, $link, "banner", null, null, null);
}

function native($mage, $link, $title, $text, $buttonText) {
    jsonObject($mage, $link, "native", $title, $text, $buttonText);
}


function jsonObject($mage, $link, $type, $title, $text, $buttonText) {
    $obj = (object) [
    'image' => $mage,
    'link' => $link,
    'type' => $type,
    'title' => $title,
    'text' => $text,
    'buttonText' => $buttonText
    ];
    
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($obj);
}

?>
