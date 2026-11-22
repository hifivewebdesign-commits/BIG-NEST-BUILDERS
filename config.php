<?php
/**
 * BIG NEST BUILDERS - Website Configuration & Data System
 * Official Tagline: YOU DREAM IT. WE BUILD IT.
 * Reference: Inspired by https://kpconstructions.group/
 */

if (!defined('APP_INIT')) {
    define('APP_INIT', true);
}

// Brand & Company Details
define('SITE_NAME', 'Big Nest Builders');
define('SITE_TAGLINE', 'YOU DREAM IT. WE BUILD IT.');
define('SITE_PHONE', '+91 96203 64786');
define('SITE_PHONE_RAW', '919620364786');
define('SITE_PHONE_TEL', '+919620364786');
define('SITE_EMAIL', 'contact@bignestbuilders.com');
define('SITE_ADDRESS', 'Near Gandhi Statue, Horamavu, Bangalore – 560043, Karnataka, India.');
define('SITE_CITY', 'Bangalore');
define('SITE_PINCODE', '560043');
define('SITE_STATE', 'Karnataka');
define('SITE_COUNTRY', 'India');
define('SITE_WHATSAPP_URL', 'https://wa.me/919620364786');
define('SITE_YOUTUBE_URL', 'https://www.youtube.com/@big_nestbuilders');
// Dynamic Site URL (Works automatically on both localhost and live domain with SSL)
if (!defined('SITE_URL')) {
    $is_https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443) || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https');
    $protocol = $is_https ? "https://" : "http://";
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost:8000';
    define('SITE_URL', rtrim($protocol . $host, '/'));
}

// Brand Colors
define('COLOR_PRIMARY_BLUE', '#078FEA');
define('COLOR_ROYAL_BLUE', '#071B85');
define('COLOR_LIME_YELLOW', '#D5E900');
define('COLOR_LIGHT_BG', '#F5F7FA');
define('COLOR_DARK_TEXT', '#17191F');
define('COLOR_MUTED_TEXT', '#6B7280');

// Navigation Items (Exact 6 Menu Items as Requested)
$nav_items = [
    ['num' => '01', 'title' => 'Home', 'url' => '#hero'],
    ['num' => '02', 'title' => 'About Us', 'url' => '#about'],
    ['num' => '03', 'title' => 'Services', 'url' => '#services'],
    ['num' => '04', 'title' => 'Our Projects', 'url' => '#projects'],
    ['num' => '05', 'title' => 'Our Process', 'url' => '#process'],
    ['num' => '06', 'title' => 'Contact Us', 'url' => '#contact'],
];

// Why Choose Us (7 Reasons / Features)
$why_choose_us = [
    [
        'num' => '01',
        'title' => 'Complete Home Solutions',
        'desc' => 'From construction to maintenance, multiple home services delivered seamlessly under one roof.',
        'featured' => true,
        'image' => 'assets/images/why-us-engineer.jpg'
    ],
    [
        'num' => '02',
        'title' => 'Quality-Focused Work',
        'desc' => 'Careful attention to certified materials, skilled workmanship and refined finishing.'
    ],
    [
        'num' => '03',
        'title' => 'Multiple Service Expertise',
        'desc' => 'Turnkey construction, bespoke interiors, electrical, plumbing and comprehensive finishing solutions.'
    ],
    [
        'num' => '04',
        'title' => 'Customer-Focused Planning',
        'desc' => 'We aim to thoroughly understand your space, architectural preferences and specific requirements before beginning work.'
    ],
    [
        'num' => '05',
        'title' => 'Practical Solutions',
        'desc' => 'Engineered solutions designed around your exact lifestyle, functional needs and project scope.'
    ],
    [
        'num' => '06',
        'title' => 'Organized Execution',
        'desc' => 'A structured milestone-based approach to planning, sourcing and carrying out approved work.'
    ],
    [
        'num' => '07',
        'title' => 'Attention to Detail',
        'desc' => 'Uncompromising focus on the fine craft and small details that make a profound difference in the finished space.'
    ],
];

