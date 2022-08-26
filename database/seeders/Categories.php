<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class Categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();

        $Categories = [
            ['parent_id'=>null,'slug'=>'clothes-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'clothes-womenclothes-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'clothes-menslug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'clothes-kidsclothes-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'clothes-womenclothes-women-stshirt-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'clothes-womenclothes-women-sjeans-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>' clothes-womenclothes-women-sjacket-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'clothes-womenclothes-women-strouser-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'clothes-womenclothes-women-smatchingsets-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'clothes-womenclothes-bridesdresses-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'clothes-womenclothes-eveningdresses-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'clothes-womenclothes-lingerie-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'clothes-womenclothes-muslimfashion-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'clothes-womenclothes-hijab-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'clothes-menclothes-men-stshirt-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'clothes-menclothes-men-sjacket-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'clothes-menclothes-men-sjeans-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'clothes-menclothes-men-strouser-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'clothes-menclothes-men-smatchingsets-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'clothes-menclothes-tie-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'clothes-kidsclothes-0-12monthbabyclothing-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'clothes-kidsclothes-12-24monthbabyclothing-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'clothes-kidsclothes-3-6yearkidsclothing-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'clothes-kidsclothes-6-12yearkidsclothing-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'clothes-kidsclothes-12-16yearkidsclothing-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'shoes-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'shoes-womenshoes-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'shoes-menshoes-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'shoes-kidsshoes-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'shoes-womenshoes-highheelshoes-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'shoes-womenshoes-flatshoes-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'shoes-womenshoes-sport-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'shoes-womenshoes-boots-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'shoes-womenshoes-cagual-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>' shoes-womenshoes-medicalshoes-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'shoes-womenshoes-sandal-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'shoes-menshoes-formalshoes-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'shoes-menshoes-sport-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'shoes-menshoes-boots-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>' shoes-menshoes-cagual-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'shoes-menshoes-medicalshoes-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'shoes-menshoes-sandal-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'shoes-kidsshoes-sport-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'shoes-kidsshoes-boots-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'shoes-kidsshoes-sandal-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'accessories-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'accessories-sunglasses-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'accessories-watch-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'accessories-neacklace-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'accessories-rings-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'accessories-bracelets-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'accessories-anklets-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'accessories-earrings-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'accessories-luxjewelry-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'leather-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'leather-bags-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'leather-wallets-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'leather-belts-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'leather-other-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'makeupandcosmetic-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'makeupandcosmetic-makeup-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'makeupandcosmetic-cosmeticequipment-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'makeupandcosmetic-haircareproducts-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'makeupandcosmetic-skincareproducts-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'makeupandcosmetic-womensperfumes-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'makeupandcosmetic-mensperfumes-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'makeupandcosmetic-unisexperfumes-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'makeupandcosmetic-lenses-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'homeandoffice-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'homeandoffice-livingrooms-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'homeandoffice-bedrooms-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'homeandoffice-bathroom-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'homeandoffice-kitchen-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'homeandoffice-lighting-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'homeandoffice-office-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'homeandoffice-livingrooms-tables-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'homeandoffice-livingrooms-TVtable-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'homeandoffice-livingrooms-livingroomsofa-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'homeandoffice-livingrooms-homeaccessories-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'homeandoffice-livingrooms-chairs-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'homeandoffice-livingrooms-carpets-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'homeandoffice-livingrooms-curtains-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'homeandoffice-bedrooms-childrensbedrooms-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'homeandoffice-bedrooms-couplebedroom-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'homeandoffice-bedrooms-singlebedroom-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'homeandoffice-bedrooms-cloest-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'homeandoffice-bedrooms-curtains-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'homeandoffice-bedrooms-chidrensoffices-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'homeandoffice-bedrooms-carpets-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'homeandoffice-bathroomaccessories-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'homeandoffice-bathroom-bathroomcloset-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'homeandoffice-bathroom-carpets-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'homeandoffice-bathroom-curtains-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'homeandoffice-kitchen-tables-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'homeandoffice-kitchen-kitchenchairs-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'homeandoffice-kitchen-kitchenaccessories-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'homeandoffice-lighting-chandeliers-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'homeandoffice-lighting-tablelamb-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'homeandoffice-lighting-kitchenlamb-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'homeandoffice-office-desksandchairs-slug','is_active'=>0],
            ['parent_id'=>null,'slug'=>'homeandoffice-office-officeaccessories-slug','is_active'=>0],

        ];

        foreach ($Categories as $key => $value) {
            Category::create($value);
        }
    }
}
