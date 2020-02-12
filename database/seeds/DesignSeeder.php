<?php

use App\Models\Bank;
use App\Models\Design;
use Illuminate\Database\Seeder;

class DesignSeeder extends Seeder
{
    public function run()
    {
        Eloquent::unguard();

        $this->createDesigns();
    }

    private function createDesigns()
    {
    	 $designs = [
            ['id' => 1, 'name' => 'Plain', 'user_id' => null, 'company_id' => null, 'is_custom' => false, 'design' => '', 'is_active' => true],
            ['id' => 2, 'name' => 'Clean', 'user_id' => null, 'company_id' => null, 'is_custom' => false, 'design' => '', 'is_active' => true],
            ['id' => 3, 'name' => 'Bold', 'user_id' => null, 'company_id' => null, 'is_custom' => false, 'design' => '', 'is_active' => true],
            ['id' => 4, 'name' => 'Modern', 'user_id' => null, 'company_id' => null, 'is_custom' => false, 'design' => '', 'is_active' => true],
            ['id' => 5, 'name' => 'Business', 'user_id' => null, 'company_id' => null, 'is_custom' => false, 'design' => '', 'is_active' => true],
            ['id' => 6, 'name' => 'Creative', 'user_id' => null, 'company_id' => null, 'is_custom' => false, 'design' => '', 'is_active' => true],
            ['id' => 7, 'name' => 'Elegant', 'user_id' => null, 'company_id' => null, 'is_custom' => false, 'design' => '', 'is_active' => true],
            ['id' => 8, 'name' => 'Hipster', 'user_id' => null, 'company_id' => null, 'is_custom' => false, 'design' => '', 'is_active' => true],
            ['id' => 9, 'name' => 'Playful', 'user_id' => null, 'company_id' => null, 'is_custom' => false, 'design' => '', 'is_active' => true],
            ['id' => 10, 'name' => 'Photo', 'user_id' => null, 'company_id' => null, 'is_custom' => false, 'design' => '', 'is_active' => true],
        ];

        foreach($designs as $design) {

        	$d = Design::find($design['id']);

        	if(!$d)
        		Design::create($design);
        }
        
    }
}