// 10 Services Showcase
$services = [
    [
        'id' => 'construction',
        'num' => '01',
        'title' => 'Residential Construction',
        'short_title' => 'Construction',
        'category' => 'civil',
        'category_name' => 'Civil & Construction',
        'tag' => 'FLAGSHIP DISCIPLINE',
        'icon' => 'building-2',
        'desc' => 'Turnkey residential construction delivering functional, comfortable, and architecturally striking living spaces built with precision RCC engineering, high-grade materials, and enduring structural integrity.',
        'image' => 'assets/images/service-01-construction.jpg',
        'features' => ['Custom Villa & Bungalow Construction', 'RCC Structural Design & Soil Testing', 'Architectural Elevation & 3D Planning', 'Turnkey Delivery with Structural Warranty']
    ],
    [
        'id' => 'renovation',
        'num' => '02',
        'title' => 'Home Renovation',
        'short_title' => 'Renovation',
        'category' => 'civil',
        'category_name' => 'Civil & Construction',
        'tag' => 'TRANSFORMATION',
        'icon' => 'hammer',
        'desc' => 'Transform your existing property with thoughtful architectural renovation solutions that optimize floor plans, modernize elevations, reinforce structural safety, and elevate contemporary aesthetic appeal.',
        'image' => 'assets/images/service-02-renovation.jpg',
        'features' => ['Full House Interior & Exterior Makeover', 'Structural Space Optimization & Wall Removal', 'Modular Kitchen & Luxury Bath Remodeling', 'Elevation Facelift & Weatherproofing']
    ],
    [
        'id' => 'interiors',
        'num' => '03',
        'title' => 'Interior Work',
        'short_title' => 'Interiors',
        'category' => 'interior',
        'category_name' => 'Interior & Finishes',
        'tag' => 'BESPOKE LUXURY',
        'icon' => 'sparkles',
        'desc' => 'Bespoke interior architecture tailored to your unique family lifestyle. We harmonize custom cabinetry, premium lighting palettes, false ceilings, and acoustic ergonomics into comfortable everyday luxury.',
        'image' => 'assets/images/service-03-interior.jpg',
        'features' => ['Custom Modular Kitchens & Acrylic Wardrobes', 'False Ceiling Design & Ambient Lighting', 'Designer TV Entertainment Backdrops', 'Living & Dining Room Spatial Articulation']
    ],
    [
        'id' => 'electrical',
        'num' => '04',
        'title' => 'Electrical Services',
        'short_title' => 'Electrical',
        'category' => 'systems',
        'category_name' => 'Systems & Maintenance',
        'tag' => 'SAFETY CERTIFIED',
        'icon' => 'zap',
        'desc' => 'Heavy-duty residential electrical infrastructure executed with strict adherence to safety standards. From concealed fire-resistant wiring to smart automated home integration and DB dressing.',
        'image' => 'assets/images/service-04-electrical.jpg',
        'features' => ['Concealed Fire-Retardant House Wiring', 'Distribution Board (DB) Dressing & MCB Setup', 'Architectural Strip & Accent Lighting', 'Inverter, Solar & Smart Home Prep']
    ],
    [
        'id' => 'plumbing',
        'num' => '05',
        'title' => 'Plumbing Services',
        'short_title' => 'Plumbing',
        'category' => 'systems',
        'category_name' => 'Systems & Maintenance',
        'tag' => 'PRECISION PIPING',
        'icon' => 'droplets',
        'desc' => 'Advanced plumbing and hydraulic systems engineered to prevent leakage, maintain optimal water pressure, and support luxury multi-outlet bathrooms, overhead reservoirs, and drainage manifolds.',
        'image' => 'assets/images/service-05-plumbing.jpg',
        'features' => ['CPVC & UPVC Concealed Pressure Piping', 'Designer Sanitary Fixture & Diverter Fitting', 'Overhead Tank & Pressure Booster Pumps', 'Advanced Hydrostatic Leak Testing']
    ],
    [
        'id' => 'carpentry',
        'num' => '06',
        'title' => 'Carpentry & Woodwork',
        'short_title' => 'Carpentry',
        'category' => 'interior',
        'category_name' => 'Interior & Finishes',
        'tag' => 'SOLID WOOD CRAFT',
        'icon' => 'axe',
        'desc' => 'Master carpentry combining traditional joinery with precision modern machining. Crafted using seasoned teak, marine-grade ply, and luxury laminates for architectural doors, paneling, and storage.',
        'image' => 'assets/images/service-06-carpentry.jpg',
        'features' => ['Custom Solid Teak Entrance Doors', 'Architectural Fluted Wall Paneling', 'Designer Pooja Units & Crockery Consoles', 'Soft-Close Hardware & Concealed Hinges']
    ],
    [
        'id' => 'painting',
        'num' => '07',
        'title' => 'Painting & Coating',
        'short_title' => 'Painting',
        'category' => 'interior',
        'category_name' => 'Interior & Finishes',
        'tag' => 'WEATHER RESISTANT',
        'icon' => 'paintbrush',
        'desc' => 'Multi-stage wall preparation, waterproofing primer coats, and mirror-smooth royal emulsion finishes that resist moisture, fungal growth, and intense tropical weathering for years.',
        'image' => 'assets/images/service-07-painting.jpg',
        'features' => ['Exterior Weather-Proof Elastomeric Coating', 'Interior Luxury Velvet & Royale Emulsion', 'Italian Stucco, Venetian & Texture Finishes', 'Waterproof Putty & Crack-Bridging Treatment']
    ],
    [
        'id' => 'tiles',
        'num' => '08',
        'title' => 'Tiles Fixing & Masonry',
        'short_title' => 'Tiles Fixing',
        'category' => 'systems',
        'category_name' => 'Systems & Maintenance',
        'tag' => 'LASER LEVELING',
        'icon' => 'grid',
        'desc' => 'Laser-guided tiling and masonry installation for large-format slabs, Italian marble, anti-skid bathroom floors, and exterior granite paving with flawless epoxy grouting.',
        'image' => 'assets/images/service-08-tiles.jpg',
        'features' => ['Large-Format Vitrified Slabs (Up to 8x4 ft)', 'Italian Marble & Granite Floor Laying', 'Anti-Skid Outdoor Paver & Bathroom Tiles', 'Stain-Proof Epoxy Grouting & Laser Alignment']
    ],
    [
        'id' => 'doors',
        'num' => '09',
        'title' => 'WPVC Doors & Frames',
        'short_title' => 'WPVC Doors',
        'category' => 'interior',
        'category_name' => 'Interior & Finishes',
        'tag' => '100% WATERPROOF',
        'icon' => 'door-closed',
        'desc' => 'Next-generation Wood Polymer Composite (WPVC) door sets. 100% waterproof, zero termite vulnerability, fire-retardant, and styled with high-definition wood grain embossing.',
        'image' => 'assets/images/service-09-doors.jpg',
        'features' => ['100% Waterproof & Termite-Proof Durability', 'Heavy-Duty Acoustic & Thermal Insulation', 'High-Definition Wood Grain & Matte Textures', 'Stainless Steel Rust-Resistant Hardware Sets']
    ],
    [
        'id' => 'maintenance',
        'num' => '10',
        'title' => 'Complete Home Maintenance',
        'short_title' => 'Maintenance',
        'category' => 'systems',
        'category_name' => 'Systems & Maintenance',
        'tag' => 'SINGLE-WINDOW CARE',
        'icon' => 'wrench',
        'desc' => 'A dependable single-window maintenance team for scheduled preventative upkeep, emergency plumbing/electrical repairs, terrace waterproofing, and residential longevity preservation.',
        'image' => 'assets/images/service-10-maintenance.jpg',
        'features' => ['Annual Preventive Maintenance Plans', 'Terrace & Sunken Slab Waterproofing Fixes', 'Rapid Response Electrical & Plumbing Care', 'General Civil Repairs & Plaster Reconditioning']
    ],
];

