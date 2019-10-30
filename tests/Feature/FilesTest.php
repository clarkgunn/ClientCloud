<?php

namespace Tests\Feature;

use App\User;
use App\File;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FilesTest extends TestCase
{
    use DatabaseMigrations;

    public function test_user_can_see_their_files(): void
    {
        $this->withoutExceptionHandling();
        // User creates file
        $user = factory(User::class)->create();
        $file1 = factory(File::class)->make();
        $file2 = factory(File::class)->make();
        $user->files()->save($file1);
        $user->files()->save($file2);

        // visit filesystem page, see file.
        $this->actingAs($user)
            ->get('/files')
            ->assertSeeText($file1->name)
            ->assertSeeText($file2->name);
    }
}
