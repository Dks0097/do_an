<?php

namespace Database\Seeders;

use App\Models\Permissions;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionsSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [ 'name' => 'Quản lý', 'group_name' => 'Management' ],
            [ 'name' => 'Nhân viên lễ tân', 'group_name' => 'Front Desk' ],
            [ 'name' => 'Nhân viên phục vụ phòng', 'group_name' => 'Room Service' ],
            [ 'name' => 'Nhân viên bảo vệ', 'group_name' => 'Security' ],
            [ 'name' => 'Nhân viên kế toán ', 'group_name' => 'Accounting' ],
            [ 'name' => 'Nhân viên bảo dưỡng', 'group_name' => 'Maintenance' ],
           
        ];

        foreach ($roles as $role) {
            DB::table('permissions')->insert($role);
        }
    }
}