// Service Estimates / Pricing System
// Note: As specified, pricing units have not been confirmed, so we clearly display
// "REQUEST A QUOTE" with transparent estimate ranges and easy enquiry actions.
$pricing_plans = [
    [
        'service' => 'Interior Work',
        'estimate' => '₹750 – ₹1,250',
        'unit' => 'Contact for Scope / Unit',
        'desc' => 'Custom woodwork, modular kitchens, false ceilings, lighting and architectural finishes.',
        'popular' => true
    ],
    [
        'service' => 'Home Renovation',
        'estimate' => '₹950',
        'unit' => 'Contact for Scope / Unit',
        'desc' => 'Full space remodeling, structural upgrades, modern room extensions and floor plan updates.',
        'popular' => false
    ],
    [
        'service' => 'Electrical Services',
        'estimate' => '₹180',
        'unit' => 'Contact for Scope / Unit',
        'desc' => 'Concealed wiring, switchboard installation, distribution boards and safety earthing.',
        'popular' => false
    ],
    [
        'service' => 'Carpentry',
        'estimate' => '₹225',
        'unit' => 'Contact for Scope / Unit',
        'desc' => 'Door frames, custom cabinetry, wardrobes, furniture repair and architectural woodwork.',
        'popular' => false
    ],
    [
        'service' => 'Painting',
        'estimate' => '₹4',
        'unit' => 'Contact for Scope / Unit',
        'desc' => 'Primer, two-coat putty preparation, luxury interior emulsion and weatherproof exterior coatings.',
        'popular' => false
    ],
    [
        'service' => 'Tiles Fixing',
        'estimate' => '₹20',
        'unit' => 'Contact for Scope / Unit',
        'desc' => 'Vitrified tile laying, precision laser alignment, bathroom tiling and epoxy grout finish.',
        'popular' => false
    ],
];

