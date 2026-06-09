<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Setting;
use App\Models\AboutUs;
use App\Models\Category;
use App\Models\Product;
use App\Models\Counter;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@technoweb.com',
            'password' => bcrypt('admin123'),
            'role' => 'admin',
            'phone' => '+91-8796265233',
        ]);

        $settings = [
            'company_name' => 'Nitin Hydraulics',
            'company_email' => 'info@nitinhydraulics.com',
            'company_phone' => '+91-8796265233',
            'company_phone2' => '',
            'company_address' => '1805, Industrial Area, Near Pandit Shree Ram Sharma Metro Station',
            'company_city' => 'Bahadurgarh',
            'company_state' => 'Haryana',
            'company_pincode' => '124507',
            'facebook_url' => 'https://facebook.com',
            'instagram_url' => 'https://instagram.com',
            'linkedin_url' => 'https://linkedin.com',
            'youtube_url' => 'https://youtube.com',
            'meta_title' => 'Nitin Hydraulics - Leading Industrial Machine Manufacturers',
            'meta_description' => 'Nitin Hydraulics is a leading manufacturer of Fly Ash Brick Making Machine, Block Making Machine, and other industrial machines.',
            'meta_keywords' => 'fly ash brick machine, block making machine, industrial machines, bahadurgarh',
        ];

        foreach ($settings as $key => $value) {
            Setting::set($key, $value);
        }

        AboutUs::create([
            'title' => 'Welcome to Nitin Hydraulics',
            'description' => "Nitin Hydraulics is a leading manufacturer of industrial machines based in Bahadurgarh, Haryana. We specialize in manufacturing high-quality Fly Ash Brick Making Machines, Block Making Machines, Vibro Forming Tables, Interlocking Brick Making Machines, Pan Mixers, and more. Our machines are known for their durability, efficiency, and superior performance. With years of experience and a team of highly skilled engineers, we strive to provide the best solutions to our customers. We use advanced technology and high-quality materials to ensure our products meet the highest industry standards.",
            'mission' => 'To provide innovative and reliable industrial machines that enhance productivity and efficiency for our customers.',
            'vision' => 'To become a globally recognized leader in industrial machine manufacturing through continuous innovation and customer satisfaction.',
            'video_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
        ]);

        $categories = [
            ['name' => 'Fly Ash Brick Machine', 'slug' => 'fly-ash-brick-machine', 'description' => 'High-quality fly ash brick making machines for efficient brick production.', 'sort_order' => 1],
            ['name' => 'Block Making Machine', 'slug' => 'block-making-machine', 'description' => 'Durable block making machines for concrete block production.', 'sort_order' => 2],
            ['name' => 'Vibro Forming Table', 'slug' => 'vibro-forming-table', 'description' => 'Advanced vibro forming tables for precise brick forming.', 'sort_order' => 3],
            ['name' => 'Interlocking Brick Making Machine', 'slug' => 'interlocking-brick-making-machine', 'description' => 'Specialized machines for interlocking brick production.', 'sort_order' => 4],
            ['name' => 'Pan Mixer', 'slug' => 'pan-mixer', 'description' => 'High-performance pan mixers for mixing raw materials.', 'sort_order' => 5],
        ];

        foreach ($categories as $cat) {
            Category::create($cat);
        }

        $products = [
            ['category_slug' => 'fly-ash-brick-machine', 'name' => 'Techno 24 - Automatic Fly Ash Bricks Making Machine', 'slug' => 'automatic-fly-ash-bricks-making-machine-techno-24', 'short_description' => 'High-capacity automatic fly ash brick making machine with PLC control.', 'features' => "20 Hp Power Hydraulic Motor\n24 Bricks / Per Stroke\n34,000 - 36,000 Bricks/8 Hours (Shift)\nAnti - Brick Crack Mould System\nWater Cooling System\nPLC Control Systems", 'is_featured' => true, 'sort_order' => 1],
            ['category_slug' => 'fly-ash-brick-machine', 'name' => 'Techno 18 - Automatic Fly Ash Brick Plant', 'slug' => 'automatic-fly-ash-brick-plant-techno-18', 'short_description' => 'Semi-automatic fly ash brick plant with high production capacity.', 'features' => "20 Hp Power Hydraulic Motor\n18 Bricks / Per Stroke\n25,000 - 26,000 Bricks/8 Hours (Shift)\nAnti - Brick Crack Mould System\nWater Cooling System\nPLC Control Systems", 'is_featured' => true, 'sort_order' => 2],
            ['category_slug' => 'fly-ash-brick-machine', 'name' => 'Techno 15 - Fly Ash Bricks Making Machine', 'slug' => 'fly-ash-bricks-making-machine-techno-15', 'short_description' => 'Reliable fly ash brick making machine for medium-scale production.', 'features' => "15 Hp Power Hydraulic Motor\n15 Bricks / Per Stroke\n20,000 - 22,000 Bricks/8 Hours (Shift)\nAnti - Brick Crack Mould System", 'is_featured' => true, 'sort_order' => 3],
            ['category_slug' => 'fly-ash-brick-machine', 'name' => 'Techno 12 - Fly Ash Automatic Brick Making Machine', 'slug' => 'fly-ash-automatic-brick-making-machine-techno-12', 'short_description' => 'Compact automatic brick making machine for small to medium production.', 'features' => "12 Hp Power Hydraulic Motor\n12 Bricks / Per Stroke\n16,000 - 18,000 Bricks/8 Hours (Shift)\nAnti - Brick Crack Mould System", 'is_featured' => true, 'sort_order' => 4],
            ['category_slug' => 'fly-ash-brick-machine', 'name' => 'Techno 10 - Fully Automatic Fly Ash Brick Machine', 'slug' => 'fully-automatic-fly-ash-brick-machine-techno-10', 'short_description' => 'Fully automatic brick machine for efficient small-scale production.', 'features' => "10 Hp Power Hydraulic Motor\n10 Bricks / Per Stroke\n12,000 - 14,000 Bricks/8 Hours (Shift)", 'is_featured' => true, 'sort_order' => 5],
            ['category_slug' => 'fly-ash-brick-machine', 'name' => 'Techno 08 - Fly Ash Brick Machine', 'slug' => 'fly-ash-brick-machine-techno-08', 'short_description' => 'Entry-level fly ash brick machine for small businesses.', 'features' => "7.5 Hp Power Hydraulic Motor\n8 Bricks / Per Stroke\n8,000 - 10,000 Bricks/8 Hours (Shift)", 'is_featured' => true, 'sort_order' => 6],
            ['category_slug' => 'block-making-machine', 'name' => 'Concrete Block Making Machine', 'slug' => 'concrete-block-making-machine', 'short_description' => 'Heavy-duty concrete block making machine for various block sizes.', 'features' => "Heavy Duty Structure\nInterchangeable Moulds\nHigh Production Capacity\nLow Maintenance\nEasy Operation", 'is_featured' => true, 'sort_order' => 7],
            ['category_slug' => 'vibro-forming-table', 'name' => 'Vibro Forming Table', 'slug' => 'vibro-forming-table', 'short_description' => 'Precision vibro forming table for consistent brick quality.', 'features' => "High Vibration Frequency\nUniform Compaction\nDurable Construction\nEasy to Operate\nLow Power Consumption", 'is_featured' => true, 'sort_order' => 8],
            ['category_slug' => 'interlocking-brick-making-machine', 'name' => 'Interlocking Brick Machine', 'slug' => 'interlocking-brick-machine', 'short_description' => 'Specialized machine for producing high-quality interlocking bricks.', 'features' => "Hydraulic Pressure System\nInterlocking Mould Design\nHigh Production Rate\nDurable Bricks\nLow Maintenance", 'is_featured' => true, 'sort_order' => 9],
            ['category_slug' => 'pan-mixer', 'name' => 'Pan Mixer 500', 'slug' => 'pan-mixer-500', 'short_description' => '500 KG capacity pan mixer for efficient material mixing.', 'features' => "500 KG Capacity\n15 Hp Motor\nManual Door Operation\nSingle Plate Fabrication", 'is_featured' => true, 'sort_order' => 10],
            ['category_slug' => 'pan-mixer', 'name' => 'Pan Mixer 750', 'slug' => 'pan-mixer-750', 'short_description' => '750 KG capacity pan mixer for medium-scale mixing.', 'features' => "750 KG Capacity\n25 Hp Motor\nManual & Hydraulic Door\nSingle Plate Fabrication", 'is_featured' => true, 'sort_order' => 11],
            ['category_slug' => 'pan-mixer', 'name' => 'Pan Mixer 1000', 'slug' => 'pan-mixer-1000', 'short_description' => '1000 KG capacity heavy-duty pan mixer for large-scale mixing.', 'features' => "1000 KG Capacity\n30 Hp Motor\nManual & Hydraulic Door\nSingle Plate Fabrication\nHeavy Duty Gearbox", 'is_featured' => true, 'sort_order' => 12],
        ];

        foreach ($products as $prod) {
            $category = Category::where('slug', $prod['category_slug'])->first();
            if ($category) {
                Product::create([
                    'category_id' => $category->id,
                    'name' => $prod['name'],
                    'slug' => $prod['slug'],
                    'short_description' => $prod['short_description'],
                    'description' => $prod['short_description'],
                    'features' => $prod['features'],
                    'is_featured' => $prod['is_featured'],
                    'sort_order' => $prod['sort_order'],
                    'status' => true,
                ]);
            }
        }

        Counter::create(['label' => 'Satisfied Clients', 'value' => 324, 'max_value' => 1000, 'sort_order' => 1]);
        Counter::create(['label' => 'Successful Delivery', 'value' => 1288, 'max_value' => 5000, 'sort_order' => 2]);
        Counter::create(['label' => 'Skilled Workers', 'value' => 50, 'max_value' => 200, 'sort_order' => 3]);
        Counter::create(['label' => 'Recurring Orders', 'value' => 800, 'max_value' => 2000, 'sort_order' => 4]);
    }
}
