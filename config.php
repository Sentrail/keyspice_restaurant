<?php
// config.php - Reusable central configuration
$business = [
    'name' => 'Keyspice Restaurant & Bar',
    'tagline' => 'Family-Friendly Dining, Open 24 Hours',
    'description' => 'Welcome to Keyspice Restaurant & Bar – your go-to spot in Abule Egba for delicious meals, warm hospitality, and affordability. Perfect for families, professionals, and late-night cravings.',
    'rating' => '3.9',
    'reviews_count' => '26',
    'price_range' => '₦6,000 – ₦8,000 per person',
    'hours' => 'Open 24 hours',
    'address' => 'Meiran Road, Abule Egba, Lagos 102213, Lagos, Nigeria',
    'plus_code' => 'J7VC+H9 Lagos',
    'phone' => '+234 901 234 5678', // Update with real phone number
    'email' => 'info@keyspice.com', // For order notifications
    'map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.0!2d3.281!3d6.663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNkbCsDM5JzQ5LjMiTiAzwrAxNic1NS40IkU!5e0!3m2!1sen!2sng!4v1735680000000', // Updated approximate embed for Plus Code area
];

$social = [
    'facebook' => 'https://facebook.com/keyspice',
    'instagram' => 'https://instagram.com/keyspice',
    'twitter' => 'https://twitter.com/keyspice',
    'whatsapp' => 'https://wa.me/2349012345678', // Direct WhatsApp link
];

$menu = [ /* Same as before, but updated with better real images */
    'Main Dishes' => [
        ['name' => 'Party Jollof Rice with Chicken', 'price' => '₦7,000', 'img' => 'https://voicesofafrica.co.za/wp-content/uploads/2013/03/Party-Jollof-rice.jpg'],
        ['name' => 'Egusi Soup with Pounded Yam', 'price' => '₦7,500', 'img' => 'https://voicesofafrica.co.za/wp-content/uploads/2013/03/9jafoodie2.jpg'],
        ['name' => 'Pepper Soup (Goat Meat)', 'price' => '₦6,500', 'img' => 'https://substackcdn.com/image/fetch/$s_!IVKG!,w_1456,c_limit,f_auto,q_auto:good,fl_progressive:steep/https%3A%2F%2Fsubstack-post-media.s3.amazonaws.com%2Fpublic%2Fimages%2F4272dadc-5bbd-4714-acc2-da175797c948_1600x1066.heic'],
        ['name' => 'Grilled Chicken with Fries', 'price' => '₦7,200', 'img' => 'https://i0.wp.com/www.orlandoweekly.com/wp-content/uploads/2020/07/flavors_nigerian_restaurant_3.webp?ssl=1'],
    ],
    'Suya & Grills' => [
        ['name' => 'Beef Suya', 'price' => '₦6,800', 'img' => 'https://jolloflife.ca/wp-content/uploads/2020/04/pounded-yam-500x400.jpeg'],
        ['name' => 'Chicken Suya', 'price' => '₦7,000', 'img' => 'https://blackrestaurantweeks.com/wp-content/uploads/2021/10/buka-1024x640.jpg'],
    ],
    'Drinks' => [
        ['name' => 'Chapman', 'price' => '₦2,500', 'img' => ''],
        ['name' => 'Soft Drinks', 'price' => '₦1,000', 'img' => ''],
        ['name' => 'Fresh Juice', 'price' => '₦3,000', 'img' => ''],
    ],
];

/* Reusable functions remain the same */
function renderNav($active = 'home') { /* ... same as before ... */ }
function renderMenuCategory($title, $items) { /* ... same as before ... */ }

function renderSocialIcons() {
    global $social;
    echo '<div class="social-icons">';
    foreach ($social as $platform => $url) {
        echo "<a href=\"{$url}\" target=\"_blank\" aria-label=\"{$platform}\">";
        echo file_get_contents("https://simpleicons.org/icons/{$platform}.svg"); // Uses free Simple Icons SVG
        echo '</a>';
    }
    echo '</div>';
}
?>