// 6 Working Process Steps
$process_steps = [
    [
        'num' => '01',
        'title' => 'Consultation',
        'icon' => 'message-square-text',
        'desc' => 'Understand your vision, project requirements, architectural preferences, and functional expectations.'
    ],
    [
        'num' => '02',
        'title' => 'Site Visit',
        'icon' => 'map-pin',
        'desc' => 'On-site technical evaluation of property layout, structural measurements, soil/site condition, and scope.'
    ],
    [
        'num' => '03',
        'title' => 'Planning',
        'icon' => 'pen-tool',
        'desc' => 'Architectural design, structural drawings, material selection, and milestone schedule finalization.'
    ],
    [
        'num' => '04',
        'title' => 'Estimation',
        'icon' => 'file-spreadsheet',
        'desc' => 'Clear, itemized project quotation with transparent material grades and zero surprise costs.'
    ],
    [
        'num' => '05',
        'title' => 'Execution',
        'icon' => 'hammer',
        'desc' => 'Rigorous construction and craftsmanship carried out by skilled specialists with quality stage-checks.'
    ],
    [
        'num' => '06',
        'title' => 'Completion',
        'icon' => 'key-round',
        'desc' => 'Final quality punch-list inspection, deep clean, and flawless on-schedule project handover.'
    ],
];

// Selected Works / Project Portfolio
$projects = [
    [
        'id' => 1,
        'title' => 'Villa Serene Elevation & Build',
        'category' => 'construction',
        'category_name' => 'Construction',
        'location' => 'Horamavu, Bangalore',
        'image' => 'assets/images/project-1.jpg',
        'scope' => 'G+2 Luxury Residential Villa (3,800 sq.ft)',
        'tags' => ['Turnkey', 'RCC Structure', 'Modern Elevation']
    ],
    [
        'id' => 2,
        'title' => 'Heritage Villa Contemporary Remodel',
        'category' => 'renovation',
        'category_name' => 'Home Renovation',
        'location' => 'Kalyan Nagar, Bangalore',
        'image' => 'assets/images/project-2.jpg',
        'scope' => 'Complete Structural & Interior Overhaul',
        'tags' => ['Full Remodel', 'Kitchen Expansion', 'Facade']
    ],
    [
        'id' => 3,
        'title' => 'Minimalist Nordic Penthouse Living',
        'category' => 'interiors',
        'category_name' => 'Interior Work',
        'location' => 'Indiranagar, Bangalore',
        'image' => 'assets/images/project-3.jpg',
        'scope' => 'Living Room, Modular Kitchen & False Ceiling',
        'tags' => ['Modular Kitchen', 'Warm Lighting', 'Veneer Finish']
    ],
    [
        'id' => 4,
        'title' => 'Contemporary Duplex Living Spaces',
        'category' => 'construction',
        'category_name' => 'Construction',
        'location' => 'Hennur Road, Bangalore',
        'image' => 'assets/images/project-4.jpg',
        'scope' => 'Independent Duplex Home Construction',
        'tags' => ['Independent Home', 'Vitrified Flooring', 'Civil Work']
    ],
    [
        'id' => 5,
        'title' => 'Weather-Shield Exterior & Velvet Interior',
        'category' => 'painting',
        'category_name' => 'Painting',
        'location' => 'Sahakarnagar, Bangalore',
        'image' => 'assets/images/project-5.jpg',
        'scope' => 'Multi-Coat Exterior Weatherproofing & Luxury Interiors',
        'tags' => ['Apex Ultima', 'Royale Glaze', 'Putty Finish']
    ],
    [
        'id' => 6,
        'title' => 'Large-Format Marble & Tile Laying',
        'category' => 'tiles',
        'category_name' => 'Tiles Fixing',
        'location' => 'Whitefield, Bangalore',
        'image' => 'assets/images/project-6.jpg',
        'scope' => '4x2 Laser-Aligned Vitrified Flooring & Designer Baths',
        'tags' => ['Laser Leveling', 'Epoxy Grout', 'Anti-Skid']
    ],
    [
        'id' => 7,
        'title' => 'Teak Wood Paneling & Custom Wardrobes',
        'category' => 'carpentry',
        'category_name' => 'Carpentry',
        'location' => 'Banaswadi, Bangalore',
        'image' => 'assets/images/project-7.jpg',
        'scope' => 'Custom Bedroom Wardrobes & Solid Teak Entry Door',
        'tags' => ['Custom Carpentry', 'Solid Teak', 'Soft-Close Fittings']
    ],
    [
        'id' => 8,
        'title' => 'Full Smart MEP Electrical & Plumbing',
        'category' => 'electrical',
        'category_name' => 'Electrical & Plumbing',
        'location' => 'Ramamurthy Nagar, Bangalore',
        'image' => 'assets/images/project-8.jpg',
        'scope' => 'Concealed 3-Phase Wiring, Pressure Pumps & Sanitary Fixings',
        'tags' => ['Concealed Wiring', 'CPVC Piping', 'Schneider DB']
    ],
];

