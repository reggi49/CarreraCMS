<?php

use Illuminate\Database\Seeder;
use App\Permission;
use App\Role;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->truncate();
        //crud posts
        $crudPost = new Permission();
        $crudPost->name = "crud-post";
        $crudPost->save();

        //update other post
        $updateOthersPost = new Permission();
        $updateOthersPost->name = "update-others-post";
        $updateOthersPost->save();

        //delete others post
        $deleteOthersPost = new Permission();
        $deleteOthersPost->name = "delete-others-post";
        $deleteOthersPost->save();

        //crud category
        $crudCategory = new Permission();
        $crudCategory->name = "crud-category";
        $crudCategory->save();

        //crud user
        $crudUser = new permission();
        $crudUser->name = "crud-user";
        $crudUser->save();

        //attach roles permissions
        $admin = Role::whereName('admin')->first();
        $editor = Role::whereName('editor')->first();
        $author = Role::whereName('author')->first();

        $admin->detachPermissions([$crudPost,$updateOthersPost,$deleteOthersPost,$crudCategory,$crudUser]);
        $admin->attachPermissions([$crudPost,$updateOthersPost,$deleteOthersPost,$crudCategory,$crudUser]);
        $editor->detachPermissions([$crudPost,$updateOthersPost,$deleteOthersPost,$crudCategory]);
        $editor->attachPermissions([$crudPost,$updateOthersPost,$deleteOthersPost,$crudCategory]);
        $author->detachPermissions([$crudPost,$updateOthersPost,$deleteOthersPost]);
        $author->attachPermissions([$crudPost,$updateOthersPost,$deleteOthersPost]);
    }
}
