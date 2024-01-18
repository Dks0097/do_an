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
            [ 'name' => 'Quản lý', 'guard_name' => 'Admin' ],
            [ 'name' => 'Nhân viên lễ tân', 'guard_name' => 'Front Desk' ],
            [ 'name' => 'Nhân viên phục vụ phòng', 'guard_name' => 'Room Service' ],
            [ 'name' => 'Nhân viên bảo vệ', 'groguard_nameup_name' => 'Security' ],
            [ 'name' => 'Nhân viên kế toán ', 'guard_name' => 'Accounting' ],
            [ 'name' => 'Nhân viên bảo dưỡng', 'guard_name' => 'Maintenance' ],
           
        ];

        foreach ($roles as $role) {
            DB::table('permissions')->insert($role);
        }
    }
}