// Project Filter Categories
$project_categories = [
    'all' => 'All Projects',
    'construction' => 'Construction',
    'renovation' => 'Home Renovation',
    'interiors' => 'Interior Work',
    'painting' => 'Painting',
    'tiles' => 'Tiles Fixing',
    'carpentry' => 'Carpentry',
    'electrical' => 'Electrical & Plumbing'
];

// Video Showcase Items
$video_items = [
    [
        'title' => 'Horamavu Residential Project Site Progress Tour',
        'desc' => 'Watch our engineering team manage foundation quality, RCC slab casting, and laser level checks.',
        'thumb' => 'assets/images/video-thumb-1.jpg',
        'url' => 'https://www.youtube.com/@big_nestbuilders',
        'duration' => 'Official Channel'
    ],
    [
        'title' => 'Complete Modern Interior Transformation Walkthrough',
        'desc' => 'Take a look inside a finished duplex featuring custom woodwork, ambient lighting, and modular kitchen.',
        'thumb' => 'assets/images/video-thumb-2.jpg',
        'url' => 'https://www.youtube.com/@big_nestbuilders',
        'duration' => 'Official Channel'
    ],
    [
        'title' => 'Quality Materials & Structural Finishing Standards',
        'desc' => 'Discover how Big Nest Builders ensures top-tier workmanship across electrical, plumbing, and tiling.',
        'thumb' => 'assets/images/video-thumb-3.jpg',
        'url' => 'https://www.youtube.com/@big_nestbuilders',
        'duration' => 'Official Channel'
    ],
];

// Testimonials (Refined carousel with genuine placeholder structure)
$testimonials = [
    [
        'quote' => 'Big Nest Builders managed our villa construction in Horamavu from initial excavation to handover. Their transparency on material brands and daily progress updates gave us total peace of mind throughout the project.',
        'author' => 'Rajesh & Malini Nair',
        'location' => 'Horamavu, Bangalore',
        'project' => 'Full Home Construction (G+1 Villa)',
        'rating' => 5
    ],
    [
        'quote' => 'We hired Big Nest Builders for complete renovation of our 15-year-old independent home. The team modernized our kitchen, replaced all electrical and plumbing lines, and transformed the front elevation completely.',
        'author' => 'Sridhar Venkatesh',
        'location' => 'Kalyan Nagar, Bangalore',
        'project' => 'Complete Home Renovation',
        'rating' => 5
    ],
    [
        'quote' => 'Finding reliable contractors who handle both civil work and fine interior carpentry under one roof is rare in Bangalore. Big Nest delivered our modular kitchen and wardrobes with exceptional finish.',
        'author' => 'Ananya & Karthik Rao',
        'location' => 'Hennur Road, Bangalore',
        'project' => 'Interior Woodwork & Painting',
        'rating' => 5
    ],
    [
        'quote' => 'Prompt, professional, and clear with pricing. They rectified complex bathroom seepage issues and re-tiled our entire ground floor with laser precision. Highly recommended for home maintenance and civil works.',
        'author' => 'Col. Vijay Joseph (Retd.)',
        'location' => 'Banaswadi, Bangalore',
        'project' => 'Tiles Fixing & Waterproofing',
        'rating' => 5
    ],
];

