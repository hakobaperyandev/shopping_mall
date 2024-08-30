<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'title' => 'Clothing & Apparel', 
                'description' => 'Stores offering a variety of fashion items, including casual wear, formal wear, and seasonal collections for men, women, and children'
            ],
            [
                'title' => 'Footwear', 
                'description' => 'Shops specializing in shoes, sandals, boots, and other types of footwear for all ages, including athletic, formal, and casual styles'
            ],
            [
                'title' => 'Jewelry & Accessories', 
                'description' => 'Boutiques featuring jewelry, watches, handbags, belts, scarves, and other fashion accessories to complement any outfit'
            ],
            [
                'title' => 'Beauty & Cosmetics', 
                'description' => 'Stores offering skincare, makeup, perfumes, and grooming products, along with beauty services like makeovers and consultations'
            ],
            [
                'title' => 'Electronics & Gadgets', 
                'description' => 'Retailers selling the latest in smartphones, tablets, laptops, gaming consoles, and other electronic devices and accessories'
            ],
            [
                'title' => 'Home Decor & Furniture', 
                'description' => 'Shops that provide furniture, decorative items, lighting, and home accessories to help customers style their living spaces'
            ],
            [
                'title' => 'Books & Stationery', 
                'description' => 'Bookstores and stationery shops offering a wide selection of books, magazines, office supplies, and gifts for book lovers and students'
            ],
            [
                'title' => 'Toys & Games', 
                'description' => 'Stores dedicated to children\'s toys, board games, puzzles, video games, and educational materials'
            ],
            [
                'title' => 'Sports & Fitness', 
                'description' => 'Retailers focusing on sports equipment, athletic wear, gym accessories, and outdoor gear for fitness enthusiasts and athletes'
            ],
            [
                'title' => 'Health & Wellness', 
                'description' => 'Stores and services that promote health, including pharmacies, vitamin shops, organic products, and wellness clinics'
            ],
            [
                'title' => 'Supermarket & Groceries', 
                'description' => 'Large stores offering a wide range of food items, household essentials, and fresh produce'
            ],
            [
                'title' => 'Restaurants & Cafes', 
                'description' => 'A variety of dining options, including sit-down restaurants, cafes, and casual eateries offering diverse cuisines'
            ],
            [
                'title' => 'Fast Food & Snacks', 
                'description' => 'Quick-service outlets offering fast food, snacks, beverages, and on-the-go meals for shoppers in a hurry'
            ],
            [
                'title' => 'Entertainment & Cinema', 
                'description' => 'Multiplex cinemas and entertainment centers offering movies, arcades, and other leisure activities'
            ],
            [
                'title' => 'Technology & Appliances', 
                'description' => 'Stores specializing in home appliances, kitchen gadgets, and the latest tech innovations for the modern home'
            ],
            [
                'title' => 'Gifts & Novelties', 
                'description' => 'Shops offering unique gifts, novelty items, souvenirs, and personalized products for special occasions'
            ],
            [
                'title' => 'Luxury Goods', 
                'description' => 'High-end boutiques featuring designer clothing, luxury accessories, and premium lifestyle products'
            ],
            [
                'title' => 'Optical & Eyewear', 
                'description' => 'Retailers offering prescription glasses, sunglasses, contact lenses, and eye exams'
            ],
            [
                'title' => 'Watches & Timepieces', 
                'description' => 'Specialty stores selling watches, clocks, and timepieces from both luxury and casual brands'
            ],
            [
                'title' => 'Bags & Luggage', 
                'description' => 'Shops offering a wide range of bags, luggage, backpacks, and travel accessories for every need'
            ],
        ];
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