// 10 FAQs as strictly specified in Part 14
$faqs = [
    [
        'q' => 'What services does Big Nest Builders offer?',
        'a' => 'Big Nest Builders provides complete residential construction, home renovation, interior design and modular woodwork, electrical services, plumbing, carpentry, interior & exterior painting, tiles fixing, WPVC door installation, and ongoing residential maintenance solutions in Bangalore.'
    ],
    [
        'q' => 'Do you undertake complete home construction?',
        'a' => 'Yes. We undertake turnkey residential construction from architectural planning, soil testing, and foundation work to RCC structural construction, brickwork, MEP installations, and premium final handover.'
    ],
    [
        'q' => 'Do you provide home renovation services?',
        'a' => 'Yes. We specialize in comprehensive home renovation, including room layout remodeling, bathroom and kitchen modernization, facade updates, terrace waterproofing, structural reinforcement, and aesthetic upgrades for older properties.'
    ],
    [
        'q' => 'Can I book individual electrical and plumbing services?',
        'a' => 'Yes. While we manage turnkey construction, you can also book our specialized standalone trade teams for electrical rewiring, DB box installation, smart home prep, plumbing repairs, sanitary fixture upgrades, and pressure pump installations.'
    ],
    [
        'q' => 'Do you provide interior work?',
        'a' => 'Yes. We provide complete interior solutions including modular kitchens, custom wardrobes, TV display units, false ceiling with warm ambient lighting, decorative wood paneling, and curated furniture.'
    ],
    [
        'q' => 'How can I request a project quotation?',
        'a' => 'You can request a free quotation by filling out our project enquiry form on this website, calling us directly at +91 96203 64786, or messaging us on WhatsApp with your property details and requirements.'
    ],
    [
        'q' => 'Do you provide painting and tiles fixing?',
        'a' => 'Yes. We offer interior luxury painting, exterior weatherproof wall coating, putty surface preparation, and precision tile laying for living rooms, kitchens, bathrooms, and exterior parking areas.'
    ],
    [
        'q' => 'Do you undertake carpentry and WPVC door installation?',
        'a' => 'Yes. Our carpentry team crafts custom solid wood doors, cabinets, and storage fittings, while our door installation specialists install 100% waterproof and termite-proof WPVC doors and frames for modern homes.'
    ],
    [
        'q' => 'How can I schedule a site visit?',
        'a' => 'Contact us via phone (+91 96203 64786) or click any WhatsApp shortcut on our site. Our engineering supervisor will schedule a convenient date and time to visit your site in Bangalore to assess the property.'
    ],
    [
        'q' => 'How do I contact Big Nest Builders?',
        'a' => 'You can visit our office near Gandhi Statue, Horamavu, Bangalore – 560043, call us at +91 96203 64786, reach us via WhatsApp (+91 96203 64786), or connect with us on our official YouTube channel @big_nestbuilders.'
    ],
];

// Helper functions
function get_youtube_svg($class = 'w-5 h-5') {
    return '<svg class="' . htmlspecialchars($class) . ' fill-current inline-block" viewBox="0 0 24 24" aria-hidden="true"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>';
}

function get_whatsapp_link($service_name = '') {
    $base = SITE_WHATSAPP_URL;
    if (!empty($service_name)) {
        $msg = "Hello Big Nest Builders, I am interested in {$service_name} services. Please share more details.";
    } else {
        $msg = "Hello Big Nest Builders, I am interested in your services. I would like to discuss my requirements. Please contact me.";
    }
    return $base . '?text=' . rawurlencode($msg);
}

